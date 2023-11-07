<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "ajax_db";

$conn = mysqli_connect("localhost", "root", "", "ajax_db") or die("Connection Failed");
$sql =  "SELECT * FROM ajax_tbl";
$result = mysqli_query($conn, $sql) or die("SQL Query Failed");
$show = "";
if(mysqli_num_rows($result) > 0 ){
$show = '<div>
           <p></p>';

while($row = mysqli_fetch_assoc($result)){
    $show .= "<p>{$row["name"]}</p>";
}
$show .= "</div>";
mysqli_close($conn);

echo $show;

}
else{
    echo "No Record Found";

}

?>