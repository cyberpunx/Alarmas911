<?php
/* @var $this EmpleadosController */
/* @var $model Empleados */

$this->breadcrumbs=array(
	'Empleadoses'=>array('index'),
	$model->empleado_id=>array('view','id'=>$model->empleado_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Empleados', 'url'=>array('index')),
	array('label'=>'Create Empleados', 'url'=>array('create')),
	array('label'=>'View Empleados', 'url'=>array('view', 'id'=>$model->empleado_id)),
	array('label'=>'Manage Empleados', 'url'=>array('admin')),
);
?>

<h1>Update Empleados <?php echo $model->empleado_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>