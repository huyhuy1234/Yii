<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "wallet".
 *
 * @property int $id_wallet
 * @property int|null $sodu
 */
class Wallet extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'wallet';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['sodu'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_wallet' => 'Id Wallet',
            'sodu' => 'Sodu',
        ];
    }
}
