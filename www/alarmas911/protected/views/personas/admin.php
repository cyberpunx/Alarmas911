<?php
/* @var $this PersonasController */
/* @var $model Personas */

/*
 * COMENTARIOS:
 * Agregue la columna para mostrar y filtrar por FullName (nombre completo)
 *
 */

$this->breadcrumbs=array(
	'Clientes'=>array('admin'),
	'Listado',
);

$this->menu=array(
	array('label'=>'Listar Clientes', 'url'=>array('admin')),
	array('label'=>'Insertar Cliente', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#personas-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Listar y Administrar Clientes</h1>

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
	'id'=>'personas-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		array(
			'name' => 'fullName',
			'value' => '$data->getFullName()',
		),
		'email',
		//'persona_id',
		//'nombre',
		//'apellido',
		'direccion',
		'telefono_fijo',
		'telefono_celular',		
		//'dni',		
		//'telefono_alt',
		//'contrasena',
		//'usuario_rol',
		
		array(
			'class'=>'CButtonColumn',
		),

	),
)); 
?>
