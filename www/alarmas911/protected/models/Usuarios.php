<?php

/**
 * This is the model class for table "usuarios".
 *
 * The followings are the available columns in table 'usuarios':
 * @property string $usuario_id
 * @property string $nombre
 * @property string $apellido
 * @property string $email
 * @property string $password
 * @property string $direccion
 * @property string $dni
 * @property string $telefono_celular
 * @property string $telefono_fijo
 * @property string $telefono_alt
 * @property string $rol
 * @property string $comentarios
 * @property string $empleado_funcion
 * @property integer $empleado_temporal
 * @property integer $empleado_activo
 * @property string $cliente_direccion_cobro
 * @property integer $cliente_sistema_secundario_id
 * @property string $cliente_factura
 * @property string $cliente_razon_social
 * @property integer $cliente_cuit
 * @property string $tipos_cliente_tipo_cliente_id
 *
 * The followings are the available model relations:
 * @property SistemaAlarmas[] $sistemaAlarmases
 * @property TiposCliente $tiposClienteTipoCliente
 * @property UsuariosHasOrdenesServicio[] $usuariosHasOrdenesServicios
 * @property UsuariosPagosFecha[] $usuariosPagosFechas
 */
class Usuarios extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */

	public $fullName;
	public $fullNameDniAddress;

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
			array('apellido, email, password, dni, rol', 'required'),
			array('empleado_temporal, empleado_activo, cliente_sistema_secundario_id, cliente_cuit', 'numerical', 'integerOnly'=>true),
			array('nombre, apellido, email, password, direccion, telefono_celular, telefono_fijo, telefono_alt, rol, empleado_funcion, cliente_direccion_cobro, cliente_factura, cliente_razon_social', 'length', 'max'=>128),
			array('dni, tipos_cliente_tipo_cliente_id', 'length', 'max'=>11),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('usuario_id, nombre, apellido, email, password, direccion, dni, telefono_celular, telefono_fijo, telefono_alt, rol, comentarios, empleado_funcion, empleado_temporal, empleado_activo, cliente_direccion_cobro, cliente_sistema_secundario_id, cliente_factura, cliente_razon_social, cliente_cuit, tipos_cliente_tipo_cliente_id, fullName, fullNameDniAddress', 'safe', 'on'=>'search, searchListClientes'),
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
			'sistemaAlarmas' => array(self::HAS_MANY, 'SistemaAlarmas', 'usuarios_usuario_id'),
			'tiposClienteTipoCliente' => array(self::BELONGS_TO, 'TiposCliente', 'tipos_cliente_tipo_cliente_id'),
			'pagos' => array(self::HAS_MANY, 'Pagos', 'usuarios_usuario_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'usuario_id' => 'Usuario ID',
			'nombre' => 'Nombre',
			'apellido' => 'Apellido',
			'email' => 'Email',
			'password' => 'Contraseña',
			'direccion' => 'Direccion',
			'dni' => 'Nro. de DNI',
			'telefono_celular' => 'Nro. de Celular',
			'telefono_fijo' => 'Nro. de Teléfono',
			'telefono_alt' => 'Nro. de Telefono Alternativo',
			'rol' => 'Tipo de Usuario',
			'comentarios' => 'Comentarios',
			'empleado_funcion' => 'Función',
			'empleado_temporal' => 'Temporal',
			'empleado_activo' => 'Activo',
			'cliente_direccion_cobro' => 'Direccion Cobro',
			'cliente_sistema_secundario_id' => 'ID de Sistema Secundario',
			'cliente_factura' => 'Tipo de Factura',
			'cliente_razon_social' => 'Razon Social',
			'cliente_cuit' => 'Nro de CUIT',
			'tipos_cliente_tipo_cliente_id' => 'Tipo de Cliente',
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

		$criteria->addSearchCondition('concat(nombre, " ", apellido)', $this->fullName);
		$criteria->addSearchCondition('concat(nombre, " ", apellido, " ", dni, " ", direccion)', $this->fullNameDniAddress);

		$criteria->compare('usuario_id',$this->usuario_id,true);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('apellido',$this->apellido,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('direccion',$this->direccion,true);
		$criteria->compare('dni',$this->dni,true);
		$criteria->compare('telefono_celular',$this->telefono_celular,true);
		$criteria->compare('telefono_fijo',$this->telefono_fijo,true);
		$criteria->compare('telefono_alt',$this->telefono_alt,true);
		$criteria->compare('rol',$this->rol,true);
		$criteria->compare('comentarios',$this->comentarios,true);
		$criteria->compare('empleado_funcion',$this->empleado_funcion,true);
		$criteria->compare('empleado_temporal',$this->empleado_temporal);
		$criteria->compare('empleado_activo',$this->empleado_activo);
		$criteria->compare('cliente_direccion_cobro',$this->cliente_direccion_cobro,true);
		$criteria->compare('cliente_sistema_secundario_id',$this->cliente_sistema_secundario_id);
		$criteria->compare('cliente_factura',$this->cliente_factura,true);
		$criteria->compare('cliente_razon_social',$this->cliente_razon_social,true);
		$criteria->compare('cliente_cuit',$this->cliente_cuit);
		$criteria->compare('tipos_cliente_tipo_cliente_id',$this->tipos_cliente_tipo_cliente_id,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public function searchListClientes()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;
		$criteria->condition = "cliente_sistema_secundario_id IS NOT NULL AND cliente_factura = \"A\" ";

		$criteria->addSearchCondition('concat(nombre, " ", apellido)', $this->fullName);
		$criteria->addSearchCondition('concat(nombre, " ", apellido, " ", dni, " ", direccion)', $this->fullNameDniAddress);

		$criteria->compare('usuario_id',$this->usuario_id,true);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('apellido',$this->apellido,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('direccion',$this->direccion,true);
		$criteria->compare('dni',$this->dni,true);
		$criteria->compare('telefono_celular',$this->telefono_celular,true);
		$criteria->compare('telefono_fijo',$this->telefono_fijo,true);
		$criteria->compare('telefono_alt',$this->telefono_alt,true);
		$criteria->compare('rol',$this->rol,true);
		$criteria->compare('comentarios',$this->comentarios,true);
		$criteria->compare('empleado_funcion',$this->empleado_funcion,true);
		$criteria->compare('empleado_temporal',$this->empleado_temporal);
		$criteria->compare('empleado_activo',$this->empleado_activo);
		$criteria->compare('cliente_direccion_cobro',$this->cliente_direccion_cobro,true);
		$criteria->compare('cliente_sistema_secundario_id',$this->cliente_sistema_secundario_id);
		$criteria->compare('cliente_factura',$this->cliente_factura,true);
		$criteria->compare('cliente_razon_social',$this->cliente_razon_social,true);
		$criteria->compare('cliente_cuit',$this->cliente_cuit);
		$criteria->compare('tipos_cliente_tipo_cliente_id',$this->tipos_cliente_tipo_cliente_id,true);

		

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public function validatePassword($clave)
	{
		return $clave===$this->password; //El campo de password en el modelo.
	}

	// Esto se usa para obtener el nombre completo de la persona
	// usado en la vista admin por ejemplo
	public function getFullName(){
		return $this->nombre.' '.$this->apellido;
	}

	public function getFullNameDniAddress(){
		return $this->nombre.' '.$this->apellido.' (DNI: '.$this->dni.') - '.$this->direccion;
	}

	//public function getNombreSistemaAlarmas(){
	//	return $this->sistemaAlarmas->nombre_sistema_alarma;
	//}

	public function getRelatedSistemasAlarmas(){
		$out=CHtml::listData($this->sistemaAlarmas,'sistema_alarma_id','nombre_sistema_alarma');
		$linea = '<ul>';
		foreach($out as $key=>$value){ 
			$linea .= sprintf('<li>%s</li>', CHtml::link($value, array('sistemaAlarmas/view', 'id' => $key)));
		}
		$linea .= '</ul>';
		return $linea;
	}

	public function getRelatedPagos(){
		$out=CHtml::listData($this->pagos,'pago_id','importe');
		$linea = '<ul>';
		foreach($out as $key=>$value){ 
			$linea .= sprintf('<li>%s</li>', CHtml::link($value, array('pagos/view', 'id' => $key)));
		}
		$linea .= '</ul>';
		return $linea;
	}

	public function getRelatedOrdenesServicio(){
		$out=CHtml::listData($this->sistemaAlarmas,'sistema_alarma_id','nombre_sistema_alarma');

		$linea = '<ul>';
		foreach($out as $key=>$value){ 
			$linea .= sprintf('<li>%s</li>', CHtml::link($value, array('sistemaAlarmas/view', 'id' => $key)));

			$criteria = new CDbCriteria;
			$criteria->condition = 'sistema_alarmas_sistema_alarma_id ='.$key; 
			$ordenesLst = new OrdenesServicio;
			
			$out2 = CHtml::listData( $ordenesLst->findAll($criteria),'orden_servicio_id','importe' );
			$index = 1;
			foreach($out2 as $key2=>$value2){
				$linea .= '<ul>';
				$linea .= sprintf('<li>'.$index.') Orden de Servicio importe: %s</li>', CHtml::link($value2, array('ordenesServicio/view', 'id' => $key2)));
				$linea .= '</ul>';
				$index++;
			}
		}
		$linea .= '</ul>';
		return $linea;
	}

	

	

	public function getEstadoContable(){

		$linea = "";
		$lineaAlt = false;

		$ordenes_Lst= Yii::app()->db->createCommand('
			select * from sistema_alarmas
			left join ordenes_servicio OS on OS.sistema_alarmas_sistema_alarma_id = sistema_alarma_id
			where usuarios_usuario_id = '.$this->usuario_id.'
			order by fecha_emision DESC
		')->queryAll();

		$pagos_Lst= Yii::app()->db->createCommand('
			select * from pagos
			where usuarios_usuario_id = '.$this->usuario_id.'
			order by fecha DESC
		')->queryAll();

		$totalDeuda = 0;
		$totalPagos = 0;

		foreach ($ordenes_Lst as $row) {
			$totalDeuda +=  (float) $row['importe'];
		}

		foreach ($pagos_Lst as $row) {
			$totalPagos += (float) $row['importe'];
		}

		$saldo = - $totalDeuda + $totalPagos;

		if($saldo>0){
			$linea.= '<h1 align="right">Saldo: <span style="color:green">'.$saldo.'$</span></h1>';
		}
		if($saldo==0){
			$linea.= '<h1 align="right">Saldo: <span>'.$saldo.'$</span></h1>';
		}
		if($saldo<0){
			$linea.= '<h1 align="right">Saldo: <span style="color:red">'.$saldo.'$</span></h1>';
		}

		


		$linea.='<h5>Ordenes de Servicio</h5>

				<div class="datagrid"> 
					<table>
					
						<thead>
							<tr><th>Fecha</th><th>Sistema</th><th>Importe</th></tr>
						</thead>

						<tfoot>
							<tr>
								<td colspan="3">
									<div id="paging" >
										<ul>
											<li><b>TOTAL:</b> '.$totalDeuda.' $</li>
										</ul>
									</div>
								</td>
							</tr>
						</tfoot>

						<tbody>';

		foreach ($ordenes_Lst as $row) {

			if($lineaAlt){ $linea .= '<tr class="alt">'; }
			else{ $linea .= '<tr>'; }	

			$linea.= '<td>'.$row['fecha_emision'].'</td>'; 
			$linea.= '<td>'.$row['nombre_sistema_alarma'].'</td>';
			$linea.= '<td>'.$row['importe'].'</td>'; 			
			$linea .= '</tr>';
			$lineaAlt = !$lineaAlt;
		}

		$linea.='</tbody>
					</table>	
				</div>

				<br><br><br>
				<h5>Pagos</h5>

				<div class="datagrid"> 
					<table>
					
						<thead>
							<tr><th>Fecha</th><th>Importe</th></tr>
						</thead>

						<tfoot>
							<tr>
								<td colspan="3">
									<div id="paging">
										<ul>
											<li><b>TOTAL:</b> '.$totalPagos.' $</li>
										</ul>
									</div>
								</td>
							</tr>
						</tfoot>
		<tbody>';

		foreach ($pagos_Lst as $row) {

			if($lineaAlt){ $linea .= '<tr class="alt">'; }
			else{ $linea .= '<tr>'; }	

			$linea.= '<td>'.$row['fecha'].'</td>'; 
			$linea.= '<td>'.$row['importe'].'</td>'; 			
			$linea .= '</tr>';
			$lineaAlt = !$lineaAlt;
		}	
		
		$linea.='</tbody>
				</table>
				</div>';

		return $linea;
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
