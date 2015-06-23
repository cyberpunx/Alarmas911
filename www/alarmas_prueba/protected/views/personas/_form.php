<?php
/* @var $this PersonasController */
/* @var $model Personas */
/* @var $form CActiveForm */
?>

<div class="form">

<?php 
	$form=$this->beginWidget('CActiveForm', array(
	'id'=>'personas-form',
	'focus' => array($model, 'persona_id'),
        
    'enableClientValidation' => true,
    'enableAjaxValidation' => true,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'apellido'); ?>
		<?php echo $form->textField($model,'apellido',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'apellido'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'direccion'); ?>
		<?php echo $form->textField($model,'direccion',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'direccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dni'); ?>
		<?php echo $form->textField($model,'dni',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'dni'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>
<!--
	<div class="row">
		<?php echo $form->labelEx($model,'telefono_alt'); ?>
		<?php echo $form->textField($model,'telefono_alt',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'telefono_alt'); ?>
	</div>
-->

	<div class="row">
		<?php echo $form->labelEx($model,'contrasena'); ?>
		<?php echo $form->textField($model,'contrasena',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'contrasena'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usuario_rol'); ?>
		<?php echo $form->textField($model,'usuario_rol',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'usuario_rol'); ?>
	</div>
	<?php
    echo CHtml::link('Add cliente', '#', array('id' => 'loadClienteByAjax'));
    ?>
    <div id="clientes">
        <?php
        $index = 0;
        foreach ($model->clientes as $id => $clientes):
            $this->renderPartial('clientes/_form', array(
                'model' => $clientes,
                'index' => $id,
                'display' => 'block'
            ));
            $index++;
        endforeach;
        ?>
    </div>
    <div style="clear:both;"></div>
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

	

<?php $this->endWidget(); ?>

</div><!-- form -->

	<?php
Yii::app()->clientScript->registerCoreScript('jquery');
Yii::app()->clientScript->registerScript('loadCliente', 'var _index = ' . $index . ';$("#loadClienteByAjax").click(function(e){
    e.preventDefault();
    var _url = "' . Yii::app()->controller->createUrl("loadClienteByAjax", array("load_for" => $this->action->id)) . '&index="+_index;
    $.ajax({
        url: _url,
        success:function(response){
            $("#clientes").append(response);
            $("#clientes .crow").last().animate({
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