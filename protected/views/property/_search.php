<?php
/* @var $this PropertyController */
/* @var $model Property */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form = $this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'propid'); ?>
		<?php echo $form->textField($model,'propid',array('size'=>6,'maxlength'=>6)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'type'); ?>
		<?php echo $form->textField($model,'type',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fsale'); ?>
		<?php echo $form->textField($model,'fsale'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'frent'); ?>
		<?php echo $form->textField($model,'frent'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fsrent'); ?>
		<?php echo $form->textField($model,'fsrent'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hsale'); ?>
		<?php echo $form->textField($model,'hsale'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hrent'); ?>
		<?php echo $form->textField($model,'hrent'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hsrent'); ?>
		<?php echo $form->textField($model,'hsrent'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'exclusive'); ?>
		<?php echo $form->textField($model,'exclusive'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'totcovar'); ?>
		<?php echo $form->textField($model,'totcovar',array('size'=>6,'maxlength'=>6)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'comar'); ?>
		<?php echo $form->textField($model,'comar',array('size'=>6,'maxlength'=>6)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'covar'); ?>
		<?php echo $form->textField($model,'covar',array('size'=>6,'maxlength'=>6)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'uncovar'); ?>
		<?php echo $form->textField($model,'uncovar',array('size'=>6,'maxlength'=>6)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'landarea'); ?>
		<?php echo $form->textField($model,'landarea',array('size'=>6,'maxlength'=>6)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'disttosea'); ?>
		<?php echo $form->textField($model,'disttosea'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nobed'); ?>
		<?php echo $form->textField($model,'nobed',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nobath'); ?>
		<?php echo $form->textField($model,'nobath',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'seaview'); ?>
		<?php echo $form->textField($model,'seaview'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sideseaview'); ?>
		<?php echo $form->textField($model,'sideseaview'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'gardenview'); ?>
		<?php echo $form->textField($model,'gardenview'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cityview'); ?>
		<?php echo $form->textField($model,'cityview'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mountainview'); ?>
		<?php echo $form->textField($model,'mountainview'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'swview'); ?>
		<?php echo $form->textField($model,'swview'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'otherview'); ?>
		<?php echo $form->textField($model,'otherview'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'floor'); ?>
		<?php echo $form->textField($model,'floor',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'stage'); ?>
		<?php echo $form->textField($model,'stage',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'swimpool'); ?>
		<?php echo $form->textField($model,'swimpool'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sprivate'); ?>
		<?php echo $form->textField($model,'sprivate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'parking'); ?>
		<?php echo $form->textField($model,'parking'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'storeroom'); ?>
		<?php echo $form->textField($model,'storeroom'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'address'); ?>
		<?php echo $form->textArea($model,'address',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'area'); ?>
		<?php echo $form->textField($model,'area',array('size'=>6,'maxlength'=>6)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'areacode'); ?>
		<?php echo $form->textField($model,'areacode',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'city'); ?>
		<?php echo $form->textField($model,'city',array('size'=>6,'maxlength'=>6)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'country'); ?>
		<?php echo $form->textField($model,'country',array('size'=>6,'maxlength'=>6)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'projectid'); ?>
		<?php echo $form->textField($model,'projectid',array('size'=>6,'maxlength'=>6)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ownerid'); ?>
		<?php echo $form->textField($model,'ownerid',array('size'=>6,'maxlength'=>6)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'price1'); ?>
		<?php echo $form->textField($model,'price1',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'amount'); ?>
		<?php echo $form->textField($model,'amount',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'addedby'); ?>
		<?php echo $form->textField($model,'addedby',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'addeddt'); ?>
		<?php echo $form->textField($model,'addeddt'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'vat'); ?>
		<?php echo $form->textField($model,'vat'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'descriptionru'); ?>
		<?php echo $form->textArea($model,'descriptionru',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nameru'); ?>
		<?php echo $form->textField($model,'nameru',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'price2'); ?>
		<?php echo $form->textField($model,'price2',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'firstline'); ?>
		<?php echo $form->textField($model,'firstline'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'unparking'); ?>
		<?php echo $form->textField($model,'unparking'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'teniscourt'); ?>
		<?php echo $form->textField($model,'teniscourt'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'titledeed'); ?>
		<?php echo $form->textField($model,'titledeed'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sold'); ?>
		<?php echo $form->textField($model,'sold'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rent'); ?>
		<?php echo $form->textField($model,'rent'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'buildfact'); ?>
		<?php echo $form->textField($model,'buildfact',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'road'); ?>
		<?php echo $form->textField($model,'road'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'comunal'); ?>
		<?php echo $form->textField($model,'comunal'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'electricity'); ?>
		<?php echo $form->textField($model,'electricity'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'water'); ?>
		<?php echo $form->textField($model,'water'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'projectar'); ?>
		<?php echo $form->textField($model,'projectar'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'comision'); ?>
		<?php echo $form->textField($model,'comision'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'chcomision'); ?>
		<?php echo $form->textField($model,'chcomision'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'landtype'); ?>
		<?php echo $form->textField($model,'landtype',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'renttype'); ?>
		<?php echo $form->textField($model,'renttype',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tenants'); ?>
		<?php echo $form->textField($model,'tenants',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'furniture'); ?>
		<?php echo $form->textField($model,'furniture'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sleep'); ?>
		<?php echo $form->textField($model,'sleep'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'deposit'); ?>
		<?php echo $form->textField($model,'deposit'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'conditioner'); ?>
		<?php echo $form->textField($model,'conditioner'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'heating'); ?>
		<?php echo $form->textField($model,'heating'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pets'); ?>
		<?php echo $form->textField($model,'pets'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'smoking'); ?>
		<?php echo $form->textField($model,'smoking'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'price3'); ?>
		<?php echo $form->textField($model,'price3',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'price4'); ?>
		<?php echo $form->textField($model,'price4',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'price5'); ?>
		<?php echo $form->textField($model,'price5',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'notes'); ?>
		<?php echo $form->textArea($model,'notes',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'notesru'); ?>
		<?php echo $form->textArea($model,'notesru',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lat'); ?>
		<?php echo $form->textField($model,'lat'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lng'); ?>
		<?php echo $form->textField($model,'lng'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fake'); ?>
		<?php echo $form->textField($model,'fake'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->