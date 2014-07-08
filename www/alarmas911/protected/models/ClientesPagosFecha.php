<?php

/**
 * This is the model class for table "clientes_pagos_fecha".
 *
 * The followings are the available columns in table 'clientes_pagos_fecha':
 * @property string $cliente_pago_fecha_id
 * @property string $Pagos_pago_id
 * @property string $Clientes_cliente_id
 * @property string $fecha
 *
 * The followings are the available model relations:
 * @property Clientes $clientesCliente
 * @property Pagos $pagosPago
 */
class ClientesPagosFecha extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'clientes_pagos_fecha';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Pagos_pago_id, Clientes_cliente_id', 'length', 'max'=>11),
			array('fecha', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('cliente_pago_fecha_id, Pagos_pago_id, Clientes_cliente_id, fecha', 'safe', 'on'=>'search'),
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
			'clientesCliente' => array(self::BELONGS_TO, 'Clientes', 'Clientes_cliente_id'),
			'pagosPago' => array(self::BELONGS_TO, 'Pagos', 'Pagos_pago_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'cliente_pago_fecha_id' => 'Cliente Pago Fecha',
			'Pagos_pago_id' => 'Pagos Pago',
			'Clientes_cliente_id' => 'Clientes Cliente',
			'fecha' => 'Fecha',
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

		$criteria->compare('cliente_pago_fecha_id',$this->cliente_pago_fecha_id,true);
		$criteria->compare('Pagos_pago_id',$this->Pagos_pago_id,true);
		$criteria->compare('Clientes_cliente_id',$this->Clientes_cliente_id,true);
		$criteria->compare('fecha',$this->fecha,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ClientesPagosFecha the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
