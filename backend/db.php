
<?php 

$conn = mysqli_connect('localhost', 'root', 'root', 'garage_project');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}else{
    // echo("Connection Successfull !");
}


?>