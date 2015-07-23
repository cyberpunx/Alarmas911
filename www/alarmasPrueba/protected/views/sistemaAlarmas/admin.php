<?php
/* @var $this SistemaAlarmasController */
/* @var $model SistemaAlarmas */

$this->breadcrumbs=array(
	'Sistema Alarmases'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List SistemaAlarmas', 'url'=>array('index')),
	array('label'=>'Create SistemaAlarmas', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#sistema-alarmas-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Sistema Alarmases</h1>

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
	'id'=>'sistema-alarmas-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'sistema_alarma_id',
		'nombre_sistema_alarma',
		'observaciones_sistema_alarma',
		'modelos_modelo_id',
		'barrios_barrio_id',
		'tipos_monitoreo_tipo_monitoreo_id',
		/*
		'usuarios_usuario_id',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
