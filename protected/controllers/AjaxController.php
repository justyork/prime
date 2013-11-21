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

    public function actionCityList(){
        $id = $_POST['id'];
        echo $this->_generateSelect(City::getList($id));
    }
    public function actionAreaList(){
        $id = $_POST['id'];
        echo $this->_generateSelect(City::getList($id));
    }



    private function _generateSelect($list){
        $ret = '<option>-- Empty --</option>';
        foreach($list as $key => $value){
            $ret .= '<option value="'.$key.'">'.$value.'</option>';
        }
        return $ret;
    }

}
