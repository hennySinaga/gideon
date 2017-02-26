<?php
/* @var $this GdJawabanController */
/* @var $data GdJawaban */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_jawaban')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_jawaban), array('view', 'id'=>$data->id_jawaban)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_murid')); ?>:</b>
	<?php echo CHtml::encode($data->id_murid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipe_soal')); ?>:</b>
	<?php echo CHtml::encode($data->tipe_soal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_soal')); ?>:</b>
	<?php echo CHtml::encode($data->id_soal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('file_jawaban')); ?>:</b>
	<?php echo CHtml::encode($data->file_jawaban); ?>
	<br />


</div>