<?php
$this->breadcrumbs=array(
    'Admin CP' => array('admin/admin'),
	'About'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List','url'=>array('index')),
);
?>

<h1>Create About</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>