<?php
/* @var $this IndexController */

$this->breadcrumbs=array(
	'Admin CP',
);
?>

<h1>Admin Control Panel</h1>

<p>Please, choose category:</p>
<ul>
    <li><a href="<?php echo $this->createUrl('admin/contacts'); ?>">Contacts</a></li>
    <li><a href="<?php echo $this->createUrl('admin/about'); ?>">About</a></li>
    <li><a href="<?php echo $this->createUrl('admin/project'); ?>">Projects</a></li>
</ul>