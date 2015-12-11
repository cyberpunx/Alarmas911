<?php
/* @var $this TiposPagoController */
/* @var $model TiposPago */

$this->breadcrumbs=array(
	'Tipos Pago'=>array('admin'),
	$model->tipo_pago_id=>array('view','id'=>$model->tipo_pago_id),
	'Actualizar',
);

$this->menu=array(
	//array('label'=>'List TiposPago', 'url'=>array('index')),
	array('label'=>'Crear Tipo de Pago', 'url'=>array('create')),
	array('label'=>'Ver Tipo de Pago', 'url'=>array('view', 'id'=>$model->tipo_pago_id)),
	array('label'=>'Administrar Tipos de Pago', 'url'=>array('admin')),
);
?>

<h1>Actualizar Tipo de Pago # <?php echo $model->tipo_pago_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>