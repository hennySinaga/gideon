<?php
/* @var $this GdGuruController */
/* @var $model GdGuru */

/* $this->breadcrumbs=array(
	'Gd Gurus'=>array('index'),
	'Manage',
); */

$this->menu=array(
	// array('label'=>'List GdGuru', 'url'=>array('index')),
	// array('label'=>'Create GdGuru', 'url'=>array('create')),
	//staff menu
	array('label'=>'Beranda', 'url'=>array('admin')),
	array('label'=>'Pengumuman', 'url'=>array('admin')),
	array('label'=>'Guru', 'url'=>array('admin')),
	array('label'=>'Murid', 'url'=>array('admin')),
	array('label'=>'Kelas', 'url'=>array('admin')),
	array('label'=>'Profil', 'url'=>array('admin')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#gd-guru-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Daftar Guru</h1>

<!--p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p-->

<?php //echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'gd-guru-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'id_user',
		'NIP',
		'nama',
		//'alamat',
		'telepon',
		//'jenis_kelamin',
		/*
		'agama',
		'tempat_lahir',
		'tanggal_lahir',
		'foto',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
