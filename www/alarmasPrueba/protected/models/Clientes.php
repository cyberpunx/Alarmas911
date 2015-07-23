<?php

/**
 * This is the model class for table "clientes".
 *
 * The followings are the available columns in table 'clientes':
 * @property string $cliente_id
 * @property string $tipos_cliente_tipo_cliente_id
 * @property string $personas_persona_id
 * @property string $direccion_cobro
 * @property string $sistema_secundario_id
 * @property string $factura
 * @property string $razon_social
 * @property string $cuit
 *
 * The followings are the available model relations:
 * @property Personas $personasPersona
 * @property TiposCliente $tiposClienteTipoCliente
 * @property ClientesPagosFecha[] $clientesPagosFechas
 * @property SistemaAlarmas[] $sistemaAlarmases
 */
class Clientes extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'clientes';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tipos_cliente_tipo_cliente_id, personas_persona_id', 'required'),
			array('tipos_cliente_tipo_cliente_id, personas_persona_id, sistema_secundario_id, cuit', 'length', 'max'=>11),
			array('direccion_cobro, factura, razon_social', 'length', 'max'=>128),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('cliente_id, tipos_cliente_tipo_cliente_id, personas_persona_id, direccion_cobro, sistema_secundario_id, factura, razon_social, cuit', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'personasPersona' => array(self::BELONGS_TO, 'Personas', 'personas_persona_id'),
			'tiposClienteTipoCliente' => array(self::BELONGS_TO, 'TiposCliente', 'tipos_cliente_tipo_cliente_id'),
			'clientesPagosFechas' => array(self::HAS_MANY, 'ClientesPagosFecha', 'usuarios_usuario_id'),
			'sistemaAlarmases' => array(self::HAS_MANY, 'SistemaAlarmas', 'usuarios_usuario_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'cliente_id' => 'Cliente',
			'tipos_cliente_tipo_cliente_id' => 'Tipos Cliente Tipo Cliente',
			'personas_persona_id' => 'Personas Persona',
			'direccion_cobro' => 'Direccion Cobro',
			'sistema_secundario_id' => 'Sistema Secundario',
			'factura' => 'Factura',
			'razon_social' => 'Razon Social',
			'cuit' => 'Cuit',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('cliente_id',$this->cliente_id,true);
		$criteria->compare('tipos_cliente_tipo_cliente_id',$this->tipos_cliente_tipo_cliente_id,true);
		$criteria->compare('personas_persona_id',$this->personas_persona_id,true);
		$criteria->compare('direccion_cobro',$this->direccion_cobro,true);
		$criteria->compare('sistema_secundario_id',$this->sistema_secundario_id,true);
		$criteria->compare('factura',$this->factura,true);
		$criteria->compare('razon_social',$this->razon_social,true);
		$criteria->compare('cuit',$this->cuit,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Clientes the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	public function behaviors()
    {
        return array('ESaveRelatedBehavior' => array(
                'class' => 'application.components.ESaveRelatedBehavior')
        );
    }
}
