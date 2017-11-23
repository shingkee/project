<?php

/* @design/backend/index.twig */
class __TwigTemplate_b8600982677cba57075da0fe37f33d124e37b706aa9463f77ff3e09a475d0861 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@base/layouts/backend.twig", "@design/backend/index.twig", 1);
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
        // line 2
        $context["options"] = $this->loadTemplate("@base/macros/options.twig", "@design/backend/index.twig", 2);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "\t<div class=\"sc-tabs\">
\t\t<a href=\"#\" class=\"tab active\" data-target=\"general\">
\t\t\t<i class=\"fa fa-desktop\"></i>";
        // line 7
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("General")), "html", null, true);
        echo "
\t\t</a>
\t\t<a href=\"#\" class=\"tab\" data-target=\"menu\">
\t\t\t<i class=\"fa fa-bars\"></i>";
        // line 10
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Menu")), "html", null, true);
        echo "
\t\t</a>
\t\t<a href=\"#\" class=\"tab\" data-target=\"profile\">
\t\t\t<i class=\"fa fa-user\"></i>";
        // line 13
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("User Profile")), "html", null, true);
        echo "
\t\t</a>
\t\t<a href=\"#\" class=\"tab\" data-target=\"activity\">
\t\t\t<i class=\"fa fa-newspaper-o\"></i>";
        // line 16
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Activity")), "html", null, true);
        echo "
\t\t</a>
\t\t<a href=\"#\" class=\"tab\" data-target=\"auth\">
\t\t\t<i class=\"fa fa-user-plus\"></i>";
        // line 19
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Registration and Login")), "html", null, true);
        echo "
\t\t</a>
\t\t<a href=\"#\" class=\"tab\" data-target=\"members\">
\t\t\t<i class=\"fa fa-users\"></i>";
        // line 22
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Members Directory")), "html", null, true);
        echo "
\t\t</a>
\t\t<a href=\"#\" class=\"tab\" data-target=\"fonts\">
\t\t\t<i class=\"fa fa-font\"></i>";
        // line 25
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Fonts")), "html", null, true);
        echo "
\t\t</a>
\t</div>
";
    }

    // line 30
    public function block_mainHeader($context, array $blocks = array())
    {
        // line 31
        echo "\t<div class=\"sc-header\">
\t\t<h2>";
        // line 32
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Design")), "html", null, true);
        echo "</h2>
\t\t<button data-save-settings class=\"save-settings sc-button icon-button primary\">
\t\t\t<i class=\"fa fa-save\"></i>
\t\t\t<span>";
        // line 35
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Save Settings")), "html", null, true);
        echo "</span>
\t\t</button>
\t</div>
";
    }

    // line 40
    public function block_main($context, array $blocks = array())
    {
        // line 41
        echo "
\t<div class=\"sc-tab-content active\" data-tab=\"general\">
\t\t<div class=\"mp-options\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t
\t\t\t\t\t<h3>";
        // line 47
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Main")), "html", null, true);
        echo "</h3>


\t\t\t\t\t";
        // line 50
        echo $context["options"]->getradioRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Profile Image Style")), array(0 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Rounded Corners")), "name" => "general[avatar-style]", "value" => "round", "checked" => ($this->getAttribute($this->getAttribute(        // line 55
(isset($context["settings"]) ? $context["settings"] : null), "general", array()), "avatar-style", array(), "array") == "round")), 1 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Circle")), "name" => "general[avatar-style]", "value" => "circle", "checked" => ($this->getAttribute($this->getAttribute(        // line 61
(isset($context["settings"]) ? $context["settings"] : null), "general", array()), "avatar-style", array(), "array") == "circle")), 2 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Square")), "name" => "general[avatar-style]", "value" => "square", "checked" => ($this->getAttribute($this->getAttribute(        // line 67
(isset($context["settings"]) ? $context["settings"] : null), "general", array()), "avatar-style", array(), "array") == "square"))), "avatar-style");
        // line 70
        echo "

\t\t\t\t\t";
        // line 72
        echo $context["options"]->getradioRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Use Default Theme Colors")), array(0 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes")), "name" => "general[default-theme-colors]", "value" => "true", "checked" => ($this->getAttribute($this->getAttribute(        // line 77
(isset($context["settings"]) ? $context["settings"] : null), "general", array()), "default-theme-colors", array(), "array") == "true")), 1 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "name" => "general[default-theme-colors]", "value" => "false", "checked" => ($this->getAttribute($this->getAttribute(        // line 83
(isset($context["settings"]) ? $context["settings"] : null), "general", array()), "default-theme-colors", array(), "array") == "false"))), "default-theme-colors");
        // line 86
        echo "

\t\t\t\t\t<h3>";
        // line 88
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Buttons")), "html", null, true);
        echo "</h3>

\t\t\t\t\t";
        // line 90
        echo $context["options"]->getcolorRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Primary Button Color")), "general[primary-button-color]", $this->getAttribute($this->getAttribute(        // line 92
(isset($context["settings"]) ? $context["settings"] : null), "general", array()), "primary-button-color", array(), "array"), "primary-button-color");
        // line 94
        echo "

\t\t\t\t\t";
        // line 96
        echo $context["options"]->getcolorRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Primary Button Hover Color")), "general[primary-button-hover-color]", $this->getAttribute($this->getAttribute(        // line 98
(isset($context["settings"]) ? $context["settings"] : null), "general", array()), "primary-button-hover-color", array(), "array"), "primary-button-hover-color");
        // line 100
        echo "
\t\t\t\t\t
\t\t\t\t\t";
        // line 102
        echo $context["options"]->getcolorRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Secondary Button Color")), "general[secondary-button-color]", $this->getAttribute($this->getAttribute(        // line 104
(isset($context["settings"]) ? $context["settings"] : null), "general", array()), "secondary-button-color", array(), "array"), "secondary-button-color");
        // line 106
        echo "

\t\t\t\t\t";
        // line 108
        echo $context["options"]->getcolorRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Secondary Button Hover Color")), "general[secondary-button-hover-color]", $this->getAttribute($this->getAttribute(        // line 110
(isset($context["settings"]) ? $context["settings"] : null), "general", array()), "secondary-button-hover-color", array(), "array"), "secondary-button-hover-color");
        // line 112
        echo "

\t\t\t\t\t";
        // line 114
        echo $context["options"]->getcolorRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Smile Button Background Color")), "general[smile-button-bg-color]", (($this->getAttribute($this->getAttribute(        // line 116
(isset($context["settings"]) ? $context["settings"] : null), "general", array(), "any", false, true), "smile-button-bg-color", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "general", array(), "any", false, true), "smile-button-bg-color", array(), "array"), "#fff")) : ("#fff")), "smile-button-bg-color");
        // line 118
        echo "

\t\t\t\t\t";
        // line 120
        echo $context["options"]->getcolorRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Smile Button Hover Background Color")), "general[smile-button-hover-bg-color]", (($this->getAttribute($this->getAttribute(        // line 122
(isset($context["settings"]) ? $context["settings"] : null), "general", array(), "any", false, true), "smile-button-hover-bg-color", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "general", array(), "any", false, true), "smile-button-hover-bg-color", array(), "array"), "#fff")) : ("#fff")), "smile-button-hover-bg-color");
        // line 124
        echo "

\t\t\t\t\t";
        // line 126
        echo $context["options"]->getsettingRowWithInput(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Smile button icon size")), null, null, null, (        // line 131
$context["options"]->getinput("number", "general[smiles-button-icon-size-text-font-size-number]", (($this->getAttribute($this->getAttribute(        // line 134
(isset($context["settings"]) ? $context["settings"] : null), "general", array(), "array", false, true), "smiles-button-icon-size-text-font-size-number", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "general", array(), "array", false, true), "smiles-button-icon-size-text-font-size-number", array(), "array"), 20)) : (20)), array("id" => "smiles-button-icon-size-text-font-size-number", "class" => "mbs-number-units-width", "pattern" => "[0-9]")) .         // line 136
$context["options"]->getselectInput2(array(0 => array("value" => "px", "title" => "px")), (($this->getAttribute($this->getAttribute(        // line 138
(isset($context["settings"]) ? $context["settings"] : null), "general", array(), "array", false, true), "smiles-button-icon-size-text-font-unit-select", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "general", array(), "array", false, true), "smiles-button-icon-size-text-font-unit-select", array(), "array"), "px")) : ("px")), array("id" => "smiles-button-icon-size-text-font-unit-select", "class" => "mbs-selector-unit-width sc-input", "name" => "general[smiles-button-icon-size-text-font-unit-select]"))));
        // line 145
        echo "

\t\t\t\t\t<!-- \t\t\t\t\t
\t\t\t\t\t";
        // line 148
        echo $context["options"]->getcolorRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Primary Color")), "general[primary-color]", $this->getAttribute($this->getAttribute(        // line 150
(isset($context["settings"]) ? $context["settings"] : null), "general", array()), "primary-color", array(), "array"), "primary-color");
        // line 152
        echo "

\t\t\t\t\t";
        // line 154
        echo $context["options"]->getcolorRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Secondary Color")), "general[secondary-color]", $this->getAttribute($this->getAttribute(        // line 156
(isset($context["settings"]) ? $context["settings"] : null), "general", array()), "secondary-color", array(), "array"), "secondary-color");
        // line 158
        echo " -->

\t\t\t\t\t<h3>";
        // line 160
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Inputs")), "html", null, true);
        echo "</h3>

\t\t\t\t\t";
        // line 162
        echo $context["options"]->getcolorRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Input Border Color")), "general[input-border-color]", $this->getAttribute($this->getAttribute(        // line 164
(isset($context["settings"]) ? $context["settings"] : null), "general", array()), "input-border-color", array(), "array"), "input-border-color");
        // line 166
        echo "

\t\t\t\t\t";
        // line 168
        echo $context["options"]->getcolorRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Input Border Focus Color")), "general[input-border-focus-color]", $this->getAttribute($this->getAttribute(        // line 170
(isset($context["settings"]) ? $context["settings"] : null), "general", array()), "input-border-focus-color", array(), "array"), "input-border-focus-color");
        // line 172
        echo "

\t\t\t\t\t";
        // line 174
        echo $context["options"]->getcolorRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Input Background Color")), "general[input-background-color]", $this->getAttribute($this->getAttribute(        // line 176
(isset($context["settings"]) ? $context["settings"] : null), "general", array()), "input-background-color", array(), "array"), "input-background-color");
        // line 178
        echo "

\t\t\t\t\t";
        // line 180
        echo $context["options"]->getcolorRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Input Background Focus Color")), "general[input-background-focus-color]", $this->getAttribute($this->getAttribute(        // line 182
(isset($context["settings"]) ? $context["settings"] : null), "general", array()), "input-background-focus-color", array(), "array"), "input-background-focus-color");
        // line 184
        echo "

\t\t\t\t\t";
        // line 186
        echo $context["options"]->getcolorRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Input Placeholder Color")), "general[input-placeholder-color]", $this->getAttribute($this->getAttribute(        // line 188
(isset($context["settings"]) ? $context["settings"] : null), "general", array()), "input-placeholder-color", array(), "array"), "input-placeholder-color");
        // line 190
        echo "

\t\t\t\t\t<!-- ";
        // line 192
        echo $context["options"]->getcolorRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Help Icon Background Color")), "general[help-icon-background-color]", $this->getAttribute($this->getAttribute(        // line 194
(isset($context["settings"]) ? $context["settings"] : null), "general", array()), "help-icon-background-color", array(), "array"), "help-icon-background-color");
        // line 196
        echo "
\t\t\t\t\t
\t\t\t\t\t";
        // line 198
        echo $context["options"]->getcolorRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Help Icon Color")), "general[help-icon-text-color]", $this->getAttribute($this->getAttribute(        // line 200
(isset($context["settings"]) ? $context["settings"] : null), "general", array()), "help-icon-text-color", array(), "array"), "help-icon-text-color");
        // line 202
        echo "

\t\t\t\t\t";
        // line 204
        echo $context["options"]->getradioRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Show an asterisk for required fields")), array(0 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes")), "name" => "general[css_visibility_asterisk]", "value" => "visible", "checked" => ($this->getAttribute($this->getAttribute(        // line 209
(isset($context["settings"]) ? $context["settings"] : null), "general", array()), "css_visibility_asterisk", array(), "array") == "true")), 1 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "name" => "general[css_visibility_asterisk]", "value" => "hidden", "checked" => ($this->getAttribute($this->getAttribute(        // line 215
(isset($context["settings"]) ? $context["settings"] : null), "general", array()), "css_visibility_asterisk", array(), "array") == "false"))), "show-asterisk");
        // line 218
        echo "

\t\t\t\t\t";
        // line 220
        echo $context["options"]->getcolorRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Required Asterisk Color")), "general[css_color_asterisk]", $this->getAttribute($this->getAttribute(        // line 222
(isset($context["settings"]) ? $context["settings"] : null), "general", array()), "css_color_asterisk", array(), "array"), "asterisk-color", ((($this->getAttribute($this->getAttribute(        // line 224
(isset($context["settings"]) ? $context["settings"] : null), "general", array()), "show-asterisk", array(), "array") == "")) ? ("style=\"display:none;\"") : ("")));
        // line 225
        echo " -->


\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t
\t<div class=\"sc-tab-content\" data-tab=\"menu\">
\t\t<div class=\"mp-options\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t
\t\t\t\t
\t\t\t\t\t";
        // line 239
        echo $context["options"]->getradioRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Add logout link to menu")), array(0 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes")), "name" => "menu[add-logout-link]", "value" => "true", "checked" => ($this->getAttribute($this->getAttribute(        // line 244
(isset($context["settings"]) ? $context["settings"] : null), "menu", array()), "add-logout-link", array(), "array") == "true")), 1 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "name" => "menu[add-logout-link]", "value" => "false", "checked" => ($this->getAttribute($this->getAttribute(        // line 250
(isset($context["settings"]) ? $context["settings"] : null), "menu", array()), "add-logout-link", array(), "array") == "false"))), "add-logout-link");
        // line 253
        echo "

\t\t\t\t\t<div class=\"row logoutMenuListRow mbs-hidden\">
\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t<div class=\"loutMenuListWrapper\">
\t\t\t\t\t\t\t\t";
        // line 258
        echo $context["options"]->getselectInput2(        // line 259
(isset($context["wpMenuList"]) ? $context["wpMenuList"] : null), $this->getAttribute($this->getAttribute(        // line 260
(isset($context["settings"]) ? $context["settings"] : null), "menu", array()), "logout-menu-list", array(), "array"), array("class" => "chosen-select", "multiple" => "multiple", "id" => "mbs-design-logout-menu-list", "name" => "menu[logout-menu-list][]", "data-placeholder" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Choose menus to add logout item..."))), 0);
        // line 269
        echo "
\t\t\t\t\t\t\t\t";
        // line 270
        echo $context["options"]->gethiddenInput("menu[use-logout-list]", 1, null);
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t";
        // line 275
        echo $context["options"]->getradioRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Remove login and registartion links from menu when user is logged in")), array(0 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes")), "name" => "menu[remove-login-registration]", "value" => "true", "checked" => ($this->getAttribute($this->getAttribute(        // line 280
(isset($context["settings"]) ? $context["settings"] : null), "menu", array()), "remove-login-registration", array(), "array") == "true")), 1 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "name" => "menu[remove-login-registration]", "value" => "false", "checked" => ($this->getAttribute($this->getAttribute(        // line 286
(isset($context["settings"]) ? $context["settings"] : null), "menu", array()), "remove-login-registration", array(), "array") == "false"))), "remove-login-registration");
        // line 289
        echo "

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t
\t<div class=\"sc-tab-content\" data-tab=\"activity\">
\t\t<div class=\"mp-options\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t
\t\t\t\t\t<h3>";
        // line 301
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Activity filter")), "html", null, true);
        echo "</h3>
\t\t\t\t\t
\t\t\t\t\t";
        // line 303
        echo $context["options"]->getradioRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Show Activity Filter")), array(0 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes")), "name" => "activity[show-filter]", "value" => "true", "checked" => ($this->getAttribute($this->getAttribute(        // line 308
(isset($context["settings"]) ? $context["settings"] : null), "activity", array()), "show-filter", array(), "array") == "true")), 1 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "name" => "activity[show-filter]", "value" => "false", "checked" => ($this->getAttribute($this->getAttribute(        // line 314
(isset($context["settings"]) ? $context["settings"] : null), "activity", array()), "show-filter", array(), "array") == "false"))), "activity.show-filter");
        // line 317
        echo "

\t\t\t\t\t";
        // line 319
        echo $context["options"]->getselectRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Default Activity Filter")), array(0 => array("title" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Subscriptions")), "value" => "subscriptions", "selected" => ($this->getAttribute($this->getAttribute(        // line 323
(isset($context["settings"]) ? $context["settings"] : null), "activity", array()), "default-filter", array(), "array") == "subscriptions")), 1 => array("title" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Popular")), "value" => "popular", "selected" => ($this->getAttribute($this->getAttribute(        // line 328
(isset($context["settings"]) ? $context["settings"] : null), "activity", array()), "default-filter", array(), "array") == "popular")), 2 => array("title" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Site wide")), "value" => "site-wide", "selected" => ($this->getAttribute($this->getAttribute(        // line 333
(isset($context["settings"]) ? $context["settings"] : null), "activity", array()), "default-filter", array(), "array") == "site-wide"))), "activity[default-filter]");
        // line 336
        echo "
\t\t\t\t\t
\t\t\t\t\t<h3>";
        // line 338
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Activity types")), "html", null, true);
        echo "</h3>
\t\t\t\t\t
\t\t\t\t\t";
        // line 340
        echo $context["options"]->getradioRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Posts")), array(0 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes")), "name" => "activity[type][posts]", "value" => "true", "checked" => ($this->getAttribute($this->getAttribute($this->getAttribute(        // line 345
(isset($context["settings"]) ? $context["settings"] : null), "activity", array()), "type", array(), "array"), "posts", array(), "array") == "true")), 1 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "name" => "activity[type][posts]", "value" => "false", "checked" => ($this->getAttribute($this->getAttribute($this->getAttribute(        // line 351
(isset($context["settings"]) ? $context["settings"] : null), "activity", array()), "type", array(), "array"), "posts", array(), "array") == "false"))), "activity.type.posts");
        // line 354
        echo "
\t\t\t\t\t
\t\t\t\t\t";
        // line 356
        echo $context["options"]->getradioRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Photos")), array(0 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes")), "name" => "activity[type][photos]", "value" => "true", "checked" => ($this->getAttribute($this->getAttribute($this->getAttribute(        // line 361
(isset($context["settings"]) ? $context["settings"] : null), "activity", array()), "type", array(), "array"), "photos", array(), "array") == "true")), 1 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "name" => "activity[type][photos]", "value" => "false", "checked" => ($this->getAttribute($this->getAttribute($this->getAttribute(        // line 367
(isset($context["settings"]) ? $context["settings"] : null), "activity", array()), "type", array(), "array"), "photos", array(), "array") == "false"))), "activity.type.photos");
        // line 370
        echo "
\t\t\t\t\t
\t\t\t\t\t";
        // line 372
        echo $context["options"]->getradioRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Shares")), array(0 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes")), "name" => "activity[type][shares]", "value" => "true", "checked" => ($this->getAttribute($this->getAttribute($this->getAttribute(        // line 377
(isset($context["settings"]) ? $context["settings"] : null), "activity", array()), "type", array(), "array"), "shares", array(), "array") == "true")), 1 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "name" => "activity[type][shares]", "value" => "false", "checked" => ($this->getAttribute($this->getAttribute($this->getAttribute(        // line 383
(isset($context["settings"]) ? $context["settings"] : null), "activity", array()), "type", array(), "array"), "shares", array(), "array") == "false"))), "activity.type.shares");
        // line 386
        echo "
\t\t\t\t\t
\t\t\t\t\t";
        // line 388
        echo $context["options"]->getradioRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Likes")), array(0 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes")), "name" => "activity[type][likes]", "value" => "true", "checked" => ($this->getAttribute($this->getAttribute($this->getAttribute(        // line 393
(isset($context["settings"]) ? $context["settings"] : null), "activity", array()), "type", array(), "array"), "likes", array(), "array") == "true")), 1 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "name" => "activity[type][likes]", "value" => "false", "checked" => ($this->getAttribute($this->getAttribute($this->getAttribute(        // line 399
(isset($context["settings"]) ? $context["settings"] : null), "activity", array()), "type", array(), "array"), "likes", array(), "array") == "false"))), "activity.type.likes");
        // line 402
        echo "
\t\t\t\t\t
\t\t\t\t\t";
        // line 404
        echo $context["options"]->getradioRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Comments")), array(0 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes")), "name" => "activity[type][comments]", "value" => "true", "checked" => ($this->getAttribute($this->getAttribute($this->getAttribute(        // line 409
(isset($context["settings"]) ? $context["settings"] : null), "activity", array()), "type", array(), "array"), "comments", array(), "array") == "true")), 1 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "name" => "activity[type][comments]", "value" => "false", "checked" => ($this->getAttribute($this->getAttribute($this->getAttribute(        // line 415
(isset($context["settings"]) ? $context["settings"] : null), "activity", array()), "type", array(), "array"), "comments", array(), "array") == "false"))), "activity.type.comments");
        // line 418
        echo "
\t\t\t\t\t
\t\t\t\t\t";
        // line 420
        echo $context["options"]->getradioRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Groups")), array(0 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes")), "name" => "activity[type][groups]", "value" => "true", "checked" => ($this->getAttribute($this->getAttribute($this->getAttribute(        // line 425
(isset($context["settings"]) ? $context["settings"] : null), "activity", array()), "type", array(), "array"), "groups", array(), "array") == "true")), 1 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "name" => "activity[type][groups]", "value" => "false", "checked" => ($this->getAttribute($this->getAttribute($this->getAttribute(        // line 431
(isset($context["settings"]) ? $context["settings"] : null), "activity", array()), "type", array(), "array"), "groups", array(), "array") == "false"))), "activity.type.groups");
        // line 434
        echo "
\t\t\t\t\t
\t\t\t\t\t";
        // line 436
        echo $context["options"]->getradioRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Social")), array(0 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes")), "name" => "activity[type][social]", "value" => "true", "checked" => ($this->getAttribute($this->getAttribute($this->getAttribute(        // line 441
(isset($context["settings"]) ? $context["settings"] : null), "activity", array()), "type", array(), "array"), "social", array(), "array") == "true")), 1 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "name" => "activity[type][social]", "value" => "false", "checked" => ($this->getAttribute($this->getAttribute($this->getAttribute(        // line 447
(isset($context["settings"]) ? $context["settings"] : null), "activity", array()), "type", array(), "array"), "social", array(), "array") == "false"))), "activity.type.social");
        // line 450
        echo "
\t\t\t\t\t
\t\t\t\t\t";
        // line 452
        echo $context["options"]->getradioRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Forum")), array(0 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes")), "name" => "activity[type][forum]", "value" => "true", "checked" => ($this->getAttribute($this->getAttribute($this->getAttribute(        // line 457
(isset($context["settings"]) ? $context["settings"] : null), "activity", array()), "type", array(), "array"), "forum", array(), "array") == "true")), 1 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "name" => "activity[type][forum]", "value" => "false", "checked" => ($this->getAttribute($this->getAttribute($this->getAttribute(        // line 463
(isset($context["settings"]) ? $context["settings"] : null), "activity", array()), "type", array(), "array"), "forum", array(), "array") == "false"))), "activity.type.forum");
        // line 466
        echo "
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t
\t<div class=\"sc-tab-content\" data-tab=\"profile\">
\t\t<div class=\"mp-options\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">

\t\t\t\t\t";
        // line 478
        echo $context["options"]->getinputRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Profile Container Max Width")), "profile[container-max-width]", $this->getAttribute($this->getAttribute(        // line 480
(isset($context["settings"]) ? $context["settings"] : null), "profile", array()), "container-max-width", array(), "array"), "container-max-width");
        // line 482
        echo "

\t\t\t\t\t";
        // line 484
        echo $context["options"]->getcolorRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Profile Header Background Color")), "profile[header-background-color]", $this->getAttribute($this->getAttribute(        // line 486
(isset($context["settings"]) ? $context["settings"] : null), "profile", array()), "header-background-color", array(), "array"), "header-background-color");
        // line 488
        echo "


\t\t\t\t\t";
        // line 491
        echo $context["options"]->getradioRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Show Display Name In Profile Header")), array(0 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes")), "name" => "profile[show-display-name]", "value" => "true", "checked" => ($this->getAttribute($this->getAttribute(        // line 496
(isset($context["settings"]) ? $context["settings"] : null), "profile", array()), "show-display-name", array(), "array") == "true")), 1 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "name" => "profile[show-display-name]", "value" => "false", "checked" => ($this->getAttribute($this->getAttribute(        // line 502
(isset($context["settings"]) ? $context["settings"] : null), "profile", array()), "show-display-name", array(), "array") == "false"))), "show-display-name");
        // line 505
        echo "


\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t
\t<div class=\"sc-tab-content\" data-tab=\"auth\">
\t\t<div class=\"mp-options\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">

\t\t\t\t\t<h3>";
        // line 518
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Registration")), "html", null, true);
        echo "</h3>


\t\t\t\t\t";
        // line 521
        echo $context["options"]->getinputRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Registration Primary Button Text")), "auth[registration-primary-button-text]", $this->getAttribute($this->getAttribute(        // line 523
(isset($context["settings"]) ? $context["settings"] : null), "auth", array()), "registration-primary-button-text", array(), "array"), "registration-primary-button-text");
        // line 525
        echo "
\t\t\t\t\t
\t\t\t\t\t<h3>";
        // line 527
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Login")), "html", null, true);
        echo "</h3>
\t\t\t\t\t
\t\t\t\t\t";
        // line 529
        echo $context["options"]->getinputRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Login Primary Button Text")), "auth[login-primary-button-text]", $this->getAttribute($this->getAttribute(        // line 531
(isset($context["settings"]) ? $context["settings"] : null), "auth", array()), "login-primary-button-text", array(), "array"), "login-primary-button-text");
        // line 533
        echo "

\t\t\t\t\t";
        // line 535
        echo $context["options"]->getradioRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Login Secondary Button")), array(0 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes")), "name" => "auth[login-secondary-button]", "value" => "true", "checked" => ($this->getAttribute($this->getAttribute(        // line 540
(isset($context["settings"]) ? $context["settings"] : null), "auth", array()), "login-secondary-button", array(), "array") == "true")), 1 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "name" => "auth[login-secondary-button]", "value" => "false", "checked" => ($this->getAttribute($this->getAttribute(        // line 546
(isset($context["settings"]) ? $context["settings"] : null), "auth", array()), "login-secondary-button", array(), "array") == "false"))), "login-secondary-button");
        // line 549
        echo "

\t\t\t\t\t";
        // line 551
        echo $context["options"]->getinputRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Login Secondary Button Text")), "auth[login-secondary-button-text]", $this->getAttribute($this->getAttribute(        // line 553
(isset($context["settings"]) ? $context["settings"] : null), "auth", array()), "login-secondary-button-text", array(), "array"), "login-secondary-button-text");
        // line 555
        echo "

\t\t\t\t\t";
        // line 557
        echo $context["options"]->getinputRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Login Secondary Button URL")), "auth[login-secondary-button-url]", $this->getAttribute($this->getAttribute(        // line 559
(isset($context["settings"]) ? $context["settings"] : null), "auth", array()), "login-secondary-button-url", array(), "array"), "login-secondary-button-url");
        // line 561
        echo "

\t\t\t\t\t";
        // line 563
        echo $context["options"]->getradioRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Show Remember Me")), array(0 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes")), "name" => "auth[login-show-remember-me]", "value" => "true", "checked" => ($this->getAttribute($this->getAttribute(        // line 568
(isset($context["settings"]) ? $context["settings"] : null), "auth", array()), "login-show-remember-me", array(), "array") == "true")), 1 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "name" => "auth[login-show-remember-me]", "value" => "false", "checked" => ($this->getAttribute($this->getAttribute(        // line 574
(isset($context["settings"]) ? $context["settings"] : null), "auth", array()), "login-show-remember-me", array(), "array") == "false"))), "login-show-remember-me");
        // line 577
        echo "
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t";
        // line 580
        echo $context["options"]->getradioRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Google ReCaptcha")), array(0 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes")), "name" => "auth[login-google-recaptcha-enable]", "value" => "true", "checked" => ($this->getAttribute($this->getAttribute(        // line 585
(isset($context["settings"]) ? $context["settings"] : null), "auth", array()), "login-google-recaptcha-enable", array(), "array") == "true")), 1 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "name" => "auth[login-google-recaptcha-enable]", "value" => "false", "checked" => ($this->getAttribute($this->getAttribute(        // line 591
(isset($context["settings"]) ? $context["settings"] : null), "auth", array()), "login-google-recaptcha-enable", array(), "array") == "false"))), "login-google-recaptcha-enable");
        // line 594
        echo "

\t\t\t\t\t";
        // line 596
        echo $context["options"]->getradioRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Login after success Registration")), array(0 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes")), "name" => "auth[login-after-register-enable]", "value" => 1, "checked" => (($this->getAttribute($this->getAttribute(        // line 601
(isset($context["settings"]) ? $context["settings"] : null), "auth", array()), "login-after-register-enable", array(), "array") == 1) ||  !$this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "auth", array(), "any", false, true), "login-after-register-enable", array(), "array", true, true))), 1 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "name" => "auth[login-after-register-enable]", "value" => 0, "checked" => ($this->getAttribute($this->getAttribute(        // line 607
(isset($context["settings"]) ? $context["settings"] : null), "auth", array(), "any", false, true), "login-after-register-enable", array(), "array", true, true) && ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "auth", array()), "login-after-register-enable", array(), "array") == 0)))), "login-after-register-enable");
        // line 610
        echo "
\t\t\t\t\t
\t\t\t\t\t<div class=\"login-google-recaptcha-settings\" style=\"display: none\">

\t\t\t\t\t";
        // line 614
        echo $context["options"]->getinputRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Google ReCaptcha Site Key")), "auth[login-google-recaptcha-site-key]", $this->getAttribute($this->getAttribute(        // line 616
(isset($context["settings"]) ? $context["settings"] : null), "auth", array()), "login-google-recaptcha-site-key", array(), "array"), "login-google-recaptcha-site-key");
        // line 618
        echo "
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t";
        // line 621
        echo $context["options"]->getinputRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Google ReCaptcha Secret Key")), "auth[login-google-recaptcha-secret-key]", $this->getAttribute($this->getAttribute(        // line 623
(isset($context["settings"]) ? $context["settings"] : null), "auth", array()), "login-google-recaptcha-secret-key", array(), "array"), "login-google-recaptcha-secret-key");
        // line 625
        echo "
\t\t\t\t\t
\t\t\t\t\t";
        // line 627
        echo $context["options"]->getselectRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Google ReCaptcha Theme")), array(0 => array("title" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Light")), "value" => "light", "checked" => ($this->getAttribute($this->getAttribute(        // line 631
(isset($context["settings"]) ? $context["settings"] : null), "auth", array()), "login-google-recaptcha-theme", array(), "array") == "light")), 1 => array("title" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Dark")), "value" => "dark", "selected" => ($this->getAttribute($this->getAttribute(        // line 636
(isset($context["settings"]) ? $context["settings"] : null), "auth", array()), "login-google-recaptcha-theme", array(), "array") == "dark"))), "auth[login-google-recaptcha-theme]", "google-re-captcha-theme");
        // line 640
        echo "
\t\t\t\t\t
\t\t\t\t\t";
        // line 642
        echo $context["options"]->getselectRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Google ReCaptcha Type")), array(0 => array("title" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Image")), "value" => "image", "selected" => ($this->getAttribute($this->getAttribute(        // line 646
(isset($context["settings"]) ? $context["settings"] : null), "auth", array()), "login-google-recaptcha-type", array(), "array") == "image")), 1 => array("title" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Audio")), "value" => "audio", "selected" => ($this->getAttribute($this->getAttribute(        // line 651
(isset($context["settings"]) ? $context["settings"] : null), "auth", array()), "login-google-recaptcha-type", array(), "array") == "audio"))), "auth[login-google-recaptcha-type]", "google-re-captcha-type");
        // line 655
        echo "
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t";
        // line 658
        echo $context["options"]->getselectRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Google ReCaptcha Size")), array(0 => array("title" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Normal")), "value" => "normal", "selected" => ($this->getAttribute($this->getAttribute(        // line 662
(isset($context["settings"]) ? $context["settings"] : null), "auth", array()), "login-google-recaptcha-size", array(), "array") == "normal")), 1 => array("title" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Compact")), "value" => "compact", "selected" => ($this->getAttribute($this->getAttribute(        // line 667
(isset($context["settings"]) ? $context["settings"] : null), "auth", array()), "login-google-recaptcha-size", array(), "array") == "compact"))), "auth[login-google-recaptcha-size]", "google-re-captcha-size");
        // line 671
        echo "
\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"sc-tab-content\" data-tab=\"members\">
\t\t<div class=\"mp-options\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">

\t\t\t\t\t<h3>";
        // line 685
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("General Options")), "html", null, true);
        echo "</h3>

\t\t\t\t\t";
        // line 687
        $context["_roles"] = array(0 => array("title" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("All")), "value" => "all", "selected" => twig_in_filter("all", $this->getAttribute($this->getAttribute(        // line 690
(isset($context["settings"]) ? $context["settings"] : null), "members", array()), "roles-to-display", array(), "array"))));
        // line 692
        echo "\t
\t\t\t\t\t";
        // line 693
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["roles"]) ? $context["roles"] : null));
        foreach ($context['_seq'] as $context["value"] => $context["role"]) {
            // line 694
            echo "\t\t\t\t\t\t";
            $context["_roles"] = twig_array_merge((isset($context["_roles"]) ? $context["_roles"] : null), array(0 => array("title" => $this->getAttribute(            // line 695
$context["role"], "name", array()), "value" => $this->getAttribute(            // line 696
$context["role"], "id", array()), "selected" => twig_in_filter($this->getAttribute(            // line 697
$context["role"], "id", array()), $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "members", array()), "roles-to-display", array(), "array")))));
            // line 699
            echo "\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['value'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 700
        echo "
\t\t\t\t\t";
        // line 701
        echo $context["options"]->getmultipleSelectRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("User Roles to Display")),         // line 702
(isset($context["_roles"]) ? $context["_roles"] : null), "members[roles-to-display]", "roles-to-display");
        // line 705
        echo "

\t\t\t\t\t<!-- Only show members who have uploaded a profile photo -->
\t\t\t\t\t";
        // line 708
        echo $context["options"]->getradioRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Show Only Members With Photo")), array(0 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes")), "name" => "members[show-only-with-avatar]", "value" => "true", "checked" => ($this->getAttribute($this->getAttribute(        // line 713
(isset($context["settings"]) ? $context["settings"] : null), "members", array()), "show-only-with-avatar", array(), "array") == "true")), 1 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "name" => "members[show-only-with-avatar]", "value" => "false", "checked" => ($this->getAttribute($this->getAttribute(        // line 719
(isset($context["settings"]) ? $context["settings"] : null), "members", array()), "show-only-with-avatar", array(), "array") == "false"))), "show-only-with-avatar");
        // line 722
        echo "

\t\t\t\t\t<!-- Only show members who have uploaded a cover photo -->
\t\t\t\t\t";
        // line 725
        echo $context["options"]->getradioRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Show Only Members With Cover")), array(0 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes")), "name" => "members[show-only-with-cover]", "value" => "true", "checked" => ($this->getAttribute($this->getAttribute(        // line 730
(isset($context["settings"]) ? $context["settings"] : null), "members", array()), "show-only-with-cover", array(), "array") == "true")), 1 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "name" => "members[show-only-with-cover]", "value" => "false", "checked" => ($this->getAttribute($this->getAttribute(        // line 736
(isset($context["settings"]) ? $context["settings"] : null), "members", array()), "show-only-with-cover", array(), "array") == "false"))), "show-only-with-cover");
        // line 739
        echo "

\t\t\t\t\t<!-- Show load more button on members page -->
\t\t\t\t\t";
        // line 742
        echo $context["options"]->getradioRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Show Load More Button")), array(0 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes")), "name" => "members[show-load-more-button]", "value" => "true", "checked" => ($this->getAttribute($this->getAttribute(        // line 747
(isset($context["settings"]) ? $context["settings"] : null), "members", array()), "show-load-more-button", array(), "array") == "true")), 1 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "name" => "members[show-load-more-button]", "value" => "false", "checked" => ($this->getAttribute($this->getAttribute(        // line 753
(isset($context["settings"]) ? $context["settings"] : null), "members", array()), "show-load-more-button", array(), "array") == "false"))), "show-load-more-button");
        // line 756
        echo "

\t\t\t\t\t<!-- Show pages on members page -->
\t\t\t\t\t";
        // line 759
        echo $context["options"]->getradioRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Show Pages")), array(0 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes")), "name" => "members[show-pages]", "value" => "true", "checked" => ($this->getAttribute($this->getAttribute(        // line 764
(isset($context["settings"]) ? $context["settings"] : null), "members", array()), "show-pages", array(), "array") == "true")), 1 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "name" => "members[show-pages]", "value" => "false", "checked" => ($this->getAttribute($this->getAttribute(        // line 770
(isset($context["settings"]) ? $context["settings"] : null), "members", array()), "show-pages", array(), "array") == "false"))), "show-pages");
        // line 773
        echo "

\t\t\t\t\t";
        // line 775
        echo $context["options"]->getselectRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Default Sort Users By")), array(0 => array("title" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("New Users First")), "value" => "new-users-first", "selected" => ($this->getAttribute($this->getAttribute(        // line 779
(isset($context["settings"]) ? $context["settings"] : null), "members", array()), "sort-users-by", array(), "array") == "new-users-first")), 1 => array("title" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Old Users First")), "value" => "old-users-first", "selected" => ($this->getAttribute($this->getAttribute(        // line 784
(isset($context["settings"]) ? $context["settings"] : null), "members", array()), "sort-users-by", array(), "array") == "old-users-first")), 2 => array("title" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("First Name")), "value" => "first-name", "selected" => ($this->getAttribute($this->getAttribute(        // line 789
(isset($context["settings"]) ? $context["settings"] : null), "members", array()), "sort-users-by", array(), "array") == "first-name")), 3 => array("title" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Last Name")), "value" => "last-name", "selected" => ($this->getAttribute($this->getAttribute(        // line 794
(isset($context["settings"]) ? $context["settings"] : null), "members", array()), "sort-users-by", array(), "array") == "last-name")), 4 => array("title" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Random")), "value" => "random", "selected" => ($this->getAttribute($this->getAttribute(        // line 799
(isset($context["settings"]) ? $context["settings"] : null), "members", array()), "sort-users-by", array(), "array") == "random"))), "members[sort-users-by]", "sort-users-by");
        // line 803
        echo "


\t\t\t\t\t<h3>User Card</h3>

                    ";
        // line 808
        echo $context["options"]->getradioRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Show Friends and Followers")), array(0 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes")), "name" => "members[show-friends-and-followers]", "value" => "true", "checked" => ($this->getAttribute($this->getAttribute(        // line 813
(isset($context["settings"]) ? $context["settings"] : null), "members", array()), "show-friends-and-followers", array(), "array") == "true")), 1 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "name" => "members[show-friends-and-followers]", "value" => "false", "checked" => ($this->getAttribute($this->getAttribute(        // line 819
(isset($context["settings"]) ? $context["settings"] : null), "members", array()), "show-friends-and-followers", array(), "array") == "false"))), "show-display-name");
        // line 822
        echo "

                    <!--
\t\t\t\t\t";
        // line 825
        echo $context["options"]->getradioRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable Profile Photo")), array(0 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes")), "name" => "members[enable-profile-photo]", "value" => "true", "checked" => ($this->getAttribute($this->getAttribute(        // line 830
(isset($context["settings"]) ? $context["settings"] : null), "members", array()), "enable-profile-photo", array(), "array") == "true")), 1 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "name" => "members[enable-profile-photo]", "value" => "false", "checked" => ($this->getAttribute($this->getAttribute(        // line 836
(isset($context["settings"]) ? $context["settings"] : null), "members", array()), "enable-profile-photo", array(), "array") == "false"))), "enable-profile-cards");
        // line 839
        echo "

\t\t\t\t\t";
        // line 841
        echo $context["options"]->getradioRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable Cover Photo")), array(0 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes")), "name" => "members[enable-cover-photo]", "value" => "true", "checked" => ($this->getAttribute($this->getAttribute(        // line 846
(isset($context["settings"]) ? $context["settings"] : null), "members", array()), "enable-cover-photo", array(), "array") == "true")), 1 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "name" => "members[enable-cover-photo]", "value" => "false", "checked" => ($this->getAttribute($this->getAttribute(        // line 852
(isset($context["settings"]) ? $context["settings"] : null), "members", array()), "enable-cover-photo", array(), "array") == "false"))), "enable-cover-photo");
        // line 855
        echo "

\t\t\t\t\t";
        // line 857
        echo $context["options"]->getradioRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Show Display Name")), array(0 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes")), "name" => "members[show-display-name]", "value" => "true", "checked" => ($this->getAttribute($this->getAttribute(        // line 862
(isset($context["settings"]) ? $context["settings"] : null), "members", array()), "show-display-name", array(), "array") == "true")), 1 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "name" => "members[show-display-name]", "value" => "false", "checked" => ($this->getAttribute($this->getAttribute(        // line 868
(isset($context["settings"]) ? $context["settings"] : null), "members", array()), "show-display-name", array(), "array") == "false"))), "show-display-name");
        // line 871
        echo "

\t\t\t\t\t";
        // line 873
        echo $context["options"]->getradioRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Show tagline below profile name")), array(0 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes")), "name" => "members[show-tagline]", "value" => "true", "checked" => ($this->getAttribute($this->getAttribute(        // line 878
(isset($context["settings"]) ? $context["settings"] : null), "members", array()), "show-tagline", array(), "array") == "true")), 1 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "name" => "members[show-tagline]", "value" => "false", "checked" => ($this->getAttribute($this->getAttribute(        // line 884
(isset($context["settings"]) ? $context["settings"] : null), "members", array()), "show-tagline", array(), "array") == "false"))), "show-tagline");
        // line 887
        echo "

\t\t\t\t\t";
        // line 889
        echo $context["options"]->getradioRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Show extra user information below tagline?")), array(0 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes")), "name" => "members[show-extra-user-information]", "value" => "true", "checked" => ($this->getAttribute($this->getAttribute(        // line 894
(isset($context["settings"]) ? $context["settings"] : null), "members", array()), "show-extra-user-information", array(), "array") == "true")), 1 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "name" => "members[show-extra-user-information]", "value" => "false", "checked" => ($this->getAttribute($this->getAttribute(        // line 900
(isset($context["settings"]) ? $context["settings"] : null), "members", array()), "show-extra-user-information", array(), "array") == "false"))), "show-extra-user-information");
        // line 903
        echo "
 -->
<!-- \t\t\t\t\t<h3>Search Option</h3>

\t\t\t\t\t";
        // line 907
        echo $context["options"]->getradioRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable Search feature")), array(0 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes")), "name" => "members[enable-search-options]", "value" => "true", "checked" => ($this->getAttribute($this->getAttribute(        // line 912
(isset($context["settings"]) ? $context["settings"] : null), "members", array()), "enable-search-options", array(), "array") == "true")), 1 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "name" => "members[enable-search-options]", "value" => "false", "checked" => ($this->getAttribute($this->getAttribute(        // line 918
(isset($context["settings"]) ? $context["settings"] : null), "members", array()), "enable-search-options", array(), "array") == "false"))), "enable-search-options");
        // line 921
        echo "

\t\t\t\t\t";
        // line 923
        echo $context["options"]->getradioRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Show results only after search")), array(0 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes")), "name" => "members[show-search-result-after-search]", "value" => "true", "checked" => ($this->getAttribute($this->getAttribute(        // line 928
(isset($context["settings"]) ? $context["settings"] : null), "members", array()), "show-search-result-after-search", array(), "array") == "true")), 1 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "name" => "members[show-search-result-after-search]", "value" => "false", "checked" => ($this->getAttribute($this->getAttribute(        // line 934
(isset($context["settings"]) ? $context["settings"] : null), "members", array()), "show-search-result-after-search", array(), "array") == "false"))), "show-search-result-after-search");
        // line 937
        echo "

\t\t\t\t\t";
        // line 939
        echo $context["options"]->getselectRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("User Roles that can use search")), array(0 => array("title" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("All")), "value" => "none", "selected" => ($this->getAttribute($this->getAttribute(        // line 943
(isset($context["settings"]) ? $context["settings"] : null), "members", array()), "user-role-that-can-use-search", array(), "array") == "none"), "disabled" => true)), "members[user-role-that-can-use-search]", "user-role-that-can-use-search");
        // line 948
        echo "

\t\t\t\t\t";
        // line 950
        echo $context["options"]->getselectRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Choose field(s) to enable in search")), array(0 => array("title" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("All")), "value" => "none", "selected" => ($this->getAttribute($this->getAttribute(        // line 954
(isset($context["settings"]) ? $context["settings"] : null), "members", array()), "user-role-that-can-use-search", array(), "array") == "none"), "disabled" => true)), "members[user-role-that-can-use-search]", "user-role-that-can-use-search");
        // line 959
        echo "

\t\t\t\t\t";
        // line 961
        echo $context["options"]->getradioRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Show results only after search")), array(0 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes")), "name" => "members[show-search-result-after-search]", "value" => "true", "checked" => ($this->getAttribute($this->getAttribute(        // line 966
(isset($context["settings"]) ? $context["settings"] : null), "members", array()), "show-search-result-after-search", array(), "array") == "true")), 1 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "name" => "members[show-search-result-after-search]", "value" => "false", "checked" => ($this->getAttribute($this->getAttribute(        // line 972
(isset($context["settings"]) ? $context["settings"] : null), "members", array()), "show-search-result-after-search", array(), "array") == "false"))), "show-search-result-after-search");
        // line 975
        echo "


\t\t\t\t\t";
        // line 978
        echo $context["options"]->getradioRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Results Text")), array(0 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes")), "name" => "members[search-results-text]", "value" => "true", "checked" => ($this->getAttribute($this->getAttribute(        // line 983
(isset($context["settings"]) ? $context["settings"] : null), "members", array()), "search-results-text", array(), "array") == "true")), 1 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "name" => "members[search-results-text]", "value" => "false", "checked" => ($this->getAttribute($this->getAttribute(        // line 989
(isset($context["settings"]) ? $context["settings"] : null), "members", array()), "search-results-text", array(), "array") == "false"))), "search-results-text");
        // line 992
        echo "

\t\t\t\t\t";
        // line 994
        echo $context["options"]->getradioRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Single Result Text")), array(0 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes")), "name" => "members[single-search-results-text]", "value" => "true", "checked" => ($this->getAttribute($this->getAttribute(        // line 999
(isset($context["settings"]) ? $context["settings"] : null), "members", array()), "single-search-results-text", array(), "array") == "true")), 1 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "name" => "members[single-search-results-text]", "value" => "false", "checked" => ($this->getAttribute($this->getAttribute(        // line 1005
(isset($context["settings"]) ? $context["settings"] : null), "members", array()), "single-search-results-text", array(), "array") == "false"))), "single-search-results-text");
        // line 1008
        echo "

\t\t\t\t\t";
        // line 1010
        echo $context["options"]->getradioRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Custom text if no users were found")), array(0 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes")), "name" => "members[custeom-text-if-no-users-found]", "value" => "true", "checked" => ($this->getAttribute($this->getAttribute(        // line 1015
(isset($context["settings"]) ? $context["settings"] : null), "members", array()), "custeom-text-if-no-users-found", array(), "array") == "true")), 1 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "name" => "members[custeom-text-if-no-users-found]", "value" => "false", "checked" => ($this->getAttribute($this->getAttribute(        // line 1021
(isset($context["settings"]) ? $context["settings"] : null), "members", array()), "custeom-text-if-no-users-found", array(), "array") == "false"))), "custeom-text-if-no-users-found");
        // line 1024
        echo "
\t\t\t\t\t -->
<!-- \t\t\t\t\t<h3>Result and Pagination</h3>

\t\t\t\t\t";
        // line 1028
        echo $context["options"]->getinputRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Number of profiles per page")), "auth[search-profiles-per-page]", $this->getAttribute($this->getAttribute(        // line 1030
(isset($context["settings"]) ? $context["settings"] : null), "auth", array()), "search-profiles-per-page", array(), "array"), "search-profiles-per-page");
        // line 1032
        echo "

\t\t\t\t\t";
        // line 1034
        echo $context["options"]->getinputRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Number of profiles per page (for Mobiles & Tablets)")), "auth[search-profiles-per-page-mobile]", $this->getAttribute($this->getAttribute(        // line 1036
(isset($context["settings"]) ? $context["settings"] : null), "auth", array()), "search-profiles-per-page-mobile", array(), "array"), "search-profiles-per-page-mobile");
        // line 1038
        echo "

\t\t\t\t\t";
        // line 1040
        echo $context["options"]->getinputRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Maximum number of profiles")), "auth[maximum-profiles-number]", $this->getAttribute($this->getAttribute(        // line 1042
(isset($context["settings"]) ? $context["settings"] : null), "auth", array()), "maximum-profiles-number", array(), "array"), "maximum-profiles-number");
        // line 1044
        echo " -->

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"sc-tab-content\" data-tab=\"fonts\">
\t\t";
        // line 1052
        $context["fontsSizeUnits"] = array(0 => array("value" => "px", "title" => "px"), 1 => array("value" => "em", "title" => "em"));
        // line 1062
        echo "
\t\t<div class=\"mp-options\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">

\t\t\t\t\t<h3>";
        // line 1067
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("General")), "html", null, true);
        echo "</h3>
\t\t\t\t\t";
        // line 1069
        echo "\t\t\t\t\t";
        echo $this->getAttribute($this, "getCheckBoxFontSizeSelector", array(0 => "Primary Buttons text font size:", 1 => "primary-buttons", 2 => "fonts", 3 => "general", 4 => (isset($context["settings"]) ? $context["settings"] : null), 5 => (isset($context["fontsSizeUnits"]) ? $context["fontsSizeUnits"] : null)), "method");
        echo "
\t\t\t\t\t";
        // line 1070
        echo $this->getAttribute($this, "getCheckBoxFontFamilySelector", array(0 => "Primary Buttons text font family:", 1 => "primary-buttons", 2 => "fonts", 3 => "general", 4 => (isset($context["settings"]) ? $context["settings"] : null), 5 => (isset($context["fontsList"]) ? $context["fontsList"] : null)), "method");
        echo "
\t\t\t\t\t";
        // line 1071
        echo $this->getAttribute($this, "getCheckBoxFontColorSelector", array(0 => "Primary Buttons text color:", 1 => "primary-buttons", 2 => "fonts", 3 => "general", 4 => (isset($context["settings"]) ? $context["settings"] : null), 5 => (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "general", array(), "any", false, true), "primary-button-text-color", array(), "array", true, true)) ? ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "general", array()), "primary-button-text-color", array(), "array")) : (null))), "method");
        echo "
\t\t\t\t\t";
        // line 1073
        echo "\t\t\t\t\t";
        echo $this->getAttribute($this, "getCheckBoxFontSizeSelector", array(0 => "Secondary Buttons text font size:", 1 => "secondary-buttons", 2 => "fonts", 3 => "general", 4 => (isset($context["settings"]) ? $context["settings"] : null), 5 => (isset($context["fontsSizeUnits"]) ? $context["fontsSizeUnits"] : null)), "method");
        echo "
\t\t\t\t\t";
        // line 1074
        echo $this->getAttribute($this, "getCheckBoxFontFamilySelector", array(0 => "Secondary Buttons text font family:", 1 => "secondary-buttons", 2 => "fonts", 3 => "general", 4 => (isset($context["settings"]) ? $context["settings"] : null), 5 => (isset($context["fontsList"]) ? $context["fontsList"] : null)), "method");
        echo "
\t\t\t\t\t";
        // line 1075
        echo $this->getAttribute($this, "getCheckBoxFontColorSelector", array(0 => "Secondary Buttons text color:", 1 => "secondary-buttons", 2 => "fonts", 3 => "general", 4 => (isset($context["settings"]) ? $context["settings"] : null), 5 => (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "general", array(), "any", false, true), "secondary-button-text-color", array(), "array", true, true)) ? ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "general", array()), "secondary-button-text-color", array(), "array")) : (null))), "method");
        echo "
\t\t\t\t\t";
        // line 1077
        echo "\t\t\t\t\t";
        echo $this->getAttribute($this, "getCheckBoxFontSizeSelector", array(0 => "Page Header text font size:", 1 => "page-header", 2 => "fonts", 3 => "general", 4 => (isset($context["settings"]) ? $context["settings"] : null), 5 => (isset($context["fontsSizeUnits"]) ? $context["fontsSizeUnits"] : null), 6 => 40), "method");
        echo "
\t\t\t\t\t";
        // line 1078
        echo $this->getAttribute($this, "getCheckBoxFontFamilySelector", array(0 => "Page Header text font family:", 1 => "page-header", 2 => "fonts", 3 => "general", 4 => (isset($context["settings"]) ? $context["settings"] : null), 5 => (isset($context["fontsList"]) ? $context["fontsList"] : null)), "method");
        echo "
\t\t\t\t\t";
        // line 1079
        echo $this->getAttribute($this, "getCheckBoxFontColorSelector", array(0 => "Page Header text color:", 1 => "page-header", 2 => "fonts", 3 => "general", 4 => (isset($context["settings"]) ? $context["settings"] : null)), "method");
        echo "
\t\t\t\t\t";
        // line 1081
        echo "\t\t\t\t\t";
        echo $this->getAttribute($this, "getCheckBoxFontSizeSelector", array(0 => "Input text font size:", 1 => "text-input", 2 => "fonts", 3 => "general", 4 => (isset($context["settings"]) ? $context["settings"] : null), 5 => (isset($context["fontsSizeUnits"]) ? $context["fontsSizeUnits"] : null), 6 => 40), "method");
        echo "
\t\t\t\t\t";
        // line 1082
        echo $this->getAttribute($this, "getCheckBoxFontFamilySelector", array(0 => "Input text font family:", 1 => "text-input", 2 => "fonts", 3 => "general", 4 => (isset($context["settings"]) ? $context["settings"] : null), 5 => (isset($context["fontsList"]) ? $context["fontsList"] : null)), "method");
        echo "
\t\t\t\t\t";
        // line 1083
        echo $this->getAttribute($this, "getCheckBoxFontColorSelector", array(0 => "Input text color:", 1 => "text-input", 2 => "fonts", 3 => "general", 4 => (isset($context["settings"]) ? $context["settings"] : null), 5 => (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "general", array(), "any", false, true), "input-text-color", array(), "array", true, true)) ? ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "general", array()), "input-text-color", array(), "array")) : (null))), "method");
        echo "
\t\t\t\t\t";
        // line 1085
        echo "\t\t\t\t\t";
        echo $this->getAttribute($this, "getCheckBoxFontSizeSelector", array(0 => "Labels text font size:", 1 => "labels", 2 => "fonts", 3 => "general", 4 => (isset($context["settings"]) ? $context["settings"] : null), 5 => (isset($context["fontsSizeUnits"]) ? $context["fontsSizeUnits"] : null)), "method");
        echo "
\t\t\t\t\t";
        // line 1086
        echo $this->getAttribute($this, "getCheckBoxFontFamilySelector", array(0 => "Labels text font family:", 1 => "labels", 2 => "fonts", 3 => "general", 4 => (isset($context["settings"]) ? $context["settings"] : null), 5 => (isset($context["fontsList"]) ? $context["fontsList"] : null)), "method");
        echo "
\t\t\t\t\t";
        // line 1087
        echo $this->getAttribute($this, "getCheckBoxFontColorSelector", array(0 => "Labels text color:", 1 => "labels", 2 => "fonts", 3 => "general", 4 => (isset($context["settings"]) ? $context["settings"] : null), 5 => (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "general", array(), "any", false, true), "label-text-color", array(), "array", true, true)) ? ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "general", array()), "label-text-color", array(), "array")) : (null))), "method");
        echo "
\t\t\t\t\t";
        // line 1089
        echo "\t\t\t\t\t";
        echo $this->getAttribute($this, "getCheckBoxFontSizeSelector", array(0 => "Small labels text font size:", 1 => "small-labels", 2 => "fonts", 3 => "general", 4 => (isset($context["settings"]) ? $context["settings"] : null), 5 => (isset($context["fontsSizeUnits"]) ? $context["fontsSizeUnits"] : null)), "method");
        echo "
\t\t\t\t\t";
        // line 1090
        echo $this->getAttribute($this, "getCheckBoxFontFamilySelector", array(0 => "Small labels text font family:", 1 => "small-labels", 2 => "fonts", 3 => "general", 4 => (isset($context["settings"]) ? $context["settings"] : null), 5 => (isset($context["fontsList"]) ? $context["fontsList"] : null)), "method");
        echo "
\t\t\t\t\t";
        // line 1091
        echo $this->getAttribute($this, "getCheckBoxFontColorSelector", array(0 => "Small labels text color:", 1 => "small-labels", 2 => "fonts", 3 => "general", 4 => (isset($context["settings"]) ? $context["settings"] : null)), "method");
        echo "
\t\t\t\t\t";
        // line 1093
        echo "\t\t\t\t\t";
        echo $this->getAttribute($this, "getCheckBoxFontSizeSelector", array(0 => "Links text font size:", 1 => "links", 2 => "fonts", 3 => "general", 4 => (isset($context["settings"]) ? $context["settings"] : null), 5 => (isset($context["fontsSizeUnits"]) ? $context["fontsSizeUnits"] : null)), "method");
        echo "
\t\t\t\t\t";
        // line 1094
        echo $this->getAttribute($this, "getCheckBoxFontFamilySelector", array(0 => "Links text font family:", 1 => "links", 2 => "fonts", 3 => "general", 4 => (isset($context["settings"]) ? $context["settings"] : null), 5 => (isset($context["fontsList"]) ? $context["fontsList"] : null)), "method");
        echo "
\t\t\t\t\t";
        // line 1095
        echo $this->getAttribute($this, "getCheckBoxFontColorSelector", array(0 => "Links text color:", 1 => "links", 2 => "fonts", 3 => "general", 4 => (isset($context["settings"]) ? $context["settings"] : null)), "method");
        echo "

\t\t\t\t\t<h3>";
        // line 1097
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Profile")), "html", null, true);
        echo "</h3>
\t\t\t\t\t";
        // line 1099
        echo "\t\t\t\t\t";
        echo $this->getAttribute($this, "getCheckBoxFontSizeSelector", array(0 => "User name text font size:", 1 => "user-name", 2 => "fonts", 3 => "profile", 4 => (isset($context["settings"]) ? $context["settings"] : null), 5 => (isset($context["fontsSizeUnits"]) ? $context["fontsSizeUnits"] : null)), "method");
        echo "
\t\t\t\t\t";
        // line 1100
        echo $this->getAttribute($this, "getCheckBoxFontFamilySelector", array(0 => "User name text font family:", 1 => "user-name", 2 => "fonts", 3 => "profile", 4 => (isset($context["settings"]) ? $context["settings"] : null), 5 => (isset($context["fontsList"]) ? $context["fontsList"] : null)), "method");
        echo "
\t\t\t\t\t";
        // line 1101
        echo $this->getAttribute($this, "getCheckBoxFontColorSelector", array(0 => "User name text color:", 1 => "user-name", 2 => "fonts", 3 => "profile", 4 => (isset($context["settings"]) ? $context["settings"] : null)), "method");
        echo "
\t\t\t\t\t";
        // line 1103
        echo "\t\t\t\t\t";
        echo $this->getAttribute($this, "getCheckBoxFontSizeSelector", array(0 => "Counters text font size:", 1 => "counters", 2 => "fonts", 3 => "profile", 4 => (isset($context["settings"]) ? $context["settings"] : null), 5 => (isset($context["fontsSizeUnits"]) ? $context["fontsSizeUnits"] : null)), "method");
        echo "
\t\t\t\t\t";
        // line 1104
        echo $this->getAttribute($this, "getCheckBoxFontFamilySelector", array(0 => "Counters text font family:", 1 => "counters", 2 => "fonts", 3 => "profile", 4 => (isset($context["settings"]) ? $context["settings"] : null), 5 => (isset($context["fontsList"]) ? $context["fontsList"] : null)), "method");
        echo "
\t\t\t\t\t";
        // line 1105
        echo $this->getAttribute($this, "getCheckBoxFontColorSelector", array(0 => "Counters text color:", 1 => "counters", 2 => "fonts", 3 => "profile", 4 => (isset($context["settings"]) ? $context["settings"] : null)), "method");
        echo "
\t\t\t\t\t";
        // line 1107
        echo "\t\t\t\t\t";
        echo $this->getAttribute($this, "getCheckBoxFontSizeSelector", array(0 => "Counters label text font size:", 1 => "counters-label", 2 => "fonts", 3 => "profile", 4 => (isset($context["settings"]) ? $context["settings"] : null), 5 => (isset($context["fontsSizeUnits"]) ? $context["fontsSizeUnits"] : null)), "method");
        echo "
\t\t\t\t\t";
        // line 1108
        echo $this->getAttribute($this, "getCheckBoxFontFamilySelector", array(0 => "Counters label text font family:", 1 => "counters-label", 2 => "fonts", 3 => "profile", 4 => (isset($context["settings"]) ? $context["settings"] : null), 5 => (isset($context["fontsList"]) ? $context["fontsList"] : null)), "method");
        echo "
\t\t\t\t\t";
        // line 1109
        echo $this->getAttribute($this, "getCheckBoxFontColorSelector", array(0 => "Counters label text color:", 1 => "counters-label", 2 => "fonts", 3 => "profile", 4 => (isset($context["settings"]) ? $context["settings"] : null)), "method");
        echo "
\t\t\t\t\t";
        // line 1111
        echo "\t\t\t\t\t";
        echo $this->getAttribute($this, "getCheckBoxFontSizeSelector", array(0 => "Tab text font size:", 1 => "tab", 2 => "fonts", 3 => "profile", 4 => (isset($context["settings"]) ? $context["settings"] : null), 5 => (isset($context["fontsSizeUnits"]) ? $context["fontsSizeUnits"] : null)), "method");
        echo "
\t\t\t\t\t";
        // line 1112
        echo $this->getAttribute($this, "getCheckBoxFontFamilySelector", array(0 => "Tab text font family:", 1 => "tab", 2 => "fonts", 3 => "profile", 4 => (isset($context["settings"]) ? $context["settings"] : null), 5 => (isset($context["fontsList"]) ? $context["fontsList"] : null)), "method");
        echo "
\t\t\t\t\t";
        // line 1113
        echo $this->getAttribute($this, "getCheckBoxFontColorSelector", array(0 => "Tab text color:", 1 => "tab", 2 => "fonts", 3 => "profile", 4 => (isset($context["settings"]) ? $context["settings"] : null)), "method");
        echo "
\t\t\t\t\t";
        // line 1115
        echo "\t\t\t\t\t";
        echo $this->getAttribute($this, "getCheckBoxFontSizeSelector", array(0 => "Tab menu hover text font size:", 1 => "tab-menu-hover", 2 => "fonts", 3 => "profile", 4 => (isset($context["settings"]) ? $context["settings"] : null), 5 => (isset($context["fontsSizeUnits"]) ? $context["fontsSizeUnits"] : null)), "method");
        echo "
\t\t\t\t\t";
        // line 1116
        echo $this->getAttribute($this, "getCheckBoxFontFamilySelector", array(0 => "Tab menu hover text font family:", 1 => "tab-menu-hover", 2 => "fonts", 3 => "profile", 4 => (isset($context["settings"]) ? $context["settings"] : null), 5 => (isset($context["fontsList"]) ? $context["fontsList"] : null)), "method");
        echo "
\t\t\t\t\t";
        // line 1117
        echo $this->getAttribute($this, "getCheckBoxFontColorSelector", array(0 => "Tab menu hover text color:", 1 => "tab-menu-hover", 2 => "fonts", 3 => "profile", 4 => (isset($context["settings"]) ? $context["settings"] : null)), "method");
        echo "
\t\t\t\t\t";
        // line 1119
        echo "\t\t\t\t\t";
        echo $this->getAttribute($this, "getCheckBoxFontSizeSelector", array(0 => "Message text font size:", 1 => "message", 2 => "fonts", 3 => "profile", 4 => (isset($context["settings"]) ? $context["settings"] : null), 5 => (isset($context["fontsSizeUnits"]) ? $context["fontsSizeUnits"] : null)), "method");
        echo "
\t\t\t\t\t";
        // line 1120
        echo $this->getAttribute($this, "getCheckBoxFontFamilySelector", array(0 => "Message text font family:", 1 => "message", 2 => "fonts", 3 => "profile", 4 => (isset($context["settings"]) ? $context["settings"] : null), 5 => (isset($context["fontsList"]) ? $context["fontsList"] : null)), "method");
        echo "
\t\t\t\t\t";
        // line 1121
        echo $this->getAttribute($this, "getCheckBoxFontColorSelector", array(0 => "Message text color:", 1 => "message", 2 => "fonts", 3 => "profile", 4 => (isset($context["settings"]) ? $context["settings"] : null), 5 => (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "general", array(), "any", false, true), "input-text-color", array(), "array", true, true)) ? ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "general", array()), "input-text-color", array(), "array")) : (null))), "method");
        echo "
\t\t\t\t\t";
        // line 1123
        echo "\t\t\t\t\t";
        echo $this->getAttribute($this, "getCheckBoxFontSizeSelector", array(0 => "Post buttons text font size:", 1 => "post-buttons", 2 => "fonts", 3 => "profile", 4 => (isset($context["settings"]) ? $context["settings"] : null), 5 => (isset($context["fontsSizeUnits"]) ? $context["fontsSizeUnits"] : null)), "method");
        echo "
\t\t\t\t\t";
        // line 1124
        echo $this->getAttribute($this, "getCheckBoxFontColorSelector", array(0 => "Post buttons text color:", 1 => "post-buttons", 2 => "fonts", 3 => "profile", 4 => (isset($context["settings"]) ? $context["settings"] : null), 5 => (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "general", array(), "any", false, true), "secondary-button-text-color", array(), "array", true, true)) ? ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "general", array()), "secondary-button-text-color", array(), "array")) : (null))), "method");
        echo "
\t\t\t\t\t";
        // line 1126
        echo "\t\t\t\t\t";
        echo $this->getAttribute($this, "getCheckBoxFontSizeSelector", array(0 => "Post buttons hover text font size:", 1 => "post-buttons-hover", 2 => "fonts", 3 => "profile", 4 => (isset($context["settings"]) ? $context["settings"] : null), 5 => (isset($context["fontsSizeUnits"]) ? $context["fontsSizeUnits"] : null)), "method");
        echo "
\t\t\t\t\t";
        // line 1127
        echo $this->getAttribute($this, "getCheckBoxFontColorSelector", array(0 => "Post buttons hover text color:", 1 => "post-buttons-hover", 2 => "fonts", 3 => "profile", 4 => (isset($context["settings"]) ? $context["settings"] : null)), "method");
        echo "
\t\t\t\t\t";
        // line 1129
        echo "\t\t\t\t\t";
        echo $this->getAttribute($this, "getCheckBoxFontSizeSelector", array(0 => "Post user name text font size:", 1 => "post-user-name", 2 => "fonts", 3 => "profile", 4 => (isset($context["settings"]) ? $context["settings"] : null), 5 => (isset($context["fontsSizeUnits"]) ? $context["fontsSizeUnits"] : null)), "method");
        echo "
\t\t\t\t\t";
        // line 1130
        echo $this->getAttribute($this, "getCheckBoxFontFamilySelector", array(0 => "Post user name text font family:", 1 => "post-user-name", 2 => "fonts", 3 => "profile", 4 => (isset($context["settings"]) ? $context["settings"] : null), 5 => (isset($context["fontsList"]) ? $context["fontsList"] : null)), "method");
        echo "
\t\t\t\t\t";
        // line 1131
        echo $this->getAttribute($this, "getCheckBoxFontColorSelector", array(0 => "Post user name text color:", 1 => "post-user-name", 2 => "fonts", 3 => "profile", 4 => (isset($context["settings"]) ? $context["settings"] : null)), "method");
        echo "
\t\t\t\t\t";
        // line 1133
        echo "\t\t\t\t\t";
        echo $this->getAttribute($this, "getCheckBoxFontSizeSelector", array(0 => "Post text font size:", 1 => "post-text", 2 => "fonts", 3 => "profile", 4 => (isset($context["settings"]) ? $context["settings"] : null), 5 => (isset($context["fontsSizeUnits"]) ? $context["fontsSizeUnits"] : null)), "method");
        echo "
\t\t\t\t\t";
        // line 1134
        echo $this->getAttribute($this, "getCheckBoxFontFamilySelector", array(0 => "Post text font family:", 1 => "post-text", 2 => "fonts", 3 => "profile", 4 => (isset($context["settings"]) ? $context["settings"] : null), 5 => (isset($context["fontsList"]) ? $context["fontsList"] : null)), "method");
        echo "
\t\t\t\t\t";
        // line 1135
        echo $this->getAttribute($this, "getCheckBoxFontColorSelector", array(0 => "Post text color:", 1 => "post-text", 2 => "fonts", 3 => "profile", 4 => (isset($context["settings"]) ? $context["settings"] : null)), "method");
        echo "
\t\t\t\t\t";
        // line 1137
        echo "\t\t\t\t\t";
        echo $this->getAttribute($this, "getCheckBoxFontSizeSelector", array(0 => "Post other text font size:", 1 => "post-other-text", 2 => "fonts", 3 => "profile", 4 => (isset($context["settings"]) ? $context["settings"] : null), 5 => (isset($context["fontsSizeUnits"]) ? $context["fontsSizeUnits"] : null)), "method");
        echo "
\t\t\t\t\t";
        // line 1138
        echo $this->getAttribute($this, "getCheckBoxFontFamilySelector", array(0 => "Post other text font family:", 1 => "post-other-text", 2 => "fonts", 3 => "profile", 4 => (isset($context["settings"]) ? $context["settings"] : null), 5 => (isset($context["fontsList"]) ? $context["fontsList"] : null)), "method");
        echo "
\t\t\t\t\t";
        // line 1139
        echo $this->getAttribute($this, "getCheckBoxFontColorSelector", array(0 => "Post other text color:", 1 => "post-other-text", 2 => "fonts", 3 => "profile", 4 => (isset($context["settings"]) ? $context["settings"] : null)), "method");
        echo "
\t\t\t\t\t";
        // line 1141
        echo "\t\t\t\t\t";
        echo $this->getAttribute($this, "getCheckBoxFontSizeSelector", array(0 => "Post comment text font size:", 1 => "post-comment-text", 2 => "fonts", 3 => "profile", 4 => (isset($context["settings"]) ? $context["settings"] : null), 5 => (isset($context["fontsSizeUnits"]) ? $context["fontsSizeUnits"] : null)), "method");
        echo "
\t\t\t\t\t";
        // line 1142
        echo $this->getAttribute($this, "getCheckBoxFontFamilySelector", array(0 => "Post comment text font family:", 1 => "post-comment-text", 2 => "fonts", 3 => "profile", 4 => (isset($context["settings"]) ? $context["settings"] : null), 5 => (isset($context["fontsList"]) ? $context["fontsList"] : null)), "method");
        echo "
\t\t\t\t\t";
        // line 1143
        echo $this->getAttribute($this, "getCheckBoxFontColorSelector", array(0 => "Post comment text color:", 1 => "post-comment-text", 2 => "fonts", 3 => "profile", 4 => (isset($context["settings"]) ? $context["settings"] : null)), "method");
        echo "
\t\t\t\t\t";
        // line 1145
        echo "\t\t\t\t\t";
        echo $this->getAttribute($this, "getCheckBoxFontSizeSelector", array(0 => "Post date text font size:", 1 => "post-date", 2 => "fonts", 3 => "profile", 4 => (isset($context["settings"]) ? $context["settings"] : null), 5 => (isset($context["fontsSizeUnits"]) ? $context["fontsSizeUnits"] : null)), "method");
        echo "
\t\t\t\t\t";
        // line 1146
        echo $this->getAttribute($this, "getCheckBoxFontFamilySelector", array(0 => "Post date text font family:", 1 => "post-date", 2 => "fonts", 3 => "profile", 4 => (isset($context["settings"]) ? $context["settings"] : null), 5 => (isset($context["fontsList"]) ? $context["fontsList"] : null)), "method");
        echo "
\t\t\t\t\t";
        // line 1147
        echo $this->getAttribute($this, "getCheckBoxFontColorSelector", array(0 => "Post date text color:", 1 => "post-date", 2 => "fonts", 3 => "profile", 4 => (isset($context["settings"]) ? $context["settings"] : null)), "method");
        echo "
\t\t\t\t\t";
        // line 1149
        echo "\t\t\t\t\t";
        echo $this->getAttribute($this, "getCheckBoxFontSizeSelector", array(0 => "Post icons text font size:", 1 => "post-icons", 2 => "fonts", 3 => "profile", 4 => (isset($context["settings"]) ? $context["settings"] : null), 5 => (isset($context["fontsSizeUnits"]) ? $context["fontsSizeUnits"] : null)), "method");
        echo "
\t\t\t\t\t";
        // line 1150
        echo $this->getAttribute($this, "getCheckBoxFontFamilySelector", array(0 => "Post icons text font family:", 1 => "post-icons", 2 => "fonts", 3 => "profile", 4 => (isset($context["settings"]) ? $context["settings"] : null), 5 => (isset($context["fontsList"]) ? $context["fontsList"] : null)), "method");
        echo "
\t\t\t\t\t";
        // line 1151
        echo $this->getAttribute($this, "getCheckBoxFontColorSelector", array(0 => "Post icons text color:", 1 => "post-icons", 2 => "fonts", 3 => "profile", 4 => (isset($context["settings"]) ? $context["settings"] : null)), "method");
        echo "
\t\t\t\t\t";
        // line 1153
        echo "\t\t\t\t\t";
        echo $this->getAttribute($this, "getCheckBoxFontSizeSelector", array(0 => "Post icons hover text font size:", 1 => "post-icons-hover", 2 => "fonts", 3 => "profile", 4 => (isset($context["settings"]) ? $context["settings"] : null), 5 => (isset($context["fontsSizeUnits"]) ? $context["fontsSizeUnits"] : null)), "method");
        echo "
\t\t\t\t\t";
        // line 1154
        echo $this->getAttribute($this, "getCheckBoxFontFamilySelector", array(0 => "Post icons hover text font family:", 1 => "post-icons-hover", 2 => "fonts", 3 => "profile", 4 => (isset($context["settings"]) ? $context["settings"] : null), 5 => (isset($context["fontsList"]) ? $context["fontsList"] : null)), "method");
        echo "
\t\t\t\t\t";
        // line 1155
        echo $this->getAttribute($this, "getCheckBoxFontColorSelector", array(0 => "Post icons hover text color:", 1 => "post-icons-hover", 2 => "fonts", 3 => "profile", 4 => (isset($context["settings"]) ? $context["settings"] : null)), "method");
        echo "
\t\t\t\t\t";
        // line 1157
        echo "\t\t\t\t\t";
        echo $this->getAttribute($this, "getCheckBoxFontSizeSelector", array(0 => "Deleted Post entry text font size:", 1 => "deleted-post-entry", 2 => "fonts", 3 => "profile", 4 => (isset($context["settings"]) ? $context["settings"] : null), 5 => (isset($context["fontsSizeUnits"]) ? $context["fontsSizeUnits"] : null)), "method");
        echo "
\t\t\t\t\t";
        // line 1158
        echo $this->getAttribute($this, "getCheckBoxFontFamilySelector", array(0 => "Deleted Post entry text font family:", 1 => "deleted-post-entry", 2 => "fonts", 3 => "profile", 4 => (isset($context["settings"]) ? $context["settings"] : null), 5 => (isset($context["fontsList"]) ? $context["fontsList"] : null)), "method");
        echo "
\t\t\t\t\t";
        // line 1159
        echo $this->getAttribute($this, "getCheckBoxFontColorSelector", array(0 => "Deleted Post entry text color:", 1 => "deleted-post-entry", 2 => "fonts", 3 => "profile", 4 => (isset($context["settings"]) ? $context["settings"] : null)), "method");
        echo "
\t\t\t\t\t";
        // line 1161
        echo "\t\t\t\t\t";
        echo $this->getAttribute($this, "getCheckBoxFontSizeSelector", array(0 => "Menu text font size:", 1 => "menu", 2 => "fonts", 3 => "profile", 4 => (isset($context["settings"]) ? $context["settings"] : null), 5 => (isset($context["fontsSizeUnits"]) ? $context["fontsSizeUnits"] : null)), "method");
        echo "
\t\t\t\t\t";
        // line 1162
        echo $this->getAttribute($this, "getCheckBoxFontFamilySelector", array(0 => "Menu text font family:", 1 => "menu", 2 => "fonts", 3 => "profile", 4 => (isset($context["settings"]) ? $context["settings"] : null), 5 => (isset($context["fontsList"]) ? $context["fontsList"] : null)), "method");
        echo "
\t\t\t\t\t";
        // line 1163
        echo $this->getAttribute($this, "getCheckBoxFontColorSelector", array(0 => "Menu text color:", 1 => "menu", 2 => "fonts", 3 => "profile", 4 => (isset($context["settings"]) ? $context["settings"] : null)), "method");
        echo "
\t\t\t\t\t";
        // line 1165
        echo "\t\t\t\t\t";
        echo $this->getAttribute($this, "getCheckBoxFontSizeSelector", array(0 => "Menu hover text font size:", 1 => "menu-hover", 2 => "fonts", 3 => "profile", 4 => (isset($context["settings"]) ? $context["settings"] : null), 5 => (isset($context["fontsSizeUnits"]) ? $context["fontsSizeUnits"] : null)), "method");
        echo "
\t\t\t\t\t";
        // line 1166
        echo $this->getAttribute($this, "getCheckBoxFontFamilySelector", array(0 => "Menu hover text font family:", 1 => "menu-hover", 2 => "fonts", 3 => "profile", 4 => (isset($context["settings"]) ? $context["settings"] : null), 5 => (isset($context["fontsList"]) ? $context["fontsList"] : null)), "method");
        echo "
\t\t\t\t\t";
        // line 1167
        echo $this->getAttribute($this, "getCheckBoxFontColorSelector", array(0 => "Menu hover text color:", 1 => "menu-hover", 2 => "fonts", 3 => "profile", 4 => (isset($context["settings"]) ? $context["settings"] : null)), "method");
        echo "

\t\t\t\t\t<h3>";
        // line 1169
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Members")), "html", null, true);
        echo "</h3>
\t\t\t\t\t";
        // line 1171
        echo "\t\t\t\t\t";
        echo $this->getAttribute($this, "getCheckBoxFontSizeSelector", array(0 => "User name text font size:", 1 => "user-name", 2 => "fonts", 3 => "members", 4 => (isset($context["settings"]) ? $context["settings"] : null), 5 => (isset($context["fontsSizeUnits"]) ? $context["fontsSizeUnits"] : null)), "method");
        echo "
\t\t\t\t\t";
        // line 1172
        echo $this->getAttribute($this, "getCheckBoxFontFamilySelector", array(0 => "User name text font family:", 1 => "user-name", 2 => "fonts", 3 => "members", 4 => (isset($context["settings"]) ? $context["settings"] : null), 5 => (isset($context["fontsList"]) ? $context["fontsList"] : null)), "method");
        echo "
\t\t\t\t\t";
        // line 1173
        echo $this->getAttribute($this, "getCheckBoxFontColorSelector", array(0 => "User name text color:", 1 => "user-name", 2 => "fonts", 3 => "members", 4 => (isset($context["settings"]) ? $context["settings"] : null)), "method");
        echo "
\t\t\t\t\t";
        // line 1175
        echo "\t\t\t\t\t";
        echo $this->getAttribute($this, "getCheckBoxFontSizeSelector", array(0 => "User name hover text font size:", 1 => "user-name-hover", 2 => "fonts", 3 => "members", 4 => (isset($context["settings"]) ? $context["settings"] : null), 5 => (isset($context["fontsSizeUnits"]) ? $context["fontsSizeUnits"] : null)), "method");
        echo "
\t\t\t\t\t";
        // line 1176
        echo $this->getAttribute($this, "getCheckBoxFontFamilySelector", array(0 => "User name hover text font family:", 1 => "user-name-hover", 2 => "fonts", 3 => "members", 4 => (isset($context["settings"]) ? $context["settings"] : null), 5 => (isset($context["fontsList"]) ? $context["fontsList"] : null)), "method");
        echo "
\t\t\t\t\t";
        // line 1177
        echo $this->getAttribute($this, "getCheckBoxFontColorSelector", array(0 => "User name hover text color:", 1 => "user-name-hover", 2 => "fonts", 3 => "members", 4 => (isset($context["settings"]) ? $context["settings"] : null)), "method");
        echo "
\t\t\t\t\t";
        // line 1179
        echo "\t\t\t\t\t";
        echo $this->getAttribute($this, "getCheckBoxFontSizeSelector", array(0 => "Counters text font size:", 1 => "counters", 2 => "fonts", 3 => "members", 4 => (isset($context["settings"]) ? $context["settings"] : null), 5 => (isset($context["fontsSizeUnits"]) ? $context["fontsSizeUnits"] : null)), "method");
        echo "
\t\t\t\t\t";
        // line 1180
        echo $this->getAttribute($this, "getCheckBoxFontFamilySelector", array(0 => "Counters text font family:", 1 => "counters", 2 => "fonts", 3 => "members", 4 => (isset($context["settings"]) ? $context["settings"] : null), 5 => (isset($context["fontsList"]) ? $context["fontsList"] : null)), "method");
        echo "
\t\t\t\t\t";
        // line 1181
        echo $this->getAttribute($this, "getCheckBoxFontColorSelector", array(0 => "Counters text color:", 1 => "counters", 2 => "fonts", 3 => "members", 4 => (isset($context["settings"]) ? $context["settings"] : null)), "method");
        echo "
\t\t\t\t\t";
        // line 1183
        echo "\t\t\t\t\t";
        echo $this->getAttribute($this, "getCheckBoxFontSizeSelector", array(0 => "Counters label text font size:", 1 => "counters-label", 2 => "fonts", 3 => "members", 4 => (isset($context["settings"]) ? $context["settings"] : null), 5 => (isset($context["fontsSizeUnits"]) ? $context["fontsSizeUnits"] : null)), "method");
        echo "
\t\t\t\t\t";
        // line 1184
        echo $this->getAttribute($this, "getCheckBoxFontFamilySelector", array(0 => "Counters label text font family:", 1 => "counters-label", 2 => "fonts", 3 => "members", 4 => (isset($context["settings"]) ? $context["settings"] : null), 5 => (isset($context["fontsList"]) ? $context["fontsList"] : null)), "method");
        echo "
\t\t\t\t\t";
        // line 1185
        echo $this->getAttribute($this, "getCheckBoxFontColorSelector", array(0 => "Counters label text color:", 1 => "counters-label", 2 => "fonts", 3 => "members", 4 => (isset($context["settings"]) ? $context["settings"] : null)), "method");
        echo "

\t\t\t\t\t<h3>";
        // line 1187
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Groups")), "html", null, true);
        echo "</h3>
\t\t\t\t\t";
        // line 1189
        echo "\t\t\t\t\t";
        echo $this->getAttribute($this, "getCheckBoxFontSizeSelector", array(0 => "Tab text font size:", 1 => "tab", 2 => "fonts", 3 => "groups", 4 => (isset($context["settings"]) ? $context["settings"] : null), 5 => (isset($context["fontsSizeUnits"]) ? $context["fontsSizeUnits"] : null)), "method");
        echo "
\t\t\t\t\t";
        // line 1190
        echo $this->getAttribute($this, "getCheckBoxFontFamilySelector", array(0 => "Tab text font family:", 1 => "tab", 2 => "fonts", 3 => "groups", 4 => (isset($context["settings"]) ? $context["settings"] : null), 5 => (isset($context["fontsList"]) ? $context["fontsList"] : null)), "method");
        echo "
\t\t\t\t\t";
        // line 1191
        echo $this->getAttribute($this, "getCheckBoxFontColorSelector", array(0 => "Tab text color:", 1 => "tab", 2 => "fonts", 3 => "groups", 4 => (isset($context["settings"]) ? $context["settings"] : null)), "method");
        echo "
\t\t\t\t\t";
        // line 1193
        echo "\t\t\t\t\t";
        echo $this->getAttribute($this, "getCheckBoxFontSizeSelector", array(0 => "User name text font size:", 1 => "user-name", 2 => "fonts", 3 => "groups", 4 => (isset($context["settings"]) ? $context["settings"] : null), 5 => (isset($context["fontsSizeUnits"]) ? $context["fontsSizeUnits"] : null)), "method");
        echo "
\t\t\t\t\t";
        // line 1194
        echo $this->getAttribute($this, "getCheckBoxFontFamilySelector", array(0 => "User name text font family:", 1 => "user-name", 2 => "fonts", 3 => "groups", 4 => (isset($context["settings"]) ? $context["settings"] : null), 5 => (isset($context["fontsList"]) ? $context["fontsList"] : null)), "method");
        echo "
\t\t\t\t\t";
        // line 1195
        echo $this->getAttribute($this, "getCheckBoxFontColorSelector", array(0 => "User name text color:", 1 => "user-name", 2 => "fonts", 3 => "groups", 4 => (isset($context["settings"]) ? $context["settings"] : null)), "method");
        echo "
\t\t\t\t\t";
        // line 1197
        echo "\t\t\t\t\t";
        echo $this->getAttribute($this, "getCheckBoxFontSizeSelector", array(0 => "User name hover text font size:", 1 => "user-name-hover", 2 => "fonts", 3 => "groups", 4 => (isset($context["settings"]) ? $context["settings"] : null), 5 => (isset($context["fontsSizeUnits"]) ? $context["fontsSizeUnits"] : null)), "method");
        echo "
\t\t\t\t\t";
        // line 1198
        echo $this->getAttribute($this, "getCheckBoxFontFamilySelector", array(0 => "User name hover text font family:", 1 => "user-name-hover", 2 => "fonts", 3 => "groups", 4 => (isset($context["settings"]) ? $context["settings"] : null), 5 => (isset($context["fontsList"]) ? $context["fontsList"] : null)), "method");
        echo "
\t\t\t\t\t";
        // line 1199
        echo $this->getAttribute($this, "getCheckBoxFontColorSelector", array(0 => "User name hover text color:", 1 => "user-name-hover", 2 => "fonts", 3 => "groups", 4 => (isset($context["settings"]) ? $context["settings"] : null)), "method");
        echo "
\t\t\t\t\t";
        // line 1201
        echo "\t\t\t\t\t";
        echo $this->getAttribute($this, "getCheckBoxFontSizeSelector", array(0 => "Group type text font size:", 1 => "group-type", 2 => "fonts", 3 => "groups", 4 => (isset($context["settings"]) ? $context["settings"] : null), 5 => (isset($context["fontsSizeUnits"]) ? $context["fontsSizeUnits"] : null)), "method");
        echo "
\t\t\t\t\t";
        // line 1202
        echo $this->getAttribute($this, "getCheckBoxFontFamilySelector", array(0 => "Group type text font family:", 1 => "group-type", 2 => "fonts", 3 => "groups", 4 => (isset($context["settings"]) ? $context["settings"] : null), 5 => (isset($context["fontsList"]) ? $context["fontsList"] : null)), "method");
        echo "
\t\t\t\t\t";
        // line 1203
        echo $this->getAttribute($this, "getCheckBoxFontColorSelector", array(0 => "Group type text color:", 1 => "group-type", 2 => "fonts", 3 => "groups", 4 => (isset($context["settings"]) ? $context["settings"] : null)), "method");
        echo "
\t\t\t\t\t";
        // line 1205
        echo "\t\t\t\t\t";
        echo $this->getAttribute($this, "getCheckBoxFontSizeSelector", array(0 => "Follower count text font size:", 1 => "follower-count", 2 => "fonts", 3 => "groups", 4 => (isset($context["settings"]) ? $context["settings"] : null), 5 => (isset($context["fontsSizeUnits"]) ? $context["fontsSizeUnits"] : null)), "method");
        echo "
\t\t\t\t\t";
        // line 1206
        echo $this->getAttribute($this, "getCheckBoxFontFamilySelector", array(0 => "Follower count text font family:", 1 => "follower-count", 2 => "fonts", 3 => "groups", 4 => (isset($context["settings"]) ? $context["settings"] : null), 5 => (isset($context["fontsList"]) ? $context["fontsList"] : null)), "method");
        echo "
\t\t\t\t\t";
        // line 1207
        echo $this->getAttribute($this, "getCheckBoxFontColorSelector", array(0 => "Follower count text color:", 1 => "follower-count", 2 => "fonts", 3 => "groups", 4 => (isset($context["settings"]) ? $context["settings"] : null)), "method");
        echo "

\t\t\t\t\t<h3>";
        // line 1209
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Activity")), "html", null, true);
        echo "</h3>
\t\t\t\t\t";
        // line 1211
        echo "\t\t\t\t\t";
        echo $this->getAttribute($this, "getCheckBoxFontSizeSelector", array(0 => "Filter button text font size:", 1 => "filter-button", 2 => "fonts", 3 => "activity", 4 => (isset($context["settings"]) ? $context["settings"] : null), 5 => (isset($context["fontsSizeUnits"]) ? $context["fontsSizeUnits"] : null)), "method");
        echo "
\t\t\t\t\t";
        // line 1212
        echo $this->getAttribute($this, "getCheckBoxFontFamilySelector", array(0 => "Filter button text font family:", 1 => "filter-button", 2 => "fonts", 3 => "activity", 4 => (isset($context["settings"]) ? $context["settings"] : null), 5 => (isset($context["fontsList"]) ? $context["fontsList"] : null)), "method");
        echo "
\t\t\t\t\t";
        // line 1213
        echo $this->getAttribute($this, "getCheckBoxFontColorSelector", array(0 => "Filter button text color:", 1 => "filter-button", 2 => "fonts", 3 => "activity", 4 => (isset($context["settings"]) ? $context["settings"] : null)), "method");
        echo "
\t\t\t\t\t";
        // line 1215
        echo "\t\t\t\t\t";
        echo $this->getAttribute($this, "getCheckBoxFontSizeSelector", array(0 => "Filter button hover text font size:", 1 => "filter-button-hover", 2 => "fonts", 3 => "activity", 4 => (isset($context["settings"]) ? $context["settings"] : null), 5 => (isset($context["fontsSizeUnits"]) ? $context["fontsSizeUnits"] : null)), "method");
        echo "
\t\t\t\t\t";
        // line 1216
        echo $this->getAttribute($this, "getCheckBoxFontFamilySelector", array(0 => "Filter button hover text font family:", 1 => "filter-button-hover", 2 => "fonts", 3 => "activity", 4 => (isset($context["settings"]) ? $context["settings"] : null), 5 => (isset($context["fontsList"]) ? $context["fontsList"] : null)), "method");
        echo "
\t\t\t\t\t";
        // line 1217
        echo $this->getAttribute($this, "getCheckBoxFontColorSelector", array(0 => "Filter button hover text color:", 1 => "filter-button-hover", 2 => "fonts", 3 => "activity", 4 => (isset($context["settings"]) ? $context["settings"] : null)), "method");
        echo "
\t\t\t\t\t";
        // line 1219
        echo "\t\t\t\t\t";
        echo $this->getAttribute($this, "getCheckBoxFontSizeSelector", array(0 => "Filter button menu text font size:", 1 => "filter-button-menu", 2 => "fonts", 3 => "activity", 4 => (isset($context["settings"]) ? $context["settings"] : null), 5 => (isset($context["fontsSizeUnits"]) ? $context["fontsSizeUnits"] : null)), "method");
        echo "
\t\t\t\t\t";
        // line 1220
        echo $this->getAttribute($this, "getCheckBoxFontFamilySelector", array(0 => "Filter button menu text font family:", 1 => "filter-button-menu", 2 => "fonts", 3 => "activity", 4 => (isset($context["settings"]) ? $context["settings"] : null), 5 => (isset($context["fontsList"]) ? $context["fontsList"] : null)), "method");
        echo "
\t\t\t\t\t";
        // line 1221
        echo $this->getAttribute($this, "getCheckBoxFontColorSelector", array(0 => "Filter button menu text color:", 1 => "filter-button-menu", 2 => "fonts", 3 => "activity", 4 => (isset($context["settings"]) ? $context["settings"] : null)), "method");
        echo "
\t\t\t\t\t";
        // line 1223
        echo "\t\t\t\t\t";
        echo $this->getAttribute($this, "getCheckBoxFontSizeSelector", array(0 => "Filter button menu hover text font size:", 1 => "filter-button-menu-hover", 2 => "fonts", 3 => "activity", 4 => (isset($context["settings"]) ? $context["settings"] : null), 5 => (isset($context["fontsSizeUnits"]) ? $context["fontsSizeUnits"] : null)), "method");
        echo "
\t\t\t\t\t";
        // line 1224
        echo $this->getAttribute($this, "getCheckBoxFontFamilySelector", array(0 => "Filter button menu hover text font family:", 1 => "filter-button-menu-hover", 2 => "fonts", 3 => "activity", 4 => (isset($context["settings"]) ? $context["settings"] : null), 5 => (isset($context["fontsList"]) ? $context["fontsList"] : null)), "method");
        echo "
\t\t\t\t\t";
        // line 1225
        echo $this->getAttribute($this, "getCheckBoxFontColorSelector", array(0 => "Filter button menu hover text color:", 1 => "filter-button-menu-hover", 2 => "fonts", 3 => "activity", 4 => (isset($context["settings"]) ? $context["settings"] : null)), "method");
        echo "

\t\t\t\t\t";
        // line 1228
        echo "\t\t\t\t\t";
        // line 1229
        echo "
\t\t\t\t\t<h3>";
        // line 1230
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Search")), "html", null, true);
        echo "</h3>
\t\t\t\t\t";
        // line 1232
        echo "\t\t\t\t\t";
        echo $this->getAttribute($this, "getCheckBoxFontSizeSelector", array(0 => "Nothing is found text font size:", 1 => "nothing-found", 2 => "fonts", 3 => "search", 4 => (isset($context["settings"]) ? $context["settings"] : null), 5 => (isset($context["fontsSizeUnits"]) ? $context["fontsSizeUnits"] : null)), "method");
        echo "
\t\t\t\t\t";
        // line 1233
        echo $this->getAttribute($this, "getCheckBoxFontFamilySelector", array(0 => "Nothing is found text font family:", 1 => "nothing-found", 2 => "fonts", 3 => "search", 4 => (isset($context["settings"]) ? $context["settings"] : null), 5 => (isset($context["fontsList"]) ? $context["fontsList"] : null)), "method");
        echo "
\t\t\t\t\t";
        // line 1234
        echo $this->getAttribute($this, "getCheckBoxFontColorSelector", array(0 => "Nothing is found text color:", 1 => "nothing-found", 2 => "fonts", 3 => "search", 4 => (isset($context["settings"]) ? $context["settings"] : null)), "method");
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

";
    }

    // line 1242
    public function getgetCheckBoxFontSizeSelector($__buttonName__ = null, $__itemCode__ = null, $__settProp1__ = null, $__settProp2__ = null, $__settings__ = null, $__fontsSizeUnits__ = null, $__defaultFontSize__ = null, $__defaultUnit__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "buttonName" => $__buttonName__,
            "itemCode" => $__itemCode__,
            "settProp1" => $__settProp1__,
            "settProp2" => $__settProp2__,
            "settings" => $__settings__,
            "fontsSizeUnits" => $__fontsSizeUnits__,
            "defaultFontSize" => $__defaultFontSize__,
            "defaultUnit" => $__defaultUnit__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 1243
            echo "\t";
            $context["options"] = $this->loadTemplate("@base/macros/options.twig", "@design/backend/index.twig", 1243);
            // line 1244
            echo "
\t";
            // line 1245
            echo $context["options"]->getcheckboxSettingRowWithInput(call_user_func_array($this->env->getFunction('translate')->getCallable(), array(            // line 1246
(isset($context["buttonName"]) ? $context["buttonName"] : null))), array(0 => array("name" => (((((            // line 1248
(isset($context["settProp1"]) ? $context["settProp1"] : null) . "[") . (isset($context["settProp2"]) ? $context["settProp2"] : null)) . "][") . (isset($context["itemCode"]) ? $context["itemCode"] : null)) . "-text-font-size-check]"), "value" => 1, "checked" => ((($this->getAttribute($this->getAttribute($this->getAttribute(            // line 1250
(isset($context["settings"]) ? $context["settings"] : null), (isset($context["settProp1"]) ? $context["settProp1"] : null), array(), "array"), (isset($context["settProp2"]) ? $context["settProp2"] : null), array(), "array"), ((isset($context["itemCode"]) ? $context["itemCode"] : null) . "-text-font-size-check"), array(), "array") == 1)) ? (1) : (null)), "attributes" => (("id=\"" .             // line 1251
(isset($context["itemCode"]) ? $context["itemCode"] : null)) . "-text-font-size-check\" class=\"mbs-checkbox-for-enable\""))), (            // line 1253
$context["options"]->getinput("number", (((((            // line 1255
(isset($context["settProp1"]) ? $context["settProp1"] : null) . "[") . (isset($context["settProp2"]) ? $context["settProp2"] : null)) . "][") . (isset($context["itemCode"]) ? $context["itemCode"] : null)) . "-text-font-size-number]"), _twig_default_filter((($this->getAttribute($this->getAttribute($this->getAttribute(            // line 1256
(isset($context["settings"]) ? $context["settings"] : null), (isset($context["settProp1"]) ? $context["settProp1"] : null), array(), "array", false, true), (isset($context["settProp2"]) ? $context["settProp2"] : null), array(), "array", false, true), ((isset($context["itemCode"]) ? $context["itemCode"] : null) . "-text-font-size-number"), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), (isset($context["settProp1"]) ? $context["settProp1"] : null), array(), "array", false, true), (isset($context["settProp2"]) ? $context["settProp2"] : null), array(), "array", false, true), ((isset($context["itemCode"]) ? $context["itemCode"] : null) . "-text-font-size-number"), array(), "array"), (isset($context["defaultFontSize"]) ? $context["defaultFontSize"] : null))) : ((isset($context["defaultFontSize"]) ? $context["defaultFontSize"] : null))), 16), array("id" => (            // line 1257
(isset($context["itemCode"]) ? $context["itemCode"] : null) . "-text-font-size-number"), "class" => "mbs-number-units-width", "pattern" => "[0-9]")) .             // line 1258
$context["options"]->getselectInput2(            // line 1259
(isset($context["fontsSizeUnits"]) ? $context["fontsSizeUnits"] : null), _twig_default_filter((($this->getAttribute($this->getAttribute($this->getAttribute(            // line 1260
(isset($context["settings"]) ? $context["settings"] : null), (isset($context["settProp1"]) ? $context["settProp1"] : null), array(), "array", false, true), (isset($context["settProp2"]) ? $context["settProp2"] : null), array(), "array", false, true), ((isset($context["itemCode"]) ? $context["itemCode"] : null) . "-text-font-unit-select"), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), (isset($context["settProp1"]) ? $context["settProp1"] : null), array(), "array", false, true), (isset($context["settProp2"]) ? $context["settProp2"] : null), array(), "array", false, true), ((isset($context["itemCode"]) ? $context["itemCode"] : null) . "-text-font-unit-select"), array(), "array"), (isset($context["defaultUnit"]) ? $context["defaultUnit"] : null))) : ((isset($context["defaultUnit"]) ? $context["defaultUnit"] : null))), "px"), array("id" => (            // line 1262
(isset($context["itemCode"]) ? $context["itemCode"] : null) . "-text-font-unit-select"), "class" => "mbs-selector-unit-width sc-input", "name" => (((((            // line 1264
(isset($context["settProp1"]) ? $context["settProp1"] : null) . "[") . (isset($context["settProp2"]) ? $context["settProp2"] : null)) . "][") . (isset($context["itemCode"]) ? $context["itemCode"] : null)) . "-text-font-unit-select]")))));
            // line 1267
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 1270
    public function getgetCheckBoxFontFamilySelector($__buttonName__ = null, $__itemCode__ = null, $__settProp1__ = null, $__settProp2__ = null, $__settings__ = null, $__fontsList__ = null, $__defaultFontName__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "buttonName" => $__buttonName__,
            "itemCode" => $__itemCode__,
            "settProp1" => $__settProp1__,
            "settProp2" => $__settProp2__,
            "settings" => $__settings__,
            "fontsList" => $__fontsList__,
            "defaultFontName" => $__defaultFontName__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 1271
            echo "\t";
            $context["options"] = $this->loadTemplate("@base/macros/options.twig", "@design/backend/index.twig", 1271);
            // line 1272
            echo "\t";
            echo $context["options"]->getcheckboxSettingRowWithInput(call_user_func_array($this->env->getFunction('translate')->getCallable(), array(            // line 1273
(isset($context["buttonName"]) ? $context["buttonName"] : null))), array(0 => array("name" => (((((            // line 1275
(isset($context["settProp1"]) ? $context["settProp1"] : null) . "[") . (isset($context["settProp2"]) ? $context["settProp2"] : null)) . "][") . (isset($context["itemCode"]) ? $context["itemCode"] : null)) . "-text-font-family-check]"), "value" => 1, "checked" => ((($this->getAttribute($this->getAttribute($this->getAttribute(            // line 1277
(isset($context["settings"]) ? $context["settings"] : null), (isset($context["settProp1"]) ? $context["settProp1"] : null), array(), "array"), (isset($context["settProp2"]) ? $context["settProp2"] : null), array(), "array"), ((isset($context["itemCode"]) ? $context["itemCode"] : null) . "-text-font-family-check"), array(), "array") == 1)) ? (1) : (null)), "attributes" => (("id=\"" .             // line 1278
(isset($context["itemCode"]) ? $context["itemCode"] : null)) . "-text-font-family-check\" class=\"mbs-checkbox-for-enable\""))),             // line 1280
$context["options"]->getselectInput2(            // line 1281
(isset($context["fontsList"]) ? $context["fontsList"] : null), _twig_default_filter((($this->getAttribute($this->getAttribute($this->getAttribute(            // line 1282
(isset($context["settings"]) ? $context["settings"] : null), (isset($context["settProp1"]) ? $context["settProp1"] : null), array(), "array", false, true), (isset($context["settProp2"]) ? $context["settProp2"] : null), array(), "array", false, true), ((isset($context["itemCode"]) ? $context["itemCode"] : null) . "-text-font-family-select"), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), (isset($context["settProp1"]) ? $context["settProp1"] : null), array(), "array", false, true), (isset($context["settProp2"]) ? $context["settProp2"] : null), array(), "array", false, true), ((isset($context["itemCode"]) ? $context["itemCode"] : null) . "-text-font-family-select"), array(), "array"), (isset($context["defaultFontName"]) ? $context["defaultFontName"] : null))) : ((isset($context["defaultFontName"]) ? $context["defaultFontName"] : null))), "initial"), array("id" => (            // line 1284
(isset($context["itemCode"]) ? $context["itemCode"] : null) . "-text-font-family-select"), "class" => "mbs-cwib-selector-width sc-input", "name" => (((((            // line 1286
(isset($context["settProp1"]) ? $context["settProp1"] : null) . "[") . (isset($context["settProp2"]) ? $context["settProp2"] : null)) . "][") . (isset($context["itemCode"]) ? $context["itemCode"] : null)) . "-text-font-family-select]")), 1));
            // line 1290
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 1293
    public function getgetCheckBoxFontColorSelector($__buttonName__ = null, $__itemCode__ = null, $__settProp1__ = null, $__settProp2__ = null, $__settings__ = null, $__defaultColor__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "buttonName" => $__buttonName__,
            "itemCode" => $__itemCode__,
            "settProp1" => $__settProp1__,
            "settProp2" => $__settProp2__,
            "settings" => $__settings__,
            "defaultColor" => $__defaultColor__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 1294
            echo "\t";
            $context["options"] = $this->loadTemplate("@base/macros/options.twig", "@design/backend/index.twig", 1294);
            // line 1295
            echo "\t";
            echo $context["options"]->getcheckboxSettingRowWithInput(call_user_func_array($this->env->getFunction('translate')->getCallable(), array(            // line 1296
(isset($context["buttonName"]) ? $context["buttonName"] : null))), array(0 => array("name" => (((((            // line 1298
(isset($context["settProp1"]) ? $context["settProp1"] : null) . "[") . (isset($context["settProp2"]) ? $context["settProp2"] : null)) . "][") . (isset($context["itemCode"]) ? $context["itemCode"] : null)) . "-text-color-check]"), "value" => 1, "checked" => (((($this->getAttribute($this->getAttribute($this->getAttribute(            // line 1300
(isset($context["settings"]) ? $context["settings"] : null), (isset($context["settProp1"]) ? $context["settProp1"] : null), array(), "array"), (isset($context["settProp2"]) ? $context["settProp2"] : null), array(), "array"), ((isset($context["itemCode"]) ? $context["itemCode"] : null) . "-text-color-check"), array(), "array") == 1) || ((isset($context["defaultColor"]) ? $context["defaultColor"] : null) != null))) ? (1) : (null)), "attributes" => (("id=\"" .             // line 1301
(isset($context["itemCode"]) ? $context["itemCode"] : null)) . "-text-color-check\" class=\"mbs-checkbox-for-enable\""))),             // line 1303
$context["options"]->getcolorInput2(array("id" => (            // line 1304
(isset($context["itemCode"]) ? $context["itemCode"] : null) . "-text-color-input"), "class" => "mbs-cwib-selector-width sc-input", "name" => (((((            // line 1306
(isset($context["settProp1"]) ? $context["settProp1"] : null) . "[") . (isset($context["settProp2"]) ? $context["settProp2"] : null)) . "][") . (isset($context["itemCode"]) ? $context["itemCode"] : null)) . "-text-color-input]"), "value" => _twig_default_filter((($this->getAttribute($this->getAttribute($this->getAttribute(            // line 1307
(isset($context["settings"]) ? $context["settings"] : null), (isset($context["settProp1"]) ? $context["settProp1"] : null), array(), "array", false, true), (isset($context["settProp2"]) ? $context["settProp2"] : null), array(), "array", false, true), ((isset($context["itemCode"]) ? $context["itemCode"] : null) . "-text-color-input"), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), (isset($context["settProp1"]) ? $context["settProp1"] : null), array(), "array", false, true), (isset($context["settProp2"]) ? $context["settProp2"] : null), array(), "array", false, true), ((isset($context["itemCode"]) ? $context["itemCode"] : null) . "-text-color-input"), array(), "array"), (isset($context["defaultColor"]) ? $context["defaultColor"] : null))) : ((isset($context["defaultColor"]) ? $context["defaultColor"] : null))), "rgba(0, 0, 0, 1)"))));
            // line 1309
            echo "
";
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
        return "@design/backend/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1512 => 1309,  1510 => 1307,  1509 => 1306,  1508 => 1304,  1507 => 1303,  1506 => 1301,  1505 => 1300,  1504 => 1298,  1503 => 1296,  1501 => 1295,  1498 => 1294,  1481 => 1293,  1465 => 1290,  1463 => 1286,  1462 => 1284,  1461 => 1282,  1460 => 1281,  1459 => 1280,  1458 => 1278,  1457 => 1277,  1456 => 1275,  1455 => 1273,  1453 => 1272,  1450 => 1271,  1432 => 1270,  1416 => 1267,  1414 => 1264,  1413 => 1262,  1412 => 1260,  1411 => 1259,  1410 => 1258,  1409 => 1257,  1408 => 1256,  1407 => 1255,  1406 => 1253,  1405 => 1251,  1404 => 1250,  1403 => 1248,  1402 => 1246,  1401 => 1245,  1398 => 1244,  1395 => 1243,  1376 => 1242,  1365 => 1234,  1361 => 1233,  1356 => 1232,  1352 => 1230,  1349 => 1229,  1347 => 1228,  1342 => 1225,  1338 => 1224,  1333 => 1223,  1329 => 1221,  1325 => 1220,  1320 => 1219,  1316 => 1217,  1312 => 1216,  1307 => 1215,  1303 => 1213,  1299 => 1212,  1294 => 1211,  1290 => 1209,  1285 => 1207,  1281 => 1206,  1276 => 1205,  1272 => 1203,  1268 => 1202,  1263 => 1201,  1259 => 1199,  1255 => 1198,  1250 => 1197,  1246 => 1195,  1242 => 1194,  1237 => 1193,  1233 => 1191,  1229 => 1190,  1224 => 1189,  1220 => 1187,  1215 => 1185,  1211 => 1184,  1206 => 1183,  1202 => 1181,  1198 => 1180,  1193 => 1179,  1189 => 1177,  1185 => 1176,  1180 => 1175,  1176 => 1173,  1172 => 1172,  1167 => 1171,  1163 => 1169,  1158 => 1167,  1154 => 1166,  1149 => 1165,  1145 => 1163,  1141 => 1162,  1136 => 1161,  1132 => 1159,  1128 => 1158,  1123 => 1157,  1119 => 1155,  1115 => 1154,  1110 => 1153,  1106 => 1151,  1102 => 1150,  1097 => 1149,  1093 => 1147,  1089 => 1146,  1084 => 1145,  1080 => 1143,  1076 => 1142,  1071 => 1141,  1067 => 1139,  1063 => 1138,  1058 => 1137,  1054 => 1135,  1050 => 1134,  1045 => 1133,  1041 => 1131,  1037 => 1130,  1032 => 1129,  1028 => 1127,  1023 => 1126,  1019 => 1124,  1014 => 1123,  1010 => 1121,  1006 => 1120,  1001 => 1119,  997 => 1117,  993 => 1116,  988 => 1115,  984 => 1113,  980 => 1112,  975 => 1111,  971 => 1109,  967 => 1108,  962 => 1107,  958 => 1105,  954 => 1104,  949 => 1103,  945 => 1101,  941 => 1100,  936 => 1099,  932 => 1097,  927 => 1095,  923 => 1094,  918 => 1093,  914 => 1091,  910 => 1090,  905 => 1089,  901 => 1087,  897 => 1086,  892 => 1085,  888 => 1083,  884 => 1082,  879 => 1081,  875 => 1079,  871 => 1078,  866 => 1077,  862 => 1075,  858 => 1074,  853 => 1073,  849 => 1071,  845 => 1070,  840 => 1069,  836 => 1067,  829 => 1062,  827 => 1052,  817 => 1044,  815 => 1042,  814 => 1040,  810 => 1038,  808 => 1036,  807 => 1034,  803 => 1032,  801 => 1030,  800 => 1028,  794 => 1024,  792 => 1021,  791 => 1015,  790 => 1010,  786 => 1008,  784 => 1005,  783 => 999,  782 => 994,  778 => 992,  776 => 989,  775 => 983,  774 => 978,  769 => 975,  767 => 972,  766 => 966,  765 => 961,  761 => 959,  759 => 954,  758 => 950,  754 => 948,  752 => 943,  751 => 939,  747 => 937,  745 => 934,  744 => 928,  743 => 923,  739 => 921,  737 => 918,  736 => 912,  735 => 907,  729 => 903,  727 => 900,  726 => 894,  725 => 889,  721 => 887,  719 => 884,  718 => 878,  717 => 873,  713 => 871,  711 => 868,  710 => 862,  709 => 857,  705 => 855,  703 => 852,  702 => 846,  701 => 841,  697 => 839,  695 => 836,  694 => 830,  693 => 825,  688 => 822,  686 => 819,  685 => 813,  684 => 808,  677 => 803,  675 => 799,  674 => 794,  673 => 789,  672 => 784,  671 => 779,  670 => 775,  666 => 773,  664 => 770,  663 => 764,  662 => 759,  657 => 756,  655 => 753,  654 => 747,  653 => 742,  648 => 739,  646 => 736,  645 => 730,  644 => 725,  639 => 722,  637 => 719,  636 => 713,  635 => 708,  630 => 705,  628 => 702,  627 => 701,  624 => 700,  618 => 699,  616 => 697,  615 => 696,  614 => 695,  612 => 694,  608 => 693,  605 => 692,  603 => 690,  602 => 687,  597 => 685,  581 => 671,  579 => 667,  578 => 662,  577 => 658,  572 => 655,  570 => 651,  569 => 646,  568 => 642,  564 => 640,  562 => 636,  561 => 631,  560 => 627,  556 => 625,  554 => 623,  553 => 621,  548 => 618,  546 => 616,  545 => 614,  539 => 610,  537 => 607,  536 => 601,  535 => 596,  531 => 594,  529 => 591,  528 => 585,  527 => 580,  522 => 577,  520 => 574,  519 => 568,  518 => 563,  514 => 561,  512 => 559,  511 => 557,  507 => 555,  505 => 553,  504 => 551,  500 => 549,  498 => 546,  497 => 540,  496 => 535,  492 => 533,  490 => 531,  489 => 529,  484 => 527,  480 => 525,  478 => 523,  477 => 521,  471 => 518,  456 => 505,  454 => 502,  453 => 496,  452 => 491,  447 => 488,  445 => 486,  444 => 484,  440 => 482,  438 => 480,  437 => 478,  423 => 466,  421 => 463,  420 => 457,  419 => 452,  415 => 450,  413 => 447,  412 => 441,  411 => 436,  407 => 434,  405 => 431,  404 => 425,  403 => 420,  399 => 418,  397 => 415,  396 => 409,  395 => 404,  391 => 402,  389 => 399,  388 => 393,  387 => 388,  383 => 386,  381 => 383,  380 => 377,  379 => 372,  375 => 370,  373 => 367,  372 => 361,  371 => 356,  367 => 354,  365 => 351,  364 => 345,  363 => 340,  358 => 338,  354 => 336,  352 => 333,  351 => 328,  350 => 323,  349 => 319,  345 => 317,  343 => 314,  342 => 308,  341 => 303,  336 => 301,  322 => 289,  320 => 286,  319 => 280,  318 => 275,  310 => 270,  307 => 269,  305 => 260,  304 => 259,  303 => 258,  296 => 253,  294 => 250,  293 => 244,  292 => 239,  276 => 225,  274 => 224,  273 => 222,  272 => 220,  268 => 218,  266 => 215,  265 => 209,  264 => 204,  260 => 202,  258 => 200,  257 => 198,  253 => 196,  251 => 194,  250 => 192,  246 => 190,  244 => 188,  243 => 186,  239 => 184,  237 => 182,  236 => 180,  232 => 178,  230 => 176,  229 => 174,  225 => 172,  223 => 170,  222 => 168,  218 => 166,  216 => 164,  215 => 162,  210 => 160,  206 => 158,  204 => 156,  203 => 154,  199 => 152,  197 => 150,  196 => 148,  191 => 145,  189 => 138,  188 => 136,  187 => 134,  186 => 131,  185 => 126,  181 => 124,  179 => 122,  178 => 120,  174 => 118,  172 => 116,  171 => 114,  167 => 112,  165 => 110,  164 => 108,  160 => 106,  158 => 104,  157 => 102,  153 => 100,  151 => 98,  150 => 96,  146 => 94,  144 => 92,  143 => 90,  138 => 88,  134 => 86,  132 => 83,  131 => 77,  130 => 72,  126 => 70,  124 => 67,  123 => 61,  122 => 55,  121 => 50,  115 => 47,  107 => 41,  104 => 40,  96 => 35,  90 => 32,  87 => 31,  84 => 30,  76 => 25,  70 => 22,  64 => 19,  58 => 16,  52 => 13,  46 => 10,  40 => 7,  36 => 5,  33 => 4,  29 => 1,  27 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@design/backend/index.twig", "/Users/shingkeelau/web/wp-content/plugins/membership-by-supsystic/src/Membership/Design/views/backend/index.twig");
    }
}
