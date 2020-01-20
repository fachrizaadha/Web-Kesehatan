<?php

 function hari_ini($w){
        $seminggu = array("Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu");
        $hari_ini = $seminggu[$w];
        return $hari_ini;
    }
function rand_string( $length ) {
	$chars = "0123456789";	

	$size = strlen( $chars );
	for( $i = 0; $i < $length; $i++ ) {
		$str .= $chars[ rand( 0, $size - 1 ) ];
	}

	return $str;
}


function rupiah($angka) {
	$rupiah="";
	$rp=strlen($angka);
	while ($rp>3) {
		$rupiah = ".". substr($angka,-3). $rupiah;
		$s		= strlen($angka) - 3;
		$angka	= substr($angka,0,$s);
		$rp		= strlen($angka);
	}
	$rupiah = "Rp." . $angka . $rupiah . ",00-";
	return $rupiah;
}
function angka($angka) {
	$rupiah="";
	$rp=strlen($angka);
	while ($rp>3) {
		$rupiah = ".". substr($angka,-3). $rupiah;
		$s		= strlen($angka) - 3;
		$angka	= substr($angka,0,$s);
		$rp		= strlen($angka);
	}
	$rupiah = $angka . $rupiah ;
	return $rupiah;
}
function WKT($sekarang){
$tanggal = substr($sekarang,8,2)+0;
$bulan = substr($sekarang,5,2);
$tahun = substr($sekarang,0,4);

$judul_bln=array(1=> "Januari", "Februari", "Maret", "April", "Mei","Juni", "Juli", "Agustus", "September","Oktober", "November", "Desember");
$wk=$tanggal." ".$judul_bln[(int)$bulan]." ".$tahun;
return $wk;
}
?>
<?php
function BAL($tanggal){
	$arr=split(" ",$tanggal);
	if($arr[1]=="Januari"){$bul="01";}
	else if($arr[1]=="Februari"){$bul="02";}
	else if($arr[1]=="Maret"){$bul="03";}
	else if($arr[1]=="April"){$bul="04";}
	else if($arr[1]=="Mei"){$bul="05";}
	else if($arr[1]=="Juni"){$bul="06";}
	else if($arr[1]=="Juli"){$bul="07";}
	else if($arr[1]=="Agustus"){$bul="08";}
	else if($arr[1]=="September"){$bul="09";}
	else if($arr[1]=="Oktober"){$bul="10";}
	else if($arr[1]=="November"){$bul="11";}
	else if($arr[1]=="Nopember"){$bul="11";}
	else if($arr[1]=="Desember"){$bul="12";}
return "$arr[2]-$bul-$arr[0]";	
}

function hari($tanggal){
	  
    $day = date('D', strtotime($tanggal));
    $dayList = array(
    	'Sun' => 'Minggu',
    	'Mon' => 'Senin',
    	'Tue' => 'Selasa',
    	'Wed' => 'Rabu',
    	'Thu' => 'Kamis',
    	'Fri' => 'Jumat',
    	'Sat' => 'Sabtu'
    );
    return $dayList[$day];
}
function getName($tb,$primary,$parameter,$field){
	global $mysqli;
	$selectArg="select * from `".$tb."` where `".$primary."`='$parameter'";
	$selectDB=mysqli_query($mysqli,$selectArg);
			$d=mysqli_fetch_assoc($selectDB);
 $d[$field];
return $d[$field];
}


//fungsi multiple select yang telah terpilih
function multipleSelected($x, $y) {
	$p = explode(",",$x);
	foreach($p as $page){
		if($y==$page)
		return 'selected';	
	}
}

//fungsi multiple select yang telah terpilih
function multipleCheckedted($x, $y) {
	$p = explode(",",$x);
	foreach($p as $page){
		if($y==$page)
		return 'checked';	
	}
}

function multipleCheckedtedLike($x, $y) {
	$p = explode(",",$x);
	foreach($p as $page){
		if($y==$page)
		return 'checked';	
	}
}


//fungsi multiple select yang baru akan dipilih
function multipleSelect($x) {
	if($x) {
		$no = 1; $text = null;
		foreach ($x as $t){
			if($no==1)
				$t = "$t";
			else
				$t = ",$t";
			$text .= $t;
			$no++;
		}
		return $text;
	}
}

	
# Fungsi untuk membalik tanggal dari format Indo (d-m-Y) -> English (Y-m-d)
function InggrisTgl($tanggal){
	$tgl=substr($tanggal,0,2);
	$bln=substr($tanggal,3,2);
	$thn=substr($tanggal,6,4);
	$tanggal="$thn-$bln-$tgl";
	return $tanggal;
}

# Fungsi untuk membalik tanggal dari format English (Y-m-d) -> Indo (d-m-Y)
function IndonesiaTgl($tanggal){
	$tgl=substr($tanggal,8,2);
	$bln=substr($tanggal,5,2);
	$thn=substr($tanggal,0,4);
	$tanggal="$tgl-$bln-$thn";
	return $tanggal;
}

function IndonesiaTgl2($tanggal){
	$tgl=substr($tanggal,8,2);
	$bln=substr($tanggal,5,2);
	$thn=substr($tanggal,0,4);
	$tanggal="$tgl/$bln/$thn";
	return $tanggal;
}


//require './libraries/phpmailer/PHPMailerAutoload.php';
function senMailx($from,$to,$to_name,$subject,$message){
	$body             = eregi_replace("[\]",'',$message);
// Menambahkan atau menginclude auto load PHPMailer
//require 'libraries/phpmailer/PHPMailerAutoload.php';

// Membuat instance PHPMailer
//Create a new PHPMailer instance
$mail = new PHPMailer;
 
//Tell PHPMailer to use SMTP
$mail->isSMTP();
 
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 2;
 
//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';
 
//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6
 
//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;
 
//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';
 
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
 
//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "akh.sandri@gmail.com";
 
//Password to use for SMTP authentication
$mail->Password = "rahasiaakh";
 
//Set who the message is to be sent from
$mail->setFrom('sandri.wcs@gmail.com', $from);
 
//Set an alternative reply-to address
//$mail->addReplyTo('@gmail.com', 'First Last');
 
//Set who the message is to be sent to
$mail->addAddress($to, $to_name);
 
//Set the subject line
$mail->Subject = $subject;
 
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML($body);
 
//Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body';
 
//Attach an image file
//$mail->addAttachment('images/phpmailer_mini.png');
 
//send the message, check for errors
if (!$mail->send()) {
    $return="Mailer Error: " . $mail->ErrorInfo;
} else {
    $return= "Message sent!";
}
return $return;
}
?>