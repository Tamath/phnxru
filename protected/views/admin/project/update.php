<?php
$this->breadcrumbs=array(
    'Admin CP' => array('admin/admin'),
	'Projects'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Project','url'=>array('index')),
	array('label'=>'Create Project','url'=>array('create')),
	array('label'=>'View Project','url'=>array('view','id'=>$model->id)),
);
?>

<h1>Update Project <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>