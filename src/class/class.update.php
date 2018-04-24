<?php
include 'koneksi.php';

class update{
	
	function upd_notif($kode){
		$sql=mysql_query("update notif_list set flag_notif='1' where kode='".$kode."'");
		return $sql;
	}

}
?>