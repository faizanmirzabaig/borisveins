<?php
// $conn = mysqli_connect('localhost','root', '', 'borisveins');
// $conn = mysqli_connect('localhost', 'sanjares_borisveins', 'OzW2MIEp8y?v', 'sanjares_borisveins');
//  include 'localhostcon.php';
include 'localhostcon.php';

$result = $conn->query("SELECT * from careers");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['title'];
    $email = $_POST['posting'];
    $vac = $_POST['no_of_vacancy'];
    $desc = $_POST['description'];


    // Die if connection was not successful
    if (!$conn) {
        die("Sorry we failed to connect: " . mysqli_connect_error());
    } else {
        // Submit these to a database
        // Sql query to be executed 
        $sql = "INSERT INTO `careers` (`title`, `posting`, `no_of_vacancy`, `description`) VALUES ('$name', '$email', '$vac','$desc')";
        $result = mysqli_query($conn, $sql);
        header('Location:http://s-borisveins.com.sanjaresolutions.com/layouts/carreerspage.php');  
  
    }
}


?>