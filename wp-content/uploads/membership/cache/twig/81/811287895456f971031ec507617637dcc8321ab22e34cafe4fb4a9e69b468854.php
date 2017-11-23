<?php

/* @groups/group.twig */
class __TwigTemplate_da8319ee91d780f3036323f246045e0edc3cf7f05a18e5fa4124b02af21c1053 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div id=\"mp-group\" class=\"sc-membership\">
\t";
        // line 2
        if (( !$this->getAttribute(($context["requestedGroup"] ?? null), "isBlocked", array()) || call_user_func_array($this->env->getFunction('currentUserCan')->getCallable(), array("can-block-groups")))) {
            // line 3
            echo "\t\t<div class=\"mp-cover-container\">
\t\t\t<div class=\"ui inverted dimmer cover-loader\">
\t\t\t\t<div class=\"ui loader\"></div>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"mp-cover\">
\t\t\t\t<img width=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "groups", array()), "cover-size", array(), "array"), "width", array()), "html", null, true);
            echo "\"
\t\t\t\t     height=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "groups", array()), "cover-size", array(), "array"), "height", array()), "html", null, true);
            echo "\"
\t\t\t\t     class=\"ui fluid image cover-image\"
\t\t\t\t     src=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('Membership_Groups_Twig')->groupsCover(($context["requestedGroup"] ?? null), "default"), "html", null, true);
            echo "\">
\t\t\t</div>
\t\t\t
\t\t\t";
            // line 15
            if ($this->env->getExtension('Membership_Groups_Twig')->canEditGroup(($context["requestedGroup"] ?? null))) {
                // line 16
                echo "\t\t\t\t<div class=\"mp-update-cover ";
                if ($this->env->getExtension('Membership_Groups_Twig')->isDefaultGroupCover(($context["requestedGroup"] ?? null))) {
                    echo "default";
                }
                echo "\">
\t\t\t\t\t<div class=\"ui top right pointing dropdown item\">
\t\t\t\t\t\t<i class=\"photo icon\"></i>
\t\t\t\t\t\t<div class=\"menu\">
\t\t\t\t\t\t\t<a class=\"item\" data-action=\"upload-photo\">";
                // line 20
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Upload photo")), "html", null, true);
                echo "</a>
\t\t\t\t\t\t\t<a class=\"item\" data-action=\"remove-photo\">";
                // line 21
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Remove")), "html", null, true);
                echo "</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"mp-crop-cover-action\">
\t\t\t\t\t<button class=\"ui mini primary button\" data-action=\"save-photo\">";
                // line 27
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Save")), "html", null, true);
                echo "</button>
\t\t\t\t\t<button class=\"ui mini secondary button\" data-action=\"cancel\">";
                // line 28
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Cancel")), "html", null, true);
                echo "</button>
\t\t\t\t</div>
\t\t\t";
            }
            // line 31
            echo "\t\t\t
\t\t\t<div class=\"mp-group-display-name\">";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute(($context["requestedGroup"] ?? null), "name", array()), "html", null, true);
            echo "</div>
\t\t\t
\t\t\t<div class=\"mp-logo-container\">
\t\t\t\t<div class=\"mp-logo ";
            // line 35
            if ($this->env->getExtension('Membership_Groups_Twig')->isDefaultGroupLogo(($context["requestedGroup"] ?? null))) {
                echo "default";
            }
            echo " update-logo-menu\">
\t\t\t\t\t<img width=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "groups", array()), "logo-size", array(), "array"), "width", array()), "html", null, true);
            echo "\"
\t\t\t\t\t     height=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "groups", array()), "logo-size", array(), "array"), "height", array()), "html", null, true);
            echo "\"
\t\t\t\t\t     src=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Membership_Groups_Twig')->groupsLogo(($context["requestedGroup"] ?? null), "default"), "html", null, true);
            echo "\"
\t\t\t\t\t     class=\"logo-image\">
\t\t\t\t\t";
            // line 40
            if ($this->env->getExtension('Membership_Groups_Twig')->canEditGroup(($context["requestedGroup"] ?? null))) {
                // line 41
                echo "\t\t\t\t\t\t<div class=\"mp-update-logo-overlay\">
\t\t\t\t\t\t\t<span>";
                // line 42
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Change logo image")), "html", null, true);
                echo "</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"ui inverted dimmer logo-loader\">
\t\t\t\t\t\t\t<div class=\"ui loader\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"ui top left pointing dropdown item\">
\t\t\t\t\t\t\t<div class=\"menu\">
\t\t\t\t\t\t\t\t<a class=\"item\" data-action=\"upload-logo\">";
                // line 49
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Upload logo")), "html", null, true);
                echo "</a>
\t\t\t\t\t\t\t\t<a class=\"item\" data-action=\"remove-logo\">";
                // line 50
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Remove")), "html", null, true);
                echo "</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 54
            echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t
\t\t";
            // line 58
            if ($this->getAttribute(($context["requestedGroup"] ?? null), "currentUserIsBanned", array())) {
                // line 59
                echo "\t\t\t<div class=\"ui negative message\">
\t\t\t\t<p>";
                // line 60
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("You are is blocked by group administrator")), "html", null, true);
                echo "</p>
\t\t\t</div>
\t\t";
            } else {
                // line 63
                echo "\t\t\t";
                if (($context["userLoggedIn"] ?? null)) {
                    // line 64
                    echo "\t\t\t\t<div class=\"ui secondary mini menu mp-group-action-menu\">
\t\t\t\t\t<div class=\"right menu\" style=\"display: none\">
\t\t\t\t\t\t";
                    // line 66
                    if ($this->env->getExtension('Membership_Groups_Twig')->canSendJoinRequest(($context["requestedGroup"] ?? null))) {
                        // line 67
                        echo "\t\t\t\t\t\t\t<div class=\"horizontally fitted item\">
\t\t\t\t\t\t\t\t<button class=\"ui mini primary button\" data-action=\"send-request\">";
                        // line 68
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Send a request")), "html", null, true);
                        echo "
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                    }
                    // line 72
                    echo "\t\t\t\t\t\t";
                    if ($this->env->getExtension('Membership_Groups_Twig')->canCancelJoinRequest(($context["requestedGroup"] ?? null))) {
                        // line 73
                        echo "\t\t\t\t\t\t\t<div class=\"horizontally fitted item\">
\t\t\t\t\t\t\t\t<button class=\"ui mini primary button\" data-action=\"cancel-request\">";
                        // line 74
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Cancel request")), "html", null, true);
                        echo "
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                    }
                    // line 78
                    echo "\t\t\t\t\t\t";
                    if ($this->env->getExtension('Membership_Groups_Twig')->canJoinGroup(($context["requestedGroup"] ?? null))) {
                        // line 79
                        echo "\t\t\t\t\t\t\t<div class=\"horizontally fitted item\">
\t\t\t\t\t\t\t\t<button class=\"ui mini primary button\" data-action=\"join-group\">";
                        // line 80
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Join group")), "html", null, true);
                        echo "</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                    }
                    // line 83
                    echo "\t\t\t\t\t\t";
                    if ($this->env->getExtension('Membership_Groups_Twig')->canLeaveGroup(($context["requestedGroup"] ?? null))) {
                        // line 84
                        echo "\t\t\t\t\t\t\t<div class=\"horizontally fitted item\">
\t\t\t\t\t\t\t\t<button class=\"ui mini primary button\" data-action=\"leave-group\">";
                        // line 85
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Leave group")), "html", null, true);
                        echo "</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                    }
                    // line 88
                    echo "\t\t\t\t\t\t";
                    if ($this->env->getExtension('Membership_Groups_Twig')->canFollowGroup(($context["requestedGroup"] ?? null))) {
                        // line 89
                        echo "\t\t\t\t\t\t\t<div class=\"horizontally fitted item\">
\t\t\t\t\t\t\t\t<button class=\"ui mini primary button\" data-action=\"follow\">";
                        // line 90
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Follow")), "html", null, true);
                        echo "</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                    }
                    // line 93
                    echo "\t\t\t\t\t\t";
                    if ($this->env->getExtension('Membership_Groups_Twig')->canUnfollowGroup(($context["requestedGroup"] ?? null))) {
                        // line 94
                        echo "\t\t\t\t\t\t\t<div class=\"horizontally fitted item\">
\t\t\t\t\t\t\t\t<button class=\"ui mini primary button\" data-action=\"unfollow\">";
                        // line 95
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Unfollow")), "html", null, true);
                        echo "</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                    }
                    // line 98
                    echo "\t\t\t\t\t\t";
                    if ($this->env->getExtension('Membership_Groups_Twig')->canInviteToGroup(($context["requestedGroup"] ?? null))) {
                        // line 99
                        echo "\t\t\t\t\t\t\t<div class=\"horizontally fitted item\">
\t\t\t\t\t\t\t\t<button class=\"ui mini primary button\" data-action=\"invite-users\">";
                        // line 100
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Invite friends")), "html", null, true);
                        echo "
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                    }
                    // line 104
                    echo "\t\t\t\t\t\t
\t\t\t\t\t\t";
                    // line 105
                    if ($this->env->getExtension('Membership_Groups_Twig')->canEditGroup(($context["requestedGroup"] ?? null))) {
                        // line 106
                        echo "\t\t\t\t\t\t\t<div class=\"horizontally fitted item\">
\t\t\t\t\t\t\t\t<button class=\"ui mini primary button\" data-action=\"invite-administrators\">";
                        // line 107
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Invite
\t\t\t\t\t\t\t\t\tadministrators")), "html", null, true);
                        // line 108
                        echo "
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                    }
                    // line 112
                    echo "\t\t\t\t\t\t";
                    if (call_user_func_array($this->env->getFunction('currentUserCan')->getCallable(), array("can-block-groups"))) {
                        // line 113
                        echo "\t\t\t\t\t\t\t<div class=\"horizontally fitted item\">
\t\t\t\t\t\t\t\t";
                        // line 114
                        if ( !$this->getAttribute(($context["requestedGroup"] ?? null), "isBlocked", array())) {
                            // line 115
                            echo "\t\t\t\t\t\t\t\t\t<button class=\"ui mini primary button\" data-action=\"block\">";
                            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Block group")), "html", null, true);
                            echo "</button>
\t\t\t\t\t\t\t\t";
                        } else {
                            // line 117
                            echo "\t\t\t\t\t\t\t\t\t<button class=\"ui mini primary button\" data-action=\"unblock\">";
                            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Unblock group")), "html", null, true);
                            echo "</button>
\t\t\t\t\t\t\t\t";
                        }
                        // line 119
                        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                    }
                    // line 121
                    echo "\t\t\t\t\t\t<div class=\"ui dropdown item\">
\t\t\t\t\t\t\t<i class=\"ellipsis vertical icon\"></i>
\t\t\t\t\t\t\t<div class=\"menu\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
                } else {
                    // line 128
                    echo "\t\t\t\t<div class=\"ui secondary mini menu mp-group-action-menu\">
\t\t\t\t\t<div class=\"right menu\" style=\"display: none\">
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"horizontally fitted item\">
\t\t\t\t\t\t\t";
                    // line 132
                    if (($this->getAttribute($this->getAttribute(($context["group"] ?? null), "settings", array()), "type", array()) == "open")) {
                        // line 133
                        echo "\t\t\t\t\t\t\t\t<button class=\"ui mini primary button\" data-action=\"login\">";
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Join group")), "html", null, true);
                        echo "</button>
\t\t\t\t\t\t\t";
                    } else {
                        // line 135
                        echo "\t\t\t\t\t\t\t\t<button class=\"ui mini primary button\" data-action=\"login\">";
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Send a request")), "html", null, true);
                        echo "</button>
\t\t\t\t\t\t\t";
                    }
                    // line 137
                    echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"horizontally fitted item\">
\t\t\t\t\t\t\t<button class=\"ui mini primary button\" data-action=\"login\">";
                    // line 139
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Follow")), "html", null, true);
                    echo "</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
                }
                // line 144
                echo "\t\t\t
\t\t\t";
                // line 145
                if (($this->getAttribute(($context["requestedGroup"] ?? null), "isBlocked", array()) && call_user_func_array($this->env->getFunction('currentUserCan')->getCallable(), array("can-block-groups")))) {
                    // line 146
                    echo "\t\t\t\t<div class=\"ui negative message\">
\t\t\t\t\t<p>";
                    // line 147
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Group is blocked")), "html", null, true);
                    echo "</p>
\t\t\t\t</div>
\t\t\t";
                }
                // line 150
                echo "
            ";
                // line 151
                if (((($this->getAttribute($this->getAttribute(($context["requestedGroup"] ?? null), "settings", array()), "read-activity", array(), "array") == "members-only") && ($this->getAttribute(($context["requestedGroup"] ?? null), "currentUserIsFollowing", array()) == true)) || ($this->getAttribute($this->getAttribute(($context["requestedGroup"] ?? null), "settings", array()), "read-activity", array(), "array") == "all"))) {
                    // line 152
                    echo "                <div class=\"mp-group-nav-menu\">
                    <div class=\"ui secondary pointing menu profile-nav-menu\">

                        ";
                    // line 155
                    $context["menuItems"] = array("activity" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Activity")), "members" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Members")));
                    // line 159
                    echo "
                        ";
                    // line 160
                    if ($this->env->getExtension('Membership_Groups_Twig')->canEditGroup(($context["requestedGroup"] ?? null))) {
                        // line 161
                        echo "                            ";
                        $context["menuItems"] = twig_array_merge(($context["menuItems"] ?? null), array("settings" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Settings"))));
                        // line 162
                        echo "                        ";
                    }
                    // line 163
                    echo "
                        ";
                    // line 164
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["menuItems"] ?? null));
                    foreach ($context['_seq'] as $context["id"] => $context["title"]) {
                        // line 165
                        echo "                            ";
                        $context["url"] = call_user_func_array($this->env->getFunction('groupUrl')->getCallable(), array(($context["requestedGroup"] ?? null), array("action" => $context["id"])));
                        // line 166
                        echo "                            <a class=\"item ";
                        if ((($context["action"] ?? null) == $context["id"])) {
                            echo " active";
                        }
                        echo "\" href=\"";
                        echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
                        echo "\">
                                ";
                        // line 167
                        echo twig_escape_filter($this->env, $context["title"], "html", null, true);
                        echo " ";
                        if (twig_in_filter($context["id"], twig_get_array_keys_filter(($context["unreadNotifications"] ?? null)))) {
                            // line 168
                            echo "                                    <div class=\"ui mini label red\">";
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["unreadNotifications"] ?? null), $context["id"], array(), "array"), "html", null, true);
                            echo "</div>";
                        }
                        // line 169
                        echo "                            </a>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['id'], $context['title'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 171
                    echo "
                    </div>
                </div>

                <div class=\"ui modal sc-membership\" id=\"logo-modal\">
                    <i class=\"close icon\"></i>
                    <div class=\"header\">";
                    // line 177
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Group logo picture")), "html", null, true);
                    echo "</div>
                    <div class=\"content\">
                        <div class=\"ui basic segment blurring logo-image-container\">
                            <div class=\"ui inverted dimmer\">
                                <div class=\"ui loader\"></div>
                            </div>
                            <div class=\"mp-logo-modal-image\">
                                <img class=\"logo-modal-image\">
                            </div>
                        </div>
                    </div>
                    <div class=\"actions\">
                        <button class=\"ui mini secondary button cancel\" data-action=\"cancel\">";
                    // line 189
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Cancel")), "html", null, true);
                    echo "</button>
                        <button class=\"ui mini primary button primary\" data-action=\"save-photo\">";
                    // line 190
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Save")), "html", null, true);
                    echo "</button>
                    </div>
                </div>

                <div class=\"ui modal long\" id=\"invite-administrators-modal\">
                    <i class=\"close icon\"></i>
                    <div class=\"header\">";
                    // line 196
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Invite administrators")), "html", null, true);
                    echo "</div>
                    <div class=\"content\">
                        <div class=\"ui basic vertical segment form users-search-input\">
                            <div class=\"ui fluid icon input\">
                                <input type=\"text\" placeholder=\"";
                    // line 200
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Find user...")), "html", null, true);
                    echo "\">
                                <i class=\"search icon\"></i>
                            </div>
                        </div>
                        <div class=\"ui two stackable cards users-list\">
                            ";
                    // line 205
                    $this->loadTemplate("@groups/partials/invite-modal-users.twig", "@groups/group.twig", 205)->display(array_merge($context, array("users" => ($context["usersToInvite"] ?? null))));
                    // line 206
                    echo "                        </div>
                        <div class=\"ui basic segment very padded list-loader\" style=\"display:none;\">
                            <div class=\"ui active loader\"></div>
                        </div>
                    </div>
                </div>

                <div class=\"ui modal long\" id=\"invite-users-modal\">
                    <i class=\"close icon\"></i>
                    <div class=\"header\">";
                    // line 215
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Invite users")), "html", null, true);
                    echo "</div>

                    <div class=\"content\">
                        <div class=\"ui basic vertical segment form users-search-input\">
                            <div class=\"ui fluid icon input\">
                                <input type=\"text\" placeholder=\"";
                    // line 220
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Find user...")), "html", null, true);
                    echo "\">
                                <i class=\"search icon\"></i>
                            </div>
                        </div>
                        <div class=\"ui two stackable cards users-list\">
                            ";
                    // line 225
                    $this->loadTemplate("@groups/partials/invite-modal-users.twig", "@groups/group.twig", 225)->display(array_merge($context, array("users" => ($context["usersToInvite"] ?? null))));
                    // line 226
                    echo "                        </div>
                        <div class=\"ui basic segment very padded list-loader\" style=\"display:none;\">
                            <div class=\"ui active loader\"></div>
                        </div>
                    </div>
                </div>
                ";
                    // line 232
                    $this->displayBlock('content', $context, $blocks);
                    // line 233
                    echo "            ";
                } else {
                    // line 234
                    echo "                <div class=\"ui negative message\">
                    <p>";
                    // line 235
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Access to this page is restricted.")), "html", null, true);
                    echo "</p>
                </div>
            ";
                }
                // line 238
                echo "

\t\t";
            }
            // line 241
            echo "\t
\t";
        } else {
            // line 243
            echo "\t\t<div class=\"ui negative message\">
\t\t\t<p>";
            // line 244
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Group is blocked by administrator")), "html", null, true);
            echo "</p>
\t\t</div>
\t";
        }
        // line 247
        echo "\t
\t";
        // line 248
        if ( !($context["userLoggedIn"] ?? null)) {
            // line 249
            echo "\t\t";
            $this->loadTemplate("@auth/partials/login-modal.twig", "@groups/group.twig", 249)->display($context);
            // line 250
            echo "\t";
        }
        // line 251
        echo "</div>";
    }

    // line 232
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "@groups/group.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  538 => 232,  534 => 251,  531 => 250,  528 => 249,  526 => 248,  523 => 247,  517 => 244,  514 => 243,  510 => 241,  505 => 238,  499 => 235,  496 => 234,  493 => 233,  491 => 232,  483 => 226,  481 => 225,  473 => 220,  465 => 215,  454 => 206,  452 => 205,  444 => 200,  437 => 196,  428 => 190,  424 => 189,  409 => 177,  401 => 171,  394 => 169,  389 => 168,  385 => 167,  376 => 166,  373 => 165,  369 => 164,  366 => 163,  363 => 162,  360 => 161,  358 => 160,  355 => 159,  353 => 155,  348 => 152,  346 => 151,  343 => 150,  337 => 147,  334 => 146,  332 => 145,  329 => 144,  321 => 139,  317 => 137,  311 => 135,  305 => 133,  303 => 132,  297 => 128,  288 => 121,  284 => 119,  278 => 117,  272 => 115,  270 => 114,  267 => 113,  264 => 112,  258 => 108,  255 => 107,  252 => 106,  250 => 105,  247 => 104,  240 => 100,  237 => 99,  234 => 98,  228 => 95,  225 => 94,  222 => 93,  216 => 90,  213 => 89,  210 => 88,  204 => 85,  201 => 84,  198 => 83,  192 => 80,  189 => 79,  186 => 78,  179 => 74,  176 => 73,  173 => 72,  166 => 68,  163 => 67,  161 => 66,  157 => 64,  154 => 63,  148 => 60,  145 => 59,  143 => 58,  137 => 54,  130 => 50,  126 => 49,  116 => 42,  113 => 41,  111 => 40,  106 => 38,  102 => 37,  98 => 36,  92 => 35,  86 => 32,  83 => 31,  77 => 28,  73 => 27,  64 => 21,  60 => 20,  50 => 16,  48 => 15,  42 => 12,  37 => 10,  33 => 9,  25 => 3,  23 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@groups/group.twig", "/Users/shingkeelau/Public/web/wp-content/plugins/membership-by-supsystic/src/Membership/Groups/views/group.twig");
    }
}
