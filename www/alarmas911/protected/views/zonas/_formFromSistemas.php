<?php
/* @var $this ZonasController */
/* @var $model Zonas */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'zonas-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre_zona'); ?>
		<?php echo $form->textField($model,'nombre_zona',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'nombre_zona'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'observaciones_zona'); ?>
		<?php echo $form->textArea($model,'observaciones_zona',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'observaciones_zona'); ?>
	</div>

	<?php
	echo CHtml::link('Agregar Sensor a esta Zona', '#', array('id' => 'loadChildByAjax'));
	?>
	<div id="sensores">
		<?php
		$index = 0;
		foreach ($model->sensores as $id => $sensores):
			$this->renderPartial('sensores/_form', array(
				'model' => $sensores,
				'index' => $id,
				'display' => 'block'
			));
			$index++;
		endforeach;
		?>
	</div>

	
	<div style="clear:both;"></div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Guardar'); ?>
	</div>



<?php $this->endWidget(); ?>

</div><!-- form -->



<?php
Yii::app()->clientScript->registerCoreScript('jquery');
Yii::app()->clientScript->registerScript('loadchild', '
var _index = ' . $index . ';
$("#loadChildByAjax").click(function(e){
	e.preventDefault();
	var _url = "' . Yii::app()->controller->createUrl("loadChildByAjax", array("load_for" => $this->action->id)) . '&index="+_index;
	$.ajax({
		url: _url,
		success:function(response){
			$("#sensores").append(response);
			$("#sensores .crow").last().animate({
				opacity : 1, 
				left: "+50", 
				height: "toggle"
			});
		}
	});
	_index++;
});
', CClientScript::POS_END);
?>