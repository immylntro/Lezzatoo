<?php
	date_default_timezone_set('Asia/Jakarta'); // PHP 6 mengharuskan penyebutan timezone.
	$seminggu = array("Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu");
	$hari = date("w");
	$hari_ini = $seminggu[$hari];

	$tgl_sekarang = date("Ymd");
	$tgl_skrg     = date("d");
	$bln_sekarang = date("m");
	$thn_sekarang = date("Y");
	$jam_sekarang = date("H:i:s");

	$nama_bln=array(1=> "Januari", "Februari", "Maret", "April", "Mei",
						"Juni", "Juli", "Agustus", "September",
						"Oktober", "November", "Desember");

	function cleanall($data){
		global $mysqli;
		$filter = $mysqli->real_escape_string(stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES))));
		return $filter;
	}

	function cleaninput($data){
		$filter = trim(stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES))));
		return $filter;
	}

	//convert tgl input : 01-12-2009 atau 2009-12-01
	function convertTgl($tgl){
		$exp = explode('-',$tgl);
		if(count($exp) == 3) {
		  $tgl = $exp[2].'-'.$exp[1].'-'.$exp[0];
		}
		return $tgl;
	}

	function checkMonth($num){
		if ($num == 1){
			$month = "January";
		}else if ($num == 2){
			$month = "February";
		}else if ($num == 3){
			$month = "March";
		}else if ($num == 4){
			$month = "April";
		}else if ($num == 5){
			$month = "May";
		}else if ($num == 6){
			$month = "June";
		}else if ($num == 7){
			$month = "July";
		}else if ($num == 8){
			$month = "August";
		}else if ($num == 9){
			$month = "September";
		}else if ($num == 10){
			$month = "October";
		}else if ($num == 11){
			$month = "November";
		}else if ($num == 12){
			$month = "December";
		}
		return $month;
	}

	function convertTgl2($tgl){
		$exp = explode('-',$tgl);
		if(count($exp) == 3) {
		  $tgl = $exp[2].' '.checkMonth($exp[1]).' '.$exp[0];
		}
		return $tgl;
	}

	//Generate ID
	function buatID($tabel, $field, $panjangfield, $inisial){
		global $mysqli;
		$res = $mysqli->query("select * from $tabel") or die("#buat ID: query gagal!");
		$row = $res->num_rows;

		$panjanginisial = strlen($inisial);
		$awal = $panjanginisial + 1;
		$bnyk = $panjangfield-$panjanginisial;

		if ($row >= 1){
		  $query = $mysqli->query("select max(substring($field,$awal,$bnyk)) as max from $tabel
									where substring(id,1,6) = '$inisial'");
		  $hasil = mysqli_fetch_assoc($query);
		  $angka = intval($hasil['max']);
		}
		else{
		  $angka = 0;
		}

		$angka++;
		$tmp= "";
		for ($i=0; $i < ($panjangfield-$panjanginisial-strlen($angka)) ; $i++){
		  $tmp = $tmp."0";
		}
		//return hasil generate ID
		return strval($inisial.$tmp.$angka);
	}

	//------------------
	//fungsi mendapatkan nama bulan
	function getBulan($bln){
		switch ($bln){
			case 1:
				return "Januari";
				break;
			case 2:
				return "Februari";
				break;
			case 3:
				return "Maret";
				break;
			case 4:
				return "April";
				break;
			case 5:
				return "Mei";
				break;
			case 6:
				return "Juni";
				break;
			case 7:
				return "Juli";
				break;
			case 8:
				return "Agustus";
				break;
			case 9:
				return "September";
				break;
			case 10:
				return "Oktober";
				break;
			case 11:
				return "Nopember";
				break;
			case 12:
				return "Desember";
				break;
		}
	}

?>
