<?php

/* @addons/backend/ecommerce.twig */
class __TwigTemplate_8645d95930b290fb8479eab050776852288f65f638a7395abc276bd3ffbaed7b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@base/layouts/backend.twig", "@addons/backend/ecommerce.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"sc-tabs\">
\t\t";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ecommerceTabs"] ?? null));
        foreach ($context['_seq'] as $context["tabKey"] => $context["tab"]) {
            // line 6
            echo "\t\t\t<a href=\"#\" class=\"tab\" data-target=\"";
            echo twig_escape_filter($this->env, $context["tabKey"], "html", null, true);
            echo "\">
\t\t\t\t<i class=\"fa ";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["tab"], "fa_icon", array()), "html", null, true);
            echo "\"></i>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tab"], "title", array()), "html", null, true);
            echo "
\t\t\t</a>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['tabKey'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "    </div>
";
    }

    // line 13
    public function block_mainHeader($context, array $blocks = array())
    {
        // line 14
        echo "    <div class=\"sc-header\">
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ecommerceTabs"] ?? null));
        foreach ($context['_seq'] as $context["tabKey"] => $context["tab"]) {
            // line 16
            echo "        <div class=\"sc-header-item\" data-item=\"";
            echo twig_escape_filter($this->env, $context["tabKey"], "html", null, true);
            echo "\">
            <a class=\"sc-get-addon\" target=\"_blank\"
               href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Membership_Base_Twig')->getMembershipExtensionUrl("membership-ecommerce"), "html", null, true);
            echo "\"><button class=\"sc-button primary\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Get PRO Addon")), "html", null, true);
            echo "</button></a>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['tabKey'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "    </div>
";
    }

    // line 24
    public function block_main($context, array $blocks = array())
    {
        // line 25
        echo "    <div class=\"sc-tabs-container\">
    ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ecommerceTabs"] ?? null));
        foreach ($context['_seq'] as $context["tabKey"] => $context["tab"]) {
            // line 27
            echo "        <div class=\"sc-tab-content\" data-tab=\"";
            echo twig_escape_filter($this->env, $context["tabKey"], "html", null, true);
            echo "\">
            <a target=\"_blank\" href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Membership_Base_Twig')->getMembershipExtensionUrl("membership-ecommerce"), "html", null, true);
            echo "\">
                <img src=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Membership_Base_Twig')->getAssetsPath("addons", $this->getAttribute($context["tab"], "promo_image", array())), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Get Pro")), "html", null, true);
            echo "\">
            </a>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['tabKey'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "@addons/backend/ecommerce.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 33,  112 => 29,  108 => 28,  103 => 27,  99 => 26,  96 => 25,  93 => 24,  88 => 21,  77 => 18,  71 => 16,  67 => 15,  64 => 14,  61 => 13,  56 => 10,  45 => 7,  40 => 6,  36 => 5,  33 => 4,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@addons/backend/ecommerce.twig", "/Users/shingkeelau/Public/web/wp-content/plugins/membership-by-supsystic/src/Membership/Addons/views/backend/ecommerce.twig");
    }
}
