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





if (!$db_select) {
    die("Database selection failed: " . mysqli_error());
}	    
      
  
  



$a= $_POST["enc"];


echo "$a";
echo "$aa";
echo "$as";
echo "$n1 $n2 $n3";
 

	 
	//$qry11="INSERT INTO student (sname,email,id,cid1,department) VALUES ('$as',$aa','$n2','$a','$n1')";
$qry11="INSERT INTO student (sname,email,id,cid1,department) VALUES ('$as','$aa','$n2','$a','$n1')";
$eqry=mysqli_query($con2,$qry11);
	//$eqry=mysqli_query($con2,$qry11);

mysqli_close($con2);	

header("location:user.php");			   
?>

