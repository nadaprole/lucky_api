<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$con = mysqli_connect("dpg-cl5trh4n7k7c73cat5vg-a", "lucky_beauty_app_user","ZFP3klwZOaWkowMSjd2RSxy7JCS571ce", "5432");
 
// Check connection
if($con === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$playerName = $_POST['player_name'];
$points = $_POST['points'];
$hole = $_POST['hole'];
 
// Attempt insert query execution
$sql = "INSERT INTO lucky_beauty_app (player_name, points, hole) VALUES ($playerName, $points, $hole)";
if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>