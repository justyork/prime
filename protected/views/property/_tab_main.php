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
        <?php echo $form->textField($model, 'type', array('size' => 10, 'maxlength' => 10)); ?>
        <?php echo $form->error($model, 'type'); ?>
    </div>
    <div class="span3">

        <?php echo $form->labelEx($model, 'fsale'); ?>
        <?php echo $form->checkBox($model, 'fsale');?>
        <?php echo $form->error($model, 'fsale'); ?>
    </div>
    <div class="span3">

    </div>
</div>
<div class="row-fluid">
    <div class="span6">

        <?php echo $form->labelEx($model, 'city'); ?>
        <?php echo $form->textField($model, 'city', array('size' => 6, 'maxlength' => 6)); ?>
        <?php echo $form->error($model, 'city'); ?>
    </div>
    <div class="span3">
        <?php echo $form->labelEx($model, 'frent'); ?>
        <?php echo $form->checkBox($model, 'frent'); ?>
        <?php echo $form->error($model, 'frent'); ?>
    </div>
    <div class="span3">

    </div>
</div>

<div class="row-fluid">
    <div class="span6">

        <?php echo $form->labelEx($model, 'area'); ?>
        <?php echo $form->textField($model, 'area', array('size' => 6, 'maxlength' => 6)); ?>
        <?php echo $form->error($model, 'area'); ?>
    </div>
    <div class="span3">

        <?php echo $form->labelEx($model, 'fsrent'); ?>
        <?php echo $form->checkBox($model, 'fsrent'); ?>
        <?php echo $form->error($model, 'fsrent'); ?>
    </div>
    <div class="span3">

    </div>
</div>

<div class="row-fluid">
    <div class="span6">

        <?php echo $form->labelEx($model, 'country'); ?>
        <?php echo $form->textField($model, 'country', array('size' => 6, 'maxlength' => 6)); ?>
        <?php echo $form->error($model, 'country'); ?>
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



