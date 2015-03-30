<?php

/* @Live/getVisitorProfilePopup.twig */
class __TwigTemplate_cc0f188a9333bee45348394257bbf51554d786ff333188aa39bfed80c95a8cc9 extends Twig_Template
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
        if ((!$this->getContext($context, "visitorData"))) {
            // line 2
            echo "    <div class=\"pk-emptyDataTable\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreHome_ThereIsNoDataForThisReport")), "html", null, true);
            echo "</div>
";
        } else {
            // line 4
            echo "<div class=\"visitor-profile\"
     data-visitor-id=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "visitorData"), "lastVisits"), "getFirstRow", array(), "method"), "getColumn", array(0 => "visitorId"), "method"), "html", null, true);
            echo "\"
     data-next-visitor=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "visitorData"), "nextVisitorId"), "html", null, true);
            echo "\"
     data-prev-visitor=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "visitorData"), "previousVisitorId"), "html", null, true);
            echo "\"
     tabindex=\"0\">
    <a href class=\"visitor-profile-close\"></a>
    <div class=\"visitor-profile-info\">
        <div>
            <div class=\"visitor-profile-overview\">
                <div class=\"visitor-profile-avatar\">
                    <div>
                        <div class=\"visitor-profile-image-frame\">
                            <img src=\"";
            // line 16
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getContext($context, "visitorData", true), "visitorAvatar", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getContext($context, "visitorData", true), "visitorAvatar"), "plugins/Live/images/unknown_avatar.jpg")) : ("plugins/Live/images/unknown_avatar.jpg")), "html", null, true);
            echo "\"
                                 alt=\"";
            // line 17
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getContext($context, "visitorData", true), "visitorDescription", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getContext($context, "visitorData", true), "visitorDescription"), "")) : ("")), "html", null, true);
            echo "\"
                                 title=\"";
            // line 18
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getContext($context, "visitorData", true), "visitorDescription", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getContext($context, "visitorData", true), "visitorDescription"), "")) : ("")), "html", null, true);
            echo "\" />
                        </div>
                        <img src=\"plugins/Live/images/paperclip.png\" alt=\"\"/>
                    </div>
                    <div>
                        <div class=\"visitor-profile-header\">
                            ";
            // line 24
            if ((!twig_test_empty($this->getAttribute($this->getContext($context, "visitorData"), "previousVisitorId")))) {
                echo "<a class=\"visitor-profile-prev-visitor\" href=\"#\" title=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Live_PreviousVisitor")), "html", null, true);
                echo "\">&larr;</a>";
            }
            // line 25
            echo "                            <h1>";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Live_VisitorProfile")), "html", null, true);
            echo " <img class=\"loadingPiwik\" style=\"display:none;\" src=\"plugins/Morpheus/images/loading-blue.gif\"/></h1>
                            <a href=\"http://piwik.org/docs/user-profile/\" class=\"reportDocumentationIcon\" target=\"_blank\" title=\"";
            // line 26
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ViewDocumentationFor", ucwords(call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Live_VisitorProfile"))))), "html", null, true);
            echo "\"></a>
                            ";
            // line 27
            if ((!twig_test_empty($this->getAttribute($this->getContext($context, "visitorData"), "nextVisitorId")))) {
                echo "<a class=\"visitor-profile-next-visitor\" href=\"#\" title=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Live_NextVisitor")), "html", null, true);
                echo "\">&rarr;</a>";
            }
            // line 28
            echo "                        </div>
                        <div class=\"visitor-profile-latest-visit\">
                            ";
            // line 30
            $this->env->loadTemplate("@Live/getSingleVisitSummary.twig")->display(array_merge($context, array("visitData" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "visitorData"), "lastVisits"), "getFirstRow", array(), "method"), "getColumns", array(), "method"), "showLocation" => false)));
            // line 31
            echo "                        </div>
                    </div>
                    <p style=\"clear:both; border:none!important;\"></p>
                </div>
                <div class=\"visitor-profile-summary\">
                    <h1>";
            // line 36
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Summary")), "html", null, true);
            echo "</h1>
                    <div>
                        <p>";
            // line 38
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Live_VisitSummary", (("<strong>" . $this->getAttribute($this->getContext($context, "visitorData"), "totalVisitDurationPretty")) . "</strong>"), "", "", "<strong>", $this->getAttribute($this->getContext($context, "visitorData"), "totalActions"), $this->getAttribute($this->getContext($context, "visitorData"), "totalVisits"), "</strong>"));
            echo "</p>
                        <p>";
            // line 39
            if ($this->getAttribute($this->getContext($context, "visitorData"), "totalGoalConversions")) {
                echo "<strong>";
            }
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Live_ConvertedNGoals", $this->getAttribute($this->getContext($context, "visitorData"), "totalGoalConversions"))), "html", null, true);
            if ($this->getAttribute($this->getContext($context, "visitorData"), "totalGoalConversions")) {
                echo "</strong>";
            }
            // line 40
            if ($this->getAttribute($this->getContext($context, "visitorData"), "totalGoalConversions")) {
                echo " (";
                // line 41
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "visitorData"), "totalConversionsByGoal"));
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
                foreach ($context['_seq'] as $context["idGoal"] => $context["totalConversions"]) {
                    // line 42
                    $context["idGoal"] = twig_slice($this->env, $this->getContext($context, "idGoal"), 7, null);
                    // line 43
                    if ((!$this->getAttribute($this->getContext($context, "loop"), "first"))) {
                        echo ", ";
                    }
                    echo twig_escape_filter($this->env, $this->getContext($context, "totalConversions"), "html", null, true);
                    echo " <span class=\"visitor-profile-goal-name\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "goals"), $this->getContext($context, "idGoal"), array(), "array"), "name", array(), "array"), "html", null, true);
                    echo "</span>";
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
                unset($context['_seq'], $context['_iterated'], $context['idGoal'], $context['totalConversions'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 45
                echo ")";
            }
            echo ".</p>
                        ";
            // line 46
            if ((((($this->getAttribute($this->getContext($context, "visitorData", true), "totalEcommerceConversions", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getContext($context, "visitorData", true), "totalEcommerceConversions"), 0)) : (0)) > 0) || ((($this->getAttribute($this->getContext($context, "visitorData", true), "totalAbandonedCarts", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getContext($context, "visitorData", true), "totalAbandonedCarts"), 0)) : (0)) > 0))) {
                // line 47
                echo "                        <p>
                            ";
                // line 48
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_Ecommerce")), "html", null, true);
                echo ":";
                // line 49
                if (((($this->getAttribute($this->getContext($context, "visitorData", true), "totalEcommerceConversions", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getContext($context, "visitorData", true), "totalEcommerceConversions"), 0)) : (0)) > 0)) {
                    echo " ";
                    echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Live_EcommerceSummaryConversions", "<strong>", $this->getAttribute($this->getContext($context, "visitorData"), "totalEcommerceConversions"), call_user_func_array($this->env->getFilter('money')->getCallable(), array($this->getAttribute($this->getContext($context, "visitorData"), "totalEcommerceRevenue"), $this->getContext($context, "idSite"))), "</strong>", $this->getAttribute($this->getContext($context, "visitorData"), "totalEcommerceItems")));
                }
                // line 51
                if (((($this->getAttribute($this->getContext($context, "visitorData", true), "totalAbandonedCarts", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getContext($context, "visitorData", true), "totalAbandonedCarts"), 0)) : (0)) > 0)) {
                    echo " ";
                    echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Live_AbandonedCartSummary", "<strong>", $this->getAttribute($this->getContext($context, "visitorData"), "totalAbandonedCarts"), "</strong>", $this->getAttribute($this->getContext($context, "visitorData"), "totalAbandonedCartsItems"), "<strong>", call_user_func_array($this->env->getFilter('money')->getCallable(), array($this->getAttribute($this->getContext($context, "visitorData"), "totalAbandonedCartsRevenue"), $this->getContext($context, "idSite"))), "</strong>"));
                }
                // line 52
                echo "</p>
                        ";
            }
            // line 54
            echo "                        ";
            if ((($this->getAttribute($this->getContext($context, "visitorData", true), "totalSearches", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getContext($context, "visitorData", true), "totalSearches"), 0)) : (0))) {
                // line 55
                echo "                        <p>
                            ";
                // line 56
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Actions_WidgetSearchKeywords")), "html", null, true);
                echo ":";
                // line 57
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "visitorData"), "searches"));
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
                foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
                    echo " <strong title=\"";
                    if (($this->getAttribute($this->getContext($context, "entry"), "searches") == 1)) {
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Actions_OneSearch")), "html", null, true);
                    } else {
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserCountryMap_Searches", $this->getAttribute($this->getContext($context, "entry"), "searches"))), "html", null, true);
                    }
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entry"), "keyword"), "html", null, true);
                    echo "</strong>";
                    if ((!$this->getAttribute($this->getContext($context, "loop"), "last"))) {
                        echo ",";
                    }
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 58
                echo "                        </p>
                        ";
            }
            // line 60
            echo "                        ";
            if ($this->getAttribute($this->getContext($context, "visitorData", true), "averagePageGenerationTime", array(), "any", true, true)) {
                // line 61
                echo "                        <p title=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Live_CalculatedOverNPageViews", $this->getAttribute($this->getContext($context, "visitorData"), "totalPageViews"))), "html", null, true);
                echo "\">
                            ";
                // line 62
                echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Live_AveragePageGenerationTime", (("<strong>" . $this->getAttribute($this->getContext($context, "visitorData"), "averagePageGenerationTime")) . "s</strong>")));
                echo "
                        </p>
                        ";
            }
            // line 65
            echo "                    </div>
                </div>
                <div class=\"visitor-profile-important-visits\">";
            // line 68
            $context["keywordNotDefined"] = call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_NotDefined", call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ColumnKeyword"))));
            // line 69
            echo "<div>
                        <h1>";
            // line 70
            if (($this->getAttribute($this->getContext($context, "visitorData"), "visitsAggregated") == 100)) {
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Visit")), "html", null, true);
                echo "# 100";
            } else {
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Live_FirstVisit")), "html", null, true);
            }
            echo "</h1>
                        <div>
                            <p><strong>";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "visitorData"), "firstVisit"), "prettyDate"), "html", null, true);
            echo "</strong><span>&nbsp;- ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserCountryMap_DaysAgo", $this->getAttribute($this->getAttribute($this->getContext($context, "visitorData"), "firstVisit"), "daysAgo"))), "html", null, true);
            echo "</span></p>
                            <p><span>";
            // line 73
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_FromReferrer")), "html", null, true);
            echo ":</span>
                            <strong ";
            // line 74
            if ((($this->getAttribute($this->getAttribute($this->getContext($context, "visitorData"), "firstVisit"), "referrerType") == "search") && !twig_in_filter("(", $this->getAttribute($this->getAttribute($this->getContext($context, "visitorData"), "firstVisit"), "referralSummary")))) {
                echo "title=\"";
                echo twig_escape_filter($this->env, $this->getContext($context, "keywordNotDefined"), "html", null, true);
                echo "\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "visitorData"), "firstVisit"), "referralSummary"), "html", null, true);
            echo "</strong></p>
                        </div>
                    </div>
                    ";
            // line 77
            if (($this->getAttribute($this->getAttribute($this->getContext($context, "visitorData"), "lastVisits"), "getRowsCount", array(), "method") != 1)) {
                // line 78
                echo "                    <div>
                        <h1>";
                // line 79
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Live_LastVisit")), "html", null, true);
                echo "</h1>
                        <div>
                            <p><strong>";
                // line 81
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "visitorData"), "lastVisit"), "prettyDate"), "html", null, true);
                echo "</strong><span>&nbsp;- ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserCountryMap_DaysAgo", $this->getAttribute($this->getAttribute($this->getContext($context, "visitorData"), "lastVisit"), "daysAgo"))), "html", null, true);
                echo "</span></p>
                            <p><span>";
                // line 82
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_FromReferrer")), "html", null, true);
                echo ":</span>
                            <strong ";
                // line 83
                if ((($this->getAttribute($this->getAttribute($this->getContext($context, "visitorData"), "lastVisit"), "referrerType") == "search") && !twig_in_filter("(", $this->getAttribute($this->getAttribute($this->getContext($context, "visitorData"), "lastVisit"), "referralSummary")))) {
                    echo "title=\"";
                    echo twig_escape_filter($this->env, $this->getContext($context, "keywordNotDefined"), "html", null, true);
                    echo "\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "visitorData"), "lastVisit"), "referralSummary"), "html", null, true);
                echo "</strong></p>
                        </div>
                    </div>
                    ";
            }
            // line 87
            echo "                </div>
                <div>
                    <div class=\"visitor-profile-location\">
                        <h1>";
            // line 90
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserCountry_Location")), "html", null, true);
            echo "</h1>
                        <p>";
            // line 92
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "visitorData"), "countries"));
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
            foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
                // line 94
                ob_start();
                // line 95
                if ((($this->getAttribute($this->getContext($context, "entry", true), "cities", array(), "any", true, true) && (1 == twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "entry"), "cities")))) && twig_join_filter($this->getAttribute($this->getContext($context, "entry"), "cities")))) {
                    // line 96
                    echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute($this->getContext($context, "entry"), "cities")), "html", null, true);
                } elseif (($this->getAttribute($this->getContext($context, "entry", true), "cities", array(), "any", true, true) && (1 < twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "entry"), "cities"))))) {
                    // line 98
                    echo "<span title=\"";
                    echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute($this->getContext($context, "entry"), "cities"), ", "), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserCountry_FromDifferentCities")), "html", null, true);
                    echo "</span>";
                }
                $context["entryCity"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 101
                echo "
                                ";
                // line 102
                ob_start();
                // line 103
                echo "<strong>
                                        ";
                // line 104
                if (($this->getAttribute($this->getContext($context, "entry"), "nb_visits") == 1)) {
                    // line 105
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_OneVisit")), "html", null, true);
                } else {
                    // line 107
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_NVisits", $this->getAttribute($this->getContext($context, "entry"), "nb_visits"))), "html", null, true);
                }
                // line 109
                echo "</strong>";
                $context["entryVisits"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 111
                echo "
                                ";
                // line 112
                ob_start();
                // line 113
                if ($this->getContext($context, "entryCity")) {
                    // line 114
                    echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserCountry_CityAndCountry", $this->getContext($context, "entryCity"), $this->getAttribute($this->getContext($context, "entry"), "prettyName")));
                } else {
                    // line 116
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entry"), "prettyName"), "html", null, true);
                }
                // line 119
                echo "&nbsp;<img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entry"), "flag"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entry"), "prettyName"), "html", null, true);
                echo "\"/>";
                $context["entryCountry"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 122
                echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_XFromY", $this->getContext($context, "entryVisits"), $this->getContext($context, "entryCountry")));
                if ((!$this->getAttribute($this->getContext($context, "loop"), "last"))) {
                    echo ", ";
                }
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 124
            echo "                                <a class=\"visitor-profile-show-map\" href=\"#\" ";
            if (twig_test_empty(((array_key_exists("userCountryMapUrl", $context)) ? (_twig_default_filter($this->getContext($context, "userCountryMapUrl"), "")) : ("")))) {
                echo "style=\"display:none\"";
            }
            echo ">(";
            echo strtr(call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Live_ShowMap")), array(" " => "&nbsp;"));
            echo ")</a> <img class=\"loadingPiwik\" style=\"display:none;\" src=\"plugins/Morpheus/images/loading-blue.gif\"/>
                        </p>
                        <div class=\"visitor-profile-map\" style=\"display:none\" data-href=\"";
            // line 126
            echo twig_escape_filter($this->env, ((array_key_exists("userCountryMapUrl", $context)) ? (_twig_default_filter($this->getContext($context, "userCountryMapUrl"), "")) : ("")), "html", null, true);
            echo "\">
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"visitor-profile-visits-info\">
                <div class=\"visitor-profile-pages-visited\">
                    <h1>";
            // line 133
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Live_VisitedPages")), "html", null, true);
            echo "</h1>
                </div>
                <div class=\"visitor-profile-visits-container\">
                    <ol class=\"visitor-profile-visits\">
                        ";
            // line 137
            $this->env->loadTemplate("@Live/getVisitList.twig")->display(array_merge($context, array("visits" => $this->getAttribute($this->getContext($context, "visitorData"), "lastVisits"), "startCounter" => 1)));
            // line 138
            echo "                    </ol>
                </div>
                <div class=\"visitor-profile-more-info\">
                    ";
            // line 141
            if (($this->getAttribute($this->getAttribute($this->getContext($context, "visitorData"), "lastVisits"), "getRowsCount", array(), "method") >= twig_constant("Piwik\\Plugins\\Live\\API::VISITOR_PROFILE_MAX_VISITS_TO_SHOW"))) {
                // line 142
                echo "                    <a href=\"#\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Live_LoadMoreVisits")), "html", null, true);
                echo "</a> <img class=\"loadingPiwik\" style=\"display:none;\" src=\"plugins/Morpheus/images/loading-blue.gif\"/>
                    ";
            } else {
                // line 144
                echo "                    <span class=\"visitor-profile-no-visits\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Live_NoMoreVisits")), "html", null, true);
                echo "</span>
                    ";
            }
            // line 146
            echo "                </div>
            </div>
        </div>
    </div>
</div>
<script type=\"text/javascript\">
\$(function() { require('piwik/UI').VisitorProfileControl.initElements(); });
</script>
";
        }
    }

    public function getTemplateName()
    {
        return "@Live/getVisitorProfilePopup.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  474 => 146,  468 => 144,  462 => 142,  460 => 141,  455 => 138,  453 => 137,  446 => 133,  436 => 126,  426 => 124,  409 => 122,  402 => 119,  399 => 116,  396 => 114,  394 => 113,  392 => 112,  389 => 111,  386 => 109,  383 => 107,  380 => 105,  378 => 104,  375 => 103,  373 => 102,  370 => 101,  362 => 98,  359 => 96,  357 => 95,  355 => 94,  338 => 92,  334 => 90,  329 => 87,  316 => 83,  312 => 82,  306 => 81,  301 => 79,  298 => 78,  296 => 77,  284 => 74,  280 => 73,  274 => 72,  264 => 70,  261 => 69,  259 => 68,  255 => 65,  249 => 62,  244 => 61,  241 => 60,  237 => 58,  196 => 57,  193 => 56,  190 => 55,  187 => 54,  183 => 52,  178 => 51,  173 => 49,  170 => 48,  167 => 47,  165 => 46,  160 => 45,  140 => 43,  138 => 42,  121 => 41,  118 => 40,  110 => 39,  106 => 38,  101 => 36,  94 => 31,  92 => 30,  88 => 28,  82 => 27,  78 => 26,  73 => 25,  67 => 24,  58 => 18,  54 => 17,  50 => 16,  38 => 7,  34 => 6,  30 => 5,  27 => 4,  21 => 2,  19 => 1,);
    }
}
