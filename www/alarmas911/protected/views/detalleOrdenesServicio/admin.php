<?php
/* @var $this DetalleOrdenesServicioController */
/* @var $model DetalleOrdenesServicio */

$this->breadcrumbs=array(
	'Detalle Ordenes Servicios'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List DetalleOrdenesServicio', 'url'=>array('index')),
	array('label'=>'Create DetalleOrdenesServicio', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#detalle-ordenes-servicio-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Detalle Ordenes Servicios</h1>

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
	'id'=>'detalle-ordenes-servicio-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'detalle_orden_servicio_id',
		'Ordenes_Servicio_orden_servicio_id',
		'Tipos_Servicio_tipo_servicio_id',
		'Descripcion_detalle_orden_servicio',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
