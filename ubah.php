<?php
include 'koneksi.php';

$id = $_POST["id"];
$outfit = $_POST["outfit"];
$item = $_POST["item"];
$size = $_POST["size"];
$budget = $_POST["budget"];
$purpose = $_POST["purpose"];
$material = $_POST["material"];

mysqli_query($koneksi, "UPDATE data SET outfit='$outfit', item='$item', 
size='$size', budget='$budget', purpose='$purpose', material='$material' WHERE id='$id'");

header("location:index.php");
?>
