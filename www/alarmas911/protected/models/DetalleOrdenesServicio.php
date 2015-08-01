<?php

/**
 * This is the model class for table "detalle_ordenes_servicio".
 *
 * The followings are the available columns in table 'detalle_ordenes_servicio':
 * @property string $detalle_orden_servicio_id
 * @property string $ordenes_servicio_orden_servicio_id
 * @property string $tipos_servicio_tipo_servicio_id
 * @property string $descripcion_detalle_orden_servicio
 *
 * The followings are the available model relations:
 * @property TiposServicio $tiposServicioTipoServicio
 * @property OrdenesServicio $ordenesServicioOrdenServicio
 */
class DetalleOrdenesServicio extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'detalle_ordenes_servicio';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ordenes_servicio_orden_servicio_id, tipos_servicio_tipo_servicio_id', 'required'),
			array('ordenes_servicio_orden_servicio_id, tipos_servicio_tipo_servicio_id', 'length', 'max'=>11),
			array('descripcion_detalle_orden_servicio', 'length', 'max'=>128),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('detalle_orden_servicio_id, ordenes_servicio_orden_servicio_id, tipos_servicio_tipo_servicio_id, descripcion_detalle_orden_servicio', 'safe', 'on'=>'search'),
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
			'tiposServicioTipoServicio' => array(self::BELONGS_TO, 'TiposServicio', 'tipos_servicio_tipo_servicio_id'),
			'ordenesServicioOrdenServicio' => array(self::BELONGS_TO, 'OrdenesServicio', 'ordenes_servicio_orden_servicio_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'detalle_orden_servicio_id' => 'Detalle Orden Servicio',
			'ordenes_servicio_orden_servicio_id' => 'Ordenes Servicio Orden Servicio',
			'tipos_servicio_tipo_servicio_id' => 'Tipo de Servicio',
			'descripcion_detalle_orden_servicio' => 'Linea Detalle',
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

		$criteria->compare('detalle_orden_servicio_id',$this->detalle_orden_servicio_id,true);
		$criteria->compare('ordenes_servicio_orden_servicio_id',$this->ordenes_servicio_orden_servicio_id,true);
		$criteria->compare('tipos_servicio_tipo_servicio_id',$this->tipos_servicio_tipo_servicio_id,true);
		$criteria->compare('descripcion_detalle_orden_servicio',$this->descripcion_detalle_orden_servicio,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return DetalleOrdenesServicio the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
