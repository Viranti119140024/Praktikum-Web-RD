<?php 
include '119140024_koneksi.php';

// $id = $_POST['id'];
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$nohp = $_POST['nohp'];
$tgl = $_POST['tgl'];

if (!($nama=='' || $nim=='' || $nohp=='' || $tgl=='')) {
	$sql = mysqli_query($koneksi,"UPDATE pendaftaran SET nama ='$nama', nohp ='$nohp', tgl ='$tgl' WHERE nim ='$nim' ");
}

if($sql){
	$result['status'] = "1";
	$result['msg'] = "Berhasil Ubah Data";
}else{
	$result['status'] = "0";
	$result['msg'] = "Gagal Ubah Data";
}
echo json_encode($result);


?>