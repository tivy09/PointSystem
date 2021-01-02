<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'finalproject');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$img = $_POST["avater"];
$name = $_POST["name"];
$time = $_POST["time"];
$date = $_POST["date"];
$folderPath = "img/";

$image_parts = explode(";base64,", $img);
$image_type_aux = explode("image/", $image_parts[0]);
$image_type = $image_type_aux[1];

$image_base64 = base64_decode($image_parts[1]);
$fileName = uniqid() . '.jpg';

$file = $folderPath . $fileName;
file_put_contents($file, $image_base64);

$sql = "INSERT INTO `avaters`(`name`, `avaters_IMG`,`AttDate`,`AttTime`) VALUES ('$name', '$fileName', '$date', '$time')";
$result = $link->query($sql);
echo "<script>window.location.href = 'http://localhost:8000/Home/Photo/Check';</script>"
?>