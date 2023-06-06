<?php
include_once("mysqlconnection.php");
$Name=$_POST["txt1"];
$Phoneno=$_POST["txt2"];
$Email=$_POST["txt3"];
$Address=$_POST["txt4"];
$Any_Query=$_POST["txt5"];
$query="insert into wcs values('$Name','$Phoneno','$Email','$Address','$Any_Query')";
mysqli_query($dbcon,$query);
$msg=mysqli_error($dbcon);
if($msg=="")
{
	echo"Saved";
}
else
{
	echo $msg;
}
?>