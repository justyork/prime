<?/*<li><a href="/"><i class="icon-home"></i> <?=Yii::t('app', 'home')?></a></li>
<li><a href="/property"><i class="icon-th-large"></i> <?=Yii::t('app', 'properties')?></a></li>


 <li><a href="#"><i class="icon-align-justify"></i> <?=  Yii::t('app', 'database')?></a><span class="icon-chevron-down"></span>
    <ul class="subresp">
        <li><a href="/country"><?=  Yii::t('app', 'countries')?></a></li>
        <li><a href="/city"><?=  Yii::t('app', 'cities')?></a></li>
        <li><a href="/area"><?=  Yii::t('app', 'areas')?></a></li> 
    </ul>
</li>
</li>
*/?>

<?php $this->widget('zii.widgets.CMenu',array( 
    'htmlOptions' => array(
        'class' => 'main-menu',
    ), 
    'encodeLabel' => false,
    //'linkLabelWrapper' => 'false',
    'submenuHtmlOptions' => array(
        'class' => 'subresp',
    ),
    'items'=>array(
        array('label' => '<i class="icon-home"></i>'. Yii::t('app', 'home'), 'url'=>array('site/index')),
        array('label' => '<i class="icon-th-large"></i>'. Yii::t('app', 'properties'), 'url'=>array('property/index')),
        array('label' => '<i class="icon-align-justify"></i>' . Yii::t('app', 'database'), 
            'url'=>array('#'), 
            //'visible' => Yii::app()->user->group == 'admin',
            'items' => array(
                array('label' => Yii::t('app', 'countries'), 'url'=>array('country/index')),
                array('label' => Yii::t('app', 'cities'), 'url'=>array('city/index')),
                array('label' => Yii::t('app', 'areas'), 'url'=>array('area/index')),
            )
        ),
       
        
    ),
)); ?>