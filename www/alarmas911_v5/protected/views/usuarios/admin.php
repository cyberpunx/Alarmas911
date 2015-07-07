<?php
/* @var $this UsuariosController */
/* @var $model Usuarios */

$this->breadcrumbs=array(
	'Usuarioses'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Usuarios', 'url'=>array('index')),
	array('label'=>'Create Usuarios', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#usuarios-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Usuarioses</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'usuarios-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'persona_id',
		array(
			'name'  => 'FullName',
			'value' => '$data->FullName',
		),
		//'nombre_persona',
		//'apellido_persona',
		'direccion',
		'telefono_fijo',
		'telefono_celular',
		/*
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
		'usuario_rol',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>