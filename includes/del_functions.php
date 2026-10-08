<?php
###################### Function For Delete Manufacturer ##########
function func_delete_manufacturer($ma_id)
{
	$SQL = "DELETE FROM manufacturer WHERE ma_id='$ma_id'";
	return eq($SQL,$rs);
}
#################### Function For Delete Manufacturer #########
###################### Function For Delete Make ##########
function func_delete_make($mk_id)
{
	$SQL="SELECT mod_id FROM model WHERE mod_mk_id='$mk_id'";
	eq($SQL,$rs);
	while($data=mfa($rs))
	{
		func_delete_model($data[mod_id]);
	}
	$SQL = "DELETE FROM make WHERE mk_id='$mk_id'";
	return eq($SQL,$rs);
}
#################### Function For Delete Make #########
###################### Function For Delete Model ##########
function func_delete_model($mod_id)
{
	$SQL = "DELETE FROM model WHERE mod_id='$mod_id'";
	return eq($SQL,$rs);
}
#################### Function For Delete Model #########
###################### Function For Delete Body Type ##########
function func_delete_body_type($bt_id)
{
	$SQL = "DELETE FROM body_type WHERE bt_id='$bt_id'";
	return eq($SQL,$rs);
}
#################### Function For Delete Body Type #########
###################### Function For Delete Cab Type ##########
function func_delete_cab_type($ct_id)
{
	$SQL = "DELETE FROM cab_type WHERE ct_id='$ct_id'";
	return eq($SQL,$rs);
}
#################### Function For Delete Cab Type #########
###################### Function For Delete Chassis Type ##########
function func_delete_chassis_type($cht_id)
{
	$SQL = "DELETE FROM chassis_type WHERE cht_id='$cht_id'";
	return eq($SQL,$rs);
}
#################### Function For Delete Chassis Type #########
###################### Function For Delete Chassis Height ##########
function func_delete_chassis_height($chh_id)
{
	$SQL = "DELETE FROM chassis_height WHERE chh_id='$chh_id'";
	return eq($SQL,$rs);
}
#################### Function For Delete Chassis Height #########
###################### Function For Delete Chassis Layout ##########
function func_delete_axle_configuration($ac_id)
{
	$SQL = "DELETE FROM axle_configuration WHERE ac_id='$ac_id'";
	return eq($SQL,$rs);
}
#################### Function For Delete Chassis Layout #########
###################### Function For Delete DriveLine Type ##########
function func_delete_driveline_type($dlt_id)
{
	$SQL = "DELETE FROM driveline_type WHERE dlt_id='$dlt_id'";
	return eq($SQL,$rs);
}
#################### Function For Delete DriveLine Type #########
###################### Function For Delete Suspension ##########
function func_delete_suspension($sus_id)
{
	$SQL = "DELETE FROM suspension WHERE sus_id='$sus_id'";
	return eq($SQL,$rs);
}
#################### Function For Delete Suspension #########
###################### Function For Delete Combination ##########
function func_delete_combination($com_id)
{
	$SQL = "DELETE FROM combination WHERE com_id='$com_id'";
	return eq($SQL,$rs);
}
#################### Function For Delete Combination #########

##################### Function to Delete Coupon##############
function func_delete_coupon_type($cou_id)
{
	$SQL = "DELETE FROM coupon WHERE cou_id='$cou_id'";
	return eq($SQL,$rs);
}
##################### Function to Delete Coupon ##############
##################### Function to Delete Banner ##############
function func_banner_delete($ba_id)
{
	$SQL="SELECT up_id FROM uploads WHERE up_s_id='$ba_id' AND up_s_type='banner'";
	eq($SQL,$rs);
	while($data=mfa($rs))
	{
		delete_upload($data[up_id]);
	}
	$SQL = "DELETE FROM banner WHERE ba_id='$ba_id'";
	return eq($SQL,$rs);
}
##################### Function to Delete Banner ##############
################# Function For Delete Member #############
function func_delete_member($mem_id)
{
	$SQL="SELECT up_id FROM uploads WHERE up_s_id='$mem_id' AND up_s_type='member'";
	eq($SQL,$rs);
	while($data=mfa($rs))
	{
		delete_upload($data[up_id]);
	}
	$SQL = "DELETE FROM member WHERE mem_id='$mem_id'";
	return eq($SQL,$rs);
}
################# Function For Delete Member #############
################# Function for Delete uploads ########## 
function delete_upload($up_id)
{
	global $UploadPath;
    $upload_path=$UploadPath;
    
    if(gri("uploads","WHERE up_id='$up_id'","",$up,0)==0)
	{
		return 0;
	}
    $fn=$upload_path.$up[up_fname].$up[up_ext];
    $fn_thumb=$upload_path.$up[up_fname]."_thumb".$up[up_ext];
    $fn_orig=$upload_path.$up[up_fname].$up[up_ext]."_orig";
    if(file_exists($fn))    {      unlink($fn);         }
    if(file_exists($fn_thumb))    {      unlink($fn_thumb);         }
    if(file_exists($fn_orig))    {      unlink($fn_orig);         }
    $SQL = "DELETE FROM uploads where up_id='$up_id'";
    eq($SQL,$rs);
    return ar();
}
################# Function for Delete uploads ########## 
################# Function for Delete Coupon ###########

function func_delete_coupon($cou_id)
{
	$SQL = "DELETE FROM coupon WHERE cou_id='$cou_id'";
	return eq($SQL,$rs);
}
################# Function for Delete Coupon ###########


function func_delete_truck( $trc_id )
{
	if(gri("trucks" , "where trc_id=$trc_id  " , "" , $trc))
	{
	
		$SQL="DELETE FROM  trucks  where trc_id=$trc_id  ";
		ei($SQL);
		make_truck_count($trc[trc_mk_id]);
		return 1;
	}	
	return 0;

}




?>