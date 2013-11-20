<?php
/* @var $this UsersController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs = array(
	'Users',
);

$this->menu = array(
	array('label'=>'Create Users', 'url'=>array('create')),
	array('label'=>'Manage Users', 'url'=>array('admin')),
);
?>

<h1>Users</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider'=>$dataProvider, 
    'columns'=>array(
        array(
            'name'=>'ID',
            'type'=>'raw',
            'value'=>'$data->id'
        ), 
        array(
            'name'=>'title',
            'type'=>'raw',
            'value'=>'CHtml::link(CHtml::encode($data->name), "/'.Yii::app()->controller->id.'/update?id=".$data->id)'
        ), 
        array(
            'name'=>'create_time',
            'type'=>'datetime',
            'filter'=>false,
        ),
        array(
            'class'=>'CButtonColumn',
        ),
    ),
)); ?> 
