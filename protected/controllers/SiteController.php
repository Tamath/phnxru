<?php
/**
 * Main site controller. Handles most general pages like index page, contacts, etc
 * 
 */
class SiteController extends CController {
	
	public $breadcrumbs = array();
	
	/**
	 * Index page
	 * 
	 */
	public function actionIndex() {
		$this->render('index');
	}
	
	/**
	 * Contact page
	 * 
	 */
	public function actionContact() {
		$this->showList(Contacts::model(), 'contact');
	}
	
	/**
	 * About page
	 * 
	 */
	public function actionAbout() {
		$this->showList(About::model(), 'about');
	}
	
	/**
	 * Shows page with list of items
	 * 
	 * @var CModel $model Model object to retrieve data from
	 * @var string $view Name ot template to show
	 */
	protected function showList($model, $view) {
		$criteria = new CDbCriteria();
		$criteria->order = 'sort';
		$criteria->select = 'name,value,id,is_link';
		
		$data = array();
		$attributes = array();
		foreach( $model->findAll($criteria) as $item ) {
			$data[$item['id']] = $item['value'];
			if ( $item['is_link']==true ) {
				$attributes[] = array(
					'label' => $item['name'],
					'type' => 'raw',
					'name' => $item['id'],
					'value' => CHtml::link($item['value'], $item['value'], array('target'=>'_blank')),
				);
				
			} else {
				$attributes[] = array(
					'name' => $item['id'],
					'label' => $item['name']
				);
			}
			
		}
		$this->render($view, array(
			'data' => $data,
			'attributes' => $attributes,
		));
	}
	
	/**
	 * This is the action to handle external exceptions.
	 * 
	 */
	public function actionError() {
	    if( false!==($error=Yii::app()->errorHandler->error) ) {
	    	if( Yii::app()->request->isAjaxRequest ) {
	    		echo $error['message'];
			} else {
	        	$this->render('error', $error);
			}
	    }
	}
}