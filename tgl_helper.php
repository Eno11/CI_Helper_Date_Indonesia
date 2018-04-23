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
	$bln_romawi=array('1'=>'I','2'=>'II','3'=>'III','4'=>'IV','5'=>'V','6'=>'VI','7'=>'VII','8'=>'VIII','9'=>'IX','10'=>'X','11'=>'XI','12'=>'XII','13'=>'XIII','14'=>'XIV','15'=>'XV','16'=>'XVI','17'=>'XVII','18'=>'XVIII','19'=>'XIX','20'=>'XX','21'=>'XXI','22'=>'XXII','23'=>'XXIII','24'=>'XXIV','25'=>'XXV','26'=>'XXVI','27'=>'XXVII','28'=>'XXVIII','29'=>'XXIX','30'=>'XXX','31'=>'XXXI','32'=>'XXXII','33'=>'XXXIII','34'=>'XXXIV','35'=>'XXXV','36'=>'XXXVI','37'=>'XXXVII','38'=>'XXXVIII','39'=>'XXXIX','40'=>'XL','41'=>'XLI','42'=>'XLII','43'=>'XLIII','44'=>'XLIV','45'=>'XLV','46'=>'XLVI','47'=>'XLVII','48'=>'XLVIII','49'=>'XLIX','50'=>'L','51'=>'LI','52'=>'LII','53'=>'LIII','54'=>'LIV','55'=>'LV','56'=>'LVI','57'=>'LVII','58'=>'LVIII','59'=>'LIX','60'=>'LX','61'=>'LXI','62'=>'LXII','63'=>'LXIII','64'=>'LXIV','65'=>'LXV','66'=>'LXVI','67'=>'LXVII','68'=>'LXVIII','69'=>'LXIX','70'=>'LXX','71'=>'LXXI','72'=>'LXXII','73'=>'LXXIII','74'=>'LXXIV','75'=>'LXXV','76'=>'LXXVI','77'=>'LXXVII','78'=>'LXXVIII','79'=>'LXXIX','80'=>'LXXX','81'=>'LXXXI','82'=>'LXXXII','83'=>'LXXXIII','84'=>'LXXXIV','85'=>'LXXXV','86'=>'LXXXVI','87'=>'LXXXVII','88'=>'LXXXVIII','89'=>'LXXXIX','90'=>'XC','91'=>'XCI','92'=>'XCII','93'=>'XCIII','94'=>'XCIV','95'=>'XCV','96'=>'XCVI','97'=>'XCVII','98'=>'XCVIII','99'=>'XCIX','100'=>'C','101'=>'CI','102'=>'CII','103'=>'CIII','104'=>'CIV','105'=>'CV','106'=>'CVI','107'=>'CVII','108'=>'CVIII','109'=>'CIX','110'=>'CX','111'=>'CXI','112'=>'CXII','113'=>'CXIII','114'=>'CXIV','115'=>'CXV','116'=>'CXVI','117'=>'CXVII','118'=>'CXVIII','119'=>'CXIX','120'=>'CXX','121'=>'CXXI','122'=>'CXXII','123'=>'CXXIII','124'=>'CXXIV','125'=>'CXXV','126'=>'CXXVI','127'=>'CXXVII','128'=>'CXXVIII','129'=>'CXXIX','130'=>'CXXX','131'=>'CXXXI','132'=>'CXXXII','133'=>'CXXXIII','134'=>'CXXXIV','135'=>'CXXXV','136'=>'CXXXVI','137'=>'CXXXVII','138'=>'CXXXVIII','139'=>'CXXXIX','140'=>'CXL','141'=>'CXLI','142'=>'CXLII','143'=>'CXLIII','144'=>'CXLIV','145'=>'CXLV','146'=>'CXLVI','147'=>'CXLVII','148'=>'CXLVIII','149'=>'CXLIX','150'=>'CL','151'=>'CLI','152'=>'CLII','153'=>'CLIII','154'=>'CLIV','155'=>'CLV','156'=>'CLVI','157'=>'CLVII','158'=>'CLVIII','159'=>'CLIX','160'=>'CLX','161'=>'CLXI','162'=>'CLXII','163'=>'CLXIII','164'=>'CLXIV','165'=>'CLXV','166'=>'CLXVI','167'=>'CLXVII','168'=>'CLXVIII','169'=>'CLXIX','170'=>'CLXX','171'=>'CLXXI','172'=>'CLXXII','173'=>'CLXXIII','174'=>'CLXXIV','175'=>'CLXXV','176'=>'CLXXVI','177'=>'CLXXVII','178'=>'CLXXVIII','179'=>'CLXXIX','180'=>'CLXXX','181'=>'CLXXXI','182'=>'CLXXXII','183'=>'CLXXXIII','184'=>'CLXXXIV','185'=>'CLXXXV','186'=>'CLXXXVI','187'=>'CLXXXVII','188'=>'CLXXXVIII','189'=>'CLXXXIX','190'=>'CXC','191'=>'CXCI','192'=>'CXCII','193'=>'CXCIII','194'=>'CXCIV','195'=>'CXCV','196'=>'CXCVI','197'=>'CXCVII','198'=>'CXCVIII','199'=>'CXCIX','200'=>'CC','201'=>'CCI','202'=>'CCII','203'=>'CCIII','204'=>'CCIV','205'=>'CCV','206'=>'CCVI','207'=>'CCVII','208'=>'CCVIII','209'=>'CCIX','210'=>'CCX','211'=>'CCXI','212'=>'CCXII','213'=>'CCXIII','214'=>'CCXIV','215'=>'CCXV','216'=>'CCXVI','217'=>'CCXVII','218'=>'CCXVIII','219'=>'CCXIX','220'=>'CCXX','221'=>'CCXXI','222'=>'CCXXII','223'=>'CCXXIII','224'=>'CCXXIV','225'=>'CCXXV','226'=>'CCXXVI','227'=>'CCXXVII','228'=>'CCXXVIII','229'=>'CCXXIX','230'=>'CCXXX','231'=>'CCXXXI','232'=>'CCXXXII','233'=>'CCXXXIII','234'=>'CCXXXIV','235'=>'CCXXXV','236'=>'CCXXXVI','237'=>'CCXXXVII','238'=>'CCXXXVIII','239'=>'CCXXXIX','240'=>'CCXL','241'=>'CCXLI','242'=>'CCXLII','243'=>'CCXLIII','244'=>'CCXLIV','245'=>'CCXLV','246'=>'CCXLVI','247'=>'CCXLVII','248'=>'CCXLVIII','249'=>'CCXLIX','250'=>'CCL');
	$bulan = $bln_romawi[$bln];
	return $bulan; 
}