<?php
/* @var $this GdJawabanController */
/* @var $model GdJawaban */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_jawaban'); ?>
		<?php echo $form->textField($model,'id_jawaban'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_murid'); ?>
		<?php echo $form->textField($model,'id_murid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipe_soal'); ?>
		<?php echo $form->textField($model,'tipe_soal',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_soal'); ?>
		<?php echo $form->textField($model,'id_soal'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'file_jawaban'); ?>
		<?php echo $form->textField($model,'file_jawaban',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->