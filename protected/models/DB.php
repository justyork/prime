<?php
class DB{
	
    public static function data($fields = array(), $id = 'id'){
        
        $data = array();
        foreach ($fields as $f){
            $data[strtolower($f)] = CHtml::listData($f::model()->findAll(),$id, $f::name());
        }
        return $data;
    }
}
