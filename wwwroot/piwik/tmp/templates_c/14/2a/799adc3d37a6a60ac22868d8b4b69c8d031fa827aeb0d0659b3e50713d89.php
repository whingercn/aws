<?php

/* @Live/getLastVisitsStart.twig */
class __TwigTemplate_142a799adc3d37a6a60ac22868d8b4b69c8d031fa827aeb0d0659b3e50713d89 extends Twig_Template
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
        // line 2
        $context["maxPagesDisplayedByVisitor"] = 100;
        // line 3
        echo "
<ul id='visitsLive'>
    ";
        // line 5
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "visitors"));
        foreach ($context['_seq'] as $context["_key"] => $context["visitor"]) {
            // line 6
            echo "        <li id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "visitor"), "idVisit"), "html", null, true);
            echo "\" class=\"visit\">
            <div style=\"display:none;\" class=\"idvisit\">";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "visitor"), "idVisit"), "html", null, true);
            echo "</div>
            <div title=\"";
            // line 8
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "visitor"), "actionDetails")), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Actions")), "html", null, true);
            echo "\" class=\"datetime\">
                <span style=\"display:none;\" class=\"serverTimestamp\">";
            // line 9
            echo $this->getAttribute($this->getContext($context, "visitor"), "serverTimestamp");
            echo "</span>
                ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "visitor"), "serverDatePretty"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "visitor"), "serverTimePretty"), "html", null, true);
            echo " ";
            if (($this->getAttribute($this->getContext($context, "visitor"), "visitDuration") > 0)) {
                echo "<em>(";
                echo $this->getAttribute($this->getContext($context, "visitor"), "visitDurationPretty");
                echo ")</em>";
            }
            // line 11
            echo "                ";
            if ($this->getAttribute($this->getContext($context, "visitor", true), "countryFlag", array(), "any", true, true)) {
                echo "&nbsp;<img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "visitor"), "countryFlag"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "visitor"), "location"), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Provider_ColumnProvider")), "html", null, true);
                echo " ";
                if ($this->getAttribute($this->getContext($context, "visitor", true), "providerName", array(), "any", true, true)) {
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "visitor"), "providerName"), "html", null, true);
                }
                echo "\"/>";
            }
            // line 12
            echo "                ";
            if ($this->getAttribute($this->getContext($context, "visitor", true), "browserIcon", array(), "any", true, true)) {
                echo "&nbsp;<img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "visitor"), "browserIcon"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "visitor"), "browserName"), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Plugins")), "html", null, true);
                echo ": ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "visitor"), "plugins"), "html", null, true);
                echo "\"/>";
            }
            // line 13
            echo "                ";
            if ($this->getAttribute($this->getContext($context, "visitor", true), "operatingSystemIcon", array(), "any", true, true)) {
                echo "&nbsp;<img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "visitor"), "operatingSystemIcon"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "visitor"), "operatingSystem"), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "visitor"), "resolution"), "html", null, true);
                echo "\"/>";
            }
            // line 14
            echo "                &nbsp;
                ";
            // line 15
            if ($this->getAttribute($this->getContext($context, "visitor"), "visitConverted")) {
                // line 16
                echo "                <span title=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_VisitConvertedNGoals", $this->getAttribute($this->getContext($context, "visitor"), "goalConversions"))), "html", null, true);
                echo "\" class='visitorRank'>
                    <img src=\"";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "visitor"), "visitConvertedIcon"), "html", null, true);
                echo "\" />
                    <span class='hash'>#</span>
                    ";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "visitor"), "goalConversions"), "html", null, true);
                echo "
                    ";
                // line 20
                if ($this->getAttribute($this->getContext($context, "visitor"), "visitEcommerceStatusIcon")) {
                    // line 21
                    echo "                        &nbsp;-
                        <img src=\"";
                    // line 22
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "visitor"), "visitEcommerceStatusIcon"), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "visitor"), "visitEcommerceStatus"), "html", null, true);
                    echo "\"/>
                    ";
                }
                // line 24
                echo "                </span>
                ";
            }
            // line 26
            echo "                ";
            if ($this->getAttribute($this->getContext($context, "visitor"), "visitorTypeIcon")) {
                // line 27
                echo "                    &nbsp;- <img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "visitor"), "visitorTypeIcon"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ReturningVisitor")), "html", null, true);
                echo "\"/>
                ";
            }
            // line 29
            echo "                ";
            if ((!twig_test_empty((($this->getAttribute($this->getContext($context, "visitor", true), "visitorId", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getContext($context, "visitor", true), "visitorId"), false)) : (false))))) {
                // line 30
                echo "                <a class=\"visits-live-launch-visitor-profile rightLink\" title=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Live_ViewVisitorProfile")), "html", null, true);
                echo "\" data-visitor-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "visitor"), "visitorId"), "html", null, true);
                echo "\">
                    <img src=\"plugins/Live/images/visitorProfileLaunch.png\"/>
                </a>
                ";
            }
            // line 34
            echo "                ";
            if ($this->getAttribute($this->getContext($context, "visitor"), "visitIp")) {
                echo "- <span title=\"";
                if ((!twig_test_empty($this->getAttribute($this->getContext($context, "visitor"), "visitorId")))) {
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_VisitorID")), "html", null, true);
                    echo ": ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "visitor"), "visitorId"), "html", null, true);
                }
                echo "\">
                    IP: ";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "visitor"), "visitIp"), "html", null, true);
                echo "</span>
                ";
            }
            // line 37
            echo "            </div>
            <!--<div class=\"settings\"></div>-->
            <div class=\"referrer\">
                ";
            // line 40
            if (($this->getAttribute($this->getContext($context, "visitor", true), "referrerType", array(), "any", true, true) && ($this->getAttribute($this->getContext($context, "visitor"), "referrerType") != "direct"))) {
                // line 41
                echo "                    ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_FromReferrer")), "html", null, true);
                echo "
                    ";
                // line 42
                if ((!twig_test_empty($this->getAttribute($this->getContext($context, "visitor"), "referrerUrl")))) {
                    // line 43
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "visitor"), "referrerUrl"), "html", null, true);
                    echo "\" target=\"_blank\">
                    ";
                }
                // line 45
                echo "                    ";
                if ($this->getAttribute($this->getContext($context, "visitor", true), "searchEngineIcon", array(), "any", true, true)) {
                    // line 46
                    echo "                        <img src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "visitor"), "searchEngineIcon"), "html", null, true);
                    echo "\" />
                    ";
                }
                // line 48
                echo "                    ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "visitor"), "referrerName"), "html", null, true);
                echo "
                    ";
                // line 49
                if ((!twig_test_empty($this->getAttribute($this->getContext($context, "visitor"), "referrerUrl")))) {
                    // line 50
                    echo "                        </a>
                    ";
                }
                // line 52
                echo "                    ";
                if ((!twig_test_empty($this->getAttribute($this->getContext($context, "visitor"), "referrerKeyword")))) {
                    echo " - \"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "visitor"), "referrerKeyword"), "html", null, true);
                    echo "\"";
                }
                // line 53
                echo "                    ";
                ob_start();
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "visitor"), "referrerKeyword"), "html", null, true);
                $context["keyword"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 54
                echo "                    ";
                ob_start();
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "visitor"), "referrerName"), "html", null, true);
                $context["searchName"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 55
                echo "                    ";
                ob_start();
                echo "#";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "visitor"), "referrerKeywordPosition"), "html", null, true);
                $context["position"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 56
                echo "                    ";
                if ((!twig_test_empty($this->getAttribute($this->getContext($context, "visitor"), "referrerKeywordPosition")))) {
                    // line 57
                    echo "                        <span title='";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Live_KeywordRankedOnSearchResultForThisVisitor", $this->getContext($context, "keyword"), $this->getContext($context, "position"), $this->getContext($context, "searchName"))), "html", null, true);
                    echo "' class='visitorRank'>
                            <span class='hash'>#</span> ";
                    // line 58
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "visitor"), "referrerKeywordPosition"), "html", null, true);
                    echo "
                        </span>
                    ";
                }
                // line 61
                echo "                ";
            } elseif ($this->getAttribute($this->getContext($context, "visitor", true), "referrerType", array(), "any", true, true)) {
                // line 62
                echo "                    ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Referrers_DirectEntry")), "html", null, true);
                echo "
                ";
            }
            // line 64
            echo "            </div>
            <div id=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "visitor"), "idVisit"), "html", null, true);
            echo "_actions\" class=\"settings\">
                <span class=\"pagesTitle\" title=\"";
            // line 66
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "visitor"), "actionDetails")), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Actions")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Pages")), "html", null, true);
            echo ":</span>&nbsp;
                ";
            // line 67
            $context["col"] = 0;
            // line 68
            echo "                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "visitor"), "actionDetails"));
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
            foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                // line 69
                echo "                    ";
                if (($this->getAttribute($this->getContext($context, "loop"), "index") <= $this->getContext($context, "maxPagesDisplayedByVisitor"))) {
                    // line 70
                    echo "                        ";
                    if ((($this->getAttribute($this->getContext($context, "action"), "type") == "ecommerceOrder") || ($this->getAttribute($this->getContext($context, "action"), "type") == "ecommerceAbandonedCart"))) {
                        // line 71
                        echo "                            ";
                        ob_start();
                        // line 72
                        echo "                                ";
                        if (($this->getAttribute($this->getContext($context, "action"), "type") == "ecommerceOrder")) {
                            // line 73
                            echo "                                    ";
                            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_EcommerceOrder")), "html", null, true);
                            echo "
                                ";
                        } else {
                            // line 75
                            echo "                                    ";
                            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_AbandonedCart")), "html", null, true);
                            echo "
                                ";
                        }
                        // line 77
                        echo "                                -
                                ";
                        // line 78
                        if (($this->getAttribute($this->getContext($context, "action"), "type") == "ecommerceOrder")) {
                            // line 79
                            echo "                                    ";
                            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ColumnRevenue")), "html", null, true);
                            echo ":
                                ";
                        } else {
                            // line 81
                            echo "                                    ";
                            ob_start();
                            // line 82
                            echo "                                        ";
                            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ColumnRevenue")), "html", null, true);
                            echo "
                                    ";
                            $context["revenueLeft"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                            // line 84
                            echo "                                    ";
                            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_LeftInCart", $this->getContext($context, "revenueLeft"))), "html", null, true);
                            echo ":
                                ";
                        }
                        // line 86
                        echo "                                ";
                        echo call_user_func_array($this->env->getFilter('money')->getCallable(), array($this->getAttribute($this->getContext($context, "action"), "revenue"), $this->getContext($context, "idSite")));
                        echo " - ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "action"), "serverTimePretty"), "html", null, true);
                        echo "
                                ";
                        // line 87
                        if ((!twig_test_empty($this->getAttribute($this->getContext($context, "action"), "itemDetails")))) {
                            // line 88
                            echo "                                    ";
                            $context['_parent'] = (array) $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "action"), "itemDetails"));
                            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                                // line 89
                                echo "                                    # ";
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "product"), "itemSKU"), "html", null, true);
                                if ((!twig_test_empty($this->getAttribute($this->getContext($context, "product"), "itemName")))) {
                                    echo ": ";
                                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "product"), "itemName"), "html", null, true);
                                }
                                if ((!twig_test_empty($this->getAttribute($this->getContext($context, "product"), "itemCategory")))) {
                                    echo " (";
                                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "product"), "itemCategory"), "html", null, true);
                                    echo ")";
                                }
                                echo ", ";
                                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Quantity")), "html", null, true);
                                echo ": ";
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "product"), "quantity"), "html", null, true);
                                echo ", ";
                                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Price")), "html", null, true);
                                echo ": ";
                                echo call_user_func_array($this->env->getFilter('money')->getCallable(), array($this->getAttribute($this->getContext($context, "product"), "price"), $this->getContext($context, "idSite")));
                                echo "
                                    ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 91
                            echo "                                ";
                        }
                        // line 92
                        echo "                            ";
                        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                        // line 93
                        echo "                            <span title=\"";
                        echo twig_escape_filter($this->env, $this->getContext($context, "title"), "html", null, true);
                        echo "\">
\t\t\t\t\t\t        <img class='iconPadding' src=\"";
                        // line 94
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "action"), "icon"), "html", null, true);
                        echo "\"/>
                                ";
                        // line 95
                        if (($this->getAttribute($this->getContext($context, "action"), "type") == "ecommerceOrder")) {
                            // line 96
                            echo "                                    ";
                            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ColumnRevenue")), "html", null, true);
                            echo ": ";
                            echo call_user_func_array($this->env->getFilter('money')->getCallable(), array($this->getAttribute($this->getContext($context, "action"), "revenue"), $this->getContext($context, "idSite")));
                            echo "
                                ";
                        }
                        // line 98
                        echo "                            </span>
                        ";
                    } else {
                        // line 100
                        echo "                            ";
                        $context["col"] = ($this->getContext($context, "col") + 1);
                        // line 101
                        echo "                            ";
                        if (($this->getContext($context, "col") >= 9)) {
                            // line 102
                            echo "                                ";
                            $context["col"] = 0;
                            // line 103
                            echo "                            ";
                        }
                        // line 104
                        echo "                            <a href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "action"), "url"), "html", null, true);
                        echo "\" target=\"_blank\">
                                ";
                        // line 105
                        if (($this->getAttribute($this->getContext($context, "action"), "type") == "action")) {
                            // line 107
                            ob_start();
                            // line 108
                            if ((!twig_test_empty($this->getAttribute($this->getContext($context, "action"), "pageTitle")))) {
                                echo call_user_func_array($this->env->getFilter('rawSafeDecoded')->getCallable(), array($this->getAttribute($this->getContext($context, "action"), "pageTitle")));
                            }
                            // line 109
                            echo "
";
                            // line 110
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "action"), "serverTimePretty"), "html", null, true);
                            echo "
";
                            // line 111
                            if ($this->getAttribute($this->getContext($context, "action", true), "timeSpentPretty", array(), "any", true, true)) {
                                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_TimeOnPage")), "html", null, true);
                                echo ": ";
                                echo $this->getAttribute($this->getContext($context, "action"), "timeSpentPretty");
                            }
                            $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                            // line 113
                            echo "                                    <img src=\"plugins/Live/images/file";
                            echo twig_escape_filter($this->env, $this->getContext($context, "col"), "html", null, true);
                            echo ".png\" title=\"";
                            echo twig_escape_filter($this->env, $this->getContext($context, "title"), "html", null, true);
                            echo "\"/>
                                ";
                        } elseif ((($this->getAttribute($this->getContext($context, "action"), "type") == "outlink") || ($this->getAttribute($this->getContext($context, "action"), "type") == "download"))) {
                            // line 115
                            echo "                                    <img class='iconPadding' src=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "action"), "icon"), "html", null, true);
                            echo "\"
                                         title=\"";
                            // line 116
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "action"), "url"), "html", null, true);
                            echo " - ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "action"), "serverTimePretty"), "html", null, true);
                            echo "\"/>
                                ";
                        } elseif (($this->getAttribute($this->getContext($context, "action"), "type") == "search")) {
                            // line 118
                            echo "                                    <img class='iconPadding' src=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "action"), "icon"), "html", null, true);
                            echo "\"
                                         title=\"";
                            // line 119
                            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Actions_SubmenuSitesearch")), "html", null, true);
                            echo ": ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "action"), "siteSearchKeyword"), "html", null, true);
                            echo " - ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "action"), "serverTimePretty"), "html", null, true);
                            echo "\"/>
                                ";
                        } elseif ((!twig_test_empty((($this->getAttribute($this->getContext($context, "action", true), "eventCategory", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getContext($context, "action", true), "eventCategory"), false)) : (false))))) {
                            // line 121
                            echo "                                    <img  class=\"iconPadding\" src='";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "action"), "icon"), "html", null, true);
                            echo "'
                                        title=\"";
                            // line 122
                            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Events_Event")), "html", null, true);
                            echo " ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "action"), "eventCategory"), "html", null, true);
                            echo " - ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "action"), "eventAction"), "html", null, true);
                            echo " ";
                            if ($this->getAttribute($this->getContext($context, "action", true), "eventName", array(), "any", true, true)) {
                                echo "- ";
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "action"), "eventName"), "html", null, true);
                            }
                            echo " ";
                            if ($this->getAttribute($this->getContext($context, "action", true), "eventValue", array(), "any", true, true)) {
                                echo "- ";
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "action"), "eventValue"), "html", null, true);
                            }
                            echo "\"/>
                                ";
                        } else {
                            // line 124
                            echo "                                    <img class='iconPadding' src=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "action"), "icon"), "html", null, true);
                            echo "\"
                                         title=\"";
                            // line 125
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "action"), "goalName"), "html", null, true);
                            echo " - ";
                            if (($this->getAttribute($this->getContext($context, "action"), "revenue") > 0)) {
                                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ColumnRevenue")), "html", null, true);
                                echo ": ";
                                echo call_user_func_array($this->env->getFilter('money')->getCallable(), array($this->getAttribute($this->getContext($context, "action"), "revenue"), $this->getContext($context, "idSite")));
                                echo " - ";
                            }
                            echo " ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "action"), "serverTimePretty"), "html", null, true);
                            echo "\"/>
                                ";
                        }
                        // line 127
                        echo "                            </a>
                        ";
                    }
                    // line 129
                    echo "                    ";
                }
                // line 130
                echo "                ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 131
            echo "                ";
            if ((twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "visitor"), "actionDetails")) > $this->getContext($context, "maxPagesDisplayedByVisitor"))) {
                // line 132
                echo "                    <em>(";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Live_MorePagesNotDisplayed")), "html", null, true);
                echo ")</em>
                ";
            }
            // line 134
            echo "            </div>
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['visitor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 137
        echo "</ul>
<script type=\"text/javascript\">
\$('#visitsLive').on('click', '.visits-live-launch-visitor-profile', function (e) {
    e.preventDefault();
    broadcast.propagateNewPopoverParameter('visitorProfile', \$(this).attr('data-visitor-id'));
    return false;
});
</script>";
    }

    public function getTemplateName()
    {
        return "@Live/getLastVisitsStart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  566 => 137,  558 => 134,  552 => 132,  549 => 131,  535 => 130,  532 => 129,  528 => 127,  514 => 125,  509 => 124,  490 => 122,  485 => 121,  476 => 119,  471 => 118,  464 => 116,  459 => 115,  451 => 113,  444 => 111,  440 => 110,  437 => 109,  433 => 108,  431 => 107,  429 => 105,  424 => 104,  421 => 103,  418 => 102,  415 => 101,  412 => 100,  408 => 98,  400 => 96,  398 => 95,  394 => 94,  389 => 93,  386 => 92,  383 => 91,  357 => 89,  352 => 88,  350 => 87,  343 => 86,  337 => 84,  331 => 82,  328 => 81,  322 => 79,  320 => 78,  317 => 77,  311 => 75,  305 => 73,  302 => 72,  299 => 71,  296 => 70,  293 => 69,  275 => 68,  273 => 67,  265 => 66,  261 => 65,  258 => 64,  252 => 62,  249 => 61,  243 => 58,  238 => 57,  235 => 56,  229 => 55,  224 => 54,  219 => 53,  212 => 52,  208 => 50,  206 => 49,  201 => 48,  195 => 46,  192 => 45,  186 => 43,  184 => 42,  179 => 41,  177 => 40,  172 => 37,  167 => 35,  156 => 34,  146 => 30,  143 => 29,  135 => 27,  132 => 26,  128 => 24,  121 => 22,  118 => 21,  116 => 20,  112 => 19,  107 => 17,  102 => 16,  100 => 15,  97 => 14,  86 => 13,  73 => 12,  58 => 11,  48 => 10,  44 => 9,  38 => 8,  34 => 7,  29 => 6,  25 => 5,  21 => 3,  19 => 2,);
    }
}
