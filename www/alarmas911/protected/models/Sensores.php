<?php

/**
 * This is the model class for table "sensores".
 *
 * The followings are the available columns in table 'sensores':
 * @property string $sensor_id
 * @property string $Modelos_id_modelo
 * @property string $Baterias_bateria_id
 * @property string $Tipos_Sensores_tipo_sensor_id
 * @property string $Zonas_zona_id
 *
 * The followings are the available model relations:
 * @property Zonas $zonasZona
 * @property TiposSensores $tiposSensoresTipoSensor
 * @property Baterias $bateriasBateria
 * @property Modelos $modelosIdModelo
 */
class Sensores extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'sensores';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Tipos_Sensores_tipo_sensor_id, Zonas_zona_id', 'required'),
			array('Modelos_id_modelo, Baterias_bateria_id, Tipos_Sensores_tipo_sensor_id, Zonas_zona_id', 'length', 'max'=>11),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('sensor_id, Modelos_id_modelo, Baterias_bateria_id, Tipos_Sensores_tipo_sensor_id, Zonas_zona_id', 'safe', 'on'=>'search'),
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
			'zonasZona' => array(self::BELONGS_TO, 'Zonas', 'Zonas_zona_id'),
			'tiposSensoresTipoSensor' => array(self::BELONGS_TO, 'TiposSensores', 'Tipos_Sensores_tipo_sensor_id'),
			'bateriasBateria' => array(self::BELONGS_TO, 'Baterias', 'Baterias_bateria_id'),
			'modelosIdModelo' => array(self::BELONGS_TO, 'Modelos', 'Modelos_id_modelo'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'sensor_id' => 'Sensor',
			'Modelos_id_modelo' => 'Modelos Id Modelo',
			'Baterias_bateria_id' => 'Baterias Bateria',
			'Tipos_Sensores_tipo_sensor_id' => 'Tipos Sensores Tipo Sensor',
			'Zonas_zona_id' => 'Zonas Zona',
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

		$criteria->compare('sensor_id',$this->sensor_id,true);
		$criteria->compare('Modelos_id_modelo',$this->Modelos_id_modelo,true);
		$criteria->compare('Baterias_bateria_id',$this->Baterias_bateria_id,true);
		$criteria->compare('Tipos_Sensores_tipo_sensor_id',$this->Tipos_Sensores_tipo_sensor_id,true);
		$criteria->compare('Zonas_zona_id',$this->Zonas_zona_id,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
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
}
