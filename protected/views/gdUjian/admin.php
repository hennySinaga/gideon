<?php
/* @var $this GdUjianController */
/* @var $model GdUjian */

$this->breadcrumbs=array(
	'Gd Ujians'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List GdUjian', 'url'=>array('index')),
	array('label'=>'Create GdUjian', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#gd-ujian-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Gd Ujians</h1>

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
	'id'=>'gd-ujian-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_ujian',
		'tanggal',
		'id_mtpelajaran',
		'deskrispi',
		'file_soal_ujian',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
