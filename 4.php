<?php
function findDuplicates($string){
  if(empty($string)){
    return "Harus memasukan parameter dan harus string!";
  }else if(!is_string($string)){
    return "Harus memasukan parameter dan harus string!";
  }else{
    $stringNew  = strtolower(preg_replace("/[^a-zA-Z0-9\W]+/", "", str_replace(' ','',$string)));
    $madamString  = '';
    $returnString = '';
    for($i=0;$i<strlen($stringNew);$i++){
      if(!empty($madamString)){
        if(strpos($returnString, $madamString[0]) !== false){

        }else{
          $karakternya  = $madamString[0];
          $jumlahKarakterTsb  = substr_count($madamString,$karakternya);
          $madamString  = str_replace($karakternya,"",$madamString);
          if($jumlahKarakterTsb ==  '1'){

          }else{
            $returnString .=  $karakternya.": ".$jumlahKarakterTsb."
";
          }
//           $returnString .=  $karakternya.": ".$jumlahKarakterTsb."
// ";
        }
      }else{
        if(strpos($returnString, $stringNew[0]) !== false){

        }else{
          $karakternya  = $stringNew[0];
          $jumlahKarakterTsb  = substr_count($stringNew,$karakternya);
          $madamString  = str_replace($karakternya,"",$stringNew);
          if($jumlahKarakterTsb ==  '1'){

          }else{
            $returnString .=  $karakternya.": ".$jumlahKarakterTsb."
";
          }
        }
      }
    }
    $hitungTitik2Satu = substr_count($returnString,': 1');
    $hitungTitik2 = substr_count($returnString,':');
    if($hitungTitik2Satu  == $hitungTitik2){
      return "Tidak ada karakter yang berulang!";
    }else{
      return $returnString;
    }
  }
}
echo findDuplicates("adobe");
?>
