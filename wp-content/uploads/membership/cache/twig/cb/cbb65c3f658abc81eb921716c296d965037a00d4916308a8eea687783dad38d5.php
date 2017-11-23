<?php

/* @activity/partials/activities-container.twig */
class __TwigTemplate_1b2d95128b89fb3a7a1dfa7d4f5a58fddc688e537aba0852a73eb2f80feed224 extends Twig_Template
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
        echo "<div class=\"ui segment vertical basic mp-activity-container\" data-activity-context=\"";
        echo twig_escape_filter($this->env, (isset($context["context"]) ? $context["context"] : null), "html", null, true);
        echo "\">
\t
\t";
        // line 3
        if (((isset($context["userLoggedIn"]) ? $context["userLoggedIn"] : null) &&  !(isset($context["disablePostForm"]) ? $context["disablePostForm"] : null))) {
            // line 4
            echo "\t\t";
            $this->loadTemplate("@activity/partials/activity-post-form.twig", "@activity/partials/activities-container.twig", 4)->display($context);
            // line 5
            echo "\t";
        }
        // line 6
        echo "\t
\t<div class=\"mp-activity-list \">
\t\t";
        // line 8
        $this->loadTemplate("@activity/partials/activities.twig", "@activity/partials/activities-container.twig", 8)->display(array_merge($context, array("activities" => (isset($context["activities"]) ? $context["activities"] : null))));
        // line 9
        echo "\t</div>
\t
\t<div class=\"ui message no-activities\" ";
        // line 11
        if ((isset($context["activities"]) ? $context["activities"] : null)) {
            echo "style=\"display: none\"";
        }
        echo ">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("There's no any activity yet")), "html", null, true);
        echo "</div>

\t<div class=\"ui basic segment activity-loader\" style=\"display: none\">
\t\t<div class=\"ui active loader\"></div>
\t</div>
\t
\t<script id=\"image-attachment-template\" type=\"text/html\">
\t\t<div class=\"mp-attachment-image\">
\t\t\t<img class=\"ui image\">
\t\t\t<div class=\"mp-attachment-image-overlay\"></div>
\t\t\t<div class=\"mp-progress-bar\">
\t\t\t\t<div class=\"ui tiny indicating progress active\">
\t\t\t\t\t<div class=\"bar\" style=\"width: 1%; transition-duration: 300ms;\"></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<i class=\"close icon\"></i>
\t\t</div>
\t</script>

</div>

";
        // line 32
        $this->loadTemplate("@activity/partials/activity-gallery-modal.twig", "@activity/partials/activities-container.twig", 32)->display($context);
        // line 33
        $this->loadTemplate("@activity/partials/activity-report-modal.twig", "@activity/partials/activities-container.twig", 33)->display($context);
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "dispatcher", array()), "dispatch", array(0 => "activity.view.galleryModal"), "method"), "html", null, true);
        echo "
";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "dispatcher", array()), "dispatch", array(0 => "activity.view.sliderModal"), "method"), "html", null, true);
        echo "
";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "dispatcher", array()), "dispatch", array(0 => "activity.view.googleMapsModal"), "method"), "html", null, true);
    }

    public function getTemplateName()
    {
        return "@activity/partials/activities-container.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 36,  79 => 35,  75 => 34,  73 => 33,  71 => 32,  43 => 11,  39 => 9,  37 => 8,  33 => 6,  30 => 5,  27 => 4,  25 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@activity/partials/activities-container.twig", "/Users/shingkeelau/web/wp-content/plugins/membership-by-supsystic/src/Membership/Activity/views/partials/activities-container.twig");
    }
}
