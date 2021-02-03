
<?php

$con = mysqli_connect('sql101.epizy.com','epiz_26809877','bFmtgbcLVR','epiz_26809877_milestone3');
//$con = mysqli_connect('localhost','root','','rms');
if(!$con){
  die("Not connected.".mysqli_error());
}
$rcv=$_REQUEST['id'];
//$q="DELETE FROM dhaka WHERE id=$rcv";
//$q="DELETE FROM ctg WHERE id=$rcv";
//$q="DELETE FROM khulna WHERE id=$rcv";
//$q="DELETE FROM cumilla WHERE id=$rcv";
//$q="DELETE FROM barishal WHERE id=$rcv";
$q="DELETE FROM dinajpur WHERE id=$rcv";

$dlt=mysqli_query($con,$q);
if ($dlt) {
	header("location: vr.php?deleted");
	echo "deleted";
}
?>