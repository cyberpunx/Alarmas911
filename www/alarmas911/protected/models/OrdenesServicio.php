<?php

/**
 * This is the model class for table "ordenes_servicio".
 *
 * The followings are the available columns in table 'ordenes_servicio':
 * @property string $orden_servicio_id
 * @property string $Sistema_Alarmas_sistema_alarma_id
 * @property string $fecha_emision
 * @property string $fecha_cierre
 * @property double $importe
 * @property string $observaciones_orden_servicio
 * @property string $prioridad
 *
 * The followings are the available model relations:
 * @property DetalleOrdenesServicio[] $detalleOrdenesServicios
 * @property Empleados[] $empleadoses
 * @property SistemaAlarmas $sistemaAlarmasSistemaAlarma
 * @property Pagos[] $pagoses
 */
class OrdenesServicio extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'ordenes_servicio';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Sistema_Alarmas_sistema_alarma_id, fecha_emision, fecha_cierre', 'required'),
			array('importe', 'numerical'),
			array('Sistema_Alarmas_sistema_alarma_id, prioridad', 'length', 'max'=>11),
			array('observaciones_orden_servicio', 'length', 'max'=>1),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('orden_servicio_id, Sistema_Alarmas_sistema_alarma_id, fecha_emision, fecha_cierre, importe, observaciones_orden_servicio, prioridad', 'safe', 'on'=>'search'),
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
			'detalleOrdenesServicios' => array(self::HAS_MANY, 'DetalleOrdenesServicio', 'Ordenes_Servicio_orden_servicio_id'),
			'empleadoses' => array(self::MANY_MANY, 'Empleados', 'empleados_has_ordenes_servicio(Ordenes_Servicio_orden_servicio_id, Empleados_empleado_id)'),
			'sistemaAlarmasSistemaAlarma' => array(self::BELONGS_TO, 'SistemaAlarmas', 'Sistema_Alarmas_sistema_alarma_id'),
			'pagoses' => array(self::HAS_MANY, 'Pagos', 'Ordenes_Servicio_orden_servicio_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'orden_servicio_id' => 'Orden Servicio',
			'Sistema_Alarmas_sistema_alarma_id' => 'Sistema Alarmas Sistema Alarma',
			'fecha_emision' => 'Fecha Emision',
			'fecha_cierre' => 'Fecha Cierre',
			'importe' => 'Importe',
			'observaciones_orden_servicio' => 'Observaciones Orden Servicio',
			'prioridad' => 'Prioridad',
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

		$criteria->compare('orden_servicio_id',$this->orden_servicio_id,true);
		$criteria->compare('Sistema_Alarmas_sistema_alarma_id',$this->Sistema_Alarmas_sistema_alarma_id,true);
		$criteria->compare('fecha_emision',$this->fecha_emision,true);
		$criteria->compare('fecha_cierre',$this->fecha_cierre,true);
		$criteria->compare('importe',$this->importe);
		$criteria->compare('observaciones_orden_servicio',$this->observaciones_orden_servicio,true);
		$criteria->compare('prioridad',$this->prioridad,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return OrdenesServicio the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
