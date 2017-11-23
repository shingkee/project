<?php

/* @forum/activity-title.twig */
class __TwigTemplate_16d9b0f39bd615e63f13eb41c39ee6402cbfc85c98fc6653bcc9cbcf1207c377 extends Twig_Template
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
            echo "\t";
            echo sprintf(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("%s created new topic %s.")), (((("<a href=\"" . $this->env->getExtension('Membership_Users_Twig')->profileUrl($this->getAttribute(            // line 4
($context["activity"] ?? null), "author", array()))) . "\">") . $this->getAttribute($this->getAttribute(($context["activity"] ?? null), "author", array()), "displayName", array())) . "</a>"), (((("<a target=\"_blank\" href=\"" . $this->getAttribute($this->getAttribute(            // line 5
($context["activity"] ?? null), "post", array()), "guid", array())) . "\">") . $this->getAttribute($this->getAttribute(($context["activity"] ?? null), "post", array()), "post_title", array())) . "</a>"));
            // line 8
            echo "
";
        }
        // line 10
        echo "
";
        // line 11
        if (($this->getAttribute(($context["activity"] ?? null), "type", array()) == "bbpress_reply")) {
            // line 12
            echo "    ";
            echo sprintf(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("%s replied in topic %s.")), (((("<a href=\"" . $this->env->getExtension('Membership_Users_Twig')->profileUrl($this->getAttribute(            // line 14
($context["activity"] ?? null), "author", array()))) . "\">") . $this->getAttribute($this->getAttribute(($context["activity"] ?? null), "author", array()), "displayName", array())) . "</a>"), (((("<a target=\"_blank\" href=\"" . $this->getAttribute($this->getAttribute(            // line 15
($context["activity"] ?? null), "post", array()), "guid", array())) . "\">") . $this->getAttribute($this->getAttribute(($context["activity"] ?? null), "post", array()), "post_title", array())) . "</a>"));
            // line 18
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "@forum/activity-title.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 18,  38 => 15,  37 => 14,  35 => 12,  33 => 11,  30 => 10,  26 => 8,  24 => 5,  23 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@forum/activity-title.twig", "/Users/shingkeelau/Public/web/wp-content/plugins/membership-by-supsystic/src/Membership/Forum/views/activity-title.twig");
    }
}
