<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Account".
 *
 * @property int $id_account
 * @property string $name_account
 * @property string $username
 * @property string $password
 * @property string $email
 * @property resource $avatar
 */
class Account extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Account';
    }

    public function GetAllAccount()
    {
        return Account::find()->all();
        //SELECT 8 from account 
    }

    //lấy Account với id cho trước
    public function Get_Account($id)
    {
        return Account::findOne($id);
    }


    /**
     * {@inheritdoc}
     */
    //validate kiem tra du lieu
    public function rules()
    {
        return [
            [['name_account', 'username', 'password', 'email'], 'required', 'message' => 'Không được bỏ trống'],
            [['avatar'], 'required'],
            [['avatar'], 'string'],
            [['name_account', 'username', 'password', 'email'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_account' => 'Id Account',
            'name_account' => 'Name Account',
            'username' => 'Username',
            'password' => 'Password',
            'email' => 'Email',
            'avatar' => 'Avatar',
        ];
    }

    //tạo hàm kiểm tra đăng nhập
    public function CheckLogin($username, $password)
    {
        $text = Account::find()->where(['username' => $username, 'password' => $password])->count();
        if ($text == 1) {
            return true;
        } else {
            return false;
        }
    }
}