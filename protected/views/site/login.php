<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

/* $this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
); */
?>
<center>
<h1>Login</h1>

<p>Masukkan username dan password untuk masuk ke sistem.</p>

<table>
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<!--p class="note">Fields with <span class="required">*</span> are required.</p-->

	<tr>
		<td><?php echo $form->labelEx($model,'username'); ?></td>
		<td><?php echo $form->textField($model,'username'); ?></td>
		<td><?php echo $form->error($model,'username'); ?></td>
	</tr>

	<tr>
		<td><?php echo $form->labelEx($model,'password'); ?></td>
		<td><?php echo $form->passwordField($model,'password'); ?></td>
		<td><?php echo $form->error($model,'password'); ?></td>
		<!--p class="hint">
			Hint: You may login with <kbd>demo</kbd>/<kbd>demo</kbd> or <kbd>admin</kbd>/<kbd>admin</kbd>.
		</p-->
	</tr>

	<!--div class="row rememberMe">
		<?php echo $form->checkBox($model,'rememberMe'); ?>
		<?php echo $form->label($model,'rememberMe'); ?>
		<?php echo $form->error($model,'rememberMe'); ?>
	</div-->

	<tr>
		<td></td>
		<td><?php echo CHtml::submitButton('Login'); ?></td>
	</tr>

<?php $this->endWidget(); ?>
</table><!-- form --></center>
