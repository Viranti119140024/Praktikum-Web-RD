<?php
    function prima($n){
        for($i=1;$i<=$n;$i++){
            $a = 0;
            for($j=1;$j<=$i;$j++){
                if($i % $j == 0){
                    $a++;
                }
            }
            if($a == 2){
                echo $i.' ';
            }
        }
    }

    $x=50;
    echo "Bilangan prima dari 1-50 adalah : <br/>";
    echo "<br/>";
    prima($x);
?>