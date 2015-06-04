<?php

/**
 * This is the model class for table "usuarios".
 *
 * The followings are the available columns in table 'usuarios':
 * @property string $persona_id
 * @property string $nombre_persona
 * @property string $apellido_persona
 * @property string $direccion
 * @property string $telefono_fijo
 * @property string $telefono_celular
 * @property string $dni
 * @property string $email
 * @property string $telefono_alt
 * @property string $contrasena
 * @property string $empleado_funcion
 * @property integer $empleado_temporal
 * @property integer $empleado_activo
 * @property integer $es_empleado
 * @property string $cliente_direccion_cobro
 * @property integer $cliente_sistema_secundario_id
 * @property string $cliente_factura
 * @property string $cliente_razon_social
 * @property integer $cliente_cuit
 * @property string $tipos_cliente_tipo_cliente_id
 * @property string $usuario_rol
 *
 * The followings are the available model relations:
 * @property ClientesPagosFecha[] $clientesPagosFechas
 * @property OrdenesServicio[] $ordenesServicios
 * @property SistemaAlarmas[] $sistemaAlarmas
 * @property TiposCliente $tiposClienteTipoCliente
 */
class Usuarios extends CActiveRecord
{
	/* Gridview Attributes */
    public $FullName;

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'usuarios';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('apellido_persona, dni, email, contrasena, tipos_cliente_tipo_cliente_id, usuario_rol', 'required'),
			array('empleado_temporal, empleado_activo, es_empleado, cliente_sistema_secundario_id, cliente_cuit', 'numerical', 'integerOnly'=>true),
			array('nombre_persona, apellido_persona, direccion, telefono_fijo, telefono_celular, email, telefono_alt, contrasena, empleado_funcion, cliente_direccion_cobro, cliente_factura, cliente_razon_social, usuario_rol', 'length', 'max'=>128),
			array('dni, tipos_cliente_tipo_cliente_id', 'length', 'max'=>11),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('persona_id, nombre_persona, apellido_persona, direccion, telefono_fijo, telefono_celular, dni, email, telefono_alt, contrasena, empleado_funcion, empleado_temporal, empleado_activo, es_empleado, cliente_direccion_cobro, cliente_sistema_secundario_id, cliente_factura, cliente_razon_social, cliente_cuit, tipos_cliente_tipo_cliente_id, usuario_rol, FullName', 'safe', 'on'=>'search'),
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
			'clientesPagosFechas' => array(self::HAS_MANY, 'ClientesPagosFecha', 'personas_persona_id'),
			'ordenesServicios' => array(self::MANY_MANY, 'OrdenesServicio', 'personas_has_ordenes_servicio(personas_persona_id, ordenes_servicio_orden_servicio_id)'),
			'sistemaAlarmas' => array(self::HAS_MANY, 'SistemaAlarmas', 'personas_persona_id'),
			'tiposClienteTipoCliente' => array(self::BELONGS_TO, 'TiposCliente', 'tipos_cliente_tipo_cliente_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'persona_id' => 'Persona',
			'nombre_persona' => 'Nombre Persona',
			'apellido_persona' => 'Apellido Persona',
			'direccion' => 'Direccion',
			'telefono_fijo' => 'Telefono Fijo',
			'telefono_celular' => 'Telefono Celular',
			'dni' => 'Dni',
			'email' => 'Email',
			'telefono_alt' => 'Telefono Alt',
			'contrasena' => 'Contrasena',
			'empleado_funcion' => 'Empleado Funcion',
			'empleado_temporal' => 'Empleado Temporal',
			'empleado_activo' => 'Empleado Activo',
			'es_empleado' => 'Es Empleado',
			'cliente_direccion_cobro' => 'Cliente Direccion Cobro',
			'cliente_sistema_secundario_id' => 'Cliente Sistema Secundario',
			'cliente_factura' => 'Cliente Factura',
			'cliente_razon_social' => 'Cliente Razon Social',
			'cliente_cuit' => 'Cliente Cuit',
			'tipos_cliente_tipo_cliente_id' => 'Tipos Cliente Tipo Cliente',
			'usuario_rol' => 'Usuario Rol',
			'FullName' => 'Nombre',
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

		$criteria->select = array('*', 'CONCAT(apellido_persona, ", ", nombre_persona) AS FullName');
		$criteria->compare('CONCAT(apellido_persona, ", ", nombre_persona)',$this->FullName,true);
		//$criteria->compare('CONCAT(nombre_persona, ", ", apellido_persona)',$this->FullName,true);
		$criteria->compare('persona_id',$this->persona_id,true);
		$criteria->compare('nombre_persona',$this->nombre_persona,true);
		$criteria->compare('apellido_persona',$this->apellido_persona,true);
		$criteria->compare('direccion',$this->direccion,true);
		$criteria->compare('telefono_fijo',$this->telefono_fijo,true);
		$criteria->compare('telefono_celular',$this->telefono_celular,true);
		$criteria->compare('dni',$this->dni,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('telefono_alt',$this->telefono_alt,true);
		$criteria->compare('contrasena',$this->contrasena,true);
		$criteria->compare('empleado_funcion',$this->empleado_funcion,true);
		$criteria->compare('empleado_temporal',$this->empleado_temporal);
		$criteria->compare('empleado_activo',$this->empleado_activo);
		$criteria->compare('es_empleado',$this->es_empleado);
		$criteria->compare('cliente_direccion_cobro',$this->cliente_direccion_cobro,true);
		$criteria->compare('cliente_sistema_secundario_id',$this->cliente_sistema_secundario_id);
		$criteria->compare('cliente_factura',$this->cliente_factura,true);
		$criteria->compare('cliente_razon_social',$this->cliente_razon_social,true);
		$criteria->compare('cliente_cuit',$this->cliente_cuit);
		$criteria->compare('tipos_cliente_tipo_cliente_id',$this->tipos_cliente_tipo_cliente_id,true);
		$criteria->compare('usuario_rol',$this->usuario_rol,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	// Metodo que devuelve el nombre+apellido
	function getFullName()
	{
		return $this->nombre_persona.' '.$this->apellido_persona;
	}

	public function validatePassword($clave)
	{
		return $clave===$this->contrasena; //El campo de password en el modelo.
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Usuarios the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
