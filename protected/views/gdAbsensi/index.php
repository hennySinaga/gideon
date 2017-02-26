<?php
/* @var $this GdAbsensiController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Gd Absensis',
);

$this->menu=array(
	array('label'=>'Create GdAbsensi', 'url'=>array('create')),
	array('label'=>'Manage GdAbsensi', 'url'=>array('admin')),
);
?>

<h1>Absensi</h1>

<?php 
	$modelKelas = Yii::app()->db->createCommand("select * from gd_kelas ORDER BY kelas ASC")->queryAll();
	
	foreach($modelKelas as $data){
		//$urlLink = Yii::app()->baseUrl."gdAbsensi/create?kelas=".$data['id_kelas'];
		echo "<h3>"."<a href="."index.php?r=gdAbsensi/create&kelas=".$data['id_kelas'].">".$data['kelas']."</a></h3>";
	}		

?>
