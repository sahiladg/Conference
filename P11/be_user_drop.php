
<?php 
session_start();
?>
<?php





$con=mysqli_connect("localhost","root",""); 
$db_select=mysqli_select_db($con,"CU");	
if (!$db_select) {
    die("Database selection failed: " . mysqli_error());
}	    
      
  
  


$uid=$_SESSION['_id'];
$a= $_POST["dropc"];


echo "$a";
 
if($a!=null)
{
	 
	$qry="DELETE FROM student WHERE cid1='$a' AND email='$uid'";
	$eqry=mysqli_query($con,$qry);	
}
else
{
echo "sorry";
}

mysqli_close($con);	

header("location:user.php");			   
?>

