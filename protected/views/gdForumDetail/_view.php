<?php
/* @var $this GdForumDetailController */
/* @var $data GdForumDetail */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_forum_detail')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_forum_detail), array('view', 'id'=>$data->id_forum_detail)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_forum')); ?>:</b>
	<?php echo CHtml::encode($data->id_forum); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_user')); ?>:</b>
	<?php echo CHtml::encode($data->id_user); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('postingan')); ?>:</b>
	<?php echo CHtml::encode($data->postingan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lampiran')); ?>:</b>
	<?php echo CHtml::encode($data->lampiran); ?>
	<br />


</div>