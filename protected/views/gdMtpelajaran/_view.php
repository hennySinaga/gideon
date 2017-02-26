<?php
/* @var $this GdMtpelajaranController */
/* @var $data GdMtpelajaran */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_mtpelajaran')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_mtpelajaran), array('view', 'id'=>$data->id_mtpelajaran)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('matapelajaran')); ?>:</b>
	<?php echo CHtml::encode($data->matapelajaran); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('deskripsi')); ?>:</b>
	<?php echo CHtml::encode($data->deskripsi); ?>
	<br />


</div>