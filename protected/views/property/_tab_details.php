<?php
/**
 * Created by PhpStorm.
 * User: York
 * Date: 21.11.13
 * Time: 3:19
 */
?>

<div class="row-fluid">
    <div class="span3">
        <?php echo $form->labelEx($model, 'totcovar'); ?>
        <?php echo $form->textField($model, 'totcovar', array('size' => 6, 'maxlength' => 6)); ?>
        <?php echo $form->error($model, 'totcovar'); ?>
    </div>
    <div class="span3">
        <?php echo $form->labelEx($model, 'disttosea'); ?>
        <?php echo $form->textField($model, 'disttosea', array('class' => 'simple_input spinner_decimal')); ?>
        <?php echo $form->error($model, 'disttosea'); ?>
    </div>
    <div class="span3">
        <?php echo $form->labelEx($model, 'seaview'); ?>
        <?php echo $form->checkBox($model, 'seaview'); ?>
        <?php echo $form->error($model, 'seaview'); ?>
    </div>
    <div class="span3">
        <?php echo $form->labelEx($model, 'unparking'); ?>
        <?php echo $form->checkBox($model, 'unparking'); ?>
        <?php echo $form->error($model, 'unparking'); ?>
    </div>
</div>
<div class="row-fluid">
    <div class="span3">
        <?php echo $form->labelEx($model, 'comar'); ?>
        <?php echo $form->textField($model, 'comar', array('size' => 6, 'maxlength' => 6)); ?>
        <?php echo $form->error($model, 'comar'); ?>
    </div>
    <div class="span3">
        <?php echo $form->labelEx($model, 'nobed'); ?>
        <?php echo $form->textField($model, 'nobed', array('class' => 'simple_input spinner_simple')); ?>
        <?php echo $form->error($model, 'nobed'); ?>

    </div>
    <div class="span3">
        <?php echo $form->labelEx($model, 'sideseaview'); ?>
        <?php echo $form->checkBox($model, 'sideseaview'); ?>
        <?php echo $form->error($model, 'sideseaview'); ?>
    </div>
    <div class="span3">
        <?php echo $form->labelEx($model, 'swimpool'); ?>
        <?php echo $form->checkBox($model, 'swimpool'); ?>
        <?php echo $form->error($model, 'swimpool'); ?>
    </div>
</div>
<div class="row-fluid">
    <div class="span3">
        <?php echo $form->labelEx($model, 'covar'); ?>
        <?php echo $form->textField($model, 'covar', array('size' => 6, 'maxlength' => 6)); ?>
        <?php echo $form->error($model, 'covar'); ?>
    </div>
    <div class="span3">
        <?php echo $form->labelEx($model, 'nobath'); ?>
        <?php echo $form->textField($model, 'nobath', array('class' => 'simple_input spinner_simple')); ?>
        <?php echo $form->error($model, 'nobath'); ?>

    </div>
    <div class="span3">
        <?php echo $form->labelEx($model, 'gardenview'); ?>
        <?php echo $form->checkBox($model, 'gardenview'); ?>
        <?php echo $form->error($model, 'gardenview'); ?>
    </div>
    <div class="span3">
        <?php echo $form->labelEx($model, 'storeroom'); ?>
        <?php echo $form->checkBox($model, 'storeroom'); ?>
        <?php echo $form->error($model, 'storeroom'); ?>
    </div>
</div>
<div class="row-fluid">
    <div class="span3">
        <?php echo $form->labelEx($model, 'uncovar'); ?>
        <?php echo $form->textField($model, 'uncovar', array('size' => 6, 'maxlength' => 6)); ?>
        <?php echo $form->error($model, 'uncovar'); ?>
    </div>
    <div class="span3">
        <?php echo $form->labelEx($model, 'floor'); ?>
        <?php echo $form->textField($model, 'floor', array('class' => 'simple_input spinner_simple')); ?>
        <?php echo $form->error($model, 'floor'); ?>

    </div>
    <div class="span3">
        <?php echo $form->labelEx($model, 'cityview'); ?>
        <?php echo $form->checkBox($model, 'cityview'); ?>
        <?php echo $form->error($model, 'cityview'); ?>
    </div>
    <div class="span3">
        <?php echo $form->labelEx($model, 'sprivate'); ?>
        <?php echo $form->checkBox($model, 'sprivate'); ?>
        <?php echo $form->error($model, 'sprivate'); ?>
    </div>
</div>
<div class="row-fluid">
    <div class="span3">
        <?php echo $form->labelEx($model, 'landarea'); ?>
        <?php echo $form->textField($model, 'landarea', array('size' => 6, 'maxlength' => 6)); ?>
        <?php echo $form->error($model, 'landarea'); ?>

    </div>
    <div class="span3">
        <?php echo $form->labelEx($model, 'stage'); ?>
        <?php echo $form->textField($model, 'stage', array('size' => 10, 'maxlength' => 10)); ?>
        <?php echo $form->error($model, 'stage'); ?>

    </div>
    <div class="span3">
        <?php echo $form->labelEx($model, 'mountainview'); ?>
        <?php echo $form->checkBox($model, 'mountainview'); ?>
        <?php echo $form->error($model, 'mountainview'); ?>
    </div>
    <div class="span3">
        <?php echo $form->labelEx($model, 'parking'); ?>
        <?php echo $form->checkBox($model, 'parking'); ?>
        <?php echo $form->error($model, 'parking'); ?>
    </div>
</div>
<div class="row-fluid">
    <div class="span3">

    </div>
    <div class="span3">

    </div>
    <div class="span3">
        <?php echo $form->labelEx($model, 'swview'); ?>
        <?php echo $form->checkBox($model, 'swview'); ?>
        <?php echo $form->error($model, 'swview'); ?>
    </div>
    <div class="span3">
        <?php echo $form->labelEx($model, 'heating'); ?>
        <?php echo $form->checkBox($model, 'heating'); ?>
        <?php echo $form->error($model, 'heating'); ?>

    </div>
</div>
<div class="row-fluid">
    <div class="span3">

    </div>
    <div class="span3">

    </div>
    <div class="span3">
        <?php echo $form->labelEx($model, 'otherview'); ?>
        <?php echo $form->checkBox($model, 'otherview'); ?>
        <?php echo $form->error($model, 'otherview'); ?>
    </div>
    <div class="span3">
        <?php echo $form->labelEx($model, 'conditioner'); ?>
        <?php echo $form->checkBox($model, 'conditioner'); ?>
        <?php echo $form->error($model, 'conditioner'); ?>

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
        <?php echo $form->labelEx($model, 'deposit'); ?>
        <?php echo $form->checkBox($model, 'deposit'); ?>
        <?php echo $form->error($model, 'deposit'); ?>

    </div>
</div>
<div class="row-fluid">
    <div class="span3">

    </div>
    <div class="span3">

    </div>
    <div class="span3">
        <b><?=Yii::t('property', 'Forbidden')?>:</b>
    </div>
    <div class="span3">
        <?php echo $form->labelEx($model, 'furniture'); ?>
        <?php echo $form->checkBox($model, 'furniture'); ?>
        <?php echo $form->error($model, 'furniture'); ?>

    </div>
</div>
<div class="row-fluid">
    <div class="span3">

    </div>
    <div class="span3">

    </div>
    <div class="span3">
        <?php echo $form->labelEx($model, 'pets'); ?>
        <?php echo $form->checkBox($model, 'pets'); ?>
        <?php echo $form->error($model, 'pets'); ?>

    </div>
    <div class="span3">
        <?php echo $form->labelEx($model, 'teniscourt'); ?>
        <?php echo $form->checkBox($model, 'teniscourt'); ?>
        <?php echo $form->error($model, 'teniscourt'); ?>
    </div>
</div>
<div class="row-fluid">
    <div class="span3">

    </div>
    <div class="span3">

    </div>
    <div class="span3">
        <?php echo $form->labelEx($model, 'smoking'); ?>
        <?php echo $form->checkBox($model, 'smoking'); ?>
        <?php echo $form->error($model, 'smoking'); ?>

    </div>
    <div class="span3">
        <?php echo $form->labelEx($model, 'firstline'); ?>
        <?php echo $form->checkBox($model, 'firstline'); ?>
        <?php echo $form->error($model, 'firstline'); ?>

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
    <div class="span3">
        <?php /*echo $form->labelEx($model, 'address'); ?>
        <?php echo $form->textArea($model, 'address', array('rows' => 6, 'cols' => 50)); ?>
        <?php echo $form->error($model, 'address'); */?>

    </div>
    <div class="span3">

    </div>
    <div class="span3">

    </div>
    <div class="span3">

    </div>
</div>