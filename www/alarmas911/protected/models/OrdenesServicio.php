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
			array('importe', 'numerical','min'=>0.01),
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


	public function getImporteTotalCobrosMensuales(){
		$sistemas_Lst = Yii::app()->db->createCommand('
			select * from sistema_alarmas sa
				left join usuarios u on sa.usuarios_usuario_id = u.usuario_id
				left join tipos_monitoreo tp on sa.tipos_monitoreo_tipo_monitoreo_id = tp.tipo_monitoreo_id
			where tp.valor > 0 AND sa.activo_sistema_alarma = 1
		')->queryAll();

		$importeTotal = 0;
		foreach($sistemas_Lst as $sistema){	
			$importeTotal += $sistema['valor'];	
		}
		return $importeTotal;
	}

	public function getFechaUltimoCobro(){
		//File
		$webroot = Yii::getPathOfAlias('webroot');
		$file =  $webroot.'/protected/commands/ordenes_servicio_cobro_mensual_rollback.sql';
		$content = file_get_contents($file);
		$xml = simplexml_load_string($content);
		return $xml->date;
	}



	public function generarCobrosMensuales($flag){ 	// si flag == true -> hizo clic en boton confirmar
    												// si flag == false -> aun no hizo clic en boton confirmar
 		$rollbackQuery = '';
		$lastId = 0;

		$sistemas_Lst = Yii::app()->db->createCommand('
			select * from sistema_alarmas sa
				left join usuarios u on sa.usuarios_usuario_id = u.usuario_id
				left join tipos_monitoreo tp on sa.tipos_monitoreo_tipo_monitoreo_id = tp.tipo_monitoreo_id
			where tp.valor > 0 AND sa.activo_sistema_alarma = 1
		')->queryAll();

		foreach($sistemas_Lst as $sistema){

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
			}	
		}

		//Abro el archivo
		$webroot = Yii::getPathOfAlias('webroot');
		$file =  $webroot.'/protected/commands/ordenes_servicio_cobro_mensual_rollback.sql';

		// Reemplazo la prev_date por la fecha que estaba en date
		$content = file_get_contents($file);
		$xml = simplexml_load_string($content);
		$replacement = $xml->date;
		$newContent = replace_between($content, "<prev_date>", "</prev_date>", $replacement);
		$handle = fopen($file, 'w');		
		fwrite($handle, $newContent);
		fclose($handle);
		
		// Reemplazo la fecha que estaba por la de hoy
		$content = file_get_contents($file);
		$replacement = date('Y-m-d');
		$newContent = replace_between($content, "<date>", "</date>", $replacement);
		$handle = fopen($file, 'w');		
		fwrite($handle, $newContent);
		fclose($handle);


		// Reemplazo la rollback query por la nueva
		$content = file_get_contents($file);
		$replacement = $rollbackQuery;
		$newContent = replace_between($content, "<rollback_query>", "</rollback_query>", $replacement);
		$handle = fopen($file, 'w');		
		fwrite($handle, $newContent);
		fclose($handle);


    }

    public function rollbackCobrosMensuales($flag){    	
    	
		$linea = "";
		$lineaAlt = false;
		$rollbackQuery = '';
		$lastId = 0;		
		$webroot = Yii::getPathOfAlias('webroot');
		$file =  $webroot.'/protected/commands/ordenes_servicio_cobro_mensual_rollback.sql';
		$content = file_get_contents($file);
		$xml = simplexml_load_string($content);
		$sql = $xml->rollback_query;		

		if(filesize($file) > 0){
			$content = file_get_contents($file);
			$content = str_replace(';', '<br/>', $content);
		}

		if($flag){
			$linea.='<div class="flash-success">Se han eliminado Ordenes de Servicio satisfactoriamente.</div>';
		}else{
			$linea.='<div class="flash-error">¿Desea deshacer los siguientes cobros?</div>';
		}

		if(!$flag && $sql != "" ){

			$linea .= '<b>Deshacer los cobros realizados el día: '. $xml->date.'</b></br>';
			$linea.='<p>';
			$linea.= str_replace(';', '<br/>', $xml->rollback_query);
		}else{
			$linea .= "<p><b>No hay Ordenes de Servicio para revertir.</b></p>";
		}

		if($flag){		
			if($sql){
				Yii::app()->db->createCommand($sql)->execute();
			}											
		}


		if($flag && $sql){			
			// Reemplazo la date por la prev_date
			$content = file_get_contents($file);
			$xml = simplexml_load_string($content);
			$replacement = $xml->prev_date;
			$newContent = replace_between($content, "<date>", "</date>", $replacement);
			$handle = fopen($file, 'w');		
			fwrite($handle, $newContent);
			fclose($handle);

			// Reemplazo la prev_date por nulo
			$content = file_get_contents($file);
			$xml = simplexml_load_string($content);
			$replacement = "";
			$newContent = replace_between($content, "<prev_date>", "</prev_date>", $replacement);
			$handle = fopen($file, 'w');		
			fwrite($handle, $newContent);
			fclose($handle);

			// Reemplazo la rollback query por nulo
			$content = file_get_contents($file);
			$replacement = "";
			$newContent = replace_between($content, "<rollback_query>", "</rollback_query>", $replacement);
			$handle = fopen($file, 'w');		
			fwrite($handle, $newContent);
			fclose($handle);

			
		}

		return $linea;


    }

	
    
}


function replace_between($str, $needle_start, $needle_end, $replacement) {
    $pos = strpos($str, $needle_start);
    $start = $pos === false ? 0 : $pos + strlen($needle_start);

    $pos = strpos($str, $needle_end, $start);
    $end = $start === false ? strlen($str) : $pos;
 
    return substr_replace($str,$replacement,  $start, $end - $start);
}
