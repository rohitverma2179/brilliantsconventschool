<?php
if(    substr(phpversion() , 0,3) >7.2 )
{
 	include_once("php7_3.php");
}
elseif(phpversion()>=7)
{
 	include_once("php7_3_less.php");
}
  




?>