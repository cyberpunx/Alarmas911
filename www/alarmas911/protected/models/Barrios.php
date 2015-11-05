<?php

/**
 * This is the model class for table "barrios".
 *
 * The followings are the available columns in table 'barrios':
 * @property string $barrio_id
 * @property string $nombre_barrio
 * @property string $observaciones_barrio
 *
 * The followings are the available model relations:
 * @property SistemaAlarmas[] $sistemaAlarmases
 */
class Barrios extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'barrios';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre_barrio', 'required'),
			array('nombre_barrio', 'length', 'max'=>128),
			array('observaciones_barrio', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('barrio_id, nombre_barrio, observaciones_barrio', 'safe', 'on'=>'search'),
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
			'sistemaAlarmases' => array(self::HAS_MANY, 'SistemaAlarmas', 'barrios_barrio_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'barrio_id' => 'Barrio',
			'nombre_barrio' => 'Nombre Barrio',
			'observaciones_barrio' => 'Observaciones Barrio',
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

		$criteria->compare('barrio_id',$this->barrio_id,true);
		$criteria->compare('nombre_barrio',$this->nombre_barrio,true);
		$criteria->compare('observaciones_barrio',$this->observaciones_barrio,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Barrios the static model class
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
