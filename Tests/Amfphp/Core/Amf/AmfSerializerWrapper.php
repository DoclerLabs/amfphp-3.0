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
 * This class exports some internal (public) methods. This way, those methods
 * can be tested separately.
 * @package Tests_Amfphp_Core_Amf
 * @author Ariel Sommeria-klein
 */
class AmfSerializerWrapper extends Amfphp_Core_Amf_Serializer {

    /**
     * constructor
     * @param Amfphp_Core_Amf_Packet $packet
     */
    public function __construct($packet) {
        $this->packet = $packet;
        $this->resetReferences();
    }

    /**
     * write byte
     * @param int $b
     */
    public function writeByte($b) {
        parent::writeByte($b);
    }

    /**
     * write int
     * @param int $n
     */
    public function writeInt($n) {
        parent::writeInt($n);
    }

    /**
     * write long
     * @param int $l
     */
    public function writeLong($l) {
        parent::writeLong($l);
    }

    /**
     * write utf string
     * @param string $s
     */
    public function writeUtf($s) {
        parent::writeUtf($s);
    }

    /**
     * write double
     * @param float $s
     */
    public function writeDouble($s) {
        parent::writeDouble($s);
    }

    /**
     * write long utf string
     * @param string $s
     */
    public function writeLongUtf($s) {
        parent::writeLongUtf($s);
    }

    /**
     * write number
     * @param float $d
     */
    public function writeNumber($d) {
        parent::writeNumber($d);
    }

    /**
     * write boolean
     * @param boolean $b
     */
    public function writeBoolean($b) {
        parent::writeBoolean($b);
    }

    /**
     * write  string
     * @param string $d
     */
    public function writeString($d) {
        parent::writeString($d);
    }

    /**
     * write xml
     * @param Amfphp_Core_Amf_Types_Xml $d
     */
    public function writeXML(Amfphp_Core_Amf_Types_Xml $d) {
        parent::writeXML($d);
    }

    /**
     * write date
     * @param Amfphp_Core_Amf_Types_Date $d
     */
    public function writeDate(Amfphp_Core_Amf_Types_Date $d) {
        parent::writeDate($d);
    }

    /**
     * write null
     */
    public function writeNull() {
        parent::writeNull();
    }

    /**
     * write undefined
     */
    public function writeUndefined() {
        parent::writeUndefined();
    }

    /**
     * write object end
     */
    public function writeObjectEnd() {
        parent::writeObjectEnd();
    }

    /**
     * write array or object
     * @param array|object $d
     */
    public function writeArrayOrObject($d) {
        parent::writeArrayOrObject($d);
    }

    /**
     * write reference
     * @param int $d
     */
    public function writeReference($num) {
        parent::writeReference($num);
    }

    /**
     * write typed object
     * @param object $d
     */
    public function writeTypedObject($d) {
        parent::writeTypedObject($d);
    }

    /**
     * write amf3 datas
     * @param mixed $d
     */
    public function writeAmf3Data($d) {
        parent::writeAmf3Data($d);
    }

    /**
     * write amf3 null
     */
    public function writeAmf3Null() {
        parent::writeAmf3Null();
    }

    /**
     * write amf3 undefined
     */
    public function writeAmf3Undefined() {
        parent::writeAmf3Undefined();
    }

    /**
     * write amf3 boolean
     * @param boolean $d
     */
    public function writeAmf3Bool($d) {
        parent::writeAmf3Bool($d);
    }

    /**
     * write amf3 number
     * @param float $d
     */
    public function writeAmf3Number($d) {
        parent::writeAmf3Number($d);
    }

    /**
     * write amf3 string
     * @param string $d
     */
    public function writeAmf3String($d) {
        parent::writeAmf3String($d);
    }

    /**
     * write amf3 xml
     * @param Amfphp_Core_Amf_Types_Xml $d
     */
    public function writeAmf3Xml(Amfphp_Core_Amf_Types_Xml $d) {
        parent::writeAmf3Xml($d);
    }

    /**
     * write amf3 xml doc
     * @param Amfphp_Core_Amf_Types_XmlDocument $d
     */
    public function writeAmf3XmlDocument(Amfphp_Core_Amf_Types_XmlDocument $d) {
        parent::writeAmf3XmlDocument($d);
    }

    /**
     * write amf3 date
     * @param Amfphp_Core_Amf_Types_Date $d
     */
    public function writeAmf3Date(Amfphp_Core_Amf_Types_Date $d) {
        parent::writeAmf3Date($d);
    }

    /**
     * write amf3 array
     * @param array $d
     */
    public function writeAmf3Array(array $d) {
        parent::writeAmf3Array($d);
    }

    /**
     * write amf3 typed object
     * @param stdClass $d
     */
    public function writeAmf3TypedObject(/* object */ $d) {
        parent::writeAmf3TypedObject($d);
    }

    /**
     * write Amfphp_Core_Amf_Types_ByteArray in amf3
     * @param Amfphp_Core_Amf_Types_ByteArray $d
     */
    public function writeAmf3ByteArray(Amfphp_Core_Amf_Types_ByteArray $d) {
        parent::writeAmf3ByteArray($d);
    }
    
    /**
     * write Amfphp_Core_Amf_Types_Vector in amf3
     * @param Amfphp_Core_Amf_Types_Vector $d
     */
    public function writeAmf3Vector(Amfphp_Core_Amf_Types_Vector $d) {
        parent::writeAmf3Vector($d);
    }    
    
}

?>