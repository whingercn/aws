<?php

/* @CoreHome/_singleReport.twig */
class __TwigTemplate_60254921909bc2d729b4a216baba90653c1c213d8d28b5f3e7f65dcf7b2554a3 extends Twig_Template
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
        echo "<h2 piwik-enriched-headline>";
        echo twig_escape_filter($this->env, $this->getContext($context, "title"), "html", null, true);
        echo "</h2>
";
        // line 2
        echo $this->getContext($context, "report");
    }

    public function getTemplateName()
    {
        return "@CoreHome/_singleReport.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 2,  19 => 1,);
    }
}
