<?php

/* @groups/partials/groups-list.twig */
class __TwigTemplate_1795119875b0e82728285f6645766662ce684587aac5799f1ef60c0169f252f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'actionButtons' => array($this, 'block_actionButtons'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 2
            echo "\t<div class=\"ui card mp-group-card\" data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "id", array()), "html", null, true);
            echo "\">
\t\t<div class=\"image\">
\t\t\t<a href=\"";
            // line 4
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('groupUrl')->getCallable(), array($context["group"])), "html", null, true);
            echo "\" class=\"header\">
\t\t\t\t<img src=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->env->getExtension('Membership_Groups_Twig')->groupsCover($context["group"], "medium"), "html", null, true);
            echo "\">
\t\t\t</a>
\t\t</div>
\t\t<div class=\"content\">
\t\t\t<div class=\"mp-group-logo-container\">
\t\t\t\t<div class=\"mp-group-logo\">
\t\t\t\t\t<a href=\"";
            // line 11
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('groupUrl')->getCallable(), array($context["group"])), "html", null, true);
            echo "\" class=\"header\">
\t\t\t\t\t\t<img src=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('Membership_Groups_Twig')->groupsLogo($context["group"], "large"), "html", null, true);
            echo "\">
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<a href=\"";
            // line 16
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('groupUrl')->getCallable(), array($context["group"])), "html", null, true);
            echo "\" class=\"header\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "name", array()), "html", null, true);
            echo "</a>
\t\t\t<div class=\"meta mbs-group-g-type\">
\t\t\t\t<small>
\t\t\t\t\t";
            // line 19
            if (($this->getAttribute($this->getAttribute($context["group"], "settings", array()), "type", array()) == "closed")) {
                // line 20
                echo "\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Closed group")), "html", null, true);
                echo "
\t\t\t\t\t";
            } elseif (($this->getAttribute($this->getAttribute(            // line 21
$context["group"], "settings", array()), "type", array()) == "open")) {
                // line 22
                echo "\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Open group")), "html", null, true);
                echo "
\t\t\t\t\t";
            } elseif (($this->getAttribute($this->getAttribute(            // line 23
$context["group"], "settings", array()), "type", array()) == "private")) {
                // line 24
                echo "\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Private group")), "html", null, true);
                echo "
\t\t\t\t\t";
            }
            // line 26
            echo "\t\t\t\t</small>
\t\t\t</div>
\t\t\t<div class=\"meta mbs-group-followers\">
\t\t\t\t<small>";
            // line 29
            echo twig_escape_filter($this->env, sprintf(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("%s followers")), $this->getAttribute($context["group"], "totalUsers", array())), "html", null, true);
            echo "</small>
\t\t\t</div>
\t\t</div>
\t\t
\t\t<div class=\"extra content\" ";
            // line 33
            if ((isset($context["hideButtons"]) ? $context["hideButtons"] : null)) {
                echo "style=\"display: none\"";
            }
            echo ">
\t\t\t<div class=\"group-action-buttons\">
\t\t\t\t";
            // line 35
            $this->displayBlock('actionButtons', $context, $blocks);
            // line 63
            echo "\t\t\t</div>
\t\t</div>
\t</div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 35
    public function block_actionButtons($context, array $blocks = array())
    {
        // line 36
        echo "\t\t\t\t\t";
        if ((isset($context["userLoggedIn"]) ? $context["userLoggedIn"] : null)) {
            // line 37
            echo "\t\t\t\t\t\t";
            if ($this->env->getExtension('Membership_Groups_Twig')->canSendJoinRequest((isset($context["group"]) ? $context["group"] : null))) {
                // line 38
                echo "\t\t\t\t\t\t\t<button class=\"ui mini primary button\" data-action=\"send-request\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Send a request")), "html", null, true);
                echo "</button>
\t\t\t\t\t\t";
            }
            // line 40
            echo "\t\t\t\t\t\t";
            if ($this->env->getExtension('Membership_Groups_Twig')->canCancelJoinRequest((isset($context["group"]) ? $context["group"] : null))) {
                // line 41
                echo "\t\t\t\t\t\t\t<button class=\"ui mini primary button\" data-action=\"cancel-request\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Cancel request")), "html", null, true);
                echo "</button>
\t\t\t\t\t\t";
            }
            // line 43
            echo "\t\t\t\t\t\t";
            if ($this->env->getExtension('Membership_Groups_Twig')->canJoinGroup((isset($context["group"]) ? $context["group"] : null))) {
                // line 44
                echo "\t\t\t\t\t\t\t<button class=\"ui mini primary button\" data-action=\"join-group\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Join group")), "html", null, true);
                echo "</button>
\t\t\t\t\t\t";
            }
            // line 46
            echo "\t\t\t\t\t\t";
            if ($this->env->getExtension('Membership_Groups_Twig')->canLeaveGroup((isset($context["group"]) ? $context["group"] : null))) {
                // line 47
                echo "\t\t\t\t\t\t\t<button class=\"ui mini primary button\" data-action=\"leave-group\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Leave group")), "html", null, true);
                echo "</button>
\t\t\t\t\t\t";
            }
            // line 49
            echo "\t\t\t\t\t\t";
            if ($this->env->getExtension('Membership_Groups_Twig')->canFollowGroup((isset($context["group"]) ? $context["group"] : null))) {
                // line 50
                echo "\t\t\t\t\t\t\t<button class=\"ui mini primary button\" data-action=\"follow\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Follow")), "html", null, true);
                echo "</button>
\t\t\t\t\t\t";
            }
            // line 52
            echo "\t\t\t\t\t\t";
            if ($this->env->getExtension('Membership_Groups_Twig')->canUnfollowGroup((isset($context["group"]) ? $context["group"] : null))) {
                // line 53
                echo "\t\t\t\t\t\t\t<button class=\"ui mini primary button\" data-action=\"unfollow\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Unfollow")), "html", null, true);
                echo "</button>
\t\t\t\t\t\t";
            }
            // line 55
            echo "\t\t\t\t\t";
        } else {
            // line 56
            echo "\t\t\t\t\t\t<div class=\"not-logged-in\">
\t\t\t\t\t\t\t";
            // line 57
            echo sprintf(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Please <a href=\"%s\">sign up</a> or <a href=\"%s\">sign in</a> to join or leave groups.")), call_user_func_array($this->env->getFunction('getRouteUrl')->getCallable(), array("registration")), call_user_func_array($this->env->getFunction('getRouteUrl')->getCallable(), array("login")));
            // line 59
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 62
        echo "\t\t\t\t";
    }

    public function getTemplateName()
    {
        return "@groups/partials/groups-list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 62,  205 => 59,  203 => 57,  200 => 56,  197 => 55,  191 => 53,  188 => 52,  182 => 50,  179 => 49,  173 => 47,  170 => 46,  164 => 44,  161 => 43,  155 => 41,  152 => 40,  146 => 38,  143 => 37,  140 => 36,  137 => 35,  118 => 63,  116 => 35,  109 => 33,  102 => 29,  97 => 26,  91 => 24,  89 => 23,  84 => 22,  82 => 21,  77 => 20,  75 => 19,  67 => 16,  60 => 12,  56 => 11,  47 => 5,  43 => 4,  37 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@groups/partials/groups-list.twig", "/Users/shingkeelau/web/wp-content/plugins/membership-by-supsystic/src/Membership/Groups/views/partials/groups-list.twig");
    }
}
