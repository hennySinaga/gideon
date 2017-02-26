<?php
/* @var $this GdUjianController */
/* @var $model GdUjian */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_ujian'); ?>
		<?php echo $form->textField($model,'id_ujian'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tanggal'); ?>
		<?php echo $form->textField($model,'tanggal'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_mtpelajaran'); ?>
		<?php echo $form->textField($model,'id_mtpelajaran'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'deskrispi'); ?>
		<?php echo $form->textField($model,'deskrispi',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'file_soal_ujian'); ?>
		<?php echo $form->textField($model,'file_soal_ujian',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->