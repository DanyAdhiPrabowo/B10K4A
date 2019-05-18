<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
	function cek_string($string,$cek){
		$str 	= str_split($string);
		$jum 	= count($str);
		$jumm	= 0;
		for ($i=0; $i <$jum ; $i++) { 
			if($cek==$str[$i]){
				$jumm++;
			}
		}
		echo $jumm;
	}

	print_r(cek_string('bootcamp','o'));
?>




</body>
</html>