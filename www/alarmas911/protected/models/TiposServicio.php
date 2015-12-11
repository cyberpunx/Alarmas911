<?php

/**
 * This is the model class for table "tipos_servicio".
 *
 * The followings are the available columns in table 'tipos_servicio':
 * @property string $tipo_servicio_id
 * @property string $nombre_tipo_servicio
 * @property string $observaciones_tipo_servicio
 *
 * The followings are the available model relations:
 * @property DetalleOrdenesServicio[] $detalleOrdenesServicios
 */
class TiposServicio extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tipos_servicio';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre_tipo_servicio', 'required'),
			array('nombre_tipo_servicio', 'length', 'max'=>128),
			array('nombre_tipo_servicio', 'unique'),
			array('observaciones_tipo_servicio', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('tipo_servicio_id, nombre_tipo_servicio, observaciones_tipo_servicio', 'safe', 'on'=>'search'),
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
			'detalleOrdenesServicios' => array(self::HAS_MANY, 'DetalleOrdenesServicio', 'tipos_servicio_tipo_servicio_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'tipo_servicio_id' => 'Tipo Servicio',
			'nombre_tipo_servicio' => 'Nombre Tipo Servicio',
			'observaciones_tipo_servicio' => 'Observaciones Tipo Servicio',
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

		$criteria->compare('tipo_servicio_id',$this->tipo_servicio_id,true);
		$criteria->compare('nombre_tipo_servicio',$this->nombre_tipo_servicio,true);
		$criteria->compare('observaciones_tipo_servicio',$this->observaciones_tipo_servicio,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TiposServicio the static model class
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
