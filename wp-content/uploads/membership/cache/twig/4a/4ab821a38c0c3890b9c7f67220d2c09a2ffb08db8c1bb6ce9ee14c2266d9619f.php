<?php

/* @addons/backend/index.twig */
class __TwigTemplate_a29f045d467baf01e91386f35ca679df64d9c5f518b8aadb1a7599fd54c6c613 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@base/layouts/backend.twig", "@addons/backend/index.twig", 1);
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
        ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["environment"] ?? null), "dispatcher", array()), "dispatch", array(0 => "adminExtensionTabItem"), "method"), "html", null, true);
        echo "
    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["notInstalledAddons"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["addon"]) {
            // line 7
            echo "        <a href=\"#\" class=\"tab\" data-target=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["addon"], "id", array()), "html", null, true);
            echo "\">
            <i class=\"fa fa-cog\"></i>";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["addon"], "title", array()), "html", null, true);
            echo "
        </a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['addon'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "    </div>
";
    }

    // line 14
    public function block_mainHeader($context, array $blocks = array())
    {
        // line 15
        echo "    <div class=\"sc-header\">
        ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["environment"] ?? null), "dispatcher", array()), "dispatch", array(0 => "adminExtensionHeaderItem"), "method"), "html", null, true);
        echo "
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["notInstalledAddons"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["addon"]) {
            // line 18
            echo "        <div class=\"sc-header-item\" data-item=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["addon"], "id", array()), "html", null, true);
            echo "\">
            <a class=\"sc-get-addon\" target=\"_blank\"
               href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Membership_Base_Twig')->getMembershipExtensionUrl($this->getAttribute($context["addon"], "promo_id", array())), "html", null, true);
            echo "\"><button class=\"sc-button primary\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Get PRO Addon")), "html", null, true);
            echo "</button></a>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['addon'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "    </div>
";
    }

    // line 26
    public function block_main($context, array $blocks = array())
    {
        // line 27
        echo "    <div class=\"sc-tabs-container\">
        ";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["environment"] ?? null), "dispatcher", array()), "dispatch", array(0 => "adminExtensionMainItem"), "method"), "html", null, true);
        echo "
    ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["notInstalledAddons"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["addon"]) {
            // line 30
            echo "        <div class=\"sc-tab-content\" data-tab=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["addon"], "id", array()), "html", null, true);
            echo "\">
            <a target=\"_blank\" href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Membership_Base_Twig')->getMembershipExtensionUrl($this->getAttribute($context["addon"], "promo_id", array())), "html", null, true);
            echo "\">
                <img src=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Membership_Base_Twig')->getAssetsPath("addons", $this->getAttribute($context["addon"], "promo_image", array())), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Get Pro")), "html", null, true);
            echo "\">
            </a>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['addon'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "@addons/backend/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 36,  122 => 32,  118 => 31,  113 => 30,  109 => 29,  105 => 28,  102 => 27,  99 => 26,  94 => 23,  83 => 20,  77 => 18,  73 => 17,  69 => 16,  66 => 15,  63 => 14,  58 => 11,  49 => 8,  44 => 7,  40 => 6,  36 => 5,  33 => 4,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@addons/backend/index.twig", "/Users/shingkeelau/Public/web/wp-content/plugins/membership-by-supsystic/src/Membership/Addons/views/backend/index.twig");
    }
}
