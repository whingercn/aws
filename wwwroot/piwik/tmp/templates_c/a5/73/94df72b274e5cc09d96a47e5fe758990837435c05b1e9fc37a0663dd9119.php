<?php

/* @UsersManager/index.twig */
class __TwigTemplate_a57394df72b274e5cc09d96a47e5fe758990837435c05b1e9fc37a0663dd9119 extends Twig_Template
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
        echo "
<h2 piwik-enriched-headline
    help-url=\"http://piwik.org/docs/manage-users/\">";
        // line 6
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_ManageAccess")), "html", null, true);
        echo "</h2>
<div id=\"sites\" class=\"usersManager\">
    <section class=\"sites_selector_container\">
        <p>";
        // line 9
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_MainDescription")), "html", null, true);
        echo "</p>

        <div class=\"sites_selector_title\">";
        // line 11
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("SitesManager_Sites")), "html", null, true);
        echo ":</div>

        ";
        // line 13
        ob_start();
        // line 14
        echo "            <strong>";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_ApplyToAllWebsites")), "html", null, true);
        echo "</strong>
        ";
        $context["applyAllSitesText"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 16
        echo "
        <div piwik-siteselector
             class=\"sites_autocomplete\"
             siteid=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getContext($context, "idSiteSelected"), "html", null, true);
        echo "\"
             sitename=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getContext($context, "defaultReportSiteName"), "html", null, true);
        echo "\"
             all-sites-text=\"";
        // line 21
        echo $this->getContext($context, "applyAllSitesText");
        echo "\"
             all-sites-location=\"top\"
             id=\"usersManagerSiteSelect\"
             switch-site-on-select=\"false\"></div>
    </section>
</div>

";
        // line 28
        $context["ajax"] = $this->env->loadTemplate("ajaxMacros.twig");
        // line 29
        echo $context["ajax"]->geterrorDiv();
        echo "
";
        // line 30
        echo $context["ajax"]->getloadingDiv();
        echo "

<div class=\"entityContainer\" style=\"width:600px;\">
    ";
        // line 33
        if ($this->getContext($context, "anonymousHasViewAccess")) {
            // line 34
            echo "        <div style=\"display:inline-block;margin-top:10px;\" id=\"usersManagerAnonymousUserHasViewAccess\">
            ";
            // line 35
            echo call_user_func_array($this->env->getFilter('notification')->getCallable(), array(twig_join_filter(array(0 => call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_AnonymousUserHasViewAccess", "'anonymous'", "'view'")), 1 => call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_AnonymousUserHasViewAccess2"))), " "), array("placeAt" => "#usersManagerAnonymousUserHasViewAccess", "noclear" => true)));
            echo "
        </div>
    ";
        }
        // line 38
        echo "    <table class=\"entityTable dataTable\" id=\"access\" style=\"display:inline-table;width:500px;\">
        <thead>
        <tr>
            <th class='first'>";
        // line 41
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_User")), "html", null, true);
        echo "</th>
            <th>";
        // line 42
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_Alias")), "html", null, true);
        echo "</th>
            <th>";
        // line 43
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_PrivNone")), "html", null, true);
        echo "</th>
            <th>";
        // line 44
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_PrivView")), "html", null, true);
        echo "</th>
            <th>";
        // line 45
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_PrivAdmin")), "html", null, true);
        echo "</th>
        </tr>
        </thead>

        <tbody>
        ";
        // line 50
        $context["accesValid"] = ('' === $tmp = "<img src='plugins/UsersManager/images/ok.png' class='accessGranted' />") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 51
        echo "        ";
        $context["accesInvalid"] = ('' === $tmp = "<img src='plugins/UsersManager/images/no-access.png' class='updateAccess' />") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 52
        echo "        ";
        ob_start();
        echo "<span title=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_ExceptionSuperUserAccess")), "html", null, true);
        echo "\">N/A</span>";
        $context["superUserAccess"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 53
        echo "        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "usersAccessByWebsite"));
        foreach ($context['_seq'] as $context["login"] => $context["access"]) {
            // line 54
            echo "            <tr>
                <td id='login'>";
            // line 55
            echo twig_escape_filter($this->env, $this->getContext($context, "login"), "html", null, true);
            echo "</td>
                <td>";
            // line 56
            echo $this->getAttribute($this->getContext($context, "usersAliasByLogin"), $this->getContext($context, "login"), array(), "array");
            echo "</td>
                <td id='noaccess'>
                    ";
            // line 58
            if (twig_in_filter($this->getContext($context, "login"), $this->getContext($context, "superUserLogins"))) {
                // line 59
                echo "                        ";
                echo twig_escape_filter($this->env, $this->getContext($context, "superUserAccess"), "html", null, true);
                echo "
                    ";
            } elseif ((($this->getContext($context, "access") == "noaccess") && ($this->getContext($context, "idSiteSelected") != "all"))) {
                // line 61
                echo "                        ";
                echo twig_escape_filter($this->env, $this->getContext($context, "accesValid"), "html", null, true);
                echo "
                    ";
            } else {
                // line 63
                echo "                        ";
                echo twig_escape_filter($this->env, $this->getContext($context, "accesInvalid"), "html", null, true);
                echo "
                    ";
            }
            // line 64
            echo "&nbsp;</td>
                <td id='view'>
                    ";
            // line 66
            if (twig_in_filter($this->getContext($context, "login"), $this->getContext($context, "superUserLogins"))) {
                // line 67
                echo "                        ";
                echo twig_escape_filter($this->env, $this->getContext($context, "superUserAccess"), "html", null, true);
                echo "
                    ";
            } elseif ((($this->getContext($context, "access") == "view") && ($this->getContext($context, "idSiteSelected") != "all"))) {
                // line 69
                echo "                        ";
                echo twig_escape_filter($this->env, $this->getContext($context, "accesValid"), "html", null, true);
                echo "
                    ";
            } else {
                // line 71
                echo "                        ";
                echo twig_escape_filter($this->env, $this->getContext($context, "accesInvalid"), "html", null, true);
                echo "
                    ";
            }
            // line 72
            echo "&nbsp;</td>
                <td id='admin'>
                    ";
            // line 74
            if (twig_in_filter($this->getContext($context, "login"), $this->getContext($context, "superUserLogins"))) {
                // line 75
                echo "                        ";
                echo twig_escape_filter($this->env, $this->getContext($context, "superUserAccess"), "html", null, true);
                echo "
                    ";
            } elseif (($this->getContext($context, "login") == "anonymous")) {
                // line 77
                echo "                        N/A
                    ";
            } else {
                // line 79
                echo "                        ";
                if ((($this->getContext($context, "access") == "admin") && ($this->getContext($context, "idSiteSelected") != "all"))) {
                    echo twig_escape_filter($this->env, $this->getContext($context, "accesValid"), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->getContext($context, "accesInvalid"), "html", null, true);
                }
                echo "&nbsp;
                    ";
            }
            // line 81
            echo "                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['login'], $context['access'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "        </tbody>
    </table>
    <div id=\"accessUpdated\" style=\"vertical-align:top;\"></div>
</div>

<div class=\"ui-confirm\" id=\"confirm\">
    <h2>";
        // line 90
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_ChangeAllConfirm", "<span id='login'></span>"));
        echo "</h2>
    <input role=\"yes\" type=\"button\" value=\"";
        // line 91
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Yes")), "html", null, true);
        echo "\"/>
    <input role=\"no\" type=\"button\" value=\"";
        // line 92
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_No")), "html", null, true);
        echo "\"/>
</div>

";
        // line 95
        if ($this->getContext($context, "userIsSuperUser")) {
            // line 96
            echo "    <div class=\"ui-confirm\" id=\"confirmUserRemove\">
        <h2></h2>
        <input role=\"yes\" type=\"button\" value=\"";
            // line 98
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Yes")), "html", null, true);
            echo "\"/>
        <input role=\"no\" type=\"button\" value=\"";
            // line 99
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_No")), "html", null, true);
            echo "\"/>
    </div>
    <div class=\"ui-confirm\" id=\"confirmPasswordChange\">
        <h2>";
            // line 102
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_ChangePasswordConfirm")), "html", null, true);
            echo "</h2>
        <input role=\"yes\" type=\"button\" value=\"";
            // line 103
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Yes")), "html", null, true);
            echo "\"/>
        <input role=\"no\" type=\"button\" value=\"";
            // line 104
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_No")), "html", null, true);
            echo "\"/>
    </div>
    <br/>
    <h2>";
            // line 107
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_UsersManagement")), "html", null, true);
            echo "</h2>
    <p>";
            // line 108
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_UsersManagementMainDescription")), "html", null, true);
            echo "
        ";
            // line 109
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_ThereAreCurrentlyNRegisteredUsers", (("<b>" . $this->getContext($context, "usersCount")) . "</b>")));
            echo "</p>
    ";
            // line 110
            $context["ajax"] = $this->env->loadTemplate("ajaxMacros.twig");
            // line 111
            echo "    ";
            echo $context["ajax"]->geterrorDiv("ajaxErrorUsersManagement");
            echo "
    ";
            // line 112
            echo $context["ajax"]->getloadingDiv("ajaxLoadingUsersManagement");
            echo "
    <div class=\"entityContainer\" style=\"margin-bottom:50px;\">
        <table class=\"entityTable dataTable\" id=\"users\">
            <thead>
            <tr>
                <th>";
            // line 117
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Username")), "html", null, true);
            echo "</th>
                <th>";
            // line 118
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Password")), "html", null, true);
            echo "</th>
                <th>";
            // line 119
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_Email")), "html", null, true);
            echo "</th>
                <th>";
            // line 120
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_Alias")), "html", null, true);
            echo "</th>
                <th>token_auth</th>
                ";
            // line 122
            if ((array_key_exists("showLastSeen", $context) && $this->getContext($context, "showLastSeen"))) {
                // line 123
                echo "                <th>";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_LastSeen")), "html", null, true);
                echo "</th>
                ";
            }
            // line 125
            echo "                <th>";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Edit")), "html", null, true);
            echo "</th>
                <th>";
            // line 126
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Delete")), "html", null, true);
            echo "</th>
            </tr>
            </thead>

            <tbody>
            ";
            // line 131
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "users"));
            foreach ($context['_seq'] as $context["i"] => $context["user"]) {
                // line 132
                echo "                ";
                if (($this->getAttribute($this->getContext($context, "user"), "login") != "anonymous")) {
                    // line 133
                    echo "                    <tr class=\"editable\" id=\"row";
                    echo twig_escape_filter($this->env, $this->getContext($context, "i"), "html", null, true);
                    echo "\">
                        <td id=\"userLogin\" class=\"editable\">";
                    // line 134
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "login"), "html", null, true);
                    echo "</td>
                        <td id=\"password\" class=\"editable\">-</td>
                        <td id=\"email\" class=\"editable\">";
                    // line 136
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "email"), "html", null, true);
                    echo "</td>
                        <td id=\"alias\" class=\"editable\">";
                    // line 137
                    echo $this->getAttribute($this->getContext($context, "user"), "alias");
                    echo "</td>
                        <td id=\"token_auth\">";
                    // line 138
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "token_auth"), "html", null, true);
                    echo "</td>
                        ";
                    // line 139
                    if ($this->getAttribute($this->getContext($context, "user", true), "last_seen", array(), "any", true, true)) {
                        // line 140
                        echo "                        <td id=\"last_seen\">";
                        if (twig_test_empty($this->getAttribute($this->getContext($context, "user"), "last_seen"))) {
                            echo "-";
                        } else {
                            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_TimeAgo", $this->getAttribute($this->getContext($context, "user"), "last_seen")));
                        }
                        echo "</td>
                        ";
                    }
                    // line 142
                    echo "                        <td>
                            <span class=\"edituser link_but\" id=\"row";
                    // line 143
                    echo twig_escape_filter($this->env, $this->getContext($context, "i"), "html", null, true);
                    echo "\">
                                <img title=\"";
                    // line 144
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Edit")), "html", null, true);
                    echo "\" src='plugins/Morpheus/images/ico_edit.png'/>
                                <span>";
                    // line 145
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Edit")), "html", null, true);
                    echo "</span>
                            </span>
                        </td>
                        <td>
                            <span class=\"deleteuser link_but\" id=\"row";
                    // line 149
                    echo twig_escape_filter($this->env, $this->getContext($context, "i"), "html", null, true);
                    echo "\">
                                <img title=\"";
                    // line 150
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Delete")), "html", null, true);
                    echo "\" src='plugins/Morpheus/images/ico_delete.png'/>
                                <span>";
                    // line 151
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Delete")), "html", null, true);
                    echo "</span>
                            </span>
                        </td>
                    </tr>
                ";
                }
                // line 156
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 157
            echo "            </tbody>
        </table>
        <div class=\"addrow\"><img src='plugins/Morpheus/images/add.png'/> ";
            // line 159
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_AddUser")), "html", null, true);
            echo "</div>
    </div>

    <h2 id=\"super_user_access\">";
            // line 162
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_SuperUserAccessManagement")), "html", null, true);
            echo "</h2>
    <p>";
            // line 163
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_SuperUserAccessManagementMainDescription")), "html", null, true);
            echo " <br/>
    ";
            // line 164
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_SuperUserAccessManagementGrantMore")), "html", null, true);
            echo "</p>

    ";
            // line 166
            echo $context["ajax"]->geterrorDiv("ajaxErrorSuperUsersManagement");
            echo "
    ";
            // line 167
            echo $context["ajax"]->getloadingDiv("ajaxLoadingSuperUsersManagement");
            echo "

    <table class=\"entityTable dataTable\" id=\"superUserAccess\" style=\"display:inline-table;width:400px;\">
        <thead>
        <tr>
            <th class='first'>";
            // line 172
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_User")), "html", null, true);
            echo "</th>
            <th>";
            // line 173
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_Alias")), "html", null, true);
            echo "</th>
            <th>";
            // line 174
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Installation_SuperUser")), "html", null, true);
            echo "</th>
        </tr>
        </thead>

        <tbody>
        ";
            // line 179
            if ((twig_length_filter($this->env, $this->getContext($context, "users")) > 1)) {
                // line 180
                echo "            ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "usersAliasByLogin"));
                foreach ($context['_seq'] as $context["login"] => $context["alias"]) {
                    if (($this->getContext($context, "login") != "anonymous")) {
                        // line 181
                        echo "                <tr>
                    <td id='login'>";
                        // line 182
                        echo twig_escape_filter($this->env, $this->getContext($context, "login"), "html", null, true);
                        echo "</td>
                    <td>";
                        // line 183
                        echo $this->getContext($context, "alias");
                        echo "</td>
                    <td id='superuser' data-login=\"";
                        // line 184
                        echo twig_escape_filter($this->env, $this->getContext($context, "login"), "html_attr");
                        echo "\">
                        <img src='plugins/UsersManager/images/ok.png' class='accessGranted' data-hasaccess=\"1\" ";
                        // line 185
                        if ((!twig_in_filter($this->getContext($context, "login"), $this->getContext($context, "superUserLogins")))) {
                            echo "style=\"display:none\"";
                        }
                        echo " />
                        <img src='plugins/UsersManager/images/no-access.png' class='updateAccess' data-hasaccess=\"0\" ";
                        // line 186
                        if (twig_in_filter($this->getContext($context, "login"), $this->getContext($context, "superUserLogins"))) {
                            echo "style=\"display:none\"";
                        }
                        echo " />
                        &nbsp;
                    </td>
                </tr>
            ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['login'], $context['alias'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 191
                echo "        ";
            } else {
                // line 192
                echo "            <tr>
                <td colspan=\"3\">
                    ";
                // line 194
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_NoUsersExist")), "html", null, true);
                echo "
                </td>
            </tr>
        ";
            }
            // line 198
            echo "        </tbody>
    </table>

    <div id=\"superUserAccessUpdated\" style=\"vertical-align:top;\"></div>

    <div class=\"ui-confirm\" id=\"superUserAccessConfirm\">
        <h2> </h2>
        <input role=\"yes\" type=\"button\" value=\"";
            // line 205
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Yes")), "html", null, true);
            echo "\"/>
        <input role=\"no\" type=\"button\" value=\"";
            // line 206
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_No")), "html", null, true);
            echo "\"/>
    </div>

";
        }
    }

    public function getTemplateName()
    {
        return "@UsersManager/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  560 => 206,  556 => 205,  547 => 198,  540 => 194,  536 => 192,  533 => 191,  519 => 186,  513 => 185,  509 => 184,  505 => 183,  501 => 182,  498 => 181,  492 => 180,  490 => 179,  482 => 174,  478 => 173,  474 => 172,  466 => 167,  462 => 166,  457 => 164,  453 => 163,  449 => 162,  443 => 159,  439 => 157,  433 => 156,  425 => 151,  421 => 150,  417 => 149,  410 => 145,  406 => 144,  402 => 143,  399 => 142,  389 => 140,  387 => 139,  383 => 138,  379 => 137,  375 => 136,  370 => 134,  365 => 133,  362 => 132,  358 => 131,  350 => 126,  345 => 125,  339 => 123,  337 => 122,  332 => 120,  328 => 119,  324 => 118,  320 => 117,  312 => 112,  307 => 111,  305 => 110,  301 => 109,  297 => 108,  293 => 107,  287 => 104,  283 => 103,  279 => 102,  273 => 99,  269 => 98,  265 => 96,  263 => 95,  257 => 92,  253 => 91,  249 => 90,  241 => 84,  233 => 81,  223 => 79,  219 => 77,  213 => 75,  211 => 74,  207 => 72,  201 => 71,  195 => 69,  189 => 67,  187 => 66,  183 => 64,  177 => 63,  171 => 61,  165 => 59,  163 => 58,  158 => 56,  154 => 55,  151 => 54,  146 => 53,  139 => 52,  136 => 51,  134 => 50,  126 => 45,  122 => 44,  118 => 43,  114 => 42,  110 => 41,  105 => 38,  99 => 35,  96 => 34,  94 => 33,  88 => 30,  84 => 29,  82 => 28,  72 => 21,  68 => 20,  64 => 19,  59 => 16,  53 => 14,  51 => 13,  46 => 11,  41 => 9,  35 => 6,  31 => 4,  28 => 3,);
    }
}
