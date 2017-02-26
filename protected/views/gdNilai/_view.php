<?php
/* @var $this GdNilaiController */
/* @var $data GdNilai */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_nilai')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_nilai), array('view', 'id'=>$data->id_nilai)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_jawaban')); ?>:</b>
	<?php echo CHtml::encode($data->id_jawaban); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nilai')); ?>:</b>
	<?php echo CHtml::encode($data->nilai); ?>
	<br />


</div>