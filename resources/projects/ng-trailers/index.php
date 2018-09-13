<!DOCTYPE html>
<html>

  <head lang="en">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Movie and Game Trailers</title>
    <link rel="icon" type="image/png" href="images/film.png">  
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>
    <script src="js/angular.min.js"></script>
     

<!-- LightBox2 Javascript and CSS Start -->              
        <!-- Add fancyBox main JS and CSS files -->
        <script type="text/javascript" src="source/jquery.fancybox.js?v=2.1.5"></script>
    	<link rel="stylesheet" type="text/css" href="source/jquery.fancybox.css?v=2.1.5" media="screen" />
    	<!-- Add Media helper (this is optional) -->
    	<script type="text/javascript" src="source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
<!-- LightBox2 Javascript and CSS End -->
      
    
  </head>

  <body data-spy="scroll" data-target=".navbar-collapse" ng-app="TrailerApp">
  
    <div class="navbar navbar-inverse navbar-fixed-top">
      
  		<div class="container">
  		
  			<div class="navbar-header">
  			
  				<a href="#" class="navbar-brand">Trailers</a>
  						
  				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">	
  					<span class="sr-only">Toggle navigation</span>		
  					<span class="icon-bar"></span>
  					<span class="icon-bar"></span>
  					<span class="icon-bar"></span>				
  				</button>
  					
  			</div>
  			
  			<div class="collapse navbar-collapse">
  				<ul class="nav navbar-nav" id="top-nav">	
  					<li class="active"><a href="#marvel">Marvel Universe</a></li>
                      <li><a href="#ff">Fast & Furious</a></li>
                      <li><a href="#hp">Harry Potter</a></li>
  					<li><a href="#cod">Call of Duty</a></li>				
  					<li><a href="#gta">Grand Theft Auto</a></li>				
  				</ul>	
  			</div>
  		
 		</div> 	
  	</div>
      
<div class="main" ng-controller="TrailerController">

<trailer info="video" ng-repeat="video in videos"></trailer>

</div><!-- end of main -->

    <div class="learn-more">
      <div class="container">
		<div class="row">
	      <div class="col-md-4">
			<h3>Movies</h3>
			<p>More Movie Trailers Coming Soon.</p>
			<p><a href="#">Coming Soon</a></p>
	      </div>
		  <div class="col-md-4">
			<h3>Show</h3>
			<p>Show Trailers Coming Soon.</p>
			<p><a href="#">Coming Soon</a></p>
		  </div>
		  <div class="col-md-4">
			<h3>Games</h3>
			<p>More Game Trailers Coming Soon.</p>
			<p><a href="#">Coming Soon</a></p>
		  </div>
	    </div>
	  </div>
	</div>
    
<script src="js/scroll.js"></script>
    <script>
    $(document).ready(function() {
    $('#top-nav').onePageNav({
    currentClass: 'active',
    changeHash: true,
    scrollSpeed: 750
        });
    });
    </script>
    
    
    <!-- Modules -->
    <script src="js/app.js"></script>

    <!-- Controllers -->
    <script src="js/controllers/TrailerController.js"></script>

    <!-- Directives -->
    <script src="js/directives/trailer.js"></script>
    
    <!-- New Fancy Box Start -->

    <script type="text/javascript">
    	$(document).ready(function() {
			
			$('.fancybox-media')
				.attr('rel', 'media-gallery')
				.fancybox({
					openEffect : 'none',
					closeEffect : 'none',
					prevEffect : 'none',
					nextEffect : 'none',

					arrows : false,
					helpers : {
						media : {},
						buttons : {}
					}
				});

		});
	</script>
	
<!-- New Fancy Box End -->
    
  </body>
</html>