<?php
/* @var $this GdTopikController */
/* @var $model GdTopik */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_topik'); ?>
		<?php echo $form->textField($model,'id_topik'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_matapelajaran'); ?>
		<?php echo $form->textField($model,'id_matapelajaran'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'topik'); ?>
		<?php echo $form->textField($model,'topik',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->