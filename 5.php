<?php
function findHighestProfit($array){
  $tertinggi  = max($array);
  $terendah   = min($array);
  if(array_keys($array,$tertinggi) > array_keys($array,$terendah)){
    return $tertinggi-$terendah;
  }else{
    return 'Tidak bisa mendapatkan profit pada hari-hari ini';
  }
}

echo findHighestProfit([33, 29, 11, 3]);
