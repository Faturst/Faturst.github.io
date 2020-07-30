<?php

if (isset($_POST['btn'])) {
	$nama = $_POST['nama'];
	$no_hp = $_POST['no_hp'];
	$instagram = $_POST['instagram'];
	$pesanan = $_POST['pesanan'];
	$alamat = $_POST['alamat'];
	header("location: https://api.whatsapp.com/send?phone=6287812226646&text=Nama%20:%20". $nama . "%0ANo%20HP%20:%20".$no_hp."%0AInstagram%20:%20".$instagram."%20Pesanan%20:%20".$pesanan."%20Alamat%20:%20".$alamat."");
}
?>