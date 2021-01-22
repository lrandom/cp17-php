<?php
if(isset($_COOKIE['school'])){
  setcookie('school','NIIT',time()- (60*60));
}
?>