<?php

/**
 * This is the model class for table "tipos_sensores".
 *
 * The followings are the available columns in table 'tipos_sensores':
 * @property string $tipo_sensor_id
 * @property string $nombre_sensor
 * @property string $observaciones_sensor
 *
 * The followings are the available model relations:
 * @property Sensores[] $sensores
 */
class TiposSensores extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tipos_sensores';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre_sensor', 'required'),
			array('nombre_sensor', 'length', 'max'=>128),
			array('nombre_sensor', 'unique'),
			array('observaciones_sensor', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('tipo_sensor_id, nombre_sensor, observaciones_sensor', 'safe', 'on'=>'search'),
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
			'sensores' => array(self::HAS_MANY, 'Sensores', 'tipos_sensores_tipo_sensor_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'tipo_sensor_id' => 'Tipo Sensor',
			'nombre_sensor' => 'Nombre Sensor',
			'observaciones_sensor' => 'Observaciones Sensor',
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

		$criteria->compare('tipo_sensor_id',$this->tipo_sensor_id,true);
		$criteria->compare('nombre_sensor',$this->nombre_sensor,true);
		$criteria->compare('observaciones_sensor',$this->observaciones_sensor,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TiposSensores the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	 //Funcion para el Historial. 
	public function behaviors()
	{
	    return array(
	        // Classname => path to Class
	        'ActiveRecordLogableBehavior'=>
	            'application.behaviors.ActiveRecordLogableBehavior',
	    );
	}
}
