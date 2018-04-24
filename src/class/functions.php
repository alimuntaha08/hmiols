<?php
	function rp($x)
	{
		$rs = "" . number_format($x,2,',','.');
		return $rs;
	}
	
		//format ymd
	function ymd($tanggal)
	{
	if(empty($tanggal)){
	return '0000-00-00';
	}else{
	return date('Y-m-d', strtotime($tanggal));
	}
	}
	//format dmy
	function dmy($tanggal)
	{
	if($tanggal=='0000-00-00'){
	return '';
	}elseif($tanggal!=''){return date('d-m-Y', strtotime($tanggal));}else{return '';}
	}
?>