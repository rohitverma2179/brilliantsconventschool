<?php
############## Function For Save Manufacturer #######
function func_save_manufacturer($maf)
{
	$dt=time();
	$SQL="INSERT INTO manufacturer SET
		  ma_title='$maf[ma_title]',
		  ma_code='$maf[ma_code]',
		  ma_active='1',
		  ma_date='$dt'";
	$ma_id=ei($SQL);
	return $ma_id;
}
############## Function For Save Manufacturer #######
############## Function For Update Manufacturers #######
function func_update_manufacturer($maf)
{
	$tot=0;
	$sql="SELECT * FROM manufacturer ORDER BY ma_title";
	eq($sql,$rs);
	while($data=mfa($rs))
	{
		$title="ma_title_$data[ma_id]";
		if($maf[$title]!="")
		{		
			$status="status_".$data[ma_id];
			$code="ma_code_".$data[ma_id];
			$SQL1 = "UPDATE manufacturer SET
					 ma_title='$maf[$title]',
					 ma_code='$maf[$code]',
					 ma_active ='$maf[$status]'
					 WHERE ma_id='$data[ma_id]'";
			$tot+=eq($SQL1,$rs1);
		}
	}
	return $tot;
}
############## Function For Update Manufacturers #######
############## Function For Save Make #######
function func_save_make($mk)
{
	$dt=time();
	$mk[mk_title]=strtoupper($mk[mk_title]);
	$SQL="INSERT INTO make SET
		  mk_title='$mk[mk_title]',
		  mk_active='1',
		  mk_date='$dt'";
	$mk_id=ei($SQL);
	return $mk_id;
}
############## Function For Save Make #######
############## Function For Update Make #######
function func_update_make($mk)
{
	$tot=0;
	$dt=time();
	$sql="SELECT * FROM make ORDER BY mk_title";
	eq($sql,$rs);
	while($data=mfa($rs))
	{
		$title="mk_title_$data[mk_id]";
		if($mk[$title]!="")
		{		
			$mk[$title]=strtoupper($mk[$title]);
			
			
			$status="status_".$data[mk_id];
			$SQL1 = "UPDATE make SET
					 mk_title='$mk[$title]',
					 mk_active ='$mk[$status]'
					 WHERE mk_id='$data[mk_id]'";
			$tot+=eq($SQL1,$rs1);
			
			
			#------update truc title -------------------
			if( $mk[$title] != $data[mk_title] )
			{
				
				
				
				$SQL1="SELECT * FROM trucks where trc_mk_id='$data[mk_id]'";
				eq($SQL1,$rs1);
				while($trc_data=mfa($rs1))
				{
					
					//print $trc_data[trc_id];
					
					func_update_trc_title($trc_data[trc_id]);
				}
			}
			#----------------------------------------------	
		
		}
	}
	make_truck_count();
	return $tot;
}
############## Function For Update Make #######
##############Function For Save Model ##########################
function func_save_model($mod)
{
	$dt=time();
	$mod[mod_title]=strtoupper($mod[mod_title]);

	$SQL="INSERT INTO model SET
		  mod_title='$mod[mod_title]',
		  mod_mk_id='$mod[mod_mk_id]',
		  mod_active='1',
		  mod_date='$dt'";
		  
		  
		  /*		  mod_year_start='$mod[mod_year_start]',
		  mod_year_end='$mod[mod_year_end]',
*/
	$mod_id=ei($SQL);
	
	$mod_htaccess=make_htaccess("$mod[mod_title]-$mod_id");
	$SQL = "UPDATE model SET
			mod_htaccess='$mod_htaccess'
			WHERE mod_id='$mod_id'";
	eq($SQL,$rs);
	return $mod_id;
}
##############Function For Save Model ##########################
##############Function For Update Model ##########################
function func_update_model($mod)
{
	
	$mod[mod_title]=strtoupper($mod[mod_title]);
	
	$mod_htaccess=make_htaccess("$mod[mod_title]-$mod[mod_id]");
	$SQL="Update model SET
		  mod_title='$mod[mod_title]',
		  mod_mk_id='$mod[mod_mk_id]',
		  mod_htaccess='$mod_htaccess'
		  WHERE mod_id='$mod[mod_id]'";
	eq($SQL,$rs);
	
	
	/*
			  mod_year_start='$mod[mod_year_start]',
		  mod_year_end=' $mod[mod_year_end]',

	*/
	
	
	#------update truc title -------------------
	$SQL1="SELECT * FROM trucks where trc_mod_id='$mod[mod_id]'";
	eq($SQL1,$rs1);
	while($trc_data=mfa($rs1))
	{
		func_update_trc_title($trc_data[trc_id]);
	}
	#----------------------------------------
	
	return $mod[mod_id];
}
##############Function For Update Model ##########################
############## Function For Save Body Type #######
function func_save_body_type($bot)
{
	$dt=time();
	$SQL="INSERT INTO body_type SET
		  bt_title='$bot[bt_title]',
		  bt_code='$bot[bt_code]',
		  bt_active='1',
		  bt_date='$dt'";
	$bt_id=ei($SQL);
	return $bt_id;
}
############## Function For Save Body Type #######
############## Function For Update Body Types #######
function func_update_body_type($bot)
{
	$tot=0;
	$dt=time();
	$sql="SELECT * FROM body_type ORDER BY bt_title";
	eq($sql,$rs);
	while($data=mfa($rs))
	{
		$title="bt_title_$data[bt_id]";
		if($bot[$title]!="")
		{		
			$status="status_".$data[bt_id];
			$code="bt_code_".$data[bt_id];
			$SQL1 = "UPDATE body_type SET
					 bt_title='$bot[$title]',
					 bt_code ='$bot[$code]',
					 bt_active ='$bot[$status]'
					 WHERE bt_id='$data[bt_id]'";
			$tot+=eq($SQL1,$rs1);
		}
	}
	return $tot;
}
############## Function For Update Body Types #######
############## Function For Save Cab Type #######
function func_save_cab_type($cab)
{
	$dt=time();
	$SQL="INSERT INTO cab_type SET
		  ct_title='$cab[ct_title]',
		  ct_code='$cab[ct_code]',
		  ct_active='1',
		  ct_date='$dt'";
	$ct_id=ei($SQL);
	return $ct_id;
}
############## Function For Save Cab Type #######
############## Function For Update Cab Types #######
function func_update_cab_type($cab)
{
	$tot=0;
	$dt=time();
	$sql="SELECT * FROM cab_type ORDER BY ct_title";
	eq($sql,$rs);
	while($data=mfa($rs))
	{
		$title="ct_title_$data[ct_id]";
		if($cab[$title]!="")
		{		
			$status="status_".$data[ct_id];
			$code="ct_code_".$data[ct_id];
			$SQL1 = "UPDATE cab_type SET
					 ct_title='$cab[$title]',
					 ct_code ='$cab[$code]',
					 ct_active ='$cab[$status]'
					 WHERE ct_id='$data[ct_id]'";
			$tot+=eq($SQL1,$rs1);
		}
	}
	return $tot;
}
############## Function For Update Cab Types #######
############## Function For Save Chassis Type #######
function func_save_chassis_type($cht)
{
	$dt=time();
	$SQL="INSERT INTO chassis_type SET
		  cht_title='$cht[cht_title]',
		  cht_code='$cht[cht_code]',
		  cht_active='1',
		  cht_date='$dt'";
	$cht_id=ei($SQL);
	return $cht_id;
}
############## Function For Save Chassis Type #######
############## Function For Update Chassis Types #######
function func_update_chassis_type($cht)
{
	$tot=0;
	$dt=time();
	$sql="SELECT * FROM chassis_type ORDER BY cht_title";
	eq($sql,$rs);
	while($data=mfa($rs))
	{
		$title="cht_title_$data[cht_id]";
		if($cht[$title]!="")
		{		
			$status="status_".$data[cht_id];
			$code="cht_code_".$data[cht_id];
			$SQL1 = "UPDATE chassis_type SET
					 cht_title='$cht[$title]',
					 cht_code ='$cht[$code]',
					 cht_active ='$cht[$status]'
					 WHERE cht_id='$data[cht_id]'";
			$tot+=eq($SQL1,$rs1);
		}
	}
	return $tot;
}
############## Function For Update Chassis Types #######
############## Function For Save Chassis Height #######
function func_save_chassis_height($chh)
{
	$dt=time();
	$SQL="INSERT INTO chassis_height SET
		  chh_title='$chh[chh_title]',
		  chh_code='$chh[chh_code]',
		  chh_active='1',
		  chh_date='$dt'";
	$chh_id=ei($SQL);
	return $chh_id;
}
############## Function For Save Chassis Height #######
############## Function For Update Chassis Height #######
function func_update_chassis_height($chh)
{
	$tot=0;
	$dt=time();
	$sql="SELECT * FROM chassis_height ORDER BY chh_title";
	eq($sql,$rs);
	while($data=mfa($rs))
	{
		$title="chh_title_$data[chh_id]";
		if($chh[$title]!="")
		{		
			$status="status_".$data[chh_id];
			$code="chh_code_".$data[chh_id];
			$SQL1 = "UPDATE chassis_height SET
					 chh_title='$chh[$title]',
					 chh_code ='$chh[$code]',
					 chh_active ='$chh[$status]'
					 WHERE chh_id='$data[chh_id]'";
			$tot+=eq($SQL1,$rs1);
		}
	}
	return $tot;
}
############## Function For Update Chassis Height #######
############## Function For Save Chassis Layout #######
function func_save_axle_configuration($ac)
{
	$dt=time();
	$SQL="INSERT INTO axle_configuration SET
		  ac_title='$ac[ac_title]',
		  ac_code='$ac[ac_code]',
		  ac_active='1',
		  ac_date='$dt'";
	$ac_id=ei($SQL);
	return $chl_id;
}
############## Function For Save Chassis Layout #######
############## Function For Update Chassis Layout #######
function func_update_axle_configuration($ac)
{
	$tot=0;
	$dt=time();
	$sql="SELECT * FROM axle_configuration ORDER BY ac_title";
	eq($sql,$rs);
	while($data=mfa($rs))
	{
		$title="ac_title_$data[ac_id]";
		if($ac[$title]!="")
		{		
			$status="status_".$data[ac_id];
			$code="ac_code_".$data[ac_id];
			$SQL1 = "UPDATE axle_configuration SET
					 ac_title='$ac[$title]',
					 ac_code ='$ac[$code]',
					 ac_active ='$ac[$status]'
					 WHERE ac_id='$data[ac_id]'";
			$tot+=eq($SQL1,$rs1);
			
			#------update truc title -------------------
			if( $ac[$title] != $data[ac_title] )
			{
				$SQL1="SELECT * FROM trucks where trc_ac_id='$data[ac_id]'";
				eq($SQL1,$rs1);
				while($trc_data=mfa($rs1))
				{
					func_update_trc_title($trc_data[trc_id]);
				}
			}
			#----------------------------------------------	
			
			
			
		}
	}
	return $tot;
}
############## Function For Update Chassis Layout #######
############## Function For Save DriveLine Type #######
function func_save_driveline_type($dlt)
{
	$dt=time();
	$SQL="INSERT INTO driveline_type SET
		  dlt_title='$dlt[dlt_title]',
		  dlt_code='$dlt[dlt_code]',
		  dlt_active='1',
		  dlt_date='$dt'";
	$dlt_id=ei($SQL);
	return $dlt_id;
}
############## Function For Save DriveLine Type #######
############## Function For Update DriveLine Type #######
function func_update_driveline_type($dlt)
{
	$tot=0;
	$dt=time();
	$sql="SELECT * FROM driveline_type ORDER BY dlt_title";
	eq($sql,$rs);
	while($data=mfa($rs))
	{
		$title="dlt_title_$data[dlt_id]";
		if($dlt[$title]!="")
		{		
			$status="status_".$data[dlt_id];
			$code="dlt_code_".$data[dlt_id];
			$SQL1 = "UPDATE driveline_type SET
					 dlt_title='$dlt[$title]',
					 dlt_code ='$dlt[$code]',
					 dlt_active ='$dlt[$status]'
					 WHERE dlt_id='$data[dlt_id]'";
			$tot+=eq($SQL1,$rs1);
		}
	}
	return $tot;
}
############## Function For Update DriveLine Type #######
############## Function For Save Suspension #######
function func_save_suspension($sus)
{
	$dt=time();
	$SQL="INSERT INTO suspension SET
		  sus_title='$sus[sus_title]',
		  sus_code='$sus[sus_code]',
		  sus_active='1',
		  sus_date='$dt'";
	$sus_id=ei($SQL);
	return $sus_id;
}
############## Function For Save Suspension #######
############## Function For Update Suspension #######
function func_update_suspension($sus)
{
	$tot=0;
	$dt=time();
	$sql="SELECT * FROM suspension ORDER BY sus_title";
	eq($sql,$rs);
	while($data=mfa($rs))
	{
		$title="sus_title_$data[sus_id]";
		if($sus[$title]!="")
		{		
			$status="status_".$data[sus_id];
			$code="sus_code_".$data[sus_id];
			$SQL1 = "UPDATE suspension SET
					 sus_title='$sus[$title]',
					 sus_code ='$sus[$code]',
					 sus_active ='$sus[$status]'
					 WHERE sus_id='$data[sus_id]'";
			$tot+=eq($SQL1,$rs1);
		}
	}
	return $tot;
}
############## Function For Update Suspension #######
############## Function For Save Combination #######
function func_save_combination($com)
{
	$dt=time();
	$SQL="INSERT INTO combination SET
		  com_title='$com[com_title]',
		  com_type='$com[com_type]',
		  com_code='$com[com_code]',
		  com_active='1',
		  com_date='$dt'";
	$com_id=ei($SQL);
	return $com_id;
}
############## Function For Save Combination #######
############## Function For Update Combination #######
function func_update_combination($com)
{
	$tot=0;
	$dt=time();
	$sql="SELECT * FROM combination ORDER BY com_title";
	eq($sql,$rs);
	while($data=mfa($rs))
	{
		$title="com_title_$data[com_id]";
		if($com[$title]!="")
		{		
			$status="status_".$data[com_id];
			$code="com_code_".$data[com_id];
			$type="com_type_".$data[com_id];
			$SQL1 = "UPDATE combination SET
					 com_title='$com[$title]',
					 com_type='$com[$type]',
					 com_code ='$com[$code]',
					 com_active ='$com[$status]'
					 WHERE com_id='$data[com_id]'";
			$tot+=eq($SQL1,$rs1);
		}
	}
	return $tot;
}
############## Function For Update Combination #######
############## Function For Save Member #######
function func_save_member($mem)
{
	$dt=time();
	$SQL="INSERT INTO member SET
		  mem_password='$mem[mem_password]',
		  mem_type='$mem[mem_type]',
		  mem_fname='$mem[mem_fname]',
		  mem_lname='$mem[mem_lname]',
		  mem_email='$mem[mem_email]',
		  mem_company='$mem[mem_company]',
		  mem_address1='$mem[mem_address1]',
		  mem_address2='$mem[mem_address2]',
		  mem_city='$mem[mem_city]',
		  mem_county='$mem[mem_county]',
		  mem_postcode='$mem[mem_postcode]',
		  mem_phone='$mem[mem_phone]',
		  mem_fax='$mem[mem_fax]',
		  mem_mobile='$mem[mem_mobile]',
		  mem_payment_type='$mem[mem_payment_type]',
		  mem_account_no='$mem[mem_account_no]',
		  mem_account_sortcode='$mem[mem_account_sortcode]',
		  mem_bank_verified='$mem[mem_bank_verified]',
		  mem_bank_unverify_reason='$mem[mem_bank_unverify_reason]',
		  mem_bank_correct_sortcode='$mem[mem_bank_correct_sortcode]',
		  mem_bank_correct_account='$mem[mem_bank_correct_account]',
		  mem_bank_directdebit='$mem[mem_bank_directdebit]',
		  mem_bank_iban='$mem[mem_bank_iban]',
		  mem_bank_name='$mem[mem_bank_name]',
		  mem_bank_bankbic='$mem[mem_bank_bankbic]',
		  mem_bank_branch='$mem[mem_bank_branch]',
		  mem_bank_branchbic='$mem[mem_bank_branchbic]',
		  mem_bank_address1='$mem[mem_bank_address1]',
		  mem_bank_address2='$mem[mem_bank_address2]',
		  mem_bank_town='$mem[mem_bank_town]',
		  mem_bank_postcode='$mem[mem_bank_postcode]',
		  mem_bank_phone='$mem[mem_bank_phone]',
		  mem_bank_fax='$mem[mem_bank_fax]',
		  mem_is_bdirectory='$mem[mem_is_bdirectory]',
		  mem_chk_email='$mem[mem_chk_email]',
		  mem_chk_services='$mem[mem_chk_services]',
		  mem_cl_id='$mem[mem_cl_id]',
		  mem_active='1',
		  mem_not_msg_reply='$mem[mem_not_msg_reply]',
		  mem_date='$dt'";
	$mem_id=ei($SQL);
	if($mem[mem_type]==1)
	{
		upload_file("mem_comp_img",$mem_id,"member","",0,$msg);
	}else{
		upload_file("mem_img",$mem_id,"member","",0,$msg);
	}
	return $mem_id;
}
############## Function For Save Member #######
############## Function For Update Member #######
function func_update_member($mem)
{
	$SQL="UPDATE member SET
		  mem_type='$mem[mem_type]',
		  mem_fname='$mem[mem_fname]',
		  mem_lname='$mem[mem_lname]',
		  mem_email='$mem[mem_email]',
		  mem_company='$mem[mem_company]',
		  mem_address1='$mem[mem_address1]',
		  mem_address2='$mem[mem_address2]',
		  mem_city='$mem[mem_city]',
		  mem_county='$mem[mem_county]',
		  mem_postcode='$mem[mem_postcode]',
		  mem_phone='$mem[mem_phone]',
		  mem_fax='$mem[mem_fax]',
		  mem_mobile='$mem[mem_mobile]',
		  mem_payment_type='$mem[mem_payment_type]',
		  mem_account_no='$mem[mem_account_no]',
		  mem_account_sortcode='$mem[mem_account_sortcode]',
		  mem_bank_verified='$mem[mem_bank_verified]',
		  mem_bank_unverify_reason='$mem[mem_bank_unverify_reason]',
		  mem_bank_correct_sortcode='$mem[mem_bank_correct_sortcode]',
		  mem_bank_correct_account='$mem[mem_bank_correct_account]',
		  mem_bank_directdebit='$mem[mem_bank_directdebit]',
		  mem_bank_iban='$mem[mem_bank_iban]',
		  mem_bank_name='$mem[mem_bank_name]',
		  mem_bank_bankbic='$mem[mem_bank_bankbic]',
		  mem_bank_branch='$mem[mem_bank_branch]',
		  mem_bank_branchbic='$mem[mem_bank_branchbic]',
		  mem_bank_address1='$mem[mem_bank_address1]',
		  mem_bank_address2='$mem[mem_bank_address2]',
		  mem_bank_town='$mem[mem_bank_town]',
		  mem_bank_postcode='$mem[mem_bank_postcode]',
		  mem_bank_phone='$mem[mem_bank_phone]',
		  mem_bank_fax='$mem[mem_bank_fax]',
		  mem_is_bdirectory='$mem[mem_is_bdirectory]',
		  mem_chk_email='$mem[mem_chk_email]',
		  mem_chk_services='$mem[mem_chk_services]',
		   mem_not_msg_reply='$mem[mem_not_msg_reply]',
		  mem_cl_id='$mem[mem_cl_id]'
		  WHERE mem_id='$mem[mem_id]'";
	eq($SQL,$rs);
	
	
	
	
	if($mem[mem_password]!="")
	{
	  	$SQL="UPDATE member SET
	  		 mem_password='$mem[mem_password]'
			 WHERE mem_id='$mem[mem_id]'";
		eq($SQL,$rs);
	}
	if($mem[mem_type]==1)
	{
		upload_file("mem_comp_img",$mem[mem_id],"member","",0,$msg);
	}else{
		upload_file("mem_img",$mem[mem_id],"member","",0,$msg);
	}
	return $mem[mem_id];
}
############## Function For Update Member #######
############## Function For Save Truck #######
function func_save_truck($trc)
{
	$dt=time();
	ereg("^([0-9]{1,2})/([0-9]{1,2})/([0-9]{4})", $trc[trc_mot_expiry] , $mot_date);
	$trc_mot_expiry=mktime(0,0,1,$mot_date[1],$mot_date[2],$mot_date[3]);

	ereg("^([0-9]{1,2})/([0-9]{1,2})/([0-9]{4})", $trc[trc_reserved_to] , $reserve_date);
	$trc_reserved_to= mktime(0,0,1,$reserve_date[1],$reserve_date[2],$reserve_date[3]);

	
	#$R[trc_ex_date]=$dt+(60*60*24*30);
	
	
	  $SQL="INSERT INTO trucks SET
			trc_title ='$trc[trc_title]',
			trc_mem_id ='$trc[trc_mem_id]',
			trc_stockno ='$trc[trc_stockno]',
			trc_reg_type ='$trc[trc_reg_type]',
			trc_regno ='$trc[trc_regno]',
			trc_mileage ='$trc[trc_mileage]',
			trc_show_mileage ='$trc[trc_show_mileage]',
			trc_mot_expiry ='$trc_mot_expiry',
			trc_mk_id ='$trc[trc_mk_id]',
			trc_mod_id ='$trc[trc_mod_id]',
			trc_year ='$trc[trc_year]',
			trc_ac_id ='$trc[trc_ac_id]',
			trc_cht_id ='$trc[trc_cht_id]',
			trc_chh_id ='$trc[trc_chh_id]',
			trc_bhp ='$trc[trc_bhp]',
			trc_euro_level ='$trc[trc_euro_level]',
			trc_bt_id ='$trc[trc_bt_id]',
			trc_ct_id ='$trc[trc_ct_id]',
			trc_trim ='$trc[trc_trim]',
			trc_transmission ='$trc[trc_transmission]',
			trc_fuel ='$trc[trc_fuel]',
			trc_sus_id ='$trc[trc_sus_id]',
			trc_gearbox ='$trc[trc_gearbox]',
			trc_cab_color ='$trc[trc_cab_color]',
			trc_chassis_color ='$trc[trc_chassis_color]',
			trc_body_color ='$trc[trc_body_color]',
			trc_wheel_type ='$trc[trc_wheel_type]',
			trc_tipping_gear ='$trc[trc_tipping_gear]',
			trc_reserved_to ='$trc_reserved_to',
			trc_others_desc ='$trc[trc_others_desc]',
			trc_engine_rating ='$trc[trc_engine_rating]',
			trc_interior_rating ='$trc[trc_interior_rating]',
			trc_exterior_rating ='$trc[trc_exterior_rating]',
			trc_overall_rating ='$trc[trc_overall_rating]',
			trc_show_email ='$trc[trc_show_email]',
			trc_show_phone ='$trc[trc_show_phone]',
			trc_curr_loc ='$trc[trc_curr_loc]',
			trc_curr_status ='$trc[trc_curr_status]',
			trc_price ='$trc[trc_price]',
			trc_price_suffix ='$trc[trc_price_suffix]',
			trc_active='1',
			trc_postcode ='$trc[trc_postcode]',
			
			trc_address1='$trc[trc_address1]',
			trc_address2='$trc[trc_address2]',
			
			trc_city='$trc[trc_city]',
			
			trc_weight='$trc[trc_weight]',
			trc_county='$trc[trc_county]',
			trc_price_is_poa='$trc[trc_price_is_poa]',
			trc_is_use_acount_location='$trc[trc_is_use_acount_location]',
			
			trc_date='$dt'";
	$trc_id=ei($SQL);
	upload_file("trc_img_main",$trc_id,"truck","main",0,$msg);
	for($i=1;$i<=5;$i++)
	{
		upload_file("trc_img$i",$trc_id,"truck","$sstype",1,$msg);
	}
	make_truck_count($trc[trc_mk_id]);
	func_update_trc_title($trc_id);
	return $trc_id;
}

//			trc_ex_date='$R[trc_ex_date]',
########################################################33


function func_update_trc_title($trc_id)
{
	
	//print $trc_id;
	gri("trucks, make, model","where trc_id='$trc_id'   and  mk_id=trc_mk_id and trc_mod_id=mod_id ","",$data);
	
	gri("axle_configuration","where ac_id='$data[trc_ac_id]' ","",$ax_data);
	$title=$data[mk_title]." ".$data[mod_title]." ".$ax_data[ac_title];
	
	//print "1.$trc_id". $title ."<br />";
	$SQL="UPDATE  `trucks` SET  `trc_title` =  '$title' WHERE  `trc_id` ='$trc_id' " ;
	ei($SQL);
}

###########################################################
function get_update_exp_date( $trc_id  , $inv_title="renew" )
{
	gri("trucks","where trc_id='$trc_id'","",$data);
	if($data[trc_ex_date]<time())
		$dateFrom=time();
	else
		$dateFrom=$data[trc_ex_date];	
		
	
	gri("site_admin", "" , "" , $sa_data);
	
	/*#if member have any special pakage
	if(gri("plan_package","where pp_mem_id='$data[trc_mem_id]' and pp_mem_type='2'","",$pp_data))
	{
		$ex_date=$dateFrom+($pp_data[pp_duration]*30*24*60*60);	
		
		if(gri("plan" , "where pl_pp_id='$pp_data[pp_id]' and pl_active=1  " , "" ,$plan_data))
		{
			#price calculation 
			if($plan_data[pl_is_vat])
			{
				$vat= (($sa_data[sa_vat]*$plan_data[pl_price])/100);
				$price=$plan_data[pl_price] + (($sa_data[sa_vat]*$plan_data[pl_price])/100);
			}	
			else
				$price=$plan_data[pl_price];	
		
		}
		else
		{
			#price calculation 
			if($sa_data[sa_ps_vat_active])
			{
				$vat= (($sa_data[sa_vat]*$sa_data[sa_ps_adv_price])/100);
				$price=$sa_data[sa_ps_adv_price] + (($sa_data[sa_vat]*$sa_data[sa_ps_adv_price])/100);
			}	
			else
				$price=$sa_data[sa_ps_adv_price];			
		
		}
		
		#does not decide what plan price are used
	}
	elseif(  grc("member"," where mem_id='$data[trc_mem_id]' and  mem_type='1' ")  )#is trade member
	{
		if(gri("plan_package","where pp_mem_type='1'","",$pp_data)) #trade pakage for alll prson
		{
			$ex_date=$dateFrom+($pp_data[pp_duration]*30*24*60*60);
			#does not decide what plan price are used	
			$vat= (($sa_data[sa_vat]*$sa_data[sa_ps_adv_price])/100);
			$price=$sa_data[sa_ps_adv_price] + (($sa_data[sa_vat]*$sa_data[sa_ps_adv_price])/100);
			
			
		}	
		else#if no default tarade pakage avlable
		{
			
			$ex_date=$dateFrom+($sa_data[sa_ps_adv_duration]*30*24*60*60);	
			
			#price calculation 
			if($sa_data[sa_ps_vat_active])
			{
				$vat= (($sa_data[sa_vat]*$sa_data[sa_ps_adv_price])/100);
				$price=$sa_data[sa_ps_adv_price] + (($sa_data[sa_vat]*$sa_data[sa_ps_adv_price])/100);
			}	
			else
				$price=$sa_data[sa_ps_adv_price];	
		}	
	}*/
	
	
	# trade member has plan and package
	
	if( grc("member"," where mem_id='$data[trc_mem_id]' and  mem_type='1' and  mem_payment_type='1' "))
	{
		if(gri("plan_package","where pp_mem_id='$data[trc_mem_id]' and pp_mem_type='2'","",$pp_data))
		{
			$ex_date=$dateFrom+($pp_data[pp_duration]*30*24*60*60);	
		}
		elseif(gri("plan_package","where pp_mem_type='1'","",$pp_data)) #trade pakage for alll prson
		{
			$ex_date=$dateFrom+($pp_data[pp_duration]*30*24*60*60);	
		}
		else
		{
			$ex_date=$dateFrom+($sa_data[sa_ps_adv_duration]*30*24*60*60);
			#price calculation 
			if($sa_data[sa_ps_vat_active])
			{
				$vat= (($sa_data[sa_vat]*$sa_data[sa_ps_adv_price])/100);
				$price=$sa_data[sa_ps_adv_price] + (($sa_data[sa_vat]*$sa_data[sa_ps_adv_price])/100);
			}	
			else
				$price=$sa_data[sa_ps_adv_price];	
	
		}
	}
	else
	{
		
		$ex_date=$dateFrom+($sa_data[sa_ps_adv_duration]*30*24*60*60);
		#price calculation 
		if($sa_data[sa_ps_vat_active])
		{
			$vat= (($sa_data[sa_vat]*$sa_data[sa_ps_adv_price])/100);
			$price=$sa_data[sa_ps_adv_price] + (($sa_data[sa_vat]*$sa_data[sa_ps_adv_price])/100);
		}	
		else
			$price=$sa_data[sa_ps_adv_price];	
	
	}	
	
/*	#generate invoice for this ads
	if(genrate_invoice(  $trc_id  , $ex_date  , $price , $inv_title )==1)
	{
		$SQL="UPDATE  `trucks` SET  `trc_ex_date` =  '$ex_date' WHERE  `trc_id` ='$trc_id' ;";
		ei($SQL);
	}	*/
	
	
	$ary=array( "ex_date"=>$ex_date , "price"=>$price , "vat"=>$vat );
	return ($ary);
	
}

###########################################################
function genrate_invoice(  $trc_id  , $ex_date  , $price  , $inv_title , $vat=0   , $stauthcode="")
{
	if(gri("trucks" , "where trc_id='$trc_id'","",$data))
	{
		#with in one month genrate Invoice only one time to every member 
		get_se_time(time() , $ms_date,$me_date);
		$R=array();
		
		# adver member id trade and payment type is acount pay
		if(  gri("invoice,member" , " where (inv_date  BETWEEN $ms_date and $me_date  ) and inv_mem_id='$data[trc_mem_id]'   and inv_mem_id=mem_id and mem_payment_type='1' and  mem_type='1'    ","",$inv_data ))
		{
			$R[inv_number]=$inv_data[inv_number];
		}	
		else
			$R[inv_number]=get_invoice_no();
		

		$R[inv_mem_id]=$data[trc_mem_id];
		$R[inv_pl_id]=$pp_data[pl_id];
		$R[inv_trc_id]=$data[trc_id];
		$R[inv_amt]=$price;
		$R[inv_date]=time();
		$R[trc_ex_date]=$ex_date;
		$R[inv_vat]=$vat;
		$R[inv_athcode]=$stauthcode;
		
		
		
		# save  invoice 
		$SQL="INSERT INTO  `invoice` SET
				`inv_number` =  '$R[inv_number]',
				`inv_title`='$inv_title',
				`inv_pl_id` =  '$R[inv_pl_id]',
				`inv_mem_id` =  '$R[inv_mem_id]',
				`inv_trc_id` =  '$R[inv_trc_id]',
				`inv_amt` =  '$R[inv_amt]',
				`inv_vat` ='$R[inv_vat]',
				`inv_athcode`='$R[inv_athcode]',
				`inv_date` =  '$R[inv_date]';";
		$inv_id=ei($SQL);
	}
	
	return $inv_id;

}


function get_invoice_no(  )
{
	$c = '';
    while(strlen($c)<6){
        $c .= sprintf("%02X", mt_rand(0, 255));
    }
    
	$c=rand()."inv".$c;
	return $c;
}

############## Function For Save Truck #######
############## Function For Update Truck #######
function func_update_truck($trc)
{
	ereg("^([0-9]{1,2})/([0-9]{1,2})/([0-9]{4})", $trc[trc_mot_expiry] , $mot_date);
	$trc_mot_expiry=mktime(0,0,1,$mot_date[1],$mot_date[2],$mot_date[3]);

	ereg("^([0-9]{1,2})/([0-9]{1,2})/([0-9]{4})", $trc[trc_reserved_to] , $reserve_date);
	$trc_reserved_to= mktime(0,0,1,$reserve_date[1],$reserve_date[2],$reserve_date[3]);

	
	  $SQL="UPDATE trucks SET	  		
			trc_mem_id ='$trc[trc_mem_id]',
			trc_stockno ='$trc[trc_stockno]',
			trc_reg_type ='$trc[trc_reg_type]',
			trc_regno ='$trc[trc_regno]',
			trc_mileage ='$trc[trc_mileage]',
			trc_show_mileage ='$trc[trc_show_mileage]',
			trc_mot_expiry ='$trc_mot_expiry',
			trc_mk_id ='$trc[trc_mk_id]',
			trc_mod_id ='$trc[trc_mod_id]',
			trc_year ='$trc[trc_year]',
			trc_ac_id ='$trc[trc_ac_id]',
			trc_cht_id ='$trc[trc_cht_id]',
			trc_chh_id ='$trc[trc_chh_id]',
			trc_bhp ='$trc[trc_bhp]',
			trc_euro_level ='$trc[trc_euro_level]',
			trc_bt_id ='$trc[trc_bt_id]',
			trc_ct_id ='$trc[trc_ct_id]',
			trc_trim ='$trc[trc_trim]',
			trc_transmission ='$trc[trc_transmission]',
			trc_fuel ='$trc[trc_fuel]',
			trc_sus_id ='$trc[trc_sus_id]',
			trc_gearbox ='$trc[trc_gearbox]',
			trc_cab_color ='$trc[trc_cab_color]',
			trc_chassis_color ='$trc[trc_chassis_color]',
			trc_body_color ='$trc[trc_body_color]',
			trc_wheel_type ='$trc[trc_wheel_type]',
			trc_tipping_gear ='$trc[trc_tipping_gear]',
			trc_reserved_to ='$trc_reserved_to',
			trc_others_desc ='$trc[trc_others_desc]',
			trc_engine_rating ='$trc[trc_engine_rating]',
			trc_interior_rating ='$trc[trc_interior_rating]',
			trc_exterior_rating ='$trc[trc_exterior_rating]',
			trc_overall_rating ='$trc[trc_overall_rating]',
			trc_show_email ='$trc[trc_show_email]',
			trc_show_phone ='$trc[trc_show_phone]',
			trc_curr_loc ='$trc[trc_curr_loc]',
			trc_curr_status ='$trc[trc_curr_status]',
			trc_price ='$trc[trc_price]',
			trc_price_suffix ='$trc[trc_price_suffix]',
			trc_active='1',
			trc_postcode ='$trc[trc_postcode]',
			
			trc_address1='$trc[trc_address1]',
			trc_address2='$trc[trc_address2]',
			
			trc_city='$trc[trc_city]',
			trc_weight='$trc[trc_weight]',
			trc_price_is_poa='$trc[trc_price_is_poa]',
			trc_is_use_acount_location='$trc[trc_is_use_acount_location]',
			trc_county='$trc[trc_county]'
			where 	trc_id='$trc[trc_id]'";
	eq($SQL,$rs);
	
	upload_file("trc_img_main",$trc[trc_id],"truck","main",0,$msg);
	for($i=1;$i<=5;$i++)
	{
		upload_file("trc_img$i",$trc[trc_id],"truck","",1,$msg);
	}	
	if($trc["trc_main_img"]>0)
	{
		get_upload_info($trc[trc_id],"truck"," ",$trc["trc_main_img"]-1,$up);
		$SQL="UPDATE uploads SET up_s_sub_type='' WHERE up_s_id='$trc[trc_id]' AND up_s_type='truck'";
		eq($SQL,$rs);
		$SQL="UPDATE uploads SET up_s_sub_type='main' WHERE up_id='$up[up_id]' AND up_s_id='$trc[trc_id]' AND up_s_type='truck'";
		eq($SQL,$rs);
	}
	make_truck_count(  $trc[trc_mk_id]);
	func_update_trc_title($trc[trc_id]);
	return $trc[trc_id];
}
############## Function For Update Truck #######
#########Function For Save Manage Pages#######

function func_save_managepage($manag)
{
	$dt=time();
	$page_name=strtolower($manag[sp_name]);
	$word_trim=explode(" ",$page_name);
	if(str_word_count($manag[sp_name])>1)
	{
	$word_trim="$word_trim[0]_$word_trim[1]";
	}else{
	$word_trim=$word_trim[0];
	}
	$SQL = "INSERT INTO site_page SET
			sp_key='$word_trim',
			sp_name='$manag[sp_name]',
			sp_heading='$manag[sp_heading]',
			sp_detail='$manag[sp_detail]', 
			sp_active='$manag[sp_active]',
			sp_date='$dt'";
	$mng_id=ei($SQL);
	upload_file("manag_page",$mng_id,"site_page","",0,$msg);
	return $manag[sp_id];
}

#########Function For Save Manage Pages#######

#########Function For Update Manage Pages#######
function func_update_managepage($manag)
{
	$dt=time();
	$page_name=strtolower($manag[sp_name]);
	$word_trim=explode(" ",$page_name);
	if(str_word_count($manag[sp_name])>1)
	{
	$word_trim="$word_trim[0]_$word_trim[1]";
	}else{
	$word_trim=$word_trim[0];
	}
	$SQL = "UPDATE site_page SET
			sp_key='$word_trim',
			sp_name='$manag[sp_name]',
			sp_heading='$manag[sp_heading]',
			sp_detail='$manag[sp_detail]',
			sp_date='$dt' 
			where sp_id='$manag[sp_id]'";
	eq($SQL,$rs);
	upload_file("manag_page",$manag[sp_id],"site_page","",0,$msg);
	return $manag[sp_id];
}
#########Function For Update Manage Pages#######

#############Function For Save Coupon ############
function func_save_coupon($cou)
{
	$dt=time();
	ereg("^([0-9]{1,2})/([0-9]{1,2})/([0-9]{4})", $cou[cou_expiry_date] , $edate);
	ereg("^([0-9]{1,2})/([0-9]{1,2})/([0-9]{4})", $cou[cou_start_date] , $sdate);
	$start_date=mktime(0,0,1,$sdate[1],$sdate[2],$sdate[3]);
	$expiry_date= mktime(0,0,1,$edate[1],$edate[2],$edate[3]);
	
	
	//cou_dl_id='$cou[cou_dl_id]',
	$SQL="INSERT INTO coupon SET
		  
		  
		  cou_mem_type='$cou[cou_mem_type]',
		  cou_mem_id='$cou[cou_mem_id]',
		  
		  cou_title='$cou[cou_title]',
		  cou_code='$cou[cou_code]',
		  cou_start_date='$start_date',
		  cou_expiry_date='$expiry_date',
		  cou_discount_type='$cou[cou_discount_type]',
		  cou_discount='$cou[cou_discount]',
		  cou_used='$cou[cou_used]',
		  cou_date='$dt'";
	$cou_id=ei($SQL);
	return $cou_id;
}
#############Function For Save Coupon ############
#############Function For Update Coupon ##########
function func_update_coupon($cou)
{ 
	$R=DIN_ALL($_REQUEST);
	$dt=time();
	ereg("^([0-9]{1,2})/([0-9]{1,2})/([0-9]{4})", $cou[cou_expiry_date] , $edate);
	ereg("^([0-9]{1,2})/([0-9]{1,2})/([0-9]{4})", $cou[cou_start_date] , $sdate);
	$start_date=mktime(0,0,1,$sdate[1],$sdate[2],$sdate[3]);
	$expiry_date= mktime(0,0,1,$edate[1],$edate[2],$edate[3]);
	
	
	//cou_dl_id='$cou[cou_dl_id]',
	$SQL="UPDATE coupon SET
		  cou_mem_type='$cou[cou_mem_type]',
		  cou_mem_id='$cou[cou_mem_id]',
			
			
			cou_title='$cou[cou_title]',
				
			cou_code='$cou[cou_code]',		
			cou_start_date='$start_date',
			cou_expiry_date='$expiry_date',
			cou_discount_type='$cou[cou_discount_type]',
		  	cou_discount='$cou[cou_discount]',
		  	cou_used='$cou[cou_used]'
			where cou_id='$cou[cou_id]'";
			eq($SQL,$rs);
	return $cou[cou_id];
}

#############Function For Update Coupon ##########
############## Function For Save Banner #######
function func_save_banner($ba)
{
	$R=DIN_ALL($_REQUEST);
	$dt=time();
	
	ereg("^([0-9]{1,2})/([0-9]{1,2})/([0-9]{4})", $ba[ba_start_date] , $sdate);
	$start_date=mktime(0,0,1,$sdate[1],$sdate[2],$sdate[3]);
	
	ereg("^([0-9]{1,2})/([0-9]{1,2})/([0-9]{4})", $ba[ba_expiry_date] , $edate);
	if(count($edate)>0)
	{
		$expiry_date= mktime(0,0,1,$edate[1],$edate[2],$edate[3]);
	}else{
		$expiry_date=$ba[ba_expiry_date];
	}
	
	
	$ba_mak_id=implode(",",$_REQUEST[ba_mak_id]);
		
	if($ba[ba_dl_id]=="-1")
	{
		$ba[ba_dl_id]=0;
	}
	
	$comma="";
	foreach($_REQUEST[ba_mak_id] as $v)
	{
	$arr_ba_mak_id.=$comma.$v;
	$comma=",";
	}
	
	$SQL="INSERT INTO banner SET
		  ba_dl_id='$ba[ba_dl_id]',
		  ba_title='$ba[ba_title]',
		  ba_url='$ba[ba_url]',
		  ba_text='$ba[ba_text]',
		  ba_type='$ba[ba_type]',
		  ba_flash_width='$ba[ba_flash_width]',
		  ba_flash_height='$ba[ba_flash_height]',
		  ba_zip_code='$ba[ba_zip_code]',
		  ba_zip_code_all='$ba[ba_zip_code_all]',
		  ba_mak_id='$arr_ba_mak_id',
		  ba_make_all='$ba[ba_make_all]',
		  ba_start_date='$start_date',
		  ba_expiry_date='$expiry_date',
		  ba_group='$ba[ba_group]',
		  ba_row_set='$ba[ba_row_set]',
		  ba_bl_id='$ba[ba_bl_id]',
		  ba_active='$ba[ba_active]',
		  ba_date='$dt'";
	$ba_id=ei($SQL);
	$banner_size=get_banner_size($ba[ba_bl_id], $ba[ba_group]);
	$up_id=upload_file("ba_img",$ba_id,"banner",$banner_size[bkey],0,$ba);
	if($up_id>0)
	{
		create_thumb($up_id,$banner_size[width]);
	}
	return $ba_id;
}
############## Function For Save Banner #######
############## Function For Update Banner #######
function func_update_banner($ba)
{
	$dt=time();
	ereg("^([0-9]{1,2})/([0-9]{1,2})/([0-9]{4})", $ba[ba_start_date] , $sdate);
	$start_date=mktime(0,0,1,$sdate[1],$sdate[2],$sdate[3]);
	
	ereg("^([0-9]{1,2})/([0-9]{1,2})/([0-9]{4})", $ba[ba_expiry_date] , $edate);
	if(count($edate)>0)
	{
		$expiry_date= mktime(0,0,1,$edate[1],$edate[2],$edate[3]);
	}else{
		$expiry_date=$ba[ba_expiry_date];
	}
	$ba_mak_id=implode(",",$_REQUEST[ba_mak_id]);
		
	$comma="";
	foreach($_REQUEST[ba_mak_id] as $v)
	{
	$arr_ba_mak_id.=$comma.$v;
	$comma=",";
	}
	
	$SQL="UPDATE banner SET
		  ba_dl_id='$ba[ba_dl_id]',
		  ba_title='$ba[ba_title]',
		  ba_url='$ba[ba_url]',
		  ba_text='$ba[ba_text]',
		  ba_type='$ba[ba_type]',
		  ba_flash_width='$ba[ba_flash_width]',
		  ba_flash_height='$ba[ba_flash_height]',
		  ba_zip_code='$ba[ba_zip_code]',
		  ba_zip_code_all='$ba[ba_zip_code_all]',
		  ba_mak_id='$arr_ba_mak_id',
		  ba_make_all='$ba[ba_make_all]',
		  ba_start_date='$start_date',
		  ba_expiry_date='$expiry_date',
		  ba_group='$ba[ba_group]',
		  ba_row_set='$ba[ba_row_set]',
		  ba_bl_id='$ba[ba_bl_id]',
		  ba_active='$ba[ba_active]',
		  ba_date='$dt'
		  WHERE ba_id='$ba[ba_id]'";
	eq($SQL,$rs);
	//get actual banner size
	$banner_size=get_banner_size($ba[ba_bl_id], $ba[ba_group]);
	$up_id=upload_file("ba_img",$ba[ba_id],"banner",$banner_size[bkey],0,$msg);
	if($up_id>0)
	{
		create_thumb($up_id,$banner_size[width]);
	}
	return $ba[ba_id];
}

################Function For Save News ###############
function func_save_news($news)
{
	$R=DIN_ALL($_REQUEST);
	$dt=time();
	$SQL="INSERT INTO news SET
		  news_title='$news[news_title]',
		  news_short_description='$news[news_short_description]',
		  news_description='$news[news_description]',
		  news_active='$news[news_active]',
		  news_date='$dt'";
	$news_id=ei($SQL);
	upload_file("mem_avatar",$news_id,"news","",0,$news);
	return $news_id;
}

################Function For Save News ################ 
###############Function For Update News #################
function func_update_news($news)
{
	$R=DIN_ALL($_REQUEST);
	$dt=time();
	$SQL="UPDATE news SET
		  news_title='$news[news_title]',
		  news_short_description='$news[news_short_description]',
		  news_description='$news[news_description]',
		  news_active='$news[news_active]',
		  news_date='$dt'
		  WHERE news_id='$news[news_id]'";
	eq($SQL,$rs);
	upload_file("mem_avatar",$news[news_id],"news","",0,$news);
	return $news[news_id];
}
###############function For Update News ###############
		#PLAN 
#############################################

function func_save_plan(  $R)
{
	$R[pl_date]=time();
	$SQL="INSERT INTO  `plan` SET  
`pl_price` =  '$R[pl_price]',
`pl_pp_id` =  '$R[pl_pp_id]',
`pl_is_vat` =  '$R[pl_is_vat]',
`pl_min_adverts` =  '$R[pl_min_adverts]',
`pl_max_adverts` =  '$R[pl_max_adverts]',
`pl_active` =  '$R[pl_active]',
`pl_date` =  '$R[pl_date]' ;";
	
 return (  ei($SQL));
}

function func_update_plan(  $R)
{
	$SQL="update  `plan` SET  
`pl_price` =  '$R[pl_price]',
`pl_pp_id` =  '$R[pl_pp_id]',
`pl_is_vat` =  '$R[pl_is_vat]',
`pl_min_adverts` =  '$R[pl_min_adverts]',
`pl_max_adverts` =  '$R[pl_max_adverts]',
`pl_active` =  '$R[pl_active]' where pl_id='$R[pl_id]'  ";

 return (  ei($SQL));

}
function func_delete_plan($R)
{
	$SQL="DELETE FROM plan where pl_id='$R[pl_id]'";
	ei($SQL);

}

##############################################
		#PAKAGE
#############################################

function func_save_plan_package(  $R)
{
	$R[pp_date]=time();
	$SQL="INSERT INTO  `plan_package` SET 
						`pp_title` =  '$R[pp_title]',
						`pp_mem_type` =  '$R[pp_mem_type]',
						`pp_mem_id` =  '$R[pp_mem_id]',
						`pp_duration` =  '$R[pp_duration]',
						`pp_active` =  '1',
						`pp_date` =  '$R[pp_date]' ";


 return (  ei($SQL));
}

function func_update_plan_package(  $R)
{
	$SQL="update  `plan_package` SET  

						`pp_title` =  '$R[pp_title]',
						`pp_mem_type` =  '$R[pp_mem_type]',
						`pp_mem_id` =  '$R[pp_mem_id]',
						`pp_duration` =  '$R[pp_duration]' where pp_id='$R[pp_id]'  ";

 return (  ei($SQL));
}

function func_delete_plan_package($R)
{
	$SQL="DELETE FROM plan_package where pp_id='$R[pp_id]'";
	ei($SQL);
}

function func_increase_pop($trc_id)
{

	$SQL="UPDATE   `trucks` SET  `trc_tot_view` =trc_tot_view+1  WHERE `trc_id` ='$trc_id' ";
	ei($SQL);


}

############################################3
#message Section
############################################
function func_save_message($R)
{
	$R[msg_date]=time();
	$SQL="INSERT INTO message SET  `msg_p_msg_id` =  '$R[msg_p_msg_id]',
									
								`msg_from_mem_id` =  '$R[msg_from_mem_id]',
								`msg_to_mem_id` =  '$R[msg_to_mem_id]',
								`msg_subject` =  '$R[msg_subject]',
								`msg_message` =  '$R[msg_message]',
								`msg_is_open` =  '$R[msg_is_open]',
								`msg_is_archive` =  '$R[msg_is_archive]',
								`msg_date` =  '$R[msg_date]'";
	return ei($SQL);
}
function funcset_message_arch($R)
{

	$SQL="UPDATE  `message` SET  `msg_is_archive` =  '1' WHERE  `msg_id` ='$R[msg_id]'";
	ei($SQL);
}
function func_set_message_open($R)
{
	$SQL="UPDATE  `message` SET  `msg_is_open` =  '1' WHERE  `msg_id` ='$R[msg_id]'";
	ei($SQL);

}
function func_delete_message($R)
{
	$SQL="DELETE FROM message WHERE msg_id='$R[msg_id]'";
	ei($SQL);
}



?>