<?php
$this->breadcrumbs=array(
    'Admin CP' => array('admin/admin'),
	'Contacts'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Contacts','url'=>array('index')),
);
?>

<h1>Create Contacts</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>