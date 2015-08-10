<?php
/* @var $this BateriasController */
/* @var $model Baterias */

$this->breadcrumbs=array(
	'Bateriases'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Baterias', 'url'=>array('index')),
	array('label'=>'Create Baterias', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#baterias-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Bateriases</h1>

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
	'id'=>'baterias-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'bateria_id',
		'sistema_alarmas_sistema_alarma_id',
		'modelos_modelo_id',
		'tipos_baterias_tipo_bateria_id',
		'observaciones_bateria',
		'vida_util',
		/*
		'fecha_alta',
		'fecha_baja',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
