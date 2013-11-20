<?php
$mainPage = Yii::app()->controller->id == 'site' && Yii::app()->controller->action->id == 'index' ? true : false;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="language" content="en" />

        <!-- blueprint CSS framework -->
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.css" rel="stylesheet">
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap-responsive.css" rel="stylesheet">
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" rel="stylesheet">
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/sitestyle.css" rel="stylesheet">

                    <!--[if lt IE 8]>
                    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
                    <![endif]--> 

                    <?php
                    Yii::app()->clientScript
                    ->registerPackage('jquery');
                    Yii::app()->clientScript
                    ->registerPackage('mainPack');
                    ?> 

                    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
                    </head>
                    <body>
                        <div id="maincontainer" class="clearfix">

                            <div class="patterns" id="body-patterns">
                                <span class="background" id="pattern1"></span>
                                <span class="background" id="pattern2"></span>
                                <span class="background" id="pattern3"></span>
                                <span class="background" id="pattern4"></span>
                                <span class="background" id="pattern5"></span>
                                <a href="#"><span></span></a>
                            </div>

                            <div class="patterns" id="right-sidebar-bg">
                                <span class="background" id="pattern1"></span>
                                <span class="background" id="pattern2"></span>
                                <span class="background" id="pattern3"></span>
                                <span class="background" id="pattern4"></span>
                                <span class="background" id="pattern5"></span>
                                <a href="#"><span></span></a>
                            </div>

                            <div class="patterns"  id="main-nav-bg">
                                <span class="background" id="pattern1"></span>
                                <span class="background" id="pattern2"></span>
                                <span class="background" id="pattern3"></span>
                                <span class="background" id="pattern4"></span>
                                <span class="background" id="pattern5"></span>
                                <a href="#"><span></span></a>
                            </div>

                            <!-- ======= Header start ======= -->
                            <div class="screen"></div>

                            <header>
                                <div class="navbar navbar-fixed-top">
                                    <div class="navbar-inner">
                                        <div class="container-fluid">
                                            <div class="row-fluid">

                                                <div class="span6">
                                                    <a href="/" class="logo"><img src="/img/logo.png" /></a>
                                                </div>

                                                <div class="span6">
                                                    <div class="header-actions">
                                                        <div class="messages dropdown">
                                                            <a href="#" class="dropdown-toggle mess" data-toggle="dropdown"></a>

                                                            <ul class="messages-box dropdown-menu pull-right" role="menu" aria-labelledby="dLabel">
                                                                <li>
                                                                    <a href="#">
                                                                        <div class="image">
                                                                            <img src="/img/chat-avatar.png" alt="">
                                                                        </div>

                                                                        <div class="message">
                                                                            <span class="from"><strong>John Smith</strong> <span>40m ago</span><div class="clear"></div></span>
                                                                            <p>Hi, Eiusmod tempor incididunt ut labore et dolore magna aliqua...</p>
                                                                            <div class="clear"></div>
                                                                        </div>
                                                                        <div class="clear"></div>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="#">
                                                                        <div class="image">
                                                                            <img src="/img/chat-avatar.png" alt="">
                                                                        </div>

                                                                        <div class="message">
                                                                            <span class="from"><strong>John Smith</strong> <span>40m ago</span><div class="clear"></div></span>
                                                                            <p>Hi, Eiusmod tempor incididunt ut labore et dolore magna aliqua...</p>
                                                                            <div class="clear"></div>
                                                                        </div>
                                                                        <div class="clear"></div>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="#">
                                                                        <div class="image">
                                                                            <img src="/img/chat-avatar.png" alt="">
                                                                        </div>

                                                                        <div class="message">
                                                                            <span class="from"><strong>John Smith</strong> <span>40m ago</span><div class="clear"></div></span>
                                                                            <p>Hi, Eiusmod tempor incididunt ut labore et dolore magna aliqua...</p>
                                                                            <div class="clear"></div>
                                                                        </div>
                                                                        <div class="clear"></div>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="#">
                                                                        <div class="image">
                                                                            <img src="/img/chat-avatar.png" alt="">
                                                                        </div>

                                                                        <div class="message">
                                                                            <span class="from"><strong>John Smith</strong> <span>40m ago</span><div class="clear"></div></span>
                                                                            <p>Hi, Eiusmod tempor incididunt ut labore et dolore magna aliqua...</p>
                                                                            <div class="clear"></div>
                                                                        </div>
                                                                        <div class="clear"></div>
                                                                    </a>
                                                                </li>
                                                                <li><a href="#" class="all">View all messages</a></li>
                                                            </ul>
                                                        </div>

                                                        <div class="logged-info">
                                                            <a href="#" class="login">
                                                                <img src="/img/login-photo.png" alt="">
                                                                    <span><?=Yii::app()->user->fullName?> <i class="icon-chevron-down icon-white"></i></span>
                                                                    <div class="clear"></div>
                                                            </a>

                                                            <div class="profile-options">
                                                                <img src="/img/login-photo.png" alt="">

                                                                    <div class="info">
                                                                        <h4>Bernad Delic <br> <span>example@yourdomain.com</span></h4>
                                                                        <ul class="options">
                                                                            <li><a href="#">Edit profile</a></li>
                                                                            <li><a href="#">Account settings</a></li>
                                                                            <li><a href="#">Help</a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="clear"></div>
                                                            </div>
                                                        </div>

                                                        <div class="logoff">
                                                            <a href="/logout" class="off"></a>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </header>
                            <!-- ======= Header end ======= -->

                            <!-- ======= Content wrap ======= -->  
                            <div id="contentwrap">  

                                <!-- ======= Main content ======= -->  
                                <div class="main-content">

                                    <!-- ======= Top path and breadcrumbs ======= -->  
                                    <div class="path">
                                        <div class="inner">
                                            <h4><i class="icon-home"></i> Dashboard</h4>
                                            <!-- ======= Breadcrumbs ======= -->  
                                            <ul class="xbreadcrumbs">
                                                <?php  $this->widget('zii.widgets.CBreadcrumbs', array(
                                                  'links'=>$this->breadcrumbs,
                                                  ));  ?><!-- breadcrumbs -->

                                            </ul>
                                            <!-- ======= Breadcrumbs ======= -->  
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                    <!-- ======= Top path and breadcrumbs end ======= -->

                                    <div class="resp">
                                        <span class="goto"><i class="icon-home"></i> Dashboard</span>
                                        <span class="pointer icon-chevron-down"></span>
                                        <ul class="respnav"> 
                                            <li><a href="dashboard.html"><i class="icon-home"></i> Dashboard</a></li>
                                            <li><a href="dashboard.html"><i class="icon-home"></i> Dashboard</a></li>
                                            <li><a href="dashboard.html"><i class="icon-home"></i> Dashboard</a></li>

                                        </ul>
                                    </div>

                                    <!-- ======= Container fluid start ======= -->  
                                    <div class="container-fluid">        


                                        <?php if($mainPage): ?>
                                        <?php $this->renderPartial('//common/main_top'); ?>
                                        <?endif?>
                                        

                                           
                                                    <?= $content ?> 


                                    </div>
                                    <!-- ======= Container fluid end ======= --> 

                                </div>
                                <!-- ======= Main content end ======= -->




                                <!-- ======= Right sidebar ======= -->
                                    <?=$this->renderPartial('//common/right_sidebar');?>
                                <!-- ======= Right sidebar end ======= -->
                            </div>
                            <!-- ======= Content wrap end ======= -->



                            <a href="javascript:void(0);" class="sidebar_switch switch_on"></a>
                            <!-- ======= Main navigation ======= -->
                            <div class="main-navigation"> <!-- Main navigation start -->
                                <div class="antiscroll">
                                    <div class="antiscroll-inner">
                                        <div class="antiscroll-content">
                                            <form>
                                                <div class="inner">
                                                    <input type="text" name="search" placeholder="search for something...">          
                                                </div>
                                            </form>
                                                <?php
                                                $this->renderPartial('//common/main_menu');
                                                ?>
                                        </div>

                                        <div class="info_sidebar">
                                            <div class="side_widget" align="center">

                                                <div class="update">
                                                    <p class="title">Next update in:</p>
                                                    <p class="time">13 hrs 13 min</p>
                                                    <div class="clear"></div>
                                                    <div class="black-progress updates"></div>
                                                </div>

                                                <div class="status_widget">
                                                    <p>Visitors</p>
                                                    <div class="info">
                                                        <span>
                                                            <img src="/img/decrease.png" alt="">
                                                                <p class="red">68</p>
                                                        </span>
                                                    </div>
                                                </div>

                                                <div class="status_widget">
                                                    <p>Sales</p>
                                                    <div class="info">
                                                        <span>
                                                            <img src="/img/neutral.png" alt="">
                                                                <p class="blue">0</p>
                                                        </span>
                                                    </div>
                                                </div>

                                                <div class="status_widget">
                                                    <p>Profit</p>  
                                                    <div class="info">
                                                        <span>
                                                            <img src="/img/increase.png" alt="">
                                                                <p class="green">0.8</p>
                                                        </span>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <!-- ======= Main navigation end ======= -->


                        </div>   
                        <!-- ======= Main container end ======= -->


                    </body>
                    </html>