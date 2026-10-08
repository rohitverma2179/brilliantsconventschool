<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

 session_start();
 
/* if($_REQUEST["act"]=="pay_varify")
 {
 	print_r($_SESSION);
	
	print_r($_REQUEST);
 	die();
 }
*/ 


include ("includes/common.php"); 
 init();
 
    
/* ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);  */
  
  
$func_ary=array("save_reg" , "reg_sucess" , "pay_varify" , "reg_mail");
############################################ 
if(fe($_REQUEST[act]))
{
	$_REQUEST[act]($_REQUEST[msg]);
	die();
}
 
 
 
function reg_mail( $st_id =0  )
{
	$R=DIN_ALL($_REQUEST);
	global $SVP;
	$t = new Template("template");
	$t->set_file("MyFileHandle","reg_mail.htm"); 
	gri("student" , " where st_id='$st_id' " , "" , $st_data );
 	
	$ary=json_decode($st_data[st_api_data],1);
	print_r($ary);
	
	
	$t->set_var($st_data);
	$t->parse("MyOutput","MyFileHandle");
	print $t->get("MyOutput");
}
 
 
 
###################################################

function pay_varify()
{
	
	
 //$responce_key="75AEF0FA1B94B3C10D4F5B268F757F11";
	
	$R=DIN_ALL($_REQUEST);
	global $SVP;
 	$jsonData = json_decode($_POST['pay_data'], true);
	$st_api_data=mysql_real_escape_string($_POST['pay_data']);
 	if(gri("student" , " where st_id='$_SESSION[st_id]' " , "" , $st_data ))
	{
 		ei("update student set st_is_pay=1, st_api_data='$st_api_data'  where st_id='$_SESSION[st_id]' "  );
 		$_SESSION["st_id"]="";
 		$_SESSION["CAPTCHAString"]="";
		
		
		
		
		
		
		
		
		
	}
  	reg_sucess();
 	
}





function save_reg()
{
   $R=DIN_ALL($_REQUEST);
   global $SVP;
   
  
 
   if(  strtolower($R["capcha_val"])!=strtolower($_SESSION["CAPTCHAString"])  ||  $R["capcha_val"]==""  )
   {
	   print "<script>  alert('Incorrect captcha, please enter the correct captcha!.');   </script>";
	   die();
	   
   }
 	
	if( !($_SESSION["st_id"]>0  &&  $R[st_name]==$_SESSION["st_name"])  )
	{
		$_SESSION["st_name"]=$R[st_name];
		$_SESSION["st_id"]=ei("INSERT INTO student set 
		`st_name`='$R[st_name]',
		`st_dob`='$R[st_dob]',
		`st_gen`='$R[st_gen]',
		`st_fname`='$R[st_fname]',
		`st_fadhar`='$R[st_fadhar]',
		`st_fcont`='$R[st_fcont]',
		`st_fquali`='$R[st_fquali]',
		`st_femail`='$R[st_femail]',
		`st_foccupation`='$R[st_foccupation]',
		`st_mname`='$R[st_mname]',
		`st_madhar`='$R[st_madhar]',
		`st_mcont`='$R[st_mcont]',
		`st_mquali`='$R[st_mquali]',
		`st_memail`='$R[st_memail]',
		`st_moccupation`='$R[st_moccupation]',
		`st_address`='$R[st_address]',
		`st_class`='$R[st_class]'  ");
		
	}
	
	
	
	
	payment_page();
	
	
}



 ################################################

function payment_page()
{
  
   $R=DIN_ALL($_REQUEST);
   global $SVP;
 	 
	 
	 
	// print_r($_SESSION);
	 //die();
	 
 	//$t = new Template("template");
	//$t->set_file("MyFileHandle","reg_sucess.htm"); 
	
$st_id=$_SESSION["st_id"];
$merchTxnId = uniqId();
$amount = 25.00;
$pay_url="https://caller.atomtech.in/ots/aipay/auth";
$merchId="8952";
$password="Test@123";
$request_key="A4476C2062FFA58980DC8F79EB6A799E";
$responce_key="75AEF0FA1B94B3C10D4F5B268F757F11";
	
	
	
	
	
	
    require_once 'AtomAES.php';
     $atomenc = new AtomAES();
    $curl = curl_init();
      
    $jsondata = '{
	  "payInstrument": {
            "headDetails": {
              "version": "OTSv1.1",      
              "api": "AUTH",  
              "platform": "FLASH"	
            },
            "merchDetails": {
              "merchId": "'.$merchId.'",
              "userId": "",
              "password": "'.$password.'",
			  
              "merchTxnId": "'. $merchTxnId .'",      
              "merchTxnDate": "'.date( "Y-m-d h:i:s" ).'"
            },
            "payDetails": {
              "amount":  "'. $amount .'",
              "product": "NSE",
              "custAccNo": "213232323",
              "txnCurrency": "INR"
            },	
            "custDetails": {
              "custEmail": "sagar.gopale@atomtech.in",
              "custMobile": "8976286911" 
            },
            "extras": {
              "udf1":"'.$st_id.'",

              "udf2":"",
              "udf3":"",
              "udf4":"",
              "udf5":""
            }
	     }  
	   }';
	   
	   

	   
      
    //$encData = $atomenc->encrypt($jsondata, $request_key, $request_key);
    $encData = $atomenc->encrypt($jsondata, $request_key, $request_key);
	curl_setopt_array($curl, array(
      CURLOPT_URL => $pay_url,
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 25,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_SSL_VERIFYHOST => 2,
      CURLOPT_SSL_VERIFYPEER => 1,
      CURLOPT_CAINFO => getcwd() . '/cacert.pem',
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "POST",
      CURLOPT_POSTFIELDS => "encData=".$encData."&merchId=".$merchId."&st_id=$st_id",
      CURLOPT_HTTPHEADER => array(
        "Content-Type: application/x-www-form-urlencoded"
      ),
    ));
   
    $atomTokenId = null;
    $response = curl_exec($curl);   
    $getresp = explode("&", $response); 
    $encresp = substr($getresp[1], strpos($getresp[1], "=") + 1);   
	$decData = $atomenc->decrypt($encresp, $responce_key, $responce_key);
	
	
	//$encData
	$spl_log_data=mysql_real_escape_string($jsondata);
	$spl_date=time();
	ei("INSERT INTO student_pay_log set  `spl_st_id`='$st_id', `spl_log_data`='$spl_log_data', `spl_date`='$spl_date'");
	
	
	
	
    //$decData = $atomenc->decrypt($encresp, '75AEF0FA1B94B3C10D4F5B268F757F11', '75AEF0FA1B94B3C10D4F5B268F757F11');
	// $decData = $atomenc->decrypt($encresp, $responce_key, $responce_key);
	

    //echo $decData;      

    if(curl_errno($curl)) {
        $error_msg = curl_error($curl);
        echo "error = ".$error_msg;
    }      

    if(isset($error_msg)) {
        // TODO - Handle cURL error accordingly
        echo "error = ".$error_msg;
    }   
      
    curl_close($curl);

    $res = json_decode($decData, true);   

    if($res){
      if($res['responseDetails']['txnStatusCode'] == 'OTS0000'){
        $atomTokenId = $res['atomTokenId'];
      }else{
        echo "Error getting data";
         $atomTokenId = null;
      }
    }
 
	
	
	print "<script>   console.log('$atomTokenId');  window.parent.update_check_token(  '$atomTokenId' , '$st_id' );   </script>";
 	
	 
	//$t->parse("MyOutput","MyFileHandle");
   // print $t->get("MyOutput");
	
  
	
}



 ################################################

function reg_sucess()
{
  
   $R=DIN_ALL($_REQUEST);
   global $SVP;

	
	include 'header.php';
	
	$t = new Template("template");
	$t->set_file("MyFileHandle","reg_sucess.htm"); 
 	
	 
	$t->parse("MyOutput","MyFileHandle");
    print $t->get("MyOutput");
	
	include 'footer.php';
 
	
}




 
 



?>
  