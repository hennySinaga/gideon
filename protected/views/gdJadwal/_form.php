<?php
/* @var $this GdJadwalController */
/* @var $model GdJadwal */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'gd-jadwal-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_jadwal'); ?>
		<?php echo $form->textField($model,'id_jadwal'); ?>
		<?php echo $form->error($model,'id_jadwal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hari'); ?>
		<?php echo $form->textField($model,'hari',array('size'=>6,'maxlength'=>6)); ?>
		<?php echo $form->error($model,'hari'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'waktu_mulai'); ?>
		<?php echo $form->textField($model,'waktu_mulai'); ?>
		<?php echo $form->error($model,'waktu_mulai'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'waktu_selesai'); ?>
		<?php echo $form->textField($model,'waktu_selesai'); ?>
		<?php echo $form->error($model,'waktu_selesai'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lokasi_kelas'); ?>
		<?php echo $form->textField($model,'lokasi_kelas',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'lokasi_kelas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NIP'); ?>
		<?php echo $form->textField($model,'NIP',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'NIP'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_kelas'); ?>
		<?php echo $form->textField($model,'id_kelas'); ?>
		<?php echo $form->error($model,'id_kelas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_mtpelajaran'); ?>
		<?php echo $form->textField($model,'id_mtpelajaran'); ?>
		<?php echo $form->error($model,'id_mtpelajaran'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->