<?php
/* @var $this GdTopikController */
/* @var $data GdTopik */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_topik')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_topik), array('view', 'id'=>$data->id_topik)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_matapelajaran')); ?>:</b>
	<?php echo CHtml::encode($data->id_matapelajaran); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('topik')); ?>:</b>
	<?php echo CHtml::encode($data->topik); ?>
	<br />


</div>