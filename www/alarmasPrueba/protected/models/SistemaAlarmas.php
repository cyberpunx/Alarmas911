<?php

/**
 * This is the model class for table "sistema_alarmas".
 *
 * The followings are the available columns in table 'sistema_alarmas':
 * @property string $sistema_alarma_id
 * @property string $nombre_sistema_alarma
 * @property string $observaciones_sistema_alarma
 * @property string $modelos_modelo_id
 * @property string $barrios_barrio_id
 * @property string $tipos_monitoreo_tipo_monitoreo_id
 * @property string $usuarios_usuario_id
 *
 * The followings are the available model relations:
 * @property Accesorios[] $accesorioses
 * @property Baterias[] $bateriases
 * @property OrdenesServicio[] $ordenesServicios
 * @property Paneles[] $paneles
 * @property Barrios $barriosBarrio
 * @property Usuarios $usuariosUsuario
 * @property Modelos $modelosIdModelo
 * @property TiposMonitoreo $tiposMonitoreoTipoMonitoreo
 * @property Zonas[] $zonases
 */
class SistemaAlarmas extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'sistema_alarmas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre_sistema_alarma, modelos_modelo_id, barrios_barrio_id, tipos_monitoreo_tipo_monitoreo_id, usuarios_usuario_id', 'required'),
			array('nombre_sistema_alarma, observaciones_sistema_alarma', 'length', 'max'=>128),
			array('modelos_modelo_id, barrios_barrio_id, tipos_monitoreo_tipo_monitoreo_id, usuarios_usuario_id', 'length', 'max'=>11),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('sistema_alarma_id, nombre_sistema_alarma, observaciones_sistema_alarma, modelos_modelo_id, barrios_barrio_id, tipos_monitoreo_tipo_monitoreo_id, usuarios_usuario_id', 'safe', 'on'=>'search'),
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
			'accesorios' => array(self::HAS_MANY, 'Accesorios', 'sistema_alarmas_sistema_alarma_id'),
			'baterias' => array(self::HAS_MANY, 'Baterias', 'sistema_alarmas_sistema_alarma_id'),
			'ordenesServicios' => array(self::HAS_MANY, 'OrdenesServicio', 'sistema_alarmas_sistema_alarma_id'),
			'paneles' => array(self::HAS_MANY, 'Paneles', 'sistema_alarmas_sistema_alarma_id'),
			'barriosBarrio' => array(self::BELONGS_TO, 'Barrios', 'barrios_barrio_id'),
			'usuariosUsuario' => array(self::BELONGS_TO, 'Usuarios', 'usuarios_usuario_id'),
			'modelosIdModelo' => array(self::BELONGS_TO, 'Modelos', 'modelos_modelo_id'),
			'tiposMonitoreoTipoMonitoreo' => array(self::BELONGS_TO, 'TiposMonitoreo', 'tipos_monitoreo_tipo_monitoreo_id'),
			'zonas' => array(self::HAS_MANY, 'Zonas', 'sistema_alarmas_sistema_alarma_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'sistema_alarma_id' => 'Sistema Alarma',
			'nombre_sistema_alarma' => 'Nombre Sistema Alarma',
			'observaciones_sistema_alarma' => 'Observaciones Sistema Alarma',
			'modelos_modelo_id' => 'Modelos Id Modelo',
			'barrios_barrio_id' => 'Barrios Barrio',
			'tipos_monitoreo_tipo_monitoreo_id' => 'Tipos Monitoreo Tipo Monitoreo',
			'usuarios_usuario_id' => 'Usuarios usuario',
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

		$criteria->compare('sistema_alarma_id',$this->sistema_alarma_id,true);
		$criteria->compare('nombre_sistema_alarma',$this->nombre_sistema_alarma,true);
		$criteria->compare('observaciones_sistema_alarma',$this->observaciones_sistema_alarma,true);
		$criteria->compare('modelos_modelo_id',$this->modelos_modelo_id,true);
		$criteria->compare('barrios_barrio_id',$this->barrios_barrio_id,true);
		$criteria->compare('tipos_monitoreo_tipo_monitoreo_id',$this->tipos_monitoreo_tipo_monitoreo_id,true);
		$criteria->compare('usuarios_usuario_id',$this->usuarios_usuario_id,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return SistemaAlarmas the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
