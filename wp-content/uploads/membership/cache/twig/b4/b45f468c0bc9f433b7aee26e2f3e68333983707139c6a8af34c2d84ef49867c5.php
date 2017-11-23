<?php

/* @groups/settings.twig */
class __TwigTemplate_23087b895d8f56bf93c48d584d8caa09752016c8aec8cb900a98e8b6327a9db4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@groups/group.twig", "@groups/settings.twig", 1);
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
        echo "\t<div class=\"mp-group-settings\">
\t\t<div class=\"ui basic vertical segment\">
\t\t\t<div class=\"ui secondary pointing menu settings-tabs\">
\t\t\t\t<a class=\"active item\" data-tab=\"main\">";
        // line 7
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Main")), "html", null, true);
        echo "</a>
\t\t\t\t<a class=\"item\" data-tab=\"privacy\">";
        // line 8
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Privacy")), "html", null, true);
        echo "</a>
\t\t\t\t<a class=\"item\" data-tab=\"tags\">";
        // line 9
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Tags")), "html", null, true);
        echo "</a>
\t\t\t</div>
\t\t</div>
\t\t
\t\t<div class=\"ui active tab\" data-tab=\"main\">
\t\t\t<div class=\"ui form basic vertical segment group-settings-form\">
\t\t\t\t<h3 class=\"ui header\">";
        // line 15
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Group settings")), "html", null, true);
        echo "</h3>
\t\t\t\t<div class=\"field\">
\t\t\t\t\t<label>";
        // line 17
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Group Name")), "html", null, true);
        echo "</label>
\t\t\t\t\t <input type=\"text\" name=\"name\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["requestedGroup"] ?? null), "name", array()), "html", null, true);
        echo "\" placeholder=\"Group Name\">
\t\t\t\t</div>
\t\t\t\t<div class=\"field\">
\t\t\t\t\t<label>";
        // line 21
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Group Description")), "html", null, true);
        echo "</label>
\t\t\t\t\t<textarea max=\"2000\" rows=\"2\" name=\"description\" placeholder=\"";
        // line 22
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Group Description")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["requestedGroup"] ?? null), "description", array()), "html", null, true);
        echo "</textarea>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"field\">
\t\t\t\t\t<button class=\"ui primary mini button update-button\">";
        // line 26
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Update")), "html", null, true);
        echo "</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"ui form basic vertical segment\">
\t\t\t\t<h3 class=\"ui header\">";
        // line 30
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Group deletion")), "html", null, true);
        echo "</h3>
\t\t\t\t<div class=\"field\">
\t\t\t\t\t<div class=\"field\">
\t\t\t\t\t\t<div class=\"ui checkbox\">
\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"delete-confirmation\" class=\"hidden confirm-deletion\">
\t\t\t\t\t\t\t<label for=\"delete-confirmation\">";
        // line 35
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Confirm deletion (All group data will be deleted and cannot be restored)")), "html", null, true);
        echo "</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<button class=\"ui button negative mini confirm-deletion-button\" style=\"display: none\">";
        // line 38
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Delete group")), "html", null, true);
        echo "</button>
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t\t
\t\t<div class=\"ui tab\" data-tab=\"privacy\">
\t\t\t<div class=\"ui form vertical segment privacy-settings\">
\t\t\t\t<div class=\"field\">
\t\t\t\t\t<label>";
        // line 47
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Community type")), "html", null, true);
        echo "</label>
\t\t\t\t\t
\t\t\t\t\t";
        // line 49
        $context["typeOptions"] = array("open" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Open")), "closed" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Closed")), "private" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Private")));
        // line 54
        echo "\t\t\t\t\t
\t\t\t\t\t<select class=\"ui dropdown\" name=\"type\">
\t\t\t\t\t\t";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["typeOptions"] ?? null));
        foreach ($context['_seq'] as $context["option"] => $context["title"]) {
            // line 57
            echo "\t\t\t\t\t\t\t<option
\t\t\t\t\t\t\t\tvalue=\"";
            // line 58
            echo twig_escape_filter($this->env, $context["option"], "html", null, true);
            echo "\"
\t\t\t\t\t\t\t\t";
            // line 59
            if (($this->getAttribute($this->getAttribute(($context["requestedGroup"] ?? null), "settings", array()), "type", array()) == $context["option"])) {
                echo " selected";
            }
            // line 60
            echo "\t\t\t\t\t\t\t>";
            echo twig_escape_filter($this->env, $context["title"], "html", null, true);
            echo "</option>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['option'], $context['title'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "\t\t\t\t\t</select>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<div class=\"field\">
\t\t\t\t\t<label>";
        // line 66
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Activity viewing")), "html", null, true);
        echo "</label>
\t\t\t\t\t
\t\t\t\t\t";
        // line 68
        $context["readActivityOptions"] = array("all" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("All users can view group activity")), "members-only" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Group members only can view activity")));
        // line 72
        echo "\t\t\t\t\t
\t\t\t\t\t<select class=\"ui dropdown\" name=\"read-activity\">
\t\t\t\t\t\t";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["readActivityOptions"] ?? null));
        foreach ($context['_seq'] as $context["option"] => $context["title"]) {
            // line 75
            echo "\t\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $context["option"], "html", null, true);
            echo "\"
\t\t\t\t\t\t\t\t\t";
            // line 76
            if (($this->getAttribute($this->getAttribute(($context["requestedGroup"] ?? null), "settings", array()), "read-activity", array(), "array") == $context["option"])) {
                echo " selected";
            }
            // line 77
            echo "\t\t\t\t\t\t\t>";
            echo twig_escape_filter($this->env, $context["title"], "html", null, true);
            echo "</option>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['option'], $context['title'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t<div class=\"field\">
\t\t\t\t\t<label>";
        // line 82
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Activity post writing")), "html", null, true);
        echo "</label>
\t\t\t\t\t
\t\t\t\t\t";
        // line 84
        $context["postActivityOptions"] = array("all" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("All users can write posts")), "members-only" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Group members only can write posts")), "administrators" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Administrators only can write posts")));
        // line 89
        echo "\t\t\t\t\t
\t\t\t\t\t<select class=\"ui dropdown\"  name=\"post-activity\">
\t\t\t\t\t\t";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["postActivityOptions"] ?? null));
        foreach ($context['_seq'] as $context["option"] => $context["title"]) {
            // line 92
            echo "\t\t\t\t\t\t\t<option
\t\t\t\t\t\t\t\tvalue=\"";
            // line 93
            echo twig_escape_filter($this->env, $context["option"], "html", null, true);
            echo "\"
\t\t\t\t\t\t\t\t";
            // line 94
            if (($this->getAttribute($this->getAttribute(($context["requestedGroup"] ?? null), "settings", array()), "post-activity", array(), "array") == $context["option"])) {
                echo " selected";
            }
            // line 95
            echo "\t\t\t\t\t\t\t>";
            echo twig_escape_filter($this->env, $context["title"], "html", null, true);
            echo "</option>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['option'], $context['title'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "\t\t\t\t\t</select>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<div class=\"field\">
\t\t\t\t\t<label>";
        // line 101
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Activity commenting")), "html", null, true);
        echo "</label>
\t\t\t\t\t
\t\t\t\t\t";
        // line 103
        $context["commentActivityOptions"] = array("all" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("All users can comment")), "members-only" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Group members only can comment")), "administrators" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Administrators only can comment")));
        // line 108
        echo "\t\t\t\t\t
\t\t\t\t\t<select class=\"ui dropdown\" name=\"post-comments\">
\t\t\t\t\t\t";
        // line 110
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["commentActivityOptions"] ?? null));
        foreach ($context['_seq'] as $context["option"] => $context["title"]) {
            // line 111
            echo "\t\t\t\t\t\t\t<option
\t\t\t\t\t\t\t\tvalue=\"";
            // line 112
            echo twig_escape_filter($this->env, $context["option"], "html", null, true);
            echo "\"
\t\t\t\t\t\t\t\t";
            // line 113
            if (($this->getAttribute($this->getAttribute(($context["requestedGroup"] ?? null), "settings", array()), "post-comments", array(), "array") == $context["option"])) {
                echo " selected";
            }
            // line 114
            echo "\t\t\t\t\t\t\t>";
            echo twig_escape_filter($this->env, $context["title"], "html", null, true);
            echo "</option>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['option'], $context['title'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        echo "\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t<div class=\"field\">
\t\t\t\t\t<label>";
        // line 119
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Invitations")), "html", null, true);
        echo "</label>
\t\t\t\t\t
\t\t\t\t\t";
        // line 121
        $context["invitationOptions"] = array("members-only" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("All group members can send invitations")), "administrators" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Only group administrators can send invitations")));
        // line 125
        echo "\t\t\t\t\t
\t\t\t\t\t<select class=\"ui dropdown\" name=\"invitations\">
\t\t\t\t\t\t";
        // line 127
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["invitationOptions"] ?? null));
        foreach ($context['_seq'] as $context["option"] => $context["title"]) {
            // line 128
            echo "\t\t\t\t\t\t\t<option
\t\t\t\t\t\t\t\tvalue=\"";
            // line 129
            echo twig_escape_filter($this->env, $context["option"], "html", null, true);
            echo "\"
\t\t\t\t\t\t\t\t";
            // line 130
            if (($this->getAttribute($this->getAttribute(($context["requestedGroup"] ?? null), "settings", array()), "invitations", array(), "array") == $context["option"])) {
                echo " selected";
            }
            // line 131
            echo "\t\t\t\t\t\t\t>";
            echo twig_escape_filter($this->env, $context["title"], "html", null, true);
            echo "</option>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['option'], $context['title'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 133
        echo "\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"ui tab\" data-tab=\"tags\">
\t\t\t<div class=\"ui basic vertical segment\">
\t\t\t\t<div class=\"ui fluid right labeled left icon action small input add-tag-input-container\">
\t\t\t\t\t<i class=\"tags icon\"></i>
\t\t\t\t\t<input type=\"text\" placeholder=\"Enter new tag\" class=\"add-tag-input\">
\t\t\t\t\t<button class=\"ui icon button add-tag-button\">
\t\t\t\t\t\t<i class=\"add icon\"></i>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"ui basic vertical segment\">
\t\t\t\t<div class=\"tags-container\">
\t\t\t\t\t";
        // line 150
        if ($this->getAttribute(($context["requestedGroup"] ?? null), "tags", array())) {
            // line 151
            echo "\t\t\t\t\t\t";
            $this->loadTemplate("@groups/partials/tags-list.twig", "@groups/settings.twig", 151)->display(array_merge($context, array("tags" => $this->getAttribute(($context["requestedGroup"] ?? null), "tags", array()))));
            // line 152
            echo "\t\t\t\t\t";
        } else {
            // line 153
            echo "\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Tags for this group have not been added yet.")), "html", null, true);
            echo "
\t\t\t\t\t";
        }
        // line 155
        echo "\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!--
\t\t\t<div class=\"ui segment\">
\t\t\t\t<div class=\"content ui labels\">
\t\t\t\t\t<div class=\"ui grid\">
\t\t\t\t\t\t<div class=\"sixteen wide column\">
\t\t\t\t\t\t\t<i class=\"tags icon\"></i>
\t\t\t\t\t\t\t<tag :tag=\"tag\" v-for=\"tag in tags\"></tag>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"sixteen wide column\">
\t\t\t\t\t\t\t<button class=\"item mini ui button mp-group-add-tag-button\" v-if=\"isAdmin\" @click=\"addTag\">
\t\t\t\t\t\t\t\t";
        // line 169
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Add tag")), "html", null, true);
        echo "
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"ui small modal mp-add-tag\">
\t\t\t\t\t\t<i class=\"close icon\"></i>
\t\t\t\t\t\t<div class=\"header\">
\t\t\t\t\t\t\t";
        // line 176
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Add new tag")), "html", null, true);
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t<div class=\"ui form\">
\t\t\t\t\t\t\t\t<div class=\"field\">
\t\t\t\t\t\t\t\t\t<label>";
        // line 181
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("New tag")), "html", null, true);
        echo "</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" v-model=\"newTag\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"actions\">
\t\t\t\t\t\t\t<button class=\"ui button secondary cancel\">Cancel</button>
\t\t\t\t\t\t\t<button class=\"ui positive primary button\" :class=\"{'disabled': !newTag.length }\">";
        // line 188
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Add")), "html", null, true);
        echo "</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t-->
\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "@groups/settings.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  386 => 188,  376 => 181,  368 => 176,  358 => 169,  342 => 155,  336 => 153,  333 => 152,  330 => 151,  328 => 150,  309 => 133,  300 => 131,  296 => 130,  292 => 129,  289 => 128,  285 => 127,  281 => 125,  279 => 121,  274 => 119,  269 => 116,  260 => 114,  256 => 113,  252 => 112,  249 => 111,  245 => 110,  241 => 108,  239 => 103,  234 => 101,  228 => 97,  219 => 95,  215 => 94,  211 => 93,  208 => 92,  204 => 91,  200 => 89,  198 => 84,  193 => 82,  188 => 79,  179 => 77,  175 => 76,  170 => 75,  166 => 74,  162 => 72,  160 => 68,  155 => 66,  149 => 62,  140 => 60,  136 => 59,  132 => 58,  129 => 57,  125 => 56,  121 => 54,  119 => 49,  114 => 47,  102 => 38,  96 => 35,  88 => 30,  81 => 26,  72 => 22,  68 => 21,  62 => 18,  58 => 17,  53 => 15,  44 => 9,  40 => 8,  36 => 7,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@groups/settings.twig", "/Users/shingkeelau/Public/web/wp-content/plugins/membership-by-supsystic/src/Membership/Groups/views/settings.twig");
    }
}
