<?php
/* @var $this SistemaAlarmasController */
/* @var $model SistemaAlarmas */

$this->breadcrumbs=array(
	'Sistema Alarmases'=>array('index'),
	$model->sistema_alarma_id=>array('view','id'=>$model->sistema_alarma_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List SistemaAlarmas', 'url'=>array('index')),
	array('label'=>'Create SistemaAlarmas', 'url'=>array('create')),
	array('label'=>'View SistemaAlarmas', 'url'=>array('view', 'id'=>$model->sistema_alarma_id)),
	array('label'=>'Manage SistemaAlarmas', 'url'=>array('admin')),
);
?>

<h1>Update SistemaAlarmas <?php echo $model->sistema_alarma_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>