<?php
/* @var $this PropertyController */
/* @var $model Property */
/* @var $form CActiveForm */


$db = DB::data(array('Prtype', 'Country', 'City', 'Area'));
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
                <li class="ui-state-default ui-corner-top ui-tabs-selected ui-state-active"><a href="#tabs-1"><?=Yii::t('property', 'Main Tab')?></a></li>
                <li class="ui-state-default ui-corner-top"><a href="#tabs-2"><?=Yii::t('property', 'Details Tab')?></a></li>
                <li class="ui-state-default ui-corner-top"><a href="#tabs-3"><?=Yii::t('property', 'Gallery Tab')?></a></li>
            </ul>
            <div id="tabs-1" class=" form-lineui-tabs-panel ui-widget-content ui-corner-bottom">
               <? $this->renderPartial('_tab_main', array('model' => $model, 'form' => $form, 'db' => $db))?>
            </div>
            <div id="tabs-2" class="ui-tabs-panel ui-widget-content ui-corner-bottom ui-tabs-hide">
                <? $this->renderPartial('_tab_details', array('model' => $model, 'form' => $form, 'db' => $db))?>
            </div>
            <div id="tabs-3" class="ui-tabs-panel ui-widget-content ui-corner-bottom ui-tabs-hide">
                <? $this->renderPartial('_tab_gallery', array('model' => $model, 'form' => $form, 'db' => $db))?>
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


            <div class="row">
            </div>

            <div class="row">
            </div>

            <div class="row">
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
            </div>

            <div class="row">
            </div>

            <div class="row">
            </div>

            <div class="row">
                <?php echo $form->labelEx($model, 'buildfact'); ?>
<?php echo $form->textField($model, 'buildfact', array('size' => 10, 'maxlength' => 10)); ?>
<?php echo $form->error($model, 'buildfact'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model, 'road'); ?>
<?php echo $form->checkBox($model, 'road'); ?>
<?php echo $form->error($model, 'road'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model, 'comunal'); ?>
<?php echo $form->checkBox($model, 'comunal'); ?>
<?php echo $form->error($model, 'comunal'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model, 'electricity'); ?>
<?php echo $form->checkBox($model, 'electricity'); ?>
<?php echo $form->error($model, 'electricity'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model, 'water'); ?>
<?php echo $form->checkBox($model, 'water'); ?>
<?php echo $form->error($model, 'water'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model, 'projectar'); ?>
<?php echo $form->textField($model, 'projectar'); ?>
<?php echo $form->error($model, 'projectar'); ?>
            </div>

            <div class="row">
            </div>

            <div class="row">
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
            </div>

            <div class="row">
                <?php echo $form->labelEx($model, 'sleep'); ?>
<?php echo $form->textField($model, 'sleep'); ?>
<?php echo $form->error($model, 'sleep'); ?>
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