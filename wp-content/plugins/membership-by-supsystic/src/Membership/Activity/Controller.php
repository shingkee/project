<?php

class Membership_Activity_Controller extends Membership_Base_Controller {

	public function getGroupRelatedActivityTypes() {
		return array(
			'group_post',
			'group_user_post',
			'group_created',
		);
	}

	public function postActivity(Rsc_Http_Parameters $parameters) {
		$currentUserId = get_current_user_id();
		$requestedUserId = intval($parameters->get('userId'));
		$postData = $parameters->get('data');

		$usersModule = $this->getModule('users');
		$activityModel = $this->getModel('activity', 'activity');
		$usersModel = $this->getModel('profile', 'users');
		$requestedUser = $usersModel->getUserById($requestedUserId);

		if ($usersModule->currentUserHasPermission('post-activity', $requestedUser)) {

			if ($requestedUserId && ($requestedUserId !== $currentUserId)) {
				$activityId = $activityModel->createActivity(
					$currentUserId, 'related_post', $postData['message'], $requestedUserId
				);
			} else {
				$activityId = $activityModel->createActivity(
					$currentUserId, 'post', $postData['message']
				);
			}

            if (isset($postData['images'])) {
                $this->setActivityImages($activityId, $postData['images']);
            }

			if (isset($postData['link']) && !isset($postData['images'])) {
				$linksModel = $this->getModel('Links', 'Activity');
				$linksModel->setActivityLinkByHash($activityId, $postData['link']);
			}

			if (isset($postData['galleries']) && count($postData['galleries'])) {
				$galleryAttachment = $this->getModel('GalleryAttachment', 'gallery');
				$galleryAttachment->updatePostsFieldInGalleries($postData['galleries'], $activityId);
			}

			if (isset($postData['sliders']) && count($postData['sliders'])) {
				$sliderAttachment = $this->getModel('SliderAttachment', 'slider');
				$sliderAttachment->updatePostsFieldInSliders($postData['sliders'], $activityId);
			}

			if(isset($postData['googleMapsEasy']) && count($postData['googleMapsEasy'])) {
				$googleMapsEasyAttachment = $this->getModel('GoogleMapsEasy', 'Googlemapseasy');
				$googleMapsEasyAttachment->updatePostFieldFor($postData['googleMapsEasy'], $activityId);
			}

			$activities = $activityModel->getActivityById($activityId, $currentUserId);

			return $this->response(
				'ajax',
				array(
					'success' => true,
					'id' => $activityId,
                    'html' => $this->render('@activity/partials/activities.twig', array('activities' => $activities))
				)
			);
		} else {
			return $this->response(
				'ajax',
				array(
					'success' => false
				)
			);
		}
	}

	public function updateActivity(Rsc_Http_Parameters $parameters) {
		$currentUserId = get_current_user_id();
		$activityId = $parameters->get('activityId');
		$postData = $parameters->get('data');
		$attachmentLinkHash = $postData['link'];


		$usersModule = $this->getModule('Users');
		$activityModel = $this->getModel('activity', 'activity');

		$activities = $activityModel->getActivityById($activityId, $currentUserId, array('status' => 'active'));
		$activity = array_shift($activities);
		if ($activity && intval($activity['user_id']) === $currentUserId ||
		    (in_array($activity['type'], $this->getGroupRelatedActivityTypes()) &&
		        $activity['group']['currentUserRole'] == 'administrator') ||
			$usersModule->currentUserCan('edit-activity')
		) {
			$linksModel = $this->getModel('Links', 'Activity');

			if ($attachmentLinkHash !== 'false') {
				$linksModel->setActivityLinkByHash($activityId, $attachmentLinkHash);
			} else {
				if (isset($activity['link'])) {
					$linksModel->removeLink($activityId);
				}
			}

			$activityModel->updateActivityData($activityId, $postData['message']);
			$activities = $activityModel->getActivityById($activityId, $currentUserId);

			return $this->response(
				'ajax',
				array(
					'success' => true,
					'html' => $this->render('@activity/partials/activities.twig', array('activities' => $activities))
				)
			);

		} else {
			return $this->response(
				'ajax',
				array(
					'success' => false
				)
			);
		}
	}

    public function setStatus(Rsc_Http_Parameters $parameters) {
        $currentUserId = get_current_user_id();
        $activityId = $parameters->get('activityId');
        $status = $parameters->get('status');
        $activityModel = $this->getModel('activity', 'activity');

        $activities = $activityModel->getActivityById($activityId, $currentUserId);
        $activity = array_shift($activities);

        if ($activity) {
            $activityModel->updateActivityStatus($activityId, $status);
            $activities = $activityModel->getActivityById($activityId, $currentUserId);
            $activity = array_shift($activities);

            return $this->response(
                'ajax',
                array(
                    'success' => true,
                    'activity' => $activity
                )
            );

        } else {
            return $this->response(
                'ajax',
                array(
                    'success' => false
                )
            );
        }
    }

	public function setActivityImages($activityId, $attachmentsIds) {

        $currentUserId = get_current_user_id();
        $imagesModel = $this->getModel('images', 'base');
        $albumsModel = $this->getModel('albums', 'base');
        $activityModel = $this->getModel('activity', 'activity');

        $images = $imagesModel->createImagesFromAttachments($attachmentsIds, $currentUserId);

        // Create thumbnails
        foreach ($images as $image) {
            $imagesModel->resizeImage($image, 600, 600);
            $imagesModel->resizeImage($image, 300, 300);
        }

        $imagesIds = array();

        foreach ($images as $image) {
            $imagesIds[] = $image['id'];
        }

        $activityModel->setActivityImages($activityId, $imagesIds);
        $activityAlbum = $albumsModel->getUserActivityAlbum($currentUserId);
        $albumsModel->addImages($activityAlbum['id'], $imagesIds);
    }

	public function getActivity(Rsc_Http_Parameters $parameters) {

		$error = null;

		if (!$this->getModule('Users')->currentUserCan('access-to-global-activity-page')) {
			$error = $this->translate('Your account don\'t have permission to see activity page');
		}

		$settings = $this->getModule()->getSettings();

		if ($settings['base']['main']['activity'] === 'false') {
			$error = $this->translate('Community activity is disabled');
		}

		if ($error) {
			return $this->response(
				'ajax',
				array(
					'success' => false,
					'error' => $error,
				)
			);
		}

		$currentUserId = get_current_user_id();
		$limit = min(max($parameters->get('limit', 0), 1), 20);
		$offset = $parameters->get('offset', null);
		$activityFilter = $parameters->get('activityFilter', 'subscriptions');
		$offsetId = $parameters->get('offsetId', null);
		$activityModel = $this->getModel('Activity', 'Activity');
		$activityTypes = $parameters->get('activityTypes', array());

		$activityFilterEnabled = $settings['design']['activity']['show-filter'] === 'true';

		if (!$activityFilterEnabled) {
			$activityFilter = $settings['design']['activity']['default-filter'];
			$activityTypes = $activityModel->getActivityTypesFromSettings($settings['design']['activity']['type']);
		}

		if (! is_user_logged_in() && $activityFilter === 'subscriptions') {
			$activityFilter = 'site-wide';
		}

		if (!is_user_logged_in() || $activityFilter === 'site-wide') {
			$currentUserId = null;
		}

		if ($activityFilter === 'popular') {
			$activities = $activityModel->getPopularActivities(array(
				'since' => 0,
				'limit' => $limit,
				'offset' => $offset,
				'activityTypes' => $activityTypes,
			));
		} else {
			$activities = $activityModel->getActivity(array(
				'userId' => $currentUserId,
				'limit' => $limit,
				'offsetId' => $offsetId,
				'activityTypes' => $activityTypes,
				'activityFilter' => $activityFilter,
			));
		}

		return $this->response(
			'ajax',
			array(
				'success' => true,
				'html' => $this->render(
					'@activity/partials/activities.twig',
					array(
						'activities' => $activities,
					)
				),
			)
		);
	}

    public function likeActivity(Rsc_Http_Parameters $parameters) {

        $activityId = $parameters->get('activityId');
        $currentUserId = get_current_user_id();
        $activityModel = $this->getModel('activity', 'activity');
        $activities = $activityModel->getActivityById($activityId, $currentUserId, array('status' => 'active'));

        if (!$activities) {
	        return $this->response(
		        'ajax',
		        array(
			        'success' => false,
			        'message' => $this->translate('Liked activity is not exist')
		        )
	        );
        }

        $activity = array_shift($activities);

	    if (intval($activity['likes']['likedByCurrentUser']) === 0) {

		    $activityModel->createActivity(
			    $currentUserId, 'like', null, null, null, $activityId
		    );

		    $activities = $activityModel->getActivityLikes($activityId, $currentUserId, 6);

		    return $this->response(
			    'ajax',
			    array(
				    'success' => true,
				    'html' => $this->render(
					    '@activity/partials/activity-action-popup-user.twig',
					    array('activities' => $activities)
				    )
			    )
		    );

	    } else {
		    return $this->response(
			    'ajax',
			    array(
				    'success' => false,
				    'message' => $this->translate('Activity already liked')
			    )
		    );
	    }
    }

    public function unlikeActivity(Rsc_Http_Parameters $parameters) {
        $activityId = $parameters->get('activityId');
        $activityModel = $this->getModel('activity', 'activity');
        $currentUserId = get_current_user_id();
	    $activities = $activityModel->getActivityById($activityId, $currentUserId, array('status' => 'active'));


	    if (!$activities) {
		    return $this->response(
			    'ajax',
			    array(
				    'success' => false,
				    'message' => $this->translate('Liked activity  is not exist')
			    )
		    );
	    }

	    $activity = array_shift($activities);

	    if (intval($activity['likes']['likedByCurrentUser']) !== 0) {

		    $activityModel->unlikeActivity($activityId, $currentUserId);

		    $activities = $activityModel->getActivityLikes($activityId, $currentUserId, 6);

		    return $this->response(
			    'ajax',
			    array(
				    'success' => true,
				    'html' => $this->render(
					    '@activity/partials/activity-action-popup-user.twig',
					    array('activities' => $activities)
				    )
			    )
		    );

	    } else {
		    return $this->response(
			    'ajax',
			    array(
				    'success' => false,
				    'message' => $this->translate('Activity is not liked')
			    )
		    );
	    }
    }

    public function getLikes(Rsc_Http_Parameters $parameters) {

        $activityId = $parameters->get('activityId');
        $limit = min(max($parameters->get('limit', 0), 1), 50);
        $offsetId = $parameters->get('offsetId', null);
        $template = $parameters->get('template', 'modal');
        $currentUserId = get_current_user_id();

        $activityModel = $this->getModel('activity', 'activity');

	    $activities = $activityModel->getActivityLikes($activityId, $currentUserId, $limit, $offsetId);


	    if ($template == 'modal') {
		    $template = '@activity/partials/activity-action-modal-user.twig';
	    } elseif ($template == 'popup') {
		    $template = '@activity/partials/activity-action-popup-user.twig';
	    } else {
		    return $this->response('ajax',
			    array(
				    'success' => false,
				    'message' => $this->translate('Unsupported template.')
			    )
		    );
	    }

        return $this->response('ajax',
            array(
                'success' => true,
                'html' => $this->render($template, array('activities' => $activities))
            )
        );
    }

    public function getShares(Rsc_Http_Parameters $parameters) {

        $activityId = $parameters->get('activityId');
	    $limit = min(max($parameters->get('limit', 0), 1), 50);
	    $offsetId = $parameters->get('offsetId', null);
        $currentUserId = get_current_user_id();
	    $template = $parameters->get('template', 'modal');

        $activityModel = $this->getModel('activity', 'activity');

        $activities = $activityModel->getActivityShares($activityId, $currentUserId, $limit, $offsetId);

	    if ($template == 'modal') {
		    $template = '@activity/partials/activity-action-modal-user.twig';
	    } elseif ($template == 'popup') {
		    $template = '@activity/partials/activity-action-popup-user.twig';
	    } else {
		    return $this->response('ajax',
			    array(
				    'success' => false,
				    'message' => $this->translate('Unsupported template.')
			    )
		    );
	    }

	    return $this->response('ajax',
		    array(
			    'success' => true,
			    'html' => $this->render($template, array('activities' => $activities))
		    )
	    );
    }

	public function shareActivity(Rsc_Http_Parameters $parameters) {

		$activityId = $parameters->get('activityId');
		$currentUserId = get_current_user_id();
		$activityModel = $this->getModel('activity', 'activity');
		$activities = $activityModel->getActivityById($activityId, $currentUserId, array('status' => 'active'));

		if (!$activities) {
			return $this->response(
				'ajax',
				array(
					'success' => false,
					'error' => $this->translate('Shared activity is not exist or user don\'t have read permission to read activity.')
				)
			);
		}

		$activity = array_shift($activities);

		// If share already shared activity
		if (!empty($activity['foreign_id']) && (strpos($activity['type'], 'shared_') !== false)) {
			$activity = $activity['sharedActivity'];
		}

		$shareActivityId = $activityModel->createActivity(
			$currentUserId, 'shared_' . $activity['type'], null, null, null, $activity['id']
		);

		$activities = $activityModel->getActivityShares($activityId, $currentUserId, 6);

		return $this->response('ajax', array(
			'success' => true,
			'html' => $this->render(
				'@activity/partials/activity-action-popup-user.twig',
				array('activities' => $activities)
			)
		));
	}

	public function createComment(Rsc_Http_Parameters $parameters) {

		$activityId = $parameters->get('activityId');
		$commentData = $parameters->get('data');
        $message = $commentData['message'];
		$commentsModel = $this->getModel('comments');
		$currentUserId = get_current_user_id();

		$activityModel = $this->getModel('activity', 'activity');
		$activities = $activityModel->getActivityById($activityId, $currentUserId, array('status' => 'active'));
		$activity = array_shift($activities);

		$allowCommenting = false;

		if ($activity) {

			if (in_array($activity['type'], $this->getGroupRelatedActivityTypes())) {
				$groupsModule = $this->getModule('groups');
				if ($groupsModule->currentUserHasGroupPermission('post-comments', $activity['group'])) {
					$allowCommenting = true;
				}
			} else {
				$usersModule = $this->getModule('users');
				if ($usersModule->currentUserHasPermission('post-comments', $activity['author'])) {
					$allowCommenting = true;
				}
			}
		}

		if (!$allowCommenting) {
			return $this->response('ajax',
				array(
					'success' => false,
					'status' => 403,
					'message' => $this->translate('Comment posting is restricted')
				)
			);
		}

        $targetId = $parameters->get('postAsGroup', null);
        $type = 'activity_comment';

        if ($targetId) {
            $type = 'activity_group_comment';
        }

		$commentId = $activityModel->createActivity($currentUserId, $type, $message, $targetId, $activityId);

        if (isset($commentData['images'])) {
            $this->setActivityImages($commentId, $commentData['images']);
        }

		if (isset($commentData['link']) && !isset($commentData['images'])) {
			$linksModel = $this->getModel('Links', 'Activity');
			$linksModel->setActivityLinkByHash($commentId, $commentData['link']);
		}

		$comments = $commentsModel->getCommentById($commentId, $currentUserId);

		return $this->response('ajax',
			array(
				'success' => true,
				'html' => $this->render('@activity/partials/activity-comments.twig',
					array(
						'comments' => $comments,
						'activity' => $activity
					)
				)
			)
		);
	}

	public function removeActivity(Rsc_Http_Parameters $parameters) {
		$activityId = $parameters->get('activityId');
		$attachmentIds = $parameters->get('attachmentIds');
		$activityModel = $this->getModel('activity', 'activity');
		$usersModule = $this->getModule('Users');
		$currentUserId = get_current_user_id();
		$activities = $activityModel->getActivityById($activityId, $currentUserId, array('status' => 'active'));
		$activity = array_shift($activities);

		if ($activity &&
		    intval($activity['user_id']) === $currentUserId ||
		    ($activity['type'] === 'related_post' && intval($activity['target_id']) === $currentUserId) ||
			$usersModule->currentUserCan('edit-activity')
		) {
			$activityModel->removeActivity($activityId);
			if(is_array($attachmentIds) && count($attachmentIds)) {
				// remove attachment records
				$attachmentModel = $this->getModel('Attachment', 'base');
				$res = $attachmentModel->deleteAttachments($attachmentIds);
			}

			$galleryAttachmentModel = $this->getModel('GalleryAttachment', 'gallery');
			$galleryAttachmentModel->removeGalleryByPostId($activityId);

			$sliderAttachmentModel = $this->getModel('SliderAttachment', 'slider');
			$sliderAttachmentModel->removeSliderByPostId($activityId);

			$googleMapsEasyAttachment = $this->getModel('GoogleMapsEasy', 'Googlemapseasy');
			$googleMapsEasyAttachment->removeMapByPostId($activityId);

			return $this->response('ajax',
				array(
					'success' => true,
				)
			);
		} else {
			return $this->response('ajax', array(
				'success' => false,
				'status' => 405
			));
		}
	}

	public function getComments(Rsc_Http_Parameters $parameters) {

		$activityId = $parameters->get('activityId');
		$limit = min(max($parameters->get('limit', 0), 1), 50);
		$offsetId = $parameters->get('offsetId', null);

		$commentsModel = $this->getModel('comments', 'activity');
		$currentUserId = get_current_user_id();


		$activityModel = $this->getModel('activity', 'activity');
		$activities = $activityModel->getActivityById($activityId, $currentUserId, array('status' => 'active'));
		$activity = array_shift($activities);

		$allowCommenting = false;

		if ($activity) {

			if (in_array($activity['type'], $this->getGroupRelatedActivityTypes())) {
					$allowCommenting = true;
			} else {
				$usersModule = $this->getModule('users');
				if ($usersModule->currentUserHasPermission('view-comments', $activity['author'])) {
					$allowCommenting = true;
				}
			}
		}

		if (!$allowCommenting) {
			return $this->response('ajax',
				array(
					'success' => false,
					'status' => 403,
					'message' => $this->translate('Reading comments is restricted')
				)
			);
		}


		$comments = $commentsModel->getActivityComments($activityId, $currentUserId, $limit, $offsetId);

		return $this->response('ajax',
			array(
				'success' => true,
				'html' => $this->render('@activity/partials/activity-comments.twig',
					array(
						'comments' => $comments,
						'activity' => $activity
					)
				)
			)
		);
	}

	public function replyComment(Rsc_Http_Parameters $parameters) {
		$commentId = $parameters->get('commentId');
		$commentData = $parameters->get('data');

		$commentsModel = $this->getModel('comments', 'activity');
		$currentUserId = get_current_user_id();
		$parentComment = current($commentsModel->getCommentById($commentId, $currentUserId));

		$allowCommenting = false;
		
		if ($parentComment) {
			
			$activityModel = $this->getModel('activity', 'activity');
			$activities = $activityModel->getActivityById($parentComment['object_id'], $currentUserId, array('status' => 'active'));
			$activity = array_shift($activities);

			if ($activity) {

				if (in_array($activity['type'],  $this->getGroupRelatedActivityTypes())) {
					$groupsModule = $this->getModule('groups');
					if ($groupsModule->currentUserHasGroupPermission('post-comments', $activity['group'])) {
						$allowCommenting = true;
					}
				} else {
					$usersModule = $this->getModule('users');
					if ($usersModule->currentUserHasPermission('post-comments', $activity['author'])) {
						$allowCommenting = true;
					}
				}
			}

			if (!$allowCommenting) {

				return $this->response('ajax',
					array(
						'success' => false,
						'status' => 403,
						'message' => $this->translate('Comment posting is restricted')
					)
				);
			}

			$objectId = $activity['id'];
			$foreignId = $parentComment['id'];

			if ($parentComment['foreign_id']) {
				$foreignId = $parentComment['foreign_id'];
			}

			$type = 'activity_comment_reply';

			$targetId = $parameters->get('groupId', null);
			if ($targetId) {
				$type = 'activity_group_comment_reply';
			}

			$commentId = $activityModel->createActivity($currentUserId, $type, $commentData['message'], $targetId, $objectId, $foreignId);

            if (isset($commentData['images'])) {
                $this->setActivityImages($commentId, $commentData['images']);
            }

			if (isset($commentData['link']) && !isset($commentData['images'])) {
				$linksModel = $this->getModel('Links', 'Activity');
				$linksModel->setActivityLinkByHash($commentId, $commentData['link']);
			}

		} else {

			return $this->response('ajax',
				array(
					'success' => false,
					'status' => 403,
					'message' => $this->translate('Parent comment is not exists')
				)
			);
		}

		$comments = $commentsModel->getCommentById($commentId, $currentUserId);

		return $this->response('ajax',
			array(
				'success' => true,
				'html' => $this->render('@activity/partials/activity-comments.twig',
					array(
						'comments' => $comments,
						'activity' => $activity
					)
				)
			)
		);
	}

	public function getCommentReplies(Rsc_Http_Parameters $parameters) {

		$commentId = $parameters->get('commentId');
		$commentsModel = $this->getModel('comments', 'activity');
		$limit = min(max($parameters->get('limit', 0), 1), 50);
		$offsetId = $parameters->get('offsetId', null);

		$currentUserId = get_current_user_id();

		$parentComment = current($commentsModel->getCommentById($commentId, $currentUserId));

		$allowCommenting = false;
		
		if ($parentComment) {

			$activityModel = $this->getModel('activity', 'activity');
			$activities = $activityModel->getActivityById($parentComment['object_id'], $currentUserId, array('status' => 'active'));
			$activity = array_shift($activities);

			if ($activity) {

				if (in_array($activity['type'], $this->getGroupRelatedActivityTypes())) {
						$allowCommenting = true;
				} else {
					$usersModule = $this->getModule('users');
					if ($usersModule->currentUserHasPermission('view-comments', $activity['author'])) {
						$allowCommenting = true;
					}
				}
			}

			if (!$allowCommenting) {
				return $this->response('ajax',
					array(
						'success' => false,
						'status' => 403,
						'message' => $this->translate('Reading comments is restricted')
					)
				);
			}

		} else {

			return $this->response('ajax',
				array(
					'success' => false,
					'status' => 403,
					'message' => $this->translate('Parent comment is not exists')
				)
			);
		}

		$comments = $commentsModel->getCommentReplies($commentId, $currentUserId, $limit, $offsetId);

		return $this->response('ajax',
			array(
				'success' => true,
				'html' => $this->render('@activity/partials/activity-comments.twig',
					array('comments' => $comments)
				)
			)
		);
	}

	public function updateComment(Rsc_Http_Parameters $parameters) {

		$commentId = $parameters->get('commentId');
		$currentUserId = get_current_user_id();
		$commentsModel = $this->getModel('comments', 'activity');
		$activityModel = $this->getModel('activity', 'activity');
		$postData = $parameters->get('data');
		$attachmentLinkHash = $postData['link'];

		$comments = $commentsModel->getCommentById($commentId, $currentUserId);
		$comment = array_shift($comments);

		if (!$comment) {
			return $this->response('ajax',
				array(
					'success' => false,
					'error' => $this->translate('Comment not found.')
				)
			);
		}

		if (intval($comment['user_id']) !== $currentUserId) {
			return $this->response('ajax',
				array(
					'success' => false,
					'status' => 503,
				)
			);
		}

		$linksModel = $this->getModel('Links', 'Activity');

		if ($attachmentLinkHash !== 'false') {
			$linksModel->setActivityLinkByHash($commentId, $attachmentLinkHash);
		} else {
			if (isset($comment['link'])) {
				$linksModel->removeLink($commentId);
			}
		}

		$activityModel->updateActivityData($commentId, $postData['message']);
		$comments = $commentsModel->getCommentById($commentId, $currentUserId);

		return $this->response('ajax',
			array(
				'success' => true,
				'html' => $this->render('@activity/partials/activity-comments.twig',
					array('comments' => $comments)
				)
			)
		);
	}

	public function removeComment(Rsc_Http_Parameters $parameters) {

		$commentId = $parameters->get('commentId');
		$currentUserId = get_current_user_id();
		$activityModel = $this->getModel('activity', 'activity');
		$commentsModel = $this->getModel('comments', 'activity');

		$comment = current($commentsModel->getCommentById($commentId, $currentUserId));
		$activityId = $comment['object_id'];

		$activities = $activityModel->getActivityById($activityId, $currentUserId, array('status' => 'active'));
		$activity = array_shift($activities);

		$success = false;

		if (intval($activity['user_id']) === $currentUserId || intval($comment['user_id']) === $currentUserId) {
			$commentsModel->removeComment($commentId);
			$success = true;
		}

		return $this->response('ajax',
			array(
				'success' => $success
			)
		);
	}

	public function parseUrlAttachment(Rsc_Http_Parameters $parameters) {
		$url = $parameters->get('url');

		if (!preg_match('/\bhttps?:\/\/(?:(?!&[^;]+;)[^\s"\'<>)])+/', $url)) {
			return $this->response('ajax',
				array(
					'success' => false
				)
			);
		}

		$linksModel = $this->getModel('Links');
		$link = $linksModel->parseUrl($url);

		if (!$link) {
			return $this->response('ajax',
				array(
					'success' => false
				)
			);
		}

		return $this->response('ajax',
			array(
				'html' => $this->render(
					'@activity/partials/activity-attachment-link.twig',
					array(
						'link' => $linksModel->prepareData($link),
						'original' => $link
					)
				),
				'success' => true,
			)
		);
	}

	public function search(Rsc_Http_Parameters $parameters) {
		$query = $parameters->get('query');
		$type = $parameters->get('type', null);

		$currentUserId = get_current_user_id();
		$offsetId = $parameters->get('offsetId', null);
		$limit = min(max($parameters->get('limit', 0), 1), 20);
		$activityModel = $this->getModel('activity', 'activity');

		if (!is_user_logged_in()) {
			$currentUserId = null;
		}

		$activities = array();

		if ($query) {
			$activities = $activityModel->searchInActivities($query, $type, $currentUserId, $limit, $offsetId);
		}

		return $this->response(
			'ajax',
			array(
				'success' => true,
				'html' => $this->render('@activity/partials/activities.twig', array('activities' => $activities)),
			)
		);
	}

}
