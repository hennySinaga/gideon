<?php
/* @var $this GdMateriController */
/* @var $model GdMateri */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_materi'); ?>
		<?php echo $form->textField($model,'id_materi'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_topik'); ?>
		<?php echo $form->textField($model,'id_topik'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'deskripsi'); ?>
		<?php echo $form->textField($model,'deskripsi',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'file_materi'); ?>
		<?php echo $form->textField($model,'file_materi',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->