(function($, Membership) {

	var $createGroupButton = $('.create-group-button'),
		$createGroupModal = $('#create-group-modal'),
		$searchDropdown = $createGroupModal.find('.search.dropdown'),
		$groupName = $createGroupModal.find('[name="name"]'),
		$groupDescription = $createGroupModal.find('[name="description"]'),
		$groupType = $createGroupModal.find('[name="type"]'),
		$searchLoader = $searchDropdown.find('.loader'),
		searchedUsers = [],
		cachedSearches = [],
		searchRequest = false,
		searchLimit = 20;

	$createGroupModal.mpModal({
		onApprove: function ($approveButton) {
			$createGroupModal.find('.actions button').attr('disabled', true);
			$approveButton.addClass('loading');

			var invitedUsers = $searchDropdown.mpDropdown('get value');

			if (invitedUsers.length) {
				invitedUsers = invitedUsers.split(',');
			}

			if (!$groupName.val().length) {
				return false;
			}

			Membership.api.groups.createGroup({
				name: $groupName.val(),
				description: $groupDescription.val(),
				type: $groupType.val(),
				invitedUsers: invitedUsers
			}).then(function(response) {

				$approveButton.removeClass('loading');
					if (response.success) {
						Snackbar.show({text: 'Your group successfully created. Redirecting to you new group...'});
						window.location = response.redirect;
					} else {
						$createGroupModal.find('.actions button').removeAttr('disabled');
					}
				});
			return false;
		},
		onHidden: function () {
			$groupName.val('');
			$groupDescription.val('');
			$groupType.val('open');
			$searchDropdown.mpDropdown('restore defaults');
			$searchDropdown.find('.search').val('');
		}
	});

	function searchUsers(searchQuery) {

		if (searchQuery.length > 2 && cachedSearches.indexOf(searchQuery) === -1) {

			$searchDropdown.mpDropdown('hide');
			$searchLoader.show();
			cachedSearches.push(searchQuery);
			searchRequest = true;

			Membership.api.groups.getUsersToInvite({
				limit: searchLimit,
				search: searchQuery,
				template: 'search-dropdown'
			}).then(function(response) {
				if (response.success) {
					var $users = $(response.html);
					$users.each(function() {
						var $user = $(this),
							userId = $user.attr('data-value');

						if (searchedUsers.indexOf(userId) === -1) {
							$usersList.append($user);
						}
					});

					searchRequest = false;
					$searchDropdown.mpDropdown('refresh');
					$searchDropdown.mpDropdown('show');
				}

				$searchLoader.hide();
			});
		}
	}

	$searchDropdown.mpDropdown({
		onLabelCreate: function(value, text) {
			$searchDropdown.mpDropdown('hide');
			return $('<div>' + text + '</div>').find('.mp-user-label');
		},
		onChange: function(value, text, $selectedItem) {
			if (typeof $selectedItem === 'string') {
				$searchDropdown.mpDropdown('hide');
			}
		},
		onNoResults: function(searchValue) {
			return !(searchValue.length < 2 || self.searchUsersRequest);
		},
		context: $createGroupModal,
		forceSelection: false,
		minCharacters: 0,
		maxSelections: 10,
		fullTextSearch: false
	});

	var $usersList = $searchDropdown.find('.menu.list');

	$usersList.children().each(function() {
		searchedUsers.push($(this).attr('data-value'));
	});

	$searchDropdown.find('.search').on('keyup', Membership.helpers.debounce(function() {
		searchUsers(this.value);
	}, 1000));

	$createGroupButton.on('click', function() {
		$createGroupModal.mpModal('show');
	})

})(jQuery, Membership);