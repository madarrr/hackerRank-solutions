//Hello all this is the result of hackerrank challenge plusMinus
<?php
function plusMinus($arr) {
    $posi=0;
    $resultp=0;
    $nega=0;
    $resultn=0;
    $nulo=0;
    $resultnn=0;
   $size=count($arr);
for($i=0; $i<$size;$i++)
   {
       if($arr[$i]>0)
       {
        $posi++; 
        //round is a php function to get rounded number 
         $resultp =round($posi/$size,6);   
       }
       elseif($arr[$i]<0)
       {
        $nega++; 
         $resultn =round($nega/$size,6);   
       }
       elseif($arr[$i]===0)
       {
        $nulo++; 
         $resultnn =round(($nulo/$size),6);   
       }
       
   }
        echo number_format($resultp, 6). PHP_EOL;
        //number format permit to format the result to have 6 number after the comma
        echo number_format($resultn, 6). PHP_EOL;
        echo number_format($resultnn, 6). PHP_EOL; 
}
?>