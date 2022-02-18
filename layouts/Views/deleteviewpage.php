<?php 

$id = $_GET['id'];

// $conn=mysqli_connect('localhost','root','','borisveins');
include '../localhostcon.php';
include_once '../const.php';

$base_url = BASE_URL;


$sql="DELETE FROM views WHERE id={$id} ";
$result=mysqli_query($conn,$sql);

header("Location:$base_url/layouts/Views/ViewPage.php");


?>