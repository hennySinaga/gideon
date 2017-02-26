<?php
/* @var $this GdAbsensiController */
/* @var $data GdAbsensi */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_absen')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_absen), array('view', 'id'=>$data->id_absen)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal')); ?>:</b>
	<?php echo CHtml::encode($data->tanggal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NIS')); ?>:</b>
	<?php echo CHtml::encode($data->NIS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status_kehadiran')); ?>:</b>
	<?php echo CHtml::encode($data->status_kehadiran); ?>
	<br />


</div>