<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
  	<meta name="description" content="Emily Carr University of Art + Design Grad Exhibition Catalogue 2012." />
  	<meta name="keywords" content="Grad Exhibition Catalogue, Emily Carr University of Art + Design, 2012, art, design, media arts, fine arts, maa, the website" />
  
	<title>ECUAD Grad Exhibition Catalogue 2012</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico" />
	
	<!-- 1140px Grid styles for IE -->
	<!--[if lte IE 9]><link rel="stylesheet" href="css/ie.css" type="text/css" media="screen" /><![endif]-->

  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link rel="stylesheet" href="/wp-content/themes/grad2012/css/flexslider.css" type="text/css">

	<!--css3-mediaqueries-js - http://code.google.com/p/css3-mediaqueries-js/ - Enables media queries in some unsupported browsers-->
	<script type="text/javascript" src="/wp-content/themes/grad2012/js/css3-mediaqueries.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <script src="/wp-content/themes/grad2012/js/jquery.flexslider.js"></script>
  <script src="/wp-content/themes/grad2012/js/portfolio.js"></script>
  <script src="/wp-content/themes/grad2012/js/jquery.masonry.min.js"></script>  
  <script>
  $(function(){
    $('.twelvecol#blog').masonry({
      // options
      itemSelector : '.box',
      columnWidth : 100
      animationOptions: {
        duration: 400
    });
  });
  </script>
  
</head>

<body>

<div class="container">
  	<div class="row">
    	  <div class="header">
  		<div class="twocol">
        <a href="/"><h1>GRAD 2012</h1></a>
  		</div>
  		<div class="eightcol">
  			<nav>
  			  <a href="/all/design/"><li id="last">design</li></a>
    			  <a href="/all/finearts/"><li>fine arts</li></a>  			  
    			  <a href="/all/mediaarts/"><li>media arts</li></a>
    			  <a href="/all/maa/"><li>maa</li></a>
  			  </nav>
  		</div>
  		<div class="twocol last">
  		  <div class="search-form">
          <?php $search_text = "Search"; ?> 
          <form method="get" id="searchform"  
          action="<?php bloginfo('home'); ?>/"> 
          <input type="text" value="<?php echo $search_text; ?>"  
          name="s" id="s"  
          onblur="if (this.value == '')  
          {this.value = '<?php echo $search_text; ?>';}"  
          onfocus="if (this.value == '<?php echo $search_text; ?>')  
          {this.value = '';}" /> 
          <input type="hidden" id="searchsubmit" /> 
          </form>
        </div>
  		</div>
  	</div>
  </div>
</div>