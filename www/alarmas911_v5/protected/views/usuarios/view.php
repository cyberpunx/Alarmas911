<?php
/* @var $this UsuariosController */
/* @var $model Usuarios */

$this->breadcrumbs=array(
	'Usuarioses'=>array('index'),
	$model->FullName,
);

$this->menu=array(
	array('label'=>'List Usuarios', 'url'=>array('index')),
	array('label'=>'Create Usuarios', 'url'=>array('create')),
	array('label'=>'Update Usuarios', 'url'=>array('update', 'id'=>$model->persona_id)),
	array('label'=>'Delete Usuarios', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->persona_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Usuarios', 'url'=>array('admin')),
);
?>

<h1>View Usuarios #<?php echo $model->persona_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'persona_id',
		'nombre_persona',
		'apellido_persona',
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
		//'tipos_cliente_tipo_cliente_id', //No me interesa mostrar el ID del tipo cliente sino el nombre
		array(
			'label' => $model->tiposClienteTipoCliente->getAttributeLabel('Tipo de Cliente'), // Etiqueta del campo
			'value' => $model->tiposClienteTipoCliente->nombre_tipo_cliente					  // Esto muestra el nombre del tipoCliente (usa la relacion definida en el modelo Personas)	
		),
		'usuario_rol',
	),
)); ?>
