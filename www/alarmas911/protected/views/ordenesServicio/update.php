<?php
/* @var $this OrdenesServicioController */
/* @var $model OrdenesServicio */

$this->breadcrumbs=array(
	'Ordenes Servicios'=>array('index'),
	$model->orden_servicio_id=>array('view','id'=>$model->orden_servicio_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List OrdenesServicio', 'url'=>array('index')),
	array('label'=>'Create OrdenesServicio', 'url'=>array('create')),
	array('label'=>'View OrdenesServicio', 'url'=>array('view', 'id'=>$model->orden_servicio_id)),
	array('label'=>'Manage OrdenesServicio', 'url'=>array('admin')),
);
?>

<h1>Update OrdenesServicio <?php echo $model->orden_servicio_id; ?></h1>


<?php $this->renderPartial('_form', array('model'=>$model)); ?>