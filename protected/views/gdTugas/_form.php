<?php
/* @var $this GdTugasController */
/* @var $model GdTugas */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'gd-tugas-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'tanggal'); ?>
		<?php echo $form->textField($model,'tanggal'); ?>
		<?php echo $form->error($model,'tanggal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_mtpelajaran'); ?>
		<?php echo $form->textField($model,'id_mtpelajaran'); ?>
		<?php echo $form->error($model,'id_mtpelajaran'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'deskrispi'); ?>
		<?php echo $form->textField($model,'deskrispi',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'deskrispi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'file_soal_tugas'); ?>
		<?php echo $form->textField($model,'file_soal_tugas',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'file_soal_tugas'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->