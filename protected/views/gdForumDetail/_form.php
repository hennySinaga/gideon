<?php
/* @var $this GdForumDetailController */
/* @var $model GdForumDetail */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'gd-forum-detail-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_forum_detail'); ?>
		<?php echo $form->textField($model,'id_forum_detail'); ?>
		<?php echo $form->error($model,'id_forum_detail'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_forum'); ?>
		<?php echo $form->textField($model,'id_forum'); ?>
		<?php echo $form->error($model,'id_forum'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_user'); ?>
		<?php echo $form->textField($model,'id_user'); ?>
		<?php echo $form->error($model,'id_user'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'postingan'); ?>
		<?php echo $form->textField($model,'postingan',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'postingan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lampiran'); ?>
		<?php echo $form->textField($model,'lampiran',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'lampiran'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->