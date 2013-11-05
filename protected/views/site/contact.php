<?php
/* @var $this Controller */
$this->pageTitle = 'Contact';
?>

<h1>Contact</h1>

<p>
	You can contact me using the following methods
</p>

<?php $this->widget('bootstrap.widgets.TbDetailView', array(
    'data' => $data,
    'attributes' => $attributes,
)); ?>