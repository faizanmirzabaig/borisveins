<?php

include_once 'const.php';

$base_url = BASE_URL;

    $etitle = $_POST['title'];
    $epost = $_POST['posting'];
    $evac = $_POST['no_of_vacancy'];
    $edesc = $_POST['description'];
//    echo $_POST['description'];

    $estatus=$_POST['status'];
    $id=$_POST['id'];

   
   
    // $conn = mysqli_connect('localhost','root', '', 'borisveins');
    // $conn = mysqli_connect('localhost', 'sanjares_borisveins', 'OzW2MIEp8y?v', 'sanjares_borisveins');
include 'localhostcon.php';
   
    $sql="UPDATE careerss SET title='{$etitle}',posting='{$epost}',no_of_vacancy='{$evac}',description='{$edesc}',status='{$estatus}' WHERE id={$id} ";
    $result=mysqli_query($conn,$sql) or die ('unsucessfull query');

    header("Location:$base_url/layouts/carreerspage.php");
    mysqli_close($conn);    


?>