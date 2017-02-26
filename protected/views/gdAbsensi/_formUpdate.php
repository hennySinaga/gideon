<?php
/* @var $this GdAbsensiController */
/* @var $model GdAbsensi */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'gd-absensi-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>
	<style>
	table, th, td {
	    border: 1px solid black;
	}
	</style>
	
	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
	<?php $modelSiswa = Yii::app()->db->createCommand("select * from gd_murid a 
			join gd_kelas_murid b on(a.id_user = b.id_murid)
			join gd_absensi c on(a.id_user = c.NIS)
			where b.id_kelas = $modelKelas->id_kelas")->queryAll();
	// echo '<pre>';
	// var_export($modelSiswa);
	// exit();
	?>
	<table>
	<?php
		$number =1;
		echo '<tr><th style="width:1%";>No</th><th style="width:70%;">Nama</th><th style="width:10%;">Hadir</th><th style="width:10%;">Sakit</th><th style="width:10%;">Izin</th><th style="width:10%;">Alpa</th></tr>';
		
		foreach($modelSiswa as $data){
			echo '<tr>';	
			echo '<input type="hidden" name="PK[]" value="'.$data['id_user'].'">';
			echo '<td align="center">'.$number.'</td>';
			echo '<td align="left">'.$data['nama'].'</td>';
			$kehadiran = Yii::app()->db->createCommand("select * from gd_murid a 
			where b.id_kelas = $modelKelas->id_kelas")->queryAll();
			echo '<td align="center">'."<input type=\"radio\" name=\"kehadiran_".$data['id_user']."\" value=\"H\">".'</td>';
			echo '<td align="center">'."<input type=\"radio\" name=\"kehadiran_".$data['id_user']."\" value=\"S\">".'</td>';
			echo '<td align="center">'."<input type=\"radio\" name=\"kehadiran_".$data['id_user']."\" value=\"I\">".'</td>';
			echo '<td align="center">'."<input type=\"radio\" name=\"kehadiran_".$data['id_user']."\" value=\"A\">".'</td>';
			$number++;
			echo '</tr>';
		}
	?>
	</table>
	<!-- <div class="row">
		<?php echo $form->labelEx($model,'tanggal'); ?>
		<?php echo $form->textField($model,'tanggal'); ?>
		<?php echo $form->error($model,'tanggal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NIS'); ?>
		<?php echo $form->textField($model,'NIS',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'NIS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status_kehadiran'); ?>
		<?php echo $form->textField($model,'status_kehadiran',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'status_kehadiran'); ?>
	</div>
 -->
	<div class="row buttons">
		<?php echo CHtml::button('Batal', array('onclick' => 'js:document.location.href="gdAbsensi/create"'));?>
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->