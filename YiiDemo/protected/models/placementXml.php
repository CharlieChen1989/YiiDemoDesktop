<?php

/**
 * placementXml class.
 * placementXml is the data structure for keeping
 * placementXml form data. It is used by the 'createXml' action of 'XmlController'.
 */
class placementXml extends CFormModel {

    public $function_name;
    public $operate;
    public $txn_seqno;
    public $txn_time;
    public $vendor_memberID;
    public $vendor_sponsorID;
    public $vendor_parentID;
    public $position;
//    public $leftchild;
//    public $rightchild;

    /**
     * Declares the validation rules.
     */
    public function rules() {
        return array(
            // name, email, subject and body are required
            array('function_name, operate, txn_seqno, txn_time', 'required'),
            // email has to be a valid email address
            
            array('vendor_memberID,vendor_sponsorID,vendor_parentID,position', 'safe'),
            
        );
    }

    /**
     * Declares customized attribute labels.
     * If not declared here, an attribute would have a label that is
     * the same as its name with the first letter in upper case.
     */
    public function attributeLabels() {
        return array(
            'function_name' => 'Function Name',
            'operate' => 'Operate',
            'txn_seqno' => 'Txn SeqNo',
            'txn_time' => 'Txn Time',
            'vendor_memberID' => 'Vendor MemberID',
            'vendor_sponsorID' => 'Vendor SponsorID',
            'vendor_parentID' => 'Vendor ParentID',
            'position' => 'Position',
            
        );
    }

}