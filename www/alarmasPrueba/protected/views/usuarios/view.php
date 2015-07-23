<?php
/* @var $this UsuariosController */
/* @var $model Usuarios */

$this->breadcrumbs=array(
	'Usuarioses'=>array('index'),
	$model->usuario_id,
);

$this->menu=array(
	array('label'=>'List Usuarios', 'url'=>array('index')),
	array('label'=>'Create Usuarios', 'url'=>array('create')),
	array('label'=>'Update Usuarios', 'url'=>array('update', 'id'=>$model->usuario_id)),
	array('label'=>'Delete Usuarios', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->usuario_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Usuarios', 'url'=>array('admin')),
);
?>

<h1>View Usuarios #<?php echo $model->usuario_id; ?></h1>

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
		'cliente_direccion_cobro',
		'cliente_sistema_secundario_id',
		'cliente_factura',
		'cliente_razon_social',
		'cliente_cuit',
		'tipos_cliente_tipo_cliente_id',
	),
)); ?>
