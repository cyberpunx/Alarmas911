<?php
/* @var $this PersonasController */
/* @var $model Personas */

$this->breadcrumbs=array(
	'Personas'=>array('index'),
	$model->persona_id,
);

$this->menu=array(
	array('label'=>'List Personas', 'url'=>array('index')),
	array('label'=>'Create Personas', 'url'=>array('create')),
	array('label'=>'Update Personas', 'url'=>array('update', 'id'=>$model->persona_id)),
	array('label'=>'Delete Personas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->persona_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Personas', 'url'=>array('admin')),
);
?>

<h1>View Personas #<?php echo $model->persona_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'persona_id',
		'nombre_persona',
		'apellido',
		'direccion',
		'telefono_fijo',
		'telefono_celular',
		'dni',
		'email',
		'telefono_alt',
		'contrasena',
		'empleado_funcion',
		'empleado_temporal',
		'empleado_activo',
		'es_empleado',
		'cliente_direccion_cobro',
		'cliente_sistema_secundario_id',
		'cliente_factura',
		'cliente_razon_social',
		'cliente_cuit',
		'tipos_cliente_tipo_cliente_id',
	),
)); ?>
