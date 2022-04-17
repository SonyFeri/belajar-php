<?php	
	// hello world nya
	$name ="sony salsa";
	echo "hello world " . $name;
	
	//line baru
	echo "<br>";
	//tambah	
	$name2 = 1000 ;
	$name3 = 200 ;
	$hasil =$name2 + $name3;
	echo "tambah " . $hasil;
	

	//perkalian
	echo "<br>";
	$hasil= $name3 * $name2;
	echo "kali " . $hasil;

	//pengurangan
	echo"<br>";
	$hasil= $name3 - $name2;
	echo "kurang " . $hasil;

	//pembagian
	echo"<br>";
	$hasil= $name3 - $name2;
	echo "bagi " . $hasil;

	//condition if dan else
	echo "<br><br>";
	$nilaiku= 80;
	$minimalNilai= 75;
	$hasilRapot= "";
	if ($nilaiku >= $minimalNilai){
		$hasilRapot= "lulus";
	} else {
		$hasilRapot= "tidakLulus";
	}
	echo"<br>";
	
	if ($hasilRapot=="lulus"){
	echo "selamat anda lulus";
	}
	if ($hasilRapot=="tidakLulus"){
	      echo "maaf anda tidak lulus";
	}
	echo"<br>";

	$meja = "kotaks";
	switch ($meja) {
		case "kotak":
		echo "bentukKotak";
		break;
		case "bulat":
		echo "bentukBulat";
		break;
		case "segitiga";
		echo "bentukSegitiga";
		break; 
		default:
		echo "bentuk tidak diketahui";
		break;
	}	

	echo"<br>";
	
	//function
	function showName($name) {
		echo "mari belajar $name<br>";
	}
	showName("REY");		
	showName("ALDO");
	showName("ARAB");
	showName("RANGA");

	//Looping	
	echo"<br>";
	
	$ulang=10;
	for ($i=1; $i<=$ulang; $i++) {
		showName($i);
	}
		

	




?>