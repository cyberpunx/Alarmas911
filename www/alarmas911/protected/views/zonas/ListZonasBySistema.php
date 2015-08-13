<?php
/* @var $this ZonasController */
/* @var $model Zonas */

$this->breadcrumbs=array(
	'Zonas'=>array('admin'),
	'Admin Zonas de Sistema',
);

$this->menu=array(
	array('label'=>'Crear Zonas', 'url'=>array('create')),
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
Opcionalmente, puede introducir un operador de comparación (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
o <b>=</b>) al comienzo de cada uno de sus valores de búsqueda para especificar cómo se debe hacer la comparación.
</p>

<?php echo CHtml::link('Búsqueda avanzada','#',array('class'=>'search-button')); ?>
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
			'template'=>'{view},{update}',
		),
	),
)); ?>
