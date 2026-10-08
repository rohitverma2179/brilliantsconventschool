<?php




/*define( "MCRYPT_RIJNDAEL_128" ,  "aes-128-gcm"  );
$ivlen = openssl_cipher_iv_length(MCRYPT_RIJNDAEL_128);
$iv = openssl_random_pseudo_bytes($ivlen);
define( "MCRYPT_MODE_CBC" , $iv  );


function mcrypt_encrypt( $cipher, $aesKey, $content , $mod_cbc, &$aes_4)
{
	//$key should have been previously generated in a cryptographically safe way, like openssl_random_pseudo_bytes
	$content = $content;
	//$cipher = "aes-128-gcm";
	if (in_array($cipher, openssl_get_cipher_methods()))
	{
 		$content = openssl_encrypt($content, $cipher, $aesKey, $options=0, $mod_cbc, $aes_4);
		return $content;
 	}
}
#######################################################################

function mcrypt_decrypt( $cipher, $aesKey, $content , $mod_cbc, &$aes_4)
{
 	if (in_array($cipher, openssl_get_cipher_methods()))
	{
		 return   $original_plaintext = openssl_decrypt($content, $cipher, $aesKey, $options=0, $mod_cbc, $aes_4);
 	}
 }
*/



############################
#php7 deprecated function overloading ends

function split($pattern,$str,$limit=0)
{
	if($limit>0)
	{
		return explode($pattern,$str,$limit);
	}
	else
	{
		return explode($pattern,$str);
	}
}


function mysql_close($conn="")
{
	global $db_con;
	if(!$conn)
	{
		$conn=$db_con;
	}
	return mysqli_close($conn);
}
function mysql_insert_id($conn="")
{
	global $db_con;
	if(!$conn)
	{
		$conn=$db_con;
	}
	return mysqli_insert_id($conn);
}
function mysql_escape_string($str="")
{
	return mysql_real_escape_string($str);
}
function mysql_real_escape_string($str="")
{
	global $db_con;
	if(!$conn)
	{
		$conn=$db_con;
	}
	return mysqli_real_escape_string($conn,$str);
}
function mysql_num_rows($rs)
{
	return mysqli_num_rows($rs);
}
function mysql_fetch_array($rs)
{
	return mysqli_fetch_array($rs);
}

function mysql_fetch_assoc($rs)
{
	return mysqli_fetch_assoc($rs);
}
function mysql_affected_rows($conn="")
{
	global $db_con;
	if(!$conn)
	{
		$conn=$db_con;
	}
	return mysqli_affected_rows($conn);
}
function mysql_error($conn="")
{
	global $db_con;
	if(!$conn)
	{
		$conn=$db_con;
	}
	return mysqli_error($conn);
}
function mysql_query($SQL,$conn="")
{
	global $db_con;
	if(!$conn)
	{
		$conn=$db_con;
	}
	return mysqli_query($conn,$SQL,MYSQLI_STORE_RESULT);
}
function mysql_select_db($db,$conn="")
{
	return mysqli_select_db($conn,$db);
}
function mysql_connect($host,$dbuser,$dbpass,$flag="")
{
	return mysqli_connect($host,$dbuser,$dbpass);
}
#php7 depreciated function overloading ends 

#############################################################
?>