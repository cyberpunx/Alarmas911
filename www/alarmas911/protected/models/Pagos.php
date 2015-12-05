<?php

/**
 * This is the model class for table "pagos".
 *
 * The followings are the available columns in table 'pagos':
 * @property string $pago_id
 * @property string $usuarios_usuario_id
 * @property double $importe
 * @property string $ordenes_servicio_orden_servicio_id
 * @property string $fecha
 * @property string $tipos_pago_tipo_pago_id
 * @property string $informacion_pago
 *
 * The followings are the available model relations:
 * @property Usuarios $usuariosUsuario
 * @property OrdenesServicio $ordenesServicioOrdenServicio
 * @property TiposPago $tiposPagoTipoPago
 */
class Pagos extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'pagos';
	}

	public $nombre_usuario_search;
	public $nombre_tipo_pago;

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('usuarios_usuario_id, importe', 'required'),
			array('importe', 'numerical'),
			array('usuarios_usuario_id, ordenes_servicio_orden_servicio_id, tipos_pago_tipo_pago_id', 'length', 'max'=>11),
			array('informacion_pago', 'length', 'max'=>128),
			array('fecha', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('pago_id, usuarios_usuario_id, importe, ordenes_servicio_orden_servicio_id, fecha, tipos_pago_tipo_pago_id, informacion_pago, nombre_usuario_search, nombre_tipo_pago', 'safe', 'on'=>'search'),
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
			'usuarios' => array(self::BELONGS_TO, 'Usuarios', 'usuarios_usuario_id'),
			'ordenesServicioo' => array(self::BELONGS_TO, 'OrdenesServicio', 'ordenes_servicio_orden_servicio_id'),
			'tiposPago' => array(self::BELONGS_TO, 'TiposPago', 'tipos_pago_tipo_pago_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'pago_id' => 'Pago ID',
			'usuarios_usuario_id' => 'Usuario',
			'importe' => 'Importe',
			'ordenes_servicio_orden_servicio_id' => 'Orden Servicio',
			'fecha' => 'Fecha',
			'tipos_pago_tipo_pago_id' => 'Tipo de pago',
			'informacion_pago' => 'Información del pago',
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

		$criteria->with = array( 'usuarios' , 'tiposPago');

		$criteria->compare( 'tiposPago.nombre_tipo_pago', $this->nombre_tipo_pago, true );	
		$criteria->addcondition("(usuarios.nombre LIKE '%".$this->nombre_usuario_search."%' OR usuarios.apellido LIKE '%".$this->nombre_usuario_search."%')");

		$criteria->compare('pago_id',$this->pago_id,true);
		$criteria->compare('usuarios_usuario_id',$this->usuarios_usuario_id,true);
		$criteria->compare('importe',$this->importe);
		$criteria->compare('ordenes_servicio_orden_servicio_id',$this->ordenes_servicio_orden_servicio_id,true);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('tipos_pago_tipo_pago_id',$this->tipos_pago_tipo_pago_id,true);
		$criteria->compare('informacion_pago',$this->informacion_pago,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Pagos the static model class
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
