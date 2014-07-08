<?php
/* @var $this PagosController */
/* @var $model Pagos */

$this->breadcrumbs=array(
	'Pagoses'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Pagos', 'url'=>array('index')),
	array('label'=>'Create Pagos', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#pagos-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Pagoses</h1>

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
	'id'=>'pagos-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'pago_id',
		'Ordenes_Servicio_orden_servicio_id',
		'Tipos_Pago_tipo_pago_id',
		'importe',
		'informacion_pago',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
