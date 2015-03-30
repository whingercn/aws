<?php

/* @Live/getVisitList.twig */
class __TwigTemplate_9e45bdfb41bddec0a38efdad843a89aba4a2ef03ccdf64e7edc9d64d1e88c9a9 extends Twig_Template
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "visits"), "getRows", array(), "method"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["visitInfo"]) {
            // line 2
            echo "<li>
    <div>
        <div class=\"visitor-profile-visit-title-row\">
            <h2 class=\"visitor-profile-visit-title\" data-idvisit=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "visitInfo"), "getColumn", array(0 => "idVisit"), "method"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Live_ClickToViewMoreAboutVisit")), "html", null, true);
            echo "\">
                ";
            // line 6
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Visit")), "html", null, true);
            echo " #";
            echo twig_escape_filter($this->env, $this->getContext($context, "startCounter"), "html", null, true);
            echo "
            </h2>
            ";
            // line 8
            if (($this->getAttribute($this->getContext($context, "visitInfo"), "getColumn", array(0 => "visitDuration"), "method") != 0)) {
                // line 9
                echo "                <span>&nbsp;- (";
                echo $this->getAttribute($this->getContext($context, "visitInfo"), "getColumn", array(0 => "visitDurationPretty"), "method");
                echo ")</span>
            ";
            }
            // line 11
            echo "            <span class=\"visitor-profile-date\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "visitInfo"), "getColumn", array(0 => "serverDateTimePrettyFirstAction"), "method"), "html", null, true);
            echo "\">
                ";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "visitInfo"), "getColumn", array(0 => "serverDateTimePrettyFirstAction"), "method"), "html", null, true);
            echo "
            </span>
        </div>
        <ol class=\"visitor-profile-actions\">
            ";
            // line 16
            $this->env->loadTemplate("@Live/_actionsList.twig")->display(array_merge($context, array("actionDetails" => $this->getAttribute($this->getContext($context, "visitInfo"), "getColumn", array(0 => "actionDetails"), "method"), "clientSideParameters" => array("filterEcommerce" => false, "idSite" => $this->getContext($context, "idSite"), "pageUrlNotDefined" => call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_NotDefined", call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Actions_ColumnPageURL"))))), "overrideLinkStyle" => false)));
            // line 23
            echo "        </ol>
    </div>
</li>
";
            // line 26
            $context["startCounter"] = ($this->getContext($context, "startCounter") + 1);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['visitInfo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "@Live/getVisitList.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 26,  76 => 23,  74 => 16,  62 => 11,  56 => 9,  47 => 6,  41 => 5,  36 => 2,  295 => 2,  283 => 1,  278 => 67,  273 => 64,  253 => 61,  250 => 60,  233 => 59,  230 => 58,  227 => 57,  223 => 55,  209 => 54,  203 => 52,  200 => 51,  180 => 49,  161 => 42,  157 => 41,  154 => 40,  152 => 39,  149 => 38,  141 => 37,  137 => 35,  126 => 34,  122 => 32,  99 => 27,  84 => 21,  79 => 20,  65 => 19,  61 => 18,  45 => 15,  40 => 12,  28 => 9,  23 => 8,  474 => 146,  468 => 144,  462 => 142,  460 => 141,  455 => 138,  453 => 137,  446 => 133,  436 => 126,  426 => 124,  409 => 122,  402 => 119,  399 => 116,  396 => 114,  394 => 113,  392 => 112,  389 => 111,  386 => 109,  383 => 107,  380 => 105,  378 => 104,  375 => 103,  373 => 102,  370 => 101,  362 => 98,  359 => 96,  357 => 95,  355 => 94,  338 => 92,  334 => 90,  329 => 87,  316 => 83,  312 => 82,  306 => 81,  301 => 4,  298 => 3,  296 => 77,  284 => 74,  280 => 73,  274 => 72,  264 => 70,  261 => 69,  259 => 63,  255 => 65,  249 => 62,  244 => 61,  241 => 60,  237 => 58,  196 => 57,  193 => 56,  190 => 55,  187 => 54,  183 => 50,  178 => 48,  173 => 45,  170 => 48,  167 => 47,  165 => 46,  160 => 45,  140 => 43,  138 => 42,  121 => 41,  118 => 40,  110 => 29,  106 => 38,  101 => 28,  94 => 31,  92 => 30,  88 => 22,  82 => 27,  78 => 26,  73 => 25,  67 => 12,  58 => 18,  54 => 8,  50 => 16,  38 => 7,  34 => 6,  30 => 5,  27 => 4,  21 => 7,  19 => 1,);
    }
}
