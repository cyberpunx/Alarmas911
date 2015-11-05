<?php

/**
 * This is the model class for table "accesorios".
 *
 * The followings are the available columns in table 'accesorios':
 * @property string $accesorio_id
 * @property string $modelos_modelo_id
 * @property string $baterias_bateria_id
 * @property string $sistema_alarmas_sistema_alarma_id
 * @property string $nombre_accesorio
 * @property string $observaciones_accesorio
 *
 * The followings are the available model relations:
 * @property Baterias $bateriasBateria
 * @property SistemaAlarmas $sistemaAlarmasSistemaAlarma
 * @property Modelos $modelosModelo
 */
class Accesorios extends CActiveRecord
{	
	public $sistemaAlarmasName;
	public $modeloMarca;
	
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'accesorios';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('sistema_alarmas_sistema_alarma_id, nombre_accesorio', 'required'),
			array('modelos_modelo_id, sistema_alarmas_sistema_alarma_id', 'length', 'max'=>11),
			array('nombre_accesorio', 'length', 'max'=>128),
			array('observaciones_accesorio', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('accesorio_id, modeloMarca, sistemaAlarmasName, nombre_accesorio, observaciones_accesorio', 'safe', 'on'=>'search'),
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
			'sistemaAlarmas' => array(self::BELONGS_TO, 'SistemaAlarmas', 'sistema_alarmas_sistema_alarma_id'),
			'modelos' => array(self::BELONGS_TO, 'Modelos', 'modelos_modelo_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'accesorio_id' => 'Accesorio',
			'modelos_modelo_id' => 'Modelo',
			'sistema_alarmas_sistema_alarma_id' => 'Sistema de Alarmas',
			'nombre_accesorio' => 'Nombre Accesorio',
			'observaciones_accesorio' => 'Observaciones',
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
		$criteria->with = array( 'modelos', 'sistemaAlarmas');
		$criteria->compare('sistemaAlarmas.nombre_sistema_alarma', $this->sistemaAlarmasName, true);
		$criteria->compare('modelos.nombre_modelo', $this->modeloMarca, true);

		$criteria->compare('accesorio_id',$this->accesorio_id,true);
		$criteria->compare('modelos_modelo_id',$this->modelos_modelo_id,true);
		$criteria->compare('sistema_alarmas_sistema_alarma_id',$this->sistema_alarmas_sistema_alarma_id,true);
		$criteria->compare('nombre_accesorio',$this->nombre_accesorio,true);
		$criteria->compare('observaciones_accesorio',$this->observaciones_accesorio,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Accesorios the static model class
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
