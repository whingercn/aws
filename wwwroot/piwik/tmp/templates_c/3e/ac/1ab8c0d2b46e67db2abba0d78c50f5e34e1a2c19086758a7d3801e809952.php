<?php

/* @CoreAdminHome/trackingCodeGenerator.twig */
class __TwigTemplate_3eac1ab8c0d2b46e67db2abba0d78c50f5e34e1a2c19086758a7d3801e809952 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("admin.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"plugins/CoreAdminHome/stylesheets/jsTrackingGenerator.css\" />
    <script type=\"text/javascript\" src=\"plugins/CoreAdminHome/javascripts/jsTrackingGenerator.js\"></script>
";
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "<div id=\"js-tracking-generator-data\" max-custom-variables=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "maxCustomVariables"), "html_attr");
        echo "\" data-currencies=\"";
        echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getContext($context, "currencySymbols")), "html", null, true);
        echo "\"></div>

<h2 piwik-enriched-headline
    feature-name=\"";
        // line 13
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_TrackingCode")), "html", null, true);
        echo "\"
    help-url=\"http://piwik.org/docs/tracking-api/\">";
        // line 14
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_JavaScriptTracking")), "html", null, true);
        echo "</h2>

<div id=\"js-code-options\" class=\"adminTable\">

    <p>
        ";
        // line 19
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_JSTrackingIntro1")), "html", null, true);
        echo "
        <br/><br/>
        ";
        // line 21
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_JSTrackingIntro2")), "html", null, true);
        echo " ";
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_JSTrackingIntro3", "<a href=\"http://piwik.org/integrate/\" target=\"_blank\">", "</a>"));
        echo "
        <br/><br/>
        ";
        // line 23
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_JSTrackingIntro4", "<a href=\"#image-tracking-link\">", "</a>"));
        echo "
        <br/><br/>
        ";
        // line 25
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_JSTrackingIntro5", "<a target=\"_blank\" href=\"http://piwik.org/docs/javascript-tracking/\">", "</a>"));
        echo "
    </p>

    <div>
        ";
        // line 30
        echo "        <label class=\"website-label\"><strong>";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Website")), "html", null, true);
        echo "</strong></label>

        <div piwik-siteselector
             class=\"sites_autocomplete\"
             siteid=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->getContext($context, "idSite"), "html", null, true);
        echo "\"
             sitename=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->getContext($context, "defaultReportSiteName"), "html", null, true);
        echo "\"
             show-all-sites-item=\"false\"
             switch-site-on-select=\"false\"
             id=\"js-tracker-website\"
             show-selected-site=\"true\"></div>

        <br/><br/><br/>
    </div>

    <table id=\"optional-js-tracking-options\" class=\"adminTable\">
        <tr>
            <th>";
        // line 46
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Options")), "html", null, true);
        echo "</th>
            <th>";
        // line 47
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Mobile_Advanced")), "html", null, true);
        echo "
                <a href=\"#\" class=\"section-toggler-link\" data-section-id=\"javascript-advanced-options\">(";
        // line 48
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Show")), "html", null, true);
        echo ")</a>
            </th>
        </tr>
        <tr>
            <td>
                ";
        // line 54
        echo "                <div class=\"tracking-option-section\">
                    <input type=\"checkbox\" id=\"javascript-tracking-all-subdomains\"/>
                    <label for=\"javascript-tracking-all-subdomains\">";
        // line 56
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_JSTracking_MergeSubdomains")), "html", null, true);
        echo "
                        <span class='current-site-name'>";
        // line 57
        echo $this->getContext($context, "defaultReportSiteName");
        echo "</span>
                    </label>

                    <div class=\"small-form-description\">
                        ";
        // line 61
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_JSTracking_MergeSubdomainsDesc", (("x.<span class='current-site-host'>" . $this->getContext($context, "defaultReportSiteDomain")) . "</span>"), (("y.<span class='current-site-host'>" . $this->getContext($context, "defaultReportSiteDomain")) . "</span>")));
        echo "
                    </div>
                </div>

                ";
        // line 66
        echo "                <div class=\"tracking-option-section\">
                    <input type=\"checkbox\" id=\"javascript-tracking-group-by-domain\"/>
                    <label for=\"javascript-tracking-group-by-domain\">";
        // line 68
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_JSTracking_GroupPageTitlesByDomain")), "html", null, true);
        echo "</label>

                    <div class=\"small-form-description\">
                        ";
        // line 71
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_JSTracking_GroupPageTitlesByDomainDesc1", (("<span class='current-site-host'>" . $this->getContext($context, "defaultReportSiteDomain")) . "</span>")));
        echo "
                    </div>
                </div>

                ";
        // line 76
        echo "                <div class=\"tracking-option-section\">
                    <input type=\"checkbox\" id=\"javascript-tracking-all-aliases\"/>
                    <label for=\"javascript-tracking-all-aliases\">";
        // line 78
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_JSTracking_MergeAliases")), "html", null, true);
        echo "
                        <span class='current-site-name'>";
        // line 79
        echo $this->getContext($context, "defaultReportSiteName");
        echo "</span>
                    </label>

                    <div class=\"small-form-description\">
                        ";
        // line 83
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_JSTracking_MergeAliasesDesc", (("<span class='current-site-alias'>" . $this->getContext($context, "defaultReportSiteAlias")) . "</span>")));
        echo "
                    </div>
                </div>

            </td>
            <td>
                <div id=\"javascript-advanced-options\" style=\"display:none;\">
                    ";
        // line 91
        echo "                    <div class=\"custom-variable tracking-option-section\" id=\"javascript-tracking-visitor-cv\">
                        <input class=\"section-toggler-link\" type=\"checkbox\" id=\"javascript-tracking-visitor-cv-check\" data-section-id=\"js-visitor-cv-extra\"/>
                        <label for=\"javascript-tracking-visitor-cv-check\">";
        // line 93
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_JSTracking_VisitorCustomVars")), "html", null, true);
        echo "</label>

                        <div class=\"small-form-description\">
                            ";
        // line 96
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_JSTracking_VisitorCustomVarsDesc")), "html", null, true);
        echo "
                        </div>

                        <table style=\"display:none;\" id=\"js-visitor-cv-extra\">
                            <tr>
                                <td><strong>";
        // line 101
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Name")), "html", null, true);
        echo "</strong></td>
                                <td><input type=\"textbox\" class=\"custom-variable-name\" placeholder=\"e.g. Type\"/></td>
                                <td><strong>";
        // line 103
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Value")), "html", null, true);
        echo "</strong></td>
                                <td><input type=\"textbox\" class=\"custom-variable-value\" placeholder=\"e.g. Customer\"/></td>
                            </tr>
                            <tr>
                                <td colspan=\"4\" style=\"text-align:right;\">
                                    <a href=\"#\" class=\"add-custom-variable\">";
        // line 108
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Add")), "html", null, true);
        echo "</a>
                                </td>
                            </tr>
                        </table>
                    </div>

                    ";
        // line 115
        echo "                    <div class=\"custom-variable tracking-option-section\" id=\"javascript-tracking-page-cv\">
                        <input class=\"section-toggler-link\" type=\"checkbox\" id=\"javascript-tracking-page-cv-check\" data-section-id=\"js-page-cv-extra\"/>
                        <label for=\"javascript-tracking-page-cv-check\">";
        // line 117
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_JSTracking_PageCustomVars")), "html", null, true);
        echo "</label>

                        <div class=\"small-form-description\">
                            ";
        // line 120
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_JSTracking_PageCustomVarsDesc")), "html", null, true);
        echo "
                        </div>

                        <table style=\"display:none;\" id=\"js-page-cv-extra\">
                            <tr>
                                <td><strong>";
        // line 125
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Name")), "html", null, true);
        echo "</strong></td>
                                <td><input type=\"textbox\" class=\"custom-variable-name\" placeholder=\"e.g. Category\"/></td>
                                <td><strong>";
        // line 127
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Value")), "html", null, true);
        echo "</strong></td>
                                <td><input type=\"textbox\" class=\"custom-variable-value\" placeholder=\"e.g. White Papers\"/></td>
                            </tr>
                            <tr>
                                <td colspan=\"4\" style=\"text-align:right;\">
                                    <a href=\"#\" class=\"add-custom-variable\">";
        // line 132
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Add")), "html", null, true);
        echo "</a>
                                </td>
                            </tr>
                        </table>
                    </div>

                    ";
        // line 139
        echo "                    <div class=\"tracking-option-section\">
                        <input type=\"checkbox\" id=\"javascript-tracking-do-not-track\"/>
                        <label for=\"javascript-tracking-do-not-track\">";
        // line 141
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_JSTracking_EnableDoNotTrack")), "html", null, true);
        echo "</label>

                        <div class=\"small-form-description\">
                            ";
        // line 144
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_JSTracking_EnableDoNotTrackDesc")), "html", null, true);
        echo "
                            ";
        // line 145
        if ($this->getContext($context, "serverSideDoNotTrackEnabled")) {
            // line 146
            echo "                                <br/>
                                <br/>
                                ";
            // line 148
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_JSTracking_EnableDoNotTrack_AlreadyEnabled")), "html", null, true);
            echo "
                            ";
        }
        // line 150
        echo "                        </div>
                    </div>

                    ";
        // line 154
        echo "                    <div class=\"tracking-option-section\">
                        <input class=\"section-toggler-link\" type=\"checkbox\" id=\"custom-campaign-query-params-check\"
                               data-section-id=\"js-campaign-query-param-extra\"/>
                        <label for=\"custom-campaign-query-params-check\">";
        // line 157
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_JSTracking_CustomCampaignQueryParam")), "html", null, true);
        echo "</label>

                        <div class=\"small-form-description\">
                            ";
        // line 160
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_JSTracking_CustomCampaignQueryParamDesc", "<a href=\"http://piwik.org/faq/general/#faq_119\" target=\"_blank\">", "</a>"));
        echo "
                        </div>

                        <table style=\"display:none;\" id=\"js-campaign-query-param-extra\">
                            <tr>
                                <td><strong>";
        // line 165
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_JSTracking_CampaignNameParam")), "html", null, true);
        echo "</strong></td>
                                <td><input type=\"text\" id=\"custom-campaign-name-query-param\"/></td>
                            </tr>
                            <tr>
                                <td><strong>";
        // line 169
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_JSTracking_CampaignKwdParam")), "html", null, true);
        echo "</strong></td>
                                <td><input type=\"text\" id=\"custom-campaign-keyword-query-param\"/></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </td>
        </tr>
    </table>

</div>

<div id=\"javascript-output-section\">
    <h3>";
        // line 182
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_JsTrackingTag")), "html", null, true);
        echo "</h3>

    <p class=\"form-description\">";
        // line 184
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_JSTracking_CodeNote", "&lt;/body&gt;"));
        echo "</p>

    <div id=\"javascript-text\">
        <textarea> </textarea>
    </div>
    <br/>
</div>

<h2 id=\"image-tracking-link\">";
        // line 192
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_ImageTracking")), "html", null, true);
        echo "</h2>

<div id=\"image-tracking-code-options\" class=\"adminTable\">

    <p>
        ";
        // line 197
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_ImageTrackingIntro1")), "html", null, true);
        echo " ";
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_ImageTrackingIntro2", "<em>&lt;noscript&gt;&lt;/noscript&gt;</em>"));
        echo "
        <br/><br/>
        ";
        // line 199
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_ImageTrackingIntro3", "<a href=\"http://piwik.org/docs/tracking-api/reference/\" target=\"_blank\">", "</a>"));
        echo "
    </p>

    <div>
        ";
        // line 204
        echo "        <label class=\"website-label\"><strong>";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Website")), "html", null, true);
        echo "</strong></label>
        <div piwik-siteselector
             class=\"sites_autocomplete\"
             siteid=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->getContext($context, "idSite"), "html", null, true);
        echo "\"
             sitename=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->getContext($context, "defaultReportSiteName"), "html", null, true);
        echo "\"
             id=\"image-tracker-website\"
             show-all-sites-item=\"false\"
             switch-site-on-select=\"false\"
             show-selected-site=\"true\"></div>

        <br/><br/><br/>
    </div>

    <table id=\"image-tracking-section\" class=\"adminTable\">
        <tr>
            <th>";
        // line 219
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Options")), "html", null, true);
        echo "</th>
            <th>";
        // line 220
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Mobile_Advanced")), "html", null, true);
        echo "
                <a href=\"#\" class=\"section-toggler-link\" data-section-id=\"image-tracker-advanced-options\">
                    (";
        // line 222
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Show")), "html", null, true);
        echo ")
                </a>
            </th>
        </tr>
        <tr>
            <td>
                ";
        // line 229
        echo "                <div class=\"tracking-option-section\">
                    <label for=\"image-tracker-action-name\">";
        // line 230
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Actions_ColumnPageName")), "html", null, true);
        echo "</label>
                    <input type=\"text\" id=\"image-tracker-action-name\"/>
                </div>
            </td>
            <td>
                <div id=\"image-tracker-advanced-options\" style=\"display:none;\">
                    ";
        // line 237
        echo "                    <div class=\"goal-picker tracking-option-section\">
                        <input class=\"section-toggler-link\" type=\"checkbox\" id=\"image-tracking-goal-check\" data-section-id=\"image-goal-picker-extra\"/>
                        <label for=\"image-tracking-goal-check\">";
        // line 239
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_TrackAGoal")), "html", null, true);
        echo "</label>

                        <div style=\"display:none;\" id=\"image-goal-picker-extra\">
                            <select id=\"image-tracker-goal\">
                                <option value=\"\">";
        // line 243
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserCountryMap_None")), "html", null, true);
        echo "</option>
                            </select>
                            <span>";
        // line 245
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_WithOptionalRevenue")), "html", null, true);
        echo "</span>
                            <span class=\"currency\">";
        // line 246
        echo twig_escape_filter($this->env, $this->getContext($context, "defaultSiteRevenue"), "html", null, true);
        echo "</span>
                            <input type=\"text\" class=\"revenue\" value=\"\"/>
                        </div>
                    </div>
                </div>
            </td>
        </tr>
    </table>

    <div id=\"image-link-output-section\" width=\"560px\">
        <h3>";
        // line 256
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_ImageTrackingLink")), "html", null, true);
        echo "</h3><br/><br/>

        <div id=\"image-tracking-text\">
            <textarea> </textarea>
        </div>
        <br/>
    </div>

</div>

<h2>";
        // line 266
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_ImportingServerLogs")), "html", null, true);
        echo "</h2>

<p>
    ";
        // line 269
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_ImportingServerLogsDesc", "<a href=\"http://piwik.org/log-analytics/\" target=\"_blank\">", "</a>"));
        echo "
</p>

";
    }

    public function getTemplateName()
    {
        return "@CoreAdminHome/trackingCodeGenerator.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  492 => 269,  486 => 266,  473 => 256,  460 => 246,  456 => 245,  451 => 243,  444 => 239,  440 => 237,  431 => 230,  428 => 229,  419 => 222,  414 => 220,  410 => 219,  396 => 208,  392 => 207,  385 => 204,  378 => 199,  371 => 197,  363 => 192,  352 => 184,  347 => 182,  331 => 169,  324 => 165,  316 => 160,  310 => 157,  305 => 154,  300 => 150,  295 => 148,  291 => 146,  289 => 145,  285 => 144,  279 => 141,  275 => 139,  266 => 132,  258 => 127,  253 => 125,  245 => 120,  239 => 117,  235 => 115,  226 => 108,  218 => 103,  213 => 101,  205 => 96,  199 => 93,  195 => 91,  185 => 83,  178 => 79,  174 => 78,  170 => 76,  163 => 71,  157 => 68,  153 => 66,  146 => 61,  139 => 57,  135 => 56,  131 => 54,  123 => 48,  119 => 47,  115 => 46,  101 => 35,  97 => 34,  89 => 30,  82 => 25,  77 => 23,  70 => 21,  65 => 19,  57 => 14,  53 => 13,  44 => 10,  41 => 9,  32 => 4,  29 => 3,);
    }
}
