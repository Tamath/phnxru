<?php
$this->breadcrumbs=array(
    'Admin CP' => array('admin/admin'),
	'Contacts'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Contacts','url'=>array('index')),
	array('label'=>'Create Contacts','url'=>array('create')),
	array('label'=>'Update Contacts','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Contacts','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<h1>View Contacts #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'value',
		'is_link',
		'sort',
	),
)); ?>
