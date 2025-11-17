<?php
include "koneksi.php";


$outfit = $_POST["outfit"];
$item = $_POST["item"];
$size = $_POST["size"];
$budget = $_POST["budget"];
$purpose = $_POST["purpose"];
$material = $_POST["material"];

mysqli_query($koneksi, "INSERT INTO data (outfit, item, size, budget, purpose, material) 
values ('$outfit', '$item', '$size', '$budget', '$purpose', '$material')");

header("location: index.php");

?>