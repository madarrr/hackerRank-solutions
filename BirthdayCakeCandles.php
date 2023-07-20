<?php
function birthdayCakeCandles($candles) {
    // first i find the biggest number of candles with max function on array given
    // second when the number of candles is > 0 i count the number of this max element in array given
    $nbrCandles=0;
    $maxi=max($candles);
                if($maxi>0)
                {
                $nbrCandles = count(array_keys($candles, $maxi));
                }       
  return $nbrCandles;  
}
?>