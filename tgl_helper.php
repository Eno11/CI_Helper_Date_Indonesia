<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function format_id_1($date)
{
    $tgl=substr($date,8,2);
    $bln=substr($date,5,2);
    if(substr($bln,0,1)==0){ $bln=substr($bln,1,1); }
    $thn=substr($date,0,4);
    $bulan_s = array('1' => 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember');
    $bulan = $bulan_s[$bln];
    $tglindo= $tgl." ".$bulan." ".$thn; 
    return $tglindo;//01 Januari 2018
}

function format_id_2($tgl = FALSE)
{
	$today = $tgl? date(strtotime($tgl)):time();
	
	$hari_s = array('1' => 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum\'at', 'Sabtu', 'Minggu');
	$bulan_s = array('1' => 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember');
	
	$hari = $hari_s[mdate('%N', $today)];
	$tanggal = mdate('%d', $today);
	$bulan = $bulan_s[mdate('%n', $today)];
	$tahun = mdate('%Y', $today);
	$tgl = $hari.', '.$tanggal.' '.$bulan.' '.$tahun; // Senim, 01 Januari 2018
	return $tgl;
}

function bulan_id($bln)
{
    $bulan_s = array('01' => 'Januari','02' =>  'Februari','03' =>  'Maret', '04' => 'April', '05' => 'Mei', '06' => 'Juni', '07' => 'Juli', '08' => 'Agustus', '09' => 'September', '10' => 'Oktober', '11' => 'November', '12' => 'Desember');
    $bulan = $bulan_s[$bln];
    return $bulan; 
}


function bulan_id_3lan($bln)
{
    $bulan_s = array('01' => 'Jan', '02' =>'Feb', '03' =>'Mar', '04' =>'Apr', '05' =>'Mei', '06'=>'Jun', '07' => 'Jul', '08' => 'Agu', '09' => 'Sep', '10' => 'Okt', '11' => 'Nov', '12' => 'Des');
    $bulan = $bulan_s[$bln];
    return $bulan; // Jan
}
	
function hari_id($hri)
{
    $hari_s = array('1' => 'Senin', '2' => 'Selasa', '3' => 'Rabu', '4' => 'Kamis', '5' => 'Jum\'at', '6' => 'Sabtu', '7' => 'Minggu');
    $hari=$hari_s[$hri];
    return $hari; // Senin
}


function get_waktu_server()
{
	date_default_timezone_set('Asia/Jakarta');
	return date("F d, Y H:i:s", time());
}

function bln_romawi($bln)
{
	$bln_romawi=array('01'=>'I','02'=>'II','03'=>'III','04'=>'IV','05'=>'V','06'=>'VI','07'=>'VII','08'=>'VIII','09'=>'IX','10'=>'X','11'=>'XI','12'=>'XII');
	$bulan = $bln_romawi[$bln];
	return $bulan; 
}