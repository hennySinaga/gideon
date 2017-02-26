<?php
/* @var $this GdUjianController */
/* @var $data GdUjian */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_ujian')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_ujian), array('view', 'id'=>$data->id_ujian)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal')); ?>:</b>
	<?php echo CHtml::encode($data->tanggal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_mtpelajaran')); ?>:</b>
	<?php echo CHtml::encode($data->id_mtpelajaran); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('deskrispi')); ?>:</b>
	<?php echo CHtml::encode($data->deskrispi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('file_soal_ujian')); ?>:</b>
	<?php echo CHtml::encode($data->file_soal_ujian); ?>
	<br />


</div>