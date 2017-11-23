<?php

/* @membership/backend/review-notice.twig */
class __TwigTemplate_9e3f6f83bbfc9641c142d8c27074621f7510418cf0043acef774d4cb6a0d67d5 extends Twig_Template
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
        echo "<div class=\"updated notice supsystic-admin-notice is-dismissible\">
    <h3>";
        // line 2
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Hey, I noticed you just use Membership by Supsystic over a week – that’s awesome!")), "html", null, true);
        echo "</h3>
    ";
        // line 3
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Could you please do me a BIG favor and give it a 5-star rating on WordPress? Just to help us spread the word and boost our motivation.")), "html", null, true);
        echo "
\t<p></p>
\t<a class=\"button button-primary\" href=\"https://wordpress.org/support/plugin/membership-by-supsystic/reviews/?rate=5#new-post\" target=\"_blank\" data-response-code=\"hide\">";
        // line 5
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Ok, you deserve it")), "html", null, true);
        echo "</a>
\t<button class=\"button\" data-response-code=\"later\">";
        // line 6
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Nope, maybe later")), "html", null, true);
        echo "</button>
\t<button class=\"button\" data-response-code=\"done\">";
        // line 7
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("I already did")), "html", null, true);
        echo "</button>
\t<p></p>
</div>";
    }

    public function getTemplateName()
    {
        return "@membership/backend/review-notice.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 7,  35 => 6,  31 => 5,  26 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@membership/backend/review-notice.twig", "/Users/shingkeelau/Public/web/wp-content/plugins/membership-by-supsystic/src/Membership/Membership/views/backend/review-notice.twig");
    }
}
