<?php
/* @var $this GdForumController */
/* @var $model GdForum */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_forum'); ?>
		<?php echo $form->textField($model,'id_forum'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tanggal'); ?>
		<?php echo $form->textField($model,'tanggal'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_user_pembuat'); ?>
		<?php echo $form->textField($model,'id_user_pembuat'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_mtpelajaran'); ?>
		<?php echo $form->textField($model,'id_mtpelajaran'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'judul'); ?>
		<?php echo $form->textField($model,'judul',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->