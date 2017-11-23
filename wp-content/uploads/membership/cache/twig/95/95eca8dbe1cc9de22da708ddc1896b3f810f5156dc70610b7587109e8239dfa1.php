<?php

/* @groups/groups.twig */
class __TwigTemplate_1272831142dd3d93d56f88cabf84d01ba8b63e1693b6a07219ce950c0cf0d273 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["groupsSectionTitles"] = array("joined" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Joined Groups")), "managed" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Managed Groups")), "invited" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Invites")));
        // line 6
        echo "
<div id=\"mp-groups\" class=\"sc-membership\">
\t<div class=\"ui grid\">
\t\t<div class=\"sixteen wide column\">
\t\t\t<div class=\"ui pointing secondary menu groups-tab-items\">
\t\t\t\t<a class=\"item active\" data-tab=\"all\">All groups</a>
\t\t\t\t";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["counts"] ?? null));
        foreach ($context['_seq'] as $context["type"] => $context["count"]) {
            // line 13
            echo "\t\t\t\t\t";
            if (($context["count"] > 0)) {
                // line 14
                echo "\t\t\t\t\t\t<a class=\"item\" data-tab=\"";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["groupsSectionTitles"] ?? null), $context["type"], array(), "array"), "html", null, true);
                echo " <div class=\"ui mini label\">";
                echo twig_escape_filter($this->env, $context["count"], "html", null, true);
                echo "</div></a>
\t\t\t\t\t";
            }
            // line 16
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['count'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "
\t\t\t\t";
        // line 18
        if (call_user_func_array($this->env->getFunction('currentUserCan')->getCallable(), array("can-create-groups"))) {
            // line 19
            echo "\t\t\t\t\t<div class=\"right menu\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<button class=\"ui button mini primary create-group-button\">";
            // line 21
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Create Group")), "html", null, true);
            echo "</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 25
        echo "\t\t\t</div>
\t\t\t
\t\t\t<div class=\"groups-tabs\">
\t\t\t\t";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_merge(array(0 => "all"), twig_get_array_keys_filter(($context["counts"] ?? null))));
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
        foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
            // line 29
            echo "\t\t\t\t\t<div class=\"ui tab ";
            if ($this->getAttribute($context["loop"], "first", array())) {
                echo "active";
            }
            echo "\" data-tab=\"";
            echo twig_escape_filter($this->env, $context["section"], "html", null, true);
            echo "\">
\t\t\t\t\t\t<div class=\"ui basic vertical segment form group-search-input\">
\t\t\t\t\t\t\t<div class=\"ui fluid icon input\">
\t\t\t\t\t\t\t\t<input type=\"text\" placeholder=\"";
            // line 32
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Find group...")), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<i class=\"search icon\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"ui two cards stackable groups-list\">
\t\t\t\t\t\t\t";
            // line 37
            if (($context["section"] == "invited")) {
                // line 38
                echo "\t\t\t\t\t\t\t   \t";
                $this->loadTemplate("@groups/groups.twig", "@groups/groups.twig", 38, "1805246775")->display(array_merge($context, array("groups" => $this->getAttribute(($context["groups"] ?? null), $context["section"], array(), "array"))));
                // line 50
                echo "\t\t\t\t\t\t\t";
            } else {
                // line 51
                echo "\t\t\t\t\t\t\t\t ";
                $this->loadTemplate("@groups/partials/groups-list.twig", "@groups/groups.twig", 51)->display(array_merge($context, array("groups" => $this->getAttribute(($context["groups"] ?? null), $context["section"], array(), "array"))));
                // line 52
                echo "\t\t\t\t\t\t\t";
            }
            // line 53
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"ui basic segment very padded list-loader\" style=\"display:none;\">
\t\t\t\t\t\t\t<div class=\"ui active loader\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['section'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "\t\t\t</div>
\t\t</div>
\t</div>
</div>

";
        // line 65
        $this->loadTemplate("@groups/partials/create-group-modal.twig", "@groups/groups.twig", 65)->display($context);
        // line 66
        if ( !($context["userLoggedIn"] ?? null)) {
            // line 67
            echo "\t";
            $this->loadTemplate("@auth/partials/login-modal.twig", "@groups/groups.twig", 67)->display($context);
        }
    }

    public function getTemplateName()
    {
        return "@groups/groups.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 67,  152 => 66,  150 => 65,  143 => 60,  123 => 53,  120 => 52,  117 => 51,  114 => 50,  111 => 38,  109 => 37,  101 => 32,  90 => 29,  73 => 28,  68 => 25,  61 => 21,  57 => 19,  55 => 18,  52 => 17,  46 => 16,  36 => 14,  33 => 13,  29 => 12,  21 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@groups/groups.twig", "/Users/shingkeelau/Public/web/wp-content/plugins/membership-by-supsystic/src/Membership/Groups/views/groups.twig");
    }
}


/* @groups/groups.twig */
class __TwigTemplate_1272831142dd3d93d56f88cabf84d01ba8b63e1693b6a07219ce950c0cf0d273_1805246775 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 38
        $this->parent = $this->loadTemplate("@groups/partials/groups-list.twig", "@groups/groups.twig", 38);
        $this->blocks = array(
            'actionButtons' => array($this, 'block_actionButtons'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@groups/partials/groups-list.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 39
    public function block_actionButtons($context, array $blocks = array())
    {
        // line 40
        echo "\t\t\t\t\t\t\t\t\t\t";
        if ( !$this->env->getExtension('Membership_Groups_Twig')->isMemberOfGroup(($context["group"] ?? null))) {
            // line 41
            echo "\t\t\t\t\t\t\t\t\t\t\t<button class=\"ui mini primary button\" data-action=\"accept-invitation\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Accept")), "html", null, true);
            echo "</button>
\t\t\t\t\t\t\t\t\t\t\t<button class=\"ui mini primary button\" data-action=\"decline-invitation\">";
            // line 42
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Decline")), "html", null, true);
            echo "</button>
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 44
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            if ($this->env->getExtension('Membership_Groups_Twig')->canLeaveGroup(($context["group"] ?? null))) {
                // line 45
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"ui mini primary button\" data-action=\"decline-invitation\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Leave group")), "html", null, true);
                echo "</button>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 47
            echo "\t\t\t\t\t\t\t\t\t\t";
        }
        // line 48
        echo "\t\t\t\t\t\t\t\t\t";
    }

    public function getTemplateName()
    {
        return "@groups/groups.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 48,  239 => 47,  233 => 45,  230 => 44,  225 => 42,  220 => 41,  217 => 40,  214 => 39,  197 => 38,  154 => 67,  152 => 66,  150 => 65,  143 => 60,  123 => 53,  120 => 52,  117 => 51,  114 => 50,  111 => 38,  109 => 37,  101 => 32,  90 => 29,  73 => 28,  68 => 25,  61 => 21,  57 => 19,  55 => 18,  52 => 17,  46 => 16,  36 => 14,  33 => 13,  29 => 12,  21 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@groups/groups.twig", "/Users/shingkeelau/Public/web/wp-content/plugins/membership-by-supsystic/src/Membership/Groups/views/groups.twig");
    }
}
