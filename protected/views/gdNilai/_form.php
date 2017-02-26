<?php
/* @var $this GdNilaiController */
/* @var $model GdNilai */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'gd-nilai-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_nilai'); ?>
		<?php echo $form->textField($model,'id_nilai'); ?>
		<?php echo $form->error($model,'id_nilai'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_jawaban'); ?>
		<?php echo $form->textField($model,'id_jawaban'); ?>
		<?php echo $form->error($model,'id_jawaban'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nilai'); ?>
		<?php echo $form->textField($model,'nilai'); ?>
		<?php echo $form->error($model,'nilai'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->