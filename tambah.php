<?php 
include '119140024_koneksi.php';

$nama = $_POST['nama'];
$nim = $_POST['nim'];
$nohp = $_POST['nohp'];
$= $_POST['tgl'];

if(!($nama=='' || $nim=='' || $nohp=='' || $tgl=='')){
	$sql = mysqli_query($koneksi,"INSERT INTO pendaftaran VALUES('$nama','$nim','$nohp','$tgl')");
}

if($sql){
	$result['status'] = "1";
	$result['msg'] = "Berhasil Menambah Data";
}else{
	$result['status'] = "0";
	$result['msg'] = "Gagal Menambah Data";
}
echo json_encode($result);

?>