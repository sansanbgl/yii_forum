<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user_2".
 *
 * @property integer $id_user
 * @property string $name_user
 * @property string $password_user
 * @property string $saltpassword_user
 * @property string $email_user
 * @property integer $level_id
 */
class User2 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    
    public $password2; 
    public $verifyCode;
    public static function tableName()
    {
        return 'user_2';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['level_id'], 'integer'],
            [['name_user', 'password_user'], 'required'],
            [['name_user', 'email_user'], 'string','min' => 3, 'max' => 50],
            [['password_user', 'saltpassword_user'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_user' => 'Id User',
            'name_user' => 'Name User',
            'password_user' => 'Password User',
            'saltpassword_user' => 'Saltpassword User',
            'email_user' => 'Email User',
            'level_id' => 'Level ID',
        ];
    }


}
