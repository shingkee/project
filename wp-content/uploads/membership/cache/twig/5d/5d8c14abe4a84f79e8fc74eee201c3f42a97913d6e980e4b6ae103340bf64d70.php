<?php

/* @groups/partials/create-group-modal.twig */
class __TwigTemplate_679c97c1697495fba99709a44899104c16eff2418eef2bf168fb6c21a2718158 extends Twig_Template
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
        echo "<div class=\"ui small modal\" id=\"create-group-modal\">
\t<i class=\"close icon\"></i>
\t<div class=\"header\">";
        // line 3
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Create new group")), "html", null, true);
        echo "</div>
\t<div class=\"content\">
\t\t<div class=\"ui form\">
\t\t\t
\t\t\t<div class=\"ui message respone-message\" style=\"display: none\"></div>
\t\t\t<div class=\"field\">
\t\t\t\t<label>";
        // line 9
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Group Name")), "html", null, true);
        echo "</label>
\t\t\t\t<input type=\"text\" name=\"name\">
\t\t\t</div>
\t\t\t<div class=\"field\">
\t\t\t\t<label>";
        // line 13
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Group Description")), "html", null, true);
        echo "</label>
\t\t\t\t<textarea max=\"2000\" rows=\"2\" name=\"description\"></textarea>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"field\">
\t\t\t\t<label>";
        // line 18
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Community type")), "html", null, true);
        echo "</label>
\t\t\t\t<select class=\"ui dropdown\" name=\"type\">
\t\t\t\t\t<option value=\"open\">Open</option>
\t\t\t\t\t<option value=\"closed\">Closed</option>
\t\t\t\t\t<option value=\"private\">Private</option>
\t\t\t\t</select>
\t\t\t</div>
\t\t\t<div class=\"field\">
\t\t\t\t<label>";
        // line 26
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Invite users")), "html", null, true);
        echo "</label>
\t\t\t\t<div class=\"ui fluid multiple search selection dropdown\">
\t\t\t\t\t<input type=\"hidden\" name=\"users\">
\t\t\t\t\t<i class=\"dropdown icon\"></i>
\t\t\t\t\t<div class=\"default text\">";
        // line 30
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enter name")), "html", null, true);
        echo "</div>
\t\t\t\t\t<div class=\"ui active small inline loader\" style=\"display: none; margin: 0.2em 0;\"></div>
\t\t\t\t\t<div class=\"menu ui relaxed list\">
\t\t\t\t\t\t";
        // line 33
        $this->loadTemplate("@base/partials/search-dropdown-user.twig", "@groups/partials/create-group-modal.twig", 33)->display(array_merge($context, array("users" => (isset($context["friends"]) ? $context["friends"] : null))));
        // line 34
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"actions\">
\t\t<button class=\"ui button secondary mini cancel\">";
        // line 40
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Cancel")), "html", null, true);
        echo "</button>
\t\t<button class=\"ui button mini primary approve\">";
        // line 41
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Create")), "html", null, true);
        echo "</button>
\t</div>
</div>
<script type=\"text/javascript\" src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Membership_Base_Twig')->getAssetsPath("groups", "js/create-group.frontend.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@groups/partials/create-group-modal.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 44,  85 => 41,  81 => 40,  73 => 34,  71 => 33,  65 => 30,  58 => 26,  47 => 18,  39 => 13,  32 => 9,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@groups/partials/create-group-modal.twig", "/Users/shingkeelau/web/wp-content/plugins/membership-by-supsystic/src/Membership/Groups/views/partials/create-group-modal.twig");
    }
}
