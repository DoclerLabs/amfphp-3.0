<?php

/**
 *  This file is part of amfPHP
 *
 * LICENSE
 *
 * This source file is subject to the license that is bundled
 * with this package in the file license.txt.
 * @package Tests_Amfphp_Core_Amf
 */
/**
 *  includes
 *  */

use PHPUnit\Framework\TestCase;

require_once dirname(__FILE__) . '/../../../../Amfphp/ClassLoader.php';

/**
 * Test class for Amfphp_Core_Amf_Util.
 * Generated by PHPUnit on 2011-01-20 at 15:43:40.
 * @package Tests_Amfphp_Core_Amf
 * @author Ariel Sommeria-klein
 */
class Amfphp_Core_Amf_UtilTest extends TestCase {

    /**
     * object
     * @var Amfphp_Core_Amf_Util
     */
    protected $object;

    /**
     * for testApplyFunc
     * @var int
     */
    protected $counter;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp(): void {
        $this->object = new Amfphp_Core_Amf_Util;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown(): void {
        
    }

    /**
     * test system is big endian
     */
    public function testIsSystemBigEndian() {
        $isBigEndian = Amfphp_Core_Amf_Util::isSystemBigEndian();
        $this->assertTrue(($isBigEndian == false) || ($isBigEndian == true));
    }

    /**
     * test apply func. used by testApplyFunctionToContainedObjects
     * @param mixed $obj
     * @return mixed
     */
    public function increaseApplyFuncCounter($obj = null) {
        $this->counter++;
        return $obj;
    }

    /**
     * test apply function to contained objects
     */
    public function testApplyFunctionToContainedObjects() {
        //non object
        $this->counter = 0;
        Amfphp_Core_Amf_Util::applyFunctionToContainedObjects('bla', array($this, 'increaseApplyFuncCounter'));
        $this->assertEquals(1, $this->counter);

        //simple
        $testObj1 = array();
        $testObj1[] = new stdClass();
        $this->counter = 0;
        Amfphp_Core_Amf_Util::applyFunctionToContainedObjects($testObj1, array($this, 'increaseApplyFuncCounter'));
        $this->assertEquals(2, $this->counter);

        //a bit more complicated
        $testObj2 = new stdClass();
        $subObj = array(new stdClass(), new stdClass(), array(1, 2, false), null);
        $testObj2->data = $subObj;
        $testObj2->bla = 'bla';
        $this->counter = 0;
        Amfphp_Core_Amf_Util::applyFunctionToContainedObjects($testObj2, array($this, 'increaseApplyFuncCounter'));
        $this->assertEquals(10, $this->counter);
    }

}

?>
