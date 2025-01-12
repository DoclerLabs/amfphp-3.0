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
 * test data for the Amfphp unit tests
 * data types have the s prefix for 'serialized' and 'd' prefix for 'deserialized'
 * for Packets there is a flaw in the Amfphp design which means that serializng and deserializing is not symmetrical.
 * so use s for serialized, d for deserialized for the serialization tests and dd for the deserialation tests, the idea being that dd will disappear for v2
 *
 * @package Tests_TestData
 * @author Ariel Sommeria-klein
 */
class AmfTestData {
    //fundamental (stream) types

    /**
     * byte
     * @var string 
     */
    public $sByte;

    /**
     * byte
     * @var int
     */
    public $dByte;

    /**
     * int
     * @var string 
     */
    public $sInt;

    /**
     * int
     * @var int
     */
    public $dInt;

    /**
     * long
     * @var string 
     */
    public $sLong;

    /**
     * long
     * @var int
     */
    public $dLong;

    /**
     * double
     * @var string 
     */
    public $sDouble;

    /**
     * double
     * @var float 
     */
    public $dDouble;

    /**
     * utf string
     * @var string 
     */
    public $sUtf;

    /**
     * string
     * @var 
     */
    public $dUtf;

    /**
     * long utf
     * @var string 
     */
    public $sLongUtf;

    /**
     * long utf
     * @var string
     */
    public $dLongUtf;

    //Amf data types

    /**
     * number
     * @var string 
     */
    public $sNumber;

    /**
     * number 
     * @var float 
     */
    public $dNumber;

    /**
     * boolean
     * @var string 
     */
    public $sBoolean;

    /**
     * boolean
     * @var boolean
     */
    public $dBoolean;

    /**
     * string
     * @var string 
     */
    public $sString;

    /**
     * string
     * @var string
     */
    public $dString;

    /**
     * object
     * @var string 
     */
    public $sObject;

    /**
     * object
     * @var stdClass
     */
    public $dObject;

    /**
     * null
     * @var string 
     */
    public $sNull;

    /**
     * null
     * @var null 
     */
    public $dNull;

    /**
     * undefined
     * @var string 
     */
    public $sUndefined;

    /**
     * undefined
     * @var Amfphp_Core_Amf_Types_Undefined 
     */
    public $dUndefined;

    /**
     * string
     * @var string 
     */
    public $sReference;

    /**
     * reference
     * @var int
     */
    public $dReference;

    /**
     * ecma array
     * @var string 
     */
    public $sEcmaArray;

    /**
     * ecma array
     * @var array
     */
    public $dEcmaArray;

    /**
     * object end
     * @var string 
     */
    public $sObjectEnd;

    /**
     * object end
     * @var null
     */
    public $dObjectEnd;

    /**
     * strict array
     * @var string 
     */
    public $sStrictArray;

    /**
     * strict array
     * @var array
     */
    public $dStrictArray;

    /**
     * date
     * @var string 
     */
    public $sDate;

    /**
     * date
     * @var Amfphp_Core_Amf_Types_Date
     */
    public $dDate;

    /**
     * long string
     * @var string 
     */
    public $sLongString;

    /**
     * long string
     * @var string
     */
    public $dLongString;

    /**
     * unsupported
     * @var string 
     */
    public $sUnsupported;

    /**
     * unsupported
     * @var string
     */
    public $dUnsupported;

    /**
     * xml
     * @var string 
     */
    public $sXml;

    /**
     * xml
     * @var Amfphp_Core_Amf_Types_Xml
     */
    public $dXml;

    /**
     * typed object
     * @var string 
     */
    public $sTypedObject;

    /**
     * typed object
     * @var DummyClass
     */
    public $dTypedObject;

    //Amf Packet objects

    /**
     * empty packet
     * @var string 
     */
    public $sEmptyPacket;

    /**
     * empty packet
     * @var Amfphp_Core_Amf_Packet
     */
    public $dEmptyPacket;

    /**
     * null header packet
     * @var string 
     */
    public $sNullHeaderPacket;

    /**
     * null header packet
     * @var Amfphp_Core_Amf_Packet
     */
    public $dNullHeaderPacket;

    /**
     * string header packet
     * @var string 
     */
    public $sStringHeaderPacket;

    /**
     * string header packet
     * @var Amfphp_Core_Amf_Packet
     */
    public $dStringHeaderPacket;

    /**
     * null message packet
     * @var string Amfphp_Core_Amf_Packet
     */
    public $sNullMessagePacket;

    /**
     * null message packet
     * @var Amfphp_Core_Amf_Packet
     */
    public $dNullMessagePacket;

    /**
     * string message packet
     * @var string 
     */
    public $sStringMessagePacket;

    /**
     * string message packet
     * @var Amfphp_Core_Amf_Packet
     */
    public $dStringMessagePacket;

    /**
     * 2 headers, 2 messages packet
     * @var string 
     */
    public $s2Headers2MessagesPacket;

    /**
     * 2 headers, 2 messages packet
     * @var Amfphp_Core_Amf_Packet
     */
    public $d2Headers2MessagesPacket;

    /**
     * test service request packet
     * @var String
     */
    public $testServiceRequestPacket;

    /**
     * test service request packet
     * @var String
     */
    public $testServiceResponsePacket;

    /**
     * constructor
     */
    public function __construct() {
        $this->buildByte();
        $this->buildInt();
        $this->buildLong();
        $this->buildDouble();
        $this->buildUtf();
        $this->buildLongUtf();
        $this->buildNumber();
        $this->buildBoolean();
        $this->buildString();
        $this->buildObject();
        $this->buildNull();
        $this->buildUndefined();
        $this->buildReference();
        $this->buildEcmaArray();
        $this->buildObjectEnd();
        $this->buildStrictArray();
        $this->buildDate();
        $this->buildLongString();
        $this->buildUnsupported();
        $this->buildXml();
        $this->buildTypedObject();
        $this->buildEmptyPacket();
        $this->buildNullHeaderPacket();
        $this->buildStringHeaderPacket();
        $this->buildNullMessagePacket();
        $this->buildStringMessagePacket();
        $this->build2HeadersAndTwoMessagesPacket();
        $this->buildSimpleTestServiceRequestAndResponse();
        //$this->build;
    }

    /**
     * byte
     */
    public function buildByte() {
        $this->dByte = 42;
        $this->sByte = pack('C', 42);
    }

    /**
     * int: 2 bytes
     *
     */
    public function buildInt() {
        $this->dInt = 42;
        $this->sInt = pack('n', 42);
    }

    /**
     * long: 4 bytes
     */
    public function buildLong() {
        $this->dLong = 42;
        $this->sLong = pack('N', 42);
    }

    /**
     * double: 8 bytes. Careful of little/big endian so that test runs with both systems
     *
     */
    public function buildDouble() {
        $this->dDouble = 42;
        $this->sDouble = pack('d', 42);
        if (Amfphp_Core_Amf_Util::isSystemBigEndian()) {
            $this->sDouble = strrev($this->sDouble);
        }
    }

    /**
     * utf: the length of the data on 2 bytes and then the char data
     */
    public function buildUtf() {
        $testString = 'test string';
        $this->dUtf = $testString;
        $this->sUtf = pack('n', strLen($testString));
        $this->sUtf .= $testString;
    }

    /**
     * long utf: the length of the data on 4 bytes and then the char data. The char data is more than 65xxx long
     */
    public function buildLongUtf() {
        $testString = str_repeat('a', 70000);
        $this->dLongUtf = $testString;
        $this->sLongUtf = pack('N', strLen($testString));
        $this->sLongUtf .= $testString;
    }

    /**
     * actual data types from the spec.
     */

    /**
     * number: type is0, then value in (double)8 bytes. See buildDouble for little/big endian
     */
    public function buildNumber() {
        $this->dNumber = 42;
        //type: 0
        $this->sNumber = pack('C', 0);
        //number
        $numberData = pack('d', 42);
        if (Amfphp_Core_Amf_Util::isSystemBigEndian()) {
            $numberData = strrev($numberData);
        }

        $this->sNumber .= $numberData;
    }

    /**
     * build boolean
     */
    public function buildBoolean() {
        $this->dBoolean = FALSE;
        //type: 1
        $this->sBoolean = pack('C', 1);
        //data : FALSE
        $this->sBoolean .= pack('C', FALSE);
    }

    /**
     * build string
     * 
     */
    public function buildString() {
        $this->dString = 'test string';
        //type : 2
        $this->sString = pack('C', 2);
        //data length on an int
        $this->sString .= pack('n', strlen('test string'));
        //data
        $this->sString .= 'test string';
    }

    /**
     * build object
     * 
     */
    public function buildObject() {
        $this->dObject = new stdClass();
        $this->dObject->firstKey = 'firstValue';
        $this->dObject->secondKey = 'secondValue';
        //type : 3
        $this->sObject = pack('C', 3);

        /**
         * first entry in object
         */
        //key length on an int
        $this->sObject .= pack('n', strLen('firstKey'));
        //data
        $this->sObject .= 'firstKey';
        //data type is string, so use string(2)
        $this->sObject .= pack('C', 2);
        //data length
        $this->sObject .= pack('n', strLen('firstValue'));
        //data
        $this->sObject .= 'firstValue';

        /**
         * second entry in object
         */
        //key length on an int
        $this->sObject .= pack('n', strLen('secondKey'));
        //data
        $this->sObject .= 'secondKey';
        //data type is string, so use string(2)
        $this->sObject .= pack('C', 2);
        //data length
        $this->sObject .= pack('n', strLen('secondValue'));
        //data
        $this->sObject .= 'secondValue';

        //object end
        $this->sObject .= pack('Cn', 0, 9);
    }

    /**
     * build null
     */
    public function buildNull() {
        $this->dNull = NULL;
        //type: 5
        $this->sNull = pack('C', 5);
    }

    /**
     * build undefined
     */
    public function buildUndefined() {
        $this->dUndefined = new Amfphp_Core_Amf_Types_Undefined();
        //type: 6
        $this->sUndefined = pack('C', 6);
    }

    /**
     * TODO test with a real reference?
     */
    public function buildReference() {
        $this->dReference = 12345;
        //type: 7
        $this->sReference = pack('C', 7);
        //reference on an int.
        $this->sReference .= pack('n', 12345);
    }

    /**
     * the writeArray method looks at the keys. If there are both numeric and string keys, the data is treated as an Ecma Array
     * it also sorts the data and writes the data with numerical keys first, then the data with string keys
     */
    public function buildEcmaArray() {
        $this->dEcmaArray = Array('firstKey' => 'firstValue', 0 => 'secondValue');
        //type : 8
        $this->sEcmaArray = pack('C', 8);
        //number of sub objects on a long
        //TODO the spec says count of all sub objects(here 2) , whereas the code says count of objects with numerical keys(here 1). Clean? A.S.
        $this->sEcmaArray .= pack('N', 1);


        /**
         * first entry in object. (0->secondValue, because of sorting)
         */
        //key length on an int
        $this->sEcmaArray .= pack('n', strLen('0'));
        //data
        $this->sEcmaArray .= '0';
        //data type is string, so use string(2)
        $this->sEcmaArray .= pack('C', 2);
        //data length
        $this->sEcmaArray .= pack('n', strLen('secondValue'));
        //data
        $this->sEcmaArray .= 'secondValue';

        /**
         * second entry in object
         */
        //key length on an int
        $this->sEcmaArray .= pack('n', strLen('firstKey'));
        //data
        $this->sEcmaArray .= 'firstKey';
        //data type is string, so use string(2)
        $this->sEcmaArray .= pack('C', 2);
        //data length
        $this->sEcmaArray .= pack('n', strLen('firstValue'));
        //data
        $this->sEcmaArray .= 'firstValue';


        $this->sEcmaArray .= pack('Cn', 0, 9);
    }

    /**
     * build object end
     */
    public function buildObjectEnd() {
        $this->dObjectEnd = NULL;
        //type: 9
        $this->sObjectEnd = pack('ccc', 0, 0, 9);
    }

    /**
     * build strict array
     */
    public function buildStrictArray() {
        $this->dStrictArray = Array('firstValue', 'secondValue');
        //type : 0x0A
        $this->sStrictArray = pack('C', 0x0A);
        //number of sub objects on a long
        $this->sStrictArray .= pack('N', 2);


        /**
         * first entry in object. (0->secondValue, because of sorting)
         */
        //data type is string, so use string(2)
        $this->sStrictArray .= pack('C', 2);
        //data length
        $this->sStrictArray .= pack('n', strLen('firstValue'));
        //data
        $this->sStrictArray .= 'firstValue';

        /**
         * second entry in object
         */
        //data type is string, so use string(2)
        $this->sStrictArray .= pack('C', 2);
        //data length
        $this->sStrictArray .= pack('n', strLen('secondValue'));
        //data
        $this->sStrictArray .= 'secondValue';


        /**
         * note : no end object marker!
         */
    }

    /**
     * build date
     */
    public function buildDate() {
        $this->dDate = new Amfphp_Core_Amf_Types_Date(1306926779576); //1st June 2011
        //type: 0x0B
        $this->sDate = pack('C', 0x0B);
        //date is a double, see writeDouble for little/big endian
        $dateData = pack('d', 1306926779576);
        if (Amfphp_Core_Amf_Util::isSystemBigEndian()) {
            $dateData = strrev($dateData);
        }
        $this->sDate .= $dateData;
        //time zone, not supported. int set to 0
        $this->sDate .= pack('n', 0);
    }

    /**
     * build long string
     */
    public function buildLongString() {
        //needs to be more than 65535 characters.
        $this->dLongString = str_repeat('a', 70000);
        //type : 0x0C
        $this->sLongString = pack('C', 0x0C);
        //data length on a long
        $this->sLongString .= pack('N', strlen($this->dLongString));
        //data
        $this->sLongString .= $this->dLongString;
    }

    /**
     * TODO: no writeUnsupported method, and no PHP for unsupported. Write it A.S.
     */
    public function buildUnsupported() {
        $this->dUnsupported = 'unsupported';
        //type: 0x0D
        $this->sUnsupported = pack('C', 0x0D);
    }

    /**
     * note: the writeXml method gets rids of CRs and LFs
     */
    public function buildXml() {
        $this->dXml = new Amfphp_Core_Amf_Types_Xml('<testXml>test</testXml>');
        //type : 0xOF
        $this->sXml = pack('C', 0x0F);
        //data length on a long
        $this->sXml .= pack('N', strlen($this->dXml->data));
        //data
        $this->sXml .= $this->dXml->data;
    }

    /**
     * note: the writeXml method gets rids of CRs and LFs
     */
    public function buildTypedObject() {
        $this->dTypedObject = new stdClass();
        $this->dTypedObject->data = 'dummyData';
        $this->dTypedObject->_explicitType = 'DummyClass';
        //type : 0x10
        $this->sTypedObject = pack('C', 0x10);
        //class name length on a int
        $this->sTypedObject .= pack('n', strLen('DummyClass'));
        //class name
        $this->sTypedObject .= 'DummyClass';
        //length of member obj name on an int
        $this->sTypedObject .= pack('n', strLen('data'));
        //member obj
        $this->sTypedObject .= 'data';
        //type of member obj: string (0x02)
        $this->sTypedObject .= pack('C', 0x02);
        //length of member obj value on an int
        $this->sTypedObject .= pack('n', strLen('dummyData'));
        //member obj value
        $this->sTypedObject .= 'dummyData';
        // end object marker
        $this->sTypedObject .= pack('Cn', 0, 9);
    }

    /**
     * Amf Packets
     */

    /**
     * test serializing an empty Amfphp_Core_Amf_Packet.
     * expected output: 0x000000
     * 1st int : version
     * 2nd int : number of headers
     * 3rd int : number of Messages
     */
    public function buildEmptyPacket() {
        $this->dEmptyPacket = new Amfphp_Core_Amf_Packet();
        $this->sEmptyPacket = pack('nnn', 0, 0, 0);
    }

    /**
     * one header containing a null, and with required set to true
     */
    public function buildNullHeaderPacket() {
        $nullHeader = new Amfphp_Core_Amf_Header('null header', TRUE, NULL);

        $this->dNullHeaderPacket = new Amfphp_Core_Amf_Packet();
        $this->dNullHeaderPacket->headers[] = $nullHeader;

        //version (int)
        $this->sNullHeaderPacket = pack('n', 0);
        //number of headers (int)
        $this->sNullHeaderPacket .= pack('n', 1);
        //header name length (int)
        $this->sNullHeaderPacket .= pack('n', strlen($nullHeader->name));
        //header name
        $this->sNullHeaderPacket .= $nullHeader->name;
        //required (here true, cf constructor of $nullHeader)
        $this->sNullHeaderPacket .= pack('C', 1);

        //null type indicator (byte)
        $headerValueData = pack('C', 5);

        //header value length (long)
        $this->sNullHeaderPacket .= pack('N', strlen($headerValueData));
        //header value
        $this->sNullHeaderPacket .= $headerValueData;

        //number of Messages
        $this->sNullHeaderPacket .= pack('n', 0);
    }

    /**
     *  with one header containing a string
     */
    public function buildStringHeaderPacket() {
        $stringHeader = new Amfphp_Core_Amf_Header('string header', FALSE, 'zzzzzz');

        $this->dStringHeaderPacket = new Amfphp_Core_Amf_Packet();
        $this->dStringHeaderPacket->headers[] = $stringHeader;
        //version (int)
        $this->sStringHeaderPacket = pack('n', 0);
        //number of headers (int)
        $this->sStringHeaderPacket .= pack('n', 1);
        //header name length (int)
        $this->sStringHeaderPacket .= pack('n', strlen($stringHeader->name));
        //header name
        $this->sStringHeaderPacket .= $stringHeader->name;
        //required(false)
        $this->sStringHeaderPacket .= pack('C', 0);

        //string type indicator (byte)
        $headerValueData = pack('C', 2);
        //header value length (int)
        $headerValueData .= pack('n', strlen($stringHeader->data));
        //header value (works because the value is a string)
        $headerValueData .= $stringHeader->data;

        //header value length (long)
        $this->sStringHeaderPacket .= pack('N', strlen($headerValueData));
        //header value
        $this->sStringHeaderPacket .= $headerValueData;

        //number of Messages
        $this->sStringHeaderPacket .= pack('n', 0);
    }

    /**
     * no headers and a Message containing a null
     */
    public function buildNullMessagePacket() {
        $nullMessage = new Amfphp_Core_Amf_Message();
        $nullMessage->targetUri = '/onStatus';
        $nullMessage->responseUri = 'null';
        $this->dNullMessagePacket = new Amfphp_Core_Amf_Packet();
        $this->dNullMessagePacket->messages[] = $nullMessage;

        //version (int)
        $this->sNullMessagePacket = pack('n', 0);
        //number of headers (int)
        $this->sNullMessagePacket .= pack('n', 0);
        //number of Messages
        $this->sNullMessagePacket .= pack('n', 1);
        //target uri length
        $this->sNullMessagePacket .= pack('n', 9);
        //target uri.
        $this->sNullMessagePacket .= '/onStatus';
        //response uri length
        $this->sNullMessagePacket .= pack('n', 4);
        //response uri.
        $this->sNullMessagePacket .= 'null';

        //result is NULL by default. this is one byte for type that is worth 5, and no data
        $messageResultsData = pack('C', 5);
        //result length, long
        $this->sNullMessagePacket .= pack('N', strlen($messageResultsData));
        //add the result itself
        $this->sNullMessagePacket .= $messageResultsData;
    }

    /**
     *  no headers and a Message containing a string
     */
    public function buildStringMessagePacket() {
        $stringMessage = new Amfphp_Core_Amf_Message();
        $testString = 'test string';
        $stringMessage->targetUri = '/onStatus';
        $stringMessage->responseUri = 'null';
        $stringMessage->data = $testString;
        $this->dStringMessagePacket = new Amfphp_Core_Amf_Packet();
        $this->dStringMessagePacket->messages[] = $stringMessage;

        //version (int)
        $this->sStringMessagePacket = pack('n', 0);
        //number of headers (int)
        $this->sStringMessagePacket .= pack('n', 0);
        //number of Messages
        $this->sStringMessagePacket .= pack('n', 1);
        //target uri length
        $this->sStringMessagePacket .= pack('n', 9);
        //target uri.
        $this->sStringMessagePacket .= '/onStatus';
        //response uri length
        $this->sStringMessagePacket .= pack('n', 4);
        //response uri. default is 'null'
        $this->sStringMessagePacket .= 'null';

        //result is string. byte with '2' as data type, then length, then char data
        $messageResultsData = pack('C', 2) . pack('n', strLen($testString)) . $testString;
        //result length, long
        $this->sStringMessagePacket .= pack('N', strlen($messageResultsData));
        //add the result itself
        $this->sStringMessagePacket .= $messageResultsData;
    }

    /**
     * an Amfphp_Core_Amf_Packet with two headers one with a string and one with a null , and two Messages, one with a string and one with a null
     */
    public function build2HeadersAndTwoMessagesPacket() {
        $nullHeader = new Amfphp_Core_Amf_Header('null header', TRUE, NULL);
        $stringHeader = new Amfphp_Core_Amf_Header('string header', FALSE, 'zzzzzz');
        $nullMessage = new Amfphp_Core_Amf_Message();
        $nullMessage->targetUri = '/onStatus';
        $nullMessage->responseUri = 'null';
        $stringMessage = new Amfphp_Core_Amf_Message();
        $testString = 'test string';
        $stringMessage->targetUri = '/onStatus';
        $stringMessage->responseUri = 'null';
        $stringMessage->data = $testString;

        $this->d2Headers2MessagesPacket = new Amfphp_Core_Amf_Packet();
        $this->d2Headers2MessagesPacket->headers[] = $stringHeader;
        $this->d2Headers2MessagesPacket->headers[] = $nullHeader;
        $this->d2Headers2MessagesPacket->messages[] = $stringMessage;
        $this->d2Headers2MessagesPacket->messages[] = $nullMessage;
        //version (int)
        $this->s2Headers2MessagesPacket = pack('n', 0);
        //number of headers (int)
        $this->s2Headers2MessagesPacket .= pack('n', 2);

        /**
         * first header (string)
         */
        //header name length (int)
        $this->s2Headers2MessagesPacket .= pack('n', strlen($stringHeader->name));
        //header name
        $this->s2Headers2MessagesPacket .= $stringHeader->name;
        //required(false) (byte)
        $this->s2Headers2MessagesPacket .= pack('C', 0);

        //string type indicator (byte)
        $headerValueData = pack('C', 2);
        //header value length (int)
        $headerValueData .= pack('n', strlen($stringHeader->data));
        //header value (works because the value is a string)
        $headerValueData .= $stringHeader->data;

        //header value length (long)
        $this->s2Headers2MessagesPacket .= pack('N', strlen($headerValueData));
        //header value
        $this->s2Headers2MessagesPacket .= $headerValueData;

        /**
         * second header (null)
         */
        //header name length (int)
        $this->s2Headers2MessagesPacket .= pack('n', strlen($nullHeader->name));
        //header name
        $this->s2Headers2MessagesPacket .= $nullHeader->name;
        //required (here true, cf constructor of $nullHeader)
        $this->s2Headers2MessagesPacket .= pack('C', 1);

        //string type indicator (byte)
        $headerValueData = pack('C', 5);
        //header value length (long)
        $this->s2Headers2MessagesPacket .= pack('N', strlen($headerValueData));
        //header value
        $this->s2Headers2MessagesPacket .= $headerValueData;

        /**
         * Messages
         */
        //number of Messages
        $this->s2Headers2MessagesPacket .= pack('n', 2);

        /**
         * first Message (string)
         */
        //target uri length
        $this->s2Headers2MessagesPacket .= pack('n', 9);
        //target uri. This is responseIndex (default is '') + '/onStatus'
        $this->s2Headers2MessagesPacket .= '/onStatus';
        //response uri length
        $this->s2Headers2MessagesPacket .= pack('n', 4);
        //response uri. default is 'null'
        $this->s2Headers2MessagesPacket .= 'null';

        //result is string. byte with '2' as data type, then length, then char data
        $messageResultsData = pack('C', 2) . pack('n', strLen($testString)) . $testString;
        //result length, long
        $this->s2Headers2MessagesPacket .= pack('N', strlen($messageResultsData));
        //add the result itself
        $this->s2Headers2MessagesPacket .= $messageResultsData;

        /**
         * second Message (null)
         */
        //target uri length
        $this->s2Headers2MessagesPacket .= pack('n', 9);
        //target uri. This is responseIndex (default is '') + '/onStatus'
        $this->s2Headers2MessagesPacket .= '/onStatus';
        //response uri length
        $this->s2Headers2MessagesPacket .= pack('n', 4);
        //response uri. default is 'null'
        $this->s2Headers2MessagesPacket .= 'null';

        //result is null
        $messageResultsData = pack('C', 5);
        //result length, long
        $this->s2Headers2MessagesPacket .= pack('N', strlen($messageResultsData));
        //add the result itself
        $this->s2Headers2MessagesPacket .= $messageResultsData;
    }

    /**
     * Packets with a proper response, used to test gateway. dependant on service used. Here all will be based on mirror test, where the response data is
     * the same as the request data.
     */

    /**
     * build simple test service reauest and response
     */
    public function buildSimpleTestServiceRequestAndResponse() {

        //request

        $requestTargetUri = 'TestService/returnOneParam';
        $requestResponseUri = '/1';

        //version (int)
        $requestPacket = pack('n', 0);
        //number of headers (int)
        $requestPacket .= pack('n', 0);
        //number of Messages
        $requestPacket .= pack('n', 1);
        //target uri length
        $requestPacket .= pack('n', strlen($requestTargetUri));
        //target uri .
        $requestPacket .= $requestTargetUri;
        //response uri length
        $requestPacket .= pack('n', strlen($requestResponseUri));
        //response uri.
        $requestPacket .= $requestResponseUri;

        //the function call parameters, and the returned data are the same with the mirror service.
        ////here a strict array containing a string
        //type : 0x0A
        $requestMessage = pack('C', 0x0A);
        //number of sub objects on a long
        $requestMessage .= pack('N', 1);

        //the contained string
        //data type is string, so use string(2)
        $requestMessage .= pack('C', 2);
        //data length
        $requestMessage .= pack('n', strLen('testString'));
        //data
        $requestMessage .= 'testString';
        $requestMessageLength = strLen($requestMessage);

        //Message length, long
        $requestPacket .= pack('N', $requestMessageLength);
        //add the Message itself
        $requestPacket .= $requestMessage;

        $this->testServiceRequestPacket = $requestPacket;





        //response

        $responseTargetUri = '/1/onResult';
        $responseResponseUri = 'null';

        //version (int)
        $responsePacket = pack('n', 0);
        //number of headers (int)
        $responsePacket .= pack('n', 0);
        //number of Messages
        $responsePacket .= pack('n', 1);
        //target uri length
        $responsePacket .= pack('n', strlen($responseTargetUri));
        //target uri .
        $responsePacket .= $responseTargetUri;
        //response uri length
        $responsePacket .= pack('n', strlen($responseResponseUri));
        //response uri.
        $responsePacket .= $responseResponseUri;

        //response Message. here the string sent in the request
        //data type is string, so use string(2)
        $responseMessage = pack('C', 2);
        //data length
        $responseMessage .= pack('n', strLen('testString'));
        //data
        $responseMessage .= 'testString';
        $responseMessageLength = strLen($responseMessage);

        //Message length, long
        $responsePacket .= pack('N', $responseMessageLength);
        //add the Message itself
        $responsePacket .= $responseMessage;


        $this->testServiceResponsePacket = $responsePacket;
    }

}

/**
 * used for testing with typed objects
 * @package Tests_TestData
 */
class DummyClass {

    /**
     * data
     * @var mixed
     */
    public $data;

}

?>
