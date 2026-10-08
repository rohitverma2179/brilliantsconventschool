<?php


include_once("php7.php");

include_once("functions.php");
include_once("del_functions.php");
include_once("template.inc");
include_once("class.Validator.php");
include_once("htmlMimeMail.php");
include_once("save_function.php");
 
 
 	global $DBHost;
	global $DBUser;
	global $DBPass;
 	global $db_con;
	global $DBMain;
 
 
$AdminName="Webmaster-$Site_Name";
$SUP="D:/vertrigo/www/truck/site/";
$SVP="http://www.brilliantsconvent.com/";
$UploadPath=$SUP."uploads/";
$ViewPath=$SVP."uploads/";
$NRPP=20;
$MetaTitle="Welcome to TruckAdvertiser.com";
$MetaDescription="";
$MetaKeyword="";
$tab_id="";
$Page="home";
$CSIGN="&#163;<gg>";
$site_address="";

 $GMapKey="";
init();
$IsOnline=0;
#########################################
function connectDB()
{    
	
	global $DBHost;
	global $DBUser;
	global $DBPass;
 	global $db_con;
	global $DBMain;
	
	global $w_con;
	$w_con=$db_con=mysql_connect("localhost","brilliantuser","brilliant@321",false);
	mysql_select_db("brilliantdb",$db_con);
	return $db_con;
	
	
	//$con = mysqli_connect("localhost","brilliantuser","brilliant@321","brilliantdb");

}
##########################################
function init()
{ 	
	
	global $SiteName;	
	global $AdminName;	
	global $AdminEmail;	
	global $GMapKey;
	global $VatPrice;
	global $site_address;
	session_start();	
	global $NRPP;    
	connectDB();     
	 
}
?>