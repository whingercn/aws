<?php

/* @CoreHome/_menu.twig */
class __TwigTemplate_09c84a0a5e8c9ee5c1219459113fed29ac0b1352a011e71668fb87b730f92d3d extends Twig_Template
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
        // line 11
        echo "
";
        // line 26
        echo "
";
        // line 32
        echo "
";
        // line 38
        echo "
<div class=\"Menu--dashboard\">

    <ul class=\"Menu-tabList\">
        ";
        // line 42
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "menu"));
        foreach ($context['_seq'] as $context["level1"] => $context["level2"]) {
            // line 43
            echo "            <li id=\"";
            if ($this->getAttribute($this->getContext($context, "level2", true), "_url", array(), "any", true, true)) {
                echo $this->getAttribute($this, "getId", array(0 => $this->getAttribute($this->getContext($context, "level2"), "_url")), "method");
            }
            echo "\">
                <a ";
            // line 44
            if ($this->getAttribute($this->getContext($context, "level2", true), "_url", array(), "any", true, true)) {
                echo "href=\"#";
                echo $this->getAttribute($this, "getFirstUrl", array(0 => $this->getAttribute($this->getContext($context, "level2"), "_url")), "method");
                echo "\"";
            }
            // line 45
            echo "                   onclick=\"return piwikMenu.onItemClick(this);\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array($this->getContext($context, "level1"))), "html", null, true);
            echo "</a>
                <ul>

                ";
            // line 48
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "level2"));
            foreach ($context['_seq'] as $context["name"] => $context["urlParameters"]) {
                // line 49
                echo "                    ";
                if (($this->getAttribute($this->getContext($context, "urlParameters", true), "_url", array(), "any", true, true) && (!twig_test_iterable($this->getAttribute($this->getContext($context, "urlParameters"), "_url"))))) {
                    // line 50
                    echo "                        ";
                    echo $this->getAttribute($this, "groupedItem", array(0 => $this->getContext($context, "name"), 1 => $this->getAttribute($this->getContext($context, "urlParameters"), "_url")), "method");
                    echo "
                    ";
                } elseif ((twig_slice($this->env, $this->getContext($context, "name"), 0, 1) != "_")) {
                    // line 52
                    echo "                        ";
                    echo $this->getAttribute($this, "submenuItem", array(0 => $this->getContext($context, "name"), 1 => $this->getAttribute($this->getContext($context, "urlParameters"), "_url")), "method");
                    echo "
                    ";
                }
                // line 54
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['urlParameters'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "
                </ul>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['level1'], $context['level2'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "        <li id=\"Searchmenu\">
            <span piwik-quick-access></span>
        </li>
    </ul>

</div>
<div class=\"nav_sep\"></div>
";
    }

    // line 1
    public function getsubmenuItem($_name = null, $_url = null)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $_name,
            "url" => $_url,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    ";
            if ((twig_slice($this->env, $this->getContext($context, "name"), 0, 1) != "_")) {
                // line 3
                echo "        <li>
            <a href='#";
                // line 4
                echo twig_escape_filter($this->env, twig_slice($this->env, call_user_func_array($this->env->getFilter('urlRewriteWithParameters')->getCallable(), array($this->getContext($context, "url"))), 1), "html", null, true);
                echo "'
               onclick='return piwikMenu.onItemClick(this);'>
                ";
                // line 6
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array($this->getContext($context, "name"))), "html", null, true);
                echo "
            </a>
        </li>
    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 12
    public function getgroupedItem($_name = null, $_group = null)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $_name,
            "group" => $_group,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 13
            echo "    <li>
        <div piwik-menudropdown show-search=\"true\" menu-title=\"";
            // line 14
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array($this->getContext($context, "name"))), "html_attr");
            echo "\">
            ";
            // line 15
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "group"), "getItems"));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 16
                echo "                <a class=\"item\"
                   href='#";
                // line 17
                echo twig_escape_filter($this->env, twig_slice($this->env, call_user_func_array($this->env->getFilter('urlRewriteWithParameters')->getCallable(), array($this->getAttribute($this->getContext($context, "item"), "url"))), 1), "html", null, true);
                echo "'
                   ";
                // line 18
                if ($this->getAttribute($this->getContext($context, "item"), "tooltip")) {
                    echo "title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "tooltip"), "html_attr");
                    echo "\"";
                }
                // line 19
                echo "                   onclick='return piwikMenu.onItemClick(this);'>
                    ";
                // line 20
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array($this->getAttribute($this->getContext($context, "item"), "name"))), "html", null, true);
                echo "
                </a>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "        </div>
    </li>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 27
    public function getgetId($_urlParameters = null)
    {
        $context = $this->env->mergeGlobals(array(
            "urlParameters" => $_urlParameters,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 28
            if (twig_test_iterable($this->getContext($context, "urlParameters"))) {
                // line 29
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('urlRewriteWithParameters')->getCallable(), array($this->getContext($context, "urlParameters"))), "html", null, true);
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 33
    public function getgetFirstUrl($_urlParameters = null)
    {
        $context = $this->env->mergeGlobals(array(
            "urlParameters" => $_urlParameters,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 34
            if (twig_test_iterable($this->getContext($context, "urlParameters"))) {
                // line 35
                echo twig_escape_filter($this->env, twig_slice($this->env, call_user_func_array($this->env->getFilter('urlRewriteWithParameters')->getCallable(), array($this->getContext($context, "urlParameters"))), 1), "html", null, true);
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@CoreHome/_menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 35,  239 => 34,  228 => 33,  216 => 29,  214 => 28,  190 => 23,  181 => 20,  178 => 19,  172 => 18,  161 => 15,  157 => 14,  126 => 6,  118 => 3,  115 => 2,  103 => 1,  83 => 55,  65 => 50,  38 => 43,  28 => 38,  25 => 32,  272 => 29,  266 => 28,  260 => 27,  256 => 26,  250 => 25,  247 => 24,  233 => 23,  227 => 75,  219 => 73,  211 => 71,  209 => 70,  203 => 27,  192 => 64,  186 => 62,  183 => 61,  173 => 59,  168 => 17,  165 => 16,  159 => 55,  156 => 54,  154 => 13,  151 => 52,  147 => 50,  145 => 49,  142 => 12,  125 => 45,  119 => 43,  113 => 41,  102 => 36,  98 => 35,  93 => 32,  90 => 22,  81 => 19,  72 => 16,  70 => 15,  67 => 14,  60 => 12,  26 => 2,  49 => 7,  33 => 4,  52 => 17,  21 => 3,  24 => 3,  144 => 38,  138 => 36,  131 => 47,  128 => 46,  108 => 39,  104 => 26,  100 => 25,  96 => 24,  87 => 21,  85 => 21,  80 => 20,  77 => 54,  71 => 52,  68 => 13,  62 => 49,  59 => 8,  31 => 3,  27 => 4,  23 => 3,  19 => 11,  143 => 46,  140 => 45,  136 => 35,  133 => 36,  130 => 35,  123 => 22,  121 => 4,  116 => 29,  114 => 17,  112 => 28,  110 => 40,  105 => 13,  92 => 59,  89 => 8,  86 => 7,  78 => 48,  75 => 17,  73 => 45,  69 => 44,  63 => 9,  58 => 48,  53 => 10,  50 => 9,  48 => 15,  44 => 8,  41 => 8,  39 => 28,  35 => 6,  32 => 26,  30 => 7,  22 => 26,  56 => 35,  54 => 11,  51 => 45,  47 => 8,  45 => 44,  42 => 6,  40 => 5,  37 => 10,  34 => 42,  29 => 4,);
    }
}
