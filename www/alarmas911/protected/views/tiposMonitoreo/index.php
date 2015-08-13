<?php
/* @var $this TiposMonitoreoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tipos Monitoreos',
);

$this->menu=array(
	array('label'=>'Create TiposMonitoreo', 'url'=>array('create')),
	array('label'=>'Manage TiposMonitoreo', 'url'=>array('admin')),
);
?>

<h1>Tipos Monitoreo</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
