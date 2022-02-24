<?php

include_once 'const.php';

$base_url = BASE_URL;

$title = $_POST['title'];
$posting = $_POST['posting'];
$Job_Location = $_POST['Job_Location'];

$Experience_Req = $_POST['Experience_Req'];
$no_of_vacancy = $_POST['no_of_vacancy'];

$description = $_POST['description'];

// $Job_Desc_title = $_POST['Job_Desc_title'];

// $Job_Desc = $_POST['Job_Desc'];

// $Bene_title = $_POST['Bene_title'];

// $Bene_Desc = $_POST['Bene_Desc'];

// $Job_Req_title = $_POST['Job_Req_title'];

// $Job_Req_Desc = $_POST['Job_Req_Desc'];
$estatus=$_POST['status'];

$id=$_POST['Id'];

   
   
    // $conn = mysqli_connect('localhost','root', '', 'borisveins');
    // $conn = mysqli_connect('localhost', 'sanjares_borisveins', 'OzW2MIEp8y?v', 'sanjares_borisveins');
include 'localhostcon.php';
   
    $sql="UPDATE careerss SET title='{$title}',posting='{$posting}',no_of_vacancy='{$no_of_vacancy}',description='{$description}',Job_Desc_title='{$Job_Desc_title}',Job_Desc='{$Job_Desc}',Bene_title='{$Bene_title}',Bene_Desc='{$Bene_Desc}',Job_Req_title='{$Job_Req_title}',Job_Req_Desc='{$Job_Req_Desc}',status='{$estatus}' WHERE id={$id} ";
    var_dump($sql);
        $result=mysqli_query($conn,$sql) or die ('unsucessfull query');

    header("Location:$base_url/layouts/carreerspage.php");
    mysqli_close($conn);    


?>