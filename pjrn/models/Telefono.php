<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "telefono".
 *
 * @property integer $id
 * @property integer $numero
 * @property integer $ciudad_id
 * @property string $label
 * @property integer $usuario_id
 * @property string $serial
 * @property string $macaddress
 * @property string $patrimonio
 * @property integer $central_id
 * @property integer $habilitado
 *
 * @property Central $central
 * @property Usuario $usuario
 */
class Telefono extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'telefono';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['numero', 'ciudad_id', 'label', 'serial', 'macaddress', 'patrimonio', 'central_id'], 'required'],
            [['numero', 'ciudad_id', 'usuario_id', 'central_id', 'habilitado'], 'integer'],
            [['label'], 'string', 'max' => 254],
            [['serial', 'macaddress'], 'string', 'max' => 50],
            [['patrimonio'], 'string', 'max' => 20],
            [['central_id'], 'exist', 'skipOnError' => true, 'targetClass' => Central::className(), 'targetAttribute' => ['central_id' => 'id']],
            [['usuario_id'], 'exist', 'skipOnError' => true, 'targetClass' => Usuario::className(), 'targetAttribute' => ['usuario_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'numero' => 'Numero',
            'ciudad_id' => 'Ciudad ID',
            'label' => 'Label',
            'usuario_id' => 'Usuario ID',
            'serial' => 'Serial',
            'macaddress' => 'Macaddress',
            'patrimonio' => 'Patrimonio',
            'central_id' => 'Central ID',
            'habilitado' => 'Habilitado',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCentral()
    {
        return $this->hasOne(Central::className(), ['id' => 'central_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsuario()
    {
        return $this->hasOne(Usuario::className(), ['id' => 'usuario_id']);
    }
}
