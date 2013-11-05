<?php

// Define a path alias for the Bootstrap extension as it's used internally.
Yii::setPathOfAlias('bootstrap', dirname(__FILE__) . '/../extensions/bootstrap');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
	'name' => 'phnx.ru',
	'theme' => 'bootstrap',
	// preloading 'log' component
	'preload' => array('log'),
	// autoloading model and component classes
	'import' => array(
		'application.models.*',
		'application.components.*',
		'application.modules.user.models.*',
		'application.modules.user.components.*',
		'application.modules.rights.*',
		'application.modules.rights.components.*',
	),
	'defaultController' => 'site',
	'modules' => array(
		'gii' => array(
			'generatorPaths' => array(
				'bootstrap.gii',
			),
            'class' => 'system.gii.GiiModule',
            'password' => '123',
		),
		'user' => array(
			'tableUsers' => 'users',
			'tableProfiles' => 'profiles',
			'tableProfileFields' => 'profiles_fields',
			# encrypting method (php hash function)
			'hash' => 'md5',
			# send activation email
			'sendActivationMail' => true,
			# allow access for non-activated users
			'loginNotActiv' => false,
			# activate user on registration (only sendActivationMail = false)
			'activeAfterRegister' => false,
			# automatically login from registration
			'autoLogin' => true,
			# registration path
			'registrationUrl' => array('/user/registration'),
			# recovery password path
			'recoveryUrl' => array('/user/recovery'),
			# login form path
			'loginUrl' => array('/user/login'),
			# page after login
			'returnUrl' => array('/user/profile'),
			# page after logout
			'returnLogoutUrl' => array('/user/login'),
		),
		//Modules Rights
		'rights' => array(
			'superuserName' => 'Admin', // Name of the role with super user privileges. 
			'authenticatedName' => 'Authenticated', // Name of the authenticated user role. 
			'userIdColumn' => 'id', // Name of the user id column in the database. 
			'userNameColumn' => 'username', // Name of the user name column in the database. 
			'enableBizRule' => true, // Whether to enable authorization item business rules. 
			'enableBizRuleData' => true, // Whether to enable data for business rules. 
			'displayDescription' => true, // Whether to use item description instead of name. 
			'flashSuccessKey' => 'RightsSuccess', // Key to use for setting success flash messages. 
			'flashErrorKey' => 'RightsError', // Key to use for setting error flash messages. 

			'baseUrl' => '/rights', // Base URL for Rights. Change if module is nested. 
			'layout' => 'rights.views.layouts.main', // Layout to use for displaying Rights. 
			'appLayout' => 'application.views.layouts.main', // Application layout. 
			'cssFile' => 'rights.css', // Style sheet file to use for Rights. 
			'install' => false, // Whether to enable installer. 
			'debug' => false,
		),
	),
	// application components
	'components' => array(
		'user' => array(
			'class' => 'RWebUser',
			// enable cookie-based authentication
			'allowAutoLogin' => true,
			'loginUrl' => array('/user/login'),
		),
		'authManager' => array(
			'class' => 'RDbAuthManager',
			'connectionID' => 'db',
			'defaultRoles' => array('Authenticated', 'Guest'),
		),
		'db' => array(
			'connectionString' => 'mysql:host=localhost;dbname=phnx',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
			'tablePrefix' => '',
		),
		'errorHandler' => array(
			// use 'site/error' action to display errors
			'errorAction' => 'site/error',
		),
		'urlManager' => array(
			'urlFormat' => 'path',
			'rules' => array(
				'<controller:\w+>/<action:\w+>' => '<controller>/<action>',
			),
			'showScriptName' => false,
		),
		'log' => array(
			'class' => 'CLogRouter',
			'routes' => array(
				array(
					'class' => 'CFileLogRoute',
					'levels' => 'error, warning',
				),
			// uncomment the following to show log messages on web pages
			/*
			  array(
			  'class'=>'CWebLogRoute',
			  ),
			 */
			),
		),
		'bootstrap' => array(
			'class' => 'bootstrap.components.Bootstrap',
		),
	),
	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params' => require(dirname(__FILE__) . '/params.php'),
);