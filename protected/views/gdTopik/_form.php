<?php
/* @var $this GdTopikController */
/* @var $model GdTopik */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'gd-topik-form',
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('enctype'=>'multipart/form-data')
)); 
?>

	<!--p class="note">Fields with <span class="required">*</span> are required.</p-->

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_matapelajaran'); ?>
		<?php $arrData = Yii::app()->db->createCommand("select id_mtpelajaran, matapelajaran from gd_mtpelajaran")->queryAll();
		 echo $form->dropDownList($model,'id_matapelajaran', CHtml::listData($arrData, 'id_mtpelajaran', 'matapelajaran'), array('empty'=>'Pilih Mata Pelajaran')); ?>
		<?php echo $form->error($model,'id_matapelajaran'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'topik'); ?>
		<?php echo $form->textField($model,'topik',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'topik'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($mMateri,'deskripsi'); ?>
		<?php echo $form->textArea($mMateri,'deskripsi',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($mMateri,'deskripsi'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($mMateri,'file_materi'); ?>
		<?php echo $form->fileField($mMateri, 'file_materi',array('size'=>60)); ?>
		<?php echo $form->error($mMateri,'file_materi'); ?>
	</div>
	
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Buat' : 'Ubah'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->