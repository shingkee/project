<?php

/* @forum/backend/index.twig */
class __TwigTemplate_507c562f9ec5d04babc6e17e0c7fd38584990db5ee3253b060bdd134caa5c01e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@base/layouts/backend.twig", "@forum/backend/index.twig", 1);
        $this->blocks = array(
            'mainHeader' => array($this, 'block_mainHeader'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@base/layouts/backend.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["options"] = $this->loadTemplate("@base/macros/options.twig", "@forum/backend/index.twig", 2);
        // line 3
        $context["tooltips"] = $this->loadTemplate("@base/macros/tooltips-templates.twig", "@forum/backend/index.twig", 3);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_mainHeader($context, array $blocks = array())
    {
        // line 6
        echo "\t<div class=\"sc-header\">
\t\t<h2>";
        // line 7
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Forum")), "html", null, true);
        echo "</h2>
\t\t<button data-save-settings data-item=\"forum\" class=\"save-settings sc-button icon-button primary\">
\t\t\t<i class=\"fa fa-save\"></i>
\t\t\t<span>";
        // line 10
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Save Settings")), "html", null, true);
        echo "</span>
\t\t</button>
\t</div>
";
    }

    // line 15
    public function block_main($context, array $blocks = array())
    {
        // line 16
        echo "\t
\t";
        // line 17
        $context["f"] = $this;
        // line 18
        echo "\t<div class=\"sc-tabs-container\">
\t\t<div class=\"sc-tab-content active\" data-tab=\"forum\">
\t\t\t<div class=\"mp-options\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 24
        echo $context["options"]->getradioRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable Forum Tab")), array(0 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes")), "name" => "enable-forum-tab", "value" => "yes", "checked" => ($this->getAttribute(        // line 29
($context["settings"] ?? null), "enable-forum-tab", array(), "array") == "yes")), 1 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "name" => "enable-forum-tab", "value" => "no", "checked" => ($this->getAttribute(        // line 35
($context["settings"] ?? null), "enable-forum-tab", array(), "array") == "no"))), "enable-forum-tab");
        // line 38
        echo "
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 41
        echo $context["options"]->getradioRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Replace bbPress profile link with link to Membership profile")), array(0 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes")), "name" => "replace-profile-url", "value" => "yes", "checked" => ($this->getAttribute(        // line 46
($context["settings"] ?? null), "replace-profile-url", array(), "array") == "yes")), 1 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "name" => "replace-profile-url", "value" => "no", "checked" => ($this->getAttribute(        // line 52
($context["settings"] ?? null), "replace-profile-url", array(), "array") == "no"))), "replace-profile-url");
        // line 55
        echo "
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 58
        $context["_roles"] = array(0 => array("title" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("All")), "value" => "all", "selected" => twig_in_filter("all", $this->getAttribute(        // line 61
($context["settings"] ?? null), "roles-who-can-have-forum-tab", array(), "array"))));
        // line 63
        echo "\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["roles"] ?? null));
        foreach ($context['_seq'] as $context["value"] => $context["role"]) {
            // line 65
            echo "\t\t\t\t\t\t\t";
            $context["_roles"] = twig_array_merge(($context["_roles"] ?? null), array(0 => array("title" => $this->getAttribute(            // line 66
$context["role"], "name", array()), "value" => $this->getAttribute(            // line 67
$context["role"], "id", array()), "selected" => twig_in_filter($this->getAttribute(            // line 68
$context["role"], "id", array()), $this->getAttribute(($context["settings"] ?? null), "roles-who-can-have-forum-tab", array(), "array")))));
            // line 70
            echo "\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['value'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 72
        echo $context["options"]->getmultipleSelectRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Roles who can have forum tab")),         // line 73
($context["_roles"] ?? null), "roles-who-can-have-forum-tab", "roles-who-can-have-forum-tab");
        // line 76
        echo "
\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "@forum/backend/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 76,  114 => 73,  113 => 72,  110 => 71,  104 => 70,  102 => 68,  101 => 67,  100 => 66,  98 => 65,  94 => 64,  91 => 63,  89 => 61,  88 => 58,  83 => 55,  81 => 52,  80 => 46,  79 => 41,  74 => 38,  72 => 35,  71 => 29,  70 => 24,  62 => 18,  60 => 17,  57 => 16,  54 => 15,  46 => 10,  40 => 7,  37 => 6,  34 => 5,  30 => 1,  28 => 3,  26 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@forum/backend/index.twig", "/Users/shingkeelau/Public/web/wp-content/plugins/membership-by-supsystic/src/Membership/Forum/views/backend/index.twig");
    }
}
