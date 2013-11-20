<?php
/* @var $this PropertyController */
/* @var $model Property */
/* @var $form CActiveForm */
?>
<?php
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'property-form',
    // Please note: When you enable ajax validation, make sure the corresponding
    // controller action is handling ajax validation correctly.
    // There is a call to performAjaxValidation() commented in generated controller code.
    // See class documentation of CActiveForm for details on this.
    'enableAjaxValidation' => false,
        ));
?>

<div class="row-fluid">
    <div class="span12 widget">
        <h2 class="widget-heading">Header tabs</h2>
        <div id="header-tabs" class="ui-tabs ui-widget ui-widget-content ui-corner-all">
            <ul class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all">
                <li class="ui-state-default ui-corner-top ui-tabs-selected ui-state-active"><a href="#tabs-1">Main</a></li>
                <li class="ui-state-default ui-corner-top"><a href="#tabs-2">Tab 2</a></li>
                <li class="ui-state-default ui-corner-top"><a href="#tabs-3">Tab 3</a></li>
            </ul>
            <div id="tabs-1" class=" form-lineui-tabs-panel ui-widget-content ui-corner-bottom"> 
             
               <? $this->renderPartial('_tab_main', array('model' => $model, 'form' => $form))?>

            </div>
            <div id="tabs-2" class="ui-tabs-panel ui-widget-content ui-corner-bottom ui-tabs-hide">

            </div>
            <div id="tabs-3" class="ui-tabs-panel ui-widget-content ui-corner-bottom ui-tabs-hide">

            </div>
        </div>
    </div>
</div>
<div class="row-fluid widget">
    <h2 class="widget-heading">Grid class</h2>
    <div class="inner-widget-nopadding">

        <div class="container-fluid">
            <div class="formRow">
                <div class="row-fluid"> 

                    <div class="span6">
                    </div>

                    <div class="span6">

<?php echo $form->labelEx($model, 'fsale'); ?>
<?php echo $form->textField($model, 'fsale'); ?>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>



<div class="row-fluid widget">
    <h2 class="widget-heading">Grid class</h2>  
    <div class="inner-widget-nopadding">
        <div class="container-fluid">
            <div class="span-6">
                fghfgh
            </div>
            <div class="span-6">
                fghfgh
            </div>


            <p class="note">Fields with <span class="required">*</span> are required.</p>

<?php echo $form->errorSummary($model); ?>

            <div class="row span-3">

            </div>

            <div class="row span-3">
<?php echo $form->error($model, 'fsale'); ?>
            </div>

            <div class="row">
            </div>
            <div class="row">
                <?php echo $form->labelEx($model, 'fsrent'); ?>
<?php echo $form->textField($model, 'fsrent'); ?>
<?php echo $form->error($model, 'fsrent'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model, 'hsale'); ?>
<?php echo $form->textField($model, 'hsale'); ?>
<?php echo $form->error($model, 'hsale'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model, 'hrent'); ?>
<?php echo $form->textField($model, 'hrent'); ?>
<?php echo $form->error($model, 'hrent'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model, 'hsrent'); ?>
<?php echo $form->textField($model, 'hsrent'); ?>
<?php echo $form->error($model, 'hsrent'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model, 'exclusive'); ?>
<?php echo $form->textField($model, 'exclusive'); ?>
<?php echo $form->error($model, 'exclusive'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model, 'totcovar'); ?>
<?php echo $form->textField($model, 'totcovar', array('size' => 6, 'maxlength' => 6)); ?>
<?php echo $form->error($model, 'totcovar'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model, 'comar'); ?>
<?php echo $form->textField($model, 'comar', array('size' => 6, 'maxlength' => 6)); ?>
<?php echo $form->error($model, 'comar'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model, 'covar'); ?>
<?php echo $form->textField($model, 'covar', array('size' => 6, 'maxlength' => 6)); ?>
<?php echo $form->error($model, 'covar'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model, 'uncovar'); ?>
<?php echo $form->textField($model, 'uncovar', array('size' => 6, 'maxlength' => 6)); ?>
<?php echo $form->error($model, 'uncovar'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model, 'landarea'); ?>
<?php echo $form->textField($model, 'landarea', array('size' => 6, 'maxlength' => 6)); ?>
<?php echo $form->error($model, 'landarea'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model, 'disttosea'); ?>
<?php echo $form->textField($model, 'disttosea'); ?>
<?php echo $form->error($model, 'disttosea'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model, 'nobed'); ?>
<?php echo $form->textField($model, 'nobed', array('size' => 2, 'maxlength' => 2)); ?>
<?php echo $form->error($model, 'nobed'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model, 'nobath'); ?>
<?php echo $form->textField($model, 'nobath', array('size' => 2, 'maxlength' => 2)); ?>
<?php echo $form->error($model, 'nobath'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model, 'seaview'); ?>
<?php echo $form->textField($model, 'seaview'); ?>
<?php echo $form->error($model, 'seaview'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model, 'sideseaview'); ?>
<?php echo $form->textField($model, 'sideseaview'); ?>
<?php echo $form->error($model, 'sideseaview'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model, 'gardenview'); ?>
<?php echo $form->textField($model, 'gardenview'); ?>
<?php echo $form->error($model, 'gardenview'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model, 'cityview'); ?>
<?php echo $form->textField($model, 'cityview'); ?>
<?php echo $form->error($model, 'cityview'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model, 'mountainview'); ?>
<?php echo $form->textField($model, 'mountainview'); ?>
<?php echo $form->error($model, 'mountainview'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model, 'swview'); ?>
<?php echo $form->textField($model, 'swview'); ?>
<?php echo $form->error($model, 'swview'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model, 'otherview'); ?>
<?php echo $form->textField($model, 'otherview'); ?>
<?php echo $form->error($model, 'otherview'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model, 'floor'); ?>
<?php echo $form->textField($model, 'floor', array('size' => 1, 'maxlength' => 1)); ?>
<?php echo $form->error($model, 'floor'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model, 'stage'); ?>
<?php echo $form->textField($model, 'stage', array('size' => 10, 'maxlength' => 10)); ?>
<?php echo $form->error($model, 'stage'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model, 'swimpool'); ?>
<?php echo $form->textField($model, 'swimpool'); ?>
<?php echo $form->error($model, 'swimpool'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model, 'sprivate'); ?>
<?php echo $form->textField($model, 'sprivate'); ?>
<?php echo $form->error($model, 'sprivate'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model, 'parking'); ?>
<?php echo $form->textField($model, 'parking'); ?>
<?php echo $form->error($model, 'parking'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model, 'storeroom'); ?>
<?php echo $form->textField($model, 'storeroom'); ?>
<?php echo $form->error($model, 'storeroom'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model, 'address'); ?>
<?php echo $form->textArea($model, 'address', array('rows' => 6, 'cols' => 50)); ?>
<?php echo $form->error($model, 'address'); ?>
            </div>

            <div class="row">
            </div>

            <div class="row">
                <?php echo $form->labelEx($model, 'areacode'); ?>
<?php echo $form->textField($model, 'areacode', array('size' => 5, 'maxlength' => 5)); ?>
<?php echo $form->error($model, 'areacode'); ?>
            </div>

            <div class="row">
            </div>

            <div class="row">
            </div>

            <div class="row">
                <?php echo $form->labelEx($model, 'projectid'); ?>
<?php echo $form->textField($model, 'projectid', array('size' => 6, 'maxlength' => 6)); ?>
<?php echo $form->error($model, 'projectid'); ?>
            </div>



            <div class="row">
                <?php echo $form->labelEx($model, 'ownerid'); ?>
<?php echo $form->textField($model, 'ownerid', array('size' => 6, 'maxlength' => 6)); ?>
<?php echo $form->error($model, 'ownerid'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model, 'price1'); ?>
<?php echo $form->textField($model, 'price1', array('size' => 8, 'maxlength' => 8)); ?>
<?php echo $form->error($model, 'price1'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model, 'amount'); ?>
<?php echo $form->textField($model, 'amount', array('size' => 8, 'maxlength' => 8)); ?>
<?php echo $form->error($model, 'amount'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model, 'addedby'); ?>
<?php echo $form->textField($model, 'addedby', array('size' => 30, 'maxlength' => 30)); ?>
<?php echo $form->error($model, 'addedby'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model, 'addeddt'); ?>
<?php echo $form->textField($model, 'addeddt'); ?>
<?php echo $form->error($model, 'addeddt'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model, 'vat'); ?>
<?php echo $form->textField($model, 'vat'); ?>
<?php echo $form->error($model, 'vat'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model, 'price2'); ?>
<?php echo $form->textField($model, 'price2', array('size' => 8, 'maxlength' => 8)); ?>
<?php echo $form->error($model, 'price2'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model, 'firstline'); ?>
<?php echo $form->textField($model, 'firstline'); ?>
<?php echo $form->error($model, 'firstline'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model, 'unparking'); ?>
<?php echo $form->textField($model, 'unparking'); ?>
<?php echo $form->error($model, 'unparking'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model, 'teniscourt'); ?>
<?php echo $form->textField($model, 'teniscourt'); ?>
<?php echo $form->error($model, 'teniscourt'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model, 'titledeed'); ?>
<?php echo $form->textField($model, 'titledeed'); ?>
<?php echo $form->error($model, 'titledeed'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model, 'sold'); ?>
<?php echo $form->textField($model, 'sold'); ?>
<?php echo $form->error($model, 'sold'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model, 'rent'); ?>
<?php echo $form->textField($model, 'rent'); ?>
<?php echo $form->error($model, 'rent'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model, 'buildfact'); ?>
<?php echo $form->textField($model, 'buildfact', array('size' => 10, 'maxlength' => 10)); ?>
<?php echo $form->error($model, 'buildfact'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model, 'road'); ?>
<?php echo $form->textField($model, 'road'); ?>
<?php echo $form->error($model, 'road'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model, 'comunal'); ?>
<?php echo $form->textField($model, 'comunal'); ?>
<?php echo $form->error($model, 'comunal'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model, 'electricity'); ?>
<?php echo $form->textField($model, 'electricity'); ?>
<?php echo $form->error($model, 'electricity'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model, 'water'); ?>
<?php echo $form->textField($model, 'water'); ?>
<?php echo $form->error($model, 'water'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model, 'projectar'); ?>
<?php echo $form->textField($model, 'projectar'); ?>
<?php echo $form->error($model, 'projectar'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model, 'comision'); ?>
<?php echo $form->textField($model, 'comision'); ?>
<?php echo $form->error($model, 'comision'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model, 'chcomision'); ?>
<?php echo $form->textField($model, 'chcomision'); ?>
<?php echo $form->error($model, 'chcomision'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model, 'landtype'); ?>
<?php echo $form->textField($model, 'landtype', array('size' => 10, 'maxlength' => 10)); ?>
<?php echo $form->error($model, 'landtype'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model, 'renttype'); ?>
<?php echo $form->textField($model, 'renttype', array('size' => 10, 'maxlength' => 10)); ?>
<?php echo $form->error($model, 'renttype'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model, 'tenants'); ?>
<?php echo $form->textField($model, 'tenants', array('size' => 10, 'maxlength' => 10)); ?>
<?php echo $form->error($model, 'tenants'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model, 'furniture'); ?>
<?php echo $form->textField($model, 'furniture'); ?>
<?php echo $form->error($model, 'furniture'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model, 'sleep'); ?>
<?php echo $form->textField($model, 'sleep'); ?>
<?php echo $form->error($model, 'sleep'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model, 'deposit'); ?>
<?php echo $form->textField($model, 'deposit'); ?>
<?php echo $form->error($model, 'deposit'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model, 'conditioner'); ?>
<?php echo $form->textField($model, 'conditioner'); ?>
<?php echo $form->error($model, 'conditioner'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model, 'heating'); ?>
<?php echo $form->textField($model, 'heating'); ?>
<?php echo $form->error($model, 'heating'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model, 'pets'); ?>
<?php echo $form->textField($model, 'pets'); ?>
<?php echo $form->error($model, 'pets'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model, 'smoking'); ?>
<?php echo $form->textField($model, 'smoking'); ?>
<?php echo $form->error($model, 'smoking'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model, 'price3'); ?>
<?php echo $form->textField($model, 'price3', array('size' => 8, 'maxlength' => 8)); ?>
<?php echo $form->error($model, 'price3'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model, 'price4'); ?>
<?php echo $form->textField($model, 'price4', array('size' => 8, 'maxlength' => 8)); ?>
<?php echo $form->error($model, 'price4'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model, 'price5'); ?>
<?php echo $form->textField($model, 'price5', array('size' => 8, 'maxlength' => 8)); ?>
<?php echo $form->error($model, 'price5'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model, 'notes'); ?>
<?php echo $form->textArea($model, 'notes', array('rows' => 6, 'cols' => 50)); ?>
<?php echo $form->error($model, 'notes'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model, 'notesru'); ?>
<?php echo $form->textArea($model, 'notesru', array('rows' => 6, 'cols' => 50)); ?>
<?php echo $form->error($model, 'notesru'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model, 'lat'); ?>
<?php echo $form->textField($model, 'lat'); ?>
<?php echo $form->error($model, 'lat'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model, 'lng'); ?>
<?php echo $form->textField($model, 'lng'); ?>
<?php echo $form->error($model, 'lng'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model, 'fake'); ?>
<?php echo $form->textField($model, 'fake'); ?>
<?php echo $form->error($model, 'fake'); ?>
            </div>

            <div class="row buttons">
            <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
            </div>

<?php $this->endWidget(); ?>

        </div>
    </div>
</div> 
<!-- form -->