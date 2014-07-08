<?php
/* @var $this ClientesPagosFechaController */
/* @var $model ClientesPagosFecha */

$this->breadcrumbs=array(
	'Clientes Pagos Fechas'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List ClientesPagosFecha', 'url'=>array('index')),
	array('label'=>'Create ClientesPagosFecha', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#clientes-pagos-fecha-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Clientes Pagos Fechas</h1>

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
	'id'=>'clientes-pagos-fecha-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'cliente_pago_fecha_id',
		'Pagos_pago_id',
		'Clientes_cliente_id',
		'fecha',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
