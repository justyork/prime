<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
  <head>
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="/css/bootstrap.css" rel="stylesheet">
    <link href="/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">

     
    <?php Yii::app()->clientScript
            ->registerPackage('jquery'); 
        Yii::app()->clientScript 
                ->registerPackage('mainPack');
    ?> 
    
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
  </head>

  <body class="login-page">
  
  <div id="maincontainer" class="clearfix">
  
  <!-- ======= Header start ======= -->
  	<header>
      <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
          <div class="container-fluid">
          	<div class="row-fluid">
            
              <div class="span6">
              	<a href="/" class="logo"><img src="/img/logo.png" /></a>
              </div>
              
              
              
            </div>
          </div>
      	</div>
      </div>
    </header>
		<!-- ======= Header end ======= -->
  
  	
<?=$content?>
    
  </div>   
  <!-- ======= Main container end ======= -->

    
  </body>
</html>
