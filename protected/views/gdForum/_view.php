<?php
/* @var $this GdForumController */
/* @var $data GdForum */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_forum')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_forum), array('view', 'id'=>$data->id_forum)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal')); ?>:</b>
	<?php echo CHtml::encode($data->tanggal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_user_pembuat')); ?>:</b>
	<?php echo CHtml::encode($data->id_user_pembuat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_mtpelajaran')); ?>:</b>
	<?php echo CHtml::encode($data->id_mtpelajaran); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('judul')); ?>:</b>
	<?php echo CHtml::encode($data->judul); ?>
	<br />


</div>