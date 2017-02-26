<?php
/* @var $this GdJadwalController */
/* @var $model GdJadwal */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_jadwal'); ?>
		<?php echo $form->textField($model,'id_jadwal'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hari'); ?>
		<?php echo $form->textField($model,'hari',array('size'=>6,'maxlength'=>6)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'waktu_mulai'); ?>
		<?php echo $form->textField($model,'waktu_mulai'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'waktu_selesai'); ?>
		<?php echo $form->textField($model,'waktu_selesai'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lokasi_kelas'); ?>
		<?php echo $form->textField($model,'lokasi_kelas',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NIP'); ?>
		<?php echo $form->textField($model,'NIP',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_kelas'); ?>
		<?php echo $form->textField($model,'id_kelas'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_mtpelajaran'); ?>
		<?php echo $form->textField($model,'id_mtpelajaran'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->