<?php

/**
 * This is the model class for table "country_codes_tbl".
 *
 * The followings are the available columns in table 'country_codes_tbl':
 * @property string $PK
 * @property string $ISO2
 * @property string $ISO3
 * @property integer $DHLZone
 * @property string $Prefix
 * @property string $Details
 * @property integer $sort
 */
class CountryCodesTbl extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return CountryCodesTbl the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'country_codes_tbl';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ISO2, ISO3, Prefix, Details', 'required'),
			array('DHLZone, sort', 'numerical', 'integerOnly'=>true),
			array('ISO2', 'length', 'max'=>2),
			array('ISO3', 'length', 'max'=>3),
			array('Prefix', 'length', 'max'=>8),
			array('Details', 'length', 'max'=>250),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('PK, ISO2, ISO3, DHLZone, Prefix, Details, sort', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'PK' => 'Pk',
			'ISO2' => 'Iso2',
			'ISO3' => 'Iso3',
			'DHLZone' => 'Dhlzone',
			'Prefix' => 'Prefix',
			'Details' => 'Details',
			'sort' => 'Sort',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('PK',$this->PK,true);
		$criteria->compare('ISO2',$this->ISO2,true);
		$criteria->compare('ISO3',$this->ISO3,true);
		$criteria->compare('DHLZone',$this->DHLZone);
		$criteria->compare('Prefix',$this->Prefix,true);
		$criteria->compare('Details',$this->Details,true);
		$criteria->compare('sort',$this->sort);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
        public function getCountryList($ISO3 = array()){
            $cdbcriteria = new CDbCriteria();
            $cdbcriteria->order = 'sort DESC,Details ASC';
            $cdbcriteria->condition = '1=1';
            if(!empty($ISO3)){
                $cdbcriteria->addInCondition('ISO3', $ISO3);                
            }
            
            $countryList = array();
            $countrys = CountryCodesTbl::model()->findAll($cdbcriteria);
            foreach($countrys as $country) {
                $countryList[$country->ISO3] = $country->Details;
            }

            return $countryList;
        }
}