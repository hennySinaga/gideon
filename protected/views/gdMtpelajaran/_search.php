<?php
/* @var $this GdMtpelajaranController */
/* @var $model GdMtpelajaran */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_mtpelajaran'); ?>
		<?php echo $form->textField($model,'id_mtpelajaran'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'matapelajaran'); ?>
		<?php echo $form->textField($model,'matapelajaran'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'deskripsi'); ?>
		<?php echo $form->textField($model,'deskripsi',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->