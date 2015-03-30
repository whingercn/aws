<?php

/* @Installation/_allSteps.twig */
class __TwigTemplate_e3e274319c5e2ba22c0cc883426273cb5794a25bbb87adfd994977821ba35169 extends Twig_Template
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
        echo "<ul>
    ";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "allStepsTitle"));
        foreach ($context['_seq'] as $context["stepId"] => $context["stepName"]) {
            // line 3
            echo "        ";
            if (($this->getContext($context, "currentStepId") > $this->getContext($context, "stepId"))) {
                // line 4
                echo "            <li class=\"pastStep\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array($this->getContext($context, "stepName"))), "html", null, true);
                echo "</li>
        ";
            } elseif (($this->getContext($context, "currentStepId") == $this->getContext($context, "stepId"))) {
                // line 6
                echo "            <li class=\"actualStep\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array($this->getContext($context, "stepName"))), "html", null, true);
                echo "</li>
        ";
            } else {
                // line 8
                echo "            <li class=\"futureStep\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array($this->getContext($context, "stepName"))), "html", null, true);
                echo "</li>
        ";
            }
            // line 10
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['stepId'], $context['stepName'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "@Installation/_allSteps.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 11,  47 => 10,  41 => 8,  35 => 6,  26 => 3,  22 => 2,  19 => 1,  150 => 58,  140 => 72,  136 => 71,  131 => 69,  122 => 62,  116 => 60,  113 => 59,  110 => 58,  104 => 56,  101 => 55,  93 => 52,  90 => 51,  88 => 50,  83 => 47,  81 => 46,  73 => 41,  66 => 37,  54 => 29,  29 => 4,  20 => 1,  85 => 37,  82 => 36,  80 => 35,  58 => 31,  52 => 28,  45 => 9,  39 => 7,  37 => 6,  31 => 4,  28 => 3,);
    }
}
