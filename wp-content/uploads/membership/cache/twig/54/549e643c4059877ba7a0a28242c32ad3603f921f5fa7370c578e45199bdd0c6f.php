<?php

/* @groups/partials/group-users-list.twig */
class __TwigTemplate_9dbeb93965fefa496570c7b745628691a86af624e86c67cd13f527384d0bba5e extends Twig_Template
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
        if ($this->env->getExtension('Membership_Groups_Twig')->canEditGroup(($context["requestedGroup"] ?? null))) {
            // line 2
            echo "\t";
            $this->loadTemplate("@groups/partials/group-users-list.twig", "@groups/partials/group-users-list.twig", 2, "1829976012")->display(array_merge($context, array("users" => ($context["users"] ?? null))));
        } else {
            // line 27
            echo "\t";
            $this->loadTemplate("@users/partials/users-list.twig", "@groups/partials/group-users-list.twig", 27)->display(array_merge($context, array("users" => ($context["users"] ?? null))));
        }
        // line 29
        echo "
";
    }

    public function getTemplateName()
    {
        return "@groups/partials/group-users-list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 29,  25 => 27,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@groups/partials/group-users-list.twig", "/Users/shingkeelau/Public/web/wp-content/plugins/membership-by-supsystic/src/Membership/Groups/views/partials/group-users-list.twig");
    }
}


/* @groups/partials/group-users-list.twig */
class __TwigTemplate_9dbeb93965fefa496570c7b745628691a86af624e86c67cd13f527384d0bba5e_1829976012 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("@users/partials/users-list.twig", "@groups/partials/group-users-list.twig", 2);
        $this->blocks = array(
            'actionButtons' => array($this, 'block_actionButtons'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@users/partials/users-list.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_actionButtons($context, array $blocks = array())
    {
        // line 4
        echo "\t\t\t";
        if ( !$this->env->getExtension('Membership_Users_Twig')->isCurrentUser(($context["user"] ?? null))) {
            // line 5
            echo "\t\t\t\t
\t\t\t\t";
            // line 6
            if ((($context["listType"] ?? null) == "approved")) {
                // line 7
                echo "\t\t\t\t\t<button class=\"ui mini primary button\" data-action=\"block\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Block")), "html", null, true);
                echo "</button>
\t\t\t\t\t<button class=\"ui mini primary button\" data-action=\"remove-from-group\">";
                // line 8
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Remove from group")), "html", null, true);
                echo "</button>
\t\t\t\t";
            }
            // line 10
            echo "\t\t\t\t
\t\t\t\t";
            // line 11
            if ((($context["listType"] ?? null) == "unapproved")) {
                // line 12
                echo "\t\t\t\t\t<button class=\"ui mini primary button\" data-action=\"approve\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Approve")), "html", null, true);
                echo "</button>
\t\t\t\t\t<button class=\"ui mini primary button\" data-action=\"unapprove\">";
                // line 13
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Unapprove")), "html", null, true);
                echo "</button>
\t\t\t\t";
            }
            // line 15
            echo "\t\t\t\t
\t\t\t\t";
            // line 16
            if ((($context["listType"] ?? null) == "blocked")) {
                // line 17
                echo "\t\t\t\t\t<button class=\"ui mini primary button\" data-action=\"unblock\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Unblock")), "html", null, true);
                echo "</button>
\t\t\t\t";
            }
            // line 19
            echo "\t\t\t\t
\t\t\t\t";
            // line 20
            if ((($context["listType"] ?? null) == "invited")) {
                // line 21
                echo "\t\t\t\t\t<button class=\"ui mini primary button\" data-action=\"cancel-invitation\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Cancel invitation")), "html", null, true);
                echo "</button>
\t\t\t\t";
            }
            // line 23
            echo "\t\t\t";
        }
        // line 24
        echo "\t\t";
    }

    public function getTemplateName()
    {
        return "@groups/partials/group-users-list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 24,  146 => 23,  140 => 21,  138 => 20,  135 => 19,  129 => 17,  127 => 16,  124 => 15,  119 => 13,  114 => 12,  112 => 11,  109 => 10,  104 => 8,  99 => 7,  97 => 6,  94 => 5,  91 => 4,  88 => 3,  71 => 2,  29 => 29,  25 => 27,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@groups/partials/group-users-list.twig", "/Users/shingkeelau/Public/web/wp-content/plugins/membership-by-supsystic/src/Membership/Groups/views/partials/group-users-list.twig");
    }
}
