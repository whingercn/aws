<?php

/* @Live/getSingleVisitSummary.twig */
class __TwigTemplate_ebd258ab969a233a2e1849d42951a06adb67afcc884693b631723f31ed7d2648 extends Twig_Template
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
        // line 6
        $context["macros"] = $this;
        // line 7
        if (((array_key_exists("showLocation", $context)) ? (_twig_default_filter($this->getContext($context, "showLocation"), false)) : (false))) {
            // line 8
            echo "<div class=\"visitor-profile-latest-visit-loc\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "visitData"), "location"), "html", null, true);
            echo "\">
    <img src=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "visitData"), "countryFlag"), "html", null, true);
            echo "\"/>&nbsp;<span>";
            if ((!twig_test_empty($this->getAttribute($this->getContext($context, "visitData"), "city")))) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "visitData"), "city"), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "visitData"), "country"), "html", null, true);
            }
            echo "</span>
</div>
";
        }
        // line 12
        echo "<div class=\"visitor-profile-latest-visit-column\">
    <ul>
        <li>
            <span>";
        // line 15
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_IP")), "html", null, true);
        echo "</span><strong ";
        if (($this->getAttribute($this->getContext($context, "visitData", true), "providerName", array(), "any", true, true) && (!twig_test_empty($this->getAttribute($this->getContext($context, "visitData"), "providerName"))))) {
            echo "title=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Provider_ColumnProvider")), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "visitData"), "providerName"), "html", null, true);
            echo "\"";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "visitData"), "visitIp"), "html", null, true);
        echo "</strong>
        </li>
        <li class=\"visitor-profile-id\">
            <span>";
        // line 18
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Id"))), "html", null, true);
        echo "</span>
            ";
        // line 19
        if (array_key_exists("widgetizedLink", $context)) {
            echo "<a class=\"visitor-profile-widget-link\" href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "widgetizedLink"), "html", null, true);
            echo "\" target=\"_blank\" title=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Widgetize_OpenInNewWindow")), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Live_VisitorProfile")), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Id"))), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "visitData"), "visitorId"), "html", null, true);
            echo "\">";
        }
        // line 20
        echo "                <strong>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "visitData"), "visitorId"), "html", null, true);
        echo "</strong>
            ";
        // line 21
        if (array_key_exists("widgetizedLink", $context)) {
            echo "</a>";
        }
        // line 22
        echo "            <a class=\"visitor-profile-export\" href=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "exportLink"), "html", null, true);
        echo "\" target=\"_blank\" title=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ExportThisReport")), "html", null, true);
        echo "\" style=\"visibility:hidden\">
                <img src=\"plugins/Morpheus/images/export.png\"/>
            </a>
        </li>
        <li>
            ";
        // line 27
        if ($this->getAttribute($this->getContext($context, "visitData", true), "browserName", array(), "any", true, true)) {
            // line 28
            echo "            <div class=\"visitor-profile-browser\" title=\"";
            if ($this->getAttribute($this->getContext($context, "visitData", true), "plugins", array(), "any", true, true)) {
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserSettings_BrowserWithPluginsEnabled", $this->getAttribute($this->getContext($context, "visitData"), "browserName"), $this->getAttribute($this->getContext($context, "visitData"), "plugins"))), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserSettings_BrowserWithNoPluginsEnabled", $this->getAttribute($this->getContext($context, "visitData"), "browserName"))), "html", null, true);
            }
            echo "\">
                ";
            // line 29
            if ($this->getAttribute($this->getContext($context, "visitData", true), "browserIcon", array(), "any", true, true)) {
                echo "<img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "visitData"), "browserIcon"), "html", null, true);
                echo "\"/>";
            }
            echo "<span>";
            echo twig_escape_filter($this->env, $this->getAttribute(twig_split_filter($this->getAttribute($this->getContext($context, "visitData"), "browserName"), " "), 0, array(), "array"), "html", null, true);
            echo "</span>
            </div>
            ";
        }
        // line 32
        echo "
            <div class=\"visitor-profile-os\">
                ";
        // line 34
        if ($this->getAttribute($this->getContext($context, "visitData", true), "operatingSystemIcon", array(), "any", true, true)) {
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "visitData"), "operatingSystemIcon"), "html", null, true);
            echo "\"/>";
        }
        if ($this->getAttribute($this->getContext($context, "visitData", true), "operatingSystemShortName", array(), "any", true, true)) {
            echo "<span>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "visitData"), "operatingSystemShortName"), "html", null, true);
            echo "</span>";
        }
        // line 35
        echo "            </div>
        </li>
        ";
        // line 37
        if ($this->getAttribute($this->getContext($context, "visitData", true), "resolution", array(), "any", true, true)) {
            echo "<li><span>";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserSettings_ColumnResolution")), "html", null, true);
            echo "</span><strong>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "visitData"), "resolution"), "html", null, true);
            echo "</strong></li>";
        }
        // line 38
        echo "        ";
        if (array_key_exists("visitReferralSummary", $context)) {
            // line 39
            $context["keywordNotDefined"] = call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_NotDefined", call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ColumnKeyword"))));
            // line 40
            echo "<li>
            <span>";
            // line 41
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_DateRangeFrom")), "html", null, true);
            echo "</span>
            <strong ";
            // line 42
            if ((($this->getAttribute($this->getContext($context, "visitData"), "referrerType") == "search") && !twig_in_filter("(", $this->getContext($context, "visitReferralSummary")))) {
                echo "title=\"";
                echo twig_escape_filter($this->env, $this->getContext($context, "keywordNotDefined"), "html", null, true);
                echo "\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getContext($context, "visitReferralSummary"), "html", null, true);
            echo "</strong>
        </li>
        ";
        }
        // line 45
        echo "    </ul>
</div>
<div class=\"visitor-profile-latest-visit-column\">
    ";
        // line 48
        if ($this->getAttribute($this->getContext($context, "visitData", true), "customVariables", array(), "any", true, true)) {
            // line 49
            echo "    <ul>
        ";
            // line 50
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "visitData"), "customVariables"));
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
            foreach ($context['_seq'] as $context["id"] => $context["customVariable"]) {
                // line 51
                echo "        ";
                if (($this->getAttribute($this->getContext($context, "loop"), "index0") < 4)) {
                    // line 52
                    echo "            ";
                    echo $context["macros"]->getcustomVar($this->getContext($context, "id"), $this->getContext($context, "customVariable"));
                    echo "
        ";
                }
                // line 54
                echo "        ";
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
            unset($context['_seq'], $context['_iterated'], $context['id'], $context['customVariable'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "    </ul>
    ";
        }
        // line 57
        echo "    ";
        if (($this->getAttribute($this->getContext($context, "visitData", true), "customVariables", array(), "any", true, true) && (twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "visitData"), "customVariables")) > 4))) {
            // line 58
            echo "    <ul class=\"visitor-profile-extra-cvars\" style=\"display:none;\">
        ";
            // line 59
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "visitData"), "customVariables"));
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
            foreach ($context['_seq'] as $context["id"] => $context["customVariable"]) {
                // line 60
                echo "        ";
                if (($this->getAttribute($this->getContext($context, "loop"), "index0") >= 4)) {
                    // line 61
                    echo "            ";
                    echo $context["macros"]->getcustomVar($this->getContext($context, "id"), $this->getContext($context, "customVariable"));
                    echo "
        ";
                }
                // line 63
                echo "        ";
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
            unset($context['_seq'], $context['_iterated'], $context['id'], $context['customVariable'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "    </ul>
    <p class=\"visitor-profile-see-more-cvars\"><a href=\"#\">&#x25bc;</a></p>
    ";
        }
        // line 67
        echo "</div>
";
    }

    // line 1
    public function getcustomVar($_id = null, $_customVariable = null)
    {
        $context = $this->env->mergeGlobals(array(
            "id" => $_id,
            "customVariable" => $_customVariable,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    ";
            $context["name"] = ("customVariableName" . $this->getContext($context, "id"));
            // line 3
            echo "    ";
            $context["value"] = ("customVariableValue" . $this->getContext($context, "id"));
            // line 4
            echo "    <li><span>";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('truncate')->getCallable(), array($this->getAttribute($this->getContext($context, "customVariable"), $this->getContext($context, "name"), array(), "array"), 30)), "html", null, true);
            echo "</span>";
            if ((twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "customVariable"), $this->getContext($context, "value"), array(), "array")) > 0)) {
                echo "<strong>";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('truncate')->getCallable(), array($this->getAttribute($this->getContext($context, "customVariable"), $this->getContext($context, "value"), array(), "array"), 50)), "html", null, true);
                echo "</strong>";
            }
            echo "</li>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@Live/getSingleVisitSummary.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  295 => 2,  283 => 1,  278 => 67,  273 => 64,  253 => 61,  250 => 60,  233 => 59,  230 => 58,  227 => 57,  223 => 55,  209 => 54,  203 => 52,  200 => 51,  180 => 49,  161 => 42,  157 => 41,  154 => 40,  152 => 39,  149 => 38,  141 => 37,  137 => 35,  126 => 34,  122 => 32,  99 => 27,  84 => 21,  79 => 20,  65 => 19,  61 => 18,  45 => 15,  40 => 12,  28 => 9,  23 => 8,  474 => 146,  468 => 144,  462 => 142,  460 => 141,  455 => 138,  453 => 137,  446 => 133,  436 => 126,  426 => 124,  409 => 122,  402 => 119,  399 => 116,  396 => 114,  394 => 113,  392 => 112,  389 => 111,  386 => 109,  383 => 107,  380 => 105,  378 => 104,  375 => 103,  373 => 102,  370 => 101,  362 => 98,  359 => 96,  357 => 95,  355 => 94,  338 => 92,  334 => 90,  329 => 87,  316 => 83,  312 => 82,  306 => 81,  301 => 4,  298 => 3,  296 => 77,  284 => 74,  280 => 73,  274 => 72,  264 => 70,  261 => 69,  259 => 63,  255 => 65,  249 => 62,  244 => 61,  241 => 60,  237 => 58,  196 => 57,  193 => 56,  190 => 55,  187 => 54,  183 => 50,  178 => 48,  173 => 45,  170 => 48,  167 => 47,  165 => 46,  160 => 45,  140 => 43,  138 => 42,  121 => 41,  118 => 40,  110 => 29,  106 => 38,  101 => 28,  94 => 31,  92 => 30,  88 => 22,  82 => 27,  78 => 26,  73 => 25,  67 => 24,  58 => 18,  54 => 17,  50 => 16,  38 => 7,  34 => 6,  30 => 5,  27 => 4,  21 => 7,  19 => 6,);
    }
}
