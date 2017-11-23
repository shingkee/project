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
                echo $context["this"]->getactivity($this->getAttribute($context["activity"], "relatedActivity", array()), "relatedActivity", $context["activity"], ($context["context"] ?? null));
                echo "
\t";
            } else {
                // line 7
                echo "\t\t";
                echo $context["this"]->getactivity($context["activity"], null, null, ($context["context"] ?? null));
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
    public function getactivity($__activity__ = null, $__activityType__ = null, $__relatedActivity__ = null, $__activityContext__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "activity" => $__activity__,
            "activityType" => $__activityType__,
            "relatedActivity" => $__relatedActivity__,
            "activityContext" => $__activityContext__,
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
\t\t\t                ";
                // line 45
                if ( !$this->getAttribute(($context["activity"] ?? null), "sharedActivity", array())) {
                    // line 46
                    echo "\t\t\t\t                <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Membership_Users_Twig')->userAvatar($this->getAttribute(($context["activity"] ?? null), "author", array()), "medium"), "html", null, true);
                    echo "\">
\t\t\t                ";
                } else {
                    // line 48
                    echo "\t\t\t\t                <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Membership_Users_Twig')->userAvatar($this->getAttribute(($context["activity"] ?? null), "author", array()), "small"), "html", null, true);
                    echo "\">
\t\t\t                ";
                }
                // line 50
                echo "\t\t                </a>
\t                ";
            } else {
                // line 52
                echo "\t\t                <a href=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('groupUrl')->getCallable(), array($this->getAttribute(($context["activity"] ?? null), "group", array()))), "html", null, true);
                echo "\">
\t\t\t                ";
                // line 53
                if ( !$this->getAttribute(($context["activity"] ?? null), "sharedActivity", array())) {
                    // line 54
                    echo "\t\t\t\t                <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Membership_Groups_Twig')->groupsLogo($this->getAttribute(($context["activity"] ?? null), "group", array()), "medium"), "html", null, true);
                    echo "\">
\t\t\t                ";
                } else {
                    // line 56
                    echo "\t\t\t\t                <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Membership_Groups_Twig')->groupsLogo($this->getAttribute(($context["activity"] ?? null), "group", array()), "small"), "html", null, true);
                    echo "\">
\t\t\t                ";
                }
                // line 58
                echo "\t\t                </a>
\t                ";
            }
            // line 60
            echo "
                </div>
                <div class=\"mp-activity-header-title\">
                    ";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["environment"] ?? null), "dispatcher", array()), "dispatch", array(0 => "activity.view.activityTitle", 1 => array(0 => ($context["activity"] ?? null))), "method"), "html", null, true);
            echo "
\t
\t                ";
            // line 65
            if (($this->getAttribute(($context["activity"] ?? null), "type", array()) == "post")) {
                // line 66
                echo "\t\t                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Membership_Users_Twig')->profileUrl($this->getAttribute(($context["activity"] ?? null), "author", array())), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["activity"] ?? null), "author", array()), "displayName", array()), "html", null, true);
                echo "</a>
\t                ";
            }
            // line 68
            echo "\t                
\t                ";
            // line 69
            if (($this->getAttribute(($context["activity"] ?? null), "type", array()) == "user_registered")) {
                // line 70
                echo "\t\t                ";
                echo sprintf(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("%s is registered")), (((("<a href=\"" . $this->env->getExtension('Membership_Users_Twig')->profileUrl($this->getAttribute(                // line 71
($context["activity"] ?? null), "author", array()))) . "\">") . $this->getAttribute($this->getAttribute(($context["activity"] ?? null), "author", array()), "displayName", array())) . "</a>"));
                // line 73
                echo "
\t                ";
            }
            // line 75
            echo "\t                
\t                ";
            // line 76
            if (($this->getAttribute(($context["activity"] ?? null), "type", array()) == "related_post")) {
                // line 77
                echo "\t\t                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Membership_Users_Twig')->profileUrl($this->getAttribute(($context["activity"] ?? null), "author", array())), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["activity"] ?? null), "author", array()), "displayName", array()), "html", null, true);
                echo "</a> >
\t\t                <a href=\"";
                // line 78
                echo twig_escape_filter($this->env, $this->env->getExtension('Membership_Users_Twig')->profileUrl($this->getAttribute(($context["activity"] ?? null), "target", array())), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["activity"] ?? null), "target", array()), "displayName", array()), "html", null, true);
                echo "</a>
\t                ";
            }
            // line 80
            echo "\t                
\t                ";
            // line 81
            if (($this->getAttribute(($context["activity"] ?? null), "type", array()) == "group_post")) {
                // line 82
                echo "\t\t                <a href=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('groupUrl')->getCallable(), array($this->getAttribute(($context["activity"] ?? null), "group", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["activity"] ?? null), "group", array()), "name", array()), "html", null, true);
                echo "</a>
\t                ";
            }
            // line 84
            echo "\t
\t                ";
            // line 85
            if (($this->getAttribute(($context["activity"] ?? null), "type", array()) == "group_user_post")) {
                // line 86
                echo "\t\t                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Membership_Users_Twig')->profileUrl($this->getAttribute(($context["activity"] ?? null), "author", array())), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["activity"] ?? null), "author", array()), "displayName", array()), "html", null, true);
                echo "</a> >
\t\t                <a href=\"";
                // line 87
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('groupUrl')->getCallable(), array($this->getAttribute(($context["activity"] ?? null), "group", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["activity"] ?? null), "group", array()), "name", array()), "html", null, true);
                echo "</a>
\t                ";
            }
            // line 89
            echo "\t
\t                ";
            // line 90
            if (($this->getAttribute(($context["activity"] ?? null), "type", array()) == "group_created")) {
                // line 91
                echo "\t\t                ";
                echo sprintf(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("New group %s is created by %s.")), (((("<a href=\"" . call_user_func_array($this->env->getFunction('groupUrl')->getCallable(), array($this->getAttribute(                // line 93
($context["activity"] ?? null), "group", array())))) . "\">") . $this->getAttribute($this->getAttribute(($context["activity"] ?? null), "group", array()), "name", array())) . "</a>"), (((("<a href=\"" . $this->env->getExtension('Membership_Users_Twig')->profileUrl($this->getAttribute(                // line 94
($context["activity"] ?? null), "author", array()))) . "\">") . $this->getAttribute($this->getAttribute(($context["activity"] ?? null), "author", array()), "displayName", array())) . "</a>"));
                // line 97
                echo "
\t                ";
            }
            // line 99
            echo "


\t                ";
            // line 102
            if ($this->getAttribute(($context["activity"] ?? null), "sharedActivity", array())) {
                // line 103
                echo "\t\t                ";
                if (twig_in_filter($this->getAttribute(($context["activity"] ?? null), "type", array()), array(0 => "shared_group_post", 1 => "shared_group_user_post"))) {
                    // line 104
                    echo "\t\t\t                ";
                    echo sprintf(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("%s shared %s post.")), (((("<a href=\"" . $this->env->getExtension('Membership_Users_Twig')->profileUrl($this->getAttribute(                    // line 106
($context["activity"] ?? null), "author", array()))) . "\">") . $this->getAttribute($this->getAttribute(($context["activity"] ?? null), "author", array()), "displayName", array())) . "</a>"), (((("<a href=\"" . call_user_func_array($this->env->getFunction('groupUrl')->getCallable(), array($this->getAttribute($this->getAttribute(                    // line 107
($context["activity"] ?? null), "sharedActivity", array()), "group", array())))) . "\">") . $this->getAttribute($this->getAttribute($this->getAttribute(($context["activity"] ?? null), "sharedActivity", array()), "group", array()), "name", array())) . "</a>"));
                    // line 110
                    echo "
\t\t                ";
                } else {
                    // line 112
                    echo "\t\t\t                ";
                    echo sprintf(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("%s shared %s post.")), (((("<a href=\"" . $this->env->getExtension('Membership_Users_Twig')->profileUrl($this->getAttribute(                    // line 114
($context["activity"] ?? null), "author", array()))) . "\">") . $this->getAttribute($this->getAttribute(($context["activity"] ?? null), "author", array()), "displayName", array())) . "</a>"), (((("<a href=\"" . $this->env->getExtension('Membership_Users_Twig')->profileUrl($this->getAttribute($this->getAttribute(                    // line 115
($context["activity"] ?? null), "sharedActivity", array()), "author", array()))) . "\">") . $this->getAttribute($this->getAttribute($this->getAttribute(($context["activity"] ?? null), "sharedActivity", array()), "author", array()), "displayName", array())) . "</a>"));
                    // line 118
                    echo "
\t\t                ";
                }
                // line 120
                echo "\t                ";
            }
            // line 121
            echo "                    <div class=\"date\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["activity"] ?? null), "updated_at", array()), "html", null, true);
            echo "</div>
                </div>
            </div>

\t\t\t";
            // line 125
            if ((($this->getAttribute($this->getAttribute(($context["relatedActivity"] ?? null), "relatedActivity", array()), "status", array()) == "deleted") || ($this->getAttribute(($context["activity"] ?? null), "status", array()) == "deleted"))) {
                // line 126
                echo "\t\t\t\t";
                $context["postDeleted"] = 1;
                // line 127
                echo "\t\t\t";
            }
            // line 128
            echo "            <div class=\"mp-activity-content ";
            echo (((($context["postDeleted"] ?? null) == 1)) ? ("mp-activity-removed") : (""));
            echo "\" data-activity-data=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["activity"] ?? null), "data", array()));
            echo "\">
\t\t\t\t";
            // line 129
            if (($context["postDeleted"] ?? null)) {
                // line 130
                echo "\t\t\t\t\t";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Sorry, the original post was deleted by its author.")), "html", null, true);
                echo "
\t\t\t\t";
            } else {
                // line 132
                echo "\t\t\t\t\t";
                if (twig_length_filter($this->env, $this->getAttribute(($context["activity"] ?? null), "data", array()))) {
                    // line 133
                    echo "\t\t\t\t\t\t<div class=\"mp-activity-content-text\">";
                    echo $this->env->getExtension('Membership_Activity_Twig')->activityContent(($context["activity"] ?? null));
                    echo "</div>
\t\t\t\t\t";
                }
                // line 135
                echo "
\t\t\t\t\t";
                // line 136
                if ($this->getAttribute(($context["activity"] ?? null), "link", array())) {
                    // line 137
                    echo "\t\t\t\t\t\t";
                    $this->loadTemplate("@activity/partials/activity-attachment-link.twig", "@activity/partials/activities.twig", 137)->display(array_merge($context, array("link" => $this->getAttribute(($context["activity"] ?? null), "link", array()))));
                    // line 138
                    echo "\t\t\t\t\t";
                }
                // line 139
                echo "
\t\t\t\t\t";
                // line 140
                if ($this->getAttribute(($context["activity"] ?? null), "images", array())) {
                    // line 141
                    echo "\t\t\t\t\t\t<div class=\"mp-activity-gallery\" data-gallery-id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["activity"] ?? null), "id", array()), "html", null, true);
                    echo "\" style=\"display: none\">
\t\t\t\t\t\t\t";
                    // line 142
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
                        // line 143
                        echo "\t\t\t\t\t\t\t\t<div class=\"mp-activity-gallery-image\" data-image-id=\"";
                        echo twig_escape_filter($this->env, $context["id"], "html", null, true);
                        echo "\">
\t\t\t\t\t\t\t\t\t<img src=\"";
                        // line 144
                        echo twig_escape_filter($this->env, $this->env->getExtension('Membership_Activity_Twig')->activityImage($context["thumbnails"], "large"), "html", null, true);
                        echo "\">
\t\t\t\t\t\t\t\t\t";
                        // line 145
                        if ((($this->getAttribute($context["loop"], "index0", array()) == 2) && ($this->getAttribute($this->getAttribute(($context["activity"] ?? null), "images", array()), "total", array()) > 3))) {
                            // line 146
                            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"mp-activity-gallery-image-overlay\">
\t\t\t\t\t\t\t\t\t\t\t<div>+";
                            // line 147
                            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["activity"] ?? null), "images", array()), "total", array()) - 3), "html", null, true);
                            echo "</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 150
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
                    // line 152
                    echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 154
                echo "
\t\t\t\t\t";
                // line 155
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["environment"] ?? null), "dispatcher", array()), "dispatch", array(0 => "activity.view.activityContent", 1 => array(0 => ($context["activity"] ?? null))), "method"), "html", null, true);
                echo "

\t\t\t\t\t";
                // line 157
                if ((is_string($__internal_c0bb5f33b6e38054fdf6b6e893e603d9fc27ecfa394f777eb43443b6ad200074 = $this->getAttribute(($context["activity"] ?? null), "type", array())) && is_string($__internal_add8a731016e1977c4756cbcb0f5c4b7f2916df1254d42cfa07c0f130f7732af = "shared_") && ('' === $__internal_add8a731016e1977c4756cbcb0f5c4b7f2916df1254d42cfa07c0f130f7732af || 0 === strpos($__internal_c0bb5f33b6e38054fdf6b6e893e603d9fc27ecfa394f777eb43443b6ad200074, $__internal_add8a731016e1977c4756cbcb0f5c4b7f2916df1254d42cfa07c0f130f7732af)))) {
                    // line 158
                    echo "\t\t\t\t\t\t<div class=\"mp-shared-activity\">
\t\t\t\t\t\t\t";
                    // line 159
                    echo $context["this"]->getactivity($this->getAttribute(($context["activity"] ?? null), "sharedActivity", array()), "sharedActivity");
                    echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 162
                echo "\t\t\t\t";
            }
            // line 163
            echo "            </div>
        </div>

\t\t";
            // line 166
            if (($this->getAttribute($this->getAttribute(($context["relatedActivity"] ?? null), "relatedActivity", array()), "status", array()) != "deleted")) {
                // line 167
                echo "\t\t\t";
                if (((($context["activityType"] ?? null) != "sharedActivity") && ($context["userLoggedIn"] ?? null))) {
                    // line 168
                    echo "\t\t\t\t<div class=\"mp-activity-menu ui top right pointing dropdown item\">
\t\t\t\t\t<i class=\"ellipsis horizontal icon\"></i>
\t\t\t\t\t<div class=\"menu\">
\t\t\t\t\t\t";
                    // line 171
                    if (twig_in_filter($this->getAttribute(($context["activity"] ?? null), "type", array()), array(0 => "group_post", 1 => "group_user_post", 2 => "group_created"))) {
                        // line 176
                        echo "\t\t\t\t\t\t\t";
                        if (!twig_in_filter($this->getAttribute(($context["activity"] ?? null), "type", array()), array(0 => "group_created"))) {
                            // line 179
                            echo "\t\t\t\t\t\t\t\t";
                            if ($this->env->getExtension('Membership_Users_Twig')->isCurrentUser($this->getAttribute(($context["activity"] ?? null), "author", array()))) {
                                // line 180
                                echo "\t\t\t\t\t\t\t\t\t<div class=\"item edit-action\">";
                                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Edit")), "html", null, true);
                                echo "</div>
\t\t\t\t\t\t\t\t";
                            }
                            // line 182
                            echo "\t\t\t\t\t\t\t\t";
                            if ($this->env->getExtension('Membership_Groups_Twig')->canEditGroup($this->getAttribute(($context["activity"] ?? null), "group", array()))) {
                                // line 183
                                echo "\t\t\t\t\t\t\t\t\t<div class=\"item group-delete-action\">";
                                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Delete")), "html", null, true);
                                echo "</div>
\t\t\t\t\t\t\t\t";
                            }
                            // line 185
                            echo "\t\t\t\t\t\t\t";
                        }
                        // line 186
                        echo "\t\t\t\t\t\t";
                    } else {
                        // line 187
                        echo "\t\t\t\t\t\t\t";
                        if (($this->env->getExtension('Membership_Users_Twig')->isCurrentUser($this->getAttribute(($context["activity"] ?? null), "author", array())) || call_user_func_array($this->env->getFunction('currentUserCan')->getCallable(), array("edit-activity")))) {
                            // line 188
                            echo "\t\t\t\t\t\t\t\t";
                            if (!twig_in_filter($this->getAttribute(($context["activity"] ?? null), "type", array()), array(0 => "user_registered", 1 => "follow", 2 => "friendship"))) {
                                // line 193
                                echo "\t\t\t\t\t\t\t\t\t<div class=\"item edit-action\">";
                                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Edit")), "html", null, true);
                                echo "</div>
\t\t\t\t\t\t\t\t\t<div class=\"item delete-action\">";
                                // line 194
                                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Delete")), "html", null, true);
                                echo "</div>
\t\t\t\t\t\t\t\t";
                            }
                            // line 196
                            echo "\t\t\t\t\t\t\t";
                        }
                        // line 197
                        echo "\t\t\t\t\t\t";
                    }
                    // line 198
                    echo "\t\t\t\t\t\t";
                    if ( !$this->env->getExtension('Membership_Users_Twig')->isCurrentUser($this->getAttribute(($context["activity"] ?? null), "author", array()))) {
                        // line 199
                        echo "\t\t\t\t\t\t\t<div class=\"item report-action\">";
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Report")), "html", null, true);
                        echo "</div>
\t\t\t\t\t\t";
                    }
                    // line 201
                    echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
                }
                // line 204
                echo "
\t\t\t";
                // line 205
                if (( !($context["userLoggedIn"] ?? null) && (($context["activityType"] ?? null) != "sharedActivity"))) {
                    // line 206
                    echo "\t\t\t\t<div class=\"ui segment\">
\t\t\t\t\t";
                    // line 207
                    echo sprintf(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Please <a href=\"%s\">sign up</a> or <a href=\"%s\">sign in</a> to like or write comments on this post.")), call_user_func_array($this->env->getFunction('getRouteUrl')->getCallable(), array("registration")), call_user_func_array($this->env->getFunction('getRouteUrl')->getCallable(), array("login")));
                    // line 209
                    echo "
\t\t\t\t</div>
\t\t\t";
                }
                // line 212
                echo "
\t\t\t";
                // line 213
                if ((($context["activityType"] ?? null) != "sharedActivity")) {
                    // line 214
                    echo "\t\t\t\t<div class=\"ui segment mp-activity-actions\">

\t\t\t\t\t<a class=\"like-action ";
                    // line 216
                    if ($this->getAttribute($this->getAttribute(($context["activity"] ?? null), "likes", array()), "likedByCurrentUser", array())) {
                        echo "mp-liked-activity";
                    }
                    echo "\">
\t\t\t\t\t\t<i class=\"like icon\"></i> ";
                    // line 217
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Like")), "html", null, true);
                    echo " <span>";
                    if ($this->getAttribute(($context["activity"] ?? null), "likes", array())) {
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["activity"] ?? null), "likes", array()), "count", array()), "html", null, true);
                    }
                    echo "</span>
\t\t\t\t\t</a>

                    ";
                    // line 220
                    if (call_user_func_array($this->env->getFunction('isPostComment')->getCallable(), array($this->getAttribute(($context["activity"] ?? null), "group", array())))) {
                        // line 221
                        echo "                        ";
                        if (((is_string($__internal_7480224614b75590ecca54780558ff0ec8f07ca44ee71f8e2a639af5adfc65f0 = $this->getAttribute(($context["activity"] ?? null), "type", array())) && is_string($__internal_479007a07af159526ddad941277879ca5788eb1a089862254d4f15635e235d55 = "group") && ('' === $__internal_479007a07af159526ddad941277879ca5788eb1a089862254d4f15635e235d55 || 0 === strpos($__internal_7480224614b75590ecca54780558ff0ec8f07ca44ee71f8e2a639af5adfc65f0, $__internal_479007a07af159526ddad941277879ca5788eb1a089862254d4f15635e235d55))) || call_user_func_array($this->env->getFunction('currentUserHasPermission')->getCallable(), array("view-comments", $this->getAttribute(($context["activity"] ?? null), "author", array()))))) {
                            // line 222
                            echo "                            <a class=\"comment-action\"><i class=\"comment icon\"></i> ";
                            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Comments")), "html", null, true);
                            echo " <span>";
                            if ($this->getAttribute(($context["activity"] ?? null), "comments", array())) {
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["activity"] ?? null), "comments", array()), "count", array()), "html", null, true);
                            }
                            echo "</span></a>
                        ";
                        }
                        // line 224
                        echo "                    ";
                    }
                    // line 225
                    echo "
\t\t\t\t\t<a class=\"share-action ";
                    // line 226
                    if ($this->getAttribute($this->getAttribute(($context["activity"] ?? null), "shares", array()), "sharedByCurrentUser", array())) {
                        echo "mp-shared-activity";
                    }
                    echo "\">
\t\t\t\t\t\t<i class=\"share icon\"></i> ";
                    // line 227
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
                    // line 234
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
                    // line 246
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
                    // line 259
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
                    // line 271
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
                // line 283
                echo "\t\t";
            }
            // line 284
            echo "
\t\t";
            // line 285
            if (((($context["activityType"] ?? null) != "sharedActivity") && ($context["userLoggedIn"] ?? null))) {
                // line 286
                echo "\t\t\t";
                if (((is_string($__internal_b44f2bdf3d53a841c438e6c71c713ab91952794466803de24b28c92f4307a92c = $this->getAttribute(($context["activity"] ?? null), "type", array())) && is_string($__internal_058721405923046362c47ac6a34a010adc3520a26858a949079b94af985402dc = "group") && ('' === $__internal_058721405923046362c47ac6a34a010adc3520a26858a949079b94af985402dc || 0 === strpos($__internal_b44f2bdf3d53a841c438e6c71c713ab91952794466803de24b28c92f4307a92c, $__internal_058721405923046362c47ac6a34a010adc3520a26858a949079b94af985402dc))) || call_user_func_array($this->env->getFunction('currentUserHasPermission')->getCallable(), array("view-comments", $this->getAttribute(($context["activity"] ?? null), "author", array()))))) {
                    // line 287
                    echo "\t\t\t\t<div class=\"ui secondary segment mp-activity-comments\" ";
                    if ( !$this->getAttribute(($context["activity"] ?? null), "comments", array())) {
                        echo "style=\"display: none\"";
                    }
                    echo ">
\t\t\t\t\t<div class=\"ui equal width grid mp-previous-comments\" ";
                    // line 288
                    if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["activity"] ?? null), "comments", array()), "comments", array())) == $this->getAttribute($this->getAttribute(($context["activity"] ?? null), "comments", array()), "count", array()))) {
                        echo "style=\"display: none\"";
                    }
                    echo ">
\t\t\t\t\t\t<div class=\"left floated column\">
\t\t\t\t\t\t\t<div class=\"mp-more-comments\">";
                    // line 290
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("View previous comments")), "html", null, true);
                    echo " <div class=\"ui active mini inline loader\" style=\"display: none\"></div></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"right floated right aligned column mp-comments-count\">
\t\t\t\t\t\t\t<div class=\"ui floated right\">
\t\t\t\t\t\t\t\t<span class=\"showed-comments\">";
                    // line 294
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
                    // line 299
                    if ( !$this->getAttribute(($context["activity"] ?? null), "comments", array())) {
                        echo "style=\"display: none\"";
                    }
                    echo ">
\t\t\t\t\t\t";
                    // line 300
                    $this->loadTemplate("@activity/partials/activity-comments.twig", "@activity/partials/activities.twig", 300)->display(array_merge($context, array("comments" => $this->getAttribute($this->getAttribute(($context["activity"] ?? null), "comments", array()), "comments", array()), "relatedActivity" => $this->getAttribute(($context["relatedActivity"] ?? null), "relatedActivity", array()))));
                    // line 301
                    echo "\t\t\t\t\t</div>

\t\t\t\t\t";
                    // line 303
                    if (($this->getAttribute($this->getAttribute(($context["relatedActivity"] ?? null), "relatedActivity", array()), "status", array()) != "deleted")) {
                        // line 304
                        echo "\t\t\t\t\t\t";
                        if (((is_string($__internal_d4ddf403643249ebf93c2d9d611119ff25d62769e831c01a354eeccce0cd1f78 = $this->getAttribute(($context["activity"] ?? null), "type", array())) && is_string($__internal_1d37ed2369614939bb4a247f294dcfc4fa4e8537e98b78e080fee5cad637d4a5 = "group") && ('' === $__internal_1d37ed2369614939bb4a247f294dcfc4fa4e8537e98b78e080fee5cad637d4a5 || 0 === strpos($__internal_d4ddf403643249ebf93c2d9d611119ff25d62769e831c01a354eeccce0cd1f78, $__internal_1d37ed2369614939bb4a247f294dcfc4fa4e8537e98b78e080fee5cad637d4a5))) || call_user_func_array($this->env->getFunction('currentUserHasPermission')->getCallable(), array("post-comments", $this->getAttribute(($context["activity"] ?? null), "author", array()))))) {
                            // line 305
                            echo "\t\t\t\t\t\t\t";
                            $this->loadTemplate("@activity/partials/activity-comment-form.twig", "@activity/partials/activities.twig", 305)->display(array_merge($context, array("context" => ($context["activityContext"] ?? null))));
                            // line 306
                            echo "\t\t\t\t\t\t";
                        }
                        // line 307
                        echo "\t\t\t\t\t";
                    }
                    // line 308
                    echo "\t\t\t\t</div>
\t\t\t";
                }
                // line 310
                echo "\t\t";
            }
            // line 311
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
        return array (  736 => 311,  733 => 310,  729 => 308,  726 => 307,  723 => 306,  720 => 305,  717 => 304,  715 => 303,  711 => 301,  709 => 300,  703 => 299,  691 => 294,  684 => 290,  677 => 288,  670 => 287,  667 => 286,  665 => 285,  662 => 284,  659 => 283,  644 => 271,  629 => 259,  613 => 246,  598 => 234,  584 => 227,  578 => 226,  575 => 225,  572 => 224,  562 => 222,  559 => 221,  557 => 220,  547 => 217,  541 => 216,  537 => 214,  535 => 213,  532 => 212,  527 => 209,  525 => 207,  522 => 206,  520 => 205,  517 => 204,  512 => 201,  506 => 199,  503 => 198,  500 => 197,  497 => 196,  492 => 194,  487 => 193,  484 => 188,  481 => 187,  478 => 186,  475 => 185,  469 => 183,  466 => 182,  460 => 180,  457 => 179,  454 => 176,  452 => 171,  447 => 168,  444 => 167,  442 => 166,  437 => 163,  434 => 162,  428 => 159,  425 => 158,  423 => 157,  418 => 155,  415 => 154,  411 => 152,  396 => 150,  390 => 147,  387 => 146,  385 => 145,  381 => 144,  376 => 143,  359 => 142,  354 => 141,  352 => 140,  349 => 139,  346 => 138,  343 => 137,  341 => 136,  338 => 135,  332 => 133,  329 => 132,  323 => 130,  321 => 129,  314 => 128,  311 => 127,  308 => 126,  306 => 125,  298 => 121,  295 => 120,  291 => 118,  289 => 115,  288 => 114,  286 => 112,  282 => 110,  280 => 107,  279 => 106,  277 => 104,  274 => 103,  272 => 102,  267 => 99,  263 => 97,  261 => 94,  260 => 93,  258 => 91,  256 => 90,  253 => 89,  246 => 87,  239 => 86,  237 => 85,  234 => 84,  226 => 82,  224 => 81,  221 => 80,  214 => 78,  207 => 77,  205 => 76,  202 => 75,  198 => 73,  196 => 71,  194 => 70,  192 => 69,  189 => 68,  181 => 66,  179 => 65,  174 => 63,  169 => 60,  165 => 58,  159 => 56,  153 => 54,  151 => 53,  146 => 52,  142 => 50,  136 => 48,  130 => 46,  128 => 45,  123 => 44,  121 => 43,  112 => 39,  109 => 38,  105 => 36,  101 => 34,  99 => 31,  98 => 30,  97 => 29,  95 => 27,  92 => 26,  88 => 24,  86 => 21,  85 => 20,  84 => 19,  82 => 17,  80 => 16,  77 => 15,  75 => 14,  70 => 13,  67 => 12,  52 => 11,  47 => 10,  37 => 7,  31 => 5,  28 => 4,  24 => 3,  21 => 2,  19 => 1,);
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
