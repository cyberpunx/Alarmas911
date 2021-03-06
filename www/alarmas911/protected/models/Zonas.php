<?php

/**
 * This is the model class for table "zonas".
 *
 * The followings are the available columns in table 'zonas':
 * @property string $zona_id
 * @property string $sistema_alarmas_sistema_alarma_id
 * @property string $nombre_zona
 * @property string $observaciones_zona
 *
 * The followings are the available model relations:
 * @property Sensores[] $sensores
 * @property SistemaAlarmas $sistemaAlarmasSistemaAlarma
 */
class Zonas extends CActiveRecord
{
	public $sistemaAlarmasName;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'zonas';
	}

	public $relatedSensores;

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('sistema_alarmas_sistema_alarma_id, nombre_zona', 'required'),
			array('sistema_alarmas_sistema_alarma_id', 'length', 'max'=>11),
			array('nombre_zona', 'length', 'max'=>128),
			array('observaciones_zona', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('zona_id, sistemaAlarmasName, nombre_zona, observaciones_zona, relatedSensores, sistemaAlarmas.nombre_sistema_alarma', 'safe', 'on'=>'search'),
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
			'sensores' => array(self::HAS_MANY, 'Sensores', 'zonas_zona_id'),
			'sistemaAlarmas' => array(self::BELONGS_TO, 'SistemaAlarmas', 'sistema_alarmas_sistema_alarma_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'zona_id' => 'Zona',
			'sistema_alarmas_sistema_alarma_id' => 'Sistema de Alarmas',
			'nombre_zona' => 'Nombre de la Zona',
			'observaciones_zona' => 'Observaciones de la Zona',
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

		$criteria->with = array( 'sistemaAlarmas', 'sensores');
		$criteria->compare('sistemaAlarmas.nombre_sistema_alarma', $this->sistemaAlarmasName, true);

		$criteria->compare('zona_id',$this->zona_id,true);
		$criteria->compare('sistema_alarmas_sistema_alarma_id',$this->sistema_alarmas_sistema_alarma_id,true);
		$criteria->compare('nombre_zona',$this->nombre_zona,true);
		$criteria->compare('observaciones_zona',$this->observaciones_zona,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}


	public function searchListZonasBySistema($id)
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;
		$criteria->condition = "sistema_alarmas_sistema_alarma_id = ".$id;
		//$criteria->compare('sistemaAlarmas.nombre_sistema_alarma', $this->sistemaAlarmas->nombre_sistema_alarma, true);
		$criteria->compare('zona_id',$this->zona_id,true);
		$criteria->compare('sistema_alarmas_sistema_alarma_id',$this->sistema_alarmas_sistema_alarma_id,true);
		$criteria->compare('nombre_zona',$this->nombre_zona,true);
		$criteria->compare('observaciones_zona',$this->observaciones_zona,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public function behaviors()
    {
        return array(
        	'ESaveRelatedBehavior' => array(
                'class' => 'application.components.ESaveRelatedBehavior'),
        	'ActiveRecordLogableBehavior'=> 'application.behaviors.ActiveRecordLogableBehavior',
        );
    }

	public function getRelatedSensores(){
		$out=CHtml::listData($this->sensores,'sensor_id','tipos_sensores_tipo_sensor_id');
		$linea = '<ul>';
		foreach($out as $key=>$value){ 
			$linea .= sprintf('<li>%s</li>', CHtml::link($value, array('sensores/view', 'id' => $key)));
		}
		$linea .= '</ul>';
		return $linea;
	}


	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Zonas the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	 
}
