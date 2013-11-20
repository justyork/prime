<?php
/* @var $this PropertyController */
/* @var $data Property */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('propid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->propid), array('view', 'id'=>$data->propid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('type')); ?>:</b>
	<?php echo CHtml::encode($data->type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fsale')); ?>:</b>
	<?php echo CHtml::encode($data->fsale); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('frent')); ?>:</b>
	<?php echo CHtml::encode($data->frent); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fsrent')); ?>:</b>
	<?php echo CHtml::encode($data->fsrent); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hsale')); ?>:</b>
	<?php echo CHtml::encode($data->hsale); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hrent')); ?>:</b>
	<?php echo CHtml::encode($data->hrent); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('hsrent')); ?>:</b>
	<?php echo CHtml::encode($data->hsrent); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('exclusive')); ?>:</b>
	<?php echo CHtml::encode($data->exclusive); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('totcovar')); ?>:</b>
	<?php echo CHtml::encode($data->totcovar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comar')); ?>:</b>
	<?php echo CHtml::encode($data->comar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('covar')); ?>:</b>
	<?php echo CHtml::encode($data->covar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('uncovar')); ?>:</b>
	<?php echo CHtml::encode($data->uncovar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('landarea')); ?>:</b>
	<?php echo CHtml::encode($data->landarea); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('disttosea')); ?>:</b>
	<?php echo CHtml::encode($data->disttosea); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nobed')); ?>:</b>
	<?php echo CHtml::encode($data->nobed); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nobath')); ?>:</b>
	<?php echo CHtml::encode($data->nobath); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('seaview')); ?>:</b>
	<?php echo CHtml::encode($data->seaview); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sideseaview')); ?>:</b>
	<?php echo CHtml::encode($data->sideseaview); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gardenview')); ?>:</b>
	<?php echo CHtml::encode($data->gardenview); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cityview')); ?>:</b>
	<?php echo CHtml::encode($data->cityview); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mountainview')); ?>:</b>
	<?php echo CHtml::encode($data->mountainview); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('swview')); ?>:</b>
	<?php echo CHtml::encode($data->swview); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('otherview')); ?>:</b>
	<?php echo CHtml::encode($data->otherview); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('floor')); ?>:</b>
	<?php echo CHtml::encode($data->floor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stage')); ?>:</b>
	<?php echo CHtml::encode($data->stage); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('swimpool')); ?>:</b>
	<?php echo CHtml::encode($data->swimpool); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sprivate')); ?>:</b>
	<?php echo CHtml::encode($data->sprivate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('parking')); ?>:</b>
	<?php echo CHtml::encode($data->parking); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('storeroom')); ?>:</b>
	<?php echo CHtml::encode($data->storeroom); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('address')); ?>:</b>
	<?php echo CHtml::encode($data->address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('area')); ?>:</b>
	<?php echo CHtml::encode($data->area); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('areacode')); ?>:</b>
	<?php echo CHtml::encode($data->areacode); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('city')); ?>:</b>
	<?php echo CHtml::encode($data->city); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('country')); ?>:</b>
	<?php echo CHtml::encode($data->country); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('projectid')); ?>:</b>
	<?php echo CHtml::encode($data->projectid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ownerid')); ?>:</b>
	<?php echo CHtml::encode($data->ownerid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('price1')); ?>:</b>
	<?php echo CHtml::encode($data->price1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('amount')); ?>:</b>
	<?php echo CHtml::encode($data->amount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('addedby')); ?>:</b>
	<?php echo CHtml::encode($data->addedby); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('addeddt')); ?>:</b>
	<?php echo CHtml::encode($data->addeddt); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vat')); ?>:</b>
	<?php echo CHtml::encode($data->vat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descriptionru')); ?>:</b>
	<?php echo CHtml::encode($data->descriptionru); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nameru')); ?>:</b>
	<?php echo CHtml::encode($data->nameru); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('price2')); ?>:</b>
	<?php echo CHtml::encode($data->price2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('firstline')); ?>:</b>
	<?php echo CHtml::encode($data->firstline); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('unparking')); ?>:</b>
	<?php echo CHtml::encode($data->unparking); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('teniscourt')); ?>:</b>
	<?php echo CHtml::encode($data->teniscourt); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('titledeed')); ?>:</b>
	<?php echo CHtml::encode($data->titledeed); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sold')); ?>:</b>
	<?php echo CHtml::encode($data->sold); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rent')); ?>:</b>
	<?php echo CHtml::encode($data->rent); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('buildfact')); ?>:</b>
	<?php echo CHtml::encode($data->buildfact); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('road')); ?>:</b>
	<?php echo CHtml::encode($data->road); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comunal')); ?>:</b>
	<?php echo CHtml::encode($data->comunal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('electricity')); ?>:</b>
	<?php echo CHtml::encode($data->electricity); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('water')); ?>:</b>
	<?php echo CHtml::encode($data->water); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('projectar')); ?>:</b>
	<?php echo CHtml::encode($data->projectar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comision')); ?>:</b>
	<?php echo CHtml::encode($data->comision); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('chcomision')); ?>:</b>
	<?php echo CHtml::encode($data->chcomision); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('landtype')); ?>:</b>
	<?php echo CHtml::encode($data->landtype); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('renttype')); ?>:</b>
	<?php echo CHtml::encode($data->renttype); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tenants')); ?>:</b>
	<?php echo CHtml::encode($data->tenants); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('furniture')); ?>:</b>
	<?php echo CHtml::encode($data->furniture); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sleep')); ?>:</b>
	<?php echo CHtml::encode($data->sleep); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('deposit')); ?>:</b>
	<?php echo CHtml::encode($data->deposit); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('conditioner')); ?>:</b>
	<?php echo CHtml::encode($data->conditioner); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('heating')); ?>:</b>
	<?php echo CHtml::encode($data->heating); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pets')); ?>:</b>
	<?php echo CHtml::encode($data->pets); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('smoking')); ?>:</b>
	<?php echo CHtml::encode($data->smoking); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('price3')); ?>:</b>
	<?php echo CHtml::encode($data->price3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('price4')); ?>:</b>
	<?php echo CHtml::encode($data->price4); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('price5')); ?>:</b>
	<?php echo CHtml::encode($data->price5); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('notes')); ?>:</b>
	<?php echo CHtml::encode($data->notes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('notesru')); ?>:</b>
	<?php echo CHtml::encode($data->notesru); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lat')); ?>:</b>
	<?php echo CHtml::encode($data->lat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lng')); ?>:</b>
	<?php echo CHtml::encode($data->lng); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fake')); ?>:</b>
	<?php echo CHtml::encode($data->fake); ?>
	<br />

	*/ ?>

</div>