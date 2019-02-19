<?php
//水仙花
//for($q=1;$q<=9;$q++){
//    for($w=0;$w<=9;$w++){
//      for($e=0;$e<=9;$e++){
//        if($q*$q*$q + $w*$w*$w + $e*$e*$e ==
//         100*$q + 10*$w + $e){
//           echo "$q $w $e "."<p>";
//        }
//      }
//    }
//}

//斐波那契数列
function Fibonacci($n){

    if ($n <= 0) {

        return 0;

    } elseif ($n == 1) {

        return 1;

    } else {

        return Fibonacci($n - 1) + Fibonacci($n - 2);

    }

}
for($i=1;$i<=50;$i++){

    echo  Fibonacci($i);

    echo "<br/>";

}
?>