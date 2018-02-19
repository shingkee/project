<?php

/* @activity/partials/activities.twig */
class __TwigTemplate_67b997783b5fdb07834747514067e22e9c761babba536a458761109efda315c7 extends Twig_Template
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
        $context["this"] = $this;
        // line 2
        echo "
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["activities"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["activity"]) {
            // line 4
            echo "\t";
            if ($this->getAttribute($context["activity"], "relatedActivity", array())) {
                // line 5
                echo "\t\t";
                echo $context["this"]->getactivity($this->getAttribute($context["activity"], "relatedActivity", array()), "relatedActivity", $context["activity"], ($context["context"] ?? null), ($context["params"] ?? null));
                echo "
\t";
            } else {
                // line 7
                echo "\t\t";
                echo $context["this"]->getactivity($context["activity"], null, null, ($context["context"] ?? null), ($context["params"] ?? null));
                echo "
\t";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['activity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "
";
    }

    // line 11
    public function getactivity($__activity__ = null, $__activityType__ = null, $__relatedActivity__ = null, $__activityContext__ = null, $__params__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "activity" => $__activity__,
            "activityType" => $__activityType__,
            "relatedActivity" => $__relatedActivity__,
            "activityContext" => $__activityContext__,
            "params" => $__params__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 12
            echo "    ";
            $context["this"] = $this;
            // line 13
            echo "    <div class=\"ui segments mp-activity\" data-activity-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["activity"] ?? null), "id", array()), "html", null, true);
            echo "\">
\t    ";
            // line 14
            if (($context["relatedActivity"] ?? null)) {
                // line 15
                echo "\t\t    <div class=\"ui basic segment\">
\t\t\t    ";
                // line 16
                if (($this->getAttribute(($context["relatedActivity"] ?? null), "type", array()) == "activity_comment")) {
                    // line 17
                    echo "\t\t\t\t    ";
                    echo sprintf(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("%s commented post from %s on %s.")), (((("<a href=\"" . $this->env->getExtension('Membership_Users_Twig')->profileUrl($this->getAttribute(                    // line 19
($context["relatedActivity"] ?? null), "author", array()))) . "\">") . $this->getAttribute($this->getAttribute(($context["relatedActivity"] ?? null), "author", array()), "displayName", array())) . "</a>"), (((("<b><a href=\"" . $this->env->getExtension('Membership_Users_Twig')->profileUrl($this->getAttribute($this->getAttribute(                    // line 20
($context["relatedActivity"] ?? null), "relatedActivity", array()), "author", array()))) . "\">") . $this->getAttribute($this->getAttribute($this->getAttribute(($context["relatedActivity"] ?? null), "relatedActivity", array()), "author", array()), "display_name", array())) . "</a></b>"), twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(                    // line 21
($context["relatedActivity"] ?? null), "relatedActivity", array()), "created_at", array()), "Y-m-d"));
                    // line 24
                    echo "
\t\t\t    ";
                }
                // line 26
                echo "\t\t\t    ";
                if (($this->getAttribute(($context["relatedActivity"] ?? null), "type", array()) == "like")) {
                    // line 27
                    echo "\t\t\t        ";
                    echo sprintf(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("%s liked post from %s on %s.")), (((("<a href=\"" . $this->env->getExtension('Membership_Users_Twig')->profileUrl($this->getAttribute(                    // line 29
($context["relatedActivity"] ?? null), "author", array()))) . "\">") . $this->getAttribute($this->getAttribute(($context["relatedActivity"] ?? null), "author", array()), "displayName", array())) . "</a>"), (((("<b><a href=\"" . $this->env->getExtension('Membership_Users_Twig')->profileUrl($this->getAttribute($this->getAttribute(                    // line 30
($context["relatedActivity"] ?? null), "relatedActivity", array()), "author", array()))) . "\">") . $this->getAttribute($this->getAttribute($this->getAttribute(($context["relatedActivity"] ?? null), "relatedActivity", array()), "author", array()), "display_name", array())) . "</a></b>"), twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(                    // line 31
($context["relatedActivity"] ?? null), "relatedActivity", array()), "created_at", array()), "Y-m-d"));
                    // line 34
                    echo "
\t\t\t    ";
                }
                // line 36
                echo "\t\t    </div>
\t    ";
            }
            // line 38
            echo "\t    
        <div class=\"ui segment\"";
            // line 39
            if ((($context["activityType"] ?? null) == "sharedActivity")) {
                echo " class=\"shared\"";
            }
            echo ">
            <div class=\"mp-activity-header\">
                <div class=\"mp-activity-header-image\">

\t                ";
            // line 43
            if (($this->getAttribute(($context["activity"] ?? null), "type", array()) != "group_post")) {
                // line 44
                echo "\t\t                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Membership_Users_Twig')->profileUrl($this->getAttribute(($context["activity"] ?? null), "author", array())), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t";
                // line 45
                if ( !$this->getAttribute(($context["activity"] ?? null), "friendPost", array())) {
                    // line 46
                    echo "\t\t\t\t\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Membership_Users_Twig')->userAvatar($this->getAttribute(($context["activity"] ?? null), "author", array()), "small"), "html", null, true);
                    echo "\" alt=\"\">
\t\t\t\t\t\t\t";
                } elseif ( !$this->getAttribute(                // line 47
($context["activity"] ?? null), "sharedActivity", array())) {
                    // line 48
                    echo "\t\t\t\t                <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Membership_Users_Twig')->userAvatar($this->getAttribute(($context["activity"] ?? null), "author", array()), "medium"), "html", null, true);
                    echo "\" alt=\"\">
\t\t\t                ";
                } else {
                    // line 50
                    echo "\t\t\t\t                <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Membership_Users_Twig')->userAvatar($this->getAttribute(($context["activity"] ?? null), "author", array()), "small"), "html", null, true);
                    echo "\" alt=\"\">
\t\t\t                ";
                }
                // line 52
                echo "\t\t                </a>
\t                ";
            } else {
                // line 54
                echo "\t\t                <a href=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('groupUrl')->getCallable(), array($this->getAttribute(($context["activity"] ?? null), "group", array()))), "html", null, true);
                echo "\">
\t\t\t                ";
                // line 55
                if ( !$this->getAttribute(($context["activity"] ?? null), "sharedActivity", array())) {
                    // line 56
                    echo "\t\t\t\t                <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Membership_Groups_Twig')->groupsLogo($this->getAttribute(($context["activity"] ?? null), "group", array()), "medium"), "html", null, true);
                    echo "\" alt=\"\">
\t\t\t                ";
                } else {
                    // line 58
                    echo "\t\t\t\t                <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Membership_Groups_Twig')->groupsLogo($this->getAttribute(($context["activity"] ?? null), "group", array()), "small"), "html", null, true);
                    echo "\" alt=\"\">
\t\t\t                ";
                }
                // line 60
                echo "\t\t                </a>
\t                ";
            }
            // line 62
            echo "
                </div>
                <div class=\"mp-activity-header-title\">
                    ";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["environment"] ?? null), "dispatcher", array()), "dispatch", array(0 => "activity.view.activityTitle", 1 => array(0 => ($context["activity"] ?? null))), "method"), "html", null, true);
            echo "
\t
\t                ";
            // line 67
            if (($this->getAttribute(($context["activity"] ?? null), "type", array()) == "post")) {
                // line 68
                echo "\t\t                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Membership_Users_Twig')->profileUrl($this->getAttribute(($context["activity"] ?? null), "author", array())), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["activity"] ?? null), "author", array()), "displayName", array()), "html", null, true);
                echo "</a>
\t                ";
            }
            // line 70
            echo "\t                
\t                ";
            // line 71
            if (($this->getAttribute(($context["activity"] ?? null), "type", array()) == "user_registered")) {
                // line 72
                echo "\t\t                ";
                echo sprintf(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("%s is registered")), (((("<a href=\"" . $this->env->getExtension('Membership_Users_Twig')->profileUrl($this->getAttribute(                // line 73
($context["activity"] ?? null), "author", array()))) . "\">") . $this->getAttribute($this->getAttribute(($context["activity"] ?? null), "author", array()), "displayName", array())) . "</a>"));
                // line 75
                echo "
\t                ";
            }
            // line 77
            echo "\t                
\t                ";
            // line 78
            if (($this->getAttribute(($context["activity"] ?? null), "type", array()) == "related_post")) {
                // line 79
                echo "\t\t                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Membership_Users_Twig')->profileUrl($this->getAttribute(($context["activity"] ?? null), "author", array())), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["activity"] ?? null), "author", array()), "displayName", array()), "html", null, true);
                echo "</a> >
\t\t                <a href=\"";
                // line 80
                echo twig_escape_filter($this->env, $this->env->getExtension('Membership_Users_Twig')->profileUrl($this->getAttribute(($context["activity"] ?? null), "target", array())), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["activity"] ?? null), "target", array()), "displayName", array()), "html", null, true);
                echo "</a>
\t                ";
            }
            // line 82
            echo "\t                
\t                ";
            // line 83
            if (($this->getAttribute(($context["activity"] ?? null), "type", array()) == "group_post")) {
                // line 84
                echo "\t\t                <a href=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('groupUrl')->getCallable(), array($this->getAttribute(($context["activity"] ?? null), "group", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["activity"] ?? null), "group", array()), "name", array()), "html", null, true);
                echo "</a>
\t                ";
            }
            // line 86
            echo "\t
\t                ";
            // line 87
            if (($this->getAttribute(($context["activity"] ?? null), "type", array()) == "group_user_post")) {
                // line 88
                echo "\t\t                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Membership_Users_Twig')->profileUrl($this->getAttribute(($context["activity"] ?? null), "author", array())), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["activity"] ?? null), "author", array()), "displayName", array()), "html", null, true);
                echo "</a> >
\t\t                <a href=\"";
                // line 89
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('groupUrl')->getCallable(), array($this->getAttribute(($context["activity"] ?? null), "group", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["activity"] ?? null), "group", array()), "name", array()), "html", null, true);
                echo "</a>
\t                ";
            }
            // line 91
            echo "\t
\t                ";
            // line 92
            if (($this->getAttribute(($context["activity"] ?? null), "type", array()) == "group_created")) {
                // line 93
                echo "\t\t                ";
                echo sprintf(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("New group %s is created by %s.")), (((("<a href=\"" . call_user_func_array($this->env->getFunction('groupUrl')->getCallable(), array($this->getAttribute(                // line 95
($context["activity"] ?? null), "group", array())))) . "\">") . $this->getAttribute($this->getAttribute(($context["activity"] ?? null), "group", array()), "name", array())) . "</a>"), (((("<a href=\"" . $this->env->getExtension('Membership_Users_Twig')->profileUrl($this->getAttribute(                // line 96
($context["activity"] ?? null), "author", array()))) . "\">") . $this->getAttribute($this->getAttribute(($context["activity"] ?? null), "author", array()), "displayName", array())) . "</a>"));
                // line 99
                echo "
\t                ";
            }
            // line 101
            echo "


\t                ";
            // line 104
            if ($this->getAttribute(($context["activity"] ?? null), "sharedActivity", array())) {
                // line 105
                echo "\t\t                ";
                if (twig_in_filter($this->getAttribute(($context["activity"] ?? null), "type", array()), array(0 => "shared_group_post", 1 => "shared_group_user_post"))) {
                    // line 106
                    echo "\t\t\t                ";
                    echo sprintf(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("%s shared %s post.")), (((("<a href=\"" . $this->env->getExtension('Membership_Users_Twig')->profileUrl($this->getAttribute(                    // line 108
($context["activity"] ?? null), "author", array()))) . "\">") . $this->getAttribute($this->getAttribute(($context["activity"] ?? null), "author", array()), "displayName", array())) . "</a>"), (((("<a href=\"" . call_user_func_array($this->env->getFunction('groupUrl')->getCallable(), array($this->getAttribute($this->getAttribute(                    // line 109
($context["activity"] ?? null), "sharedActivity", array()), "group", array())))) . "\">") . $this->getAttribute($this->getAttribute($this->getAttribute(($context["activity"] ?? null), "sharedActivity", array()), "group", array()), "name", array())) . "</a>"));
                    // line 112
                    echo "
\t\t                ";
                } else {
                    // line 114
                    echo "\t\t\t                ";
                    echo sprintf(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("%s shared %s post.")), (((("<a href=\"" . $this->env->getExtension('Membership_Users_Twig')->profileUrl($this->getAttribute(                    // line 116
($context["activity"] ?? null), "author", array()))) . "\">") . $this->getAttribute($this->getAttribute(($context["activity"] ?? null), "author", array()), "displayName", array())) . "</a>"), (((("<a href=\"" . $this->env->getExtension('Membership_Users_Twig')->profileUrl($this->getAttribute($this->getAttribute(                    // line 117
($context["activity"] ?? null), "sharedActivity", array()), "author", array()))) . "\">") . $this->getAttribute($this->getAttribute($this->getAttribute(($context["activity"] ?? null), "sharedActivity", array()), "author", array()), "displayName", array())) . "</a>"));
                    // line 120
                    echo "
\t\t                ";
                }
                // line 122
                echo "\t                ";
            }
            // line 123
            echo "
\t\t\t\t\t";
            // line 124
            if ($this->getAttribute(($context["activity"] ?? null), "friendPost", array())) {
                // line 125
                echo "\t\t\t\t\t\t";
                if (($this->getAttribute(($context["activity"] ?? null), "type", array()) == "friend_post")) {
                    // line 126
                    echo "\t\t\t\t\t\t\t";
                    echo sprintf(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Posted from %s activity.")), (((("<a href=\"" . $this->env->getExtension('Membership_Users_Twig')->profileUrl($this->getAttribute($this->getAttribute(                    // line 128
($context["activity"] ?? null), "friendPost", array()), "author", array()))) . "\">") . $this->getAttribute($this->getAttribute($this->getAttribute(($context["activity"] ?? null), "friendPost", array()), "author", array()), "displayName", array())) . "</a>"));
                    // line 130
                    echo "
\t\t\t\t\t\t";
                }
                // line 132
                echo "\t\t\t\t\t";
            }
            // line 133
            echo "
                    <div class=\"date\">";
            // line 134
            echo twig_escape_filter($this->env, $this->getAttribute(($context["activity"] ?? null), "updated_at", array()), "html", null, true);
            echo "</div>
                </div>
            </div>

\t\t\t";
            // line 138
            if ((($this->getAttribute($this->getAttribute(($context["relatedActivity"] ?? null), "relatedActivity", array()), "status", array()) == "deleted") || ($this->getAttribute(($context["activity"] ?? null), "status", array()) == "deleted"))) {
                // line 139
                echo "\t\t\t\t";
                $context["postDeleted"] = 1;
                // line 140
                echo "\t\t\t";
            }
            // line 141
            echo "            <div class=\"mp-activity-content ";
            echo (((($context["postDeleted"] ?? null) == 1)) ? ("mp-activity-removed") : (""));
            echo "\" data-activity-data=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["activity"] ?? null), "data", array()));
            echo "\">
\t\t\t\t";
            // line 142
            if (($context["postDeleted"] ?? null)) {
                // line 143
                echo "\t\t\t\t\t";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Sorry, the original post was deleted by its author.")), "html", null, true);
                echo "
\t\t\t\t";
            } else {
                // line 145
                echo "\t\t\t\t\t";
                if (twig_length_filter($this->env, $this->getAttribute(($context["activity"] ?? null), "data", array()))) {
                    // line 146
                    echo "\t\t\t\t\t\t<div class=\"mp-activity-content-text\">";
                    echo $this->env->getExtension('Membership_Activity_Twig')->activityContent(($context["activity"] ?? null));
                    echo "</div>
\t\t\t\t\t";
                }
                // line 148
                echo "
\t\t\t\t\t";
                // line 149
                if ($this->getAttribute(($context["activity"] ?? null), "link", array())) {
                    // line 150
                    echo "\t\t\t\t\t\t";
                    $this->loadTemplate("@activity/partials/activity-attachment-link.twig", "@activity/partials/activities.twig", 150)->display(array_merge($context, array("link" => $this->getAttribute(($context["activity"] ?? null), "link", array()))));
                    // line 151
                    echo "\t\t\t\t\t";
                }
                // line 152
                echo "
\t\t\t\t\t";
                // line 153
                if ($this->getAttribute(($context["activity"] ?? null), "images", array())) {
                    // line 154
                    echo "\t\t\t\t\t\t<div class=\"mp-activity-gallery\" data-gallery-id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["activity"] ?? null), "id", array()), "html", null, true);
                    echo "\" style=\"display: none\">
\t\t\t\t\t\t\t";
                    // line 155
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, $this->getAttribute($this->getAttribute(($context["activity"] ?? null), "images", array()), "thumbnails", array()), 0, 3, true));
                    $context['loop'] = array(
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    );
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["id"] => $context["thumbnails"]) {
                        // line 156
                        echo "\t\t\t\t\t\t\t\t<div class=\"mp-activity-gallery-image\" data-image-id=\"";
                        echo twig_escape_filter($this->env, $context["id"], "html", null, true);
                        echo "\">
\t\t\t\t\t\t\t\t\t<img src=\"";
                        // line 157
                        echo twig_escape_filter($this->env, $this->env->getExtension('Membership_Activity_Twig')->activityImage($context["thumbnails"], "large"), "html", null, true);
                        echo "\">
\t\t\t\t\t\t\t\t\t";
                        // line 158
                        if ((($this->getAttribute($context["loop"], "index0", array()) == 2) && ($this->getAttribute($this->getAttribute(($context["activity"] ?? null), "images", array()), "total", array()) > 3))) {
                            // line 159
                            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"mp-activity-gallery-image-overlay\">
\t\t\t\t\t\t\t\t\t\t\t<div>+";
                            // line 160
                            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["activity"] ?? null), "images", array()), "total", array()) - 3), "html", null, true);
                            echo "</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 163
                        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['id'], $context['thumbnails'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 165
                    echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 167
                echo "\t\t\t\t\t";
                if ($this->getAttribute(($context["activity"] ?? null), "attachmentFiles", array())) {
                    // line 168
                    echo "\t\t\t\t\t\t<div class=\"mbsActivAttachFilesWr\" data-activity-id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["activity"] ?? null), "id", array()), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t";
                    // line 169
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["activity"] ?? null), "attachmentFiles", array()));
                    foreach ($context['_seq'] as $context["oneAttachId"] => $context["oneAttach"]) {
                        // line 170
                        echo "\t\t\t\t\t\t\t\t<a class=\"mbsOneAttachItem\" title=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["oneAttach"], "file_info", array(), "array"), "name", array(), "array"), "html", null, true);
                        echo "\" href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["oneAttach"], "file_info", array(), "array"), "url", array(), "array"), "html", null, true);
                        echo "\" target=\"_blank\" data-id=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["oneAttach"], "attachment_all_id", array(), "array"), "html", null, true);
                        echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"icon attach mbsOneAttachIcon\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"mbsOneAttachCaption\">";
                        // line 172
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["oneAttach"], "file_info", array(), "array"), "name", array(), "array"), "html", null, true);
                        echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['oneAttachId'], $context['oneAttach'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 175
                    echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 177
                echo "
\t\t\t\t\t";
                // line 178
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["environment"] ?? null), "dispatcher", array()), "dispatch", array(0 => "activity.view.activityContent", 1 => array(0 => ($context["activity"] ?? null))), "method"), "html", null, true);
                echo "

\t\t\t\t\t";
                // line 180
                if ((is_string($__internal_0f2a837a882c8c81a75e3397beb567eb307d1883acefc92f1def788f5fd62d90 = $this->getAttribute(($context["activity"] ?? null), "type", array())) && is_string($__internal_01212286bd8afae5dc7e55292b566a370b92be1353d37e2f48cf80aa53ddc95e = "shared_") && ('' === $__internal_01212286bd8afae5dc7e55292b566a370b92be1353d37e2f48cf80aa53ddc95e || 0 === strpos($__internal_0f2a837a882c8c81a75e3397beb567eb307d1883acefc92f1def788f5fd62d90, $__internal_01212286bd8afae5dc7e55292b566a370b92be1353d37e2f48cf80aa53ddc95e)))) {
                    // line 181
                    echo "\t\t\t\t\t\t<div class=\"mp-shared-activity\">
\t\t\t\t\t\t\t";
                    // line 182
                    echo $context["this"]->getactivity($this->getAttribute(($context["activity"] ?? null), "sharedActivity", array()), "sharedActivity");
                    echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 185
                echo "
\t\t\t\t\t";
                // line 186
                if (($this->getAttribute(($context["activity"] ?? null), "type", array()) == "friend_post")) {
                    // line 187
                    echo "\t\t\t\t\t\t<div class=\"mp-shared-activity\">
\t\t\t\t\t\t\t";
                    // line 188
                    echo $context["this"]->getactivity($this->getAttribute(($context["activity"] ?? null), "friendPost", array()), "friendPost");
                    echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 191
                echo "\t\t\t\t";
            }
            // line 192
            echo "            </div>
        </div>

\t\t";
            // line 195
            if (($this->getAttribute($this->getAttribute(($context["relatedActivity"] ?? null), "relatedActivity", array()), "status", array()) != "deleted")) {
                // line 196
                echo "
\t\t\t";
                // line 197
                if (((((($context["activityType"] ?? null) != "sharedActivity") && (($context["activityType"] ?? null) != "friendPost")) && ($context["userLoggedIn"] ?? null)) && ($this->getAttribute(($context["params"] ?? null), "isReadPostPage", array()) != true))) {
                    // line 198
                    echo "\t\t\t\t";
                    ob_start();
                    // line 199
                    if (twig_in_filter($this->getAttribute(($context["activity"] ?? null), "type", array()), array(0 => "post", 1 => "group_post", 2 => "shared_post", 3 => "shared_group_post"))) {
                        // line 200
                        echo "<a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Membership_Activity_Twig')->getActivityUrl($this->getAttribute(($context["activity"] ?? null), "id", array())), "html", null, true);
                        echo "\" class=\"item menu-link-action\">";
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Read this post")), "html", null, true);
                        echo "</a>";
                    }
                    // line 202
                    if (twig_in_filter($this->getAttribute(($context["activity"] ?? null), "type", array()), array(0 => "group_post", 1 => "group_user_post", 2 => "group_created"))) {
                        // line 203
                        if (!twig_in_filter($this->getAttribute(($context["activity"] ?? null), "type", array()), array(0 => "group_created"))) {
                            // line 204
                            if (($this->env->getExtension('Membership_Users_Twig')->isCurrentUser($this->getAttribute(($context["activity"] ?? null), "author", array())) || call_user_func_array($this->env->getFunction('currentUserCan')->getCallable(), array("edit-activity")))) {
                                // line 205
                                echo "<div class=\"item edit-action\">";
                                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Edit")), "html", null, true);
                                echo "</div>";
                            }
                            // line 207
                            if (($this->env->getExtension('Membership_Groups_Twig')->canEditGroup($this->getAttribute(($context["activity"] ?? null), "group", array())) || call_user_func_array($this->env->getFunction('currentUserCan')->getCallable(), array("edit-activity")))) {
                                // line 208
                                echo "<div class=\"item group-delete-action\">";
                                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Delete")), "html", null, true);
                                echo "</div>";
                            }
                        }
                    } else {
                        // line 212
                        if (($this->env->getExtension('Membership_Users_Twig')->isCurrentUser($this->getAttribute(($context["activity"] ?? null), "author", array())) || call_user_func_array($this->env->getFunction('currentUserCan')->getCallable(), array("edit-activity")))) {
                            // line 213
                            if (!twig_in_filter($this->getAttribute(($context["activity"] ?? null), "type", array()), array(0 => "user_registered", 1 => "follow", 2 => "friendship"))) {
                                // line 214
                                echo "<div class=\"item edit-action\">";
                                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Edit")), "html", null, true);
                                echo "</div>
\t\t\t\t\t\t\t\t<div class=\"item delete-action\">";
                                // line 215
                                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Delete")), "html", null, true);
                                echo "</div>";
                            }
                        }
                    }
                    // line 219
                    if ( !$this->env->getExtension('Membership_Users_Twig')->isCurrentUser($this->getAttribute(($context["activity"] ?? null), "author", array()))) {
                        // line 220
                        echo "<div class=\"item report-action\">";
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Report")), "html", null, true);
                        echo "</div>";
                    }
                    $context["menuHtml"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                    // line 225
                    echo "\t\t\t\t";
                    if (twig_length_filter($this->env, ($context["menuHtml"] ?? null))) {
                        // line 226
                        echo "\t\t\t\t\t<div class=\"mp-activity-menu ui top right pointing dropdown item\">
\t\t\t\t\t\t<i class=\"ellipsis horizontal icon\"></i>
\t\t\t\t\t\t<div class=\"menu\">
\t\t\t\t\t\t\t";
                        // line 229
                        echo ($context["menuHtml"] ?? null);
                        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
                    }
                    // line 233
                    echo "\t\t\t";
                }
                // line 234
                echo "
\t\t\t";
                // line 235
                if ((( !($context["userLoggedIn"] ?? null) && (($context["activityType"] ?? null) != "sharedActivity")) && (($context["activityType"] ?? null) != "friendPost"))) {
                    // line 236
                    echo "\t\t\t\t<div class=\"ui segment\">
\t\t\t\t\t";
                    // line 237
                    echo sprintf(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Please <a href=\"%s\">sign up</a> or <a href=\"%s\">sign in</a> to like or write comments on this post.")), call_user_func_array($this->env->getFunction('getRouteUrl')->getCallable(), array("registration")), call_user_func_array($this->env->getFunction('getRouteUrl')->getCallable(), array("login")));
                    // line 239
                    echo "
\t\t\t\t</div>
\t\t\t";
                }
                // line 242
                echo "
\t\t\t";
                // line 243
                if (((($context["activityType"] ?? null) != "sharedActivity") && (($context["activityType"] ?? null) != "friendPost"))) {
                    // line 244
                    echo "\t\t\t\t<div class=\"ui segment mp-activity-actions\">

\t\t\t\t\t<a class=\"like-action ";
                    // line 246
                    if ($this->getAttribute($this->getAttribute(($context["activity"] ?? null), "likes", array()), "likedByCurrentUser", array())) {
                        echo "mp-liked-activity";
                    }
                    echo "\">
\t\t\t\t\t\t<i class=\"like icon\"></i> ";
                    // line 247
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Like")), "html", null, true);
                    echo " <span>";
                    if ($this->getAttribute(($context["activity"] ?? null), "likes", array())) {
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["activity"] ?? null), "likes", array()), "count", array()), "html", null, true);
                    }
                    echo "</span>
\t\t\t\t\t</a>

                    ";
                    // line 250
                    if (call_user_func_array($this->env->getFunction('isPostComment')->getCallable(), array($this->getAttribute(($context["activity"] ?? null), "group", array())))) {
                        // line 251
                        echo "                        ";
                        if (((is_string($__internal_88f640fc8d88232c2aff0a52996cc24b1433814a110397b68dc7756cddef42e7 = $this->getAttribute(($context["activity"] ?? null), "type", array())) && is_string($__internal_7a3124c6dbe0ddb443b761d82b83e3449bfa9f71891632c23d7ee8a35018a690 = "group") && ('' === $__internal_7a3124c6dbe0ddb443b761d82b83e3449bfa9f71891632c23d7ee8a35018a690 || 0 === strpos($__internal_88f640fc8d88232c2aff0a52996cc24b1433814a110397b68dc7756cddef42e7, $__internal_7a3124c6dbe0ddb443b761d82b83e3449bfa9f71891632c23d7ee8a35018a690))) || call_user_func_array($this->env->getFunction('currentUserHasPermission')->getCallable(), array("view-comments", $this->getAttribute(($context["activity"] ?? null), "author", array()))))) {
                            // line 252
                            echo "                            <a class=\"comment-action\"><i class=\"comment icon\"></i> ";
                            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Comments")), "html", null, true);
                            echo " <span>";
                            if ($this->getAttribute(($context["activity"] ?? null), "comments", array())) {
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["activity"] ?? null), "comments", array()), "count", array()), "html", null, true);
                            }
                            echo "</span></a>
                        ";
                        }
                        // line 254
                        echo "                    ";
                    }
                    // line 255
                    echo "
\t\t\t\t\t<a class=\"share-action ";
                    // line 256
                    if ($this->getAttribute($this->getAttribute(($context["activity"] ?? null), "shares", array()), "sharedByCurrentUser", array())) {
                        echo "mp-shared-activity";
                    }
                    echo "\">
\t\t\t\t\t\t<i class=\"share icon\"></i> ";
                    // line 257
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Share")), "html", null, true);
                    echo " <span>";
                    if ($this->getAttribute(($context["activity"] ?? null), "shares", array())) {
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["activity"] ?? null), "shares", array()), "count", array()), "html", null, true);
                    }
                    echo "</span>
\t\t\t\t\t</a>

\t\t\t\t\t<div>
\t\t\t\t\t\t<div class=\"ui flowing popup small inverted mp-like-popup\">
\t\t\t\t\t\t\t<div class=\"popup-count\">
\t\t\t\t\t\t\t\t<small>
\t\t\t\t\t\t\t\t\t";
                    // line 264
                    echo sprintf(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("%s people liked this")), (("<span>" . $this->getAttribute($this->getAttribute(($context["activity"] ?? null), "likes", array()), "count", array())) . "</span>"));
                    echo "
\t\t\t\t\t\t\t\t</small>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"ui basic vertical segment popup-loader\">
\t\t\t\t\t\t\t\t<div class=\"ui active centered inline mini loader\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"ui mini horizontal divided list popup-users\" style=\"display: none\"></div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"sc-membership ui small modal long mp-like-modal\">
\t\t\t\t\t\t\t<i class=\"close icon\"></i>
\t\t\t\t\t\t\t<div class=\"header\">
\t\t\t\t\t\t\t   ";
                    // line 276
                    echo sprintf(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("%s people liked this")), (("<span>" . $this->getAttribute($this->getAttribute(($context["activity"] ?? null), "likes", array()), "count", array())) . "</span>"));
                    echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t<div class=\"ui grid centered modal-users\"></div>
\t\t\t\t\t\t\t\t<div class=\"ui basic vertical segment modal-loader\">
\t\t\t\t\t\t\t\t\t<div class=\"ui active centered inline loader\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"ui flowing popup small inverted mp-share-popup\">
\t\t\t\t\t\t\t<div class=\"popup-count\">
\t\t\t\t\t\t\t\t<small>
\t\t\t\t\t\t\t\t\t";
                    // line 289
                    echo sprintf(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("%s people shared this")), (("<span>" . $this->getAttribute($this->getAttribute(($context["activity"] ?? null), "shares", array()), "count", array())) . "</span>"));
                    echo "
\t\t\t\t\t\t\t\t</small>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"ui basic vertical segment popup-loader\">
\t\t\t\t\t\t\t\t<div class=\"ui active centered inline mini loader\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"ui mini horizontal divided list popup-users\" style=\"display: none\"></div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"sc-membership ui small modal long mp-share-modal\">
\t\t\t\t\t\t\t<i class=\"close icon\"></i>
\t\t\t\t\t\t\t<div class=\"header\">
\t\t\t\t\t\t\t\t";
                    // line 301
                    echo sprintf(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("%s people shared this")), (("<span>" . $this->getAttribute($this->getAttribute(($context["activity"] ?? null), "shares", array()), "count", array())) . "</span>"));
                    echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t<div class=\"ui grid centered modal-users\"></div>
\t\t\t\t\t\t\t\t<div class=\"ui basic vertical segment modal-loader\">
\t\t\t\t\t\t\t\t\t<div class=\"ui active centered inline loader\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
                }
                // line 313
                echo "\t\t";
            }
            // line 314
            echo "
\t\t";
            // line 315
            if ((((($context["activityType"] ?? null) != "sharedActivity") && (($context["activityType"] ?? null) != "friendPost")) && ($context["userLoggedIn"] ?? null))) {
                // line 316
                echo "\t\t\t";
                if (((is_string($__internal_55cd5c72a0174c9a539041c553098ddce7b3460171ff74fe709561ba2906620d = $this->getAttribute(($context["activity"] ?? null), "type", array())) && is_string($__internal_beb2511c184bbc37b130e764b7ad0f6e01284e43b8c220062068bfc26bb1145f = "group") && ('' === $__internal_beb2511c184bbc37b130e764b7ad0f6e01284e43b8c220062068bfc26bb1145f || 0 === strpos($__internal_55cd5c72a0174c9a539041c553098ddce7b3460171ff74fe709561ba2906620d, $__internal_beb2511c184bbc37b130e764b7ad0f6e01284e43b8c220062068bfc26bb1145f))) || call_user_func_array($this->env->getFunction('currentUserHasPermission')->getCallable(), array("view-comments", $this->getAttribute(($context["activity"] ?? null), "author", array()))))) {
                    // line 317
                    echo "\t\t\t\t<div class=\"ui secondary segment mp-activity-comments\" ";
                    if ( !$this->getAttribute(($context["activity"] ?? null), "comments", array())) {
                        echo "style=\"display: none\"";
                    }
                    echo ">
\t\t\t\t\t<div class=\"ui equal width grid mp-previous-comments\" ";
                    // line 318
                    if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["activity"] ?? null), "comments", array()), "comments", array())) == $this->getAttribute($this->getAttribute(($context["activity"] ?? null), "comments", array()), "count", array()))) {
                        echo "style=\"display: none\"";
                    }
                    echo ">
\t\t\t\t\t\t<div class=\"left floated column\">
\t\t\t\t\t\t\t<div class=\"mp-more-comments\">";
                    // line 320
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("View previous comments")), "html", null, true);
                    echo " <div class=\"ui active mini inline loader\" style=\"display: none\"></div></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"right floated right aligned column mp-comments-count\">
\t\t\t\t\t\t\t<div class=\"ui floated right\">
\t\t\t\t\t\t\t\t<span class=\"showed-comments\">";
                    // line 324
                    echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["activity"] ?? null), "comments", array()), "comments", array())), "html", null, true);
                    echo "</span> ";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("of")), "html", null, true);
                    echo " <span class=\"total-comments\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["activity"] ?? null), "comments", array()), "count", array()), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"ui threaded comments\" ";
                    // line 329
                    if ( !$this->getAttribute(($context["activity"] ?? null), "comments", array())) {
                        echo "style=\"display: none\"";
                    }
                    echo ">
\t\t\t\t\t\t";
                    // line 330
                    $this->loadTemplate("@activity/partials/activity-comments.twig", "@activity/partials/activities.twig", 330)->display(array_merge($context, array("comments" => $this->getAttribute($this->getAttribute(($context["activity"] ?? null), "comments", array()), "comments", array()), "relatedActivity" => $this->getAttribute(($context["relatedActivity"] ?? null), "relatedActivity", array()))));
                    // line 331
                    echo "\t\t\t\t\t</div>

\t\t\t\t\t";
                    // line 333
                    if (($this->getAttribute($this->getAttribute(($context["relatedActivity"] ?? null), "relatedActivity", array()), "status", array()) != "deleted")) {
                        // line 334
                        echo "\t\t\t\t\t\t";
                        if (((is_string($__internal_6099bca6f3816f10ab9ad33268f80d41a82a63b836a9dc5374be765ca02c6ff3 = $this->getAttribute(($context["activity"] ?? null), "type", array())) && is_string($__internal_ccb93884ce2e36363e715db0952b236a2619d2da966ffd5dc44d88e976d0e857 = "group") && ('' === $__internal_ccb93884ce2e36363e715db0952b236a2619d2da966ffd5dc44d88e976d0e857 || 0 === strpos($__internal_6099bca6f3816f10ab9ad33268f80d41a82a63b836a9dc5374be765ca02c6ff3, $__internal_ccb93884ce2e36363e715db0952b236a2619d2da966ffd5dc44d88e976d0e857))) || call_user_func_array($this->env->getFunction('currentUserHasPermission')->getCallable(), array("post-comments", $this->getAttribute(($context["activity"] ?? null), "author", array()))))) {
                            // line 335
                            echo "\t\t\t\t\t\t\t";
                            $this->loadTemplate("@activity/partials/activity-comment-form.twig", "@activity/partials/activities.twig", 335)->display(array_merge($context, array("context" => ($context["activityContext"] ?? null))));
                            // line 336
                            echo "\t\t\t\t\t\t";
                        }
                        // line 337
                        echo "\t\t\t\t\t";
                    }
                    // line 338
                    echo "\t\t\t\t</div>
\t\t\t";
                }
                // line 340
                echo "\t\t";
            }
            // line 341
            echo "    </div>
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
        return "@activity/partials/activities.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  819 => 341,  816 => 340,  812 => 338,  809 => 337,  806 => 336,  803 => 335,  800 => 334,  798 => 333,  794 => 331,  792 => 330,  786 => 329,  774 => 324,  767 => 320,  760 => 318,  753 => 317,  750 => 316,  748 => 315,  745 => 314,  742 => 313,  727 => 301,  712 => 289,  696 => 276,  681 => 264,  667 => 257,  661 => 256,  658 => 255,  655 => 254,  645 => 252,  642 => 251,  640 => 250,  630 => 247,  624 => 246,  620 => 244,  618 => 243,  615 => 242,  610 => 239,  608 => 237,  605 => 236,  603 => 235,  600 => 234,  597 => 233,  590 => 229,  585 => 226,  582 => 225,  576 => 220,  574 => 219,  568 => 215,  563 => 214,  561 => 213,  559 => 212,  552 => 208,  550 => 207,  545 => 205,  543 => 204,  541 => 203,  539 => 202,  532 => 200,  530 => 199,  527 => 198,  525 => 197,  522 => 196,  520 => 195,  515 => 192,  512 => 191,  506 => 188,  503 => 187,  501 => 186,  498 => 185,  492 => 182,  489 => 181,  487 => 180,  482 => 178,  479 => 177,  475 => 175,  466 => 172,  456 => 170,  452 => 169,  447 => 168,  444 => 167,  440 => 165,  425 => 163,  419 => 160,  416 => 159,  414 => 158,  410 => 157,  405 => 156,  388 => 155,  383 => 154,  381 => 153,  378 => 152,  375 => 151,  372 => 150,  370 => 149,  367 => 148,  361 => 146,  358 => 145,  352 => 143,  350 => 142,  343 => 141,  340 => 140,  337 => 139,  335 => 138,  328 => 134,  325 => 133,  322 => 132,  318 => 130,  316 => 128,  314 => 126,  311 => 125,  309 => 124,  306 => 123,  303 => 122,  299 => 120,  297 => 117,  296 => 116,  294 => 114,  290 => 112,  288 => 109,  287 => 108,  285 => 106,  282 => 105,  280 => 104,  275 => 101,  271 => 99,  269 => 96,  268 => 95,  266 => 93,  264 => 92,  261 => 91,  254 => 89,  247 => 88,  245 => 87,  242 => 86,  234 => 84,  232 => 83,  229 => 82,  222 => 80,  215 => 79,  213 => 78,  210 => 77,  206 => 75,  204 => 73,  202 => 72,  200 => 71,  197 => 70,  189 => 68,  187 => 67,  182 => 65,  177 => 62,  173 => 60,  167 => 58,  161 => 56,  159 => 55,  154 => 54,  150 => 52,  144 => 50,  138 => 48,  136 => 47,  131 => 46,  129 => 45,  124 => 44,  122 => 43,  113 => 39,  110 => 38,  106 => 36,  102 => 34,  100 => 31,  99 => 30,  98 => 29,  96 => 27,  93 => 26,  89 => 24,  87 => 21,  86 => 20,  85 => 19,  83 => 17,  81 => 16,  78 => 15,  76 => 14,  71 => 13,  68 => 12,  52 => 11,  47 => 10,  37 => 7,  31 => 5,  28 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@activity/partials/activities.twig", "/Users/shingkeelau/Public/web/wp-content/plugins/membership-by-supsystic/src/Membership/Activity/views/partials/activities.twig");
    }
}
