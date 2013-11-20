<?php
/* @var $this PropertyController */
/* @var $item Property */

$this->breadcrumbs=array(
	'Properties' => array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Property', 'url'=>array('index')),
	array('label'=>'Create Property', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#property-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Properties</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>
     
<?php echo CHtml::link('Advanced Search','#',array('class'=>'search_button')); ?>
<div class="search-form" style="display:none">
<?php/* $this->renderPartial('_search',array(
	'model'=>$item1,
)); */?>
    
</div><!-- search-form --> 

<br />
<a class="btn btn-small openAllProp">Open All</a>
<a class="btn btn-small closeAllProp">Close All</a>

<br />
Found <?=$countProp?> results
<br />
<div>
    <table class="tDefault tMultimedia propertyTable">
        <thead>
            <tr>
                <th><a class="sort-link" href="<?=  Property::sortColls('propid')?>">ID</a></th>
                <th>Image</th>
                <th><a class="sort-link" href="<?=Property::sortColls('type')?>">Type</a></th>
                <th>
                    <a class="sort-link" href="<?=Property::sortColls('country')?>">Country</a>, 
                    <a class="sort-link" href="<?=Property::sortColls('city')?>">City</a>,
                    <a class="sort-link" href="<?=Property::sortColls('area')?>">Area</a>
                </th>
                <th>
                    Price (<a class="sort-link" href="<?=Property::sortColls('ptice1')?>">Sale Price</a>, 
                    <a class="sort-link" href="<?=Property::sortColls('price5')?>">Rent Price</a>,
                    <a class="sort-link" href="<?=Property::sortColls('price3')?>">Short rent Price</a>)
                </th>
                <th>Covar</th>
                <th>Lord Name</th>
                <th>Options</th>
            </tr>
        </thead>
        <tbody>
            <?foreach($model as $item):?>
            <tr class="mainRow" rel="<?=$item->propid?>">
                    <td ><?=$item->propid?></td>
                    <td><img src="http://www.prime-property.com/admin/pictures/<?=$item->_mainImage->imgname?>" style="height: 50px"  alt=""></td>
                    <td><?=$item->_type->name?></td>
                    <td><?=$item->_country->name?>, <?=$item->_city->name?>, <?=$item->_area->name?></td>
                    <td>
                        <?if($item->price1 != 0):?><b>Sale:</b>  <?=$item->price1?> &euro;<br /><?endif?>
                        <?if($item->price5 != 0):?><b>Rent:</b>  <?=$item->price5?> &euro;/mon<br /><?endif?>
                        <?if($item->price3 != 0):?><b>Short rent:</b>  <?=$item->price3?> &euro;/day<br /><?endif?>
                        <?if($item->price1 != 0 && ($item->totcovar != 0 || $item->covar != 0)):?><b>Price per sq.m:</b> <?=number_format($item->price1/($item->totcovar + $item->covar), 0)?> &euro; / m<sup>2</sup><?endif?>
                    </td>
                    <td>
                        <b>Land area:</b> <?=$item->landarea?> m<sup>2</sup><br />
                        <b>Living area:</b> <?=$item->totcovar?> m<sup>2</sup><br />
                        <b>Covered verandas area:</b> <?=$item->covar?> m<sup>2</sup>
                    </td>
                    <td>
                        <?=$item->_users->lordName?>
                    </td>
                    <td class="tableCtrl">
                        <a href="<?= CHtml::normalizeUrl(array('property/update', 'id' => $item->propid))?>" rel="tooltipup" class="ctrl-button ctrl-small ctrl-default" original-title="Edit"><i class="icon-pencil"></i></a>
                      <a href="#" rel="tooltipup" class="ctrl-button ctrl-small ctrl-default" original-title="Remove"><i class="icon-remove"></i></a>
                      <a href="#" rel="tooltipup" class="ctrl-button ctrl-small ctrl-default" original-title="Options"><i class="icon-cog"></i></a>
                    </td>
                </tr>
                <tr style="display: none;" class="subRow<?=$item->propid?> subR">
                    <td colspan="3"> 
                        <b>Project:</b>  <?=$item->_project->name != '' ? $item->_project->name : 'none'?><br />
                    </td>
                    <td colspan="2"> 
                        <?=$item->_users->lordContacts?><br />
                    </td>
                    <td colspan="1">
                        <b>Comision:</b> <?=$item->comision?>%<br />
                        <b>Price before offer:</b> <?=$item->price2?> &euro;<br />
                        <b>Distance to the sea:</b> <?=$item->disttosea?> m
                    </td>
                    <td colspan="2">
                        <b>Floor(s):</b> <?=$item->floor?><br />
                        <b>Beadrooms:</b> <?=$item->nobed?><br />
                        <b>Bathrooms:</b> <?=$item->nobath?><br />
                    </td>
                </tr>
            <?endforeach;?>
        </tbody>
    </table>
</div>
<style>
    .mainRow:hover{
        background: #ccc;
    }
</style>
<script>
    $(document).ready(function(){
        $('.openAllProp').click(function(){
            $('[class^=subRow]').fadeIn();
        });
        $('.closeAllProp').click(function(){
            $('[class^=subRow]').fadeOut();
        });
        $('.mainRow').click(function(){
            var id = $(this).attr('rel');
            $('.subRow'+id).fadeToggle();
        });
    });
</script>
<?php $this->widget('CLinkPager', array(
    'pages' => $pages,
)) ?>


<script>
    $(document).ready(function(){
        $('.search_button').click(function(){
            $('.search-form').fadeToggle();
        });
    });
</script>