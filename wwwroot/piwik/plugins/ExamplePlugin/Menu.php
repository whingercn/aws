<?php
/**
 * Piwik - free/libre analytics platform
 *
 * @link http://piwik.org
 * @license http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 *
 */
namespace Piwik\Plugins\ExamplePlugin;

use Piwik\Menu\MenuAdmin;
use Piwik\Menu\MenuReporting;
use Piwik\Menu\MenuTop;
use Piwik\Menu\MenuUser;

/**
 * This class allows you to add, remove or rename menu items.
 * To configure a menu (such as Admin Menu, Reporting Menu, User Menu...) simply call the corresponding methods as
 * described in the API-Reference http://developer.piwik.org/api-reference/Piwik/Menu/MenuAbstract
 */
class Menu extends \Piwik\Plugin\Menu
{
    public function configureReportingMenu(MenuReporting $menu)
    {
        // with custom category 'UI Framework'
        // $menu->add('UI Framework', '', array('module' => 'ExamplePlugin', 'action' => ''), true, $orderId = 30);
        // $menu->add('UI Framework', 'Report 1', array('module' => 'ExamplePlugin', 'action' => 'report1'), true, $orderId = 30);
        // or reusing an existing category
        // $menu->addVisitorsItem('Report 1', array('module' => 'ExamplePlugin', 'action' => 'report1'), $orderId = 30);
        // $menu->addActionsItem('Report 1', array('module' => 'ExamplePlugin', 'action' => 'report1'), $orderId = 30);
    }

    public function configureAdminMenu(MenuAdmin $menu)
    {
        // with custom category
        // $menu->add('General_Settings', 'My Admin Item', array('module' => 'ExamplePlugin', 'action' => ''), true, $orderId = 30);
        // or reusing an existing category
        // $menu->addSettingsItem('My Admin Item', array('module' => 'ExamplePlugin', 'action' => ''), $orderId = 30);
        // $menu->addPlatformItem('My Admin Item', array('module' => 'ExamplePlugin', 'action' => ''), $orderId = 30);
    }

    public function configureTopMenu(MenuTop $menu)
    {
        // $menu->add('My Top Item', null, array('module' => 'ExamplePlugin', 'action' => ''), true, $orderId = 30);
    }

    public function configureUserMenu(MenuUser $menu)
    {
        // with custom category
        // $menu->add('CoreAdminHome_MenuManage', 'My User Item', array('module' => 'ExamplePlugin', 'action' => ''), true, $orderId = 30);
        // or reusing an existing category
        // $menu->addManageItem('My User Item', array('module' => 'ExamplePlugin', 'action' => ''), $orderId = 30);
        // $menu->addPlatformItem('My User Item', array('module' => 'ExamplePlugin', 'action' => ''), $orderId = 30);
    }
}
