<?php

/**
 * This is the model class for table "baterias".
 *
 * The followings are the available columns in table 'baterias':
 * @property string $bateria_id
 * @property string $sistema_alarmas_sistema_alarma_id
 * @property string $modelos_modelo_id
 * @property string $tipos_baterias_tipo_bateria_id
 * @property string $observaciones_bateria
 * @property string $vida_util
 * @property string $fecha_alta
 * @property string $fecha_baja
 *
 * The followings are the available model relations:
 * @property Accesorios[] $accesorioses
 * @property SistemaAlarmas $sistemaAlarmasSistemaAlarma
 * @property TiposBaterias $tiposBateriasTipoBateria
 * @property Modelos $modelosModelo
 * @property Paneles[] $paneles
 * @property Sensores[] $sensores
 */
class Baterias extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'baterias';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('sistema_alarmas_sistema_alarma_id, modelos_modelo_id, tipos_baterias_tipo_bateria_id', 'required'),
			array('sistema_alarmas_sistema_alarma_id, modelos_modelo_id, tipos_baterias_tipo_bateria_id, vida_util', 'length', 'max'=>11),
			array('observaciones_bateria', 'length', 'max'=>128),
			array('fecha_alta, fecha_baja', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('bateria_id, sistema_alarmas_sistema_alarma_id, modelos_modelo_id, tipos_baterias_tipo_bateria_id, observaciones_bateria, vida_util, fecha_alta, fecha_baja', 'safe', 'on'=>'search'),
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
			'accesorioses' => array(self::HAS_MANY, 'Accesorios', 'baterias_bateria_id'),
			'sistemaAlarmasSistemaAlarma' => array(self::BELONGS_TO, 'SistemaAlarmas', 'sistema_alarmas_sistema_alarma_id'),
			'tiposBateriasTipoBateria' => array(self::BELONGS_TO, 'TiposBaterias', 'tipos_baterias_tipo_bateria_id'),
			'modelosModelo' => array(self::BELONGS_TO, 'Modelos', 'modelos_modelo_id'),
			'paneles' => array(self::HAS_MANY, 'Paneles', 'baterias_bateria_id'),
			'sensores' => array(self::HAS_MANY, 'Sensores', 'baterias_bateria_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'bateria_id' => 'Bateria',
			'sistema_alarmas_sistema_alarma_id' => 'Sistema Alarmas Sistema Alarma',
			'modelos_modelo_id' => 'Modelos Modelo',
			'tipos_baterias_tipo_bateria_id' => 'Tipos Baterias Tipo Bateria',
			'observaciones_bateria' => 'Observaciones Bateria',
			'vida_util' => 'Vida Util',
			'fecha_alta' => 'Fecha Alta',
			'fecha_baja' => 'Fecha Baja',
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

		$criteria->compare('bateria_id',$this->bateria_id,true);
		$criteria->compare('sistema_alarmas_sistema_alarma_id',$this->sistema_alarmas_sistema_alarma_id,true);
		$criteria->compare('modelos_modelo_id',$this->modelos_modelo_id,true);
		$criteria->compare('tipos_baterias_tipo_bateria_id',$this->tipos_baterias_tipo_bateria_id,true);
		$criteria->compare('observaciones_bateria',$this->observaciones_bateria,true);
		$criteria->compare('vida_util',$this->vida_util,true);
		$criteria->compare('fecha_alta',$this->fecha_alta,true);
		$criteria->compare('fecha_baja',$this->fecha_baja,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Baterias the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}