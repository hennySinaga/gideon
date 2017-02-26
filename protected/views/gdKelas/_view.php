<?php
/* @var $this GdKelasController */
/* @var $data GdKelas */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_kelas')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_kelas), array('view', 'id'=>$data->id_kelas)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kelas')); ?>:</b>
	<?php echo CHtml::encode($data->kelas); ?>
	<br />


</div>