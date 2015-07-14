<?php
/* @var $this SistemaAlarmasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Sistema Alarmases',
);

$this->menu=array(
	array('label'=>'Create SistemaAlarmas', 'url'=>array('create')),
	array('label'=>'Manage SistemaAlarmas', 'url'=>array('admin')),
);
?>

<h1>Sistema Alarmases</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
