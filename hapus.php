<?php
include "koneksi.php";

$id = $_POST['hapusData'];

$sql = "delete From Mahasiswa where nim='$id'";
$hasil=mysqli_query($kon,$sql);
?>