<?php
/* @var $this SensoresController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Sensores',
);

$this->menu=array(
	array('label'=>'Create Sensores', 'url'=>array('create')),
	array('label'=>'Manage Sensores', 'url'=>array('admin')),
);
?>

<h1>Sensores</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
