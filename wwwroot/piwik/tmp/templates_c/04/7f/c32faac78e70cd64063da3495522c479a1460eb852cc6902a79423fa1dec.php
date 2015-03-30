<?php

/* @CoreHome/_headerMessage.twig */
class __TwigTemplate_047fc32faac78e70cd64063da3495522c479a1460eb852cc6902a79423fa1dec extends Twig_Template
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
        // line 2
        $context["test_latest_version_available"] = "3.0";
        // line 3
        $context["test_piwikUrl"] = "http://demo.piwik.org/";
        // line 4
        ob_start();
        echo twig_escape_filter($this->env, (($this->getContext($context, "piwikUrl") == "http://demo.piwik.org/") || ($this->getContext($context, "piwikUrl") == "https://demo.piwik.org/")), "html", null, true);
        $context["isPiwikDemo"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 5
        echo "
";
        // line 6
        ob_start();
        // line 7
        echo "<div id=\"updateCheckLinkContainer\">
    <span class='loadingPiwik' style=\"display:none;\"><img src='plugins/Morpheus/images/loading-blue.gif'/></span>
    <img class=\"icon\" src=\"plugins/Morpheus/images/reload.png\"/>
    <a href=\"#\" id=\"checkForUpdates\"><em>";
        // line 10
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreHome_CheckForUpdates")), "html", null, true);
        echo "</em></a>
</div>
";
        $context["updateCheck"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 13
        echo "
";
        // line 14
        if ((($this->getContext($context, "isPiwikDemo") || (($this->getContext($context, "latest_version_available") && $this->getContext($context, "hasSomeViewAccess")) && (!$this->getContext($context, "isUserIsAnonymous")))) || (($this->getContext($context, "isSuperUser") && array_key_exists("adminMenu", $context)) && $this->getContext($context, "adminMenu")))) {
            // line 15
            echo "<span id=\"header_message\" class=\"";
            if (($this->getContext($context, "isPiwikDemo") || (!$this->getContext($context, "latest_version_available")))) {
                echo "header_info";
            } else {
                echo "header_alert";
            }
            echo "\">
    <span class=\"header_short\">
        ";
            // line 17
            if ($this->getContext($context, "isPiwikDemo")) {
                // line 18
                echo "            ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_YouAreViewingDemoShortMessage")), "html", null, true);
                echo "
        ";
            } elseif ($this->getContext($context, "latest_version_available")) {
                // line 20
                echo "            ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_NewUpdatePiwikX", $this->getContext($context, "latest_version_available"))), "html", null, true);
                echo "
        ";
            } elseif ((($this->getContext($context, "isSuperUser") && array_key_exists("adminMenu", $context)) && $this->getContext($context, "adminMenu"))) {
                // line 22
                echo "            ";
                echo $this->getContext($context, "updateCheck");
                echo "
        ";
            }
            // line 24
            echo "    </span>

    <span class=\"header_full\">
        ";
            // line 27
            if ($this->getContext($context, "isPiwikDemo")) {
                // line 28
                echo "            ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_YouAreViewingDemoShortMessage")), "html", null, true);
                echo "
            <br />
            ";
                // line 30
                echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_DownloadFullVersion", "<a href='http://piwik.org/'>", "</a>", "<a href='http://piwik.org'>piwik.org</a>"));
                echo "
            <br/>
        ";
            }
            // line 33
            echo "        ";
            if (($this->getContext($context, "latest_version_available") && $this->getContext($context, "isSuperUser"))) {
                // line 34
                echo "            ";
                echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_PiwikXIsAvailablePleaseUpdateNow", $this->getContext($context, "latest_version_available"), "<br /><a href='index.php?module=CoreUpdater&amp;action=newVersionAvailable'>", "</a>", "<a href='?module=Proxy&amp;action=redirect&amp;url=http://piwik.org/changelog/' target='_blank'>", "</a>"));
                echo "
            <br/>
            ";
                // line 36
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_YouAreCurrentlyUsing", $this->getContext($context, "piwik_version"))), "html", null, true);
                echo "
        ";
            } elseif (((($this->getContext($context, "latest_version_available") && (!$this->getContext($context, "isPiwikDemo"))) && $this->getContext($context, "hasSomeViewAccess")) && (!$this->getContext($context, "isUserIsAnonymous")))) {
                // line 38
                echo "            ";
                $context["updateSubject"] = twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_NewUpdatePiwikX", $this->getContext($context, "latest_version_available"))), "url");
                // line 39
                echo "            ";
                echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_PiwikXIsAvailablePleaseNotifyPiwikAdmin", (("<a href='?module=Proxy&action=redirect&url=http://piwik.org/' target='_blank'>Piwik</a> <a href='?module=Proxy&action=redirect&url=http://piwik.org/changelog/' target='_blank'>" . $this->getContext($context, "latest_version_available")) . "</a>"), (((("<a href='mailto:" . $this->getContext($context, "superUserEmails")) . "?subject=") . $this->getContext($context, "updateSubject")) . "'>"), "</a>"));
                echo "
        ";
            } elseif ((($this->getContext($context, "isSuperUser") && array_key_exists("adminMenu", $context)) && $this->getContext($context, "adminMenu"))) {
                // line 41
                echo "            ";
                echo $this->getContext($context, "updateCheck");
                echo "
            <br />
            ";
                // line 43
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_YouAreCurrentlyUsing", $this->getContext($context, "piwik_version"))), "html", null, true);
                echo "
        ";
            }
            // line 45
            echo "    </span>
</span>
";
        }
    }

    public function getTemplateName()
    {
        return "@CoreHome/_headerMessage.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 41,  111 => 38,  43 => 13,  46 => 14,  97 => 33,  95 => 32,  91 => 30,  88 => 30,  66 => 20,  57 => 14,  106 => 36,  55 => 15,  36 => 7,  241 => 35,  239 => 34,  228 => 33,  216 => 29,  214 => 28,  190 => 23,  181 => 20,  178 => 19,  172 => 18,  161 => 15,  157 => 14,  126 => 43,  118 => 3,  115 => 2,  103 => 17,  83 => 27,  65 => 50,  38 => 2,  28 => 38,  25 => 32,  272 => 29,  266 => 28,  260 => 27,  256 => 26,  250 => 25,  247 => 24,  233 => 23,  227 => 75,  219 => 73,  211 => 71,  209 => 70,  203 => 27,  192 => 64,  186 => 62,  183 => 61,  173 => 59,  168 => 17,  165 => 16,  159 => 55,  156 => 54,  154 => 13,  151 => 52,  147 => 50,  145 => 49,  142 => 12,  125 => 45,  119 => 43,  113 => 41,  102 => 36,  98 => 35,  93 => 32,  90 => 22,  81 => 19,  72 => 22,  70 => 15,  67 => 18,  60 => 18,  26 => 4,  49 => 12,  33 => 4,  52 => 5,  21 => 3,  24 => 3,  144 => 38,  138 => 36,  131 => 45,  128 => 46,  108 => 39,  104 => 36,  100 => 34,  96 => 24,  87 => 21,  85 => 28,  80 => 20,  77 => 27,  71 => 52,  68 => 13,  62 => 17,  59 => 16,  31 => 6,  27 => 5,  23 => 4,  19 => 2,  143 => 46,  140 => 45,  136 => 35,  133 => 36,  130 => 35,  123 => 22,  121 => 4,  116 => 29,  114 => 39,  112 => 20,  110 => 40,  105 => 13,  92 => 16,  89 => 8,  86 => 7,  78 => 24,  75 => 17,  73 => 45,  69 => 8,  63 => 6,  58 => 17,  53 => 10,  50 => 9,  48 => 15,  44 => 9,  41 => 8,  39 => 8,  35 => 6,  32 => 7,  30 => 6,  22 => 2,  56 => 35,  54 => 11,  51 => 45,  47 => 8,  45 => 44,  42 => 11,  40 => 12,  37 => 10,  34 => 8,  29 => 4,);
    }
}
