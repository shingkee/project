<?php

/* @auth/partials/login-modal.twig */
class __TwigTemplate_f907d2d68da6debacb795f572ba89a3dc6227f871a8f057b6dc3e5b48574e1d4 extends Twig_Template
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
        echo "<div class=\"ui modal\" id=\"membership-login-modal\">
\t<div class=\"header\">";
        // line 2
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Login")), "html", null, true);
        echo "</div>
\t<div class=\"content\">
\t\t";
        // line 4
        $this->loadTemplate("@auth/partials/login-form.twig", "@auth/partials/login-modal.twig", 4)->display($context);
        // line 5
        echo "\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@auth/partials/login-modal.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 5,  27 => 4,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@auth/partials/login-modal.twig", "/Users/shingkeelau/Public/web/wp-content/plugins/membership-by-supsystic/src/Membership/Auth/views/partials/login-modal.twig");
    }
}
