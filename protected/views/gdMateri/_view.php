<?php
/* @var $this GdMateriController */
/* @var $data GdMateri */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_materi')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_materi), array('view', 'id'=>$data->id_materi)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_topik')); ?>:</b>
	<?php echo CHtml::encode($data->id_topik); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('deskripsi')); ?>:</b>
	<?php echo CHtml::encode($data->deskripsi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('file_materi')); ?>:</b>
	<?php echo CHtml::encode($data->file_materi); ?>
	<br />


</div>