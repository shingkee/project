<?php

/* @users/backend/admin-fields-view.twig */
class __TwigTemplate_180551ba6870c712697fbca4c1b9e159b6f43c5f991cdab7c9a51d7284784921 extends Twig_Template
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
        $context["fieldsTemplates"] = $this->loadTemplate("@users/macros/admin-fields.twig", "@users/backend/admin-fields-view.twig", 1);
        // line 2
        ob_start();
        // line 3
        echo "<h1>";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Membership profile")), "html", null, true);
        echo "</h1>
";
        // line 4
        $context["sections"] = array();
        // line 5
        echo "<table class=\"form-table\">
\t<tbody>
\t\t";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) ? $context["fields"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 8
            echo "\t\t\t";
            if ($this->getAttribute($context["field"], "enabled", array())) {
                // line 9
                echo "\t\t\t\t";
                if (!twig_in_filter($this->getAttribute($context["field"], "section", array()), (isset($context["sections"]) ? $context["sections"] : null))) {
                    // line 10
                    echo "\t\t\t\t\t<h2>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "section", array()), "html", null, true);
                    echo "</h2>
\t\t\t\t\t";
                    // line 11
                    $context["sections"] = twig_array_merge((isset($context["sections"]) ? $context["sections"] : null), array(0 => $this->getAttribute($context["field"], "section", array())));
                    // line 12
                    echo "\t\t\t\t";
                }
                // line 13
                echo "\t\t\t\t";
                echo $context["fieldsTemplates"]->getoutputField($context["field"]);
                echo "
\t\t\t";
            }
            // line 15
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "\t</tbody>
</table>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "@users/backend/admin-fields-view.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 16,  60 => 15,  54 => 13,  51 => 12,  49 => 11,  44 => 10,  41 => 9,  38 => 8,  34 => 7,  30 => 5,  28 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import \"@users/macros/admin-fields.twig\" as fieldsTemplates %}
{% spaceless %}
<h1>{{ translate('Membership profile') }}</h1>
{% set sections = [] %}
<table class=\"form-table\">
\t<tbody>
\t\t{% for field in fields %}
\t\t\t{% if field.enabled  %}
\t\t\t\t{% if field.section not in sections %}
\t\t\t\t\t<h2>{{ field.section }}</h2>
\t\t\t\t\t{% set sections = sections|merge([field.section]) %}
\t\t\t\t{% endif %}
\t\t\t\t{{ fieldsTemplates.outputField(field) }}
\t\t\t{% endif %}
\t\t{% endfor %}
\t</tbody>
</table>
{% endspaceless %}", "@users/backend/admin-fields-view.twig", "/Users/shingkeelau/web/wp-content/plugins/membership-by-supsystic/src/Membership/Users/views/backend/admin-fields-view.twig");
    }
}
