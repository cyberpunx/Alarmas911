<?php
/* @var $this UsuariosController */
/* @var $model Usuarios */

$this->breadcrumbs=array(
	'Usuarios'=>array('admin'),
	$model->FullName,
);

$this->menu=array(
	//array('label'=>'List Usuarios', 'url'=>array('index')),
	array('label'=>'Crear Usuarios', 'url'=>array('create')),
	array('label'=>'Actualizar Usuario', 'url'=>array('update', 'id'=>$model->usuario_id)),
	//array('label'=>'Delete Usuarios', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->usuario_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Usuarios', 'url'=>array('admin')),
	array('label'=>'Estado de Cuenta', 'url'=>array('estadoCuenta', 'id'=>$model->usuario_id)),
);
?>

<h1>Ver datos de usuario: <?php echo $model->FullName; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'usuario_id',
		'nombre',
		'apellido',
		'email',
		'password',
		'direccion',
		'dni',
		'telefono_celular',
		'telefono_fijo',
		'telefono_alt',
		'rol',
		'comentarios',
		'empleado_funcion',
		'empleado_temporal',
		'empleado_activo',
	
		'cliente_sistema_secundario_id',
		'cliente_factura',
		'cliente_razon_social',
		'cliente_cuit',
		array(
			'name'=>'Tipo de Cliente',
			//'type'=>'html',
			'value'=>$model->tiposClienteTipoCliente->nombre_tipo_cliente,
		),
		array(
			'name'=>'Sistemas de Alarmas',
			'type'=>'html',
			'value'=>$model->relatedSistemasAlarmas,
		),
		//array(
		//	'name'=>'Pagos',
		//	'type'=>'html',
		//	'value'=>$model->relatedPagos,
		//),
		//array(
		//	'name'=>'Ordenes de Servicio',
		//	'type'=>'html',
		//	'value'=>$model->relatedOrdenesServicio,
		//),
	),
)); ?>
