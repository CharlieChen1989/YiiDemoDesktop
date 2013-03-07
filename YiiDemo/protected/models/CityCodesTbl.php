<?php

/**
 * This is the model class for table "city_codes_tbl".
 *
 * The followings are the available columns in table 'city_codes_tbl':
 * @property integer $cid
 * @property integer $pid
 * @property string $city_name
 * @property string $area_code
 * @property string $postcode
 */
class CityCodesTbl extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return CityCodesTbl the static model class
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
		return 'city_codes_tbl';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pid, city_name, area_code, postcode', 'required'),
			array('pid', 'numerical', 'integerOnly'=>true),
			array('city_name', 'length', 'max'=>40),
			array('area_code', 'length', 'max'=>4),
			array('postcode', 'length', 'max'=>6),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('cid, pid, city_name, area_code, postcode', 'safe', 'on'=>'search'),
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
			'cid' => 'Cid',
			'pid' => 'Pid',
			'city_name' => 'City Name',
			'area_code' => 'Area Code',
			'postcode' => 'Postcode',
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

		$criteria->compare('cid',$this->cid);
		$criteria->compare('pid',$this->pid);
		$criteria->compare('city_name',$this->city_name,true);
		$criteria->compare('area_code',$this->area_code,true);
		$criteria->compare('postcode',$this->postcode,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        public  function getCityList($pid){
            $list = array();
            $result = CityCodesTbl::model()->findAll("pid='$pid'");
            foreach ($result as $row) {
                $list[$row->cid] = $row->city_name;
            }            
            return $list;
        }
        
        public function getPostCode($cityID){
            $result = CityCodesTbl::model()->findByPk($cityID);
            return $result['postcode'];
            
        }
        
}