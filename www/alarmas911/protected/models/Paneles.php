<?php

/**
 * This is the model class for table "paneles".
 *
 * The followings are the available columns in table 'paneles':
 * @property string $panel_id
 * @property string $baterias_bateria_id
 * @property string $modelos_modelo_id
 * @property string $sistema_alarmas_sistema_alarma_id
 * @property string $nombre_panel
 * @property string $observaciones_panel
 *
 * The followings are the available model relations:
 * @property Baterias $bateriasBateria
 * @property Modelos $modelosModelo
 * @property SistemaAlarmas $sistemaAlarmasSistemaAlarma
 */
class Paneles extends CActiveRecord
{
	public $sistemaAlarmasName;
	public $modeloMarca;

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'paneles';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('sistema_alarmas_sistema_alarma_id, nombre_panel, modelos_modelo_id', 'required'),
			array('modelos_modelo_id, sistema_alarmas_sistema_alarma_id', 'length', 'max'=>11),
			array('nombre_panel', 'length', 'max'=>128),
			array('observaciones_panel', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('panel_id, modelos_modelo_id, sistema_alarmas_sistema_alarma_id, sistemaAlarmasName, modeloMarca,nombre_panel, observaciones_panel', 'safe', 'on'=>'search'),
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
			'modelosModelo' => array(self::BELONGS_TO, 'Modelos', 'modelos_modelo_id'),
			'sistemaAlarmas' => array(self::BELONGS_TO, 'SistemaAlarmas', 'sistema_alarmas_sistema_alarma_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'panel_id' => 'Panel ID',
			'modelos_modelo_id' => 'Modelo',
			'sistema_alarmas_sistema_alarma_id' => 'Sistema de alarma',
			'nombre_panel' => 'Nombre del panel',
			'observaciones_panel' => 'Observaciones',
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
		$criteria->with = array( 'sistemaAlarmas', 'modelosModelo',);
		$criteria->compare('sistemaAlarmas.nombre_sistema_alarma', $this->sistemaAlarmasName, true);
	
		$criteria->compare('modelosModelo.nombre_modelo', $this->modeloMarca, true);

		$criteria->compare('panel_id',$this->panel_id,true);
		$criteria->compare('modelos_modelo_id',$this->modelos_modelo_id,true);
		$criteria->compare('sistema_alarmas_sistema_alarma_id',$this->sistema_alarmas_sistema_alarma_id,true);
		$criteria->compare('nombre_panel',$this->nombre_panel,true);
		$criteria->compare('observaciones_panel',$this->observaciones_panel,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Paneles the static model class
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
