<?php

/* @groups/members.twig */
class __TwigTemplate_632b2c2913c4943fb9a5bff20c0c9fc39d9ca45069413bb1b640006e5901099e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@groups/group.twig", "@groups/members.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@groups/group.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "\t
\t";
        // line 5
        $context["userSectionTitles"] = array("approved" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Members")), "unapproved" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Join requests")), "blocked" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Blocked users")), "invited" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Invited users")));
        // line 11
        echo "\t
\t<div class=\"ui basic vertical segment\">
\t\t<div class=\"ui pointing secondary menu users-tab-items\" ";
        // line 13
        if ((twig_length_filter($this->env, ($context["counts"] ?? null)) < 2)) {
            echo "style=\"display:none\"";
        }
        echo ">
\t\t\t";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["counts"] ?? null));
        foreach ($context['_seq'] as $context["type"] => $context["count"]) {
            // line 15
            echo "\t\t\t\t<a class=\"item\" data-tab=\"";
            echo twig_escape_filter($this->env, $context["type"], "html", null, true);
            echo "\" ";
            if ( !$context["count"]) {
                echo "style=\"display:none\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["userSectionTitles"] ?? null), $context["type"], array(), "array"), "html", null, true);
            echo " <div class=\"ui mini label\">";
            echo twig_escape_filter($this->env, $context["count"], "html", null, true);
            echo "</div></a>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['count'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "\t\t\t
\t\t</div>
\t\t<div class=\"users-tabs\">
\t\t\t";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter(($context["counts"] ?? null)));
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
            // line 21
            echo "\t\t\t\t<div class=\"ui tab ";
            if ($this->getAttribute($context["loop"], "first", array())) {
                echo "active";
            }
            echo "\" data-tab=\"";
            echo twig_escape_filter($this->env, $context["section"], "html", null, true);
            echo "\">
\t\t\t\t\t<div class=\"ui basic vertical segment form user-search-input\">
\t\t\t\t\t\t<div class=\"ui fluid icon input\">
\t\t\t\t\t\t\t<input type=\"text\" placeholder=\"";
            // line 24
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Find user...")), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t<i class=\"search icon\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"ui two cards stackable users-list\">
\t\t\t\t\t\t";
            // line 29
            if ($this->env->getExtension('Membership_Groups_Twig')->canEditGroup(($context["requestedGroup"] ?? null))) {
                // line 30
                echo "\t\t\t\t\t\t\t";
                $this->loadTemplate("@groups/partials/group-users-list.twig", "@groups/members.twig", 30)->display(array_merge($context, array("users" => $this->getAttribute(($context["users"] ?? null), $context["section"], array(), "array"), "listType" => $context["section"])));
                // line 31
                echo "\t\t\t\t\t\t";
            } else {
                // line 32
                echo "\t\t\t\t\t\t\t";
                $this->loadTemplate("@users/partials/users-list.twig", "@groups/members.twig", 32)->display(array_merge($context, array("users" => $this->getAttribute(($context["users"] ?? null), $context["section"], array(), "array"))));
                // line 33
                echo "\t\t\t\t\t\t";
            }
            // line 34
            echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"ui basic segment very padded list-loader\" style=\"display:none;\">
\t\t\t\t\t\t<div class=\"ui active loader\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
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
        // line 40
        echo "\t\t</div>
\t</div>
\t
\t";
        // line 43
        $this->loadTemplate("@users/partials/users-send-message-modal.twig", "@groups/members.twig", 43)->display($context);
    }

    public function getTemplateName()
    {
        return "@groups/members.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 43,  141 => 40,  122 => 34,  119 => 33,  116 => 32,  113 => 31,  110 => 30,  108 => 29,  100 => 24,  89 => 21,  72 => 20,  67 => 17,  50 => 15,  46 => 14,  40 => 13,  36 => 11,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@groups/members.twig", "/Users/shingkeelau/Public/web/wp-content/plugins/membership-by-supsystic/src/Membership/Groups/views/members.twig");
    }
}
