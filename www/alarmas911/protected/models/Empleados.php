<?php

/**
 * This is the model class for table "empleados".
 *
 * The followings are the available columns in table 'empleados':
 * @property string $empleado_id
 * @property string $Persona_persona_id
 * @property string $funcion
 * @property integer $temporal
 * @property integer $activo
 *
 * The followings are the available model relations:
 * @property Persona $personaPersona
 * @property OrdenesServicio[] $ordenesServicios
 */
class Empleados extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'empleados';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Persona_persona_id', 'required'),
			array('temporal, activo', 'numerical', 'integerOnly'=>true),
			array('Persona_persona_id', 'length', 'max'=>11),
			array('funcion', 'length', 'max'=>1),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('empleado_id, Persona_persona_id, funcion, temporal, activo', 'safe', 'on'=>'search'),
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
			'ordenesServicios' => array(self::MANY_MANY, 'OrdenesServicio', 'empleados_has_ordenes_servicio(Empleados_empleado_id, Ordenes_Servicio_orden_servicio_id)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'empleado_id' => 'Empleado',
			'Persona_persona_id' => 'Persona Persona',
			'funcion' => 'Funcion',
			'temporal' => 'Temporal',
			'activo' => 'Activo',
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

		$criteria->compare('empleado_id',$this->empleado_id,true);
		$criteria->compare('Persona_persona_id',$this->Persona_persona_id,true);
		$criteria->compare('funcion',$this->funcion,true);
		$criteria->compare('temporal',$this->temporal);
		$criteria->compare('activo',$this->activo);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Empleados the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
