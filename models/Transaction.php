<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "transaction".
 *
 * @property int $id_transaction
 * @property int $sotien
 * @property string $date
 * @property string $name_of_transaction
 */
class Transaction extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'transaction';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['sotien', 'date', 'name_of_transaction'], 'required'],
            [['sotien'], 'integer'],
            [['date'], 'safe'],
            [['name_of_transaction'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_transaction' => 'Id Transaction',
            'sotien' => 'Sotien',
            'date' => 'Date',
            'name_of_transaction' => 'Name Of Transaction',
        ];
    }
}
