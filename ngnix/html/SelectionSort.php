<?php 
$Arr = array(20, 2,5,10,100);
$N = 5;
$temp;

echo "elelement ini adalah </br>";
    for($i = 0; $i<$N; $i++) {

        for ($j= $N-1; $j>$i; $j--) {
            if($Arr[$j] < $Arr[$j-1]) {

                $temp  = $Arr[$j];
                $Arr[$j] = $Arr[$j-1];
                $Arr[$j-1] = $temp;


            }

        }

    }

    for ($j = 0; $j<$N; $j++) {

        echo " <br> Elemen terkecil adalah :{$Arr[$j]} </br> ";
    }

?>