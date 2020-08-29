<?php
$user='epiz_26208857';
$pass="iuY71juepiqaK0";
$db='epiz_26208857_nandha';

$conn=new mysqli('sql309.epizy.com',$user,$pass,$db) or die("unable to connect");
$name = $_POST['names'];
$pas = $_POST['pass'];
$j=$_POST['phs'];
$sql="Insert into signin(name,pas,tel) values('$name','$pas','$j')";
if ($conn->query($sql) == TRUE) {
    
echo '<script>alert("Sucessfully Registred");window.location.href= "index.php";</script>';
    
  
} else {
  echo "ERROR";
}

$conn->close();
?>