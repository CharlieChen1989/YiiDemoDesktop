<?php

/**
 * This is the model class for table "state_codes_tbl".
 *
 * The followings are the available columns in table 'state_codes_tbl':
 * @property string $stateID
 * @property string $countryISO3
 * @property string $stateName
 * @property string $prefLang
 * @property string $state_iso2
 */
class StateCodesTbl extends CActiveRecord {

    /**
     * Returns the static model of the specified AR class.
     * @return StateCodesTbl the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'state_codes_tbl';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('countryISO3, stateName, prefLang', 'required'),
            array('countryISO3', 'length', 'max' => 3),
            array('stateName', 'length', 'max' => 70),
            array('prefLang', 'length', 'max' => 5),
            array('state_iso2', 'length', 'max' => 2),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('stateID, countryISO3, stateName, prefLang, state_iso2', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'stateID' => 'State',
            'countryISO3' => 'Country Iso3',
            'stateName' => 'State Name',
            'prefLang' => 'Pref Lang',
            'state_iso2' => 'State Iso2',
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
     */
    public function search() {
        // Warning: Please modify the following code to remove attributes that
        // should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('stateID', $this->stateID, true);
        $criteria->compare('countryISO3', $this->countryISO3, true);
        $criteria->compare('stateName', $this->stateName, true);
        $criteria->compare('prefLang', $this->prefLang, true);
        $criteria->compare('state_iso2', $this->state_iso2, true);

        return new CActiveDataProvider($this, array(
                    'criteria' => $criteria,
                ));
    }

    public function getStateList($cId = '', $only_china = FALSE) {
        $list = array();
        if ($cId == '') {
            if ($only_china) {
                $result = StateCodesTbl::model()->findAll("countryISO3='CHN'");
            } else {
                $result = StateCodesTbl::model()->findAll();
            }
            foreach ($result as $row) {
                $list[$row->stateID] = $row->stateName;
            }
        } else {
            $result = StateCodesTbl::model()->findAll("countryISO3='$cId'");
            foreach ($result as $row) {
                $list[$row->stateID] = $row->stateName;
            }
        }

        return $list;
    }

}