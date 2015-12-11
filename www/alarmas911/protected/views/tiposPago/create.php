<?php
/* @var $this TiposPagoController */
/* @var $model TiposPago */

$this->breadcrumbs=array(
	'Tipos Pago'=>array('admin'),
	'Crear',
);

$this->menu=array(
	//array('label'=>'List TiposPago', 'url'=>array('index')),
	array('label'=>'Administrar Tipos de Pago', 'url'=>array('admin')),
);
?>

<h1>Crear Tipo de Pago</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>