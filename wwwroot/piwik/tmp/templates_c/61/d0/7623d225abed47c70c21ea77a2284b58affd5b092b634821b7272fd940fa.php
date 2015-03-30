<?php

/* @UsersManager/userSettings.twig */
class __TwigTemplate_61d07623d225abed47c70c21ea77a2284b58affd5b092b634821b7272fd940fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("admin.twig");

        $this->blocks = array(
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
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<h2 piwik-enriched-headline>";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_MenuUserSettings")), "html", null, true);
        echo "</h2>

<br/>
<div class=\"ui-confirm\" id=\"confirmPasswordChange\">
    <h2>";
        // line 8
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_ChangePasswordConfirm")), "html", null, true);
        echo "</h2>
    <input role=\"yes\" type=\"button\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Yes")), "html", null, true);
        echo "\"/>
    <input role=\"no\" type=\"button\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_No")), "html", null, true);
        echo "\"/>
</div>

<table id='userSettingsTable' class=\"adminTable\">
    <tr>
        <td><label for=\"username\">";
        // line 15
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Username")), "html", null, true);
        echo " </label></td>
        <td>
            <input size=\"25\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getContext($context, "userLogin"), "html", null, true);
        echo "\" id=\"username\" disabled=\"disabled\"/>
            <span class='form-description'>";
        // line 18
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_YourUsernameCannotBeChanged")), "html", null, true);
        echo "</span>
        </td>
    </tr>

    <tr>
        <td><label for=\"alias\">";
        // line 23
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_Alias")), "html", null, true);
        echo " </label></td>
        <td><input size=\"25\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getContext($context, "userAlias"), "html", null, true);
        echo "\" id=\"alias\" /></td>
    </tr>
    <tr>
        <td><label for=\"email\">";
        // line 27
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_Email")), "html", null, true);
        echo " </label></td>
        <td><input size=\"25\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->getContext($context, "userEmail"), "html", null, true);
        echo "\" id=\"email\"/></td>
    </tr>
    <tr>
        <td><div style=\"margin-top: 5px;margin-bottom: 10px;\">";
        // line 31
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Language")), "html", null, true);
        echo "</div></td>
        <td>
            <fieldset style=\"margin-top: 5px;margin-bottom: 10px;\">
                <select name=\"language\" id=\"language\" onchange=\"if (this.value=='') window.open('?module=Proxy&amp;action=redirect&amp;url=http://piwik.org/translations/');\">
                    <option title=\"\" value=\"\">";
        // line 35
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("LanguagesManager_AboutPiwikTranslations")), "html", null, true);
        echo "</option>
                    ";
        // line 36
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "languages"));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 37
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "language"), "code"), "html", null, true);
            echo "\" ";
            if (($this->getAttribute($this->getContext($context, "language"), "code") == $this->getContext($context, "currentLanguageCode"))) {
                echo "selected=\"selected\"";
            }
            // line 38
            echo "                                title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "language"), "name"), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "language"), "english_name"), "html", null, true);
            echo ")\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "language"), "name"), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "                </select>
                <br />
            </fieldset>
        </td>
    </tr>
    <tr>
        <td>";
        // line 46
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_ReportToLoadByDefault")), "html", null, true);
        echo "</td>
        <td>
            <fieldset>
                <input id=\"defaultReportRadioAll\" type=\"radio\" value=\"MultiSites\"
                      name=\"defaultReport\"";
        // line 50
        if (($this->getContext($context, "defaultReport") == "MultiSites")) {
            echo " checked=\"checked\"";
        }
        echo " />
                <label for=\"defaultReportRadioAll\">";
        // line 51
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_AllWebsitesDashboard")), "html", null, true);
        echo "</label><br/>
                <input id=\"defaultReportSpecific\" type=\"radio\" value=\"1\"
                       name=\"defaultReport\"";
        // line 53
        if (($this->getContext($context, "defaultReport") != "MultiSites")) {
            echo " checked=\"checked\"";
        }
        echo " />
                <label for=\"defaultReportSpecific\" style=\"padding-right:12px;\">";
        // line 54
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_DashboardForASpecificWebsite")), "html", null, true);
        echo "</label>

                <div piwik-siteselector
                     class=\"sites_autocomplete\"
                     siteid=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->getContext($context, "defaultReportIdSite"), "html", null, true);
        echo "\"
                     sitename=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->getContext($context, "defaultReportSiteName"), "html", null, true);
        echo "\"
                     switch-site-on-select=\"false\"
                     show-all-sites-item=\"false\"
                     showselectedsite=\"true\"
                     id=\"defaultReportSiteSelector\"></div>
            </fieldset>
        </td>
    </tr>
    <tr>
        <td>";
        // line 68
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_ReportDateToLoadByDefault")), "html", null, true);
        echo "</td>
        <td>
            <fieldset>
                ";
        // line 71
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "availableDefaultDates"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["value"] => $context["description"]) {
            // line 72
            echo "                    <input id=\"defaultDate-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "loop"), "index"), "html", null, true);
            echo "\" type=\"radio\"";
            if (($this->getContext($context, "defaultDate") == $this->getContext($context, "value"))) {
                echo " checked=\"checked\"";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "value"), "html", null, true);
            echo "\" name=\"defaultDate\"/>
                    <label for=\"defaultDate-";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "loop"), "index"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getContext($context, "description"), "html", null, true);
            echo "</label>
                    <br/>
                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['value'], $context['description'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "            </fieldset>
        </td>
    </tr>

    ";
        // line 80
        if ((array_key_exists("isValidHost", $context) && $this->getContext($context, "isValidHost"))) {
            // line 81
            echo "        <tr>
            <td><label for=\"email\">";
            // line 82
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ChangePassword")), "html", null, true);
            echo " </label></td>
            <td><input size=\"25\" value=\"\" autocomplete=\"off\" id=\"password\" type=\"password\"/>
                <span class='form-description'>";
            // line 84
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_IfYouWouldLikeToChangeThePasswordTypeANewOne")), "html", null, true);
            echo "</span>
                <br/><br/><input size=\"25\" value=\"\" autocomplete=\"off\" id=\"passwordBis\" type=\"password\"/>
                <span class='form-description'> ";
            // line 86
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_TypeYourPasswordAgain")), "html", null, true);
            echo "</span>
            </td>
        </tr>
    ";
        }
        // line 90
        echo "</table>
";
        // line 91
        if (((!array_key_exists("isValidHost", $context)) || (!$this->getContext($context, "isValidHost")))) {
            // line 92
            echo "    <div id=\"injectedHostCannotChangePwd\">
        ";
            // line 93
            ob_start();
            // line 94
            echo "        ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_InjectedHostCannotChangePwd", $this->getContext($context, "invalidHost"))), "html", null, true);
            echo "
        &nbsp;";
            // line 95
            if ((!$this->getContext($context, "isSuperUser"))) {
                echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_EmailYourAdministrator", $this->getContext($context, "invalidHostMailLinkStart"), "</a>"));
            }
            // line 96
            echo "        ";
            $context["injectedHostCannotChangePwd"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 97
            echo "        ";
            echo call_user_func_array($this->env->getFilter('notification')->getCallable(), array($this->getContext($context, "injectedHostCannotChangePwd"), array("raw" => true, "context" => "error", "placeat" => "#injectedHostCannotChangePwd", "noclear" => true)));
            echo "
    </div>
    <br/>
";
        }
        // line 101
        echo "
";
        // line 102
        $context["ajax"] = $this->env->loadTemplate("ajaxMacros.twig");
        // line 103
        echo $context["ajax"]->geterrorDiv("ajaxErrorUserSettings");
        echo "
";
        // line 104
        echo $context["ajax"]->getloadingDiv("ajaxLoadingUserSettings");
        echo "
<input type=\"submit\" value=\"";
        // line 105
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Save")), "html", null, true);
        echo "\" id=\"userSettingsSubmit\" class=\"submit\"/>

<br/><br/>

<h2 id=\"excludeCookie\">";
        // line 109
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_ExcludeVisitsViaCookie")), "html", null, true);
        echo "</h2>
<p>
";
        // line 111
        if ($this->getContext($context, "ignoreCookieSet")) {
            // line 112
            echo "   ";
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_YourVisitsAreIgnoredOnDomain", "<strong>", $this->getContext($context, "piwikHost"), "</strong>"));
            echo "
";
        } else {
            // line 114
            echo "   ";
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_YourVisitsAreNotIgnored", "<strong>", "</strong>"));
            echo "
";
        }
        // line 116
        echo "</p>
<span style=\"margin-left:20px;\">
<a href='";
        // line 118
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('linkTo')->getCallable(), array(array("ignoreSalt" => $this->getContext($context, "ignoreSalt"), "action" => "setIgnoreCookie"))), "html", null, true);
        echo "#excludeCookie'>&rsaquo; ";
        if ($this->getContext($context, "ignoreCookieSet")) {
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_ClickHereToDeleteTheCookie")), "html", null, true);
            echo "
    ";
        } else {
            // line 119
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_ClickHereToSetTheCookieOnDomain", $this->getContext($context, "piwikHost"))), "html", null, true);
        }
        // line 120
        echo "    <br/>
</a></span>

<br/><br/>
";
        // line 124
        if ($this->getContext($context, "isSuperUser")) {
            // line 125
            echo "    <h2>";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_MenuAnonymousUserSettings")), "html", null, true);
            echo "</h2>
    ";
            // line 126
            if ((twig_length_filter($this->env, $this->getContext($context, "anonymousSites")) == 0)) {
                // line 127
                echo "        <h3 class='form-description'><strong>";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_NoteNoAnonymousUserAccessSettingsWontBeUsed2")), "html", null, true);
                echo "</strong></h3>
        <br/>
    ";
            } else {
                // line 130
                echo "        <br/>
        ";
                // line 131
                echo $context["ajax"]->geterrorDiv("ajaxErrorAnonymousUserSettings");
                echo "
        ";
                // line 132
                echo $context["ajax"]->getloadingDiv("ajaxLoadingAnonymousUserSettings");
                echo "
        <table id='anonymousUserSettingsTable' class=\"adminTable\" style='width:850px;'>
            <tr>
                <td style=\"width:400px;\">";
                // line 135
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_WhenUsersAreNotLoggedInAndVisitPiwikTheyShouldAccess")), "html", null, true);
                echo "</td>
                <td>
                    <fieldset>
                        <input id=\"anonymousDefaultReport-login\" type=\"radio\" value=\"Login\"
                               name=\"anonymousDefaultReport\"";
                // line 139
                if (($this->getContext($context, "anonymousDefaultReport") == $this->getContext($context, "loginModule"))) {
                    echo " checked=\"checked\"";
                }
                echo " />
                        <label for=\"anonymousDefaultReport-login\">";
                // line 140
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_TheLoginScreen")), "html", null, true);
                echo "</label><br/>
                        <input id=\"anonymousDefaultReport-multisites\" ";
                // line 141
                if (twig_test_empty($this->getContext($context, "anonymousSites"))) {
                    echo "disabled=\"disabled\" ";
                }
                echo "type=\"radio\" value=\"MultiSites\"
                               name=\"anonymousDefaultReport\"";
                // line 142
                if (($this->getContext($context, "anonymousDefaultReport") == "MultiSites")) {
                    echo " checked=\"checked\"";
                }
                echo " />
                        <label for=\"anonymousDefaultReport-multisites\">";
                // line 143
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_AllWebsitesDashboard")), "html", null, true);
                echo "</label><br/>

                        <input id=\"anonymousDefaultReport-specific\" ";
                // line 145
                if (twig_test_empty($this->getContext($context, "anonymousSites"))) {
                    echo "disabled=\"disabled\" ";
                }
                echo "type=\"radio\" value=\"1\"
                               name=\"anonymousDefaultReport\"";
                // line 146
                if (($this->getContext($context, "anonymousDefaultReport") > 0)) {
                    echo " checked=\"checked\"";
                }
                echo " />
                        <label for=\"anonymousDefaultReport-specific\">";
                // line 147
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_DashboardForASpecificWebsite")), "html", null, true);
                echo "</label>
                        ";
                // line 148
                if ((!twig_test_empty($this->getContext($context, "anonymousSites")))) {
                    // line 149
                    echo "                            <select id=\"anonymousDefaultReportWebsite\">
                                ";
                    // line 150
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getContext($context, "anonymousSites"));
                    foreach ($context['_seq'] as $context["_key"] => $context["info"]) {
                        // line 151
                        echo "                                    <option value=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "info"), "idsite"), "html", null, true);
                        echo "\" ";
                        if (($this->getContext($context, "anonymousDefaultReport") == $this->getAttribute($this->getContext($context, "info"), "idsite"))) {
                            echo " selected=\"selected\"";
                        }
                        echo ">";
                        echo $this->getAttribute($this->getContext($context, "info"), "name");
                        echo "</option>
                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['info'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 153
                    echo "                            </select>
                        ";
                }
                // line 155
                echo "                    </fieldset>
                </td>
            </tr>
            <tr>
                <td>";
                // line 159
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_ForAnonymousUsersReportDateToLoadByDefault")), "html", null, true);
                echo "</td>
                <td>
                    <fieldset>
                        ";
                // line 162
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "availableDefaultDates"));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["value"] => $context["description"]) {
                    // line 163
                    echo "                            <input id=\"anonymousDefaultDate-";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "loop"), "index"), "html", null, true);
                    echo "\" type=\"radio\" ";
                    if (($this->getContext($context, "anonymousDefaultDate") == $this->getContext($context, "value"))) {
                        echo "checked=\"checked\" ";
                    }
                    echo "value=\"";
                    echo twig_escape_filter($this->env, $this->getContext($context, "value"), "html", null, true);
                    echo "\"
                                   name=\"anonymousDefaultDate\"/>
                            <label for=\"anonymousDefaultDate-";
                    // line 165
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "loop"), "index"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getContext($context, "description"), "html", null, true);
                    echo "</label>
                            <br/>
                        ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['value'], $context['description'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 168
                echo "                    </fieldset>
                </td>
            </tr>

        </table>
        <input type=\"submit\" value=\"";
                // line 173
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Save")), "html", null, true);
                echo "\" id=\"anonymousUserSettingsSubmit\" class=\"submit\"/>
    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "@UsersManager/userSettings.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  527 => 173,  520 => 168,  501 => 165,  489 => 163,  472 => 162,  466 => 159,  460 => 155,  456 => 153,  441 => 151,  437 => 150,  434 => 149,  432 => 148,  428 => 147,  422 => 146,  416 => 145,  411 => 143,  405 => 142,  399 => 141,  395 => 140,  389 => 139,  382 => 135,  376 => 132,  372 => 131,  369 => 130,  362 => 127,  360 => 126,  355 => 125,  353 => 124,  347 => 120,  344 => 119,  336 => 118,  332 => 116,  326 => 114,  320 => 112,  318 => 111,  313 => 109,  306 => 105,  302 => 104,  298 => 103,  296 => 102,  293 => 101,  285 => 97,  282 => 96,  278 => 95,  273 => 94,  271 => 93,  268 => 92,  266 => 91,  263 => 90,  256 => 86,  251 => 84,  246 => 82,  243 => 81,  241 => 80,  235 => 76,  216 => 73,  205 => 72,  188 => 71,  182 => 68,  170 => 59,  166 => 58,  159 => 54,  153 => 53,  148 => 51,  142 => 50,  135 => 46,  127 => 40,  114 => 38,  107 => 37,  103 => 36,  99 => 35,  92 => 31,  86 => 28,  82 => 27,  76 => 24,  72 => 23,  64 => 18,  60 => 17,  55 => 15,  47 => 10,  43 => 9,  39 => 8,  31 => 4,  28 => 3,);
    }
}
