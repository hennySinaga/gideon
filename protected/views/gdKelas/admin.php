<?php
/* @var $this GdKelasController */
/* @var $model GdKelas */

/* $this->breadcrumbs=array(
	'Gd Kelases'=>array('index'),
	'Manage',
); */

$this->menu=array(
	// array('label'=>'List GdKelas', 'url'=>array('index')),
	// array('label'=>'Create GdKelas', 'url'=>array('create')),
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
	$('#gd-kelas-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Daftar Kelas</h1>

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
	'id'=>'gd-kelas-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'id_kelas',
		'kelas',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
