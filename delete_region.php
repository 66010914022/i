<meta charset="utf-8">
<?php
include_once("connectdb.php");

$id = $_GET["id"];
$sql ="DELETE FROM regions WHERE r_id='xxx'";
mysqli_query($conn,$sql) or die ("เพิ่มข้อมูลไม่ได้");

echo "<script>";
echo "windo.location='a.php';";
echo "</script>";


?>