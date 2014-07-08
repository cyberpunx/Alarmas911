<?php
/* @var $this TiposPagoController */
/* @var $model TiposPago */

$this->breadcrumbs=array(
	'Tipos Pagos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TiposPago', 'url'=>array('index')),
	array('label'=>'Manage TiposPago', 'url'=>array('admin')),
);
?>

<h1>Create TiposPago</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>