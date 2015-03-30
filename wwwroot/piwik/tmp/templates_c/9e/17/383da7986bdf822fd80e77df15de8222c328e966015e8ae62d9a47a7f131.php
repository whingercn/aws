<?php

/* @Installation/layout.twig */
class __TwigTemplate_9e17383da7986bdf822fd80e77df15de8222c328e966015e8ae62d9a47a7f131 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
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
    <meta charset=\"utf-8\">
    <title>Piwik &rsaquo; ";
        // line 8
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Installation_Installation")), "html", null, true);
        echo "</title>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"libs/jquery/themes/base/jquery-ui.css\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"index.php?module=Installation&action=getBaseCss\"/>
    <link rel=\"shortcut icon\" href=\"plugins/CoreHome/images/favicon.ico\"/>
    <script type=\"text/javascript\" src=\"libs/jquery/jquery.js\"></script>
    <script type=\"text/javascript\" src=\"libs/jquery/jquery-ui.js\"></script>
    <script type=\"text/javascript\" src=\"libs/angularjs/angular.min.js\"></script>
    <script type=\"text/javascript\" src=\"libs/angularjs/angular-sanitize.min.js\"></script>
    <script type=\"text/javascript\" src=\"libs/angularjs/angular-animate.min.js\"></script>
    <script type=\"text/javascript\" src=\"libs/angularjs/angular-cookies.min.js\"></script>
    <script type=\"text/javascript\" src=\"plugins/CoreHome/angularjs/common/services/service.js\"></script>
    <script type=\"text/javascript\" src=\"plugins/CoreHome/angularjs/common/filters/filter.js\"></script>
    <script type=\"text/javascript\" src=\"plugins/CoreHome/angularjs/common/filters/translate.js\"></script>
    <script type=\"text/javascript\" src=\"plugins/CoreHome/angularjs/common/directives/directive.js\"></script>
    <script type=\"text/javascript\" src=\"plugins/CoreHome/angularjs/common/directives/focus-anywhere-but-here.js\"></script>
    <script type=\"text/javascript\" src=\"plugins/CoreHome/angularjs/piwikAppConfig.js\"></script>
    <script type=\"text/javascript\" src=\"plugins/CoreHome/angularjs/piwikApp.js\"></script>
    <script type=\"text/javascript\" src=\"plugins/Installation/javascripts/installation.js\"></script>

    <link rel=\"stylesheet\" type=\"text/css\" href=\"plugins/Installation/stylesheets/installation.css\"/>
    ";
        // line 28
        if ((call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_LayoutDirection")) == "rtl")) {
            // line 29
            echo "        <link rel=\"stylesheet\" type=\"text/css\" href=\"plugins/Morpheus/stylesheets/rtl.css\"/>
    ";
        }
        // line 31
        echo "</head>
<body ng-app=\"app\">
<div id=\"installationPage\">
    <div id=\"content\">
        <div id=\"logo\">
            <img id=\"title\" src=\"plugins/Morpheus/images/logo.png\"/> &nbsp;&nbsp;&nbsp;<span
                    id=\"subtitle\"># ";
        // line 37
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_OpenSourceWebAnalytics")), "html", null, true);
        echo "</span>
        </div>
        <div style=\"float:right;\" id=\"topRightBar\">
            <br/>
            ";
        // line 41
        echo call_user_func_array($this->env->getFunction('postEvent')->getCallable(), array("Template.topBar"));
        echo "
        </div>
        <div class=\"both\"></div>

        <div id=\"generalInstall\">
            ";
        // line 46
        $this->env->loadTemplate("@Installation/_allSteps.twig")->display($context);
        // line 47
        echo "        </div>

        <div id=\"detailInstall\">
            ";
        // line 50
        ob_start();
        // line 51
        echo "            <p class=\"nextStep\">
                <a class=\"submit\" href=\"";
        // line 52
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('linkTo')->getCallable(), array(array("action" => $this->getContext($context, "nextModuleName"), "token_auth" => null, "method" => null))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Next")), "html", null, true);
        echo " &raquo;</a>
            </p>
            ";
        $context["nextButton"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 55
        echo "            ";
        if ((array_key_exists("showNextStepAtTop", $context) && $this->getContext($context, "showNextStepAtTop"))) {
            // line 56
            echo "                ";
            echo twig_escape_filter($this->env, $this->getContext($context, "nextButton"), "html", null, true);
            echo "
            ";
        }
        // line 58
        echo "            ";
        $this->displayBlock('content', $context, $blocks);
        // line 59
        echo "            ";
        if ($this->getContext($context, "showNextStep")) {
            // line 60
            echo "                ";
            echo twig_escape_filter($this->env, $this->getContext($context, "nextButton"), "html", null, true);
            echo "
            ";
        }
        // line 62
        echo "        </div>

        <div class=\"both\"></div>

        <br/>
        <br/>

        <h3>";
        // line 69
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Installation_InstallationStatus")), "html", null, true);
        echo "</h3>

        <div id=\"progressbar\" data-progress=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->getContext($context, "percentDone"), "html", null, true);
        echo "\"></div>
        ";
        // line 72
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Installation_PercentDone", $this->getContext($context, "percentDone"))), "html", null, true);
        echo "
    </div>
</div>
</body>
</html>
";
    }

    // line 58
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "@Installation/layout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 58,  140 => 72,  136 => 71,  131 => 69,  122 => 62,  116 => 60,  113 => 59,  110 => 58,  104 => 56,  101 => 55,  93 => 52,  90 => 51,  88 => 50,  83 => 47,  81 => 46,  73 => 41,  66 => 37,  54 => 29,  29 => 8,  20 => 1,  85 => 37,  82 => 36,  80 => 35,  58 => 31,  52 => 28,  45 => 9,  39 => 7,  37 => 6,  31 => 4,  28 => 3,);
    }
}
