<?php

/* @users/profile.twig */
class __TwigTemplate_4314c9c181ff065aab829824ac94dec01bb18630c15b6b7b91adbb6c7aca19e8 extends Twig_Template
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
        echo "<div id=\"membership-profile\" class=\"sc-membership\">
    <div class=\"mp-cover-container\">
        <div class=\"ui inverted dimmer cover-loader\">
            <div class=\"ui loader\"></div>
        </div>

        <div class=\"mp-cover\">
            <img width=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "profile", array()), "cover-size", array(), "array"), "width", array()), "html", null, true);
        echo "\"
                 height=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "profile", array()), "cover-size", array(), "array"), "height", array()), "html", null, true);
        echo "\"
                 class=\"ui fluid image cover-image\"
                 src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Membership_Users_Twig')->userCover((isset($context["requestedUser"]) ? $context["requestedUser"] : null), "default"), "html", null, true);
        echo "\">
        </div>

        ";
        // line 14
        if (($this->env->getExtension('Membership_Users_Twig')->isCurrentUser((isset($context["requestedUser"]) ? $context["requestedUser"] : null)) && (isset($context["unreadNotifications"]) ? $context["unreadNotifications"] : null))) {
            // line 15
            echo "            <div class=\"mp-unread-notifications\">
                <a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Membership_Users_Twig')->profileUrl((isset($context["requestedUser"]) ? $context["requestedUser"] : null), array("action" => "notifications")), "html", null, true);
            echo "\"><i class=\"alarm icon\"></i></a>
            </div>
        ";
        }
        // line 19
        echo "
        ";
        // line 20
        if ($this->env->getExtension('Membership_Users_Twig')->isCurrentUser((isset($context["requestedUser"]) ? $context["requestedUser"] : null))) {
            // line 21
            echo "            <div class=\"mp-update-cover ";
            if ($this->env->getExtension('Membership_Users_Twig')->isDefaultCover((isset($context["requestedUser"]) ? $context["requestedUser"] : null))) {
                echo "default";
            }
            echo "\">
                <div class=\"ui top right pointing dropdown item\">
                    <i class=\"photo icon\"></i>
                    <div class=\"menu\">
                        <a class=\"item\" data-action=\"upload-photo\">";
            // line 25
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Upload photo")), "html", null, true);
            echo "</a>
                        <a class=\"item\" data-action=\"remove-photo\">";
            // line 26
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Remove")), "html", null, true);
            echo "</a>
                    </div>
                </div>
            </div>

            <div class=\"mp-crop-cover-action\">
                <button class=\"ui mini primary button\" data-action=\"save-photo\">";
            // line 32
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Save")), "html", null, true);
            echo "</button>
                <button class=\"ui mini secondary button\" data-action=\"cancel\">";
            // line 33
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Cancel")), "html", null, true);
            echo "</button>
            </div>
        ";
        }
        // line 36
        echo "
        <div class=\"mp-user-display-name\">";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["requestedUser"]) ? $context["requestedUser"] : null), "displayName", array()), "html", null, true);
        echo "</div>

        <div class=\"mp-avatar-container\">
            <div class=\"mp-avatar ";
        // line 40
        if ($this->env->getExtension('Membership_Users_Twig')->isDefaultAvatar((isset($context["requestedUser"]) ? $context["requestedUser"] : null))) {
            echo "default";
        }
        echo " update-avatar-menu\">
                <img width=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "profile", array()), "avatar-size", array(), "array"), "width", array()), "html", null, true);
        echo "\"
                     height=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "profile", array()), "avatar-size", array(), "array"), "height", array()), "html", null, true);
        echo "\"
                     src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Membership_Users_Twig')->userAvatar((isset($context["requestedUser"]) ? $context["requestedUser"] : null), "default"), "html", null, true);
        echo "\"
                     class=\"avatar-image\">
                ";
        // line 45
        if ($this->env->getExtension('Membership_Users_Twig')->isCurrentUser((isset($context["requestedUser"]) ? $context["requestedUser"] : null))) {
            // line 46
            echo "                    <div class=\"mp-update-avatar-overlay\">
                        <span>";
            // line 47
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Change profile image")), "html", null, true);
            echo "</span>
                    </div>
                    <div class=\"ui inverted dimmer avatar-loader\">
                        <div class=\"ui loader\"></div>
                    </div>
                    <div class=\"ui top left pointing dropdown item\">
                        <div class=\"menu\">
                            <a class=\"item\" data-action=\"upload-photo\">";
            // line 54
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Upload photo")), "html", null, true);
            echo "</a>
                            <a class=\"item\" data-action=\"remove-photo\">";
            // line 55
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Remove")), "html", null, true);
            echo "</a>
                        </div>
                    </div>
                ";
        }
        // line 59
        echo "            </div>
        </div>
    </div>
    <div class=\"mp-container\">
        <div class=\"mp-profile-social-stats social-stats ";
        // line 63
        if ( !(isset($context["userLoggedIn"]) ? $context["userLoggedIn"] : null)) {
            echo "not-logged-in";
        }
        echo "\">
\t         ";
        // line 64
        if ((isset($context["friendsActive"]) ? $context["friendsActive"] : null)) {
            // line 65
            echo "\t             <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Membership_Users_Twig')->profileUrl((isset($context["requestedUser"]) ? $context["requestedUser"] : null), array("action" => "friends")), "html", null, true);
            echo "\" class=\"ui statistic tiny\">
\t                 <div class=\"value mp-social-stats-friends\">";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["requestedUser"]) ? $context["requestedUser"] : null), "friends", array()), "html", null, true);
            echo "</div>
\t                 <div class=\"label\">";
            // line 67
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Friends")), "html", null, true);
            echo "</div>
\t             </a>
\t         ";
        }
        // line 70
        echo "\t         ";
        if ((isset($context["followersActive"]) ? $context["followersActive"] : null)) {
            // line 71
            echo "\t             <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Membership_Users_Twig')->profileUrl((isset($context["requestedUser"]) ? $context["requestedUser"] : null), array("action" => "followers")), "html", null, true);
            echo "\" class=\"ui statistic tiny\">
\t                 <div class=\"value mp-social-stats-follows\">";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["requestedUser"]) ? $context["requestedUser"] : null), "follows", array()), "html", null, true);
            echo "</div>
\t                 <div class=\"label\">";
            // line 73
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Follows")), "html", null, true);
            echo "</div>
\t             </a>
\t         ";
        }
        // line 76
        echo "\t         ";
        if ((isset($context["followersActive"]) ? $context["followersActive"] : null)) {
            // line 77
            echo "\t             <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Membership_Users_Twig')->profileUrl((isset($context["requestedUser"]) ? $context["requestedUser"] : null), array("action" => "followers")), "html", null, true);
            echo "\" class=\"ui statistic tiny\">
\t                 <div class=\"value mp-social-stats-followers\">";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["requestedUser"]) ? $context["requestedUser"] : null), "followers", array()), "html", null, true);
            echo "</div>
\t                 <div class=\"label\">";
            // line 79
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Followers")), "html", null, true);
            echo "</div>
\t             </a>
\t         ";
        }
        // line 82
        echo "        </div>
\t    
        ";
        // line 84
        if ((isset($context["userLoggedIn"]) ? $context["userLoggedIn"] : null)) {
            // line 85
            echo "\t        <div class=\"ui secondary mini menu right floated mp-user-action-menu\">
\t            <div class=\"right menu\" style=\"display: none\">
\t                ";
            // line 87
            if ( !$this->env->getExtension('Membership_Users_Twig')->isCurrentUser((isset($context["requestedUser"]) ? $context["requestedUser"] : null))) {
                // line 88
                echo "\t                    ";
                if (((isset($context["friendsActive"]) ? $context["friendsActive"] : null) && call_user_func_array($this->env->getFunction('currentUserCan')->getCallable(), array("add-friends")))) {
                    // line 89
                    echo "\t                        ";
                    if (( !$this->env->getExtension('Membership_Users_Twig')->isFriendOfCurrentUser((isset($context["requestedUser"]) ? $context["requestedUser"] : null)) &&  !$this->env->getExtension('Membership_Users_Twig')->currentUserIsFriendOf((isset($context["requestedUser"]) ? $context["requestedUser"] : null)))) {
                        // line 90
                        echo "\t                            <div class=\"horizontally fitted item\">
\t                                <button class=\"ui mini primary button\" data-action=\"add-friend\">";
                        // line 91
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Add Friend")), "html", null, true);
                        echo "</button>
\t                            </div>
\t                        ";
                    }
                    // line 94
                    echo "\t                        ";
                    if (($this->env->getExtension('Membership_Users_Twig')->currentUserIsFriendOf((isset($context["requestedUser"]) ? $context["requestedUser"] : null)) && $this->env->getExtension('Membership_Users_Twig')->isFriendOfCurrentUser((isset($context["requestedUser"]) ? $context["requestedUser"] : null)))) {
                        // line 95
                        echo "\t                            <div class=\"horizontally fitted item\">
\t                                <button class=\"ui mini primary button\" data-action=\"remove-friend\">";
                        // line 96
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Unfriend")), "html", null, true);
                        echo "</button>
\t                            </div>
\t                        ";
                    }
                    // line 99
                    echo "\t                        ";
                    if (($this->env->getExtension('Membership_Users_Twig')->currentUserIsFriendOf((isset($context["requestedUser"]) ? $context["requestedUser"] : null)) &&  !$this->env->getExtension('Membership_Users_Twig')->isFriendOfCurrentUser((isset($context["requestedUser"]) ? $context["requestedUser"] : null)))) {
                        // line 100
                        echo "\t                            <div class=\"horizontally fitted item\">
\t                                <button class=\"ui mini primary button\" data-action=\"add-friend\">";
                        // line 101
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Accept Friend Request")), "html", null, true);
                        echo "</button>
\t                            </div>
\t                            <div class=\"horizontally fitted item\">
\t                                <button class=\"ui mini primary button\" data-action=\"remove-friend\">";
                        // line 104
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Decline Friend Request")), "html", null, true);
                        echo "</button>
\t                            </div>
\t                        ";
                    }
                    // line 107
                    echo "\t                        ";
                    if (( !$this->env->getExtension('Membership_Users_Twig')->currentUserIsFriendOf((isset($context["requestedUser"]) ? $context["requestedUser"] : null)) && $this->env->getExtension('Membership_Users_Twig')->isFriendOfCurrentUser((isset($context["requestedUser"]) ? $context["requestedUser"] : null)))) {
                        // line 108
                        echo "\t                            <div class=\"horizontally fitted item\">
\t                                <button class=\"ui mini primary button\" data-action=\"cancel-friend-request\">";
                        // line 109
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Cancel Friend Request")), "html", null, true);
                        echo "</button>
\t                            </div>
\t                        ";
                    }
                    // line 112
                    echo "\t                    ";
                }
                // line 113
                echo "\t                    ";
                if (((isset($context["messagesActive"]) ? $context["messagesActive"] : null) && call_user_func_array($this->env->getFunction('currentUserHasPermission')->getCallable(), array("send-messages", (isset($context["requestedUser"]) ? $context["requestedUser"] : null))))) {
                    // line 114
                    echo "\t                        <div class=\"horizontally fitted item\">
\t                            <button class=\"ui mini primary button\" data-action=\"message\">";
                    // line 115
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Message")), "html", null, true);
                    echo "</button>
\t                        </div>
\t                    ";
                }
                // line 118
                echo "\t                    ";
                if (((isset($context["followersActive"]) ? $context["followersActive"] : null) && call_user_func_array($this->env->getFunction('currentUserCan')->getCallable(), array("follow")))) {
                    // line 119
                    echo "\t                        ";
                    if ( !$this->env->getExtension('Membership_Users_Twig')->isCurrentUserFollow((isset($context["requestedUser"]) ? $context["requestedUser"] : null))) {
                        // line 120
                        echo "\t                            <div class=\"horizontally fitted item\">
\t                                <button class=\"ui mini primary button\" data-action=\"follow\">";
                        // line 121
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Follow")), "html", null, true);
                        echo "</button>
\t                            </div>
\t                        ";
                    } else {
                        // line 124
                        echo "\t                            <div class=\"horizontally fitted item\">
\t                                <button class=\"ui mini primary button\" data-action=\"unfollow\">";
                        // line 125
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Unfollow")), "html", null, true);
                        echo "</button>
\t                            </div>
\t                        ";
                    }
                    // line 128
                    echo "\t                    ";
                }
                // line 129
                echo "\t                    <div class=\"horizontally fitted item\">
\t                        <button class=\"ui mini primary button\" data-action=\"report\">";
                // line 130
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Report")), "html", null, true);
                echo "</button>
\t                    </div>
\t                    <div class=\"ui dropdown item\">
\t                        <i class=\"ellipsis vertical icon\"></i>
\t                        <div class=\"menu\"></div>
\t                    </div>
\t                ";
            } else {
                // line 137
                echo "\t                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Membership_Users_Twig')->profileUrl((isset($context["requestedUser"]) ? $context["requestedUser"] : null), array("action" => "settings")), "html", null, true);
                echo "\" class=\"horizontally fitted item\">
\t                        <button class=\"ui primary button\">";
                // line 138
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Settings")), "html", null, true);
                echo "</button>
\t                    </a>
\t                    <a href=\"";
                // line 140
                echo (isset($context["logoutUrl"]) ? $context["logoutUrl"] : null);
                echo "\" class=\"horizontally fitted item\">
\t                        <button class=\"ui primary button\">";
                // line 141
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Logout")), "html", null, true);
                echo "</button>
\t                    </a>
\t                ";
            }
            // line 144
            echo "\t            </div>
\t        </div>
        ";
        } else {
            // line 147
            echo "\t        <div class=\"ui secondary mini menu right floated mp-user-action-menu\">
\t            <div class=\"right menu\" style=\"display: none\">
\t                <div class=\"horizontally fitted item\">
\t                    <button class=\"ui mini primary button\" data-action=\"login\">";
            // line 150
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Add Friend")), "html", null, true);
            echo "</button>
\t                </div>
\t                <div class=\"horizontally fitted item\">
\t                    <button class=\"ui mini primary button\" data-action=\"login\">";
            // line 153
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Follow")), "html", null, true);
            echo "</button>
\t                </div>
\t                <div class=\"horizontally fitted item\">
\t                    <button class=\"ui mini primary button\" data-action=\"login\">";
            // line 156
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Message")), "html", null, true);
            echo "</button>
\t                </div>
\t                <div class=\"horizontally fitted item\">
\t                    <button class=\"ui mini primary button\" data-action=\"login\">";
            // line 159
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Report")), "html", null, true);
            echo "</button>
\t                </div>
\t                <div class=\"ui dropdown item\">
\t                    <i class=\"ellipsis vertical icon\"></i>
\t                    <div class=\"menu\"></div>
\t                </div>
\t            </div>
\t        </div>
        ";
        }
        // line 168
        echo "    </div>
\t
    <div class=\"mp-profile-nav-menu\">
        <div class=\"ui secondary pointing menu profile-nav-menu\" style=\"display: none\">
\t        
            ";
        // line 173
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Membership_Users_Twig')->profileMenuItems());
        foreach ($context['_seq'] as $context["id"] => $context["title"]) {
            // line 174
            echo "                <a class=\"item";
            if (((isset($context["action"]) ? $context["action"] : null) == $context["id"])) {
                echo " active";
            }
            echo "\"
                   href=\"";
            // line 175
            echo twig_escape_filter($this->env, $this->env->getExtension('Membership_Users_Twig')->profileUrl((isset($context["requestedUser"]) ? $context["requestedUser"] : null), array("action" => $context["id"])), "html", null, true);
            echo "\"
                >";
            // line 176
            echo twig_escape_filter($this->env, $context["title"], "html", null, true);
            echo " ";
            if (twig_in_filter($context["id"], twig_get_array_keys_filter((isset($context["unreadNotifications"]) ? $context["unreadNotifications"] : null)))) {
                echo "<div class=\"ui mini label red\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["unreadNotifications"]) ? $context["unreadNotifications"] : null), $context["id"], array(), "array"), "html", null, true);
                echo "</div>";
            }
            echo "</a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['title'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 178
        echo "
            ";
        // line 179
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "dispatcher", array()), "dispatch", array(0 => "profileMenuItems"), "method"), "html", null, true);
        echo "
\t        
            <div class=\"ui dropdown item\" style=\"display:none;\">
                <i class=\"ellipsis horizontal icon\"></i>
                <div class=\"menu\"></div>
            </div>
        </div>
    </div>

    <div class=\"ui modal sc-membership\" id=\"avatar-modal\">
        <i class=\"close icon\"></i>
        <div class=\"header\">
            ";
        // line 191
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Profile picture")), "html", null, true);
        echo "
        </div>
        <div class=\"content\">
            <div class=\"ui basic segment blurring avatar-image-container\">
                <div class=\"ui inverted dimmer\">
                    <div class=\"ui loader\"></div>
                </div>
                <div class=\"mp-avatar-modal-image\">
                    <img class=\"avatar-modal-image\">
                </div>
            </div>
        </div>
        <div class=\"actions\">
            <button class=\"ui mini secondary button cancel\" data-action=\"cancel\">";
        // line 204
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Cancel")), "html", null, true);
        echo "</button>
            <button class=\"ui mini primary button primary\" data-action=\"save-photo\">";
        // line 205
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Save")), "html", null, true);
        echo "</button>
        </div>
    </div>
\t
\t";
        // line 209
        if ( !(isset($context["userLoggedIn"]) ? $context["userLoggedIn"] : null)) {
            // line 210
            echo "\t\t";
            $this->loadTemplate("@auth/partials/login-modal.twig", "@users/profile.twig", 210)->display($context);
            // line 211
            echo "\t";
        }
        // line 212
        echo "\t
    ";
        // line 213
        $this->displayBlock('content', $context, $blocks);
        // line 214
        echo "</div>

";
        // line 216
        $this->loadTemplate("@users/partials/users-send-message-modal.twig", "@users/profile.twig", 216)->display($context);
        // line 217
        $this->loadTemplate("@users/partials/users-report-modal.twig", "@users/profile.twig", 217)->display($context);
    }

    // line 213
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "@users/profile.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  500 => 213,  496 => 217,  494 => 216,  490 => 214,  488 => 213,  485 => 212,  482 => 211,  479 => 210,  477 => 209,  470 => 205,  466 => 204,  450 => 191,  435 => 179,  432 => 178,  418 => 176,  414 => 175,  407 => 174,  403 => 173,  396 => 168,  384 => 159,  378 => 156,  372 => 153,  366 => 150,  361 => 147,  356 => 144,  350 => 141,  346 => 140,  341 => 138,  336 => 137,  326 => 130,  323 => 129,  320 => 128,  314 => 125,  311 => 124,  305 => 121,  302 => 120,  299 => 119,  296 => 118,  290 => 115,  287 => 114,  284 => 113,  281 => 112,  275 => 109,  272 => 108,  269 => 107,  263 => 104,  257 => 101,  254 => 100,  251 => 99,  245 => 96,  242 => 95,  239 => 94,  233 => 91,  230 => 90,  227 => 89,  224 => 88,  222 => 87,  218 => 85,  216 => 84,  212 => 82,  206 => 79,  202 => 78,  197 => 77,  194 => 76,  188 => 73,  184 => 72,  179 => 71,  176 => 70,  170 => 67,  166 => 66,  161 => 65,  159 => 64,  153 => 63,  147 => 59,  140 => 55,  136 => 54,  126 => 47,  123 => 46,  121 => 45,  116 => 43,  112 => 42,  108 => 41,  102 => 40,  96 => 37,  93 => 36,  87 => 33,  83 => 32,  74 => 26,  70 => 25,  60 => 21,  58 => 20,  55 => 19,  49 => 16,  46 => 15,  44 => 14,  38 => 11,  33 => 9,  29 => 8,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@users/profile.twig", "/Users/shingkeelau/web/wp-content/plugins/membership-by-supsystic/src/Membership/Users/views/profile.twig");
    }
}
