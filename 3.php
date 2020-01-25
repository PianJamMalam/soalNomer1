<?php
function count_handshake($total){
  $numberBuild=0;
  $getAtextInTheString  = range(1,$total);
  for($i=0;$i<$total;$i++){
    $newString1  = $getAtextInTheString[$i];
    for($a=$i+1;$a<$total;$a++){
      $newString2  = $getAtextInTheString[$a];
      $newString  = $newString1.",".$newString2."|";
      //echo $newString;
      $numberBuild++;
    }
  }
  return $numberBuild;
}
echo count_handshake(9);
