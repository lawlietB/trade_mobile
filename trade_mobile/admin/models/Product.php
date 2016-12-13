<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "_product".
 *
 * @property string $phonename
 * @property string $brand
 * @property integer $price
 * @property integer $quality
 * @property integer $age
 * @property string $imglink
 * @property string $idphone
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '_product';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['phonename', 'brand', 'price', 'quality', 'age', 'imglink', 'idphone'], 'required'],
            [['price', 'quality', 'age'], 'integer'],
            [['phonename'], 'string', 'max' => 100],
            [['brand'], 'string', 'max' => 20],
            [['imglink'], 'string', 'max' => 200],
            [['idphone'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'phonename' => 'Phonename',
            'brand' => 'Brand',
            'price' => 'Price',
            'quality' => 'Quality',
            'age' => 'Age',
            'imglink' => 'Imglink',
            'idphone' => 'Idphone',
        ];
    }
}
