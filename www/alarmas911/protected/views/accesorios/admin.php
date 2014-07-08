<?php
/* @var $this AccesoriosController */
/* @var $model Accesorios */

$this->breadcrumbs=array(
	'Accesorioses'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Accesorios', 'url'=>array('index')),
	array('label'=>'Create Accesorios', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#accesorios-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Accesorioses</h1>

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
	'id'=>'accesorios-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'accesorio_id',
		'Modelos_id_modelo',
		'Baterias_bateria_id',
		'Sistema_Alarmas_sistema_alarma_id',
		'nombre_accesorio',
		'observaciones_accesorio',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
