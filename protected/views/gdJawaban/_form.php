<?php
/* @var $this GdJawabanController */
/* @var $model GdJawaban */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'gd-jawaban-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_jawaban'); ?>
		<?php echo $form->textField($model,'id_jawaban'); ?>
		<?php echo $form->error($model,'id_jawaban'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_murid'); ?>
		<?php echo $form->textField($model,'id_murid'); ?>
		<?php echo $form->error($model,'id_murid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipe_soal'); ?>
		<?php echo $form->textField($model,'tipe_soal',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'tipe_soal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_soal'); ?>
		<?php echo $form->textField($model,'id_soal'); ?>
		<?php echo $form->error($model,'id_soal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'file_jawaban'); ?>
		<?php echo $form->textField($model,'file_jawaban',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'file_jawaban'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->