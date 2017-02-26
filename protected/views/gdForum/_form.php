<?php
/* @var $this GdForumController */
/* @var $model GdForum */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'gd-forum-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<!--p class="note">Fields with <span class="required">*</span> are required.</p-->

	<?php echo $form->errorSummary($model); ?>

	<!--div class="row">
		<?php echo $form->labelEx($model,'id_forum'); ?>
		<?php echo $form->textField($model,'id_forum'); ?>
		<?php echo $form->error($model,'id_forum'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tanggal'); ?>
		<?php echo $form->textField($model,'tanggal'); ?>
		<?php echo $form->error($model,'tanggal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_user_pembuat'); ?>
		<?php echo $form->textField($model,'id_user_pembuat'); ?>
		<?php echo $form->error($model,'id_user_pembuat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_mtpelajaran'); ?>
		<?php echo $form->textField($model,'id_mtpelajaran'); ?>
		<?php echo $form->error($model,'id_mtpelajaran'); ?>
	</div-->

	<div class="row">
		<?php echo $form->labelEx($model,'judul'); ?>
		<?php echo $form->textField($model,'judul',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'judul'); ?>
	</div>
	
	<div class="row">
		<?php $this->widget('application.extensions.tinymce.ETinyMce', array('name'=>'html')); ?>
		<?php echo $form->error($model,'id_mtpelajaran'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Buat' : 'Ubah'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->