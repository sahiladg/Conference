
<?php 
session_start();
include("user_navigation.php");
?>
<?php

$as=$_SESSION['_user'];
$aa=$_SESSION['_id'];

$con2=mysqli_connect("localhost","root",""); 
$db_select=mysqli_select_db($con2,"CU");	
$qry2="SELECT * FROM user WHERE name='$as'";
$eqry2=mysqli_query($con2,$qry2);	
$row2 = mysqli_fetch_array($eqry2);
$n1=$row2['department'];
$n2=$row2['id'];
$n3=$row2['flag'];

?>


<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <head>
        <!-- Title -->
        <title>user</title>
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
   
                <div class="container background-white">
                    <div class="row margin-vert-30">
                        <!-- Main Column -->
                        
                          <div class="headline">
                             <h2><font  style="color:darkred;">welcome</font> <?php  echo "$as";  ?></h2>
                          
                        
                            </div>
                        
                        <div class="col-md-12">
                            <!-- Main Content -->  
             <div class="col-md-6 col-sm-6 col-xs-12 text-center margin-top-30"> 
            
    <a href="user_profilepic.php">
             <?php
             if($row2['profilepic']!=NULL)
             {
             ?>        
             <?php echo '<img src="data:image/*;base64,'.base64_encode( $row2['profilepic'] ).'" style="border-radius:200px;" height="250px" width="250px"/>'  ?>  
       		<?php
       		}
       		else
       		{
       		?>
       		 <img src="assets/img/pp.jpg" style="border-radius:200px;" height="250px" width="250px"/> 
       		<?php 
       		}
       		?>
       		
       	</a>
         <!--     <img src="assets/img/deep.JPG" style="border-radius:200px;" height="250px" width="250px"/>  -->
     
			</div>
			 
			     <div class="col-md-6 col-sm-6 col-xs-12 margin-top-50">
                            <!-- Recent Posts -->
                            <div class="panel panel-default background-white">
                      <!--          <div class="panel-heading" style="background-color:black;border-radius:50px 50px 0px 0px;">  -->
                                    <div class= "padding-top-20"> <font size="10" color="black"><?php 
                                  
                                         $as=$_SESSION['_user'];
                                        echo "$as"; 
                                 
                                          ?></font></div>
                         <!--       </div>  -->
                         
                                <div class="panel-body" style="background-color:white;">
                                    <ul class="list-unstyled">
                                  <h3>    <li>
                                            <i class="fa-adn color-primary"></i><?php  echo "$n2";  ?></li>
                                        
                                        <li style="padding-top:15px;">
                                            <i class="fa-envelope color-red"></i><?php  echo "$aa";  ?></li>
                                        <li style="padding-top:15px;">
                                            <i class="fa-home color-blue"></i><?php  echo "$n1";  ?>&nbsp <?php  echo "$n3";  ?></li>
                                      </h3>
                                    </ul>
                                 
                                </div>
                            </div>
                            <!-- End recent Posts -->
                        
                        </div>
			
			</div>
			
			
			
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
             
                        <!-- End Main Column -->
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
  <div class="col-md-12 col-sm-12 margin-top-10">  
          <hr>
                   <h2 class="text-center" style="color:darkblue;">Your Courses</h2>
            <hr> 
         
          <div class="row text-center" style="margin-bottom:30px;">
    <h4>
    		<div class="col-sm-3 col-xs-3">	
    		 Course Id
    		 </div>
         <div class="col-sm-3 col-xs-3">	
    		 Course Name
    		 </div>
              <div class="col-sm-3 col-xs-3">	
    		 Time
    		 </div>
    		 
              <div class="col-sm-3 col-xs-3">			 
               Professor
					</div> 
				 
         </h4> 
              
       </div>
         
       

<?php 

	$con4=mysqli_connect("localhost","root","");

	mysqli_select_db($con4,"CU");

	
	$query4  = "SELECT * FROM student s,course c WHERE s.cid1=c.cid AND id='$n2'";
	
 $qqq4=mysqli_query($con4,$query4) or  die("Error, query failed1");
//$row = mysqli_fetch_array($qqq)
$num_rows4 = mysqli_num_rows($qqq4);


$nr=1;
while($row1 = mysqli_fetch_array($qqq4))
{
      
                   
                    
              

?>
	 <div class="row text-center">
    
    		 <div class="col-sm-3 col-xs-12">	
    		 	<?php echo $row1['cid']; ?>
    		 </div>
              <div class="col-sm-3 col-xs-12">	
    		 	<?php echo $row1['cname']; ?>
    		 </div>
    		  <div class="col-sm-3 col-xs-12">	
    		 	<?php echo $row1['timing']; ?>
    		 </div>
              <div class="col-sm-3 col-xs-12">			 
               			
					<?php echo $row1['pname']; ?>
					</div> 
          	 
    		
              
       </div>
        <hr>
       <?php
}
?>

<?php
mysqli_close($con4);
?>
  </div>             
                        <!-- Side Column -->           
                        <!-- End Side Column -->
                        
                        
                        
                        
                        
                        
  
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
    <div class="col-md-12 col-sm-12 margin-top-10">  
          <hr>
                   <h2 class="text-center" style="color:darkblue;">Drop Courses Here</h2>
            <hr> 
     </div>
                  <div class="row text-center" style="margin-bottom:30px;">
    <h4>
        <div class="col-sm-1 col-xs-1">	
    		 
    		 </div>
    		<div class="col-sm-3 col-xs-3">	
    		 Enter Course Id
    		 </div>
        <div class="col-sm-1 col-xs-1">	
    		 
    		 </div>
       
       <form action="be_user_drop.php" method="POST" > 
        <div class="col-sm-3 col-xs-3">	
    		 <input type="text" name="dropc" id="dropc" />
    		 </div>
        <div class="col-sm-1 col-xs-1">	
    		 
    		 </div>
        <div class="col-sm-3 col-xs-3">	
            
    		 <input type="submit" name="drop" id="drop" value="drop"/>
    		 </div>
        </form>
        
                      </h4></div>
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                                             
                        
  <div class="col-md-12 col-sm-12 margin-top-10">  
          <hr>
                   <h2 class="text-center" style="color:darkblue;">Department Courses</h2>
            <hr> 
         
          <div class="row text-center" style="margin-bottom:30px;">
    <h4>
    		<div class="col-sm-3 col-xs-3">	
    		 Course Id
    		 </div>
         <div class="col-sm-3 col-xs-3">	
    		 Course Name
    		 </div>
              <div class="col-sm-3 col-xs-3">	
    		 Time
    		 </div>
    		 
              <div class="col-sm-3 col-xs-3">			 
               Professor
					</div> 
				 
         </h4> 
              
       </div>
         
       

<?php 

	$con4=mysqli_connect("localhost","root","");

	mysqli_select_db($con4,"CU");

	
	$query4  = "SELECT cid,cname,pname,timing FROM course WHERE cid not in (SELECT cid1 from student where sname='$as') and department='$n1'";
    $qqq4=mysqli_query($con4,$query4) or  die("Error, query failed2");
//$row = mysqli_fetch_array($qqq)
$num_rows4 = mysqli_num_rows($qqq4);
      
      
      
 
$nr=1;

      
while($row1 = mysqli_fetch_array($qqq4))
{
    
    
?>
	 <div class="row text-center">
    
    		 <div class="col-sm-3 col-xs-12">	
    		 	<?php echo $row1['cid']; ?>
    		 </div>
              <div class="col-sm-3 col-xs-12">	
    		 	<?php echo $row1['cname']; ?>
    		 </div>
    		  <div class="col-sm-3 col-xs-12">	
    		 	<?php echo $row1['timing']; ?>
    		 </div>
              <div class="col-sm-3 col-xs-12">			 
               			
					<?php echo $row1['pname']; ?>
					</div> 
        
    		
              
       </div>
        <hr>
       <?php

}

?>

<?php
mysqli_close($con4);
?>
  </div>    
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
    
    <div class="col-md-12 col-sm-12 margin-top-10">  
          <hr>
                   <h2 class="text-center" style="color:darkblue;">Enroll Courses Here</h2>
            <hr> 
     </div>
                  <div class="row text-center" style="margin-bottom:30px;">
    <h4>
        <div class="col-sm-1 col-xs-1">	
    		 
    		 </div>
    		<div class="col-sm-3 col-xs-3">	
    		 Enter Course Id
    		 </div>
        <div class="col-sm-1 col-xs-1">	
    		 
    		 </div>
         <form action="be_user_enroll.php" method="POST" > 
        <div class="col-sm-3 col-xs-3">	
    		 <input type="text" name="enc" id="enc" />
    		 </div>
        <div class="col-sm-1 col-xs-1">	
    		 
    		 </div>
        <div class="col-sm-3 col-xs-3">	
    		 <input type="submit" name="en" id="en" value="enroll"/>
    		 </div>
        
        </form>   </h4></div>                     
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                </div>
            </div>
            <!-- === END CONTENT === -->

   
    </body>
</html>
<!-- === END FOOTER === -->


<?php
mysqli_close($con2);	
include("footer.php");


?>