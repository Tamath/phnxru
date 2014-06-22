<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    
    <?php Yii::app()->bootstrap->register(); ?>
    
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/styles.css" />
    <link rel="stylesheet" href="/css/supersized.core.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="/css/main.css" type="text/css" media="screen" />

    <script type="text/javascript" src="/js/supersized.core.3.2.1.min.js"></script>    
    <script type="text/javascript" src="/js/main.js"></script>
</head>

<body>

<?php $this->widget('bootstrap.widgets.TbNavbar',array(
    'items'=>array(
        array(
            'class'=>'bootstrap.widgets.TbMenu',
            'items'=>array(
                array('label'=>'Home', 'url'=>array('/site/index')),
                array('label'=>'About', 'url'=>array('/site/about')),
                //array('label'=>'About', 'url'=>array('/projects')),
                array('label'=>'Contact', 'url'=>array('/site/contact')),
                array('label'=>'Admin CP', 'url'=>array('/admin/admin'), 'visible'=>Yii::app()->user->checkAccess('Admin')),
                array('label'=>'Login', 'url'=>array('/user/login'), 'visible'=>Yii::app()->user->isGuest),
                array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/user/logout'), 'visible'=>!Yii::app()->user->isGuest)
            ),
        ),
    ),
)); ?>

<div class="container" id="page">
    
    <div class="push-top"></div>
    
    <div class="container-inner">
    
        <?php if(isset($this->breadcrumbs)):?>
            <?php $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
                'links'=>$this->breadcrumbs,
            )); ?><!-- breadcrumbs -->
        <?php endif?>

        <?php echo $content; ?>

        <div class="clear"></div>
    
    </div>


</div><!-- page -->

</body>
</html>
