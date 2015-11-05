<?php

/**
 * This is the model class for table "tipos_pago".
 *
 * The followings are the available columns in table 'tipos_pago':
 * @property string $tipo_pago_id
 * @property string $nombre_tipo_pago
 * @property string $observaciones_tipo_pago
 *
 * The followings are the available model relations:
 * @property Pagos[] $pagoses
 */
class TiposPago extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tipos_pago';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre_tipo_pago', 'required'),
			array('nombre_tipo_pago', 'length', 'max'=>128),
			array('observaciones_tipo_pago', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('tipo_pago_id, nombre_tipo_pago, observaciones_tipo_pago', 'safe', 'on'=>'search'),
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
			'pagoses' => array(self::HAS_MANY, 'Pagos', 'tipos_pago_tipo_pago_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'tipo_pago_id' => 'Tipo Pago',
			'nombre_tipo_pago' => 'Nombre Tipo Pago',
			'observaciones_tipo_pago' => 'Observaciones Tipo Pago',
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

		$criteria->compare('tipo_pago_id',$this->tipo_pago_id,true);
		$criteria->compare('nombre_tipo_pago',$this->nombre_tipo_pago,true);
		$criteria->compare('observaciones_tipo_pago',$this->observaciones_tipo_pago,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TiposPago the static model class
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
