<?php
/* @var $this Controller */
$this->pageTitle = 'About';
?>

<h1>About</h1>


<?php $this->widget('bootstrap.widgets.TbDetailView', array(
    'data' => $data,
    'attributes' => $attributes,
)); ?>