<?php

/* @Dashboard/index.twig */
class __TwigTemplate_091724f3cf5265401e310e50289f402b968b2807f117901319aee5ab0f1ea3c0 extends Twig_Template
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
        $this->env->loadTemplate("@Dashboard/_header.twig")->display($context);
        // line 2
        echo "<div class=\"top_controls\">
    ";
        // line 3
        $this->env->loadTemplate("@CoreHome/_periodSelect.twig")->display($context);
        // line 4
        echo "    ";
        echo call_user_func_array($this->env->getFunction('postEvent')->getCallable(), array("Template.nextToCalendar"));
        echo "
    ";
        // line 5
        $template = $this->env->resolveTemplate($context["dashboardSettingsControl"]->getTemplateFile());
        $template->display(array_merge($context, $context["dashboardSettingsControl"]->getTemplateVars()));
        // line 6
        echo "    <div id=\"Dashboard\" class=\"piwikTopControl\">
        <ul>
            ";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "dashboards"));
        foreach ($context['_seq'] as $context["_key"] => $context["dashboard"]) {
            // line 9
            echo "                <li class=\"dashboardMenuItem\" id=\"Dashboard_embeddedIndex_";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "dashboard"), "iddashboard"), "html", null, true);
            echo "\">
                    <a href=\"javascript:\$('#dashboardWidgetsArea').dashboard('loadDashboard', ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "dashboard"), "iddashboard"), "html", null, true);
            echo ");\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "dashboard"), "name"));
            echo "</a>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dashboard'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "        </ul>
    </div>
</div>
";
        // line 16
        $context["ajax"] = $this->env->loadTemplate("ajaxMacros.twig");
        // line 17
        echo $context["ajax"]->getloadingDiv();
        echo "
";
        // line 18
        $this->env->loadTemplate("@Dashboard/embeddedIndex.twig")->display($context);
        // line 19
        echo "</body>
</html>";
    }

    public function getTemplateName()
    {
        return "@Dashboard/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 19,  69 => 18,  65 => 17,  63 => 16,  58 => 13,  47 => 10,  42 => 9,  38 => 8,  34 => 6,  31 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
