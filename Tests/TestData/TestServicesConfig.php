<?php
/**
 *  This file is part of amfPHP
 *
 * LICENSE
 *
 * This source file is subject to the license that is bundled
 * with this package in the file license.txt.
 * @package Tests_TestData
 */


/**
 * testing requires some services. They are described here.
 *
 * @package Tests_TestData
 * @author Ariel Sommeria-klein
 */
class TestServicesConfig extends Amfphp_Core_Config {

    /**
     * constructor
     */
    public function  __construct() {
        parent::__construct();
        $this->serviceFolders  = array(dirname(__FILE__) . '/Services/' ,dirname(__FILE__) . '/MoreServices/');
        $this->serviceFolders[] = array(dirname(__FILE__) . '/NamespaceServices/', 'NService');
        $this->serviceFolders[] = dirname(__FILE__) . '/../../Examples/Php/ExampleServices/';
        $testServicePath = dirname(__FILE__) . '/TestService.php';
        $classFindInfo = new Amfphp_Core_Common_ClassFindInfo($testServicePath, 'TestService');
        $this->serviceNames2ClassFindInfo = array('TestService' => $classFindInfo);
        
        $voFolders = array(AMFPHP_ROOTPATH . 'Services/Vo/', dirname(__FILE__). '/../../Examples/Php/Vo/');
        $voFolders[] = array(dirname(__FILE__). '/NamespaceVos/', 'NVo');
        
        $this->pluginsConfig['AmfphpVoConverter']['voFolders'] = $voFolders;
    }

}
?>
