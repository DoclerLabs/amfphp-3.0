<?php
/**
 *  This file is part of amfPHP
 *
 * LICENSE
 *
 * This source file is subject to the license that is bundled
 * with this package in the file license.txt.
 * @package Tests_Amfphp_Core
 */

/**
*  includes
*  */

use PHPUnit\Framework\TestCase;

require_once dirname(__FILE__) . '/../../../Amfphp/ClassLoader.php';
require_once dirname(__FILE__) . '/../../TestData/TestPlugins/DisabledPlugin/DisabledPlugin.php';

/**
 * Test class for Amfphp_Core_PluginManager.
 * @package Tests_Amfphp_Core
 * @author Ariel Sommeria-klein
 */
class Amfphp_Core_PluginManagerTest extends TestCase {
    
    /**
     * plugin manager
     * @var Amfphp_Core_PluginManager
     */
    protected $pluginManager;


    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp(): void {
        $this->pluginManager = Amfphp_Core_PluginManager::getInstance();
    }

    /**
     * the TestPlugins folder must be scanned and in it found the class DummyPlugin, which contains an instanication counter.
     * It is included and instanciated by the plugin manager, and the test looks at the instanciation counter to check that an instance was created
     */
    public function testSimple(){
        
        $this->pluginManager->loadPlugins(array(dirname(__FILE__) . '/../../TestData/TestPlugins/'));
        $this->assertEquals(1, DummyPlugin::$instanciationCounter);
    }

    /**
     * test disabled
     */
    public function testDisabled(){
        $disabledPluginLoadCount = DisabledPlugin::$instanciationCounter;
        $this->pluginManager->loadPlugins(array(dirname(__FILE__) . '/../../TestData/TestPlugins/'), null, null, array('DisabledPlugin'));
        $this->assertEquals($disabledPluginLoadCount, DisabledPlugin::$instanciationCounter);

    }

    /**
     * test config
     */
    public function testConfig(){
        $pluginsConfig = array('DummyPlugin' => array('dummyConfVar' => 'custom'));
        $this->pluginManager->loadPlugins(array(dirname(__FILE__) . '/../../TestData/TestPlugins/'), $pluginsConfig);
        $this->assertEquals('custom', DummyPlugin::$dummyConfVar);


    }


    /**
     * test bad folder
     */
    public function testBadFolder(){
        $this->expectException(Amfphp_Core_Exception::class);
        $this->pluginManager->loadPlugins(array('bla'));
    }

}

?>
