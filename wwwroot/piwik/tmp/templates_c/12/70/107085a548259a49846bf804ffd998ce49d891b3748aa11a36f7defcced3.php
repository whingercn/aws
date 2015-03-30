<?php

/* genericForm.twig */
class __TwigTemplate_1270107085a548259a49846bf804ffd998ce49d891b3748aa11a36f7defcced3 extends Twig_Template
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
        if ($this->getAttribute($this->getContext($context, "form_data"), "errors")) {
            // line 2
            echo "\t<div class=\"warning\">
\t\t<img src=\"plugins/Morpheus/images/warning_medium.png\">
\t\t<strong>";
            // line 4
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Installation_PleaseFixTheFollowingErrors")), "html", null, true);
            echo ":</strong>
\t\t<ul>
            ";
            // line 6
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "form_data"), "errors"));
            foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
                // line 7
                echo "\t\t\t\t<li>";
                echo $this->getContext($context, "data");
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            echo "\t\t</ul>
\t</div>
";
        }
        // line 12
        echo "
<form ";
        // line 13
        echo $this->getAttribute($this->getContext($context, "form_data"), "attributes");
        echo ">
\t<div class=\"centrer\">
\t\t<table class=\"centrer\">
            ";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "element_list"));
        foreach ($context['_seq'] as $context["_key"] => $context["fieldname"]) {
            // line 17
            echo "\t\t\t\t";
            if (($this->getAttribute($this->getAttribute($this->getContext($context, "form_data"), $this->getContext($context, "fieldname"), array(), "array"), "type") == "checkbox")) {
                // line 18
                echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td colspan=2>";
                // line 19
                echo $this->getAttribute($this->getAttribute($this->getContext($context, "form_data"), $this->getContext($context, "fieldname"), array(), "array"), "html");
                echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t";
            } elseif ($this->getAttribute($this->getAttribute($this->getContext($context, "form_data"), $this->getContext($context, "fieldname"), array(), "array"), "label")) {
                // line 22
                echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
                // line 23
                echo $this->getAttribute($this->getAttribute($this->getContext($context, "form_data"), $this->getContext($context, "fieldname"), array(), "array"), "label");
                echo "</td>
\t\t\t\t\t\t<td>";
                // line 24
                echo $this->getAttribute($this->getAttribute($this->getContext($context, "form_data"), $this->getContext($context, "fieldname"), array(), "array"), "html");
                echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t";
            } elseif (($this->getAttribute($this->getAttribute($this->getContext($context, "form_data"), $this->getContext($context, "fieldname"), array(), "array"), "type") == "hidden")) {
                // line 27
                echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td colspan=2>";
                // line 28
                echo $this->getAttribute($this->getAttribute($this->getContext($context, "form_data"), $this->getContext($context, "fieldname"), array(), "array"), "html");
                echo "</td>
\t\t\t\t\t</tr>
\t\t\t\t";
            }
            // line 31
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fieldname'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "\t\t</table>
\t</div>

\t";
        // line 35
        echo $this->getAttribute($this->getAttribute($this->getContext($context, "form_data"), "submit"), "html");
        echo "
</form>
";
    }

    public function getTemplateName()
    {
        return "genericForm.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 35,  101 => 32,  95 => 31,  89 => 28,  86 => 27,  80 => 24,  76 => 23,  73 => 22,  67 => 19,  64 => 18,  61 => 17,  51 => 13,  48 => 12,  34 => 7,  30 => 6,  25 => 4,  21 => 2,  19 => 1,  59 => 16,  57 => 16,  54 => 14,  47 => 10,  43 => 9,  39 => 7,  37 => 6,  31 => 4,  28 => 3,);
    }
}
