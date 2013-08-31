<!DOCTYPE html>
<html>
<head>
	<meta charset=UTF-8>

	<title><?php pai_title(); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?php echo @pai_pageInfo('description')?>">
	<meta name="keywords" content="<?php echo @pai_pageInfo('keywords')?>">
	
	<!-- CSS Magic aka Bootstrap -->
	<link href="<?=ST;?>css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="<?=ST;?>css/app.css" rel="stylesheet" media="screen">
	
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="<?=ST;?>js/html5shiv.js"></script>
  <script src="<?=ST;?>assets/js/respond.min.js"></script>
  <![endif]-->

	<!--[if IE]>
	<script type="text/javascript" src="https://getfirebug.com/firebug-lite.js"></script>
	<![endif]-->
	
	<?php pai_head(); ?>
</head>

<body>
	<div class="navbar navbar-inverse navbar-fixed-top">
	  <div class="container">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      
	      <a class="navbar-brand" href="<?=PAI_PATH;?>">PAI</a>
	    </div>
	    
	    <div class="navbar-collapse collapse" id="navigation">
	      <?php pai_menu('main', array('currentClass'=> 'current')); ?>
	    </div>
	  </div>
	</div>

	<div id="breadcrumb">
	  <?php //pai_content('breadcrumb')?>
	</div>

	<div id="content" class="content">
	  <?php pai_content('page')?>
	</div>
	
	<div class="clearfix"></div>

  <hr />
  
  <footer>
    <p class="text-muted text-center credit">PAI &copy; 2013</p>
  </footer>
  

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script src="<?=ST;?>js/bootstrap.min.js"></script>
  
	<?php pai_footer(); ?>
	
</body>
</html>