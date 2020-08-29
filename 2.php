<?php
$user='epiz_26208857';
$pass="iuY71juepiqaK0";
$db='epiz_26208857_nandha';

$conn=new mysqli('sql309.epizy.com',$user,$pass,$db) or die("unable to connect");
$name = $_POST['name1'];
$pas = $_POST['pas1'];
$pas2=$_POST['pas2'];
if($pas==$pas2)
{
    $sql="UPDATE signin SET pas='$pas' where tel='$name'";
    if ($conn->query($sql) == TRUE) 
    {
        echo "New record created successfully";
    }
    else 
    {
        echo "Error: " . $sql . "<br>" . $conn->error;
        $conn->close();
    }
}


?>
