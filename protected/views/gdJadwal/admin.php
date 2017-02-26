<?php
/* @var $this GdJadwalController */
/* @var $model GdJadwal */

$this->breadcrumbs=array(
	'Gd Jadwals'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List GdJadwal', 'url'=>array('index')),
	array('label'=>'Create GdJadwal', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#gd-jadwal-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Gd Jadwals</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'gd-jadwal-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_jadwal',
		'hari',
		'waktu_mulai',
		'waktu_selesai',
		'lokasi_kelas',
		'NIP',
		/*
		'id_kelas',
		'id_mtpelajaran',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
