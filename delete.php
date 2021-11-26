<?php 
include '119140024_koneksi.php';

$nim = $_POST['nim'];
$sql = mysqli_query($koneksi,"DELETE FROM pendaftaran WHERE nim = '$nim' ");
if($sql){
	$result['status'] = "1";
	$result['msg'] = "Berhasil Menambah Data";
}else{
	$result['status'] = "0";
	$result['msg'] = "Gagal Menambah Data";
}
echo json_encode($result);

?>