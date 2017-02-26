<?php
/* @var $this GdTugasController */
/* @var $data GdTugas */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tugas')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_tugas), array('view', 'id'=>$data->id_tugas)); ?>
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('file_soal_tugas')); ?>:</b>
	<?php echo CHtml::encode($data->file_soal_tugas); ?>
	<br />


</div>