<?php

include_once '../const.php';

$base_url = BASE_URL;

    $etitle = $_POST['Job_Desc'];
    $epost = $_POST['Bene_Desc'];
    $evac = $_POST['Job_Req_Desc'];
    $Job_Desc_title = $_POST['Job_Desc_title'];
   
    $Bene_title = $_POST['Bene_title'];
    $Job_Req_title = $_POST['Job_Req_title'];


    // $edesc = $_POST['description'];
//    echo $_POST['description'];

    $estatus=$_POST['status'];
    $id=$_POST['id'];

   
   
    // $conn = mysqli_connect('localhost','root', '', 'borisveins');
    // $conn = mysqli_connect('localhost', 'sanjares_borisveins', 'OzW2MIEp8y?v', 'sanjares_borisveins');
include '../localhostcon.php';
   
    $sql="UPDATE views SET Job_Desc_title='{$Job_Desc_title}',Job_Desc='{$etitle}',Bene_title='{$Bene_title}',Bene_Desc='{$epost}',Job_Req_title='{$Job_Req_title}',Job_Req_Desc='{$evac}',status='{$estatus}' WHERE id={$id} ";
    $result=mysqli_query($conn,$sql) or die ('unsucessfull query');

    header("Location:$base_url/layouts/Views/ViewPage.php");
    mysqli_close($conn);    


?>