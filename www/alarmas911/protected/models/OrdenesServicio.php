<?php

/**
 * This is the model class for table "ordenes_servicio".
 *
 * The followings are the available columns in table 'ordenes_servicio':
 * @property string $orden_servicio_id
 * @property string $fecha_emision
 * @property string $fecha_cierre
 * @property double $importe
 * @property string $observaciones_orden_servicio
 * @property string $vencimiento_orden
 * @property string $prioridad
 * @property string $sistema_alarmas_sistema_alarma_id
 *
 * The followings are the available model relations:
 * @property DetalleOrdenesServicio[] $detalleOrdenesServicios
 * @property SistemaAlarmas $sistemaAlarmasSistemaAlarma
 * @property Pagos[] $pagoses
 * @property UsuariosHasOrdenesServicio $usuariosHasOrdenesServicio
 */
class OrdenesServicio extends CActiveRecord
{

	public $sistemaAlarmasName;
	public $empleadoName;
	public $barrioName;
	public $direccion_sistema_alarma_name;

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'ordenes_servicio';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fecha_emision, sistema_alarmas_sistema_alarma_id', 'required'),
			array('importe', 'numerical'),
			array('observaciones_orden_servicio', 'length', 'max'=>128),
			array('prioridad, sistema_alarmas_sistema_alarma_id, usuarios_usuario_id', 'length', 'max'=>11),
			array('fecha_cierre, vencimiento_orden', 'safe'),
			array('fecha_cierre','compare','compareAttribute'=>'fecha_emision','operator'=>'>=','on'=>'insert, update','message'=>'La Fecha de Cierre no puede ser anterior a la Fecha de Emisión','allowEmpty'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('orden_servicio_id, fecha_emision, fecha_cierre, importe, observaciones_orden_servicio, vencimiento_orden, prioridad, sistema_alarmas_sistema_alarma_id, sistemaAlarmasName, direccion_sistema_alarma_name, empleadoName,barrioName, usuarios_usuario_id', 'safe', 'on'=>'search'),
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
			'detalleOrdenesServicios' => array(self::HAS_MANY, 'DetalleOrdenesServicio', 'ordenes_servicio_orden_servicio_id'),
			'usuarios' => array(self::BELONGS_TO, 'Usuarios', 'usuarios_usuario_id'),
			'sistemaAlarmas' => array(self::BELONGS_TO, 'SistemaAlarmas', 'sistema_alarmas_sistema_alarma_id'),
			'pagos' => array(self::HAS_MANY, 'Pagos', 'ordenes_servicio_orden_servicio_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'orden_servicio_id' => 'Orden Servicio ID',
			'fecha_emision' => 'Fecha de Emision',
			'fecha_cierre' => 'Fecha de Cierre',
			'importe' => 'Importe',
			'observaciones_orden_servicio' => 'Observaciones',
			'vencimiento_orden' => 'Fecha de Vencimiento',
			'prioridad' => 'Prioridad',
			'sistema_alarmas_sistema_alarma_id' => 'Sistema de Alarmas',
			'usuarios_usuario_id' => 'Empleado Responsable',
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

		
		//$criteria->with = array('usuarios');		
		$criteria->compare('sistemaAlarmas.nombre_sistema_alarma', $this->sistemaAlarmasName, true);
		$criteria->compare('sistemaAlarmas.direccion_sistema_alarma', $this->direccion_sistema_alarma_name, true);
		$criteria->with = array('sistemaAlarmas', 'sistemaAlarmas.barrios', 'usuarios');
		$criteria->compare('barrios.nombre_barrio', $this->barrioName, true);

		//$criteria->with = 'usuarios';
		$criteria->addSearchCondition('concat(usuarios.nombre, " ", usuarios.apellido)', $this->empleadoName, true);

		$criteria->compare('orden_servicio_id',$this->orden_servicio_id,true);
		$criteria->compare('fecha_emision',$this->fecha_emision,true);
		$criteria->compare('fecha_cierre',$this->fecha_cierre,true);
		$criteria->compare('importe',$this->importe);
		$criteria->compare('observaciones_orden_servicio',$this->observaciones_orden_servicio,true);
		$criteria->compare('vencimiento_orden',$this->vencimiento_orden,true);
		$criteria->compare('prioridad',$this->prioridad,true);
		$criteria->compare('sistema_alarmas_sistema_alarma_id',$this->sistema_alarmas_sistema_alarma_id,true);
		$criteria->compare('usuarios_usuario_id',$this->usuarios_usuario_id,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'sort'=>array(
				'defaultOrder'=>'fecha_emision DESC',
			)
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return OrdenesServicio the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function getDetallesOrdenServicio(){
		$out=CHtml::listData($this->detalleOrdenesServicios,'detalle_orden_servicio_id','descripcion_detalle_orden_servicio');
		$linea = '<ul>';
		foreach($out as $key=>$value){
			if(Yii::app()->user->checkAccess('ADMINISTRADOR')){ 
				$linea .= sprintf('<li>%s</li>', CHtml::link($value, array('detalleOrdenesServicio/view', 'id' => $key)));
			}else{
				$linea .= sprintf('<li>%s</li>', $value);
			}
		}
		$linea .= '</ul>';
		return $linea;
	}

	public function behaviors()
    {
        return array(
        	'ESaveRelatedBehavior' => array(
                'class' => 'application.components.ESaveRelatedBehavior'),
        	'ActiveRecordLogableBehavior'=> 'application.behaviors.ActiveRecordLogableBehavior',
        );
    }

    public function beforeSave() { 
	    if ($this->vencimiento_orden == "") {
	        $this->vencimiento_orden = null;
	    }
	    if ($this->fecha_cierre == "") {
	        $this->fecha_cierre = null;
	    }
	    return parent::beforeSave();
	}


    public function generarCobrosMensuales($flag){ 	// si flag == true -> hizo clic en boton confirmar
    												// si flag == false -> aun no hizo clic en boton confirmar
    	$linea = "";
		$lineaAlt = false;
		$rollbackQuery = '';
		$lastId = 0;

		if($flag){
			$linea.='<div class="flash-success">Se han generado Ordenes de Servicio satisfactoriamente para los siguientes Sistemas de Alarmas.</div>';
		}else{
			$linea.='<div class="flash-notice">¿Desea generar los siguientes cobros?</div>';
		}

		$sistemas_Lst = Yii::app()->db->createCommand('
			select * from sistema_alarmas sa
				left join usuarios u on sa.usuarios_usuario_id = u.usuario_id
				left join tipos_monitoreo tp on sa.tipos_monitoreo_tipo_monitoreo_id = tp.tipo_monitoreo_id
			where tp.valor > 0
		')->queryAll();

		$importeTotal = 0;

		
		$linea.='
				<div class="datagrid"> 
					<table>
					
						<thead>
							<tr><th>Nombre Sistema</th><th>Cliente</th><th>Tipo de Monitoreo</th><th>Importe</th></tr>
						</thead>				

						<tbody>';

		foreach($sistemas_Lst as $sistema){
			if($lineaAlt){ $linea .= '<tr class="alt">'; }
			else{ $linea .= '<tr>'; }	

			$linea.= '<td>'.$sistema['nombre_sistema_alarma'].'</td>'; 
			$linea.= '<td>'.$sistema['apellido'].', '.$sistema['nombre'].'</td>'; 
			$linea.= '<td>'.$sistema['nombre_tipo_monitoreo'].'</td>'; 
			$linea.= '<td>'.$sistema['valor'].'</td>'; 

			$importeTotal += $sistema['valor'];

			if($flag){
				$qry = Yii::app()->db->createCommand("
					INSERT INTO ordenes_servicio(fecha_emision,fecha_cierre,importe,observaciones_orden_servicio,vencimiento_orden, usuarios_usuario_id, sistema_alarmas_sistema_alarma_id)
					VALUES( 
						'".date('Y-m-d')."',
						'".date('Y-m-d')."',
						'".$sistema['valor']."',
						'Orden generada por el Sistema para cobrar el servicio de monitoreo.',
						'".date('Y-m-d')."',
						'1',
						'".$sistema['sistema_alarma_id']."')
				")->execute();

				// Genero la constula "rollback" para cada insercion
				$lastId = Yii::app()->db->getLastInsertId();
				$rollbackQuery .= "DELETE from ordenes_servicio WHERE orden_servicio_id = ".$lastId.";";

				//File
				$webroot = Yii::getPathOfAlias('webroot');
				$file =  $webroot.'/protected/commands/ordenes_servicio_cobro_mensual_rollback.sql';
				$content = file_get_contents($file);
				$pos = strpos($content, (string)$lastId);
				if($pos === false && (is_numeric($lastId))){
					$handle = fopen($file, 'a+');				
					fwrite($handle, $rollbackQuery);
					fclose($handle);
				}

												
			}
			

			$linea .= '</tr>';
			$lineaAlt = !$lineaAlt;
		}

		$linea.='</tbody>
						<tfoot>
							<tr>
								<td colspan="4">
									<div id="paging" >
										<ul>
											<li><b>TOTAL:</b> '.$importeTotal.'$</li>
										</ul>
										<ul>';
		$linea.='								
											
										</ul>
									</div>
								</td>
							</tr>
						</tfoot>
				</table>
				</div>';
		return $linea;
    }

    function rollbackCobrosMensuales($flag){    	
    	
		$linea = "";
		$lineaAlt = false;
		$rollbackQuery = '';
		$lastId = 0;		
		$webroot = Yii::getPathOfAlias('webroot');
		$file =  $webroot.'/protected/commands/ordenes_servicio_cobro_mensual_rollback.sql';
		if(filesize($file) > 0){
			$content = file_get_contents($file);
			$content = str_replace(';', '<br/>', $content);
		}

		if($flag){
			$linea.='<div class="flash-success">Se han eliminado Ordenes de Servicio satisfactoriamente.</div>';
		}else{
			$linea.='<div class="flash-error">¿Desea deshacer los siguientes cobros?</div>';
		}

		if(!$flag && filesize($file) > 0){
			$linea.='<p>';
			$linea.= $content;
			$linea.='</p>';	
		}else{
			$linea .= "<p><b>No hay Ordenes de Servicio para revertir.</b></p>";
		}

		if($flag){			
			$sql = file_get_contents($file);
			if(filesize($file) > 0){
				Yii::app()->db->createCommand($sql)->execute();
			}											
		}


		if($flag && filesize($file) > 0){
			$handle = fopen($file, 'w');
			fclose($handle);
		}

		return $linea;


    }
    
}
