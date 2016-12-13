<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "_trade".
 *
 * @property string $username
 * @property string $idphone
 */
class Trade extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '_trade';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'idphone'], 'required'],
            [['username'], 'string', 'max' => 50],
            [['idphone'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'username' => 'Username',
            'idphone' => 'Idphone',
        ];
    }
}
