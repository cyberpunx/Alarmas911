<?php

/**
 * This is the model class for table "sensores".
 *
 * The followings are the available columns in table 'sensores':
 * @property string $sensor_id
 * @property string $baterias_bateria_id
 * @property string $tipos_sensores_tipo_sensor_id
 * @property string $modelos_modelo_id
 * @property string $zonas_zona_id
 *
 * The followings are the available model relations:
 * @property TiposSensores $tiposSensoresTipoSensor
 * @property Baterias $bateriasBateria
 * @property Zonas $zonasZona
 * @property Modelos $modelosModelo
 */
class Sensores extends CActiveRecord
{
	public $tiposSensoresName;
	public $modeloMarca;
	public $zonasName;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'sensores';
	}

	public $tipoSensorNombre;

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tipos_sensores_tipo_sensor_id, zonas_zona_id, modelos_modelo_id', 'required'),
			array('tipos_sensores_tipo_sensor_id, modelos_modelo_id, zonas_zona_id', 'length', 'max'=>11),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('sensor_id, tipos_sensores_tipo_sensor_id, modelos_modelo_id, zonas_zona_id, tiposSensoresName, zonasName, modeloMarca', 'safe', 'on'=>'search'),
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
			'tiposSensores' => array(self::BELONGS_TO, 'TiposSensores', 'tipos_sensores_tipo_sensor_id'),
			'zonas' => array(self::BELONGS_TO, 'Zonas', 'zonas_zona_id'),
			'modelos' => array(self::BELONGS_TO, 'Modelos', 'modelos_modelo_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'sensor_id' => 'Sensor ID',
			'tipos_sensores_tipo_sensor_id' => 'Tipo de Sensor',
			'modelos_modelo_id' => 'Modelo',
			'zonas_zona_id' => 'Zona',
			
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
		$criteria->with = array( 'modelos', 'zonas', 'tiposSensores');
		$criteria->compare('tiposSensores.nombre_sensor', $this->tiposSensoresName, true);
		$criteria->compare('modelos.nombre_modelo', $this->modeloMarca, true );
		$criteria->compare('zonas.nombre_zona', $this->zonasName, true);
		$criteria->compare('sensor_id',$this->sensor_id,true);
		$criteria->compare('tipos_sensores_tipo_sensor_id',$this->tipos_sensores_tipo_sensor_id,true);
		$criteria->compare('modelos_modelo_id',$this->modelos_modelo_id,true);
		$criteria->compare('zonas_zona_id',$this->zonas_zona_id,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public function getTipoSensorNombre(){

	$criteria=new CDbCriteria;
	$criteria->select='nombre_sensor';
	$criteria->condition = 'tipo_sensor_id = '.$this->tipos_sensores_tipo_sensor_id;

	$modelo = TiposSensores::model()->find($criteria);

	return $modelo->nombre_sensor;

	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Sensores the static model class
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
