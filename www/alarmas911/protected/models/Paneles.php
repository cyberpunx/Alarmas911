<?php

/**
 * This is the model class for table "paneles".
 *
 * The followings are the available columns in table 'paneles':
 * @property string $panel_id
 * @property string $Modelos_id_modelo
 * @property string $Baterias_bateria_id
 * @property string $Sistema_Alarmas_sistema_alarma_id
 * @property string $observaciones_panel
 * @property string $nombre_panel
 *
 * The followings are the available model relations:
 * @property SistemaAlarmas $sistemaAlarmasSistemaAlarma
 * @property Baterias $bateriasBateria
 * @property Modelos $modelosIdModelo
 */
class Paneles extends CActiveRecord
{
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
			array('Sistema_Alarmas_sistema_alarma_id, nombre_panel', 'required'),
			array('Modelos_id_modelo, Baterias_bateria_id, Sistema_Alarmas_sistema_alarma_id', 'length', 'max'=>11),
			array('observaciones_panel, nombre_panel', 'length', 'max'=>1),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('panel_id, Modelos_id_modelo, Baterias_bateria_id, Sistema_Alarmas_sistema_alarma_id, observaciones_panel, nombre_panel', 'safe', 'on'=>'search'),
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
			'sistemaAlarmasSistemaAlarma' => array(self::BELONGS_TO, 'SistemaAlarmas', 'Sistema_Alarmas_sistema_alarma_id'),
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
			'panel_id' => 'Panel',
			'Modelos_id_modelo' => 'Modelos Id Modelo',
			'Baterias_bateria_id' => 'Baterias Bateria',
			'Sistema_Alarmas_sistema_alarma_id' => 'Sistema Alarmas Sistema Alarma',
			'observaciones_panel' => 'Observaciones Panel',
			'nombre_panel' => 'Nombre Panel',
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

		$criteria->compare('panel_id',$this->panel_id,true);
		$criteria->compare('Modelos_id_modelo',$this->Modelos_id_modelo,true);
		$criteria->compare('Baterias_bateria_id',$this->Baterias_bateria_id,true);
		$criteria->compare('Sistema_Alarmas_sistema_alarma_id',$this->Sistema_Alarmas_sistema_alarma_id,true);
		$criteria->compare('observaciones_panel',$this->observaciones_panel,true);
		$criteria->compare('nombre_panel',$this->nombre_panel,true);

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
}
