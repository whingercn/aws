<?php

/* @API/listAllAPI.twig */
class __TwigTemplate_0da0320d36b7e65c780a89d595b45e895da2a0ce3a0dbe4d373326fa0cc7dbb8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("dashboard.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "dashboard.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["showMenu"] = false;
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "
";
        // line 6
        $this->env->loadTemplate("@CoreHome/_siteSelectHeader.twig")->display($context);
        // line 7
        echo "
<div class=\"page_api pageWrap\">

    <div class=\"top_controls\">
        ";
        // line 11
        $this->env->loadTemplate("@CoreHome/_periodSelect.twig")->display($context);
        // line 12
        echo "    </div>

    <h2>";
        // line 14
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("API_QuickDocumentationTitle")), "html", null, true);
        echo "</h2>

    <p>";
        // line 16
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("API_PluginDescription")), "html", null, true);
        echo "</p>

    <p>
        <strong>";
        // line 19
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("API_MoreInformation", "<a target='_blank' href='?module=Proxy&action=redirect&url=http://piwik.org/docs/analytics-api'>", "</a>", "<a target='_blank' href='?module=Proxy&action=redirect&url=http://piwik.org/docs/analytics-api/reference'>", "</a>"));
        echo "</strong>
    </p>

    <h2>";
        // line 22
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("API_UserAuthentication")), "html", null, true);
        echo "</h2>

    <p>
        ";
        // line 25
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("API_UsingTokenAuth", "<b>", "</b>", ""));
        echo "<br/>
        <span id='token_auth'>&amp;token_auth=<strong>";
        // line 26
        echo twig_escape_filter($this->env, $this->getContext($context, "token_auth"), "html", null, true);
        echo "</strong></span><br/>
        ";
        // line 27
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("API_KeepTokenSecret", "<b>", "</b>"));
        echo "
        ";
        // line 28
        echo $this->getContext($context, "list_api_methods_with_links");
        echo "
        <br/>
</div>
";
    }

    public function getTemplateName()
    {
        return "@API/listAllAPI.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 28,  81 => 27,  77 => 26,  73 => 25,  67 => 22,  61 => 19,  55 => 16,  50 => 14,  46 => 12,  44 => 11,  38 => 7,  36 => 6,  33 => 5,  30 => 4,  25 => 2,);
    }
}
