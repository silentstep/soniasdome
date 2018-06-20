<?php

class common
{
  static function isloggedIn(){
    $check = array("id", "username", "fname", "lname");
    return (session::check($check)) ? true : false;
  }
}

?>
