<?php echo CHtml::link('Advanced Search','#',array('class'=>'search_button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
    
</div><!-- search-form --> 
 
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'property-grid',
	'dataProvider'=>$model->search(),
	'filter' => $model, 
    'cssFile' => '/css/grid.css', 
    'summaryText' => '',
	'columns'=>array(
		array(
            'name' => 'propid',
            'htmlOptions' => array(
                'style' => 'width: 20px',
                'class' => 'propid'
            )
        ),
        array( 
            'header' => 'Image',
            'value' => '\'<img style="height: 60px" src="http://www.prime-property.com/admin/pictures/\'.$data->_mainImage->imgname.\'" />\'', 
            'type'=>'html',  
            'htmlOptions' => array(
                'style' => 'width: 70px'
            )
        ), 
        array( 
            'header' => '<a class="sort-link" href="/property/index?Property_sort=_type.name">Type</a>',
            'name'=>'_type.name',  
            'type'=>'raw',  
        ), 
        array( 
            'header' => '<a class="sort-link" href="/property/index?Property_sort=_country.name">Country</a>',
            'name'=>'_country.name', 
            'type'=>'raw',  
        ), 
        array( 
            'name'=>'_city.name', 
            'type'=>'raw',  
        ), 
        array( 
            'name'=>'_area.name',   
            'type'=>'raw',  
        ),    
		'totcovar',
		'comar',
		'covar',
		'uncovar',  
		'stage', 
		array( 
            'name'=>'projectid',  
            'value' => '$data->_project->name',
            'type'=>'raw',  
        ), 
		array( 
            'name'=>'price1',  
            'value' => '$data->price1. " &euro;"',  
            'type'=>'html',  
        ),  
		array( 
            'name'=>'price3',  
            'value' => '$data->price3. " &euro;/day"',  
            'type'=>'html',  
        ),  
		array( 
            'name'=>'price5',  
            'value' => '$data->price5. " &euro;/mon"',  
            'type'=>'html',  
        ),    
		
		array(
			'class'=>'CButtonColumn',
		), 
		
		array(
            'headerHtmlOptions' => array(
                'style' => 'display: none'
            ),
            'filterHtmlOptions' => array(
                'style' => 'display: none'
            ),
            'htmlOptions' => array(
                'style' => 'display: none'
            ),
			'value' => array($this, 'gridPropertyData'),
		), 
	),
)); ?>

<?$this->beginWidget('zii.widgets.jui.CJuiDialog',array(
    'id'=>'itemContent',
    // additional javascript options for the dialog plugin
    'htmlOptions' => array( 
    ),
    'options'=>array(
        'title'=>'Property Info',
        'autoOpen'=>false,
        'modal' => true
    ),
));?>

<?$this->endWidget('zii.widgets.jui.CJuiDialog');

// the link that may open the dialog
echo CHtml::link('open dialog', '#', array(
   'onclick'=>'$("#mydialog").dialog("open"); return false;',
));

?>
<script>
    $(document).ready(function(){
        $('.items tbody tr').live('click', function(){
            var id = $(this).find('td.propid').text();
            
           // $("#itemContent").load('/ajax/propertyinfo', {id:id}, function(){
             //   $("#itemContent").dialog("open")
            //})
            
        });
    });
</script>

<script>
    $(document).ready(function(){
        $('.search_button').click(function(){
            $('.search-form').fadeToggle();
        });
    });
</script>