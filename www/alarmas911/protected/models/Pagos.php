<?php

/**
 * This is the model class for table "pagos".
 *
 * The followings are the available columns in table 'pagos':
 * @property string $pago_id
 * @property string $Ordenes_Servicio_orden_servicio_id
 * @property string $Tipos_Pago_tipo_pago_id
 * @property double $importe
 * @property string $informacion_pago
 *
 * The followings are the available model relations:
 * @property ClientesPagosFecha[] $clientesPagosFechas
 * @property TiposPago $tiposPagoTipoPago
 * @property OrdenesServicio $ordenesServicioOrdenServicio
 */
class Pagos extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'pagos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Ordenes_Servicio_orden_servicio_id, Tipos_Pago_tipo_pago_id', 'required'),
			array('importe', 'numerical'),
			array('Ordenes_Servicio_orden_servicio_id, Tipos_Pago_tipo_pago_id', 'length', 'max'=>11),
			array('informacion_pago', 'length', 'max'=>1),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('pago_id, Ordenes_Servicio_orden_servicio_id, Tipos_Pago_tipo_pago_id, importe, informacion_pago', 'safe', 'on'=>'search'),
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
			'clientesPagosFechas' => array(self::HAS_MANY, 'ClientesPagosFecha', 'Pagos_pago_id'),
			'tiposPagoTipoPago' => array(self::BELONGS_TO, 'TiposPago', 'Tipos_Pago_tipo_pago_id'),
			'ordenesServicioOrdenServicio' => array(self::BELONGS_TO, 'OrdenesServicio', 'Ordenes_Servicio_orden_servicio_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'pago_id' => 'Pago',
			'Ordenes_Servicio_orden_servicio_id' => 'Ordenes Servicio Orden Servicio',
			'Tipos_Pago_tipo_pago_id' => 'Tipos Pago Tipo Pago',
			'importe' => 'Importe',
			'informacion_pago' => 'Informacion Pago',
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

		$criteria->compare('pago_id',$this->pago_id,true);
		$criteria->compare('Ordenes_Servicio_orden_servicio_id',$this->Ordenes_Servicio_orden_servicio_id,true);
		$criteria->compare('Tipos_Pago_tipo_pago_id',$this->Tipos_Pago_tipo_pago_id,true);
		$criteria->compare('importe',$this->importe);
		$criteria->compare('informacion_pago',$this->informacion_pago,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Pagos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
