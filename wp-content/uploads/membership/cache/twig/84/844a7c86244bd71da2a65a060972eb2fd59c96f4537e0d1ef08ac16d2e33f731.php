<?php

/* @users/backend/index.twig */
class __TwigTemplate_9613383d6b37c6ad55123e284577c32968b62b57d550772a4c8683b1bc976071 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@base/layouts/backend.twig", "@users/backend/index.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@base/layouts/backend.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["options"] = $this->loadTemplate("@base/macros/options.twig", "@users/backend/index.twig", 2);
        // line 3
        $context["tooltips"] = $this->loadTemplate("@base/macros/tooltips-templates.twig", "@users/backend/index.twig", 3);
        // line 4
        $context["pagination"] = $this->loadTemplate("@base/macros/pagination.twig", "@users/backend/index.twig", 4);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 25
    public function block_head($context, array $blocks = array())
    {
        // line 26
        echo "\t<div class=\"sc-tabs\">
\t\t<a href=\"#\" class=\"tab active\" data-target=\"main\">
\t\t\t<i class=\"fa fa-user\"></i>";
        // line 28
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Main")), "html", null, true);
        echo "
\t\t</a>
\t\t<a href=\"#\" class=\"tab\" data-target=\"fields\">
\t\t\t<i class=\"fa fa-list-alt\"></i>";
        // line 31
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Registration Fields")), "html", null, true);
        echo "
\t\t</a>
\t</div>
";
    }

    // line 36
    public function block_main($context, array $blocks = array())
    {
        // line 37
        echo "
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Membership_Base_Twig')->getAssetsPath("base", "lib/cropper/cropper.min.css"), "html", null, true);
        echo "\">
    <script async type=\"text/javascript\" src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Membership_Base_Twig')->getAssetsPath("base", "lib/cropper/cropper.min.js"), "html", null, true);
        echo "\"></script>

\t";
        // line 41
        $context["f"] = $this;
        // line 42
        echo "\t<div class=\"sc-tabs-container\">
\t\t<div class=\"sc-tab-content active\" data-tab=\"main\">
\t\t\t
\t\t\t<div class=\"sc-header\">
\t\t\t\t<h2>";
        // line 46
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Profile")), "html", null, true);
        echo "</h2>
\t\t\t\t<button data-save-settings class=\"save-settings sc-button icon-button primary\">
\t\t\t\t\t<i class=\"fa fa-save\"></i>
\t\t\t\t\t<span>";
        // line 49
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Save Settings")), "html", null, true);
        echo "</span>
\t\t\t\t</button>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"mp-options\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t
\t\t\t\t\t";
        // line 57
        $context["_roles"] = array();
        // line 58
        echo "\t
\t\t\t\t\t";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["roles"]) ? $context["roles"] : null));
        foreach ($context['_seq'] as $context["value"] => $context["role"]) {
            // line 60
            echo "\t\t\t\t\t\t";
            $context["_roles"] = twig_array_merge((isset($context["_roles"]) ? $context["_roles"] : null), array(0 => array("title" => $this->getAttribute(            // line 61
$context["role"], "name", array()), "value" => $this->getAttribute(            // line 62
$context["role"], "id", array()), "selected" => ($this->getAttribute(            // line 63
(isset($context["settings"]) ? $context["settings"] : null), "default-role", array(), "array") == $this->getAttribute($context["role"], "id", array())))));
            // line 65
            echo "\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['value'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "
\t\t\t\t\t";
        // line 67
        echo $context["options"]->getselectRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Default User role")),         // line 68
(isset($context["_roles"]) ? $context["_roles"] : null), "default-role", "default-role");
        // line 71
        echo "

\t\t\t\t\t";
        // line 73
        echo $context["options"]->getradioRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Use Profile Avatar")), array(0 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes")), "name" => "use-avatar", "value" => "yes", "checked" => ($this->getAttribute(        // line 78
(isset($context["settings"]) ? $context["settings"] : null), "use-avatar", array(), "array") == "yes")), 1 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "name" => "use-avatar", "value" => "no", "checked" => ($this->getAttribute(        // line 84
(isset($context["settings"]) ? $context["settings"] : null), "use-avatar", array(), "array") == "no"))), "use-avatar");
        // line 87
        echo "

\t\t\t\t\t";
        // line 89
        echo $context["options"]->getradioRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Use Profile Gravatar")), array(0 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes")), "name" => "use-gravatar", "value" => "yes", "checked" => ($this->getAttribute(        // line 94
(isset($context["settings"]) ? $context["settings"] : null), "use-gravatar", array(), "array") == "yes")), 1 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "name" => "use-gravatar", "value" => "no", "checked" => ($this->getAttribute(        // line 100
(isset($context["settings"]) ? $context["settings"] : null), "use-gravatar", array(), "array") == "no"))), "use-gravatar");
        // line 103
        echo "

\t\t\t\t\t<div class=\"mp-option\" id=\"avatar-size\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t";
        // line 108
        echo $context["options"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Profile Avatar Size")));
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t<div class=\"mp-option-sizes-input\">
\t\t\t\t\t\t\t\t\t<div class=\"mp-option-input\">
\t\t\t\t\t\t\t\t\t\t<input class=\"sc-input\" value=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "avatar-size", array(), "array"), "width", array()), "html", null, true);
        echo "\" name=\"avatar-size[width]\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<span>x</span>
\t\t\t\t\t\t\t\t\t<div class=\"mp-option-input\">
\t\t\t\t\t\t\t\t\t\t<input class=\"sc-input\" value=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "avatar-size", array(), "array"), "height", array()), "html", null, true);
        echo "\" name=\"avatar-size[height]\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"mp-option\" id=\"avatar-large-size\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t";
        // line 127
        echo $context["options"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Avatar Thumbnail Large Size")));
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t<div class=\"mp-option-sizes-input\">
\t\t\t\t\t\t\t\t\t<div class=\"mp-option-input\">
\t\t\t\t\t\t\t\t\t\t<input class=\"sc-input\" value=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "avatar-large-size", array(), "array"), "width", array()), "html", null, true);
        echo "\" name=\"avatar-large-size[width]\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<span>x</span>
\t\t\t\t\t\t\t\t\t<div class=\"mp-option-input\">
\t\t\t\t\t\t\t\t\t\t<input class=\"sc-input\" value=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "avatar-large-size", array(), "array"), "height", array()), "html", null, true);
        echo "\" name=\"avatar-large-size[height]\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"mp-option\" id=\"avatar-medium-size\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t";
        // line 146
        echo $context["options"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Avatar Thumbnail Medium Size")));
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t<div class=\"mp-option-sizes-input\">
\t\t\t\t\t\t\t\t\t<div class=\"mp-option-input\">
\t\t\t\t\t\t\t\t\t\t<input class=\"sc-input\" value=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "avatar-medium-size", array(), "array"), "width", array()), "html", null, true);
        echo "\" name=\"avatar-medium-size[width]\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<span>x</span>
\t\t\t\t\t\t\t\t\t<div class=\"mp-option-input\">
\t\t\t\t\t\t\t\t\t\t<input class=\"sc-input\" value=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "avatar-medium-size", array(), "array"), "height", array()), "html", null, true);
        echo "\" name=\"avatar-medium-size[height]\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"mp-option\" id=\"avatar-small-size\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t";
        // line 165
        echo $context["options"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Avatar Thumbnail Small Size")));
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t<div class=\"mp-option-sizes-input\">
\t\t\t\t\t\t\t\t\t<div class=\"mp-option-input\">
\t\t\t\t\t\t\t\t\t\t<input class=\"sc-input\" value=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "avatar-small-size", array(), "array"), "width", array()), "html", null, true);
        echo "\" name=\"avatar-small-size[width]\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<span>x</span>
\t\t\t\t\t\t\t\t\t<div class=\"mp-option-input\">
\t\t\t\t\t\t\t\t\t\t<input class=\"sc-input\" value=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "avatar-small-size", array(), "array"), "height", array()), "html", null, true);
        echo "\" name=\"avatar-small-size[height]\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t\t

                    ";
        // line 182
        $context["defaultAvatar"] = $this->env->getExtension('Membership_Base_Twig')->getAssetsPath("users", "images/user.jpg", false);
        // line 183
        echo "
\t\t\t\t\t<div class=\"mp-option\" id=\"default-avatar\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t";
        // line 187
        echo $context["options"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Default Avatar Image")));
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t<div class=\"mp-default-image\">
\t\t\t\t\t\t\t\t\t<img style=\"max-width:50px;max-height: 50px;\"
\t\t\t\t\t\t\t\t\t\tsrc=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "default-avatar", array(), "array"), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t<button class=\"mp-option-button sc-button primary mp-change\">";
        // line 194
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Change")), "html", null, true);
        echo "</button>
\t\t\t\t\t\t\t\t\t<button class=\"mp-option-button sc-button primary mp-set-to-default\"
\t\t\t\t\t\t\t\t\t\t";
        // line 196
        if ((((isset($context["defaultAvatar"]) ? $context["defaultAvatar"] : null) == $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "default-avatar", array(), "array")) || ((isset($context["defaultAvatar"]) ? $context["defaultAvatar"] : null) == $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "default-avatar-source", array(), "array")))) {
            // line 197
            echo "\t\t\t\t\t\t\t\t\t\t\tstyle=\"display: none\" 
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 199
        echo "\t\t\t\t\t\t\t\t\t>";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Set to default")), "html", null, true);
        echo "</button>
\t\t\t\t\t\t\t\t\t<input
\t\t\t\t\t\t\t\t\t\ttype=\"hidden\"
\t\t\t\t\t\t\t\t\t\tname=\"default-avatar\"
\t\t\t\t\t\t\t\t\t\tvalue=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "default-avatar", array(), "array"), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t\t\t>
                                    <input
                                            type=\"hidden\"
                                            name=\"default-avatar-large\"
                                            value=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "default-avatar-large", array(), "array"), "html", null, true);
        echo "\"
                                    >
                                    <input
                                            type=\"hidden\"
                                            name=\"default-avatar-medium\"
                                            value=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "default-avatar-medium", array(), "array"), "html", null, true);
        echo "\"
                                    >
                                    <input
                                            type=\"hidden\"
                                            name=\"default-avatar-small\"
                                            value=\"";
        // line 218
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "default-avatar-small", array(), "array"), "html", null, true);
        echo "\"
                                    >
                                    <input
                                            type=\"hidden\"
                                            name=\"default-avatar-source\"
                                            data-default-width-input-name=\"avatar-size[width]\"
                                            data-default-height-input-name=\"avatar-size[height]\"
                                            data-default-crop-input-name=\"default-avatar-crop-data\"
                                            data-default-image=\"";
        // line 226
        echo twig_escape_filter($this->env, (isset($context["defaultAvatar"]) ? $context["defaultAvatar"] : null), "html", null, true);
        echo "\"
                                            value=\"";
        // line 227
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "default-avatar-source", array(), "array"), "html", null, true);
        echo "\"
                                    >
                                    <input
                                            type=\"hidden\"
                                            name=\"default-avatar-crop-data\"
                                            value=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "default-avatar-crop-data", array(), "array"), "html", null, true);
        echo "\"
                                    >
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>


\t\t\t\t\t";
        // line 240
        echo $context["options"]->getradioRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Use Profile Cover")), array(0 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes")), "name" => "use-cover", "value" => "yes", "checked" => ($this->getAttribute(        // line 245
(isset($context["settings"]) ? $context["settings"] : null), "use-cover", array(), "array") == "yes")), 1 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "name" => "use-cover", "value" => "no", "checked" => ($this->getAttribute(        // line 251
(isset($context["settings"]) ? $context["settings"] : null), "use-cover", array(), "array") == "no"))), "use-cover");
        // line 254
        echo "

\t\t\t\t\t<div class=\"mp-option\" id=\"cover-size\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t";
        // line 259
        echo $context["options"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Profile Cover Size")));
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t<div class=\"mp-option-sizes-input\">
\t\t\t\t\t\t\t\t\t<div class=\"mp-option-input\">
\t\t\t\t\t\t\t\t\t\t<input class=\"sc-input\" value=\"";
        // line 264
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "cover-size", array(), "array"), "width", array()), "html", null, true);
        echo "\" name=\"cover-size[width]\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<span>x</span>
\t\t\t\t\t\t\t\t\t<div class=\"mp-option-input\">
\t\t\t\t\t\t\t\t\t\t<input class=\"sc-input\" value=\"";
        // line 268
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "cover-size", array(), "array"), "height", array()), "html", null, true);
        echo "\" name=\"cover-size[height]\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"mp-option\" id=\"cover-small-size\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t";
        // line 278
        echo $context["options"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Cover Thumbnail Medium Size")));
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t<div class=\"mp-option-sizes-input\">
\t\t\t\t\t\t\t\t\t<div class=\"mp-option-input\">
\t\t\t\t\t\t\t\t\t\t<input class=\"sc-input\" value=\"";
        // line 283
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "cover-medium-size", array(), "array"), "width", array()), "html", null, true);
        echo "\" name=\"cover-medium-size[width]\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<span>x</span>
\t\t\t\t\t\t\t\t\t<div class=\"mp-option-input\">
\t\t\t\t\t\t\t\t\t\t<input class=\"sc-input\" value=\"";
        // line 287
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "cover-medium-size", array(), "array"), "height", array()), "html", null, true);
        echo "\" name=\"cover-medium-size[height]\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"mp-option\" id=\"cover-small-size\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t";
        // line 297
        echo $context["options"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Cover Thumbnail Small Size")));
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t<div class=\"mp-option-sizes-input\">
\t\t\t\t\t\t\t\t\t<div class=\"mp-option-input\">
\t\t\t\t\t\t\t\t\t\t<input class=\"sc-input\" value=\"";
        // line 302
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "cover-small-size", array(), "array"), "width", array()), "html", null, true);
        echo "\" name=\"cover-small-size[width]\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<span>x</span>
\t\t\t\t\t\t\t\t\t<div class=\"mp-option-input\">
\t\t\t\t\t\t\t\t\t\t<input class=\"sc-input\" value=\"";
        // line 306
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "cover-small-size", array(), "array"), "height", array()), "html", null, true);
        echo "\" name=\"cover-small-size[height]\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

                    ";
        // line 313
        $context["defaultCover"] = $this->env->getExtension('Membership_Base_Twig')->getAssetsPath("users", "images/user-cover.jpg", false);
        // line 314
        echo "
\t\t\t\t\t<div class=\"mp-option\" id=\"default-cover\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t";
        // line 318
        echo $context["options"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Default Cover Image")));
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t<div class=\"mp-default-image\" data-modal=\"#cover-modal\" data-width=\"\" data-height=\"\">
\t\t\t\t\t\t\t\t\t<img style=\"max-width:50px;max-height: 50px;\"
\t\t\t\t\t\t\t\t\t\tsrc=\"";
        // line 323
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "default-cover", array(), "array"), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t<button class=\"mp-option-button sc-button primary mp-change\">";
        // line 325
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Change")), "html", null, true);
        echo "</button>
\t\t\t\t\t\t\t\t\t<button class=\"mp-option-button sc-button primary mp-set-to-default\"
\t\t\t\t\t\t\t\t\t\t";
        // line 327
        if ((((isset($context["defaultCover"]) ? $context["defaultCover"] : null) == $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "default-cover", array(), "array")) || ((isset($context["defaultCover"]) ? $context["defaultCover"] : null) == $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "default-cover-source", array(), "array")))) {
            // line 328
            echo "\t\t\t\t\t\t\t\t\t\t\tstyle=\"display: none\" 
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 330
        echo "\t\t\t\t\t\t\t\t\t>";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Set to default")), "html", null, true);
        echo "</button>
\t\t\t\t\t\t\t\t\t<input
\t\t\t\t\t\t\t\t\t\ttype=\"hidden\"
\t\t\t\t\t\t\t\t\t\tname=\"default-cover\"
\t\t\t\t\t\t\t\t\t\tvalue=\"";
        // line 334
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "default-cover", array(), "array"), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t\t\t>
                                    <input
                                            type=\"hidden\"
                                            name=\"default-cover-medium\"
                                            value=\"";
        // line 339
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "default-cover-medium", array(), "array"), "html", null, true);
        echo "\"
                                    >
                                    <input
                                            type=\"hidden\"
                                            name=\"default-cover-small\"
                                            value=\"";
        // line 344
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "default-cover-small", array(), "array"), "html", null, true);
        echo "\"
                                    >
                                    <input
                                            type=\"hidden\"
                                            name=\"default-cover-source\"
                                            data-default-image=\"";
        // line 349
        echo twig_escape_filter($this->env, (isset($context["defaultCover"]) ? $context["defaultCover"] : null), "html", null, true);
        echo "\"
                                            data-default-width-input-name=\"cover-size[width]\"
                                            data-default-height-input-name=\"cover-size[height]\"
                                            data-default-crop-input-name=\"default-cover-crop-data\"
                                            value=\"";
        // line 353
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "default-cover-source", array(), "array"), "html", null, true);
        echo "\"
                                    >
                                    <input
                                            type=\"hidden\"
                                            name=\"default-cover-crop-data\"
                                            value=\"";
        // line 358
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "default-cover-crop-data", array(), "array"), "html", null, true);
        echo "\"
                                    >
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>


\t\t\t\t\t";
        // line 366
        $context["permalinks"] = array(0 => array("value" => "username", "title" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Username")), "selected" => ($this->getAttribute(        // line 370
(isset($context["settings"]) ? $context["settings"] : null), "permalink-base", array(), "array") == "username")), 1 => array("value" => "id", "title" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("User ID")), "selected" => ($this->getAttribute(        // line 375
(isset($context["settings"]) ? $context["settings"] : null), "permalink-base", array(), "array") == "id")));
        // line 378
        echo "
\t\t\t\t\t";
        // line 379
        echo $context["options"]->getselectRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Profile Permalink Base")),         // line 380
(isset($context["permalinks"]) ? $context["permalinks"] : null), "permalink-base", "permalink-base");
        // line 383
        echo "


\t\t\t\t\t";
        // line 386
        $context["displayNames"] = array(0 => array("value" => "username", "title" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Username")), "selected" => ($this->getAttribute(        // line 390
(isset($context["settings"]) ? $context["settings"] : null), "display-name", array(), "array") == "username")), 1 => array("value" => "firstname-lastname", "title" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("First Name Last Name")), "selected" => ($this->getAttribute(        // line 395
(isset($context["settings"]) ? $context["settings"] : null), "display-name", array(), "array") == "firstname-lastname")), 2 => array("value" => "lastname-firstname", "title" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Last Name First Name")), "selected" => ($this->getAttribute(        // line 400
(isset($context["settings"]) ? $context["settings"] : null), "display-name", array(), "array") == "lastname-firstname")));
        // line 403
        echo "
\t\t\t\t\t";
        // line 404
        echo $context["options"]->getselectRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("User Display Name")),         // line 405
(isset($context["displayNames"]) ? $context["displayNames"] : null), "display-name", "display-name");
        // line 408
        echo "

\t\t\t
\t\t\t\t\t";
        // line 411
        echo $context["options"]->getradioRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Registration Confirmation")), array(0 => array("value" => "auto", "label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Auto")), "name" => "registration-confirmation", "checked" => ($this->getAttribute(        // line 416
(isset($context["settings"]) ? $context["settings"] : null), "registration-confirmation", array(), "array") == "auto")), 1 => array("value" => "email-confirmation", "label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Email confirmation")), "name" => "registration-confirmation", "checked" => ($this->getAttribute(        // line 422
(isset($context["settings"]) ? $context["settings"] : null), "registration-confirmation", array(), "array") == "email-confirmation")), 2 => array("value" => "admin-confirmation", "label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Administrator confirmation")), "name" => "registration-confirmation", "checked" => ($this->getAttribute(        // line 428
(isset($context["settings"]) ? $context["settings"] : null), "registration-confirmation", array(), "array") == "admin-confirmation"))), "registration-confirmation");
        // line 431
        echo "

\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t
\t\t<div class=\"sc-tab-content\" data-tab=\"fields\">
\t\t\t<div class=\"mp-fields\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<div class=\"action-panel\">
\t\t\t\t\t\t\t<button data-save-settings class=\"save-fields sc-button icon-button primary\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-save\"></i>
\t\t\t\t\t\t\t\t<span>";
        // line 446
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Save Fields")), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<button class=\"add-new-section sc-button icon-button primary\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-plus-circle\"></i>
\t\t\t\t\t\t\t\t<span>";
        // line 450
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Add Section")), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<button class=\"add-new-field sc-button icon-button primary\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-plus-circle\"></i>
\t\t\t\t\t\t\t\t<span>";
        // line 454
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Add Field")), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"mp-fields-container\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"mp-fields-template sc-hidden\">
\t\t<table>
\t\t\t<tr class=\"mp-field\">
\t\t\t\t<td class=\"mp-field-drag-handler\">
\t\t\t\t\t<i class=\"fa fa-arrows-v\"></i>
\t\t\t\t</td>
\t\t\t\t<td class=\"mp-field-label\">
\t\t\t\t\t<input type=\"text\" class=\"mp-field-label-input\" name=\"label\">
\t\t\t\t</td>
\t\t\t\t<td class=\"mp-field-type\">
\t\t\t\t\t<select class=\"sc-input mp-field-types-select\" name=\"type\">
\t\t\t\t\t\t";
        // line 475
        echo $context["f"]->getfieldsList();
        echo "
\t\t\t\t\t</select>
\t\t\t\t</td>
\t\t\t\t<td class=\"mp-field-registration\">
\t\t\t\t\t<label class=\"sc-checkbox\">
\t\t\t\t\t\t<input type=\"checkbox\" name=\"registration\" value=\"true\">
\t\t\t\t\t\t<div class=\"sc-checkbox-state\"></div>
\t\t\t\t\t</label>
\t\t\t\t</td>
\t\t\t\t<td class=\"mp-field-required\">
\t\t\t\t\t<label class=\"sc-checkbox\">
\t\t\t\t\t\t<input type=\"checkbox\" name=\"required\" value=\"true\">
\t\t\t\t\t\t<div class=\"sc-checkbox-state\"></div>
\t\t\t\t\t</label>
\t\t\t\t</td>
\t\t\t\t<td class=\"mp-field-enabled\">
\t\t\t\t\t<label class=\"sc-checkbox\">
\t\t\t\t\t\t<input type=\"checkbox\" name=\"enabled\" value=\"true\">
\t\t\t\t\t\t<div class=\"sc-checkbox-state\"></div>
\t\t\t\t\t</label>
\t\t\t\t</td>
\t\t\t\t<td class=\"mp-field-action\">
\t\t\t\t\t<button class=\"sc-button mp-field-edit-button\">
\t\t\t\t\t\t<i class=\"fa fa-lg fa-edit\"></i>
\t\t\t\t\t\t";
        // line 499
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Edit")), "html", null, true);
        echo "
\t\t\t\t\t</button>
\t\t\t\t\t<button class=\"sc-button mp-field-remove-button\">\t
\t\t\t\t\t\t<i class=\"fa fa-lg fa-trash-o\"></i>
\t\t\t\t\t\t";
        // line 503
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Remove")), "html", null, true);
        echo "
\t\t\t\t\t</button>
\t\t\t\t</td>
\t\t\t</tr>
\t\t</table>
\t</div>

\t<div class=\"mp-section-template sc-hidden\">
\t\t<div class=\"mp-section\">
\t\t\t<div class=\"mp-section-title-bar\">
\t\t\t\t<div class=\"mp-section-drag-handler\">
\t\t\t\t\t<i class=\"fa fa-arrows-v\"></i>
\t\t\t\t</div>
\t\t\t\t<div class=\"mp-section-title\">
\t\t\t\t\t<input type=\"text\" class=\"mp-section-title-input\">
\t\t\t\t</div>
\t\t\t\t<div class=\"mp-section-remove\">
\t\t\t\t\t<i class=\"fa fa-times\"></i>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"mp-section-container\">
\t\t\t\t<table class=\"mp-section-fields-table\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t<th>Field Label</th>
\t\t\t\t\t\t\t<th>Type</th>
\t\t\t\t\t\t\t<th>Registration</th>
\t\t\t\t\t\t\t<th>Required</th>
\t\t\t\t\t\t\t<th>Enabled</th>
\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody class=\"fields-list\">
\t\t\t\t\t\t<tr class=\"fields-list-placeholder\"></tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"mp-modal add-section-modal sc-hidden\">
\t\t<div class=\"row sc-input-row\">
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<label class=\"sc-label\">";
        // line 547
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Section Name")), "html", null, true);
        echo "</label>
\t\t\t</div>
\t\t\t<div class=\"col-md-8\">
\t\t\t\t<input class=\"sc-input section-name\" type=\"text\">
\t\t\t\t<p class=\"sc-hidden error-msg\"></p>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"mp-modal edit-field-modal sc-hidden\">
\t\t<div class=\"edit-field-container\">
\t\t\t<div class=\"protected-field-message\">
\t\t\t\t";
        // line 559
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("This is protected field. You cannot modify its type.")), "html", null, true);
        echo "
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"sc-input-row\">
\t\t\t\t\t\t<label class=\"sc-label\">";
        // line 565
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Label")), "html", null, true);
        echo "</label>
\t\t\t\t\t\t<input class=\"sc-input field-label\" type=\"text\" name=\"label\">
\t\t\t\t\t\t<p class=\"sc-hidden error-msg\"></p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"sc-input-row\">
\t\t\t\t\t\t<label class=\"sc-label\">";
        // line 570
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Section")), "html", null, true);
        echo "</label>
\t\t\t\t\t\t<select class=\"sc-input field-section\" name=\"section\"></select>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"sc-input-row\">
\t\t\t\t\t\t<label class=\"sc-label\">";
        // line 576
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Type")), "html", null, true);
        echo "</label>
\t\t\t\t\t\t<select class=\"sc-input field-type\" name=\"type\">
\t\t\t\t\t\t\t";
        // line 578
        echo $context["f"]->getfieldsList();
        echo "
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"sc-input-row\">
\t\t\t\t\t\t<label class=\"sc-label\">";
        // line 582
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Description")), "html", null, true);
        echo "</label>
\t\t\t\t\t\t<input class=\"sc-input field-description\" type=\"text\" name=\"description\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"field-options field-date sc-hidden\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"sc-input-row\">
\t\t\t\t\t\t\t<label class=\"sc-label\">";
        // line 592
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Date Format")), "html", null, true);
        echo "</label>
\t\t\t\t\t\t\t<select class=\"sc-input field-date-format\" name=\"date-format\">
\t\t\t\t\t\t\t\t";
        // line 594
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dateFormats"]) ? $context["dateFormats"] : null));
        foreach ($context['_seq'] as $context["value"] => $context["data"]) {
            // line 595
            echo "\t\t\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "text", array()), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['value'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 597
        echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"field-options field-g-recaptcha-response sc-hidden\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<div class=\"sc-input-row\">
\t\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t\t<tr class=\"mp-field-option mp-field-option-google-re-captcha-site-key\">
\t\t\t\t\t\t\t\t\t<td class=\"mp-field-option-setting\">
\t\t\t\t\t\t\t\t\t\t<label class=\"sc-label\">";
        // line 610
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Google ReCaptcha Site Key")), "html", null, true);
        echo "</label>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td class=\"mp-field-option-setting\">
\t\t\t\t\t\t\t\t\t\t<div class=\"mp-option-helper tooltip\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-question sc-tooltip\"></i>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tooltip_content\">
\t\t\t\t\t\t\t\t\t\t\t\t<div>";
        // line 616
        echo $context["tooltips"]->getget("google-re-captcha-site-key");
        echo "</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td class=\"mp-field-option-setting\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"mp-field-label-input\" name=\"google-re-captcha-site-key\">
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr class=\"mp-field-option mp-field-option-google-re-captcha-secret-key\">
\t\t\t\t\t\t\t\t\t<td class=\"mp-field-option-setting\">
\t\t\t\t\t\t\t\t\t\t<label class=\"sc-label\">";
        // line 626
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Google ReCaptcha Secret Key")), "html", null, true);
        echo "</label>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td class=\"mp-field-option-setting\">
\t\t\t\t\t\t\t\t\t\t<div class=\"mp-option-helper tooltip\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-question sc-tooltip\"></i>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tooltip_content\">
\t\t\t\t\t\t\t\t\t\t\t\t<div>";
        // line 632
        echo call_user_func_array($this->env->getFunction('translate')->getCallable(), array($context["tooltips"]->getget("google-re-captcha-secret-key")));
        echo "</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td class=\"mp-field-option-setting\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"mp-field-label-input\" name=\"google-re-captcha-secret-key\">
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr class=\"mp-field-option mp-field-option-google-re-captcha-theme\">
\t\t\t\t\t\t\t\t\t<td class=\"mp-field-option-setting\">
\t\t\t\t\t\t\t\t\t\t<label class=\"sc-label\">";
        // line 642
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Google ReCaptcha Theme")), "html", null, true);
        echo "</label>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td class=\"mp-field-option-setting\">
\t\t\t\t\t\t\t\t\t\t<div class=\"mp-option-helper tooltip\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-question sc-tooltip\"></i>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tooltip_content\">
\t\t\t\t\t\t\t\t\t\t\t\t<div>";
        // line 648
        echo call_user_func_array($this->env->getFunction('translate')->getCallable(), array($context["tooltips"]->getget("google-re-captcha-theme")));
        echo "</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td class=\"mp-field-option-setting\">
\t\t\t\t\t\t\t\t\t\t<select name=\"google-re-captcha-theme\">
\t\t\t\t\t\t\t\t\t\t\t<option value=\"light\">";
        // line 654
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Light")), "html", null, true);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"dark\">";
        // line 655
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Dark")), "html", null, true);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr class=\"mp-field-option mp-field-option-google-re-captcha-type\">
\t\t\t\t\t\t\t\t\t<td class=\"mp-field-option-setting\">
\t\t\t\t\t\t\t\t\t\t<label class=\"sc-label\">";
        // line 661
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Google ReCaptcha Type")), "html", null, true);
        echo "</label>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td class=\"mp-field-option-setting\">
\t\t\t\t\t\t\t\t\t\t<div class=\"mp-option-helper tooltip\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-question sc-tooltip\"></i>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tooltip_content\">
\t\t\t\t\t\t\t\t\t\t\t\t<div>";
        // line 667
        echo call_user_func_array($this->env->getFunction('translate')->getCallable(), array($context["tooltips"]->getget("google-re-captcha-type")));
        echo "</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td class=\"mp-field-option-setting\">
\t\t\t\t\t\t\t\t\t\t<select name=\"google-re-captcha-type\">
\t\t\t\t\t\t\t\t\t\t\t<option value=\"audio\">";
        // line 673
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Audio")), "html", null, true);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"image\" selected=\"true\">";
        // line 674
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Image")), "html", null, true);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr class=\"mp-field-option mp-field-option-google-re-captcha-size\">
\t\t\t\t\t\t\t\t\t<td class=\"mp-field-option-setting\">
\t\t\t\t\t\t\t\t\t\t<label class=\"sc-label\">";
        // line 680
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Google ReCaptcha Size")), "html", null, true);
        echo "</label>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td class=\"mp-field-option-setting\">
\t\t\t\t\t\t\t\t\t\t<div class=\"mp-option-helper tooltip\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-question sc-tooltip\"></i>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tooltip_content\">
\t\t\t\t\t\t\t\t\t\t\t\t<div>";
        // line 686
        echo call_user_func_array($this->env->getFunction('translate')->getCallable(), array($context["tooltips"]->getget("google-re-captcha-size")));
        echo "</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td class=\"mp-field-option-setting\">
\t\t\t\t\t\t\t\t\t\t<select name=\"google-re-captcha-size\">
\t\t\t\t\t\t\t\t\t\t\t<option value=\"compact\">";
        // line 692
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Compact")), "html", null, true);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"normal\" selected=\"true\">";
        // line 693
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Normal")), "html", null, true);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<hr>
\t\t\t<div class=\"row field-states\">
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<label class=\"sc-checkbox\">
\t\t\t\t\t\t<input type=\"checkbox\" name=\"registration\" value=\"true\">
\t\t\t\t\t\t";
        // line 708
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Registration")), "html", null, true);
        echo "
\t\t\t\t\t\t<div class=\"sc-checkbox-state\"></div>
\t\t\t\t\t</label>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<label class=\"sc-checkbox\">
\t\t\t\t\t\t<input type=\"checkbox\" name=\"required\" value=\"true\">
\t\t\t\t\t\t";
        // line 715
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Required")), "html", null, true);
        echo "
\t\t\t\t\t\t<div class=\"sc-checkbox-state\"></div>
\t\t\t\t\t</label>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<label class=\"sc-checkbox\">
\t\t\t\t\t\t<input type=\"checkbox\" name=\"enabled\" value=\"true\" checked>
\t\t\t\t\t\t";
        // line 722
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enabled")), "html", null, true);
        echo "
\t\t\t\t\t\t<div class=\"sc-checkbox-state\"></div>
\t\t\t\t\t</label>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"field-options-container sc-hidden\">
\t\t\t\t<hr>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<label class=\"sc-label\">";
        // line 732
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Option Name")), "html", null, true);
        echo "</label>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"sc-input-row\">
\t\t\t\t\t\t\t<input class=\"sc-input option-name-input\" type=\"text\" name=\"name\" value=\"\">
\t\t\t\t\t\t\t<p class=\"sc-hidden error-msg\"></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-2\">
\t\t\t\t\t\t<div class=\"sc-input-row\">
\t\t\t\t\t\t\t<button class=\"sc-button primary add-field-option\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-plus-circle\"></i>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row sc-input-row\">
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<div class=\"field-options-list\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"option-template sc-hidden\">
\t\t\t\t\t<div class=\"option\">
\t\t\t\t\t\t<div class=\"option-drag-handler\">
\t\t\t\t\t\t\t<i class=\"fa fa-arrows-v\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"option-name\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"options[]\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"checked-state\">
\t\t\t\t\t\t\t<label class=\"sc-checkbox seleceted-options-state\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"selected-options[]\" value=\"true\">
\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"selected-options[]\" value=\"true\">
\t\t\t\t\t\t\t\t";
        // line 767
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Default Selected")), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t<div class=\"sc-checkbox-state seleceted-options-input-state\"></div>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"remove-option\">
\t\t\t\t\t\t\t<i class=\"fa fa-trash-o\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t</div>
";
    }

    // line 6
    public function getfieldsList(...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 7
            echo "\t";
            $context["fields"] = array("text" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Text")), "email" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Email")), "password" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Password")), "numeric" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Numeric")), "date" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Date")), "scroll" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Scroll List")), "drop" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Dropdown List")), "radio" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Radio Button")), "checkbox" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Checkbox")), "g-recaptcha-response" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Google ReCaptcha")));
            // line 19
            echo "\t";
            // line 20
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) ? $context["fields"] : null));
            foreach ($context['_seq'] as $context["value"] => $context["title"]) {
                // line 21
                echo "\t    <option value=\"";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["title"], "html", null, true);
                echo "</option>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['value'], $context['title'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@users/backend/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1066 => 21,  1061 => 20,  1059 => 19,  1056 => 7,  1045 => 6,  1027 => 767,  989 => 732,  976 => 722,  966 => 715,  956 => 708,  938 => 693,  934 => 692,  925 => 686,  916 => 680,  907 => 674,  903 => 673,  894 => 667,  885 => 661,  876 => 655,  872 => 654,  863 => 648,  854 => 642,  841 => 632,  832 => 626,  819 => 616,  810 => 610,  795 => 597,  784 => 595,  780 => 594,  775 => 592,  762 => 582,  755 => 578,  750 => 576,  741 => 570,  733 => 565,  724 => 559,  709 => 547,  662 => 503,  655 => 499,  628 => 475,  604 => 454,  597 => 450,  590 => 446,  573 => 431,  571 => 428,  570 => 422,  569 => 416,  568 => 411,  563 => 408,  561 => 405,  560 => 404,  557 => 403,  555 => 400,  554 => 395,  553 => 390,  552 => 386,  547 => 383,  545 => 380,  544 => 379,  541 => 378,  539 => 375,  538 => 370,  537 => 366,  526 => 358,  518 => 353,  511 => 349,  503 => 344,  495 => 339,  487 => 334,  479 => 330,  475 => 328,  473 => 327,  468 => 325,  463 => 323,  455 => 318,  449 => 314,  447 => 313,  437 => 306,  430 => 302,  422 => 297,  409 => 287,  402 => 283,  394 => 278,  381 => 268,  374 => 264,  366 => 259,  359 => 254,  357 => 251,  356 => 245,  355 => 240,  344 => 232,  336 => 227,  332 => 226,  321 => 218,  313 => 213,  305 => 208,  297 => 203,  289 => 199,  285 => 197,  283 => 196,  278 => 194,  273 => 192,  265 => 187,  259 => 183,  257 => 182,  246 => 174,  239 => 170,  231 => 165,  218 => 155,  211 => 151,  203 => 146,  190 => 136,  183 => 132,  175 => 127,  162 => 117,  155 => 113,  147 => 108,  140 => 103,  138 => 100,  137 => 94,  136 => 89,  132 => 87,  130 => 84,  129 => 78,  128 => 73,  124 => 71,  122 => 68,  121 => 67,  118 => 66,  112 => 65,  110 => 63,  109 => 62,  108 => 61,  106 => 60,  102 => 59,  99 => 58,  97 => 57,  86 => 49,  80 => 46,  74 => 42,  72 => 41,  67 => 39,  63 => 38,  60 => 37,  57 => 36,  49 => 31,  43 => 28,  39 => 26,  36 => 25,  32 => 1,  30 => 4,  28 => 3,  26 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@users/backend/index.twig", "/Users/shingkeelau/web/wp-content/plugins/membership-by-supsystic/src/Membership/Users/views/backend/index.twig");
    }
}
