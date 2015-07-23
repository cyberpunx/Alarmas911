<?php
/* @var $this TiposPagoController */
/* @var $model TiposPago */

$this->breadcrumbs=array(
	'Tipos Pagos'=>array('index'),
	$model->tipo_pago_id=>array('view','id'=>$model->tipo_pago_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TiposPago', 'url'=>array('index')),
	array('label'=>'Create TiposPago', 'url'=>array('create')),
	array('label'=>'View TiposPago', 'url'=>array('view', 'id'=>$model->tipo_pago_id)),
	array('label'=>'Manage TiposPago', 'url'=>array('admin')),
);
?>

<h1>Update TiposPago <?php echo $model->tipo_pago_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>