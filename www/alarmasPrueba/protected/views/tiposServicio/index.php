<?php
/* @var $this TiposServicioController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tipos Servicios',
);

$this->menu=array(
	array('label'=>'Create TiposServicio', 'url'=>array('create')),
	array('label'=>'Manage TiposServicio', 'url'=>array('admin')),
);
?>

<h1>Tipos Servicios</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
