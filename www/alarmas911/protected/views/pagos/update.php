<?php
/* @var $this PagosController */
/* @var $model Pagos */

$this->breadcrumbs=array(
	'Pagoses'=>array('index'),
	$model->pago_id=>array('view','id'=>$model->pago_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Pagos', 'url'=>array('index')),
	array('label'=>'Create Pagos', 'url'=>array('create')),
	array('label'=>'View Pagos', 'url'=>array('view', 'id'=>$model->pago_id)),
	array('label'=>'Manage Pagos', 'url'=>array('admin')),
);
?>

<h1>Update Pagos <?php echo $model->pago_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>