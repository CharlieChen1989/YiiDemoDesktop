<?php

/**
 * This is the model class for table "messages".
 *
 * The followings are the available columns in table 'messages':
 * @property integer $message_ID
 * @property string $message_title
 * @property string $message_content
 * @property string $create_date
 * @property string $update_date
 *  @property integer $author_ID
 */
class Messages extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Messages the static model class
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
		return 'messages';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('message_title, message_content','required'),
                        array('message_title', 'length', 'max'=>128),
			array('message_content', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('message_ID, message_title, message_content, create_date, update_date, author_ID', 'safe', 'on'=>'search'),
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
			'message_ID' => Yii::t('message', 'Message ID'),
			'message_title' =>Yii::t('message', 'Message Title'),
			'message_content' => Yii::t('message','Message Content'),
                        'create_date' => Yii::t('message','Create Date'),
                        'update_date' => Yii::t('message','Update Date'),
                        'author_ID' => Yii::t('message','Author'),
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

		$criteria->compare('message_ID',$this->message_ID);
		$criteria->compare('message_title',$this->message_title,true);
		$criteria->compare('message_content',$this->message_content,true);
                $criteria->compare('create_date',$this->create_date,true);
                $criteria->compare('update_date',$this->update_date,true);
                $criteria->compare('author_ID',$this->author_ID,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
        public function getArticleList() {
        $value = array();
        $retrun = array();
        $articles = Messages::model()->findAll();
        $i=0;
        foreach ($articles as $article) {      
            $value['label']=$article->message_ID."、".$article->message_title;
            $value['url']='/message/msgshow?msg_ID=' .$article->message_ID;
            $retrun[$i] = $value;
            ++$i;            
        }
        return $retrun;

//        echo '<pre>';
//        print_r($retrun);
//        echo '</pre>';
//        exit; 
        }

}