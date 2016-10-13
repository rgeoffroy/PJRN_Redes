<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "central".
 *
 * @property integer $id
 * @property integer $prefijo
 * @property string $ip
 * @property string $ubicación
 * @property string $version
 *
 * @property Telefono[] $telefonos
 */
class Central extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'central';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['prefijo', 'ip', 'ubicación', 'version'], 'required'],
            [['prefijo'], 'integer'],
            [['ip'], 'string', 'max' => 15],
            [['ubicación'], 'string', 'max' => 250],
            [['version'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'prefijo' => 'Prefijo',
            'ip' => 'Ip',
            'ubicación' => 'Ubicación',
            'version' => 'Version',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTelefonos()
    {
        return $this->hasMany(Telefono::className(), ['central_id' => 'id']);
    }
}
