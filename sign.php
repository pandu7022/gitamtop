<?php
$user='epiz_26208857';
$pass="iuY71juepiqaK0";
$db='epiz_26208857_nandha';

$conn=new mysqli('sql309.epizy.com',$user,$pass,$db) or die("unable to connect");

    $name = $_POST['name1'];
	$pas = $_POST['pas1'];
	$q = "select * from signin where name='$name' && pas='$pas'";
	$result=mysqli_query($conn, $q);
	$num=mysqli_num_rows($result);
	if($num ==1)
	{
	header('location:home.php');
	}
	else
	{
	echo "Wrong Details";
	}
?>