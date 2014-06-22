<?php
$this->breadcrumbs=array(
    'Admin CP' => array('admin/admin'),
	'About'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List','url'=>array('index')),
	array('label'=>'Create','url'=>array('create')),
	array('label'=>'View','url'=>array('view','id'=>$model->id)),
);
?>

<h1>Update About <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>