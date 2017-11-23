<?php

/* @groups/activities.twig */
class __TwigTemplate_4393a79ee806e139da61901987905e7e9721914996364a806eea17e229a113a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@groups/group.twig", "@groups/activities.twig", 1);
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
        echo "\t";
        $this->loadTemplate("@activity/partials/activities-container.twig", "@groups/activities.twig", 4)->display(array_merge($context, array("activities" => ($context["activities"] ?? null), "context" => "group", "disablePostForm" =>  !call_user_func_array($this->env->getFunction('currentUserHasGroupPermission')->getCallable(), array("post-activity")))));
    }

    public function getTemplateName()
    {
        return "@groups/activities.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@groups/activities.twig", "/Users/shingkeelau/Public/web/wp-content/plugins/membership-by-supsystic/src/Membership/Groups/views/activities.twig");
    }
}
