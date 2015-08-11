<?php
/* @var $this ZonasController */
/* @var $model Zonas */

$this->breadcrumbs=array(
	'Zonas'=>array('admin'),
	'Admin Zonas de Sistema',
);

$this->menu=array(
	array('label'=>'Create Zonas', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#zonas-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Zonas del Sistema de Alarmas</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$modelSearch,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'zonas-grid',
	'dataProvider'=>$modelSearch->searchListZonasBySistema($_GET['id_sistema']),
	'filter'=>$modelSearch,
	'columns'=>array(		
		//'sistema_alarmas_sistema_alarma_id',
		'sistemaAlarmas.nombre_sistema_alarma',
		//'zona_id',
		'nombre_zona',
		'observaciones_zona',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
