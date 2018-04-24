<?php
include 'koneksi.php';

class insert{	
	function register($role,$uname,$email,$upass,$code){
	$qry=mysql_query("INSERT INTO tbl_im_users(role_role_id,userName,userEmail,userPass,tokenCode)
			          VALUES('".$_POST[user_role]."','".$_POST[user_name]."','".$_POST[user_mail]."','".$_POST[user_pass]."','".$_POST[active_code]."')");	
	}	
	
	function insert_notif($x){
	 $dt=explode('#',$x,9);
	 $qry=mysql_query("INSERT INTO notif_list(kode,nama,kapasitas,status,keterangan,kode_gi,nama_gi,notif)
			          VALUES('".$dt[0]."','".$dt[1]."','".$dt[2]."','".$dt[3]."','".$dt[4]."','".$dt[5]."','".$dt[6]."','".$dt[7]."')");	
		if($qry){
			return true;
		}
	}
}
?>