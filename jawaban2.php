<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php 
	function random(){
		$karakter 	= '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$acak 		= str_shuffle($karakter);
		$panjang 	= substr($acak, 0, 32);
		$array		= [$panjang];
		return $panjang;
	}

	function cetak($jmlh){
		$strs=[];
		for ($i=0; $i <$jmlh ; $i++)
		{ 
			$str = random();
			if(!in_array($str, $strs))
				array_push($strs,$str);
		}
		return $strs;
	}
	print_r(cetak(3));
?>


</body>
</html>