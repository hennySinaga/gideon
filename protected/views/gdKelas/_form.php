<?php
/* @var $this GdKelasController */
/* @var $model GdKelas */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'gd-kelas-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<!--p class="note">Fields with <span class="required">*</span> are required.</p-->

	<?php echo $form->errorSummary($model); ?>

	<!--div class="row">
		<?php echo $form->labelEx($model,'id_kelas'); ?>
		<?php echo $form->textField($model,'id_kelas'); ?>
		<?php echo $form->error($model,'id_kelas'); ?>
	</div-->

	<div class="row">
		<?php echo $form->labelEx($model,'kelas'); ?>
		<?php echo $form->textField($model,'kelas',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'kelas'); ?>
	</div>
	
	<div class="row">
		<?php //echo $form->checkBox($Gdmurid, 'nama')?>
		<?php echo $bodat; ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Buat' : 'Ubah'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->