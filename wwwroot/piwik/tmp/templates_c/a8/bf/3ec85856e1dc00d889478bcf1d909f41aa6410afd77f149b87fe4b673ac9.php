<?php

/* @CoreHome/getDefaultIndexView.twig */
class __TwigTemplate_a8bf3ec85856e1dc00d889478bcf1d909f41aa6410afd77f149b87fe4b673ac9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("dashboard.twig");

        $this->blocks = array(
            'notification' => array($this, 'block_notification'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "dashboard.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_notification($context, array $blocks = array())
    {
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
";
        // line 5
        $this->env->loadTemplate("@CoreHome/_siteSelectHeader.twig")->display($context);
        // line 6
        echo "
";
        // line 7
        if ((array_key_exists("menu", $context) && $this->getContext($context, "menu"))) {
            // line 8
            echo "  ";
            $this->env->loadTemplate("@CoreHome/_menu.twig")->display($context);
        }
        // line 10
        echo "
";
        // line 11
        $this->env->loadTemplate("@CoreHome/_indexContent.twig")->display($context);
        // line 12
        echo "
";
    }

    public function getTemplateName()
    {
        return "@CoreHome/getDefaultIndexView.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 12,  54 => 11,  51 => 10,  47 => 8,  45 => 7,  42 => 6,  40 => 5,  37 => 4,  34 => 3,  29 => 2,);
    }
}
