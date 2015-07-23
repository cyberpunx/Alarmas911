<?php
/* @var $this OrdenesServicioController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ordenes Servicios',
);

$this->menu=array(
	array('label'=>'Create OrdenesServicio', 'url'=>array('create')),
	array('label'=>'Manage OrdenesServicio', 'url'=>array('admin')),
);
?>

<h1>Ordenes Servicios</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
