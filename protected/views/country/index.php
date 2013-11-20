<?php
/* @var $this CountryController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Countries',
);

$this->menu=array(
	array('label'=>'Create Country', 'url'=>array('create')),
	array('label'=>'Manage Country', 'url'=>array('admin')),
);
?>

<h1>Countries</h1>
<?php $this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider'=>$dataProvider,
    'filter'=>$model,
    'columns'=>array(
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
