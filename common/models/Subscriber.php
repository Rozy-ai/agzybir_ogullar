<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%tbl_subscriber}}".
 *
 * @property integer $id
 * @property string $email
 * @property string $addtime
 */
class Subscriber extends \yii\db\ActiveRecord
{
     // public $email;
     // public $addtime;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%subscription}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['email', 'addtime'], 'required'],
            [['addtime'], 'safe'],
            [['email'], 'string', 'max' => 255],
            [['email'], 'email'],
            [['email'], 'trim'],
            [['email'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'email' => Yii::t('app', 'Email'),
            'addtime' => Yii::t('app', 'Date'),
        ];
    }
}
