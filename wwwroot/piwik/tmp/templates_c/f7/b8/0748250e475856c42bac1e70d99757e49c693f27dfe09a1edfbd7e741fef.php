<?php

/* @CoreHome/_indexContent.twig */
class __TwigTemplate_f7b80748250e475856c42bac1e70d99757e49c693f27dfe09a1edfbd7e741fef extends Twig_Template
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
        $context["ajax"] = $this->env->loadTemplate("ajaxMacros.twig");
        // line 2
        echo "<div class=\"pageWrap\">
    ";
        // line 3
        $this->env->loadTemplate("@CoreHome/_notifications.twig")->display($context);
        // line 4
        echo "    <div class=\"top_controls\">
        ";
        // line 5
        $this->env->loadTemplate("@CoreHome/_periodSelect.twig")->display($context);
        // line 6
        echo "        ";
        echo call_user_func_array($this->env->getFunction('postEvent')->getCallable(), array("Template.nextToCalendar"));
        echo "
        ";
        // line 7
        $template = $this->env->resolveTemplate($context["dashboardSettingsControl"]->getTemplateFile());
        $template->display(array_merge($context, $context["dashboardSettingsControl"]->getTemplateVars()));
        // line 8
        echo "        ";
        $this->env->loadTemplate("@CoreHome/_headerMessage.twig")->display($context);
        // line 9
        echo "        ";
        echo $context["ajax"]->getrequestErrorDiv(((array_key_exists("emailSuperUser", $context)) ? (_twig_default_filter($this->getContext($context, "emailSuperUser"), "")) : ("")));
        echo "
    </div>

    ";
        // line 12
        echo $context["ajax"]->getloadingDiv();
        echo "

    <div id=\"content\" class=\"home\">
        ";
        // line 15
        if ($this->getContext($context, "content")) {
            echo twig_escape_filter($this->env, $this->getContext($context, "content"), "html", null, true);
        }
        // line 16
        echo "    </div>
    <div class=\"clear\"></div>
</div>

<br/><br/>";
    }

    public function getTemplateName()
    {
        return "@CoreHome/_indexContent.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 15,  36 => 7,  241 => 35,  239 => 34,  228 => 33,  216 => 29,  214 => 28,  190 => 23,  181 => 20,  178 => 19,  172 => 18,  161 => 15,  157 => 14,  126 => 6,  118 => 3,  115 => 2,  103 => 1,  83 => 55,  65 => 50,  38 => 43,  28 => 38,  25 => 32,  272 => 29,  266 => 28,  260 => 27,  256 => 26,  250 => 25,  247 => 24,  233 => 23,  227 => 75,  219 => 73,  211 => 71,  209 => 70,  203 => 27,  192 => 64,  186 => 62,  183 => 61,  173 => 59,  168 => 17,  165 => 16,  159 => 55,  156 => 54,  154 => 13,  151 => 52,  147 => 50,  145 => 49,  142 => 12,  125 => 45,  119 => 43,  113 => 41,  102 => 36,  98 => 35,  93 => 32,  90 => 22,  81 => 19,  72 => 16,  70 => 15,  67 => 14,  60 => 12,  26 => 4,  49 => 12,  33 => 4,  52 => 17,  21 => 2,  24 => 3,  144 => 38,  138 => 36,  131 => 47,  128 => 46,  108 => 39,  104 => 26,  100 => 25,  96 => 24,  87 => 21,  85 => 21,  80 => 20,  77 => 54,  71 => 52,  68 => 13,  62 => 49,  59 => 16,  31 => 6,  27 => 4,  23 => 3,  19 => 1,  143 => 46,  140 => 45,  136 => 35,  133 => 36,  130 => 35,  123 => 22,  121 => 4,  116 => 29,  114 => 17,  112 => 28,  110 => 40,  105 => 13,  92 => 59,  89 => 8,  86 => 7,  78 => 48,  75 => 17,  73 => 45,  69 => 44,  63 => 9,  58 => 48,  53 => 10,  50 => 9,  48 => 15,  44 => 8,  41 => 8,  39 => 8,  35 => 6,  32 => 26,  30 => 7,  22 => 26,  56 => 35,  54 => 11,  51 => 45,  47 => 8,  45 => 44,  42 => 9,  40 => 5,  37 => 10,  34 => 42,  29 => 5,);
    }
}
