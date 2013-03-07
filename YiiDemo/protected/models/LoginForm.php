<?php

/**
 * LoginForm class.
 * LoginForm is the data structure for keeping
 * user login form data. It is used by the 'login' action of 'SiteController'.
 */
class LoginForm extends CFormModel {

    public $username;
    public $password;
    public $rememberMe;
    private $_identity;

    /**
     * Declares the validation rules.
     * The rules state that username and password are required,
     * and password needs to be authenticated.
     */
    public function rules() {
        return array(
            // username and password are required
            array('username, password', 'required'),
            // rememberMe needs to be a boolean
            array('rememberMe', 'boolean'),
            // password needs to be authenticated
            array('password', 'authenticate'),
            
            /*
            array('membershipNo', 'length', 'is' => 10,'on' => 'placement'),
            array('displayName', 'length', 'max' => 30),
            array('displayName,','required'),
            array('frozen_status', 'numerical', 'integerOnly' => true),
            array('frozen_status', 'in', 'range' => array(0, 10, 20,30), 'message' => "Frozen Status should only be 0, 10, 20, or 30"),
            
             */
        );
    }

    /**
     * Declares attribute labels.
     */
    public function attributeLabels() {
        return array(
            'username' => Yii::t('user', 'Username'),
            'password' => Yii::t('user', 'Password'),
            'rememberMe' => Yii::t('user','Remember me next time'),
        );
    }

    /**
     * Authenticates the password.
     * This is the 'authenticate' validator as declared in rules().
     */
    public function authenticate() {
        if (!$this->hasErrors()) {
            $this->_identity = new UserIdentity($this->username, UserProfileTbl::model()->md5Password($this->password));
            if ($this->_identity->authenticate()) {
                $user = UserProfileTbl::model()->findByAttributes(array('username' => $this->username));
                
                $language = $this->_getLang($user->prefLang);
                Yii::app()->language = $language;
                $cookie = new CHttpCookie('setlang', $language);
                Yii::app()->request->cookies['setlang'] = $cookie;
                
                $userInfo = array(
                    'userID' =>$user->id,
                    'username' => $user->username,
                    'prefLang' =>$user->prefLang, 
                    'email' =>$user->email,
                    'bgPicUrl'=>$user->bgPicUrl,
                );
                $user->prefLang = $language;
                //var_dump($userInfo);exit;
                Yii::app()->session->add('userInfo',$userInfo);
                Yii::app()->user->login($this->_identity);
                
                return $user->save(false);
            } else {
                $this->addError('password', 'Incorrect username or password.');
                return false;
            }
        }
    }
    private function _getLang($lang) {
        $langs = array('en', 'zh_cn', 'zh_tw');
        $language = 'zh_cn';
        $cookie = Yii::app()->request->getCookies();
        if (isset($cookie['setlang'])) {
            $language = $cookie['setlang']->value;
        } else {
            if (in_array($lang, $langs)) {
                $language = $lang;
            }
        }

        return $language;
    }

}
