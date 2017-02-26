<?php
/* @var $this GdKelasController */
/* @var $model GdKelas */
/* @var $form CActiveForm */
?>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'gd-kelas-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'kelas'); ?>
		<?php echo $form->textField($model,'kelas',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'kelas'); ?>
	</div>
	<style>
	table, th, td {
	    border: 1px solid black;
	}
	</style>
	<table>
	<?php 
		$modelSiswa = Yii::app()->db->createCommand("select * from gd_murid ORDER BY nama ASC")->queryAll();
		$modelKelasMurids= Yii::app()->db->createCommand("select * from gd_kelas_murid where id_kelas = '".$id."' ")->queryAll();
		$temp = array();
		foreach($modelKelasMurids as $modelKelasMurid){
        	$temp[$modelKelasMurid['id_murid']] = $modelKelasMurid['id_murid'];
    	}
		$number =1;
		echo '<tr><th style="width:1%";>No</th><th style="width:80%;">Nama</th><th style="width:1%">Pilih</th></tr>';
		
		foreach($modelSiswa as $data){
			echo '<tr>';	
			echo '<td align="center">'.$number.'</td>';
			echo '<td align="left">'.$data['nama'].'</td>';	
			if(array_key_exists($data['id_user'],$temp)){
				echo '<td align="center">'."<input type=\"checkbox\" name=\"pilihanSiswa[]\" checked value=".$data['id_user'].">".'</td>';
			}
			else{
				echo '<td align="center">'."<input type=\"checkbox\" name=\"pilihanSiswa[]\" value=".$data['id_user'].">".'</td>';
			}
				
			$number++;
			echo '</tr>';
		}

	?>
	</table>
	<div class="row buttons">
		<?php echo CHtml::button('Batal', array('onclick' => 'js:document.location.href="gdKelas/create"'));?>
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

