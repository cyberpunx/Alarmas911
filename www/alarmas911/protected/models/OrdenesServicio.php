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
			array('prioridad, sistema_alarmas_sistema_alarma_id', 'length', 'max'=>11),
			array('fecha_cierre, vencimiento_orden', 'safe'),
			array('fecha_cierre','compare','compareAttribute'=>'fecha_emision','operator'=>'>=','on'=>'insert, update','message'=>'La Fecha de Cierre no puede ser anterior a la Fecha de Emisión','allowEmpty'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('orden_servicio_id, fecha_emision, fecha_cierre, importe, observaciones_orden_servicio, vencimiento_orden, prioridad, sistema_alarmas_sistema_alarma_id, sistemaAlarmasName', 'safe', 'on'=>'search'),
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
			'sistemaAlarmas' => array(self::BELONGS_TO, 'SistemaAlarmas', 'sistema_alarmas_sistema_alarma_id'),
			'pagos' => array(self::HAS_MANY, 'Pagos', 'ordenes_servicio_orden_servicio_id'),
			'usuariosHasOrdenesServicio' => array(self::HAS_ONE, 'UsuariosHasOrdenesServicio', 'ordenes_servicio_orden_servicio_id'),
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

		
		$criteria->with = 'sistemaAlarmas';
		$criteria->compare('sistemaAlarmas.nombre_sistema_alarma', $this->sistemaAlarmasName, true);

		$criteria->compare('orden_servicio_id',$this->orden_servicio_id,true);
		$criteria->compare('fecha_emision',$this->fecha_emision,true);
		$criteria->compare('fecha_cierre',$this->fecha_cierre,true);
		$criteria->compare('importe',$this->importe);
		$criteria->compare('observaciones_orden_servicio',$this->observaciones_orden_servicio,true);
		$criteria->compare('vencimiento_orden',$this->vencimiento_orden,true);
		$criteria->compare('prioridad',$this->prioridad,true);
		$criteria->compare('sistema_alarmas_sistema_alarma_id',$this->sistema_alarmas_sistema_alarma_id,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
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
			$linea .= sprintf('<li>%s</li>', CHtml::link($value, array('detalleOrdenesServicio/view', 'id' => $key)));
		}
		$linea .= '</ul>';
		return $linea;
	}

	public function behaviors()
    {
        return array('ESaveRelatedBehavior' => array(
                'class' => 'application.components.ESaveRelatedBehavior')
        );
    }
}
