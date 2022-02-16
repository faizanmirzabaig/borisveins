<?php 

$id = $_GET['id'];

// $conn=mysqli_connect('localhost','root','','borisveins');
include 'localhostcon.php';

$sql="DELETE FROM careers WHERE id={$id} ";
$result=mysqli_query($conn,$sql);

header('Location:http://s-borisveins.com.sanjaresolutions.com/layouts/carreerspage.php');


?>