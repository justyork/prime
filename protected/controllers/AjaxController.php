<?php

class AjaxController extends CController
{ 

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations 
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array( 
			array('deny',  // deny all users
				'users'=>array('?'),
			),
		);
	}

    public function actionPropertyInfo(){
        $id = $_POST['id'];
        
        $item = Property::model()->findByPk($id);
         
        $this->renderPartial('//common/property_info', array('item' => $item));
    }
}
