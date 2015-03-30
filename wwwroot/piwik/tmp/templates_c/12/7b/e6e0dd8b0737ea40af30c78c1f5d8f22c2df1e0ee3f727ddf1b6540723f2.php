<?php

/* admin.twig */
class __TwigTemplate_127be6e0dd8b0737ea40af30c78c1f5d8f22c2df1e0ee3f727ddf1b6540723f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<!--[if lt IE 9 ]>
<html class=\"old-ie\" id=\"ng-app\" ng-app=\"piwikApp\"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html id=\"ng-app\" ng-app=\"piwikApp\"><!--<![endif]-->
    <head>
";
        // line 7
        $this->displayBlock('head', $context, $blocks);
        // line 23
        echo "    </head>
    <body ng-app=\"app\" class=\"";
        // line 24
        echo call_user_func_array($this->env->getFunction('postEvent')->getCallable(), array("Template.bodyClass", "admin"));
        echo "\">
    ";
        // line 25
        $context["isAdminLayout"] = true;
        // line 26
        echo "    ";
        $this->env->loadTemplate("_iframeBuster.twig")->display($context);
        // line 27
        echo "    ";
        $this->env->loadTemplate("@CoreHome/_javaScriptDisabled.twig")->display($context);
        // line 28
        echo "
        <div id=\"root\">
            ";
        // line 30
        $this->env->loadTemplate("@CoreHome/_topScreen.twig")->display($context);
        // line 31
        echo "
            ";
        // line 32
        $context["ajax"] = $this->env->loadTemplate("ajaxMacros.twig");
        // line 33
        echo "            ";
        echo $context["ajax"]->getrequestErrorDiv(((array_key_exists("emailSuperUser", $context)) ? (_twig_default_filter($this->getContext($context, "emailSuperUser"), "")) : ("")));
        echo "
            ";
        // line 34
        echo call_user_func_array($this->env->getFunction('postEvent')->getCallable(), array("Template.beforeContent", "admin", $this->getContext($context, "currentModule")));
        echo "

            <div id=\"container\">

                ";
        // line 38
        if (((!array_key_exists("showMenu", $context)) || $this->getContext($context, "showMenu"))) {
            // line 39
            echo "                    ";
            $this->env->loadTemplate("@CoreAdminHome/_menu.twig")->display($context);
            // line 40
            echo "                ";
        }
        // line 41
        echo "
                <div id=\"content\" class=\"admin\">

                    ";
        // line 44
        $this->env->loadTemplate("@CoreHome/_headerMessage.twig")->display($context);
        // line 45
        echo "                    ";
        $this->env->loadTemplate("@CoreHome/_notifications.twig")->display($context);
        // line 46
        echo "
                    <div class=\"ui-confirm\" id=\"alert\">
                        <h2></h2>
                        <input role=\"no\" type=\"button\" value=\"";
        // line 49
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Ok")), "html", null, true);
        echo "\"/>
                    </div>

                    ";
        // line 52
        $this->env->loadTemplate("@CoreHome/_warningInvalidHost.twig")->display($context);
        // line 53
        echo "
                    ";
        // line 54
        $this->displayBlock('content', $context, $blocks);
        // line 56
        echo "
                </div>
            </div>
        </div>
    </body>
</html>
";
    }

    // line 7
    public function block_head($context, array $blocks = array())
    {
        // line 8
        echo "            <meta charset=\"utf-8\">
\t\t\t<meta http-equiv=\"x-ua-compatible\" content=\"IE=EDGE,chrome=1\" >
            <title>";
        // line 10
        if ((!$this->getContext($context, "isCustomLogo"))) {
            echo "Piwik &rsaquo; ";
        }
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_Administration")), "html", null, true);
        echo "</title>
            <meta name=\"generator\" content=\"Piwik - free/libre analytics platform\"/>
            <link rel=\"shortcut icon\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, ((array_key_exists("customFavicon", $context)) ? (_twig_default_filter($this->getContext($context, "customFavicon"), "plugins/CoreHome/images/favicon.ico")) : ("plugins/CoreHome/images/favicon.ico")), "html", null, true);
        echo "\"/>

";
        // line 14
        $this->env->loadTemplate("@CoreHome/_favicon.twig")->display($context);
        // line 15
        $this->env->loadTemplate("_jsGlobalVariables.twig")->display($context);
        // line 16
        $this->env->loadTemplate("_piwikTag.twig")->display($context);
        // line 17
        $this->env->loadTemplate("_jsCssIncludes.twig")->display($context);
        // line 18
        echo "
            <!--[if IE]>
            <link rel=\"stylesheet\" type=\"text/css\" href=\"plugins/Morpheus/stylesheets/ieonly.css\"/>
            <![endif]-->
        ";
    }

    // line 54
    public function block_content($context, array $blocks = array())
    {
        // line 55
        echo "                    ";
    }

    public function getTemplateName()
    {
        return "admin.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 55,  151 => 54,  143 => 18,  141 => 17,  139 => 16,  137 => 15,  130 => 12,  122 => 10,  118 => 8,  115 => 7,  105 => 56,  100 => 53,  98 => 52,  87 => 46,  84 => 45,  77 => 41,  74 => 40,  71 => 39,  69 => 38,  62 => 34,  57 => 33,  52 => 31,  50 => 30,  46 => 28,  40 => 26,  38 => 25,  34 => 24,  29 => 7,  21 => 1,  527 => 173,  520 => 168,  501 => 165,  489 => 163,  472 => 162,  466 => 159,  460 => 155,  456 => 153,  441 => 151,  437 => 150,  434 => 149,  432 => 148,  428 => 147,  422 => 146,  416 => 145,  411 => 143,  405 => 142,  399 => 141,  395 => 140,  389 => 139,  382 => 135,  376 => 132,  372 => 131,  369 => 130,  362 => 127,  360 => 126,  355 => 125,  353 => 124,  347 => 120,  344 => 119,  336 => 118,  332 => 116,  326 => 114,  320 => 112,  318 => 111,  313 => 109,  306 => 105,  302 => 104,  298 => 103,  296 => 102,  293 => 101,  285 => 97,  282 => 96,  278 => 95,  273 => 94,  271 => 93,  268 => 92,  266 => 91,  263 => 90,  256 => 86,  251 => 84,  246 => 82,  243 => 81,  241 => 80,  235 => 76,  216 => 73,  205 => 72,  188 => 71,  182 => 68,  170 => 59,  166 => 58,  159 => 54,  153 => 53,  148 => 51,  142 => 50,  135 => 14,  127 => 40,  114 => 38,  107 => 37,  103 => 54,  99 => 35,  92 => 49,  86 => 28,  82 => 44,  76 => 24,  72 => 23,  64 => 18,  60 => 17,  55 => 32,  47 => 10,  43 => 27,  39 => 8,  31 => 23,  28 => 3,);
    }
}
