<?php

/* @forum/activity-content.twig */
class __TwigTemplate_50ddd6677ee781c81f928ae818f3ca2b93c93bd8f165c35e55b6769d68fb0973 extends Twig_Template
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
        if (($this->getAttribute(($context["activity"] ?? null), "type", array()) == "bbpress_topic")) {
            // line 2
            echo "\t<div class=\"mp-activity-content-text\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["activity"] ?? null), "post", array()), "post_content", array()), "html", null, true);
            echo "</div>
";
        }
        // line 4
        echo "
";
        // line 5
        if (($this->getAttribute(($context["activity"] ?? null), "type", array()) == "bbpress_reply")) {
            // line 6
            echo "\t<div class=\"mp-activity-content-text\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["activity"] ?? null), "post_reply", array()), "post_content", array()), "html", null, true);
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "@forum/activity-content.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 6,  30 => 5,  27 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@forum/activity-content.twig", "/Users/shingkeelau/Public/web/wp-content/plugins/membership-by-supsystic/src/Membership/Forum/views/activity-content.twig");
    }
}
