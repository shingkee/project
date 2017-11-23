<?php

/* @reports/backend/index.twig */
class __TwigTemplate_55995799c321a0c029507b6fa9e00fe7e9792d2ff5f86ff598b58d8e7d34aedd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@base/layouts/backend.twig", "@reports/backend/index.twig", 1);
        $this->blocks = array(
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
        $context["options"] = $this->loadTemplate("@base/macros/options.twig", "@reports/backend/index.twig", 2);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_mainHeader($context, array $blocks = array())
    {
        // line 5
        echo "    <h2 class=\"sc-header\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Reports")), "html", null, true);
        echo "</h2>
";
    }

    // line 8
    public function block_main($context, array $blocks = array())
    {
        // line 9
        echo "    <div class=\"mp-option\" id=\"search\">
        <div class=\"row\">
            <div class=\"col-md-2\">
                ";
        // line 12
        echo $context["options"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Search")));
        echo "
            </div>
            <div class=\"col-md-4\">
                <div class=\"report-filter search\">
                    <input class=\"sc-input\" name=\"search\">
                </div>
            </div>
            <div class=\"col-md-2\">
                <button class=\"sc-button primary\">";
        // line 20
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Search")), "html", null, true);
        echo "</button>
            </div>
        </div>
    </div>

    <table class=\"sc-table reports\" data-translate=\"";
        // line 25
        echo twig_escape_filter($this->env, twig_jsonencode_filter(array("Read" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Read")), "Unread" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Unread")), "Mark as read and close" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Mark as read and close")), "Mark as unread and close" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Mark as unread and close")), "Close" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Close")), "User is not found" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("User is not found")), "Activity is not found" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Activity is not found")))));
        // line 33
        echo "\">
        <tr>
\t        <th><a href=\"";
        // line 35
        echo twig_escape_filter($this->env, ((($context["reportsUrl"] ?? null) . "&order_by=id&order=") . ((($this->getAttribute($this->getAttribute(($context["request"] ?? null), "query", array()), "get", array(0 => "order"), "method") == "asc")) ? ("desc") : ("asc"))), "html", null, true);
        echo "\">#</a></th>
\t        <th><a href=\"";
        // line 36
        echo twig_escape_filter($this->env, ((($context["reportsUrl"] ?? null) . "&order_by=content_type&order=") . ((($this->getAttribute($this->getAttribute(($context["request"] ?? null), "query", array()), "get", array(0 => "order"), "method") == "asc")) ? ("desc") : ("asc"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Report type")), "html", null, true);
        echo "</a></th>
\t        <th><a href=\"";
        // line 37
        echo twig_escape_filter($this->env, ((($context["reportsUrl"] ?? null) . "&order_by=reporter_id&order=") . ((($this->getAttribute($this->getAttribute(($context["request"] ?? null), "query", array()), "get", array(0 => "order"), "method") == "asc")) ? ("desc") : ("asc"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Reporter")), "html", null, true);
        echo "</a></th>
\t        ";
        // line 39
        echo "\t        <th><a href=\"";
        echo twig_escape_filter($this->env, ((($context["reportsUrl"] ?? null) . "&order_by=reported_id&order=") . ((($this->getAttribute($this->getAttribute(($context["request"] ?? null), "query", array()), "get", array(0 => "order"), "method") == "asc")) ? ("desc") : ("asc"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Reported")), "html", null, true);
        echo "</a></th>
\t        <th>";
        // line 40
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Report Comment")), "html", null, true);
        echo "</th>
\t        <th><a href=\"";
        // line 41
        echo twig_escape_filter($this->env, ((($context["reportsUrl"] ?? null) . "&order_by=date&order=") . ((($this->getAttribute($this->getAttribute(($context["request"] ?? null), "query", array()), "get", array(0 => "order"), "method") == "asc")) ? ("desc") : ("asc"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Report Date")), "html", null, true);
        echo "</a></th>
\t        <th><a href=\"";
        // line 42
        echo twig_escape_filter($this->env, ((($context["reportsUrl"] ?? null) . "&order_by=status&order=") . ((($this->getAttribute($this->getAttribute(($context["request"] ?? null), "query", array()), "get", array(0 => "order"), "method") == "asc")) ? ("desc") : ("asc"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Report Status")), "html", null, true);
        echo "</a></th>
\t        <th></th>
        </tr>
\t    
        ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reports"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["report"]) {
            // line 47
            echo "        <tr class=\"report\"
            data-report-id=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["report"], "id", array()), "html", null, true);
            echo "\"
            data-report=\"";
            // line 49
            echo twig_escape_filter($this->env, twig_jsonencode_filter($context["report"]), "html", null, true);
            echo "\"
        >
\t        <td>
\t\t        ";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["report"], "id", array()), "html", null, true);
            echo "
\t        </td>
\t        <td>
\t\t        <div class=\"content-type\">
\t\t\t        ";
            // line 56
            if (($this->getAttribute($context["report"], "content_type", array()) == "activity")) {
                // line 57
                echo "\t\t\t\t        ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Activity Report")), "html", null, true);
                echo "
\t\t\t        ";
            } elseif (($this->getAttribute(            // line 58
$context["report"], "content_type", array()) == "user")) {
                // line 59
                echo "\t\t\t\t        ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("User Report")), "html", null, true);
                echo "
\t\t\t        ";
            }
            // line 61
            echo "\t\t        </div>
\t        </td>
\t        <td>
\t\t        <div class=\"reporter\">
\t\t\t        ";
            // line 65
            if ($this->getAttribute($context["report"], "reporter", array())) {
                // line 66
                echo "\t\t\t\t        <a target=\"_blank\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["report"], "reporter", array()), "url", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["report"], "reporter", array()), "displayName", array()), "html", null, true);
                echo "</a>
\t\t\t\t        <a target=\"_blank\" href=\"";
                // line 67
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["report"], "reporter", array()), "editLink", array()), "html", null, true);
                echo "\"><small>(";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Edit profile")), "html", null, true);
                echo ")</small></a>
\t\t\t        ";
            } else {
                // line 69
                echo "\t\t\t\t        ";
                echo twig_escape_filter($this->env, sprintf(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("User with id %d is not found")), $this->getAttribute($context["report"], "reporter_id", array())), "html", null, true);
                echo "
\t\t\t        ";
            }
            // line 71
            echo "\t\t        </div>
\t        </td>
\t        ";
            // line 74
            echo "\t        ";
            // line 75
            echo "\t        ";
            // line 76
            echo "\t        ";
            // line 77
            echo "\t        ";
            // line 78
            echo "\t        ";
            // line 79
            echo "\t        ";
            // line 80
            echo "\t        <td>
\t\t        <div class=\"reported\">
\t\t\t        ";
            // line 82
            if (($this->getAttribute($context["report"], "content_type", array()) == "activity")) {
                // line 83
                echo "\t\t\t\t        ";
                if ($this->getAttribute($context["report"], "reported", array())) {
                    // line 84
                    echo "\t\t\t\t\t        <a target=\"_blank\" href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["report"], "reported", array()), "url", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Link")), "html", null, true);
                    echo "</a>
\t\t\t\t        ";
                } else {
                    // line 86
                    echo "\t\t\t\t\t        ";
                    echo twig_escape_filter($this->env, sprintf(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Activity with id %d is not found")), $this->getAttribute($context["report"], "reported_id", array())), "html", null, true);
                    echo "
\t\t\t\t        ";
                }
                // line 88
                echo "\t\t\t        ";
            } elseif (($this->getAttribute($context["report"], "content_type", array()) == "user")) {
                // line 89
                echo "\t\t\t\t        ";
                if ($this->getAttribute($context["report"], "reported", array())) {
                    // line 90
                    echo "\t\t\t\t\t        <a target=\"_blank\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Membership_Users_Twig')->profileUrl($this->getAttribute($context["report"], "reported", array())), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["report"], "reported", array()), "displayName", array()), "html", null, true);
                    echo "</a>
\t\t\t\t\t        <a target=\"_blank\" href=\"";
                    // line 91
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["report"], "reported", array()), "editLink", array()), "html", null, true);
                    echo "\"><small>(";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Edit")), "html", null, true);
                    echo ")</small></a>
\t\t\t\t        ";
                } else {
                    // line 93
                    echo "\t\t\t\t\t        ";
                    echo twig_escape_filter($this->env, sprintf(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("User with id %d is not found")), $this->getAttribute($context["report"], "reported_id", array())), "html", null, true);
                    echo "
\t\t\t\t        ";
                }
                // line 95
                echo "\t\t\t        ";
            }
            // line 96
            echo "\t\t        </div>
\t        </td>
\t        <td>
\t\t        <div class=\"comment\">";
            // line 99
            echo twig_escape_filter($this->env, $this->env->getExtension('Membership_Base_Twig')->truncate($this->getAttribute($context["report"], "comment", array()), 80), "html", null, true);
            echo "</div>
\t        </td>
\t        <td>
                <div class=\"date\">";
            // line 102
            echo twig_escape_filter($this->env, $this->getAttribute($context["report"], "date", array()), "html", null, true);
            echo "</div>
            </td>
\t        <td>
\t\t        <div class=\"status\">
\t\t\t\t\t";
            // line 106
            if (($this->getAttribute($context["report"], "status", array()) != "new")) {
                // line 107
                echo "\t\t\t        \t";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Read")), "html", null, true);
                echo "
\t\t\t\t\t";
            } else {
                // line 109
                echo "\t\t\t        \t";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Unread")), "html", null, true);
                echo "
\t\t\t\t\t";
            }
            // line 111
            echo "\t\t        </div>
\t        </td>
            <td>
                <div class=\"info\">
                    <a href=\"#\" class=\"report-details\">";
            // line 115
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Details")), "html", null, true);
            echo "</a>
                </div>
            </td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['report'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo "    </table>
\t
    <div class=\"sc-hidden user-report-details-template\">
        ";
        // line 123
        $this->loadTemplate("@reports/backend/partials/user-report-details.twig", "@reports/backend/index.twig", 123)->display($context);
        // line 124
        echo "    </div>
\t\t
    <div class=\"sc-hidden activity-report-details-template\">
        ";
        // line 127
        $this->loadTemplate("@reports/backend/partials/activity-report-details.twig", "@reports/backend/index.twig", 127)->display($context);
        // line 128
        echo "    </div>
\t
    <div class=\"mp-modal send-message-modal sc-hidden\">
        <div class=\"mp-option\" id=\"message\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <input type=\"hidden\" class=\"user-id\" name=\"user-id\" value=\"\">
                    <div class=\"mp-option-label\">
\t                    <span>";
        // line 136
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Send message to: ")), "html", null, true);
        echo "</span> <span class=\"message-recipient\"></span>
                    </div>
                    <div class=\"mp-option-input\">
                        <textarea class=\"message-input\" class=\"sc-input\" name=\"\" cols=\"35\" rows=\"10\"></textarea>
                    </div>
                    <div class=\"mp-result\">
                        <span id=\"message-result\"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "@reports/backend/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  325 => 136,  315 => 128,  313 => 127,  308 => 124,  306 => 123,  301 => 120,  290 => 115,  284 => 111,  278 => 109,  272 => 107,  270 => 106,  263 => 102,  257 => 99,  252 => 96,  249 => 95,  243 => 93,  236 => 91,  229 => 90,  226 => 89,  223 => 88,  217 => 86,  209 => 84,  206 => 83,  204 => 82,  200 => 80,  198 => 79,  196 => 78,  194 => 77,  192 => 76,  190 => 75,  188 => 74,  184 => 71,  178 => 69,  171 => 67,  164 => 66,  162 => 65,  156 => 61,  150 => 59,  148 => 58,  143 => 57,  141 => 56,  134 => 52,  128 => 49,  124 => 48,  121 => 47,  117 => 46,  108 => 42,  102 => 41,  98 => 40,  91 => 39,  85 => 37,  79 => 36,  75 => 35,  71 => 33,  69 => 25,  61 => 20,  50 => 12,  45 => 9,  42 => 8,  35 => 5,  32 => 4,  28 => 1,  26 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@reports/backend/index.twig", "/Users/shingkeelau/Public/web/wp-content/plugins/membership-by-supsystic/src/Membership/Reports/views/backend/index.twig");
    }
}
