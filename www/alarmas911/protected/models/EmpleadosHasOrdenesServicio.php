<?php

/**
 * This is the model class for table "empleados_has_ordenes_servicio".
 *
 * The followings are the available columns in table 'empleados_has_ordenes_servicio':
 * @property string $Empleados_empleado_id
 * @property string $Ordenes_Servicio_orden_servicio_id
 * @property string $fecha
 */
class EmpleadosHasOrdenesServicio extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'empleados_has_ordenes_servicio';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Empleados_empleado_id, Ordenes_Servicio_orden_servicio_id', 'required'),
			array('Empleados_empleado_id, Ordenes_Servicio_orden_servicio_id', 'length', 'max'=>11),
			array('fecha', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('Empleados_empleado_id, Ordenes_Servicio_orden_servicio_id, fecha', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'Empleados_empleado_id' => 'Empleados Empleado',
			'Ordenes_Servicio_orden_servicio_id' => 'Ordenes Servicio Orden Servicio',
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

		$criteria->compare('Empleados_empleado_id',$this->Empleados_empleado_id,true);
		$criteria->compare('Ordenes_Servicio_orden_servicio_id',$this->Ordenes_Servicio_orden_servicio_id,true);
		$criteria->compare('fecha',$this->fecha,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return EmpleadosHasOrdenesServicio the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
