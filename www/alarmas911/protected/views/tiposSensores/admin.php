<?php
/* @var $this TiposSensoresController */
/* @var $model TiposSensores */

$this->breadcrumbs=array(
	'Tipos Sensores'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List TiposSensores', 'url'=>array('index')),
	array('label'=>'Create TiposSensores', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#tipos-sensores-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Tipos Sensores</h1>

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
	'id'=>'tipos-sensores-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'tipo_sensor_id',
		'nombre_sensor',
		'observaciones_sensor',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
