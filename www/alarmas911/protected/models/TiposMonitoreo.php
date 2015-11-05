<?php

/**
 * This is the model class for table "tipos_monitoreo".
 *
 * The followings are the available columns in table 'tipos_monitoreo':
 * @property string $tipo_monitoreo_id
 * @property string $nombre_tipo_monitoreo
 * @property string $valor
 *
 * The followings are the available model relations:
 * @property SistemaAlarmas[] $sistemaAlarmases
 */
class TiposMonitoreo extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tipos_monitoreo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre_tipo_monitoreo', 'required'),
			array('nombre_tipo_monitoreo', 'length', 'max'=>128),
			array('valor', 'length', 'max'=>11),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('tipo_monitoreo_id, nombre_tipo_monitoreo, valor', 'safe', 'on'=>'search'),
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
			'sistemaAlarmases' => array(self::HAS_MANY, 'SistemaAlarmas', 'tipos_monitoreo_tipo_monitoreo_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'tipo_monitoreo_id' => 'Tipo Monitoreo',
			'nombre_tipo_monitoreo' => 'Nombre Tipo Monitoreo',
			'valor' => 'Valor',
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

		$criteria->compare('tipo_monitoreo_id',$this->tipo_monitoreo_id,true);
		$criteria->compare('nombre_tipo_monitoreo',$this->nombre_tipo_monitoreo,true);
		$criteria->compare('valor',$this->valor,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TiposMonitoreo the static model class
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
