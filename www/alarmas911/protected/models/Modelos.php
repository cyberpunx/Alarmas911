<?php

/**
 * This is the model class for table "modelos".
 *
 * The followings are the available columns in table 'modelos':
 * @property string $id_modelo
 * @property string $marcas_id_marca
 * @property string $nombre_modelo
 * @property string $observaciones_modelo
 * @property string $discriminante
 *
 * The followings are the available model relations:
 * @property Accesorios[] $accesorioses
 * @property Baterias[] $bateriases
 * @property Marcas $marcasIdMarca
 * @property Paneles[] $paneles
 * @property Sensores[] $sensores
 * @property SistemaAlarmas[] $sistemaAlarmases
 */
class Modelos extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'modelos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('marcas_id_marca, nombre_modelo, discriminante', 'required'),
			array('marcas_id_marca', 'length', 'max'=>11),
			array('nombre_modelo, discriminante', 'length', 'max'=>128),
			array('observaciones_modelo', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_modelo, marcas_id_marca, nombre_modelo, observaciones_modelo, discriminante', 'safe', 'on'=>'search'),
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
			'accesorioses' => array(self::HAS_MANY, 'Accesorios', 'modelos_id_modelo'),
			'bateriases' => array(self::HAS_MANY, 'Baterias', 'modelos_id_modelo'),
			'marcasIdMarca' => array(self::BELONGS_TO, 'Marcas', 'marcas_id_marca'),
			'paneles' => array(self::HAS_MANY, 'Paneles', 'modelos_id_modelo'),
			'sensores' => array(self::HAS_MANY, 'Sensores', 'modelos_id_modelo'),
			'sistemaAlarmases' => array(self::HAS_MANY, 'SistemaAlarmas', 'modelos_id_modelo'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_modelo' => 'Id Modelo',
			'marcas_id_marca' => 'Marcas Id Marca',
			'nombre_modelo' => 'Nombre Modelo',
			'observaciones_modelo' => 'Observaciones Modelo',
			'discriminante' => 'Discriminante',
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

		$criteria->compare('id_modelo',$this->id_modelo,true);
		$criteria->compare('marcas_id_marca',$this->marcas_id_marca,true);
		$criteria->compare('nombre_modelo',$this->nombre_modelo,true);
		$criteria->compare('observaciones_modelo',$this->observaciones_modelo,true);
		$criteria->compare('discriminante',$this->discriminante,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Modelos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
