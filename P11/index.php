<!-- === BEGIN HEADER === -->
<?php 
session_start();
//echo $_COOKIE["nav"];
if(isset($_COOKIE["nav"])) 
{
//echo "yes";
include("user_navigation.php");
}
else
{
include("navigation.php");
}

?>



<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->




<html lang="en">
    <!--<![endif]-->
    <head>
        <!-- Title -->
        <title>Distance Learning Web-Application</title>
        <!-- Meta -->
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
		
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <!-- Favicon -->
        <link href="favicon.ico" rel="shortcut icon">
        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.css" rel="stylesheet">
        <!-- Template CSS -->
        <link rel="stylesheet" href="assets/css/animate.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/nexus.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/responsive.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/custom.css" rel="stylesheet">
        <!-- Google Fonts-->
        <link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300" rel="stylesheet" type="text/css">
    </head>
    <body>
        
            <!-- === BEGIN CONTENT === -->
            <div id="slideshow" class="bottom-border-shadow">
                <div class="container no-padding background-white bottom-border">
                    <div class="row">
                        <!-- Carousel Slideshow -->
                        <div id="carousel-example" class="carousel slide" data-ride="carousel">
                            <!-- Carousel Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example" data-slide-to="1"></li>
                                <li data-target="#carousel-example" data-slide-to="2"></li>
								<li data-target="#carousel-example" data-slide-to="3"></li>
                            </ol>
                            <div class="clearfix"></div>
                            <!-- End Carousel Indicators -->
                            <!-- Carousel Images -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="assets/img/slideshow/1.jpg">
                                </div>
                                <div class="item">
                                    <img src="assets/img/slideshow/2.jpg">
                                </div>
                                <div class="item">
                                    <img src="assets/img/slideshow/3.jpg">
                                </div>
                                <div class="item">
                                    <img src="assets/img/slideshow/4.jpg">
                                </div>
								
                            </div>
                            <!-- End Carousel Images -->
                            <!-- Carousel Controls -->
                            <a class="left carousel-control" href="#carousel-example" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                            <!-- End Carousel Controls -->
                        </div>
                        <!-- End Carousel Slideshow -->
                    </div>
                </div>
            </div>
			
         
			
			
			
			
		
			
		
            <!-- === END CONTENT === -->
            <!-- === BEGIN FOOTER === -->
            
    </body>
</html>
<!-- === END FOOTER === -->


<?php

include("footer.php");
		
?>