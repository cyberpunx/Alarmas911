<?php
/* @var $this PanelesController */
/* @var $model Paneles */

$this->breadcrumbs=array(
	'Paneles'=>array('admin'),
	'Administrar',
);

$this->menu=array(
	//array('label'=>'List Paneles', 'url'=>array('index')),
	array('label'=>'Crear Panel', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#paneles-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Paneles</h1>

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
	'id'=>'paneles-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'panel_id',
		'baterias_bateria_id',
		array(
			'header' => 'Modelo',
			'name' => 'modeloMarca',
			'value' => '$data->modelosModelo->ModeloMarca',
		),
		//'modelos_modelo_id',
		array(
			//'filter'=>'sistemaAlarmas.nombre_sistema_alarma',
			'name'=>'sistemaAlarmasName',
			'header'=>'Sistema de Alarmas',
			'value'=>'$data->sistemaAlarmas->nombre_sistema_alarma',
		),
		//'sistema_alarmas_sistema_alarma_id',
		'nombre_panel',
		'observaciones_panel',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
