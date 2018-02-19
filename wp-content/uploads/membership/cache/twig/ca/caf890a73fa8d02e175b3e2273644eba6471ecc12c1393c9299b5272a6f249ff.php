<?php

/* @membership/backend/index.twig */
class __TwigTemplate_20897f6197ff7e28bb81238f8ff9594cef2d4c5bb447a8c4b9adb92c2fc36587 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@base/layouts/backend.twig", "@membership/backend/index.twig", 1);
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
        $context["options"] = $this->loadTemplate("@base/macros/options.twig", "@membership/backend/index.twig", 2);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "\t<div class=\"sc-tabs\">
\t\t<a href=\"#\" class=\"tab active\" data-target=\"main\">
\t\t\t<i class=\"fa fa-cog\"></i>";
        // line 7
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Main")), "html", null, true);
        echo "
\t\t</a>
\t\t<a href=\"#\" class=\"tab\" data-target=\"pages\">
\t\t\t<i class=\"fa fa-file-text-o\"></i>";
        // line 10
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Pages")), "html", null, true);
        echo "
\t\t</a>
\t\t<a href=\"#\" class=\"tab\" data-target=\"security\">
\t\t\t<i class=\"fa fa-lock\"></i>";
        // line 13
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Security")), "html", null, true);
        echo "
\t\t</a>
\t\t<a href=\"#\" class=\"tab\" data-target=\"uploads\">
\t\t\t<i class=\"fa fa-upload\"></i>";
        // line 16
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Uploads")), "html", null, true);
        echo "
\t\t</a>
\t\t<a href=\"#\" class=\"tab\" data-target=\"seo\">
\t\t\t<i class=\"fa fa-search\"></i>";
        // line 19
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("SEO")), "html", null, true);
        echo "
\t\t</a>
\t\t<a href=\"#\" class=\"tab\" data-target=\"import\">
\t\t\t<i class=\"fa fa-download\"></i>";
        // line 22
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import Data")), "html", null, true);
        echo "
\t\t</a>
\t\t<a href=\"#\" class=\"tab\" data-target=\"groups\">
\t\t\t<i class=\"fa fa-object-group\"></i> ";
        // line 25
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Groups")), "html", null, true);
        echo "
\t\t</a>
\t\t<a href=\"#\" class=\"tab\" data-target=\"reports\">
\t\t\t<i class=\"fa fa-flag\"></i>";
        // line 28
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Reports")), "html", null, true);
        echo "
\t\t</a>
        ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["environment"] ?? null), "dispatcher", array()), "dispatch", array(0 => "backendSettingsMainContentTab"), "method"), "html", null, true);
        echo "

\t\t<button data-save-settings class=\"save-settings sc-button icon-button primary\">
\t\t\t<i class=\"fa fa-save\"></i>
\t\t\t<span>";
        // line 34
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Save Settings")), "html", null, true);
        echo "</span>
\t\t</button>
\t</div>
";
    }

    // line 39
    public function block_mainHeader($context, array $blocks = array())
    {
        // line 40
        echo "\t<div class=\"sc-header\">
\t\t<h2>";
        // line 41
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Main")), "html", null, true);
        echo "</h2>
\t</div>
";
    }

    // line 45
    public function block_main($context, array $blocks = array())
    {
        // line 46
        echo "
\t<div class=\"sc-tab-content active\" data-tab=\"main\">
\t\t<div class=\"mp-options\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">

\t\t\t\t\t";
        // line 52
        echo $context["options"]->getemailRowWithButton(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Admin Email")),         // line 54
$context["options"]->getbutton(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Send Test Email")), "admin-email-button", "tooltip"), "main[admin-email]", $this->getAttribute($this->getAttribute(        // line 60
($context["settings"] ?? null), "main", array()), "admin-email", array(), "array"), "admin-email", null, null, array("mbsThinCol" => 1));
        // line 63
        echo "

\t\t\t\t\t";
        // line 65
        echo $context["options"]->getradioRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Messages")), array(0 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes")), "name" => "main[messages]", "value" => "true", "checked" => ($this->getAttribute($this->getAttribute(        // line 71
($context["settings"] ?? null), "main", array()), "messages", array()) == "true")), 1 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "name" => "main[messages]", "value" => "false", "checked" => ($this->getAttribute($this->getAttribute(        // line 77
($context["settings"] ?? null), "main", array()), "messages", array()) == "false"))), "messages", null, null, array("mbsThinCol" => 1));
        // line 81
        echo "

\t\t\t\t\t";
        // line 83
        echo $context["options"]->getradioRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Groups")), array(0 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes")), "name" => "main[groups]", "value" => "true", "checked" => ($this->getAttribute($this->getAttribute(        // line 89
($context["settings"] ?? null), "main", array()), "groups", array()) == "true")), 1 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "name" => "main[groups]", "value" => "false", "checked" => ($this->getAttribute($this->getAttribute(        // line 95
($context["settings"] ?? null), "main", array()), "groups", array()) == "false"))), "groups", null, null, array("mbsThinCol" => 1));
        // line 99
        echo "

\t\t\t\t\t";
        // line 101
        echo $context["options"]->getradioRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Friends")), array(0 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes")), "name" => "main[friends]", "value" => "true", "checked" => ($this->getAttribute($this->getAttribute(        // line 107
($context["settings"] ?? null), "main", array()), "friends", array()) == "true")), 1 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "name" => "main[friends]", "value" => "false", "checked" => ($this->getAttribute($this->getAttribute(        // line 113
($context["settings"] ?? null), "main", array()), "friends", array()) == "false"))), "friends", null, null, array("mbsThinCol" => 1));
        // line 117
        echo "

\t\t\t\t\t";
        // line 119
        echo $context["options"]->getradioRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Activity")), array(0 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes")), "name" => "main[activity]", "value" => "true", "checked" => ($this->getAttribute($this->getAttribute(        // line 125
($context["settings"] ?? null), "main", array()), "activity", array()) == "true")), 1 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "name" => "main[activity]", "value" => "false", "checked" => ($this->getAttribute($this->getAttribute(        // line 131
($context["settings"] ?? null), "main", array()), "activity", array()) == "false"))), "activity", null, null, array("mbsThinCol" => 1));
        // line 135
        echo "

\t\t\t\t\t";
        // line 137
        echo $context["options"]->getradioRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Followers")), array(0 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes")), "name" => "main[followers]", "value" => "true", "checked" => ($this->getAttribute($this->getAttribute(        // line 143
($context["settings"] ?? null), "main", array()), "followers", array()) == "true")), 1 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "name" => "main[followers]", "value" => "false", "checked" => ($this->getAttribute($this->getAttribute(        // line 149
($context["settings"] ?? null), "main", array()), "followers", array()) == "false"))), "followers", null, null, array("mbsThinCol" => 1));
        // line 153
        echo "

                    ";
        // line 155
        echo $context["options"]->getradioRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Posts")), array(0 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes")), "name" => "main[posts]", "value" => "true", "checked" => ($this->getAttribute($this->getAttribute(        // line 161
($context["settings"] ?? null), "main", array()), "posts", array()) == "true")), 1 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "name" => "main[posts]", "value" => "false", "checked" => ($this->getAttribute($this->getAttribute(        // line 167
($context["settings"] ?? null), "main", array()), "posts", array()) == "false"))), "posts", null, null, array("mbsThinCol" => 1));
        // line 171
        echo "

                    ";
        // line 173
        echo $context["options"]->getradioRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Comments")), array(0 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes")), "name" => "main[comments]", "value" => "true", "checked" => ($this->getAttribute($this->getAttribute(        // line 179
($context["settings"] ?? null), "main", array()), "comments", array()) == "true")), 1 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "name" => "main[comments]", "value" => "false", "checked" => ($this->getAttribute($this->getAttribute(        // line 185
($context["settings"] ?? null), "main", array()), "comments", array()) == "false"))), "comments", null, null, array("mbsThinCol" => 1));
        // line 189
        echo "

                    ";
        // line 191
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["environment"] ?? null), "dispatcher", array()), "dispatch", array(0 => "adminMainSettingsOptions"), "method"), "html", null, true);
        echo "

\t\t\t\t\t";
        // line 193
        echo $context["options"]->getradioRowWithInput(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Redirect after registration to")), array(0 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Profile")), "name" => "main[after-registration-action]", "value" => "redirect-to-profile", "checked" => ($this->getAttribute($this->getAttribute(        // line 199
($context["settings"] ?? null), "main", array()), "after-registration-action", array(), "array") == "redirect-to-profile")), 1 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("URL")), "name" => "main[after-registration-action]", "value" => "redirect-to-url", "checked" => ($this->getAttribute($this->getAttribute(        // line 205
($context["settings"] ?? null), "main", array()), "after-registration-action", array(), "array") == "redirect-to-url"))), "after-registration-action", "",         // line 209
$context["options"]->gettextInput("main[after-registration-redirect-url]", $this->getAttribute($this->getAttribute(        // line 211
($context["settings"] ?? null), "main", array()), "after-registration-redirect-url", array(), "array")), null, array("mbsThinCol" => 1));
        // line 214
        echo "

\t\t\t\t\t";
        // line 216
        echo $context["options"]->getradioRowWithInput(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Redirect after login to")), array(0 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Profile")), "name" => "main[after-login-action]", "value" => "redirect-to-profile", "checked" => ($this->getAttribute($this->getAttribute(        // line 222
($context["settings"] ?? null), "main", array()), "after-login-action", array(), "array") == "redirect-to-profile")), 1 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("URL")), "name" => "main[after-login-action]", "value" => "redirect-to-url", "checked" => ($this->getAttribute($this->getAttribute(        // line 228
($context["settings"] ?? null), "main", array()), "after-login-action", array(), "array") == "redirect-to-url"))), "after-login-action", "",         // line 232
$context["options"]->gettextInput("main[after-login-action-redirect-url]", $this->getAttribute($this->getAttribute(        // line 234
($context["settings"] ?? null), "main", array()), "after-login-action-redirect-url", array(), "array")), null, array("mbsThinCol" => 1));
        // line 237
        echo "

\t\t\t\t\t";
        // line 239
        echo $context["options"]->getradioRowWithInput(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Redirect after logout to")), array(0 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Main")), "name" => "main[after-logout-action]", "value" => "redirect-to-main", "checked" => ($this->getAttribute($this->getAttribute(        // line 245
($context["settings"] ?? null), "main", array()), "after-logout-action", array(), "array") == "redirect-to-main")), 1 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("URL")), "name" => "main[after-logout-action]", "value" => "redirect-to-url", "checked" => ($this->getAttribute($this->getAttribute(        // line 251
($context["settings"] ?? null), "main", array()), "after-logout-action", array(), "array") == "redirect-to-url"))), "after-logout-action", "",         // line 255
$context["options"]->gettextInput("main[after-logout-action-redirect-url]", $this->getAttribute($this->getAttribute(        // line 257
($context["settings"] ?? null), "main", array()), "after-logout-action-redirect-url", array(), "array")), null, array("mbsThinCol" => 1));
        // line 260
        echo "

\t\t\t\t\t";
        // line 262
        echo $context["options"]->getradioRowWithInput(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Redirect after account is deleted to")), array(0 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Main")), "name" => "main[after-delete-account-action]", "value" => "redirect-to-main", "checked" => ($this->getAttribute($this->getAttribute(        // line 268
($context["settings"] ?? null), "main", array()), "after-delete-account-action", array(), "array") == "redirect-to-main")), 1 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("URL")), "name" => "main[after-delete-account-action]", "value" => "redirect-to-url", "checked" => ($this->getAttribute($this->getAttribute(        // line 274
($context["settings"] ?? null), "main", array()), "after-delete-account-action", array(), "array") == "redirect-to-url"))), "after-delete-account-action", "",         // line 278
$context["options"]->gettextInput("main[after-delete-account-action-redirect-url]", $this->getAttribute($this->getAttribute(        // line 280
($context["settings"] ?? null), "main", array()), "after-delete-account-action-redirect-url", array(), "array")), null, array("mbsThinCol" => 1));
        // line 283
        echo "

\t\t\t\t\t";
        // line 285
        echo $context["options"]->getradioRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Badges")), array(0 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes")), "name" => "main[badges]", "value" => "true", "checked" => ($this->getAttribute($this->getAttribute(        // line 291
($context["settings"] ?? null), "main", array()), "badges", array()) == "true")), 1 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "name" => "main[badges]", "value" => "false", "checked" => ($this->getAttribute($this->getAttribute(        // line 297
($context["settings"] ?? null), "main", array()), "badges", array()) == "false"))), "badges", null, null, array("mbsThinCol" => 1));
        // line 301
        echo "

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
    <div class=\"sc-tab-content\" data-tab=\"pages\">
        <div class=\"mp-action-panel\">
            <button class=\"create-pages sc-button icon-button primary\">
                <i class=\"fa fa-plus\"></i>
                <span>";
        // line 311
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Create all unassigned pages")), "html", null, true);
        echo "</span>
            </button>
            <button class=\"save-pages sc-button icon-button primary\">
                <i class=\"fa fa-save\"></i>
                <span>";
        // line 315
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Save Pages")), "html", null, true);
        echo "</span>
            </button>
        </div>
        <div class=\"mp-options\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    ";
        // line 321
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pages"] ?? null));
        foreach ($context['_seq'] as $context["slug"] => $context["page"]) {
            // line 322
            echo "\t\t\t\t\t\t";
            if (($context["slug"] == "contact_form")) {
                // line 323
                echo "\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["environment"] ?? null), "dispatcher", array()), "dispatch", array(0 => "backendSettingsMainPagesTab", 1 => array(0 => $this->getAttribute(($context["settings"] ?? null), "pages", array()))), "method"), "html", null, true);
                echo "
\t\t\t\t\t\t";
            } else {
                // line 325
                echo "\t\t\t\t\t\t\t<div class=\"mp-option mp-page-option\" data-page-slug=\"";
                echo twig_escape_filter($this->env, $context["slug"], "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-4 mbsThinCol\">
\t\t\t\t\t\t\t\t\t\t<div class=\"mp-option-label\">
\t\t\t\t\t\t\t\t\t\t\t<span title=\"";
                // line 329
                echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "title", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "title", array()), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t\t\t<div class=\"mp-option-input-with-button\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"mp-option-button\" ";
                // line 334
                if ($this->getAttribute($context["page"], "id", array())) {
                    echo "style=\"display: none\"";
                }
                echo ">
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"sc-button icon-button create-page-button primary\" data-page-slug=\"";
                // line 335
                echo twig_escape_filter($this->env, $context["slug"], "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-plus\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
                // line 337
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Create page")), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"mp-option-select\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 341
                echo $this->env->getExtension('Membership_Base_Twig')->callFunction("wp_dropdown_pages", array("name" => (("pages[" . $context["slug"]) . "]"), "selected" => $this->getAttribute($context["page"], "id", array()), "class" => "sc-input wp-pages-list", "echo" => false, "show_option_none" => "Select Page", "option_none_value" => "__none"));
                echo "
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 348
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['slug'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 349
        echo "
                </div>
            </div>
        </div>

    </div>
\t<div class=\"sc-tab-content\" data-tab=\"security\">
\t\t<div class=\"mp-options\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">

\t\t\t\t\t";
        // line 360
        echo $context["options"]->getradioRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Global Site Access")), array(0 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Site Accessible to Everyone")), "name" => "security[global-site-access]", "value" => "everyone", "checked" => ($this->getAttribute($this->getAttribute(        // line 365
($context["settings"] ?? null), "security", array()), "global-site-access", array(), "array") == "everyone")), 1 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Site Accessible to Logged In Users")), "name" => "security[global-site-access]", "value" => "logged-in-users", "checked" => ($this->getAttribute($this->getAttribute(        // line 371
($context["settings"] ?? null), "security", array()), "global-site-access", array(), "array") == "logged-in-users"))), "global-site-access", null, null, array("mbsThinCol" => 1));
        // line 375
        echo "

                    ";
        // line 377
        echo $context["options"]->getradioRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Protect all Pages")), array(0 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes")), "name" => "security[protect-all-pages]", "value" => "yes", "checked" => ($this->getAttribute($this->getAttribute(        // line 382
($context["settings"] ?? null), "security", array()), "protect-all-pages", array(), "array") == "yes")), 1 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "name" => "security[protect-all-pages]", "value" => "no", "checked" => ($this->getAttribute($this->getAttribute(        // line 388
($context["settings"] ?? null), "security", array()), "protect-all-pages", array(), "array") == "no"))), "protect-all-pages", null, null, array("mbsThinCol" => 1));
        // line 392
        echo "

\t\t\t\t\t";
        // line 394
        echo $context["options"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Redirect from backend login screen to membership login page")),         // line 395
$context["options"]->getradioInput(array(0 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes")), "name" => "security[backend-login-screen-redirect]", "value" => "yes", "checked" => ($this->getAttribute($this->getAttribute(        // line 399
($context["settings"] ?? null), "security", array()), "backend-login-screen-redirect", array(), "array") == "yes")), 1 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "name" => "security[backend-login-screen-redirect]", "value" => "no", "checked" => ($this->getAttribute($this->getAttribute(        // line 405
($context["settings"] ?? null), "security", array()), "backend-login-screen-redirect", array(), "array") == "no")))), "backend-login-screen-redirect", null, null, array("mbsThinCol" => 1));
        // line 409
        echo "

\t\t\t\t\t";
        // line 411
        echo $context["options"]->gettextareaRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Blocked IP Addresses")), "security[blocked-ip]", (($this->getAttribute($this->getAttribute(        // line 413
($context["settings"] ?? null), "security", array(), "any", false, true), "blocked-ip", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "security", array(), "any", false, true), "blocked-ip", array(), "array"), $this->getAttribute(($context["templates"] ?? null), "get", array(0 => "blocked-ip"), "method"))) : ($this->getAttribute(($context["templates"] ?? null), "get", array(0 => "blocked-ip"), "method"))), "blocked-ip", null, null, 6, null, array("mbsThinCol" => 1));
        // line 416
        echo "

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"sc-tab-content\" data-tab=\"uploads\">
\t\t<div class=\"mp-options\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"mp-option\" id=\"max-image-size\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-4 mbsThinCol\">
\t\t\t\t\t\t\t\t";
        // line 429
        echo $context["options"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Maximum Image Size")));
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t<div class=\"mp-option-sizes-input\">
\t\t\t\t\t\t\t\t\t<div class=\"mp-option-input\">
\t\t\t\t\t\t\t\t\t\t<input class=\"sc-input\" value=\"";
        // line 434
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "uploads", array()), "max-image-size", array(), "array"), "width", array()), "html", null, true);
        echo "\" name=\"uploads[max-image-size][width]\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<span>x</span>
\t\t\t\t\t\t\t\t\t<div class=\"mp-option-input\">
\t\t\t\t\t\t\t\t\t\t<input class=\"sc-input\" value=\"";
        // line 438
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "uploads", array()), "max-image-size", array(), "array"), "height", array()), "html", null, true);
        echo "\" name=\"uploads[max-image-size][height]\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"mp-option-input\">
\t\t\t\t\t\t<input type=\"hidden\"
\t\t\t\t\t\t\t   class=\"sc-input\"
\t\t\t\t\t\t\t   name=\"uploads[max-file-size]\"
\t\t\t\t\t\t\t   value=\"";
        // line 449
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "uploads", array()), "max-file-size", array(), "array"), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t   max=\"";
        // line 450
        echo twig_escape_filter($this->env, ($context["maxFileUpload"] ?? null), "html", null, true);
        echo "\"
\t\t\t\t\t\t>
\t\t\t\t\t</div>

\t\t\t\t\t";
        // line 454
        echo $context["options"]->getinputRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Maximum File Size (Mb)")), "uploads[max-file-size-mb]", ($this->getAttribute($this->getAttribute(        // line 457
($context["settings"] ?? null), "uploads", array()), "max-file-size", array(), "array") / (1024 * 1024)), "max-file-size-mb", "", (("max=\"" . (        // line 460
($context["maxFileUpload"] ?? null) / (1024 * 1024))) . "\""), array("mbsThinCol" => 1));
        // line 462
        echo "
\t\t\t\t\t<div class=\"col-md-4 mbsThinCol\" style=\"width: 315px!important;\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t<div class=\"mp-option-input-description\">
\t\t\t\t\t\t\t<div class=\"description\">
\t\t\t\t\t\t\t\t<span>";
        // line 468
        echo twig_escape_filter($this->env, sprintf(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Maximum available file upload size is %d Mb")), (($context["maxFileUpload"] ?? null) / (1024 * 1024))), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t";
        // line 473
        echo $context["options"]->getinputRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Image Quality")), "uploads[image-quality]", $this->getAttribute($this->getAttribute(        // line 475
($context["settings"] ?? null), "uploads", array()), "image-quality", array(), "array"), "image-quality", null, null, array("mbsThinCol" => 1));
        // line 478
        echo "

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"sc-tab-content\" data-tab=\"seo\">
\t\t<div class=\"mp-options\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">

\t\t\t\t\t";
        // line 489
        echo $context["options"]->getinputRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("User Profile Title")), "seo[profile-title]", $this->getAttribute($this->getAttribute(        // line 491
($context["settings"] ?? null), "seo", array()), "profile-title", array(), "array"), "profile-title", null, null, array("mbsThinCol" => 1));
        // line 494
        echo "

\t\t\t\t\t";
        // line 496
        echo $context["options"]->gettextareaRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("User Profile Dynamic Meta Description")), "seo[profile-description]", (($this->getAttribute($this->getAttribute(        // line 498
($context["settings"] ?? null), "seo", array(), "any", false, true), "profile-description", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "seo", array(), "any", false, true), "profile-description", array(), "array"), $this->getAttribute(($context["templates"] ?? null), "get", array(0 => "profile-description"), "method"))) : ($this->getAttribute(($context["templates"] ?? null), "get", array(0 => "profile-description"), "method"))), "profile-description", null, null, 6, null, array("mbsThinCol" => 1));
        // line 501
        echo "

\t\t\t\t\t";
        // line 503
        echo $context["options"]->getinputRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Group Title")), "seo[group-title]", $this->getAttribute($this->getAttribute(        // line 505
($context["settings"] ?? null), "seo", array()), "group-title", array(), "array"), "group-title", null, null, array("mbsThinCol" => 1));
        // line 508
        echo "

\t\t\t\t\t";
        // line 510
        echo $context["options"]->gettextareaRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Group Dynamic Meta Description")), "seo[group-description]", (($this->getAttribute($this->getAttribute(        // line 512
($context["settings"] ?? null), "seo", array(), "any", false, true), "group-description", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "seo", array(), "any", false, true), "group-description", array(), "array"), $this->getAttribute(($context["templates"] ?? null), "get", array(0 => "group-description"), "method"))) : ($this->getAttribute(($context["templates"] ?? null), "get", array(0 => "group-description"), "method"))), "group-description", null, null, 6, null, array("mbsThinCol" => 1));
        // line 515
        echo "

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"sc-tab-content\" data-tab=\"import\">
\t\t<div class=\"mp-options\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<h3>";
        // line 525
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Activity link image preview for Amazon")), "html", null, true);
        echo "</h3>
\t\t\t\t\t";
        // line 526
        echo $context["options"]->getselectInput2(array(0 => array("value" => 0, "title" => "Default"), 1 => array("value" => 1, "title" => "Extended1")), $this->getAttribute($this->getAttribute(        // line 531
($context["settings"] ?? null), "import", array(), "array"), "amazon-link-img-preview", array(), "array"), array("name" => "import[amazon-link-img-preview]", "class" => "sc-input mbs-act-link-img-preview"), 0);
        // line 537
        echo "
\t
\t\t\t\t\t";
        // line 539
        if (($context["isBuddyPressExists"] ?? null)) {
            // line 540
            echo "\t\t\t\t\t\t<h3 class=\"header\">BuddyPress</h3>
\t\t\t\t\t\t<div class=\"mp-option\">
\t\t\t\t\t\t\t<label class=\"sc-checkbox\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"bp-fields\" value=\"true\" checked=\"checked\">
\t\t\t\t\t\t\t\t<div class=\"sc-checkbox-state\"></div>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<label for=\"bp-fields\">";
            // line 546
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import User Fields")), "html", null, true);
            echo "</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"mp-option\">
\t\t\t\t\t\t\t<label class=\"sc-checkbox\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"bp-groups\" value=\"true\" checked=\"checked\">
\t\t\t\t\t\t\t\t<div class=\"sc-checkbox-state\"></div>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<label for=\"bp-groups\">";
            // line 553
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import Groups")), "html", null, true);
            echo "</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"mp-option\">
\t\t\t\t\t\t\t<label class=\"sc-checkbox\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"bp-friends\" value=\"true\" checked=\"checked\">
\t\t\t\t\t\t\t\t<div class=\"sc-checkbox-state\"></div>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<label for=\"bp-friends\">";
            // line 560
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import Friends")), "html", null, true);
            echo "</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"mp-option\">
\t\t\t\t\t\t\t<label class=\"sc-checkbox\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"bp-activity\" value=\"true\" checked=\"checked\">
\t\t\t\t\t\t\t\t<div class=\"sc-checkbox-state\"></div>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<label for=\"bp-activity\">";
            // line 567
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import Activity")), "html", null, true);
            echo "</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div style=\"margin: 2em 0\">
\t\t\t\t\t\t\t<button class=\"import-buddy-press-data sc-button icon-button primary\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-plus-circle\"></i>
\t\t\t\t\t\t\t\t<span>";
            // line 573
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import Buddy Press Data")), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 577
        echo "\t\t\t\t\t
\t\t\t\t\t";
        // line 578
        if (($context["isUltimateMemberExists"] ?? null)) {
            // line 579
            echo "\t\t\t\t\t\t<h3 class=\"header\">Ultimate Member</h3>
\t\t\t\t\t\t<div class=\"mp-option\">
\t\t\t\t\t\t\t<label class=\"sc-checkbox\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"um-fields\" value=\"true\" checked=\"checked\">
\t\t\t\t\t\t\t\t<div class=\"sc-checkbox-state\"></div>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<label for=\"bp-fields\">";
            // line 585
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import User Fields")), "html", null, true);
            echo "</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div style=\"margin: 2em 0\">
\t\t\t\t\t\t\t<button class=\"import-ultimate-member-data sc-button icon-button primary\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-plus-circle\"></i>
\t\t\t\t\t\t\t\t<span>";
            // line 591
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import Ultimate Member Data")), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 595
        echo "\t\t\t\t\t
\t\t\t\t\t";
        // line 596
        if (( !($context["isBuddyPressExists"] ?? null) &&  !($context["isUltimateMemberExists"] ?? null))) {
            // line 597
            echo "\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No supported plugins found. Currently we support:")), "html", null, true);
            echo " BuddyPress, Ultimate Member.
\t\t\t\t\t";
        }
        // line 599
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"sc-tab-content\" data-tab=\"groups\">
\t\t<div class=\"mp-options\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<h3>";
        // line 608
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Group Category List")), "html", null, true);
        echo "</h3>
\t\t\t\t\t<div class=\"mbsGroupCategoryWrapper\">
\t\t\t\t\t\t<label id=\"mbsGroupCategoryNameLabel\" for=\"mbsGroupCategoryName\">";
        // line 610
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Group category name:")), "html", null, true);
        echo "</label>
\t\t\t\t\t\t<input type=\"text\" value=\"\" id=\"mbsGroupCategoryName\" class=\"sc-input\"/>
\t\t\t\t\t\t<button id=\"mbsSaveNewGroupCategory\" class=\"sc-button icon-button primary\" data-add=\"";
        // line 612
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Add new")), "html", null, true);
        echo "\" data-update=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Update")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Add new")), "html", null, true);
        echo "</button>
\t\t\t\t\t\t<button id=\"mbsCancelNewGroupCategory\" class=\"sc-button icon-button primary\">";
        // line 613
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Cancel")), "html", null, true);
        echo "</button>
\t\t\t\t\t</div>
\t\t\t\t\t<table id=\"mbsGroupCategoryTbl\">
\t\t\t\t\t\t<body>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th>Id</th>
\t\t\t\t\t\t\t\t<th>Name</th>
\t\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
        // line 622
        if (twig_length_filter($this->env, ($context["groupCategoryList"] ?? null))) {
            // line 623
            echo "\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["groupCategoryList"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["oneGcItem"]) {
                // line 624
                echo "\t\t\t\t\t\t\t\t\t<tr id=\"mbsGcTblRow-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["oneGcItem"], "id", array(), "array"), "html", null, true);
                echo "\" data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["oneGcItem"], "id", array(), "array"), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t<td>";
                // line 625
                echo twig_escape_filter($this->env, $this->getAttribute($context["oneGcItem"], "id", array(), "array"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t<td>";
                // line 626
                echo twig_escape_filter($this->env, $this->getAttribute($context["oneGcItem"], "name", array(), "array"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"mbsGroupCategoryEdit\">";
                // line 628
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Edit")), "html", null, true);
                echo "</a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"mbsGroupCategoryRemove\">";
                // line 629
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Remove")), "html", null, true);
                echo "</a>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oneGcItem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 633
            echo "\t\t\t\t\t\t\t";
        }
        // line 634
        echo "\t\t\t\t\t\t</body>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"mp-option\" id=\"admin-email\">
\t\t\t\t\t\t<h4>";
        // line 641
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Joined Groups tab")), "html", null, true);
        echo "</h4>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-4 mbsThinCol\">
\t\t\t\t\t\t\t\t<div class=\"mp-option-label\">
\t\t\t\t\t\t\t\t\t<span>";
        // line 645
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Sort Groups by")), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t<div class=\"mp-option-helper tooltip\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-question sc-tooltip\"></i>
\t\t\t\t\t\t\t\t\t\t<div class=\"tooltip_content\">
\t\t\t\t\t\t\t\t\t\t\t<div>";
        // line 649
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Sorts in Descending order")), "html", null, true);
        echo "</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t";
        // line 656
        echo $context["options"]->getselectInput2(array(0 => array("value" => 0, "title" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Id"))), 1 => array("value" => 1, "title" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Recent Post")))), $this->getAttribute($this->getAttribute(        // line 661
($context["settings"] ?? null), "groups", array()), "joined-sort-order", array(), "array"), array("name" => "groups[joined-sort-order]", "class" => "sc-input", "style" => "width: 160px;"));
        // line 663
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<input type=\"hidden\" id=\"mbsMsgGroupCategoryRemove\" value=\"";
        // line 670
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Are you sure you want to delete this category?")), "html", null, true);
        echo "\"/>
\t\t<input type=\"hidden\" id=\"mbsMsgErrorOcured-1\" value=\"";
        // line 671
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Error Occurred!")), "html", null, true);
        echo "\"/>
\t\t<input type=\"hidden\" id=\"mbsMsgSavedSuccessfully\" value=\"";
        // line 672
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Record saved...")), "html", null, true);
        echo "\"/>
\t\t<input type=\"hidden\" id=\"mbsMsgUpdatedSuccessfully\" value=\"";
        // line 673
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Record updated...")), "html", null, true);
        echo "\"/>
\t\t<input type=\"hidden\" id=\"mbsMsgRemoveSuccessfully\" value=\"";
        // line 674
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Record removed...")), "html", null, true);
        echo "\"/>
\t\t<input type=\"hidden\" id=\"mbsTxtEdit\" value=\"";
        // line 675
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Edit")), "html", null, true);
        echo "\"/>
\t\t<input type=\"hidden\" id=\"mbsTxtRemove\" value=\"";
        // line 676
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Remove")), "html", null, true);
        echo "\"/>
\t</div>

\t<div class=\"sc-tab-content\" data-tab=\"reports\">
\t\t<div class=\"mp-options\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<form class=\"mp-option\" id=\"search\" action=\"";
        // line 683
        echo twig_escape_filter($this->env, (($context["reportsUrl"] ?? null) . "#reports"), "html", null, true);
        echo "\" method=\"get\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-2\">
\t\t\t\t\t\t\t\t";
        // line 686
        echo $context["options"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Search")));
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t<div class=\"report-filter search\">
\t\t\t\t\t\t\t\t\t<input name=\"page\" type=\"hidden\" value=\"supsystic-membership\"/>
\t\t\t\t\t\t\t\t\t<input name=\"module\" type=\"hidden\" value=\"membership\"/>
\t\t\t\t\t\t\t\t\t<input name=\"order_by\" type=\"hidden\" value=\"";
        // line 692
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["request"] ?? null), "query", array()), "get", array(0 => "order_by"), "method"), "html", null, true);
        echo "\"/>
\t\t\t\t\t\t\t\t\t<input name=\"order\" type=\"hidden\" value=\"";
        // line 693
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["request"] ?? null), "query", array()), "get", array(0 => "order"), "method"), "html", null, true);
        echo "\"/>
\t\t\t\t\t\t\t\t\t<input class=\"sc-input\" name=\"report_comment\" type=\"text\" value=\"";
        // line 694
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["request"] ?? null), "query", array()), "get", array(0 => "report_comment"), "method"), "html", null, true);
        echo "\" id=\"mbsReportFindField\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-2\">
\t\t\t\t\t\t\t\t<input type=\"submit\" class=\"sc-button primary\" value=\"";
        // line 698
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Search")), "html", null, true);
        echo "\"/>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>

\t\t\t\t\t";
        // line 703
        $context["reqTurnedOrder"] = ((($this->getAttribute($this->getAttribute(($context["request"] ?? null), "query", array()), "get", array(0 => "order"), "method") == "asc")) ? ("desc") : ("asc"));
        // line 704
        echo "\t\t\t\t\t";
        $context["reqOrderName"] = $this->getAttribute($this->getAttribute(($context["request"] ?? null), "query", array()), "get", array(0 => "order_by"), "method");
        // line 705
        echo "\t\t\t\t\t";
        $context["report_comment"] = $this->getAttribute($this->getAttribute(($context["request"] ?? null), "query", array()), "get", array(0 => "report_comment"), "method");
        // line 706
        echo "\t\t\t\t\t<table class=\"sc-table reports\" data-translate=\"";
        echo twig_escape_filter($this->env, twig_jsonencode_filter(array("Read" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Read")), "Unread" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Unread")), "Mark as read and close" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Mark as read and close")), "Mark as unread and close" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Mark as unread and close")), "Close" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Close")), "User is not found" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("User is not found")), "Activity is not found" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Activity is not found")))));
        // line 714
        echo "\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th><a href=\"";
        // line 716
        echo twig_escape_filter($this->env, (((((($context["reportsUrl"] ?? null) . "&order_by=id&order=") . ($context["reqTurnedOrder"] ?? null)) . "&report_comment=") . ($context["report_comment"] ?? null)) . "#reports"), "html", null, true);
        echo "\" class=\"";
        if ((($context["reqOrderName"] ?? null) == "id")) {
            if (($this->getAttribute($this->getAttribute(($context["request"] ?? null), "query", array()), "get", array(0 => "order"), "method") == "desc")) {
                echo "mbsDescOrder";
            } else {
                echo "mbsAscOrder";
            }
        }
        echo "\">#</a></th>
\t\t\t\t\t\t\t<th><a href=\"";
        // line 717
        echo twig_escape_filter($this->env, (((((($context["reportsUrl"] ?? null) . "&order_by=content_type&order=") . ($context["reqTurnedOrder"] ?? null)) . "&report_comment=") . ($context["report_comment"] ?? null)) . "#reports"), "html", null, true);
        echo "\" class=\"";
        if ((($context["reqOrderName"] ?? null) == "content_type")) {
            if (($this->getAttribute($this->getAttribute(($context["request"] ?? null), "query", array()), "get", array(0 => "order"), "method") == "desc")) {
                echo "mbsDescOrder";
            } else {
                echo "mbsAscOrder";
            }
        }
        echo "\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Report type")), "html", null, true);
        echo "</a></th>
\t\t\t\t\t\t\t<th><a href=\"";
        // line 718
        echo twig_escape_filter($this->env, (((((($context["reportsUrl"] ?? null) . "&order_by=reporter_id&order=") . ($context["reqTurnedOrder"] ?? null)) . "&report_comment=") . ($context["report_comment"] ?? null)) . "#reports"), "html", null, true);
        echo "\" class=\"";
        if ((($context["reqOrderName"] ?? null) == "reporter_id")) {
            if (($this->getAttribute($this->getAttribute(($context["request"] ?? null), "query", array()), "get", array(0 => "order"), "method") == "desc")) {
                echo "mbsDescOrder";
            } else {
                echo "mbsAscOrder";
            }
        }
        echo "\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Reporter")), "html", null, true);
        echo "</a></th>
\t\t\t\t\t\t\t";
        // line 720
        echo "\t\t\t\t\t\t\t<th><a href=\"";
        echo twig_escape_filter($this->env, (((((($context["reportsUrl"] ?? null) . "&order_by=reported_id&order=") . ($context["reqTurnedOrder"] ?? null)) . "&report_comment=") . ($context["report_comment"] ?? null)) . "#reports"), "html", null, true);
        echo "\" class=\"";
        if ((($context["reqOrderName"] ?? null) == "reported_id")) {
            if (($this->getAttribute($this->getAttribute(($context["request"] ?? null), "query", array()), "get", array(0 => "order"), "method") == "desc")) {
                echo "mbsDescOrder";
            } else {
                echo "mbsAscOrder";
            }
        }
        echo "\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Reported")), "html", null, true);
        echo "</a></th>
\t\t\t\t\t\t\t<th>";
        // line 721
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Report Comment")), "html", null, true);
        echo "</th>
\t\t\t\t\t\t\t<th><a href=\"";
        // line 722
        echo twig_escape_filter($this->env, (((((($context["reportsUrl"] ?? null) . "&order_by=date&order=") . ($context["reqTurnedOrder"] ?? null)) . "&report_comment=") . ($context["report_comment"] ?? null)) . "#reports"), "html", null, true);
        echo "\" class=\"";
        if ((($context["reqOrderName"] ?? null) == "date")) {
            if (($this->getAttribute($this->getAttribute(($context["request"] ?? null), "query", array()), "get", array(0 => "order"), "method") == "desc")) {
                echo "mbsDescOrder";
            } else {
                echo "mbsAscOrder";
            }
        }
        echo "\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Report Date")), "html", null, true);
        echo "</a></th>
\t\t\t\t\t\t\t<th><a href=\"";
        // line 723
        echo twig_escape_filter($this->env, (((((($context["reportsUrl"] ?? null) . "&order_by=status&order=") . ($context["reqTurnedOrder"] ?? null)) . "&report_comment=") . ($context["report_comment"] ?? null)) . "#reports"), "html", null, true);
        echo "\" class=\"";
        if ((($context["reqOrderName"] ?? null) == "status")) {
            if (($this->getAttribute($this->getAttribute(($context["request"] ?? null), "query", array()), "get", array(0 => "order"), "method") == "desc")) {
                echo "mbsDescOrder";
            } else {
                echo "mbsAscOrder";
            }
        }
        echo "\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Report Status")), "html", null, true);
        echo "</a></th>
\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t</tr>

\t\t\t\t\t\t";
        // line 727
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reports"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["report"]) {
            // line 728
            echo "\t\t\t\t\t\t\t<tr class=\"report\"
\t\t\t\t\t\t\t\tdata-report-id=\"";
            // line 729
            echo twig_escape_filter($this->env, $this->getAttribute($context["report"], "id", array()), "html", null, true);
            echo "\"
\t\t\t\t\t\t\t\tdata-report=\"";
            // line 730
            echo twig_escape_filter($this->env, twig_jsonencode_filter($context["report"]), "html", null, true);
            echo "\"
\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t";
            // line 733
            echo twig_escape_filter($this->env, $this->getAttribute($context["report"], "id", array()), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<div class=\"content-type\">
\t\t\t\t\t\t\t\t\t\t";
            // line 737
            if (($this->getAttribute($context["report"], "content_type", array()) == "activity")) {
                // line 738
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Activity Report")), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t";
            } elseif (($this->getAttribute(            // line 739
$context["report"], "content_type", array()) == "user")) {
                // line 740
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("User Report")), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 742
            echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<div class=\"reporter\">
\t\t\t\t\t\t\t\t\t\t";
            // line 746
            if ($this->getAttribute($context["report"], "reporter", array())) {
                // line 747
                echo "\t\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["report"], "reporter", array()), "url", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["report"], "reporter", array()), "displayName", array()), "html", null, true);
                echo "</a>
\t\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"";
                // line 748
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["report"], "reporter", array()), "editLink", array()), "html", null, true);
                echo "\"><small>(";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Edit profile")), "html", null, true);
                echo ")</small></a>
\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 750
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, sprintf(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("User with id %d is not found")), $this->getAttribute($context["report"], "reporter_id", array())), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 752
            echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t";
            // line 755
            echo "\t\t\t\t\t\t\t\t";
            // line 756
            echo "\t\t\t\t\t\t\t\t";
            // line 757
            echo "\t\t\t\t\t\t\t\t";
            // line 758
            echo "\t\t\t\t\t\t\t\t";
            // line 759
            echo "\t\t\t\t\t\t\t\t";
            // line 760
            echo "\t\t\t\t\t\t\t\t";
            // line 761
            echo "\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<div class=\"reported\">
\t\t\t\t\t\t\t\t\t\t";
            // line 763
            if (($this->getAttribute($context["report"], "content_type", array()) == "activity")) {
                // line 764
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                if ($this->getAttribute($context["report"], "reported", array())) {
                    // line 765
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["report"], "reported", array()), "url", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Link")), "html", null, true);
                    echo "</a>
\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 767
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, sprintf(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Activity with id %d is not found")), $this->getAttribute($context["report"], "reported_id", array())), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 769
                echo "\t\t\t\t\t\t\t\t\t\t";
            } elseif (($this->getAttribute($context["report"], "content_type", array()) == "user")) {
                // line 770
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                if ($this->getAttribute($context["report"], "reported", array())) {
                    // line 771
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Membership_Users_Twig')->profileUrl($this->getAttribute($context["report"], "reported", array())), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["report"], "reported", array()), "displayName", array()), "html", null, true);
                    echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"";
                    // line 772
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["report"], "reported", array()), "editLink", array()), "html", null, true);
                    echo "\"><small>(";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Edit")), "html", null, true);
                    echo ")</small></a>
\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 774
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, sprintf(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("User with id %d is not found")), $this->getAttribute($context["report"], "reported_id", array())), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 776
                echo "\t\t\t\t\t\t\t\t\t\t";
            }
            // line 777
            echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<div class=\"comment\">";
            // line 780
            echo twig_escape_filter($this->env, $this->env->getExtension('Membership_Base_Twig')->truncate($this->getAttribute($context["report"], "comment", array()), 80), "html", null, true);
            echo "</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<div class=\"date\">";
            // line 783
            echo twig_escape_filter($this->env, $this->getAttribute($context["report"], "date", array()), "html", null, true);
            echo "</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<div class=\"status\">
\t\t\t\t\t\t\t\t\t\t";
            // line 787
            if (($this->getAttribute($context["report"], "status", array()) != "new")) {
                // line 788
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Read")), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 790
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Unread")), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 792
            echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<div class=\"info\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"report-details\">";
            // line 796
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Details")), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['report'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 801
        echo "\t\t\t\t\t</table>

\t\t\t\t\t<div class=\"sc-hidden user-report-details-template\">
\t\t\t\t\t\t";
        // line 804
        $this->loadTemplate("@reports/backend/partials/user-report-details.twig", "@membership/backend/index.twig", 804)->display($context);
        // line 805
        echo "\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"sc-hidden activity-report-details-template\">
\t\t\t\t\t\t";
        // line 808
        $this->loadTemplate("@reports/backend/partials/activity-report-details.twig", "@membership/backend/index.twig", 808)->display($context);
        // line 809
        echo "\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"mp-modal send-message-modal sc-hidden\">
\t\t\t\t\t\t<div class=\"mp-option\" id=\"message\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" class=\"user-id\" name=\"user-id\" value=\"\">
\t\t\t\t\t\t\t\t\t<div class=\"mp-option-label\">
\t\t\t\t\t\t\t\t\t\t<span>";
        // line 817
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Send message to: ")), "html", null, true);
        echo "</span> <span class=\"message-recipient\"></span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"mp-option-input\">
\t\t\t\t\t\t\t\t\t\t<textarea class=\"message-input\" class=\"sc-input\" name=\"\" cols=\"35\" rows=\"10\"></textarea>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"mp-result\">
\t\t\t\t\t\t\t\t\t\t<span id=\"message-result\"></span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

    ";
        // line 834
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["environment"] ?? null), "dispatcher", array()), "dispatch", array(0 => "backendSettingsMainContentSettings"), "method"), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "@membership/backend/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1138 => 834,  1118 => 817,  1108 => 809,  1106 => 808,  1101 => 805,  1099 => 804,  1094 => 801,  1083 => 796,  1077 => 792,  1071 => 790,  1065 => 788,  1063 => 787,  1056 => 783,  1050 => 780,  1045 => 777,  1042 => 776,  1036 => 774,  1029 => 772,  1022 => 771,  1019 => 770,  1016 => 769,  1010 => 767,  1002 => 765,  999 => 764,  997 => 763,  993 => 761,  991 => 760,  989 => 759,  987 => 758,  985 => 757,  983 => 756,  981 => 755,  977 => 752,  971 => 750,  964 => 748,  957 => 747,  955 => 746,  949 => 742,  943 => 740,  941 => 739,  936 => 738,  934 => 737,  927 => 733,  921 => 730,  917 => 729,  914 => 728,  910 => 727,  893 => 723,  879 => 722,  875 => 721,  860 => 720,  846 => 718,  832 => 717,  820 => 716,  816 => 714,  813 => 706,  810 => 705,  807 => 704,  805 => 703,  797 => 698,  790 => 694,  786 => 693,  782 => 692,  773 => 686,  767 => 683,  757 => 676,  753 => 675,  749 => 674,  745 => 673,  741 => 672,  737 => 671,  733 => 670,  724 => 663,  722 => 661,  721 => 656,  711 => 649,  704 => 645,  697 => 641,  688 => 634,  685 => 633,  675 => 629,  671 => 628,  666 => 626,  662 => 625,  655 => 624,  650 => 623,  648 => 622,  636 => 613,  628 => 612,  623 => 610,  618 => 608,  607 => 599,  601 => 597,  599 => 596,  596 => 595,  589 => 591,  580 => 585,  572 => 579,  570 => 578,  567 => 577,  560 => 573,  551 => 567,  541 => 560,  531 => 553,  521 => 546,  513 => 540,  511 => 539,  507 => 537,  505 => 531,  504 => 526,  500 => 525,  488 => 515,  486 => 512,  485 => 510,  481 => 508,  479 => 505,  478 => 503,  474 => 501,  472 => 498,  471 => 496,  467 => 494,  465 => 491,  464 => 489,  451 => 478,  449 => 475,  448 => 473,  440 => 468,  432 => 462,  430 => 460,  429 => 457,  428 => 454,  421 => 450,  417 => 449,  403 => 438,  396 => 434,  388 => 429,  373 => 416,  371 => 413,  370 => 411,  366 => 409,  364 => 405,  363 => 399,  362 => 395,  361 => 394,  357 => 392,  355 => 388,  354 => 382,  353 => 377,  349 => 375,  347 => 371,  346 => 365,  345 => 360,  332 => 349,  326 => 348,  316 => 341,  309 => 337,  304 => 335,  298 => 334,  288 => 329,  280 => 325,  274 => 323,  271 => 322,  267 => 321,  258 => 315,  251 => 311,  239 => 301,  237 => 297,  236 => 291,  235 => 285,  231 => 283,  229 => 280,  228 => 278,  227 => 274,  226 => 268,  225 => 262,  221 => 260,  219 => 257,  218 => 255,  217 => 251,  216 => 245,  215 => 239,  211 => 237,  209 => 234,  208 => 232,  207 => 228,  206 => 222,  205 => 216,  201 => 214,  199 => 211,  198 => 209,  197 => 205,  196 => 199,  195 => 193,  190 => 191,  186 => 189,  184 => 185,  183 => 179,  182 => 173,  178 => 171,  176 => 167,  175 => 161,  174 => 155,  170 => 153,  168 => 149,  167 => 143,  166 => 137,  162 => 135,  160 => 131,  159 => 125,  158 => 119,  154 => 117,  152 => 113,  151 => 107,  150 => 101,  146 => 99,  144 => 95,  143 => 89,  142 => 83,  138 => 81,  136 => 77,  135 => 71,  134 => 65,  130 => 63,  128 => 60,  127 => 54,  126 => 52,  118 => 46,  115 => 45,  108 => 41,  105 => 40,  102 => 39,  94 => 34,  87 => 30,  82 => 28,  76 => 25,  70 => 22,  64 => 19,  58 => 16,  52 => 13,  46 => 10,  40 => 7,  36 => 5,  33 => 4,  29 => 1,  27 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@membership/backend/index.twig", "/Users/shingkeelau/Public/web/wp-content/plugins/membership-by-supsystic/src/Membership/Membership/views/backend/index.twig");
    }
}
