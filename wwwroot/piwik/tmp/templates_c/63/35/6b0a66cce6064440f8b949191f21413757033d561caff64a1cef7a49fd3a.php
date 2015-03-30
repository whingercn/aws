<?php

/* @CoreHome/_notifications.twig */
class __TwigTemplate_63356b0a66cce6064440f8b949191f21413757033d561caff64a1cef7a49fd3a extends Twig_Template
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
        echo "<div id=\"notificationContainer\">
    ";
        // line 2
        if (twig_length_filter($this->env, $this->getContext($context, "notifications"))) {
            // line 3
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "notifications"));
            foreach ($context['_seq'] as $context["notificationId"] => $context["n"]) {
                // line 4
                echo "
            ";
                // line 5
                echo call_user_func_array($this->env->getFilter('notification')->getCallable(), array($this->getAttribute($this->getContext($context, "n"), "message"), array("id" => $this->getContext($context, "notificationId"), "type" => $this->getAttribute($this->getContext($context, "n"), "type"), "title" => $this->getAttribute($this->getContext($context, "n"), "title"), "noclear" => $this->getAttribute($this->getContext($context, "n"), "hasNoClear"), "context" => $this->getAttribute($this->getContext($context, "n"), "context"), "raw" => $this->getAttribute($this->getContext($context, "n"), "raw")), false));
                echo "

        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['notificationId'], $context['n'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            echo "    ";
        }
        // line 9
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "@CoreHome/_notifications.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 18,  55 => 15,  36 => 7,  241 => 35,  239 => 34,  228 => 33,  216 => 29,  214 => 28,  190 => 23,  181 => 20,  178 => 19,  172 => 18,  161 => 15,  157 => 14,  126 => 6,  118 => 3,  115 => 2,  103 => 17,  83 => 55,  65 => 50,  38 => 2,  28 => 38,  25 => 32,  272 => 29,  266 => 28,  260 => 27,  256 => 26,  250 => 25,  247 => 24,  233 => 23,  227 => 75,  219 => 73,  211 => 71,  209 => 70,  203 => 27,  192 => 64,  186 => 62,  183 => 61,  173 => 59,  168 => 17,  165 => 16,  159 => 55,  156 => 54,  154 => 13,  151 => 52,  147 => 50,  145 => 49,  142 => 12,  125 => 45,  119 => 43,  113 => 41,  102 => 36,  98 => 35,  93 => 32,  90 => 22,  81 => 19,  72 => 16,  70 => 15,  67 => 14,  60 => 12,  26 => 4,  49 => 12,  33 => 4,  52 => 5,  21 => 2,  24 => 3,  144 => 38,  138 => 36,  131 => 47,  128 => 46,  108 => 39,  104 => 26,  100 => 25,  96 => 24,  87 => 21,  85 => 21,  80 => 20,  77 => 11,  71 => 52,  68 => 13,  62 => 49,  59 => 16,  31 => 6,  27 => 1,  23 => 3,  19 => 1,  143 => 46,  140 => 45,  136 => 35,  133 => 36,  130 => 35,  123 => 22,  121 => 4,  116 => 29,  114 => 17,  112 => 20,  110 => 40,  105 => 13,  92 => 16,  89 => 8,  86 => 7,  78 => 48,  75 => 17,  73 => 45,  69 => 8,  63 => 6,  58 => 48,  53 => 10,  50 => 9,  48 => 15,  44 => 9,  41 => 8,  39 => 8,  35 => 6,  32 => 5,  30 => 7,  22 => 2,  56 => 35,  54 => 11,  51 => 45,  47 => 8,  45 => 44,  42 => 9,  40 => 5,  37 => 10,  34 => 42,  29 => 4,);
    }
}
