
<?php 
session_start();

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
<?php





$con=mysqli_connect("localhost","root",""); 
$db_select=mysqli_select_db($con,"CU");	
if (!$db_select) {
    die("Database selection failed: " . mysqli_error());
}	    
      
  
  


$a= $_POST["dropc"];

echo "$a";
 
 
	$qry="DELETE FROM course WHERE cid='$a'";
	$eqry=mysqli_query($con,$qry);	

mysqli_close($con);	
echo $eqry;
header("location:admin.php");			   
?>

