<?php
$this->pageTitle = Yii::app()->name . ' - Login';
$this->breadcrumbs = array(
'Login',
);
?>
<div id="formContainer">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
    'id' => 'login-form',
    'enableAjaxValidation' => true,
    ));
    ?>
    <?php if(isset($_POST['LoginForm'])): ?>
        <div class="errorSummary">
            <?php echo $form->error($model, 'username', array()); ?>
            <?php echo $form->error($model, 'password'); ?> 
        </div>
    <?endif?>
    <div class="logo">
        <img src="/img/logo_1.png" alt="">
    </div>
    <div class="line">
<?php echo $form->textField($model, 'username', array('placeholder' => 'Login')); ?>

        <i class="icon-user"></i>
    </div>
    <div class="line">
<?php echo $form->passwordField($model, 'password', array('placeholder' => 'Password')); ?> 
        <i class="icon-lock"></i>
    </div>
    <div class="line">  
        
		<input type="submit" class="floatR btn btn-mini"  value="Login"/> 
        <div class="clear"></div>
    </div>
<?php $this->endWidget(); ?>
    <div class="clear"></div>
</div>
 