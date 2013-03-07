<?php

/**
 * This is the model class for table "user_profile_tbl".
 *
 * The followings are the available columns in table 'user_profile_tbl':
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property string $email
 * @property string $prefLang
 * @property string $nationality
 * @property integer $stateID
 * @property integer $cityID
 * @property string $bgPicUrl
 */
class UserProfileTbl extends CActiveRecord {
    
    public $oldpassword;
    public $newpassword;
    public $verifypassword;

    /**
     * Returns the static model of the specified AR class.
     * @return User the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'user_profile_tbl';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('username, password, email, nationality, stateID,cityID,verifypassword', 'required'),
            array('username, password', 'length', 'min' => 3, 'max' => 50),
            array('prefLang','length','max'=>6),
            array('bgPicUrl', 'length','max'=>256),
            //array('nationality','length','max'=>3),
            array('email', 'email'),
            array('email,username', 'unique', 'message' => Yii::t('messages', 'This {attribute} has already been registered.')),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, username, password, email, prefLang, nationality', 'safe', 'on' => 'search'),
            array('oldpassword', 'checkPsw','on'=>'update'),
            array('newpassword','compare','compareAttribute'=>'verifypassword','message'=>Yii::t('messages', 'Verify password is not the same with newpassword.'),'on'=>'update'),
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
            'id' => Yii::t('user','ID'),
            'username' => Yii::t('user','Username'),
            'password' => Yii::t('user','Password'),
            'email' => Yii::t('user','Email'),
            'prefLang' =>Yii::t('user', 'PrefLanguage'),
            'nationality'=>Yii::t('user','Nationality'),
            'stateID'=>Yii::t('user','State'),
            'cityID'=>Yii::t('user','City'),
            'bgPicUrl'=>Yii::t('user','background'),
            
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

        $criteria->compare('id', $this->id);
        $criteria->compare('username', $this->username, true);
        $criteria->compare('password', $this->password, true);
        $criteria->compare('email', $this->email, true);
        $criteria->compare('prefLang', $this->prefLang, true);
        $criteria->compare('nationality', $this->nationality, true);
        $criteria->compare('stateID', $this->stateID, true);
        return new CActiveDataProvider($this, array(
                    'criteria' => $criteria,
                ));
    }

    public function md5Password($str) {
        return md5($str);
    }
    
    public function getUsernameByID($id){
        $user = UserProfileTbl::model()->findByPk($id);
        return $user->username;
        
    }
    
    public function checkPsw($attribute, $params) {
        
        if ($this->oldpassword < $this->begin) {
            $message = str_replace('{attribute}', $this->getAttributeLabel($attribute), $params['message']);
            $this->addError($attribute, $message);
        }
    }

}