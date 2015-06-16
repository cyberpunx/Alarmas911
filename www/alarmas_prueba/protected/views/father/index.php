<?php
/* @var $this FatherController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Fathers',
);

$this->menu=array(
	array('label'=>'Create Father', 'url'=>array('create')),
	array('label'=>'Manage Father', 'url'=>array('admin')),
);
?>

<h1>Fathers</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
