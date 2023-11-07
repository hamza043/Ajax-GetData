<?php
$f_name = $_POST["f_name"];

$conn = mysqli_connect("localhost", "root", "", "ajax_db") or die("Connection Failed");

$sql = "INSERT INTO ajax_tbl(name) VALUES ('{$f_name}')";

if(mysqli_query($conn, $sql)){
    echo 1;
}
else{
    echo 0;
}


?>