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
require_once dirname(__FILE__) . '/../../../TestData/Amf3TestData.php';
require_once dirname(__FILE__) . '/AmfSerializerWrapper.php';

/**
 * Unit tests for Amfphp_Core_Amf_Serializer, but using amf3
 * note: phpunit dataProvider mechanism doesn't work well, so lots of boiler plate code here. Oh well... A.S.
 *
 * @package Tests_Amfphp_Core_Amf
 * @author Ariel Sommeria-klein
 */
class Amf3SerializationTest extends TestCase {

    /**
     * test basic methods
     */
    public function testBasicMethods() {
        $testData = new Amf3TestData();

        $emptyPacket = new Amfphp_Core_Amf_Packet();
        $emptyPacket->amfVersion = Amfphp_Core_Amf_Constants::AMF3_ENCODING;
        /*
          template

          //write
          $serializer = new AmfSerializerWrapper($emptyPacket);
          $serializer->write($testData->d);
          $serialized = $serializer->getOutput();
          $expectedSerialized = $testData->s;
          $this->assertEquals(bin2hex($serialized), bin2hex($expectedSerialized));

         */

        //undefined
        $serializer = new AmfSerializerWrapper($emptyPacket);
        $serializer->writeAmf3Undefined();
        $serialized = $serializer->getOutput();
        $expectedSerialized = $testData->sUndefined;
        $this->assertEquals(bin2hex($serialized), bin2hex($expectedSerialized));

        //null
        $serializer = new AmfSerializerWrapper($emptyPacket);
        $serializer->writeAmf3Null();
        $serialized = $serializer->getOutput();
        $expectedSerialized = $testData->sNull;
        $this->assertEquals(bin2hex($serialized), bin2hex($expectedSerialized));

        //false
        $serializer = new AmfSerializerWrapper($emptyPacket);
        $serializer->writeAmf3Bool(false);
        $serialized = $serializer->getOutput();
        $expectedSerialized = $testData->sFalse;
        $this->assertEquals(bin2hex($serialized), bin2hex($expectedSerialized));

        //true
        $serializer = new AmfSerializerWrapper($emptyPacket);
        $serializer->writeAmf3Bool(true);
        $serialized = $serializer->getOutput();
        $expectedSerialized = $testData->sTrue;
        $this->assertEquals(bin2hex($serialized), bin2hex($expectedSerialized));

        //integer
        $serializer = new AmfSerializerWrapper($emptyPacket);
        $serializer->writeAmf3Number($testData->dInt1);
        $serialized = $serializer->getOutput();
        $expectedSerialized = $testData->sInt1;
        $this->assertEquals(bin2hex($serialized), bin2hex($expectedSerialized));

        $serializer = new AmfSerializerWrapper($emptyPacket);
        $serializer->writeAmf3Number($testData->dInt2);
        $serialized = $serializer->getOutput();
        $expectedSerialized = $testData->sInt2;
        $this->assertEquals(bin2hex($serialized), bin2hex($expectedSerialized));

        //double
        $serializer = new AmfSerializerWrapper($emptyPacket);
        $serializer->writeAmf3Number($testData->dDouble);
        $serialized = $serializer->getOutput();
        $expectedSerialized = $testData->sDouble;
        $this->assertEquals(bin2hex($serialized), bin2hex($expectedSerialized));

        //string
        $serializer = new AmfSerializerWrapper($emptyPacket);
        $serializer->writeAmf3String($testData->dEmptyString);
        $serialized = $serializer->getOutput();
        $expectedSerialized = $testData->sEmptyString;
        $this->assertEquals(bin2hex($serialized), bin2hex($expectedSerialized));

        $serializer = new AmfSerializerWrapper($emptyPacket);
        $serializer->writeAmf3String($testData->dString);
        $serialized = $serializer->getOutput();
        $expectedSerialized = $testData->sString;
        $this->assertEquals(bin2hex($serialized), bin2hex($expectedSerialized));

        $serializer = new AmfSerializerWrapper($emptyPacket);
        $serializer->writeAmf3String($testData->dString);
        $serializer->writeAmf3String($testData->dString);
        $serialized = $serializer->getOutput();
        $expectedSerialized = $testData->sStringTwice;
        $this->assertEquals(bin2hex($serialized), bin2hex($expectedSerialized));

        //xml
        $serializer = new AmfSerializerWrapper($emptyPacket);
        $serializer->writeAmf3Xml($testData->dXml);
        $serialized = $serializer->getOutput();
        $expectedSerialized = $testData->sXml;
        $this->assertEquals(bin2hex($serialized), bin2hex($expectedSerialized));

        //xml document
        $serializer = new AmfSerializerWrapper($emptyPacket);
        $serializer->writeAmf3XmlDocument($testData->dXmlDocument);
        $serialized = $serializer->getOutput();
        $expectedSerialized = $testData->sXmlDocument;
        $this->assertEquals(bin2hex($serialized), bin2hex($expectedSerialized));

        //date
        $serializer = new AmfSerializerWrapper($emptyPacket);
        $serializer->writeAmf3Date($testData->dDate);
        $serialized = $serializer->getOutput();
        $expectedSerialized = $testData->sDate;
        $this->assertEquals(bin2hex($serialized), bin2hex($expectedSerialized));

        //array
        $serializer = new AmfSerializerWrapper($emptyPacket);
        $serializer->writeAmf3Array($testData->dEmptyArray);
        $serialized = $serializer->getOutput();
        $expectedSerialized = $testData->sEmptyArray;
        $this->assertEquals(bin2hex($serialized), bin2hex($expectedSerialized));

        $serializer = new AmfSerializerWrapper($emptyPacket);
        $serializer->writeAmf3Array($testData->dDenseArray);
        $serialized = $serializer->getOutput();
        $expectedSerialized = $testData->sDenseArray;
        $this->assertEquals(bin2hex($serialized), bin2hex($expectedSerialized));

        $serializer = new AmfSerializerWrapper($emptyPacket);
        $serializer->writeAmf3Array($testData->dMixedArray);
        $serialized = $serializer->getOutput();
        $expectedSerialized = $testData->sMixedArray;
        $this->assertEquals(bin2hex($serialized), bin2hex($expectedSerialized));

        //object
        $serializer = new AmfSerializerWrapper($emptyPacket);
        $serializer->writeAmf3TypedObject($testData->dObject);
        $serialized = $serializer->getOutput();
        $expectedSerialized = $testData->sObject;
        $this->assertEquals(bin2hex($serialized), bin2hex($expectedSerialized));

        //ByteArray
        $serializer = new AmfSerializerWrapper($emptyPacket);
        $serializer->writeAmf3ByteArray($testData->dByteArray);
        $serialized = $serializer->getOutput();
        $expectedSerialized = $testData->sByteArray;
        $this->assertEquals(bin2hex($serialized), bin2hex($expectedSerialized));
        
        //Vector int
        $serializer = new AmfSerializerWrapper($emptyPacket);
        $serializer->writeAMF3Vector($testData->dVectorInt);
        $serialized = $serializer->getOutput();
        $expectedSerialized = $testData->sVectorInt;
        $this->assertEquals(bin2hex($serialized), bin2hex($expectedSerialized));
        
        //Vector uint
        $serializer = new AmfSerializerWrapper($emptyPacket);
        $serializer->writeAMF3Vector($testData->dVectorUint);
        $serialized = $serializer->getOutput();
        $expectedSerialized = $testData->sVectorUint;
        $this->assertEquals(bin2hex($serialized), bin2hex($expectedSerialized));
        
        //Vector double
        $serializer = new AmfSerializerWrapper($emptyPacket);
        $serializer->writeAMF3Vector($testData->dVectorDouble);
        $serialized = $serializer->getOutput();
        $expectedSerialized = $testData->sVectorDouble;
        $this->assertEquals(bin2hex($serialized), bin2hex($expectedSerialized));
        
        //Vector object
        $serializer = new AmfSerializerWrapper($emptyPacket);
        $serializer->writeAMF3Vector($testData->dVectorObject);
        $serialized = $serializer->getOutput();
        $expectedSerialized = $testData->sVectorObject;
        $this->assertEquals(bin2hex($serialized), bin2hex($expectedSerialized));
        
        //dictionary
        /* not supported. 
        $serializer = new AmfSerializerWrapper($emptyPacket);
        $serializer->writeAMF3Dictionary($testData->dDictionary);
        $serialized = $serializer->getOutput();
        $expectedSerialized = $testData->sDictionary;
        $this->assertEquals(bin2hex($serialized), bin2hex($expectedSerialized));
         * 
         */
        
    }

}

?>
