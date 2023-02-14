<?php

namespace frontend\models;

/**
 * Team: RollRollTeam
 * Coding by 许健 2013018
 * 从common\models提取出来，用于前台后台分离
 */

use Yii;
use yii\base\Model;
use frontend\models\User;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $username;
    public $email;
    public $password;

    //增加重复密码、验证码
    public $repassword;
    public $verifyCode;


    /**
     * {@inheritdoc}
     */
    public function rules()
        {
            //增加规则限制
            return[
                ['username', 'filter', 'filter' => 'trim'],
                ['username', 'required'],
                ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => '该用户名已被使用！'],
                ['username', 'string', 'min' => 4, 'max' => 16],
                ['username', 'match','pattern'=>'/^[(\x{4E00}-\x{9FA5})a-zA-Z]+[(\x{4E00}-\x{9FA5})a-zA-Z_\d]*$/u','message'=>'用户名由字母，汉字，数字，下划线组成，且不能以数字和下划线开头。'],
    
                ['email', 'filter', 'filter' => 'trim'],
                ['email', 'required'],
                ['email', 'email'],
                ['email', 'string', 'max' => 255],
                ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => '该邮箱已经被注册！'],
     
                [['password','repassword'], 'required'],
                [['password','repassword'], 'string', 'min' => 6],
                ['repassword', 'compare', 'compareAttribute' => 'password','message'=>'两次输入的密码不一致！'],
                
                ['verifyCode', 'captcha'],
            ];
        }

    /**
     * Signs user up.
     *
     * @return bool whether the creating new account was successful and email was sent
     */
    public function signup()
    {
        if (!$this->validate()) {
            return null;
        }
        
        $user = new User();
        $user->username = $this->username;
        $user->email = $this->email;
        $user->setPassword($this->password);
        $user->generateAuthKey();
        $user->generateEmailVerificationToken();

        return $user->save() && $this->sendEmail($user);
    }

    /**
     * Sends confirmation email to user
     * @param User $user user model to with email should be send
     * @return bool whether the email was sent
     */
    protected function sendEmail($user)
    {
        return Yii::$app
            ->mailer
            ->compose(
                ['html' => 'emailVerify-html', 'text' => 'emailVerify-text'],
                ['user' => $user]
            )
            ->setFrom([Yii::$app->params['supportEmail'] => Yii::$app->name . ' robot'])
            ->setTo($this->email)
            ->setSubject('Account registration at ' . Yii::$app->name)
            ->send();
    }
}
