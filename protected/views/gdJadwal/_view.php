<?php
/* @var $this GdJadwalController */
/* @var $data GdJadwal */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_jadwal')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_jadwal), array('view', 'id'=>$data->id_jadwal)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hari')); ?>:</b>
	<?php echo CHtml::encode($data->hari); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('waktu_mulai')); ?>:</b>
	<?php echo CHtml::encode($data->waktu_mulai); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('waktu_selesai')); ?>:</b>
	<?php echo CHtml::encode($data->waktu_selesai); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lokasi_kelas')); ?>:</b>
	<?php echo CHtml::encode($data->lokasi_kelas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NIP')); ?>:</b>
	<?php echo CHtml::encode($data->NIP); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_kelas')); ?>:</b>
	<?php echo CHtml::encode($data->id_kelas); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('id_mtpelajaran')); ?>:</b>
	<?php echo CHtml::encode($data->id_mtpelajaran); ?>
	<br />

	*/ ?>

</div>