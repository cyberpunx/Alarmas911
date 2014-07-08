<?php

/**
 * This is the model class for table "clientes".
 *
 * The followings are the available columns in table 'clientes':
 * @property string $cliente_id
 * @property string $Tipos_Cliente_tipo_cliente_id
 * @property string $Persona_persona_id
 * @property string $direccion_cobro
 * @property string $abono_mensual
 * @property string $sistema_secundario_id
 * @property string $factura
 * @property string $razon_social
 * @property string $cuit
 *
 * The followings are the available model relations:
 * @property Persona $personaPersona
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
			array('Tipos_Cliente_tipo_cliente_id, Persona_persona_id', 'required'),
			array('Tipos_Cliente_tipo_cliente_id, Persona_persona_id, abono_mensual, sistema_secundario_id, cuit', 'length', 'max'=>11),
			array('direccion_cobro, factura, razon_social', 'length', 'max'=>1),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('cliente_id, Tipos_Cliente_tipo_cliente_id, Persona_persona_id, direccion_cobro, abono_mensual, sistema_secundario_id, factura, razon_social, cuit', 'safe', 'on'=>'search'),
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
			'personaPersona' => array(self::BELONGS_TO, 'Persona', 'Persona_persona_id'),
			'tiposClienteTipoCliente' => array(self::BELONGS_TO, 'TiposCliente', 'Tipos_Cliente_tipo_cliente_id'),
			'clientesPagosFechas' => array(self::HAS_MANY, 'ClientesPagosFecha', 'Clientes_cliente_id'),
			'sistemaAlarmases' => array(self::HAS_MANY, 'SistemaAlarmas', 'Clientes_cliente_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'cliente_id' => 'Cliente',
			'Tipos_Cliente_tipo_cliente_id' => 'Tipos Cliente Tipo Cliente',
			'Persona_persona_id' => 'Persona Persona',
			'direccion_cobro' => 'Direccion Cobro',
			'abono_mensual' => 'Abono Mensual',
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
		$criteria->compare('Tipos_Cliente_tipo_cliente_id',$this->Tipos_Cliente_tipo_cliente_id,true);
		$criteria->compare('Persona_persona_id',$this->Persona_persona_id,true);
		$criteria->compare('direccion_cobro',$this->direccion_cobro,true);
		$criteria->compare('abono_mensual',$this->abono_mensual,true);
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
}
