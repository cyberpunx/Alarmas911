<?php
/* @var $this TiposServicioController */
/* @var $model TiposServicio */

$this->breadcrumbs=array(
	'Tipos Servicio'=>array('admin'),
	'Administrar',
);

$this->menu=array(
	//array('label'=>'List TiposServicio', 'url'=>array('index')),
	array('label'=>'Crear Tipo de Servicio', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#tipos-servicio-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar  Tipos de Servicio</h1>

<p>
Opcionalmente, puede introducir un operador de comparación (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
o <b>=</b>) al comienzo de cada uno de sus valores de búsqueda para especificar cómo se debe hacer la comparación.
</p>

<?php echo CHtml::link('Búsqueda avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'tipos-servicio-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'tipo_servicio_id',
		'nombre_tipo_servicio',
		'observaciones_tipo_servicio',
		array(
			'class'=>'CButtonColumn',
			'template'=>'{view}{update}{delete}',
		),
	),
)); ?>
