<?php

/**
 * This is the model class for table "detalle_ordenes_servicio".
 *
 * The followings are the available columns in table 'detalle_ordenes_servicio':
 * @property string $detalle_orden_servicio_id
 * @property string $Ordenes_Servicio_orden_servicio_id
 * @property string $Tipos_Servicio_tipo_servicio_id
 * @property string $Descripcion_detalle_orden_servicio
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
			array('Ordenes_Servicio_orden_servicio_id, Tipos_Servicio_tipo_servicio_id', 'required'),
			array('Ordenes_Servicio_orden_servicio_id, Tipos_Servicio_tipo_servicio_id', 'length', 'max'=>11),
			array('Descripcion_detalle_orden_servicio', 'length', 'max'=>1),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('detalle_orden_servicio_id, Ordenes_Servicio_orden_servicio_id, Tipos_Servicio_tipo_servicio_id, Descripcion_detalle_orden_servicio', 'safe', 'on'=>'search'),
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
			'tiposServicioTipoServicio' => array(self::BELONGS_TO, 'TiposServicio', 'Tipos_Servicio_tipo_servicio_id'),
			'ordenesServicioOrdenServicio' => array(self::BELONGS_TO, 'OrdenesServicio', 'Ordenes_Servicio_orden_servicio_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'detalle_orden_servicio_id' => 'Detalle Orden Servicio',
			'Ordenes_Servicio_orden_servicio_id' => 'Ordenes Servicio Orden Servicio',
			'Tipos_Servicio_tipo_servicio_id' => 'Tipos Servicio Tipo Servicio',
			'Descripcion_detalle_orden_servicio' => 'Descripcion Detalle Orden Servicio',
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
		$criteria->compare('Ordenes_Servicio_orden_servicio_id',$this->Ordenes_Servicio_orden_servicio_id,true);
		$criteria->compare('Tipos_Servicio_tipo_servicio_id',$this->Tipos_Servicio_tipo_servicio_id,true);
		$criteria->compare('Descripcion_detalle_orden_servicio',$this->Descripcion_detalle_orden_servicio,true);

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
