<?php
/*
 * subordinate Databse Connection
 * @author Liang Chen
 */
class Sub1ActiveRecord extends CActiveRecord {

    //overwride the method
    public function getDbConnection()
    {
        if(self::$db!==null)
            return self::$db;
        else
        {
            //change the comment line
            self::$db=Yii::app()->getComponent('db1');
            //self::$db=Yii::app()->db;
            if(self::$db instanceof CDbConnection)
                return self::$db;
            else
                throw new CDbException(Yii::t('yii','Active Record requires a "db1" CDbConnection application component.'));
        }
    }

}
?>
