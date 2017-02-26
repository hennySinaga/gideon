<?php
/* @var $this GdNilaiController */
/* @var $model GdNilai */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_nilai'); ?>
		<?php echo $form->textField($model,'id_nilai'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_jawaban'); ?>
		<?php echo $form->textField($model,'id_jawaban'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nilai'); ?>
		<?php echo $form->textField($model,'nilai'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->