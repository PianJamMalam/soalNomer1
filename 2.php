<?php
function usernameValidity($username){
  if(preg_match('/^[a-z0-9._]{8,12}$/',$username)){
    return 'true';
  }else{
    return 'false';
}

echo usernameValidity("j0hn5m!th");
?>
