<?php
/* @var $this ActiverecordlogController */
/* @var $data Activerecordlog */

?>

<tr class="<?php echo $index%2 ? 'alt' : '' ?>"> 

	
	<td><?php echo CHtml::encode($data->creationdate); ?></td>
	<td><?php echo CHtml::encode($data->action); ?></td>
	<td><?php echo CHtml::encode($data->userid); ?></td>
	<td><?php echo CHtml::encode($data->description); ?></td>
	<td><?php echo CHtml::encode($data->oldValue); ?></td>
	<td><?php echo CHtml::encode($data->newValue); ?></td>
	
	<?  /*

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idModel')); ?>:</b>
	<?php echo CHtml::encode($data->idModel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('field')); ?>:</b>
	<?php echo CHtml::encode($data->field); ?>
	<br />	

	<b><?php echo CHtml::encode($data->getAttributeLabel('userid')); ?>:</b>
	<?php echo CHtml::encode($data->userid); ?>
	<br /> 

	*/ ?>

</tr>
	

