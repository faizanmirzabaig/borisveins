<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// $conn = mysqli_connect('localhost','root', '', 'borisveins');
// $conn = mysqli_connect('localhost', 'sanjares_borisveins', 'OzW2MIEp8y?v', 'sanjares_borisveins');
//  include 'localhostcon.php';
include 'localhostcon.php';
include_once 'const.php';


$base_url = BASE_URL;
// die($base_url);



$result = $conn->query("SELECT * from careerss");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $posting = $_POST['posting'];
    $Job_Location = $_POST['Job_Location'];

    $Experience_Req = $_POST['Experience_Req'];
    $no_of_vacancy = $_POST['no_of_vacancy'];

    $description = $_POST['description'];

    $Job_Desc_title = $_POST['Job_Desc_title'];

    $Job_Desc = $_POST['Job_Desc'];

    $Bene_title = $_POST['Bene_title'];

    $Bene_Desc = $_POST['Bene_Desc'];

    $Job_Req_title = $_POST['Job_Req_title'];

    $Job_Req_Desc = $_POST['Job_Req_Desc'];



    // Die if connection was not successful
    if (!$conn) {
        die("Sorry we failed to connect: " . mysqli_connect_error());
    } else {
        // Submit these to a database
        // Sql query to be executed 
        $sql = "INSERT INTO `careerss` (`title`,`posting`,`job_pos`,`no_of_exp`,`no_of_vacancy`,`description`,`Job_Desc_title`,`Job_Desc`,`Bene_title`,`Bene_Desc`,`Job_Req_title`,`Job_Req_Desc`) VALUES('$title','$posting', '$Job_Location','$Experience_Req','$no_of_vacancy','$description','$Job_Desc_title','$Job_Desc','$Bene_title','$Bene_Desc','$Job_Req_title','$Job_Req_Desc');";
      $result = mysqli_query($conn, $sql);
        // header("Location:$base_url/layouts/carreerspage.php");  
  
    }
}
