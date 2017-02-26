<?php
/* @var $this GdPengumumanController */
/* @var $data GdPengumuman */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_pengumuman')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_pengumuman), array('view', 'id'=>$data->id_pengumuman)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_user')); ?>:</b>
	<?php echo CHtml::encode($data->id_user); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal')); ?>:</b>
	<?php echo CHtml::encode($data->tanggal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('judul')); ?>:</b>
	<?php echo CHtml::encode($data->judul); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pengumuman')); ?>:</b>
	<?php echo CHtml::encode($data->pengumuman); ?>
	<br />


</div>