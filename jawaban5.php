<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	function minmax($array){
		$jum =count($array);
		for($i=0; $i<$jum; $i++){
		        for($j=$i+1; $j<$jum; $j++)
		        {
		            if($array[$i] > $array[$j])
		            {
		                $temp    	= $array[$i];
		                $array[$i] 	= $array[$j];
		                $array[$j] 	= $temp;
		            }
		        }
		}
		$arr[0]			= $array[0];
		$arr[$jum-1] 	= $array[$jum-1];

		return $arr;
	}

	$data=['h','g','a','b','d','f'];
	print_r(minmax($data));

?>




</body>
</html>