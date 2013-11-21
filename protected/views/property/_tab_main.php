<?php
/**
 * Created by PhpStorm.
 * User: York
 * Date: 20.11.13
 * Time: 3:56
 */

 ?>

<div class="row-fluid">
    <div class="span6">
        <?php echo $form->labelEx($model, 'name'); ?>
        <?php echo $form->textField($model, 'name', array('size' => 45, 'maxlength' => 45)); ?>
        <?php echo $form->error($model, 'name'); ?>
    </div>
    <div class="span6">
        <?php echo $form->labelEx($model, 'nameru'); ?>
        <?php echo $form->textField($model, 'nameru', array('size' => 45, 'maxlength' => 45)); ?>
        <?php echo $form->error($model, 'nameru'); ?>

    </div>
</div>

<div class="row-fluid">
    <div class="span6">
        <?php echo $form->labelEx($model, 'descriptionru'); ?>
        <?php echo $form->textArea($model, 'descriptionru', array('rows' => 6, 'cols' => 50)); ?>
        <?php echo $form->error($model, 'descriptionru'); ?>
    </div>
    <div class="span6">
        <?php echo $form->labelEx($model, 'description'); ?>
        <?php echo $form->textArea($model, 'description', array('rows' => 6, 'cols' => 50)); ?>
        <?php echo $form->error($model, 'description'); ?>
    </div>
</div>

<div class="row-fluid">
    <div class="span6">

        <?php echo $form->labelEx($model, 'type'); ?>
        <?php echo $form->dropdownList($model, 'type',$db['prtype'], array('empty' => '-- Empty --')); ?>
        <?php echo $form->error($model, 'type'); ?>
    </div>
    <div class="span3">

        <?php echo $form->labelEx($model, 'fsale'); ?>
        <?php echo $form->checkBox($model, 'fsale');?>
        <?php echo $form->error($model, 'fsale'); ?>
    </div>
    <div class="span3">

        <?php echo $form->labelEx($model, 'hsale'); ?>
        <?php echo $form->checkBox($model, 'hsale'); ?>
        <?php echo $form->error($model, 'hsale'); ?>
    </div>
</div>
<div class="row-fluid">
    <div class="span6">
        <?php echo $form->labelEx($model, 'country'); ?>
        <?php echo $form->dropdownList($model, 'country',$db['country'], array('empty' => '-- Empty --')); ?>
        <?php echo $form->error($model, 'country'); ?>
    </div>
    <div class="span3">
        <?php echo $form->labelEx($model, 'frent'); ?>
        <?php echo $form->checkBox($model, 'frent'); ?>
        <?php echo $form->error($model, 'frent'); ?>
    </div>
    <div class="span3">

        <?php echo $form->labelEx($model, 'hrent'); ?>
        <?php echo $form->checkBox($model, 'hrent'); ?>
        <?php echo $form->error($model, 'hrent'); ?>
    </div>
</div>

<div class="row-fluid">
    <div class="span6">

        <?php echo $form->labelEx($model, 'city'); ?>
        <?php echo $form->dropdownList($model, 'city', City::getList($model->country), array('empty' => '-- Empty --')); ?>
        <?php echo $form->error($model, 'city'); ?>
    </div>
    <div class="span3">

        <?php echo $form->labelEx($model, 'fsrent'); ?>
        <?php echo $form->checkBox($model, 'fsrent'); ?>
        <?php echo $form->error($model, 'fsrent'); ?>
    </div>
    <div class="span3">
        <?php echo $form->labelEx($model, 'hsrent'); ?>
        <?php echo $form->checkBox($model, 'hsrent'); ?>
        <?php echo $form->error($model, 'hsrent'); ?>

    </div>
</div>

<div class="row-fluid">
    <div class="span6">

        <?php echo $form->labelEx($model, 'area'); ?>
        <?php echo $form->dropdownList($model, 'area', Area::getList($model->city), array('empty' => '-- Empty --')); ?>
        <?php echo $form->error($model, 'area'); ?>

    </div>
    <div class="span3">
        <?php echo $form->labelEx($model, 'sold'); ?>
        <?php echo $form->checkBox($model, 'sold'); ?>
        <?php echo $form->error($model, 'sold'); ?>

    </div>
    <div class="span3">
        <?php echo $form->labelEx($model, 'rent'); ?>
        <?php echo $form->checkBox($model, 'rent'); ?>
        <?php echo $form->error($model, 'rent'); ?>

    </div>
</div>
<div class="row-fluid">
    <div class="span3">
        <?php echo $form->labelEx($model, 'price1'); ?>
        <?php echo $form->textField($model, 'price1', array('class' => 'simple_input spinner_currency_e pr')); ?>
        <?php echo $form->error($model, 'price1'); ?>
    </div>
    <div class="span3">
        <?php echo $form->labelEx($model, 'price2'); ?>
        <?php echo $form->textField($model, 'price2', array('class' => 'simple_input spinner_currency_e pr')); ?>
        <?php echo $form->error($model, 'price2'); ?>
    </div>
    <div class="span3">
        <?php echo $form->labelEx($model, 'exclusive'); ?>
        <?php echo $form->checkBox($model, 'exclusive'); ?>
        <?php echo $form->error($model, 'exclusive'); ?>

    </div>
    <div class="span3">
        <?php echo $form->labelEx($model, 'titledeed'); ?>
        <?php echo $form->checkBox($model, 'titledeed'); ?>
        <?php echo $form->error($model, 'titledeed'); ?>

    </div>
</div>
<div class="row-fluid">
    <div class="span3">
        <?php echo $form->labelEx($model, 'price3'); ?>
        <?php echo $form->textField($model, 'price3', array('class' => 'simple_input spinner_currency_e pr')); ?>
        <?php echo $form->error($model, 'price3'); ?>

    </div>
    <div class="span3">
        <?php echo $form->labelEx($model, 'comision'); ?>
        <?php echo $form->textField($model, 'comision', array('class' => 'spinner_simple_p pr')); ?>
        <?php echo $form->error($model, 'comision'); ?>

    </div>
    <div class="span3">

    </div>
    <div class="span3">

    </div>
</div>
<div class="row-fluid">
    <div class="span3">
        <?php echo $form->labelEx($model, 'price5'); ?>
        <?php echo $form->textField($model, 'price5', array('class' => 'simple_input spinner_currency_e pr')); ?>
        <?php echo $form->error($model, 'price5'); ?>

    </div>
    <div class="span3">
        <?php echo $form->labelEx($model, 'chcomision'); ?>
        <?php echo $form->textField($model, 'chcomision', array('class' => 'spinner_simple_p pr')); ?>
        <?php echo $form->error($model, 'chcomision'); ?>

    </div>
    <div class="span3">
        <?php echo $form->labelEx($model, 'vat'); ?>
        <?php echo $form->checkBox($model, 'vat'); ?>
        <?php echo $form->error($model, 'vat'); ?>

    </div>
    <div class="span3">

    </div>
</div>
<div class="row-fluid">
    <div class="span3">

    </div>
    <div class="span3">

    </div>
    <div class="span3">

    </div>
    <div class="span3">

    </div>
</div>
<div class="row-fluid">
    <div class="span3">

    </div>
    <div class="span3">

    </div>
    <div class="span3">

    </div>
    <div class="span3">

    </div>
</div>
<div class="row-fluid">
    <div class="span6">

    </div>
    <div class="span6">

    </div>
</div>
<div class="row-fluid">
    <div class="span6">

    </div>
    <div class="span6">

    </div>
</div>
<div class="row-fluid">
    <div class="span6">

    </div>
    <div class="span6">

    </div>
</div>



