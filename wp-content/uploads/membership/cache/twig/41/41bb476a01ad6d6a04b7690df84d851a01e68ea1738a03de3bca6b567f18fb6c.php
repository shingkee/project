<?php

/* @users/partials/users-send-message-modal.twig */
class __TwigTemplate_b7b1c41b373f42ea426c767c32840a5de6b3672ae7882ed6ea4fd1e432f35744 extends Twig_Template
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
        echo "<div class=\"ui small modal\" id=\"send-message-modal\">
    <i class=\"close icon\"></i>
    <div class=\"header\">
        ";
        // line 4
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Send message to")), "html", null, true);
        echo " <span class=\"recipient-name\"></span>
    </div>
    <div class=\"content\">
        <div class=\"ui form\">
            <div class=\"field\">
                <label>";
        // line 9
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Message")), "html", null, true);
        echo "</label>
                <textarea rows=\"5\"></textarea>
            </div>
        </div>
    </div>
    <div class=\"actions\">
        <button class=\"ui button mini secondary cancel\">";
        // line 15
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Cancel")), "html", null, true);
        echo "</button>
        <button class=\"ui positive mini primary button\">";
        // line 16
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Send")), "html", null, true);
        echo "</button>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "@users/partials/users-send-message-modal.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 16,  41 => 15,  32 => 9,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@users/partials/users-send-message-modal.twig", "/Users/shingkeelau/web/wp-content/plugins/membership-by-supsystic/src/Membership/Users/views/partials/users-send-message-modal.twig");
    }
}
