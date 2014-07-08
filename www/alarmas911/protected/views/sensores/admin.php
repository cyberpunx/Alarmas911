<?php
/* @var $this SensoresController */
/* @var $model Sensores */

$this->breadcrumbs=array(
	'Sensores'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Sensores', 'url'=>array('index')),
	array('label'=>'Create Sensores', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#sensores-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Sensores</h1>

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
	'id'=>'sensores-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'sensor_id',
		'Modelos_id_modelo',
		'Baterias_bateria_id',
		'Tipos_Sensores_tipo_sensor_id',
		'Zonas_zona_id',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
