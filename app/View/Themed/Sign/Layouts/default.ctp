<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8">
<title>Sign Log</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<?php echo $this->Html->css('bootstrap.min'); ?>
<?php echo $this->Html->css('bootstrap-responsive.min'); ?>
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
<?php echo $this->Html->css('font-awesome'); ?>
<?php echo $this->Html->css('style'); ?>
<?php echo $this->Html->css('dashboard'); ?>
<!-- Datepicker -->
<?php 
echo $this->Html->script('jquery');
echo $this->Html->script('jqueryui');
echo $this->Html->css('jqueryui');
?>
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
<div class="wrap">

<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container"> 
		<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a>
		<?php echo $this->Html->link('Code Enforcement Sign Database', array('controller' => 'signs', 'action' => 'index'), array('class' => 'brand', 'escape' => false)); ?>
    </div>
    <!-- /container --> 
  </div>
  <!-- /navbar-inner --> 
</div>
<!-- /navbar -->
<div class="subnavbar">
  <div class="subnavbar-inner">
    <div class="container">

			<?php echo $this->fetch('content'); ?>      
        </div>
        <!-- /span6 --> 
      </div>
      <!-- /row --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /main-inner --> 
</div><!-- /MAIN -->
</div><!-- /CONTENT -->

</div><!-- /WRAP -->
<div class="footer">
  <div class="footer-inner">
    <div class="container">
      <div class="row">
        <div class="span12"> &copy; 2013 <?php echo $this->Html->link('City of Tucson', 'http://cms3.tucsonaz.gov/', array('escape' => false)); ?>
. </div>
        <!-- /span12 --> 
      </div>
      <!-- /row --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /footer-inner --> 
</div>
<!-- /footer --> 
</body>
</html>