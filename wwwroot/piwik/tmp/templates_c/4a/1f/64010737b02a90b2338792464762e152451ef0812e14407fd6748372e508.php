<?php

/* @CoreAdminHome/_menu.twig */
class __TwigTemplate_4a1f64010737b02a90b2338792464762e152451ef0812e14407fd6748372e508 extends Twig_Template
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
        if ((twig_length_filter($this->env, $this->getContext($context, "adminMenu")) > 1)) {
            // line 2
            echo "    <div class=\"Menu Menu--admin\">
        <ul class=\"Menu-tabList\">
        ";
            // line 4
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "adminMenu"));
            foreach ($context['_seq'] as $context["name"] => $context["submenu"]) {
                // line 5
                echo "            ";
                if ($this->getAttribute($this->getContext($context, "submenu"), "_hasSubmenu")) {
                    // line 6
                    echo "            <li>
                <span>";
                    // line 7
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array($this->getContext($context, "name"))), "html", null, true);
                    echo "</span>
                <ul>
                ";
                    // line 9
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getContext($context, "submenu"));
                    foreach ($context['_seq'] as $context["sname"] => $context["url"]) {
                        // line 10
                        echo "                    ";
                        if ((twig_slice($this->env, $this->getContext($context, "sname"), 0, 1) != "_")) {
                            // line 11
                            echo "                    <li>
                        <a href='index.php";
                            // line 12
                            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('urlRewriteWithParameters')->getCallable(), array($this->getAttribute($this->getContext($context, "url"), "_url"))), "html", null, true);
                            echo "'
                           ";
                            // line 13
                            if ((array_key_exists("currentAdminMenuName", $context) && ($this->getContext($context, "sname") == $this->getContext($context, "currentAdminMenuName")))) {
                                echo "class='active'";
                            }
                            echo ">";
                            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array($this->getContext($context, "sname"))), "html", null, true);
                            echo "</a>
                    </li>
                    ";
                        }
                        // line 16
                        echo "                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['sname'], $context['url'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 17
                    echo "                </ul>
            </li>
            ";
                }
                // line 20
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['submenu'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "        </ul>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "@CoreAdminHome/_menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 21,  75 => 20,  70 => 17,  54 => 13,  44 => 10,  35 => 7,  32 => 6,  25 => 4,  19 => 1,  154 => 55,  151 => 54,  143 => 18,  141 => 17,  139 => 16,  137 => 15,  130 => 12,  122 => 10,  118 => 8,  115 => 7,  105 => 56,  100 => 53,  98 => 52,  87 => 46,  84 => 45,  77 => 41,  74 => 40,  71 => 39,  69 => 38,  62 => 34,  57 => 33,  52 => 31,  50 => 12,  46 => 28,  40 => 9,  38 => 25,  34 => 24,  29 => 5,  21 => 2,  527 => 173,  520 => 168,  501 => 165,  489 => 163,  472 => 162,  466 => 159,  460 => 155,  456 => 153,  441 => 151,  437 => 150,  434 => 149,  432 => 148,  428 => 147,  422 => 146,  416 => 145,  411 => 143,  405 => 142,  399 => 141,  395 => 140,  389 => 139,  382 => 135,  376 => 132,  372 => 131,  369 => 130,  362 => 127,  360 => 126,  355 => 125,  353 => 124,  347 => 120,  344 => 119,  336 => 118,  332 => 116,  326 => 114,  320 => 112,  318 => 111,  313 => 109,  306 => 105,  302 => 104,  298 => 103,  296 => 102,  293 => 101,  285 => 97,  282 => 96,  278 => 95,  273 => 94,  271 => 93,  268 => 92,  266 => 91,  263 => 90,  256 => 86,  251 => 84,  246 => 82,  243 => 81,  241 => 80,  235 => 76,  216 => 73,  205 => 72,  188 => 71,  182 => 68,  170 => 59,  166 => 58,  159 => 54,  153 => 53,  148 => 51,  142 => 50,  135 => 14,  127 => 40,  114 => 38,  107 => 37,  103 => 54,  99 => 35,  92 => 49,  86 => 28,  82 => 44,  76 => 24,  72 => 23,  64 => 16,  60 => 17,  55 => 32,  47 => 11,  43 => 27,  39 => 8,  31 => 23,  28 => 3,);
    }
}
