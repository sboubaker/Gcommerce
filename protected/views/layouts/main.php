<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Bootstrap, from Twitter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/bootstrap/css/bootstrap.css" />
    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
    </style>
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/bootstrap/css/bootstrap-responsive.css" />
	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

  </head>

  <body>
  <!-- Navigation -->
  <div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">
	<a class="brand" href="#">G-Commerce &nbsp;&nbsp;</a>
	<ul class="nav">
              <li class="active"><a href="index.php?r=article">Articles</a></li>
			  <li><a href="index.php?r=vente/admin">Ventes</a></li>
			  <li><a href="index.php?r=achat/admin">Achats</a></li>
			  <li><a href="index.php?r=client/admin">Clients</a></li>
			  <li><a href="index.php?r=fournisseur/admin">Fournisseurs</a></li>
			  <li><a href="index.php?r=magasin/admin">Magasins</a></li>
			  <li><a href="index.php?r=stock">Stock</a></li>
			  <li><a href="index.php?r=utilisateur">Utilisateurs</a></li>
			  
    </ul>		
</div>
</div>
</div>
	<div class="container-fluid">
		<div class="row-fluid">
			<div class="span2">				
				<button id="section" class="btn btn-info btn-large" href="#"></button>
				<?php
		$this->beginWidget('zii.widgets.CPortlet', array());
		$this->widget('zii.widgets.CMenu', array(
			'items'=>$this->menu,
			'htmlOptions'=>array('class'=>'nav nav-pills nav-stacked'),
		));
		$this->endWidget();
	?>
			</div>
			<div class="span10">
				<?php echo $content; ?>
			</div>
		</div>
	</div>
  </body>
</html>
