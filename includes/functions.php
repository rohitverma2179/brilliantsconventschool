<?php
error_reporting(0);
$ColDateAry=array("ma_date","mk_date","bt_date","ct_date","cht_date","chh_date","ac_date","dlt_id","sus_date","com_date","mem_date","mem_ldt","cart_date","ba_date","ban_date","news_date","mod_date","ba_start_date","ba_expiry_date","ad_date","sp_date","trc_date","cou_start_date","cou_expiry_date" ,"pl_date" , "pp_date" , "msg_date","inv_date" );
$ColStateAry=array();
$ColCountryAry=array("");
$ColGenderAry=array();
$ColYNAry=array("cat_show_tab","cat_show_box");
$ColNumberAry=array();
$ColCurrencyAry=array("cart_total","ci_total","ci_price","cart_cou_amount","cart_grand_total","trc_price","cat_display_price" , "pl_price" , "trc_pricr" , "inv_amt" , "inv_g_amt" , "inv_g_vat" , "inv_amount" , "inv_vat");
$ColCheckedAry=array();
$ColFileSizeAry=array();
####################################




#########################################

 //view_invoice( $msg="")
 
 function detail_invoice(  $inv_id=""   )
 {
	$R=DIN_ALL($_REQUEST);
	global $SAP;
	global $PgHead;
	global $site_address;
	$PgHead="Truck Management";
	$t = new Template("templates");

	$t->set_file("MyFileHandle","invoice_datail.htm");
	if($R[pdf]==1 || $inv_id>0 )
		$t->set_file("MyFileHandle","invoice_datail_pdf.htm");
	
	
	if($inv_id>0)
		$cond=" and inv_id='$inv_id'";
	else
		$cond=" and inv_number='$R[inv_number]'";	
	
	gri("invoice","where 1  $cond  GROUP BY  inv_number","distinct (inv_number) as inv_number , sum(inv_amt) as inv_amt  , sum(inv_amt - inv_vat) as inv_g_amt  ,  sum(inv_vat) inv_g_vat , inv_athcode ",$data);
	$SQL1="SELECT * , (inv_amt - inv_vat) as inv_amount  , inv_athcode    FROM  invoice  where 1    $cond ";
	if(eq($SQL1,$rs1 ))
	{
		
		
		
		while($inv_data=mfa($rs1))
		{
			
			$inv_date=$inv_data[inv_date];
			$invoice_data.=get_invoice_sorce(  $inv_data  );
		}
		
		$t->set_var(array("invoice_data"=>$invoice_data, "inv_date"=>date( "jS M Y"  ,$inv_date )  ));
	}
	
	
	
 	$t->set_var(array(
					  "inv_g_tot"=>$data["inv_amt_"],
					  "inv_number"=>$data[inv_number],	
					  "site_address"=>nl2br($site_address),
					 
					  "inv_g_amt_"=>$data["inv_g_amt_"],
					  "inv_g_vat_"=>$data["inv_g_vat_"],
					  "mem_address2"=>$_REQUEST[mem_address2],
					   "mem_address1"=>$_REQUEST[mem_address1],
	     			  "SAP"=>$SAP,
	     			  "msg"=>$msg,
					"mem_fname"=>$_REQUEST[mem_fname],
					"mem_lname"=>$_REQUEST[mem_lname],
					"mem_postcode"=>$_REQUEST[mem_postcode],
					"mem_county"=>$_REQUEST[mem_county],
					"mem_city"=>$_REQUEST[mem_city],

					  
					  "inv_athcode"=>$data[inv_athcode],
			));
			
			


	$t->parse("MyOutput","MyFileHandle");
	
	if($R[pdf]==1)
	{
		ob_start(); 
		$t->p("MyOutput");
		$file_data=ob_get_contents();
		ob_clean(); 
		
		require_once("./dompdf/dompdf_config.inc.php");
		$old_limit = ini_set("memory_limit", "100M");
		$dompdf = new DOMPDF();
		//$data=stripslashes($t->get("MyOutput"));
		
		$file_data=stripslashes($file_data);
		$dompdf->load_html($file_data);
		$dompdf->set_paper('letter', 'portrait');
		$dompdf->render();
		
		$file_name="Invoice".date( "M-Y"  ,$inv_date ).".pdf";
		$dompdf->stream($file_name);
		

	
	}
	else
	{
		if($inv_id>0)
			return $t->get("MyOutput");
		else	
		{
			
			parse_index($t->get("MyOutput") , 0 , 1);
		}	
	}	
 
 
 }



########################################
function get_invoice_sorce(  $data  )
{
	global $SVP;

	$R=DIN_ALL($_REQUEST);
	$t = new Template("templates");
	
	if($R[pdf]==1)
		$t->set_file("MyFileHandle","view_inv_sorce_pdf.htm");
	else
		$t->set_file("MyFileHandle","view_inv_sorce.htm");
 	
	gri("trucks, member, make, model","WHERE trc_mem_id=mem_id AND trc_mk_id=mk_id AND trc_mod_id=mod_id AND trc_id='$data[inv_trc_id]' ","",$trc);
			
		if(gri("axle_configuration","where ac_id='$trc[trc_ac_id]'","",$ax_data))
			$trc[trc_ac_id]=$ax_data[ac_title];
		else
			$trc[hide_trc_ac_id]="none";	
		if(get_upload_info($trc[trc_id],"truck","main",0,$up)>0)
		{
		   $trc=array_merge($trc,$up);
		}
		if($trc[trc_price]<=0 && $trc[trc_price_is_poa]==1)
			$trc[trc_price_]="&#163;POA";
		
		$trc[trendstrat]="";
		if($trendstrat==3)
		{
			$trc[trendstrat]="</tr><tr>";
			$trendstrat=2;
		}	
		else
			$trendstrat++;			
		
		$trc[trc_date]=date("d/m/Y", $trc[trc_date]);
		$t->set_var($trc);
	
	
	
	$_REQUEST[mem_address1]=$trc[mem_address1];
	$_REQUEST[mem_address2]=$trc[mem_address2];
	$_REQUEST[mem_fname]=$trc[mem_fname];
	$_REQUEST[mem_lname]=$trc[mem_lname];
	$_REQUEST[mem_postcode]=$trc[mem_postcode];
	$_REQUEST[mem_county]=$trc[mem_county];
	$_REQUEST[mem_city]=$trc[mem_city];


	
	$t->set_var($data);
	$t->set_var(array(
	     			  "SAP"=>$SAP,
					  "SVP"=>$SVP,
	     			  "msg"=>$msg,
					
			));
	$t->parse("MyOutput","MyFileHandle");
	return ($t->get("MyOutput"));
}



############################################


function get_invoice_list(  $mem_id , $date  )
{

	$R=DIN_ALL($_REQUEST);
	$t-= new Template("templates");
	$t->set_file("MyFileHandle","get_invoice_list.htm");
	
	get_se_time(time() , $ms_date,$me_date);
	
	$SQL="SELECT * FROM  invoice , trucks ,make,model  WHERE inv_mem_id='$mem_id' AND trc_mk_id=mk_id AND  trc_mod_id=mod_id   in_date BETWEEN $ms_date AND $me_date ";
	eq($SQL,$rs);
	$t->set_block("MyFileHandle","AccessBlockList","ABlock");
	while($data=mfa(rs))
	{
		$t->set_var($data);
		$t->Parse("ABlock","AccessBlockList",true);
	}
	$t->parse("MyOutput","MyFileHandle");
	$t->get("MyOutput");
}

########################################

function ad_detail($msg="" , $preview="")
{
  
   
    global $SVP;
	global $SiteName;	
	global $SiteTitle;
	global $SiteDescription;
	global $SiteKeyword;
	global $GMapKey;
	
	$R=DIN_ALL($_REQUEST);
	# Increase  popular count
	func_increase_pop($R[ad_id]);
	
	$t = new Template($SUP."templates");
	
	if($preview==1)
		$t->set_file("MyFileHandle","preview_ad_detail.htm");
	else
		$t->set_file("MyFileHandle","ad_detail.htm");



	$trc=get_truck_info($R[ad_id]);	
	if($trc[trc_price]<=0 && $trc[trc_price_is_poa]==1)
		$trc[trc_price_]="&#163;POA";
	
	//if($trc[trc_euro_level]<=0    )
		//$trc[trc_euro_level]="";
	//else
	//$trc[trc_euro_level]="" $trc[trc_euro_level] ;	
	
	# advert does not use account location
	if(   $trc[trc_is_use_acount_location]==0  )
	{
		
		//{mem_address1},  {mem_address2}, {mem_city}, {mem_county}, {mem_postcode}
		$trc[mem_address1]=$trc[trc_address1];
		$trc[mem_address2]=$trc[trc_address2];
		$trc[mem_city]=$trc[trc_city];
		$trc[mem_county]=$trc[trc_county];
		$trc[mem_postcode]=$trc[trc_postcode];
		
	}	
	
	
	//print_r($trc);
	
	
	$t->set_var ($trc);
	
	if($R[contact_name]=="" && $_SESSION[MID]!=$trc[mem_id])
	{
	  gri("member","WHERE mem_id='$_SESSION[MID]'","mem_fname,mem_lname, mem_email, mem_mobile",$mem);
	  $R[contact_name]=$mem[mem_fname]." ".$mem[mem_lname];
	  $R[contact_email]=$mem[mem_email];
	  $R[contact_phone]=$mem[mem_mobile];
	}
	$t->set_var($R);
	if($msg!="")
	{
		$show_tab="dealerinfo_ad";
	}
	
	$i=1;
	$sep=",";
	$SQL="SELECT * FROM  uploads WHERE up_s_id='$trc[trc_id]' AND up_s_type ='truck' ORDER BY up_s_sub_type DESC";
	$tot=eq($SQL,$rs);	
	$t->set_block("MyFileHandle","AccessBlockTruckPicture1List","ABlockList1");
	$t->set_block("MyFileHandle","AccessBlockTruckPicture2List","ABlockList2");
	while( $data=mfa($rs)   )
	{
		if($tot==$i)	$sep="";
		$data[sep]=$sep;		
		
		$t->set_var($data);
		$i++;
		$t->parse("ABlockList1","AccessBlockTruckPicture1List",true);
		$t->parse("ABlockList2","AccessBlockTruckPicture2List",true);
	}
	
	
	
	//print_r($_SESSION[MID]);
	
	if($_SESSION[MID])
	{	
		$watch_list_action=$SVP."ad_detail.php?act=add_watchlist&watch_trc_id=$trc[trc_id]  ";
		$target=" target='submitiframe'";
	
	
	}
	else
		$watch_list_action="javascript: alert('Please login to add this ad in his watchlist.'); 
		document.getElementById('r_trc_id').value='$trc[trc_id]'; document.getElementById('login_email').focus();    ";
	
	
/*		if($trc[trc_price]<=0 && $trc[trc_price_is_poa]==1)
		$trc[trc_price_]="&#163;POA";
*/
	
	
	$t->set_var (array( "SVP"=>$SVP,
						"msg"=>$msg,
						"show_tab"=>$show_tab,
						"watch_list_action"=>$watch_list_action,
						"target"=>$target,
						"GMapKey"=>$GMapKey,
		                ));

	$t->parse("MyOutput","MyFileHandle");
	
	
	if($_REQUEST["return"]==1)
		return $t->get("MyOutput");
	else	
		parse_index($t->get("MyOutput"));

}
#################################################3




function get_truck_info($trc_id)
{
	if($trc_id==0)
	{
	  return 0;
	}
    gri("trucks, member, make, model","WHERE trc_mem_id=mem_id AND trc_mk_id=mk_id AND trc_mod_id=mod_id AND trc_id='$trc_id'","",$trc);
	$trc[TRK1]="<!--"; $trc[TRK2]="-->";
	if(get_upload_info($trc[trc_id],"truck","main",0,$up)>0)
	{
	   $trc=array_merge($trc,$up);
	   $trc[TRK1]=""; $trc[TRK2]="";
	}
	if($trc[trc_reg_type]==3)
	{
	   $trc[trc_regno]="Vehicle currently has private plate";
	}
	elseif($trc[trc_reg_type]==2)
	{
		$trc[trc_regno]=str_replace(substr($trc[trc_regno],0,2),"* * ",$trc[trc_regno]);
	}else{
		$trc[trc_regno]=str_replace(substr($trc[trc_regno],1,3),"* * * ",$trc[trc_regno]);
	}
	$trc[SMIL1]="<!--"; $trc[SMIL2]="-->";
	if($trc[trc_show_mileage]==1)
	{
	 	$trc[SMIL1]=""; $trc[SMIL2]="";
	}
	$trc[PHO1]="<!--"; $trc[PHO2]="-->";
	if($trc[trc_show_phone]==1)
	{
	 	$trc[PHO1]=""; $trc[PHO2]="";
	}
	$trc[EML1]="<!--"; $trc[EML2]="-->";
	if($trc[trc_show_email]==1)
	{
	 	$trc[EML1]=""; $trc[EML2]="";
	}
	if(gri("axle_configuration","WHERE ac_id='$trc[trc_ac_id]' AND ac_active='1'","ac_title",$ac)>0)
	{
		$trc[ac_title]=$ac[ac_title];
	}
	if(gri("chassis_type","WHERE cht_id='$trc[trc_cht_id]' AND cht_active='1'","cht_title",$cht)>0)
	{
		$trc[cht_title]=$cht[cht_title];
	}
	if(gri("chassis_height","WHERE chh_id='$trc[trc_chh_id]' AND chh_active='1'","chh_title",$chh)>0)
	{
		$trc[chh_title]=$chh[chh_title];
	}
	if(gri("body_type","WHERE bt_id='$trc[trc_bt_id]' AND bt_active='1'","bt_title",$bt)>0)
	{
		$trc[bt_title]=$bt[bt_title];
	}
	if(gri("cab_type","WHERE ct_id='$trc[trc_ct_id]' AND ct_active='1'","ct_title",$ct)>0)
	{
		$trc[ct_title]=$ct[ct_title];
	}
	if(gri("suspension","WHERE sus_id='$trc[trc_sus_id]' AND sus_active='1'","sus_title",$sus)>0)
	{
		$trc[sus_title]=$sus[sus_title];
	}
	
	$trc[mem_fname]=ucwords($trc[mem_fname]);
	$trc[mem_lname]=ucwords($trc[mem_lname]);
	$trc[mem_company]=ucwords($trc[mem_company]);
	
	$trc[LOGO1]="<!--"; $trc[LOGO2]="-->";
	if(get_upload_info($trc[trc_mem_id],"member","",0,$up)>0)
	{
	 list($width, $height, $orig_img_type, $img_sizes) = @getimagesize($up[up_upload_path]);
		 $up[up_width]=$width;
	   if($width>250)
	   {
	   	$up[up_width]=250;
	   }
	   $trc=array_merge($trc,array_prefix($up,"seller_"));
	   $trc[LOGO1]=""; $trc[LOGO2]="";
	}
	if($trc[mem_type]==0)
	{
		$trc[mem_heading]="Private Seller - ".$trc[mem_fname]." ".$trc[mem_lname];
	}else{
		$trc[mem_heading]="Trade Seller - ";
		if($trc[mem_company]!="")
		{
			$trc[mem_heading].=$trc[mem_company];
		}else{
			$trc[mem_heading].=$trc[mem_fname]." ".$trc[mem_lname];
		}
	}
	if($trc[mem_address2]!="")
	{
		$trc[mem_address_full]=$trc[mem_address1]."<br>".$trc[mem_address2];
	}
	if($trc[mem_type]==0)
	{
		$trc[contact1_image]="images/mobile_icon.jpg";
		$trc[contact1]=$trc[mem_mobile];
		$trc[contact1_alt]="Mobile Number";
		$trc[contact2_image]="images/phone_icon.png";
		$trc[contact2]=$trc[mem_phone];
		$trc[contact2_alt]="LandLine Number";
	}else{
		$trc[contact1_image]="images/mobile_icon.jpg";
		$trc[contact1]=$trc[mem_phone];
		$trc[contact1_alt]="LandLine Number";
		$trc[contact2_image]="images/phone_icon.png";
		$trc[contact2]=$trc[mem_mobile];
		$trc[contact2_alt]="Mobile Number";		
	}
	
	$trc[show_contact]="display:none"; 
	if($trc[contact2]!="")
	{
		$trc[show_contact]=""; 
	}
	$trc[show_fax]="display:none";
	if($trc[mem_fax]!="")
	{
		$trc[show_fax]="";
	}
	
	if($trc[trc_euro_level]<=0)
		$trc[trc_euro_level]="";
	else
		$trc[trc_euro_level]="Euro " .$trc[trc_euro_level];	
	
	
	
	return $trc;
}
##############################################33
function  make_truck_count($mk_id=0)
{
	$con="";
	if($mk_id>0)
	{
	   $con=" AND mk_id='$mk_id'";
	}
	$SQL="SELECT * FROM make WHERE 1 $con";
	eq($SQL,$rs);
	while($data=mfa($rs))
	{
	  $count=grc("trucks","WHERE trc_mk_id='$data[mk_id]' AND trc_active='1'");
	  $SQL1="UPDATE make SET
	  		 mk_truck_count='$count'
			 WHERE mk_id='$data[mk_id]'";
		eq($SQL1,$rs1);
	}

}
###################################################

function get_advert_matrix($ary)
{

	if(sizeof($ary)==0)
	{
		return "";
	}
	
	global $SVP;
	$t=new Template("templates");
	$t->set_file("MyFileHandle","advert_matrix.htm");
	$t->set_block('MyFileHandle', 'AccessBlockAdvertMatrixList', 'ABlockList');
	foreach($ary as $k=>$v)
	{
		//$content=
		$t->set_var(array("content"=>get_advert_source($v)));
		$t->Parse('ABlockList', 'AccessBlockAdvertMatrixList', true);		
		
	}
	$t->parse("MyOutPut","MyFileHandle");
	return $t->get("MyOutPut");
}







#######################################################
function get_advert_matrix1($ary)
{

	if(sizeof($ary)==0)
	{
		return "";
	}
	
	global $SVP;
	$m=0;
	$cols=2;
	$cols_=$cols-1;
	$t=new Template("templates");
	$t->set_file("MyFileHandle","advert_matrix.htm");
	$t->set_block('MyFileHandle', 'AccessBlockAdvertMatrixList', 'ABlockList');

	$i=0;
	
	foreach($ary as $k=>$v)
	{
		$content=get_advert_source($v);
		$t->set_var(array("advert_matrix_".$i%$cols=>$content,"m_".$m%$cols=>$m));
		if($v>0)
		{	$style_txt="";
			if($content!="")
			{
				$style_txt.="searchBox";
			}
			$t->set_var(array("show_".$m=>$style_txt,));
		}
		 
		if($i%$cols==$cols_ AND $i>0)
		{
			$t->Parse('ABlockList', 'AccessBlockAdvertMatrixList', true);		
		}
		$i++;
		$m++;
		
	}
	
	$n=$i;
	if($i>0 AND $i%$cols!=$cols AND $i%$cols!=0)
	{
		$cat_class="";
		
		for($j=$i;$i>0;$j++)
		{
			$t->set_var(array("advert_matrix_".$j%$cols=>"","m_".$m%$cols=>$m,));
			if($j%$cols==$cols_)
			{
				$t->set_var(array("show_".$m=>"",));
				$t->Parse('ABlockList', 'AccessBlockAdvertMatrixList', true);	
				$i=0;
			}
			$m++;
		}
	}
	//hide unused columns in a row
	if($n%$cols>0 && $n%$cols<$cols)
	{		
		for($k=$n;$k<$m;$k++)
		{			
			$t->set_var(array("show_".$k=>"","class_".$k=>"",   "hide_col".$k=>"none"    ));
		}
		
	}
	$t->set_var(array(	"title"=>$title,
						"SVP"=>$SVP,
						));
	$t->parse("MyOutPut","MyFileHandle");
	return $t->get("MyOutPut");
}
#####################################

function get_advert_source($trc_id)
{
	global $SVP;
	$t=new Template("templates");
	$t->set_file("MyFileHandle","advert_source.htm");
	gri("trucks, member, make, model","WHERE trc_mem_id=mem_id AND trc_mk_id=mk_id AND trc_mod_id=mod_id AND trc_id='$trc_id' AND trc_active='1'","",$trc);
	
	//print_r($trc);
	

	if(get_upload_info($trc[trc_id],"truck","main",0,$up)>0)
	{
	   $trc=array_merge($trc,$up);
	}
	
	if(gri("cab_type","where ct_id='$trc[trc_ct_id]'","",$cab_data))
		$trc[trc_ct_id]=$cab_data[ct_title];
	else
		$trc[hide_trc_ct_id]="none";	
	
	if(gri("axle_configuration","where ac_id='$trc[trc_ac_id]'","",$ax_data))
		$trc[trc_ac_id]=$ax_data[ac_title];
	else
		$trc[hide_trc_ac_id]="none";	

	if($trc[trc_weight])
		$trc[trc_weight]=$trc[trc_weight]." Kg GVW";	
	else
		$trc[hide_trc_weight]="none";		
	
	
	if($trc[mem_type]==0)
	{
		$trc[mem_type]="Private";
		$trc[hide_logo_thumb]="none";	
		
		$trc[mem_company]=$trc[mem_fname]."&nbsp;".$trc[mem_lname];
	}	
	else
	{
		$trc[mem_type]="Trade";
	
		if(get_upload_info($trc[trc_mem_id],"member","",0,$up))
			$trc[trade_logo_thumb]=$up[up_view_path_thumb];
		else
			$trc[hide_logo_thumb]="none";
	
	}	
	
		
	if($trc[trc_reg_type]==3)
	{
	   $trc[trc_regno]="Vehicle currently has private plate";
	}
	elseif($trc[trc_reg_type]==2)
	{
		if($trc[trc_regno]=="")
			$trc[hide_trc_regno]="none";
		else
			$trc[trc_regno]=str_replace(substr($trc[trc_regno],0,2),"* * ",$trc[trc_regno]);
	}
	else 
	{
		if($trc[trc_regno]=="")
			$trc[hide_trc_regno]="none";
		else
			$trc[trc_regno]=str_replace(substr($trc[trc_regno],1,3),"* * * ",$trc[trc_regno]);
	}
	
		
	if($trc[trc_price]<=0 && $trc[trc_price_is_poa]==1)
		$trc[trc_price_]="&#163;POA";
					
	
	
	$t->set_var($trc);
	$t->set_var(array("SVP"=>$SVP,));
	$t->parse("MyOutPut","MyFileHandle");
	return $t->get("MyOutPut");
}

################################################

function BankAccountValidation($AccountNumber, $SortCode)
{
	  gsa($sa);
      //Build the url
      $url = "http://services.postcodeanywhere.co.uk/BankAccountValidation/Interactive/Validate/v2.00/xmla.ws?";
      $url .= "&Key=" . urlencode($sa[sa_ukaddress_api_key]);
      $url .= "&AccountNumber=" . urlencode($AccountNumber);
      $url .= "&SortCode=" . urlencode($SortCode);
	//echo $url;
      //Make the request
      $data = simplexml_load_string(file_get_contents($url));

      //Check for an error
      if ($data->Columns['Items']==4 && $data->Columns->Column['Name']=='Error')
         {
              throw new exception ($data->Rows->Row['Description']);
         }

      //Create the response
      foreach ($data->Rows->children() as $row)
         {
              $rowItems="";
              foreach($row->attributes() as $key => $value)
                  {
                      $rowItems[$key]=strval($value);
                  }
              $output[] = $rowItems;
         }

      //Return the result
      return $output;

      //FYI: The output is an array of key value pairs (e.g. result[0]["IsCorrect"]), the keys being:
      //IsCorrect
      //IsDirectDebitCapable
      //StatusInformation
      //CorrectedSortCode
      //CorrectedAccountNumber
      //IBAN
      //Bank
      //BankBIC
      //Branch
      //BranchBIC
      //ContactAddressLine1
      //ContactAddressLine2
      //ContactPostTown
      //ContactPostcode
      //ContactPhone
      //ContactFax
      //FasterPaymentsSupported
      //CHAPSSupported

}
#############################################################

function get_UKAddress_By_AddressId($id)
{
	  gsa($sa);
      //Build the url
      $url = "http://services.postcodeanywhere.co.uk/PostcodeAnywhere/Interactive/RetrieveById/v1.00/xmla.ws?";
      $url .= "&Key=" . urlencode($sa[sa_ukaddress_api_key]);
 	  $url .= "&Id=" . urlencode($id);
      //Make the request
      $data = simplexml_load_string(file_get_contents($url));
      //Check for an error
      if ($data->Columns['Items']==4 && $data->Columns->Column['Name']=='Error')
         {
              throw new exception ($data->Rows->Row['Description']);
         }

      //Create the response
      foreach ($data->Rows->children() as $row)
         {
              $rowItems="";
              foreach($row->attributes() as $key => $value)
                  {
                      $rowItems[$key]=strval($value);
                  }
              $output[] = $rowItems;
         }

      //Return the result
      return $output;

      //FYI: The output is an array of key value pairs (e.g. result[0]["Id"]), the keys being:
//		[Udprn] => 1000334039
//		[Company] => Abbey Office Supplies
//		[Department] => 
//		[Line1] => Pennyfarthing House
//		[Line2] => 560 Brighton Road
//		[Line3] => 
//		[Line4] => 
//		[Line5] => 
//		[PostTown] => South Croydon
//		[County] => 
//		[Postcode] => CR2 6AW
//		[Mailsort] => 79122
//		[Barcode] => (CR26AW3ET)
//		[Type] => SmallBusiness
//		[DeliveryPointSuffix] => 3E
//		[SubBuilding] => 
//		[BuildingName] => Pennyfarthing House
//		[BuildingNumber] => 560
//		[PrimaryStreet] => Brighton Road
//		[SecondaryStreet] => 
//		[DoubleDependentLocality] => 
//		[DependentLocality] => 
//		[PoBox] => 


}

################################################
function get_UKAddress_By_Postcode($SearchTerm)
{
	 gsa($sa);
	 
	 $PreferredLanguage="English";
	 $Filter="None";
	 
      //Build the url
      $url = "http://services.postcodeanywhere.co.uk/PostcodeAnywhere/Interactive/Find/v1.10/xmla.ws?";
      $url .= "&Key=" . urlencode($sa[sa_ukaddress_api_key]);
      $url .= "&SearchTerm=" . urlencode($SearchTerm);
      $url .= "&PreferredLanguage=" . urlencode($PreferredLanguage);
      $url .= "&Filter=" . urlencode($Filter);
      $url .= "&UserName=" . urlencode($sa[sa_ukaddress_api_username]);

      //Make the request
      $data = simplexml_load_string(file_get_contents($url));

      //Check for an error
      if ($data->Columns['Items']==4 && $data->Columns->Column['Name']=='Error')
         {
              throw new exception ($data->Rows->Row['Description']);
         }

      //Create the response
      foreach ($data->Rows->children() as $row)
         {
              $rowItems="";
              foreach($row->attributes() as $key => $value)
                  {
                      $rowItems[$key]=strval($value);
                  }
              $output[] = $rowItems;
         }

      //Return the result
      return $output;

      //FYI: The output is an array of key value pairs (e.g. result[0]["Id"]), the keys being:
      //Id
      //StreetAddress
      //Place

}
#########################################
function get_zipcode_search($zipcode,$range)
{
	$zipcodes = array($zipcode);
	 // zip code distance formula
	if (gri("zipcode","WHERE zip_code='".$zipcode."'","",$zip) >0)
	{

		$start_lat=$zip[zip_latitude];
		$start_long=$zip[zip_longitude];

		$lat_range = $range/69.172;
        $lon_range = abs($range/(cos(($start_lat*3.141592653589/180)) * 69.172));
		
		$min_lat=$start_lat-$lat_range;
		$max_lat=$start_lat+$lat_range;
		$min_long=$start_long-$lon_range;
		$max_long=$start_long+$lon_range;
		$sql_zipc="SELECT distinct zip_code FROM zipcode WHERE zip_latitude <=".$max_lat." AND zip_latitude >=".$min_lat." AND zip_longitude >=".$min_long." AND zip_longitude <=".$max_long." order by zip_code";

		$numzip = eq($sql_zipc,$rs_zipc);		
		if ($numzip > 0)
		{
			 while($inv_zip = mfa($rs_zipc))
			 {
				   //array_push($zipcodes,$temp5[zipcode]);
				   array_push($zipcodes,$inv_zip[zip_code]);
			 }			
		 }
	 }
	 return $zipcodes;
}

##################################
function get_banner_size($bl_id, $banner_count)
{
	
  	gri("banner_location","WHERE bl_id='$bl_id'","",$bl);
	$height=$bl[bl_height];
	$width=$bl[bl_width];
	$sep=0;
	if($banner_count==2)
	{
	  //for half banner reduce 5px space for separator between two banners
	  $sep=5;
	}elseif($banner_count==3)
	{
	  //for quater banner reduce 10px space for separator between three banners
	  $sep=10;
	}
	if($bl[bl_partition]=="horizontal")
	{
		$width=$width-$sep;
		$width=floor($width/$banner_count);
	}else{
		$height=$height-$sep;
		$height=floor($height/$banner_count);
	}
	$banner_size=array("width"=>$width,"height"=>$height,"pixel"=>$bl[bl_pixel],"bkey"=>$bl[bl_key]);
	return $banner_size;
}
######################################
function get_banner($table,$table_con,&$ban_list,$thumb=0)
{
   $banner="";
   $bwidth=0;
   $bheight=0;
   
   if(gri($table,$table_con,"",$ba))
   	{
		if($ban_list!="")
		{
			$ban_list.=",".$ba[ba_id];
		}else{
			$ban_list=$ba[ba_id];
		}
		if($ba[ba_type]=="1")
		{
			$banner_size=get_banner_size($ba[ba_bl_id], $ba[ba_group]);
			$bwidth=$banner_size[width];
			$bheight=$banner_size[height];
			if(get_upload_info($ba[ba_id],'banner',$ba[bl_key],0,$up_img)>0)
			{
				$img_path=$up_img[up_view_path];
				if($thumb==1)
				{
					$img_path=$up_img[up_view_path_thumb];				   
				}	
				 list($orig_w, $orig_h, $orig_img_type, $img_sizes) = @getimagesize($up_img[up_view_path]);
				 $bheight= $orig_h;
				 $bwidth=$orig_w;
				
				$banner="<img src=\"$img_path\" border=\"0\" width=\"$bwidth\" height=\"$bheight\">";		
			}
			
		}
		elseif($ba[ba_type]=="0")
		{
			$bwidth=$ba[ba_flash_width];
			$bheight=$ba[ba_flash_height];
			get_upload_info($ba[ba_id],'banner',$ba[bl_key],0,$up_flsah);
			$banner='<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0"  width='.$bwidth.' height='.$bheight.'>
  <param name="movie" value="'.$up_flsah[up_view_path].'">
  <param name="quality" value="high">
  <embed src="'.$up_flsah[up_view_path].'" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash"  width='.$ba[ba_flash_width].' height='.$ba[ba_flash_height].'></embed>
</object>';
		}
		elseif($ba[ba_text]!="")
		{		
				$bwidth=$ba[bl_width];
				$bheight=$ba[bl_height];
				$banner=$ba[ba_text];
		}
		
		if($ba[ba_url]!="")
		{
			$target="_blank";
			if(strstr($ba[ba_url],"JavaScript"))
			{
				$target="";
			}
			$banner="<a href=\"$ba[ba_url]\" target=\"$target\">$banner</a>";
		}	
		$SQL="UPDATE banner SET ba_used=ba_used+1 WHERE ba_id='$ba[ba_id]'";
		eq($SQL,$rs);
		
	}
	$banner_arr=array("banner"=>$banner,"width"=>$bwidth,"height"=>$bheight);
	return $banner_arr;
}
###################################################
function banner_management($ban_loc,$thumb=1)
{
	global $SVP;
	$R=DIN_ALL($_REQUEST);
	$dt=time();	
	$banner="";
	$con="";
	
	if($R[dl_id]>0)
	{
	  $con.=" AND (ba_dl_id='$R[dl_id]' OR ba_dl_id='0')";
	}
	if($R[zipcode]>0)
	{
	  $con.=" AND (ba_zip_code='$R[zipcode]' OR ba_zip_code_all='1')";
	}
	if($R[make]>0)
	{
	  $con.=" AND (ba_mak_id='$R[make]' OR ba_make_all='1')";
	}
	$table="banner,banner_location";
	$table_con="WHERE ba_bl_id=bl_id AND bl_key='$ban_loc' AND ba_active='1' AND ((ba_start_date<='$dt' AND ba_expiry_date>='$dt') || ba_expiry_date<=0) $con ORDER BY rand()";
	
	$ban_content=get_banner($table,$table_con,$ban_list,$thumb);
	
	return $ban_content[banner];
}

#########################################

function format_file_size($size=0)
{
	$up_size=round($size,2)."KB";
	if($size>=1024)
	{
	    $up_size=round(($size/1024),2)."MB";
	}
	return $up_size;
}
#####################################################
function make_htaccess($v)
{
	$v=strtolower($v);
	$v_="";
	$allow=array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z","0","1","2","3","4","5","6","7","8","9");
	for($i=0;$i<strlen($v);$i++)
	{
		if(!in_array($v[$i],$allow))
		{
			$v_.="-";
		}
		else
		{
			$v_.=$v[$i];
		}
	}
	return $v_;
}
####################################
function gsa(&$sa)
{
	return gri("site_admin","","",$sa,0);
}
#####################################
#will add passed in prefix to arra keys
function array_prefix($ary,$prefix)
{
    $ary_new=array();
    if(is_array($ary))
    {
	foreach($ary as $k=>$v)
	{
	    $ary_new[$prefix.$k]=$v;
	}
    }
    return $ary_new;
}
##################################
#gets the images page and returns the image tag with resized image size
function resize_photo($image,&$img_w,&$img_h,$img_dw=100)
{
    global $ViewPath;
    global $UploadPath;
    $img_thumb1=$UploadPath.$image;
    $img_thumb=$UploadPath.$image;
    if(!file_exists($img_thumb1)){ print "a";$img_w=100; $img_h=100;return;}
    $i=getimagesize($img_thumb);
    #checking if original width of image is less than desired width the not resizing photo
    if($img_dw>$i[0])
    {
	$img_w=$i[0];
	$img_h=$i[1];
	return;
    }
    
    $img_w=$img_dw;

    $img_h =  ($img_w/$i[0]) * $i[1];
}
###############################################
function DOUT($str)
{
    return nl2br(stripslashes($str));
}
###############################################
#makes the string ready to display
function DOUT_ALL($ary)
{
    if($ary)
    {
	foreach($ary as $k=>$v)
	{
	    $ary[$k]=DOUT($v);
	}
    }
    return $ary;
}
#####################################################
#returns the small name for the passed in full name of country (USA for United States of America & IN for INDIA
function get_country_small_name($cl_name)
{
    $cname=$cl_name;
    $cl_name=trim($cl_name);
    $ary=array();
    $ary=explode(" ",$cl_name);
    if(sizeof($ary)==1)
    {//space not found in cl_name means country name is like India or Pakistan
	$cname= ucfirst(substr($cl_name,0,5)).".";
    }
    else
    {
	$cname="";
	
    
	foreach($ary as $a)
	{
	    if(strlen($a)<=2){continue;}
	    $cname.=strtoupper(substr($a,0,1)).".";
	}
    }
    return $cname;
}
#####################################################
function make_round($num)
{
    return number_format($num,2);
}
##################################
function format_short_date($tm,&$sdt)
{
    if($tm<=0)
    {
	$sdt= "--";
	return;
    }
    $tm=getdate($tm);
    $sdt="$tm[mday]/$tm[mon]/$tm[year]";
    return $sdt;
}
#############################
#returns the file size
function get_file_size($up_id,&$up_size)
{//$up_size = formatted upload size (including MB or KB etc)
    global $UploadPath;
    gri("uploads","WHERE up_id='$up_id'","",$up,0);
    $fn=$UploadPath.$up[up_fname].$up[up_ext];
    $up_size=0;
    $size=0;
    if(file_exists($fn))
    {
	$size=(filesize($fn)/1000);
	$up_size=round($size,2)."K";
	if($size>1024)
	{
	    $up_size=round(($size/1024),2)."M";
	}
    }
    return $size;
}
############################
/*function get_category_list($cc_id,)
{
	$SQL="";
}*/
##################################
#returns the info of passed in upload id
function get_upload_info($s_id,$s_type,$ss_type,$pos=0,&$up)
{
    global $UploadPath;
    global $ViewPath;
    $SQL = "SELECT * FROM uploads where up_s_id='$s_id' and up_s_type='$s_type' and up_s_sub_type='$ss_type' ORDER BY up_id ASC LIMIT $pos,1";
    eq($SQL,$rs);
    if(nr($rs)==0 and $show_err==1)
    {
        kill("Invalid s_id#$s_id and s_type#$s_type");
    }
    $up=mfa($rs);
    $up[up_view_path]=$ViewPath.$up[up_fname].$up[up_ext];
    $up[up_upload_path]=$UploadPath.$up[up_fname].$up[up_ext];
    $up[up_view_path_thumb]=$ViewPath.$up[up_fname]."_thumb".$up[up_ext];
    $up[up_upload_path_thumb]=$UploadPath.$up[up_fname]."_thumb".$up[up_ext];
    if(nr($rs)==0)
    {
		$up[up_view_path]=$ViewPath."clear.gif";
		$up[up_view_path_thumb]=$ViewPath."clear.gif";
		$up[up_view_path_mid]=$ViewPath."clear.gif";
		if($s_type=="learner" || $s_type=="tutor")
		{
			$up[up_view_path]=$ViewPath."avatar.jpg";
			$up[up_view_path_thumb]=$ViewPath."avatar_thumb.jpg";
		}
    }
    get_file_size($up[up_id],$up[up_size]);
    return nr($rs);
}
#################################
#creates thumb
function create_thumb($up_id,$width=100,$prefix="_thumb")
{
  
    global $UploadPath;
    global $ViewPath;
    $upload_dir=$UploadPath;
	$quality=100;
    gri("uploads","WHERE up_id='$up_id'","",$up,1);
    $imgname=$upload_dir.$up[up_fname].$up[up_ext];
	$img_thumb=$upload_dir.$up[up_fname].$prefix.$up[up_ext];
	// get source image size (width/height/type)
    // orig_img_type 1 = GIF, 2 = JPG, 3 = PNG
    list($orig_w, $orig_h, $orig_img_type, $img_sizes) = @getimagesize($imgname);
  
	
	 // ImageGIF is not included into some GD2 releases, so it might not work
    // output png if gifs are not supported
	if(($orig_img_type == 1)  && !function_exists('imagegif')) $orig_img_type = 3;
	
	 switch ($orig_img_type) {
     case 1:
       $orig_img = imagecreatefromgif($imgname);
       break;
     case 2:
       $orig_img = imagecreatefromjpeg($imgname);
       break;
     case 3:
       $orig_img = imagecreatefrompng($imgname);
       break;
    }
	
    $out_w = 100;
    if($width>0)
	{
		$out_w=$width;
	}
    if($orig_w<$out_w)
    {
    	$out_w=$orig_w;
    }
	//echo $up_id." ".$out_w." ".$orig_w." ".$orig_h;
    $out_h =  round(($out_w/$orig_w) * $orig_h,0);
	//echo $out_w." ".$out_h." ".$orig_w." ".$orig_h;
	
	if ($orig_img_type == 1) {
      // should use this function for gifs (gifs are palette images)
      $img_out = imagecreate($out_w,$out_h);
    }
    else {
      // Create a new true color image
      $img_out = imagecreatetruecolor($out_w,$out_h);
    }
	 // Fill image with white background (255,255,255)
    $white = imagecolorallocate($img_out, 255, 255, 255);
    imagefilledrectangle( $img_out, 0, 0, $out_w, $out_h, $white);
	
	if (!$img_out) { /* See if it failed */		
		imagestring ($img_out, 1, 5, 5, "Error loading $imgname", $tc); 
	}

	
    // Copy the palette from one image to another
   imagepalettecopy($img_out,$orig_img);
    // Copy and resize part of an image with resampling
   // imagecopyresampled( $im, $img_out, 0, 0, 0, 0, $out_w, $out_h, $orig_w, $orig_h);  
   imagecopyresized($img_out,$orig_img,0,0,0,0, $out_w, $out_h, $orig_w, $orig_h);  
    // destination, source// dstX, dstY, srcX, srcY // dstW, dstH// srcW, srcH    

    switch ($orig_img_type) {
      case 1:
          $res = imagegif($img_out,$img_thumb);
      case 2:
          $res = imagejpeg($img_out,$img_thumb,$quality);
        break;
      case 3:
        if (PHP_VERSION >= '5.1.2') {
          // Convert to PNG quality.
          // PNG quality: 0 (best quality, bigger file) to 9 (worst quality, smaller file)
          $quality = 9 - min( round($quality / 10), 9 );
          $res = imagepng($img_out, $img_thumb, $quality);
        }
        else {
          $res = imagejpeg($img_out,$img_thumb,$quality);
        } 
	}
   
}
########################################
#uploads the specified file
function upload_file($upld_name,$sid,$stype,$sstype,$allow_multiple=0,&$msg)
{
    global $UploadPath;
    $_SESSION[err]="";
     $ext=strtolower(substr($_FILES[$upld_name]['name'],strlen($_FILES[$upld_name]['name'])-4));
     if($ext=="jpeg"){$ext=".".$ext;}
	 
	if($stype=="pg")
    {//if uploading file is a photo than we have to put some speical checks like upload size limit and file format
    	gri("site_admin","","",$sa,0);
    	$size=$_FILES[$upld_name][size];
    	if($size/1024>$sa[sa_max_upload_file_size])
    	{
    		$msg="Photo size must be less than <b>$sa[sa_max_upload_file_size_]</b>";
    		return -1;
    	}
    	
    	 if($ext=="jpeg"){$ext=".".$ext;}
        if ($ext!=".jpg" AND $ext!=".jpeg")
        {
            $msg="Unsupported File Type <b>$ext</b> File Name : <b>".$_FILES[$upld_name]['name']."</b>";
            return -1;
        }
    }
    if (strlen($_FILES[$upld_name]['name'])>0)
    {
        if($allow_multiple==0)
        {
            $SQL = "SELECT  * FROM uploads WHERE up_s_id='$sid' AND up_s_type='$stype' AND up_s_sub_type='$sstype'";
            eq($SQL,$rs);
            while($data=mfa($rs))
            {
                delete_upload($data[up_id],$msg);
            }
        }
       
        $nm1=rand();    
        $nm = $nm1.$ext;
        $onm=$_FILES[$upld_name]['name'];
    
        if (!(move_uploaded_file($_FILES[$upld_name]['tmp_name'], $UploadPath.$nm))) 
        {
            print "Possible file upload attack! Here's some debugging info:\n"; print_r($_FILES);
        }
        #now saving img in db
		$dt=time();
        $SQL = "INSERT INTO uploads(up_s_id,up_s_type,up_s_sub_type,up_fname,up_oname,up_ext,up_date) VALUES(
                '$sid','$stype','$sstype','$nm1','$onm','$ext','$dt')";
        $up_id=ei($SQL);
       
		if( $stype=="member"  || $stype=="new" || $stype=="truck")
        {//creating thumbnail for the uploaded file
        	create_thumb($up_id,100);
        }
		
		
        return $up_id;
    }
    return 0;
}
########################################
function get_dd_list($sel_id,&$option,$show_all=0)
{
    $ss=0;
    for($i=1;$i<=31;$i++)
    {
        if($i==$sel_id){$sel="selected";$ss=1;}
        $option.="<option value=\"$i\"$sel>$i</option>";
        $sel="";
    }
    if($show_all==1)
    {
        if($sel_id==-2){$sel="selected";$ss=1;}
        $option="<option value=\"-2\" $sel>All</option>".$option;
    }
    if ($ss==0)
    {
         $option="<option value=\"-1\" selected>Select</option>".$option;
    }
    return 1;
}

########################################
function get_yy_list($sel_id,$s_yy,$e_yy,&$option,$show_all=0,$select_txt="Select")
{
    $dt=getdate();
    if($s_yy==-2)    {	$s_yy=1940;}//$s_yy=$dt[year]-10;    }
    if($e_yy==-2)    {	$e_yy=$dt[year]+10;    }
    $ss=0;
    for($i=$s_yy;$i<=$e_yy;$i++)
    {
        if($i==$sel_id){$sel="selected";$ss=1;}
        $option.="<option value=\"$i\"$sel>$i</option>";
        $sel="";
    }
    if($show_all==1)
    {
        if($sel_id==-2){$sel="selected";$ss=1;}
        $option="<option value=\"-2\" $sel>All</option>".$option;
    }
    if ($ss==0)
    {
         $option="<option value=\"-1\" selected>$select_txt</option>".$option;
    }
    return 1;
}
########################################
function get_mm_list($sel_id,&$option, $show_all=0)
{
    $mon[1]="January";
    $mon[2]="Febuary";
    $mon[3]="March";
    $mon[4]="April";
    $mon[5]="May";
    $mon[6]="June";
    $mon[7]="July";
    $mon[8]="August";
    $mon[9]="September";
    $mon[10]="October";
    $mon[11]="November";
    $mon[12]="December";
    $ss=0;
    for($i=1;$i<=12;$i++)
    {
        if($i==$sel_id){$sel="selected";$ss=1;}
        $option.="<option value=\"$i\"$sel>$mon[$i]</option>";
        $sel="";
    }
    if($show_all==1)
    {
        if($sel_id==-2){$sel="selected";$ss=1;}
        $option="<option value=\"-2\" $sel>All</option>".$option;
    }
    if ($ss==0)
    {
         $option="<option value=\"-1\" selected>Select</option>".$option;
    }
    return 1;
}




############################################################33333


function get_int_mm_list($sel_id,&$option, $show_all=0)
{
 
    for($i=1;$i<=12;$i++)
    {
        if($i==$sel_id){$sel="selected";$ss=1;}
        $option.="<option value=\"$i\"$sel>&nbsp;$i&nbsp;Months </option>";
        $sel="";
    }
    if($show_all==1)
    {
        if($sel_id==-2){$sel="selected";$ss=1;}
        $option="<option value=\"-2\" $sel>All</option>".$option;
    }
    if ($ss==0)
    {
         $option="<option value=\"-1\" selected>Select</option>".$option;
    }
    return 1;
}











###################################
function short_txt($str,$len=30)
{
	$length=strlen($str);
	$short_str="";
	if($length>$len)
	{
		$sub_str=substr($str,0,$len);
		$noOfChars=$len-(strlen(strrchr($sub_str," ")));
		$short_str=substr($sub_str,0,$noOfChars);
	}
	else
	{
		$short_str=$str;
	}
	$len=strlen($short_str);
	$pos=strpos($short_str,"&");
	if($pos>0 && $pos==$len-1)
	{
	   $short_str=substr($short_str,0,$pos);
	}
	return trim($short_str);
}

############################
#truncates the passed in string upto the passed in length
function tstr($data, $len=255)
{
    $more="";
    if (strlen($data)>$len){$more="...";}
    return substr($data,0,$len).$more;
}
################################
function format_ldt($time,&$ldt)
{
    format_date($time,$ldt,$tm);
}
#################################
function grc($tab_name,$con,$print=0)
{
    $SQL = "SELECT count(*) FROM $tab_name $con";
    if($print==1)
    {
		print $SQL."<br>";
    }
    $rs=mysql_query($SQL) or die(mysql_error()."<br>$SQL");
    $data=mysql_fetch_array($rs);
    return $data[0];
}
##############################33
function eq($sql,&$rs,$print=0)
{
    if($print==1)
    {
	print $sql."<br>";
    }
    $rs=mysql_query($sql) or die(mysql_error().$sql);
    return mysql_affected_rows();
}
##############################33
function ei($sql,$print=0)
{
    if($print==1)
    {
	print $sql."<br>";
    }
    mysql_query($sql) or die(mysql_error().$sql);
    return mysql_insert_id();
}
###########################################
function mfa($rs)
{
    $data=mysql_fetch_assoc($rs);
    if($data)
    {
                foreach($data as $k2=>$v2)
                {
				    $v2=stripslashes($v2);
				    $k1=$k2."_";
				   $data[$k1]=parse_col($k2,stripslashes($v2));
                }
    }
    return $data;
}
###################################
function DIN_ALL($ary)
{
    foreach($ary as $k=>$v)
    {
        $ary[$k]=DIN($v);
    }
    return $ary;
}
#################################
//for storage to database
function DIN($input)
{ 
	$input = trim($input); 
    if (!get_magic_quotes_gpc())
	{ 
            return addslashes($input);
	} 
	return $input; 
}
##############################################
#sends the mail
function send_mail($to_name,$to_mail,$f_name,$f_mail,$subject,$message,$msg_text="")
{
    global $AdminEmail;
    global $SiteName;
    global $AdminName;
    if($f_name=="" AND $f_mail=="")
    {
		$f_name=$SiteName;
		$f_mail=$AdminEmail;
    }
    if($to_name=="" AND $to_mail=="")
    {
		$to_name=$AdminName;
		$to_mail=$AdminEmail;
    }
    if(strlen($msg_text)==0){$msg_text=$message;}
    $msg_text=str_replace("<br>","\n",$msg_text);
    $msg_text=str_replace("\n","\n\r",$msg_text);
    //$message=str_replace("\n","<br>",$message);    
    
    $t = new htmlMimeMail();
    $from="$f_name <$f_mail>";
    $t->setHtml($message,$text_ver);
    $t->setFrom($from);
    $t->setSubject($subject);
    $mail="$to_name <$to_mail>";
    $result = $t->send(array($mail,'')); 
    return;
}
##################
#checks wheter passed in file type is valid or not
function isvalid_file_type($ext)
{
    if(grc("SELECT * FROM file_type","WHERE ft_name='$ext'")==0)
    {
        return -1;
    }
    return 1;
}
#######################################
#displays the message and then die :-0
function kill($msg)
{
    die("<center><h3>$msg</h3></center>");
}

####################################
#formats date
function format_date($tm,&$dt,&$time)
{
    $tm=getdate($tm);
    $dt=substr($tm[month],0,3).". $tm[mday], $tm[year]";
    $time="$dt - $tm[hours]:$tm[minutes]";
    return $dt;
}
#################################
function checkMail($email)
{
	if(ereg("^[a-zA-Z0-9_\.]+@[a-zA-Z0-9\-]+[\.a-zA-Z0-9]+$", $email))
	{
		list($t1,$t2)=spliti("@",$email);
		list($t1,$t2)=spliti("\.",$t2);
		if(strlen($t2)==0)
		{
			return 0;
		}
		return 1;
	}else {
		return 0;
	}
}
#################################
function checkNumeric($num)
{
    return is_numeric($num);
	if(ereg("^[0-9]+$", $num))
	{
		return 0;
	}else {
		return 1;
	}
}
#################################
function checkPhone($num)
{
   #now checking home phone no
    $num=str_replace(" ","",$num);
    $num=str_replace("(","",$num);
    $num=str_replace(")","",$num);
    list($p1,$p2,$p3)=spliti("-",$num);
    if(strlen($num)==0)
    {
        return 0;
    }
    elseif(strlen($p1)!=3 or strlen($p2)!=3 or strlen($p3)!=4 or
           checkNumeric($p1)==0 or checkNumeric($p2)==0 or checkNumeric($p3)==0)
    {
        return 0;
    }
    return 1;
}
#################################
function checkChar($char)
{
	if(ereg("^[a-zA-Z \,\]+$", $char))
	{
		return 1;
	}else {
		return 0;
	}
}

#################################
function checkAlpha($alpha)
{
	if(ereg("^[a-zA-Z \,\]+$", $alpha))
	{
		return 0;
	}else {
		return 1;
	}
}
#################################
function checkAlphaNumeric($alpha)
{
	if(ereg("^[a-zA-Z0-9 \,\]+$", $alpha))
	{
		return 0;
	}else {
		return 1;
	}
}

###################################
function get_cmp_cat_list($cmp_id,$maxlen=15)
{
	$sep="";
	$cat_list="";
	$cat_list1="";
	$SQL="SELECT cat_id,cat_title FROM competition_category,category WHERE cc_cat_id=cat_id AND cc_cmp_id='$cmp_id'";
	eq($SQL,$rs);
	while($data=mfa($rs))
	{
		if(strlen($cat_list1)>=$maxlen) { break;}
		$cat_list1.=$sep.$data[cat_title];
		$cat_list.=$sep."<a href='".$SVP."competition.php?cat_id=".$data[cat_id]."' class='test1'>".$data[cat_title];
		$sep=" | ";
	}
	return $cat_list;
}
###################################
function get_member_menu()
{
    global $SVP;
    global $SUP;
    global $SiteName;
    $t = new Template($SUP."templates");
    $t->set_file("MyFileHandle","member_menu.htm");
    if(gri("member","WHERE mem_id='$_SESSION[MID]'","",$mem)>0)
	{
		foreach($mem as $k=>$v)
		{
			if($k=="mem_fname") $v=ucwords($v);
			$t->set_var (array( "$k"=>$v,));
		}
	}
    $t->set_var (array( "SVP"=>$SVP,			
						"SiteName"=>$SiteName,
		                ));
    $t->parse("MyOutput","MyFileHandle"); 
	return $t->get("MyOutput");
}

#####################################
#parse the passed in data with index_hf.htm 
function parse_popup($mid_data,$return_output=0)//is return_output is 1 then this function will return output and if not then print it
{
    global $SVP;
    global $SUP;
    global $SIP;
    global $SiteName;
    format_date(time(),$dt,$time);
    $t = new Template($SUP."templates");
    $t->set_file("MyFileHandle","index_popup.htm");
    
    $t->set_var (array( "mid_data"=>$mid_data,
				"SERVER_PATH"=>$SVP,
				"ICON_PATH"=>$Server_Icon_Path,
				"dt"=>$dt,
				"SiteName"=>$SiteName,
				"srch_str"=>$_REQUEST[srch_str],
                ));
    $t->parse("MyOutput","MyFileHandle"); 
    if($return_output==1)
    {
	return $t->get("MyOutput");
    }
    $t->p("MyOutput");
}
###################################
#parse the passed in data with index_hf.htm 
function parse_index($mid_data,$return_output=0 , $is_invoice=0)//is return_output is 1 then this function will return output and if not then print it
{
	global $SVP;
	global $SiteName;
	global $MetaTitle;
	global $MetaDescription;
	global $MetaKeyword;
	global $Page;
	global $tab_id;
	$R=DIN_ALL($_REQUEST);
	
	$t = new Template("templates");
	if($is_invoice==1)
		$t->set_file("MyFileHandle","index_invoice.htm");
	else	
		$t->set_file("MyFileHandle","index_hf.htm");
	
	$show_login="";  $show_member_menu="display:none";
	if($_SESSION[MID]>0 )
	{
	  $show_login="display:none";  $show_member_menu="";
	  $tot_msg=grc("message","where msg_to_mem_id='$_SESSION[MID]' and msg_is_open=0  "  );
	  if($tot_msg>0)
	  	$R[tot_msg]="(". $tot_msg ." New)" ;
	  
	  
	}
	$t->set_var($R);
	$con="";
	if($R[search_mod_id]>0)
	{
	  $con=" AND mem_mod_id='$R[search_mod_id]'";
	}
	
	$time=time();
	get_new_option_list("make,trucks","mk_id","mk_title",$R[search_make],$option_make_list,0,"WHERE mk_active='1' AND mk_truck_count>0   and trc_mk_id=mk_id and trc_active='1' and trc_ex_date>'$time'  ",1,0,"All Makes");
	
	
	
	get_new_option_list("model","mod_id","mod_title",$R[search_model],$option_model_list,0,"WHERE mod_id=0",1,0,"All Models");
	get_new_option_list("trucks, axle_configuration","ac_id","ac_title",$R[search_chassis],$option_chassis_config_list,0,"WHERE ac_id=0 ORDER BY ac_title ASC",1,0,"All Chassis Config");
	get_new_option_list("trucks, body_type","bt_id","bt_title",$R[search_body_type],$option_body_type_list,0,"WHERE bt_id=0  ORDER BY bt_title ASC",1,0,"All Body Type");
	get_new_option_list("trucks, member","mem_county","mem_county",$R[search_county],$option_county_list,0,"WHERE trc_mem_id=mem_id $con ORDER BY mem_county ASC",1,0,"All Counties");
	get_new_option_list("trucks, member","mem_city","mem_city",$R[search_city],$option_city_list,0,"WHERE trc_mem_id=mem_id  AND mem_county='$R[search_county]' $con ORDER BY mem_city ASC",1,0,"All Cities");
	$t->set_var(array("SVP"=>$SVP,
					  "mid_data"=>$mid_data,
					  "option_make_list"=>$option_make_list,
					  "option_model_list"=>$option_model_list,
					  "option_chassis_config_list"=>$option_chassis_config_list,
					  "option_body_type_list"=>$option_body_type_list,
					  "option_county_list"=>$option_county_list,
					  "option_city_list"=>$option_city_list,
					  "chk_search_dist_$R[search_distance]"=>"selected",
					  "bloc"=>$Page,
					  "show_login"=>$show_login,
					  "show_member_menu"=>$show_member_menu,
					  "MetaTitle"=>$MetaTitle,
					  "MetaDescription"=>$MetaDescription,
					  "MetaKeyword"=>$MetaKeyword,					  
					  "SiteName"=>$SiteName,					  
					  ));
					  
	$t->parse("MyOutput","MyFileHandle");
    if($return_output==1)
    {
		return $t->get("MyOutput");
    }
    $t->p("MyOutput");
}

###############################
function parse_col($k,$v)
{
    global $ColDateAry;
    global $ColStateAry;
    global $ColCountryAry;
    global $ColGenderAry;
    global $ColYNAry;
    global $ColNumberAry;
    global $ColCheckedAry;
    global $ColCurrencyAry;
    global $ColFileSizeAry;
    if(in_array($k,$ColDateAry))
	{ if($v==0 || $v=="" )
		{
			$v="--";
		}
		else
		{
		$v=format_short_date($v,$tmp);
		}
	}
	
    if(in_array($k,$ColStateAry)){$v=get_state_name($v);}
    if(in_array($k,$ColCountryAry)){$v=get_country_name($v);}
    if(in_array($k,$ColGenderAry)){$v=get_gender($v);}
    if(in_array($k,$ColNumberAry)){$v=number_format($v,2);}
    if(in_array($k,$ColFileSizeAry)){$v=format_file_size($v);}
    if(in_array($k,$ColCurrencyAry))
    {
    	global $CSIGN;
    	$v=number_format($v,2);
    	$v=$CSIGN."$v";
    }
    if(in_array($k,$ColYNAry))
    {
	if($v==1)	{	    $v="Yes";	}	else	{	    $v="No";	}
    }
    if(in_array($k,$ColCheckedAry))
    {
	if($v==1)	{	    $v="checked";	}
    }
    return $v;
}
################################
function get_gender($v)
{
    $g="--";
    if($v==0){$g="Male";}
    if($v==1){$g="Female";}
    return $g;
}
###################################
function get_value_ary($table,$col,$con="")
{
    $ary=array();
    $SQL = "SELECT $col FROM $table $con";
    eq($SQL,$rs);
    while($data=mfa($rs))
    {
	array_push($ary,$data[$col]);
	}
    return $ary;
}
###################################
function get_state_name($sl_id,$show_short=1)
{
    get_row_con_info("state_list","WHERE sl_id='$sl_id'",$sl,0);
    if($show_short==1)
    {
	return $sl[sl_short_name];
    }
    return $sl[state_name];
}
##################################
function get_country_name($cl_id,$show_short=1)
{
    gri("country","WHERE c_id='$c_id'","",$cl,0);
     if($show_short==1)
    {
	return $cl[c_code];
    }
    return $cl[c_title];
}
##########################
function get_nb_text_multi_front($tot_rows,$st_pos=0,&$con_limit,&$nb_text,$nrpp=0,$nspp=10,$func_ext="")
{
	global $SVP;
	global $IsOffline;
	#$st_pos=240;
	#$tot_rows=3000;
	$file="";
	if($_SERVER[REQUEST_URI]=="/")
	{
		$file="latest-wallpapers/";
	}else{
		$file_ary=array(explode("/",$_SERVER[REQUEST_URI]));
		
		foreach($file_ary as $f_ary)
		{
			if($f_ary[0]=="" AND $IsOffline==1)
			{
				$f_ary[0]="http://lappy";
			}
			foreach($f_ary as $content)
			{
				if(substr($content,-4,4)!=".htm" AND substr($content,-5)!=".html" AND $content!="" and substr($content,-4,4)!=".php")
				{
					$file.=$content."/";
				}
			}
	   }
	}
   if($IsOffline!=1)
   {
   		$file=$SVP.$file;
   }
	$R=DIN_ALL($_REQUEST);
    global $NRPP;
   if($st_pos==""){$st_pos=0;}
    if(!$nrpp)    {	$nrpp=$NRPP;    }
    $con_limit=" LIMIT $st_pos, $nrpp";
    $con_mid="";
    $first=0;
    $last=$nrpp*(round($tot_rows/$nrpp));
    $k=1;
    //getting the set
    for($i=0;$i!=1;)
    {
	if(($k*$nrpp*$nspp)>$st_pos)	{	    $set=$k;	    $i=1;	}
	$k++;
    }
    $next=$set*$nrpp*$nspp;
    $back=$next-($nrpp*$nspp);
    $set1=$set;
    if($set>1){$set1=2;}
    $prev=$next-($nrpp*$nspp*$set1);
	$curr_pos1=$st_pos+1;	$can_cls=0;
    for($i=($back/$nrpp);$i<($next/$nrpp);$i++)
    {
		$cls="";
	if($curr_pos1<=1 AND $can_cls==0)
	{
		$cls="class='first'";
		$can_cls=1;
	}
	$pos=$i*$nrpp;
	$b1="";$b2="";
	if($pos==$st_pos){$b1="<b>"; $b2="</b>";}
	$j=$i+1;
	if($pos>=$tot_rows)	{	 continue;}
	$lnk=$file.$pos.".html";
	$con_mid.=<<<EOM
<li $cls><a href="$lnk">$b1$j$b2</a></li>
EOM
;
    }
    $curr_pos2=$st_pos+$nrpp;
    if($curr_pos2>$tot_rows){$curr_pos2=$tot_rows;}
    $HFP1="";$HFP2="";	$HNL1="";$HNL2=""; $color_first=$link_color; $color_last=$link_color;
    if(($next-($nrpp*$nspp))==0)    		{	$HFP1="<!--";$HFP2="-->";    $color_first=$unlink_color;}
    if($next>=$tot_rows)    	{	$HNL1="<!--";$HNL2="-->";    $color_last=$unlink_color;}
    if($last>$tot_rows){$last=$last-$nrpp;}
     $n="";$b="";
    if($curr_pos1>1)
    {
	$b=$st_pos-$nrpp;
	$b=<<<EOM
<li class="first"><a href="$file$b.html">&laquo;</a></li>
EOM;
    }
    if($curr_pos2<$tot_rows)
    {
$n=<<<EOM
<li class="next"><a href="$file$curr_pos2.html">&raquo;</a></li>
EOM;
    }
    $nb_text=<<<EOM
<ul class="pagination">
$b$con_mid$n
</ul>
EOM
;
	if($tot_rows<=$nrpp)
	{
		$nb_text="";
	}
}
/////////////////////////////////////////////////////////
function get_nb_text_multi($tot_rows,$title,$st_pos=0,&$con_limit,&$nb_text,$nrpp=0,$nspp=10,$func_ext="",$admin=0)
{
    $nspp=10;
    $link_color="#FFFFFF";
    $unlink_color="#FF0000";
    global $NRPP;
    if($st_pos==""){$st_pos=0;}
    if(!$nrpp)    {	$nrpp=$NRPP;    }
    if($admin==1)
    {
    	//gri("site_admin","","",$row);
    	//$nrpp=$row[sa_nrpp];
		$link_color="#000000";
    }
    $con_limit=" LIMIT $st_pos, $nrpp";
    $con_mid="";
    $first=0;
    $last=$nrpp*(round($tot_rows/$nrpp));
    $k=1;
    //getting the set
    for($i=0;$i!=1;)
    {
	if(($k*$nrpp*$nspp)>$st_pos)	{	    $set=$k;	    $i=1;	}
	$k++;
    }
    $next=$set*$nrpp*$nspp;
    $back=$next-($nrpp*$nspp);
    $set1=$set;
    if($set>1){$set1=2;}
    $prev=$next-($nrpp*$nspp*$set1);
    for($i=($back/$nrpp);$i<($next/$nrpp);$i++)
    {
	$pos=$i*$nrpp;
	$b1="";$b2="";
	if($pos==$st_pos){$b1="<b>";$b2="</b>";}
	$j=$i+1;
	$HL1="";$HL2=""; $color=$link_color;
	if($pos>=$tot_rows)	{	 continue;   $HL1="<!--";$HL2="-->"; $color=$unlink_color;	    }
	$con_mid.=<<<EOM
&nbsp;$HL1<a href="JavaScript:nb$func_ext($pos)">$HL2$b1<font color="$color">$j</font>$b2$HL1</a>$HL2
EOM
;
    }
    $curr_pos1=$st_pos+1;
    $curr_pos2=$st_pos+$nrpp;
    if($curr_pos2>$tot_rows){$curr_pos2=$tot_rows;}
    $HFP1="";$HFP2="";	$HNL1="";$HNL2=""; $color_first=$link_color; $color_last=$link_color;
    if(($next-($nrpp*$nspp))==0)    		{	$HFP1="<!--";$HFP2="-->";    $color_first=$unlink_color;}
    if($next>=$tot_rows)    	{	$HNL1="<!--";$HNL2="-->";    $color_last=$unlink_color;}
    if($last>$tot_rows){$last=$last-$nrpp;}
     /*$nb_text=<<<EOM
            $title $curr_pos1 - $curr_pos2 of $tot_rows &nbsp;
            $HFP1<a href="JavaScript:nb($first)">$HFP2 <font color="$color_first">First</font> $HFP1</a>$HFP2
            //$HFP1<a href="JavaScript:nb($prev)">$HFP2 <font color="$color_first">Previous $nspp </font>$HFP1</a>$HFP2//$con_mid
            //$HNL1<a href="JavaScript:nb($next)">$HNL2 <font color="$color_last">Next $nspp </font>$HNL1</a>$HNL2
            //$HNL1<a href="JavaScript:nb($last)">$HNL2 <font color="$color_last">Last</font>$HNL1</a>$HNL2
EOM
;*/
     $n="";$b="";
    if($curr_pos1>1)
    {
	$b=$st_pos-$nrpp;
	$b="<a href=\"JavaScript:nb$func_ext($b)\">&lt;&lt;&nbsp;Previous</a>";
    }
    if($curr_pos2<$tot_rows)
    {
	$n="<a href=\"JavaScript:nb$func_ext($curr_pos2)\">Next&nbsp;&gt;&gt;</a>";
    }
    $nb_text=<<<EOM
           $title $curr_pos1 - $curr_pos2 of $tot_rows $b [$con_mid ] $n
EOM
;
if($tot_rows<=$nrpp)
{
	$nb_text="";
}
}
##########################
function get_new_option_list($table,$id_col,$val_col,$sel_id,&$option,$show_all=0,$con="",$show_select=1,$parent=0,$select_txt="Please Select")
{
	if($table=="country_list" AND $sel_id=="")
	{
		$sel_id=238;
	}
    if(!is_array($sel_id))    {	$sel_id=array($sel_id); }
    $SQL = "SELECT * FROM $table $con "; 
  	eq($SQL,$rs);
    $ss=0;
    while($data = mfa($rs))
    {
		$show_val="";
		$sep1="";
		if(is_array($val_col))
		{
			foreach($val_col as $val)
			{
				
				
				
			 	$show_val.=$sep1.$data[$val];$sep1="-";
			}
		  	//$show_val=substr($show_val,1);
		}else{
		  	$show_val=$data[$val_col];
		}
        if(in_array($data[$id_col],$sel_id)){$sel="selected";$ss=1;}
        $option.="<option value=\"$data[$id_col]\"$sel>$show_val</option>";
        $sel="";
    }
    $sel="";
    if ($parent==1)
    {	
		if($ss==0 and in_array("0",$sel_id) )
		{
			$sel="selected";
			$ss=1;
		}
        $option="<option value=\"0\" $sel>-Parent-</option>".$option;
    }
    if($ss==0 and $show_all==1)
    {
        $sel="selected";
        $ss=1;
    }
    if($show_all==1)
    {
        $option="<option value=\"-2\"$sel>".All."</option>".$option;
    }
    if ($ss==0 AND $show_select==1)
    {
        $option="<option value=\"-1\" selected>$select_txt</option>".$option;
    }

   
}
#######################################################
function fe($fnm)
{
    global $func_ary;
    if(in_array($fnm,$func_ary))
    {
	return function_exists($fnm);
    }
    return 0;
}

######################################################
function nr($rs)
{
    return mysql_num_rows($rs);
}
###########################################
function gri($tab_name,$con,$cols,&$row,$show_err=1,$print_sql=0)
{
    if($cols=="")    {	$cols="*";    }
    $ss=0;
    $SQL = "SELECT $cols FROM $tab_name $con ";
    if($print_sql==1)
    {
	print "$SQL<br>";
    }
    eq($SQL,$rs);
    if($ss and !$rs)
    {
        kill("Invalid condition $con on  table $tab_name");
    }
    if($rs)
    {
	$row=mfa($rs);
	return mysql_num_rows($rs);
    }
    return 0;
}
######################################################
function get_mt()
{
    list($usec, $sec) = explode(" ", microtime());
    return ((float)$usec + (float)$sec);
}
##################
function ar()
{
return mysql_affected_rows();
}
###########################################
function fgc($url)
{
	global $IsOnline;
	if($IsOnline==0 AND strlen($IsOnline)>0)
	{
		return file_get_contents($url);
	}
	if($url=="")
	{
		return "";
	}
	$ch = curl_init();
	$timeout = 0; // set to zero for no timeout
	curl_setopt ($ch, CURLOPT_URL, $url);
	curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
	$file_contents = curl_exec($ch);
	curl_close($ch);
	
	// display file
	return $file_contents;

}
#############################
function get_cat_list_admin($sel_id,&$option,$show_all=0,$show_parent=0,$show_select=0,$con="",$parent_readonly=0,$show_level=2)
{
	
	$sel="";	$option=""; $sep="";
	 if(!is_array($sel_id))    {	$sel_id=array($sel_id);    }
	 if($con==""){ $con="WHERE cat_p_cat_id=0"; }
    $SQL = "SELECT * FROM category $con ORDER BY cat_title";
    eq($SQL,$rs);
    while($data = mfa($rs))
    {	
		 if(in_array($data[cat_id],$sel_id)){$sel="selected";$ss=1;}
       	if($parent_readonly==1)
		{
			$option.="<optgroup label='$data[cat_title]'>";
		}else{
       	 	$option.="<option value=\"$data[cat_id]\" $sel class='pcat'>$data[cat_title]</option>";
	    }
	 	 $level=1;
        if(grc("category","WHERE cat_p_cat_id='$data[cat_id]'")>0)
		{	
			$option.=get_category_child_node($data[cat_id],$sel_id,$sep,0,$level,$show_level);
		}
        //$option.="</optgroup>";
		//$option.="</option>";
		if($parent_readonly==1)
		{
			$option.="</optgroup>";
		}
        $sel="";
    }

    $sel="";
    if($ss==0 and $show_all==1)
    {
        $sel="selected";
        $ss=1;
    }

    if($show_all==1)
    {
        $option="<option value=\"-2\" $sel>".All."</option>".$option;
    }
    if ( $show_select==1)
    {
        $option="<option value=\"-1\" selected>Please Select</option>".$option;
    }
    if ($show_parent==1)
    {
        $option="<option value=\"0\" selected>-Parent-</option>".$option;
    }
}
###########################################

function xml_create_tag($xml,$tag_nm)
{
return "<tag id=\"$tag_nm\">".htmlspecialchars($xml)."</tag>";
}


############################################################
		#creation function only deplopmentation use
###########################################################
function rajax_esc($val)
{
	$val = str_replace("\\", "\\\\", $val);
	$val = str_replace("\r", "\\r", $val);
	$val = str_replace("\n", "\\n", $val);
	$val = str_replace("'", "\\'", $val);
	return str_replace('"', '\\"', $val);
}



function return_ajax( $affter_func , $r_value)
{
	if(!is_array($r_value))
	{
		$function="window.parent.ajx_fun"."( \"$affter_func\",\"".rajax_esc($r_value)."\" )";
		//print $function;
		print( "<script> $function </script>"   );
	}
	else
	{
		$function="window.parent.ajx_fun( \"$affter_func\" " ;
		foreach(  $r_value as $key=>$val)
			 $function .=", \"".rajax_esc($val)."\"";
		
		$function .=" )";
		 //print $function;
		print( "<script> $function </script>");
	}	

}



###################################################################
function get_se_time($date , &$ms_date,&$me_date)
{
	$date=getdate($date);
	$ms_date=mktime(0,0,1,$date[mon],1,$date[year]);
	$date["mon"]=$date[mon]+1;
	$me_date=mktime(0,0,0,$date[mon],1,$date[year]);
	$me_date=$me_date-1;
}



function download_file( $data , $filename = 'new.txt' , $fsize )
{
	// required for IE, otherwise Content-disposition is ignored
	if(ini_get('zlib.output_compression'))
	  ini_set('zlib.output_compression', 'Off');
	
	switch( $file_extension )
	{
	  case "pdf": $ctype="application/pdf"; break;
	  case "exe": $ctype="application/octet-stream"; break;
	  case "zip": $ctype="application/zip"; break;
	  case "doc": $ctype="application/msword"; break;
	  case "xls": $ctype="application/vnd.ms-excel"; break;
	  case "ppt": $ctype="application/vnd.ms-powerpoint"; break;
	  case "gif": $ctype="image/gif"; break;
	  case "png": $ctype="image/png"; break;
	  case "jpeg":
	  case "jpg": $ctype="image/jpg"; break;
	  default: $ctype="application/force-download";
	}
	header("Pragma: public"); // required
	header("Expires: 0");
	header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
	header("Cache-Control: private",false); // required for certain browsers 
	header("Content-Type: $ctype");
	// change, added quotes to allow spaces in filenames, by Rajkumar Singh
	header("Content-Disposition: attachment; filename=\"".basename($filename)."\";" );
	header("Content-Transfer-Encoding: binary");
	header("Content-Length:  $fsize ");
	print ($data);
}	

########################################333
function curPageURL()
{
 $pageURL = 'http';
 if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
 $pageURL .= "://";
 if ($_SERVER["SERVER_PORT"] != "80") {
  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
 } else {
  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
 }
 return $pageURL;
}




######################################################
function get_parse_htm( $ary , $htm_name )
{
	global $SVP;
	$t = new Template("templates");
	$t->set_file("MyFileHandle", $htm_name);
	$t->set_var( $ary);
	$t->set_var(array( "SVP"=>$SVP ));
	$t->parse("MyOutput","MyFileHandle");
	return $t->get("MyOutput");
}





###############################################


function parse_xml_js($xml="",$print=1)
{
global $SUP;
global $AdminEmail;
$xml=<<<EOM
<?xml version='1.0' encoding='ISO-8859-1'?>
<ROOT>
$xml
</ROOT>
EOM;
$handle=fopen("a.xml","w");
fputs($handle,$xml);
fclose($handle);
	if($print==1)
	{
	header("Content-type: text/xml");
	print $xml;
	return 1;
	}
return $xml;
}
?>