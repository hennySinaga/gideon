<?php
/* @var $this GdAbsensiController */
/* @var $model GdAbsensi */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'gd-absensi-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_absen'); ?>
		<?php echo $form->textField($model,'id_absen'); ?>
		<?php echo $form->error($model,'id_absen'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tanggal'); ?>
		<?php echo $form->textField($model,'tanggal'); ?>
		<?php echo $form->error($model,'tanggal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NIS'); ?>
		<?php echo $form->textField($model,'NIS',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'NIS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status_kehadiran'); ?>
		<?php echo $form->textField($model,'status_kehadiran',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'status_kehadiran'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->