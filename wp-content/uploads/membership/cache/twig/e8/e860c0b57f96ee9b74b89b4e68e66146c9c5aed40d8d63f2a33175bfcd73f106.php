<?php

/* @users/partials/users-list.twig */
class __TwigTemplate_5c3b0e780a4f3efd872b090acd5ccf3432f6b881edd6be5ac90112f56ff394cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'actionButtonsBefore' => array($this, 'block_actionButtonsBefore'),
            'actionButtons' => array($this, 'block_actionButtons'),
            'actionButtonsAfter' => array($this, 'block_actionButtonsAfter'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 2
            echo "    <div class=\"ui card mp-user-card\" data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "\">
        <div class=\"image\">
            <a href=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('Membership_Users_Twig')->profileUrl($context["user"]), "html", null, true);
            echo "\" class=\"header\">
                <img src=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->env->getExtension('Membership_Users_Twig')->userCover($context["user"], "medium"), "html", null, true);
            echo "\">
            </a>
        </div>

        <div class=\"content\">
            <div class=\"mp-user-avatar-container\">
                <div class=\"mp-user-avatar\">
                    <a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('Membership_Users_Twig')->profileUrl($context["user"]), "html", null, true);
            echo "\" class=\"header\">
                        <img src=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('Membership_Users_Twig')->userAvatar($context["user"], "large"), "html", null, true);
            echo "\">
                    </a>
                </div>
            </div>

            <a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Membership_Users_Twig')->profileUrl($context["user"]), "html", null, true);
            echo "\" class=\"header\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "displayName", array()), "html", null, true);
            echo "</a>

            <div class=\"ui center aligned container mp-social-stats social-stats\">
                ";
            // line 21
            if (($context["friendsActive"] ?? null)) {
                // line 22
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Membership_Users_Twig')->profileUrl($context["user"], array("action" => "friends")), "html", null, true);
                echo "\" class=\"ui statistic tiny\">
                        <div class=\"value mp-social-stats-friends\">
                            ";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "friends", array()), "html", null, true);
                echo "
                        </div>
                        <div class=\"label\">
                           ";
                // line 27
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Friends")), "html", null, true);
                echo "
                        </div>
                    </a>
                ";
            }
            // line 31
            echo "                ";
            if (($context["followersActive"] ?? null)) {
                // line 32
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Membership_Users_Twig')->profileUrl($context["user"], array("action" => "followers")), "html", null, true);
                echo "\" class=\"ui statistic tiny\">
                        <div class=\"value mp-social-stats-follows\">
                            ";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "follows", array()), "html", null, true);
                echo "
                        </div>
                        <div class=\"label\">
                            ";
                // line 37
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Follows")), "html", null, true);
                echo "
                        </div>
                    </a>
                    <a href=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->env->getExtension('Membership_Users_Twig')->profileUrl($context["user"], array("action" => "followers")), "html", null, true);
                echo "\" class=\"ui statistic tiny\">
                        <div class=\"value mp-social-stats-followers\">
                            ";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "followers", array()), "html", null, true);
                echo "
                        </div>
                        <div class=\"label\">
                            ";
                // line 45
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Followers")), "html", null, true);
                echo "
                        </div>
                    </a>
                ";
            }
            // line 49
            echo "            </div>
            ";
            // line 50
            if (($this->getAttribute($context["user"], "view", array()) && $this->getAttribute($this->getAttribute($context["user"], "view", array()), "userInfoContent", array()))) {
                echo "<div>";
                echo $this->getAttribute($this->getAttribute($context["user"], "view", array()), "userInfoContent", array());
                echo "</div>";
            }
            echo " <!--TODO-->
        </div>

        ";
            // line 53
            if ( !$this->env->getExtension('Membership_Users_Twig')->isCurrentUser($context["user"])) {
                // line 54
                echo "            <div class=\"extra content\">
                <div class=\"ui center aligned container user-action-buttons\">
                    ";
                // line 56
                $this->displayBlock('actionButtonsBefore', $context, $blocks);
                // line 57
                echo "                    ";
                $this->displayBlock('actionButtons', $context, $blocks);
                // line 87
                echo "                    ";
                $this->displayBlock('actionButtonsAfter', $context, $blocks);
                // line 88
                echo "                </div>
            </div>
        ";
            }
            // line 91
            echo "    </div>
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 56
    public function block_actionButtonsBefore($context, array $blocks = array())
    {
    }

    // line 57
    public function block_actionButtons($context, array $blocks = array())
    {
        // line 58
        echo "                        ";
        if (($context["userLoggedIn"] ?? null)) {
            // line 59
            echo "                            ";
            if (((call_user_func_array($this->env->getFunction('currentUserCan')->getCallable(), array("add-friends")) && ($context["friendsActive"] ?? null)) &&  !$this->env->getExtension('Membership_Users_Twig')->isFriendOfCurrentUser(($context["user"] ?? null)))) {
                // line 60
                echo "\t                            <button class=\"ui mini primary button\" data-action=\"add-friend\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Add Friend")), "html", null, true);
                echo "</button>
                            ";
            }
            // line 62
            echo "
                            ";
            // line 63
            if ((((call_user_func_array($this->env->getFunction('currentUserCan')->getCallable(), array("add-friends")) && ($context["friendsActive"] ?? null)) && $this->env->getExtension('Membership_Users_Twig')->isFriendOfCurrentUser(($context["user"] ?? null))) && $this->env->getExtension('Membership_Users_Twig')->currentUserIsFriendOf(($context["user"] ?? null)))) {
                // line 64
                echo "\t                            <button class=\"ui mini primary button\" data-action=\"remove-friend\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Unfriend")), "html", null, true);
                echo "</button>
                            ";
            }
            // line 66
            echo "\t                        
                            ";
            // line 67
            if ((((call_user_func_array($this->env->getFunction('currentUserCan')->getCallable(), array("add-friends")) && ($context["friendsActive"] ?? null)) && $this->env->getExtension('Membership_Users_Twig')->isFriendOfCurrentUser(($context["user"] ?? null))) &&  !$this->env->getExtension('Membership_Users_Twig')->currentUserIsFriendOf(($context["user"] ?? null)))) {
                // line 68
                echo "\t                            <button class=\"ui mini primary button\" data-action=\"cancel-friend-request\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Cancel a friend request")), "html", null, true);
                echo "</button>
                            ";
            }
            // line 70
            echo "
                            ";
            // line 71
            if (((call_user_func_array($this->env->getFunction('currentUserCan')->getCallable(), array("follow")) && ($context["followersActive"] ?? null)) &&  !$this->env->getExtension('Membership_Users_Twig')->isCurrentUserFollow(($context["user"] ?? null)))) {
                // line 72
                echo "\t                            <button class=\"ui mini primary button\" data-action=\"follow\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Follow")), "html", null, true);
                echo "</button>
                            ";
            }
            // line 74
            echo "
                            ";
            // line 75
            if (((call_user_func_array($this->env->getFunction('currentUserCan')->getCallable(), array("follow")) && ($context["followersActive"] ?? null)) && $this->env->getExtension('Membership_Users_Twig')->isCurrentUserFollow(($context["user"] ?? null)))) {
                // line 76
                echo "\t                            <button class=\"ui mini primary button\" data-action=\"unfollow\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Unfollow")), "html", null, true);
                echo "</button>
                            ";
            }
            // line 78
            echo "                            ";
            if (((call_user_func_array($this->env->getFunction('currentUserCan')->getCallable(), array("send-and-receive-messages")) && ($context["messagesActive"] ?? null)) && call_user_func_array($this->env->getFunction('currentUserHasPermission')->getCallable(), array("send-messages", ($context["user"] ?? null))))) {
                // line 79
                echo "\t                            <button class=\"ui mini primary button\" data-action=\"message\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Message")), "html", null, true);
                echo "</button>
                            ";
            }
            // line 81
            echo "                        ";
        } else {
            // line 82
            echo "                            <button class=\"ui mini primary button\" data-action=\"login\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Add Friend")), "html", null, true);
            echo "</button>
                            <button class=\"ui mini primary button\" data-action=\"login\">";
            // line 83
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Message")), "html", null, true);
            echo "</button>
                            <button class=\"ui mini primary button\" data-action=\"login\">";
            // line 84
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Follow")), "html", null, true);
            echo "</button>
                        ";
        }
        // line 86
        echo "                    ";
    }

    // line 87
    public function block_actionButtonsAfter($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "@users/partials/users-list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  282 => 87,  278 => 86,  273 => 84,  269 => 83,  264 => 82,  261 => 81,  255 => 79,  252 => 78,  246 => 76,  244 => 75,  241 => 74,  235 => 72,  233 => 71,  230 => 70,  224 => 68,  222 => 67,  219 => 66,  213 => 64,  211 => 63,  208 => 62,  202 => 60,  199 => 59,  196 => 58,  193 => 57,  188 => 56,  171 => 91,  166 => 88,  163 => 87,  160 => 57,  158 => 56,  154 => 54,  152 => 53,  142 => 50,  139 => 49,  132 => 45,  126 => 42,  121 => 40,  115 => 37,  109 => 34,  103 => 32,  100 => 31,  93 => 27,  87 => 24,  81 => 22,  79 => 21,  71 => 18,  63 => 13,  59 => 12,  49 => 5,  45 => 4,  39 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@users/partials/users-list.twig", "/Users/shingkeelau/Public/web/wp-content/plugins/membership-by-supsystic/src/Membership/Users/views/partials/users-list.twig");
    }
}
