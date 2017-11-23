<?php

/* @activity/partials/activity-comments.twig */
class __TwigTemplate_3af21b99b786d58bfb80ed6968f0de1534da7df0875208cd566ab190d15ff0a3 extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["comments"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 2
            echo "\t<div class=\"comment\" data-comment-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "id", array()), "html", null, true);
            echo "\">
\t\t<div class=\"comment-container\">
\t\t\t<a class=\"avatar\">
\t\t\t\t";
            // line 5
            if (twig_in_filter($this->getAttribute($context["comment"], "type", array()), array(0 => "activity_group_comment", 1 => "activity_group_comment_reply"))) {
                // line 6
                echo "\t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Membership_Groups_Twig')->groupsLogo($this->getAttribute($context["comment"], "author", array()), "small"), "html", null, true);
                echo " \">
\t\t\t\t";
            } else {
                // line 8
                echo "\t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Membership_Users_Twig')->userAvatar($this->getAttribute($context["comment"], "author", array()), "small"), "html", null, true);
                echo " \">
\t\t\t\t";
            }
            // line 10
            echo "\t\t\t</a>
\t\t\t<div class=\"content mp-comment-content\">
\t\t\t\t";
            // line 12
            if (twig_in_filter($this->getAttribute($context["comment"], "type", array()), array(0 => "activity_group_comment", 1 => "activity_group_comment_reply"))) {
                // line 13
                echo "\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('groupUrl')->getCallable(), array($this->getAttribute($context["comment"], "author", array()))), "html", null, true);
                echo "\" class=\"author\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["comment"], "author", array()), "name", array()), "html", null, true);
                echo "</a>
\t\t\t\t";
            } else {
                // line 15
                echo "\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Membership_Users_Twig')->profileUrl($this->getAttribute($context["comment"], "author", array())), "html", null, true);
                echo "\" class=\"author\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["comment"], "author", array()), "displayName", array()), "html", null, true);
                echo "</a>
\t\t\t\t";
            }
            // line 17
            echo "\t\t\t\t
\t\t\t\t<div class=\"metadata\">
\t\t\t\t\t<span class=\"date\">";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "updated_at", array()), "html", null, true);
            echo "</span>
\t\t\t\t</div>
\t\t\t\t<div class=\"text\" data-comment-data=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "data", array()));
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "data", array()), "html", null, true);
            echo "</div>
\t\t\t\t
\t\t\t\t";
            // line 23
            if ($this->getAttribute($context["comment"], "link", array())) {
                // line 24
                echo "\t\t\t\t\t";
                $this->loadTemplate("@activity/partials/activity-attachment-link.twig", "@activity/partials/activity-comments.twig", 24)->display(array_merge($context, array("link" => $this->getAttribute($context["comment"], "link", array()))));
                // line 25
                echo "\t\t\t\t";
            }
            // line 26
            echo "\t\t\t\t
\t\t\t\t";
            // line 27
            if ($this->getAttribute($context["comment"], "images", array())) {
                // line 28
                echo "\t\t\t\t\t<div class=\"mp-activity-gallery\" data-gallery-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "id", array()), "html", null, true);
                echo "\" style=\"display: none\">
\t\t\t\t\t\t";
                // line 29
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, $this->getAttribute($this->getAttribute($context["comment"], "images", array()), "thumbnails", array()), 0, 3, true));
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
                    // line 30
                    echo "\t\t\t\t\t\t\t<div class=\"mp-activity-gallery-image\" data-image-id=\"";
                    echo twig_escape_filter($this->env, $context["id"], "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t<img src=\"";
                    // line 31
                    echo twig_escape_filter($this->env, $this->env->getExtension('Membership_Activity_Twig')->activityImage($context["thumbnails"], "large"), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t";
                    // line 32
                    if ((($this->getAttribute($context["loop"], "index0", array()) == 2) && ($this->getAttribute($this->getAttribute($context["comment"], "images", array()), "total", array()) > 3))) {
                        // line 33
                        echo "\t\t\t\t\t\t\t\t\t<div class=\"mp-activity-gallery-image-overlay\">
\t\t\t\t\t\t\t\t\t\t<div>+";
                        // line 34
                        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($context["comment"], "images", array()), "total", array()) - 3), "html", null, true);
                        echo "</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                    }
                    // line 37
                    echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
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
                // line 39
                echo "\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 41
            echo "
\t\t\t\t";
            // line 42
            if (call_user_func_array($this->env->getFunction('isPostComment')->getCallable(), array($this->getAttribute(($context["activity"] ?? null), "group", array())))) {
                // line 43
                echo "\t\t\t\t\t<div class=\"actions\">
                        ";
                // line 44
                if (($this->getAttribute(($context["relatedActivity"] ?? null), "status", array()) != "deleted")) {
                    // line 45
                    echo "                            ";
                    if (((is_string($__internal_3b236a82e7abe7fd1b7f701587d4c80b723cf9533a4a82c1b493801fbe33d6d2 = $this->getAttribute(($context["activity"] ?? null), "type", array())) && is_string($__internal_42eb5d66bac1ab1a175cf6cc0ea7b2e2511e5db05b2c60632ddd3afe2da12fb5 = "group") && ('' === $__internal_42eb5d66bac1ab1a175cf6cc0ea7b2e2511e5db05b2c60632ddd3afe2da12fb5 || 0 === strpos($__internal_3b236a82e7abe7fd1b7f701587d4c80b723cf9533a4a82c1b493801fbe33d6d2, $__internal_42eb5d66bac1ab1a175cf6cc0ea7b2e2511e5db05b2c60632ddd3afe2da12fb5))) || call_user_func_array($this->env->getFunction('currentUserHasPermission')->getCallable(), array("post-comments", $this->getAttribute(($context["activity"] ?? null), "author", array()))))) {
                        // line 46
                        echo "\t\t\t\t\t\t\t\t<a class=\"reply reply-action\">";
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Reply")), "html", null, true);
                        echo "</a>
                            ";
                    }
                    // line 48
                    echo "                            ";
                    if ($this->env->getExtension('Membership_Users_Twig')->isCurrentUser($this->getAttribute($context["comment"], "author", array()))) {
                        // line 49
                        echo "\t\t\t\t\t\t\t\t<a class=\"edit-action\">";
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Edit")), "html", null, true);
                        echo "</a>
\t\t\t\t\t\t\t\t<a class=\"remove-action\">";
                        // line 50
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Remove")), "html", null, true);
                        echo "</a>
                            ";
                    }
                    // line 52
                    echo "                        ";
                }
                // line 53
                echo "\t\t\t\t\t\t<div class=\"mp-load-replies\">
\t\t\t\t\t\t\t<a class=\"load-replies\" ";
                // line 54
                if ( !$this->getAttribute($context["comment"], "replies", array())) {
                    echo "style=\"display:none;\"";
                }
                echo "><i class=\"vertically flipped share icon\"></i><span>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "replies", array()), "html", null, true);
                echo "</span> ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Replies")), "html", null, true);
                echo "</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 58
            echo "\t\t\t
\t\t\t</div>
\t\t</div>
\t\t
\t\t<div class=\"comments mp-comment-replies\" style=\"display: none\">
\t\t\t<div class=\"ui equal width grid mp-previous-replies\" style=\"display: none\">
\t\t\t\t<div class=\"left floated column\">
\t\t\t\t\t<div class=\"mp-more-replies\">";
            // line 65
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("View previous replies")), "html", null, true);
            echo " <div class=\"ui active mini inline loader\" style=\"display: none\"></div></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"right floated right aligned column mp-replies-count\">
\t\t\t\t\t<div class=\"ui floated right\">
\t\t\t\t\t\t<span class=\"showed-replies\">0</span> ";
            // line 69
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("of")), "html", null, true);
            echo "
\t\t\t\t\t\t<span class=\"total-replies\">";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "replies", array()), "html", null, true);
            echo "</span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"ui basic segment replies-loader\" style=\"display: none\">
\t\t\t\t<div class=\"ui small active loader\"></div>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"comment-replies\" style=\"display: none\"></div>
\t\t\t
\t\t\t";
            // line 81
            if (((is_string($__internal_b6af02e51d22b617c3fd0b687086a8ba0162b26e27b0912c0094548944ae8a7c = $this->getAttribute(($context["activity"] ?? null), "type", array())) && is_string($__internal_046595cec7b690ee8d3ed2d47a5ea5df545307480a1b38ad34dfd3c41202999d = "group") && ('' === $__internal_046595cec7b690ee8d3ed2d47a5ea5df545307480a1b38ad34dfd3c41202999d || 0 === strpos($__internal_b6af02e51d22b617c3fd0b687086a8ba0162b26e27b0912c0094548944ae8a7c, $__internal_046595cec7b690ee8d3ed2d47a5ea5df545307480a1b38ad34dfd3c41202999d))) || call_user_func_array($this->env->getFunction('currentUserHasPermission')->getCallable(), array("post-comments", $this->getAttribute(($context["activity"] ?? null), "author", array()))))) {
                // line 82
                echo "\t\t\t\t<div class=\"mp-reply-form\">
\t\t\t\t\t";
                // line 83
                $this->loadTemplate("@activity/partials/activity-comment-form.twig", "@activity/partials/activity-comments.twig", 83)->display(array_merge($context, array("context" => ($context["activityContext"] ?? null), "placeholder" => "Write a reply...")));
                // line 84
                echo "\t\t\t\t</div>
\t\t\t";
            }
            // line 86
            echo "\t\t</div>
\t</div>
";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "@activity/partials/activity-comments.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  265 => 86,  261 => 84,  259 => 83,  256 => 82,  254 => 81,  240 => 70,  236 => 69,  229 => 65,  220 => 58,  207 => 54,  204 => 53,  201 => 52,  196 => 50,  191 => 49,  188 => 48,  182 => 46,  179 => 45,  177 => 44,  174 => 43,  172 => 42,  169 => 41,  165 => 39,  150 => 37,  144 => 34,  141 => 33,  139 => 32,  135 => 31,  130 => 30,  113 => 29,  108 => 28,  106 => 27,  103 => 26,  100 => 25,  97 => 24,  95 => 23,  88 => 21,  83 => 19,  79 => 17,  71 => 15,  63 => 13,  61 => 12,  57 => 10,  51 => 8,  45 => 6,  43 => 5,  36 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@activity/partials/activity-comments.twig", "/Users/shingkeelau/Public/web/wp-content/plugins/membership-by-supsystic/src/Membership/Activity/views/partials/activity-comments.twig");
    }
}
