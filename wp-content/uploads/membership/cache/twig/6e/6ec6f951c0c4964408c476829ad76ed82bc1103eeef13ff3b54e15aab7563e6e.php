<?php

/* @gallery/partials/backend.main.content.tab.twig */
class __TwigTemplate_608738d34a04f98327eb937c048f1c6aeea5c9a435f66408365ed6ed2f6a8db8 extends Twig_Template
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
        echo "<a href=\"#\" class=\"tab\" data-target=\"plugins\">
    <i class=\"fa fa-plug\"></i>";
        // line 2
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Content")), "html", null, true);
        echo "
</a>";
    }

    public function getTemplateName()
    {
        return "@gallery/partials/backend.main.content.tab.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@gallery/partials/backend.main.content.tab.twig", "/Users/shingkeelau/web/wp-content/plugins/membership-by-supsystic/src/Membership/Gallery/views/partials/backend.main.content.tab.twig");
    }
}
