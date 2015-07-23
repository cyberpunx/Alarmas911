<?php
/* @var $this OrdenesServicioController */
/* @var $model OrdenesServicio */

$this->breadcrumbs=array(
	'Ordenes Servicios'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List OrdenesServicio', 'url'=>array('index')),
	array('label'=>'Create OrdenesServicio', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#ordenes-servicio-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Ordenes Servicios</h1>

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
	'id'=>'ordenes-servicio-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'orden_servicio_id',
		array(
			//'filter'=>'sistemaAlarmas.nombre_sistema_alarma',
			'name'=>'sistemaAlarmasName',
			'value'=>function($data) {
				if(strlen($data->sistemaAlarmas->nombre_sistema_alarma) > 20){
					return substr($data->sistemaAlarmas->nombre_sistema_alarma, 0, 20)."...";
				} else {
					return $data->sistemaAlarmas->nombre_sistema_alarma;
				}
			},
		),
		'fecha_emision',
		'fecha_cierre',
		'vencimiento_orden',
		'importe',
		'observaciones_orden_servicio',		
		/*
		'prioridad',
		'sistema_alarmas_sistema_alarma_id',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
