<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php

function cetak($jml){
     for($i=0;$i<$jml;$i++){
        for($j=0;$j<$jml;$j++){
            if($j==$i)
            {
                echo '*';
            }
            else if($j==$jml-($i+1))
            {
                echo '*';
            }
            else
            {
                echo "&nbsp=&nbsp";
            }
        }
        echo '<br>';
    };    
};
 cetak(7);
?>


</body>
</html>
