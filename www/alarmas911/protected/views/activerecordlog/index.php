<?php
/* @var $this ActiverecordlogController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Activerecordlogs',
);

$this->menu=array(
	array('label'=>'Create Activerecordlog', 'url'=>array('create')),
	array('label'=>'Manage Activerecordlog', 'url'=>array('admin')),
);
?>

<h1>Activerecordlogs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
