<?php

function returnAlamat($name,$age){
  $array  = array("name"=>$name,"age"=>$age,"address"=>"Jalan Caringin Raya, Depok, Jawa Barat","hobbies"=>array("sepeda","bulu tangkis"),"is_married"=>false,"list_school"=>array("name"=>"SMAN 5 DEPOK","year_in"=>"2017","year_out"=>"2020","major"=>NULL,"skills"=>array("skill_name"=>"php","level"=>"advanced"),"interest_in_coding"=>true));
  return json_encode($array,true);
}

echo returnAlamat('Alfian', 17);
