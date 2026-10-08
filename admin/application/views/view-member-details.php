
<!doctype html>
<html>
<head>
<title>Aafiya</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/checkbox-btn.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap-select.min.css" rel="stylesheet" type="text/css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
            $(document).ready(function () { 
             var a =  $("li[data-original-index='0']");
             $(a).parent().parent().parent().find(".filter-option.pull-left").css('color','#555555');
                 $(a).click( function(){
                 $(this).parent().parent().parent().find(".filter-option.pull-left").css('color','#555555');
                 });
                 
                   $("li").not( "[data-original-index='0']" ).click( function(){
                 $(this).parent().parent().parent().find(".filter-option.pull-left").removeAttr('style');
                 });
                
            });
</script>
<script src="js/validation.js"></script>
<style>
  .file-space{ margin-bottom: 20px; }
  .file-input{ margin-top: 10px; }
</style>
</head>


<body>
<div class="col-md-12">
<!--<header>
    <div class="row navigation">
        <div class="col-xs-6">
            <div class="img-responsive"><img src="images/newHeader1.png" width="25%" height="5%"></div>
        </div>
        <div class="col-xs-6 text-right">
            <div class="img-responsive"><img src="images/newHeader2.png" width="25%" height="5%"></div>
        </div>
    </div>
</header>-->
<section>

     <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                            <h2>Member Details</h2>
                            
                            <!--<h4>Member Details</h4>-->
                            
				</div>
                <div class="panel-body">
 <style>
.errd{
font-family : Verdana, Helvetica, sans-serif;
font-size :13px;
color:#ff260c;
margin-bottom:0px;
margin:0;
}

.btn {
    width: 100px;
    margin:0 10px;
}

.valid {
    font-size: 13px;
    color: red;
    margin-bottom: 0px;
    margin: 0;
    font-weight: bold;
    margin-top: 10px;
    margin-left: -15px;
}
.et1{
    
    text-align: center;
    margin-left: -40px;
}

#individualselect .form-group {
    margin-bottom:25px !important;
}
</style>
  <!--<h3 class='errd' id="errors" align="center"></h3>-->

    <form class="form-horizontal" role="form" id="" method="post" action="" enctype='multipart/form-data' onsubmit="return validationmember();">
					
				<div id="individualselect">						
                    <div class="form-group">
                        <label for="input1" class="col-sm-4 control-label">
                            Name*</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control"  id="fname" name="fname"  placeholder="First Name" >
                            <div class="col-md-12 valid" id="errors"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="input2" class="col-sm-4 control-label">
                            Last Name*</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control"  id="lname" name="lname"  placeholder="Last Name" >
                            <div class="col-md-12 valid" id="errors1"></div>
                        </div>
                    </div>				
					<div class="form-group">
                        <label for="input3" class="col-sm-4 control-label">
                           Date of Birth*</label>
                        <div class="col-sm-6">
                            <input name="dob" value="" data-format="DD-MM-YYYY" data-template="D MMM YYYY" class="form-control" id="input3">
                            <div class="col-md-12 valid" id="errors2"></div>
                        </div>
                    </div>
					<div class="form-group">
                        <label for="input4" class="col-sm-4 control-label">Passport Number*</label>
                         <div class="col-sm-6">
                        <input type="text" class="form-control"  placeholder="Passport Number" name="passport" id="passport">
                         <div class="col-md-12 valid" id="errors3"></div>
                        </div>
                    </div>
					<div class="form-group">
                        <label for="input5" class="col-sm-4 control-label">UID Number*</label>
                        <div class="col-sm-6">						
						<input class="form-control" type="text" placeholder="UID Number" name="uid_no" id="uid_no">
						<div class="col-md-12 valid" id="errors4"></div>
                        </div>
                    </div>
                    	<div class="form-group">
                        <label for="input6" class="col-sm-4 control-label">
                           Visa Issuing Emirates of UAE*</label>
                        <div class="col-sm-6">						
						<select class="form-control" id="visa_issuing" name="visa_issuing" >
						         <option value="select">Select States</option>
								<option value="Abu Dhabi">Abu Dhabi</option>
								<option value="Dubai">Dubai</option>
								<option value="Sharjah">Sharjah</option>
								<option value="Ajman">Ajman</option>
								<option value="Fujairah">Fujairah</option>
								<option value="Ras al Khaimah">Ras al Khaimah</option>
								<option value="Umm al Qaiwain">Umm al Qaiwain</option>
						</select>     
						 <div class="col-md-12 valid" id="errors5"></div>
                        </div>
                    </div>
					<div class="form-group">
                        <label for="input6" class="col-sm-4 control-label">
                           Emirates ID Number*</label>
                        <div class="col-sm-6">						
						<input class="form-control" type="text" placeholder="Emirates ID Number" name="emirates_no" 
						id="emirates_no" maxlength="17">    
						<div class="col-md-12 valid" id="errors6"></div>
                        </div>
                    </div>
                    
                    
                    
                   <div class="form-group">
                      <label for="input6" class="col-sm-4 control-label">
                           Members Height/Weight*</label>
                     <div class="col-md-3">
                         <div class="input-group">
                             <input type="text" class="form-control" name="height" placeholder="Height" id="height_cm">
                             <div class="input-group-addon">Cm</div>
                         </div>
                         <div class="col-md-12 valid" id="errors7"></div>
                      </div>
                     <div class="col-md-3">
                         <div class="input-group">
                         <input type="text" class="form-control" name="weight" placeholder="Weight" id="weight_kg">
                               <div class="input-group-addon">Kg</div>
                             </div>
                             <div class="col-md-12 valid" id="errors8"></div>
                      </div>
                    </div>
                   
   
					<div class="form-group marital">
                        <label for="input7" class="col-sm-4 control-label">
                           Marital Status*</label>
                        <div class="col-sm-6">						
						<div class="col-md-1 flwx">
                        <div class="s-input s-input--checkbox ">
                           <input class="radio-custom r1" type="radio"name="service_filteri" id="check1i" value="Married">
                           <label for="check1i" class="radio-custom-label "></label>
                        </div>
                      </div>
                      <div class="col-md-1 flwx1">
                        <div class="s-input s-input--checkbox check_left">
                          <input class="radio-custom r1" type="radio" name="service_filteri" id="check2i" value="Unmarried">
                         <label for="check2i" class="radio-custom-label "></label>
                        </div>
                      </div>
                      <div class="col-md-12 valid" id="errors9"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="input8" class="col-sm-4 control-label">
                          Relation*</label>
                        <div class="col-sm-6">						
						<select class="form-control" name="relation" id="relation">
								<option value="select">Relation</option>
								<option value="Head of Family">Head of Family</option>
								<option value="Wife">Wife</option>
								<option value="Son">Son</option>
								<option value="Daughter">Daughter</option>
								<option value="Maid">Maid</option>
								<option value="Domestic Worker">Domestic Worker</option>
						</select> 
						<div class="col-md-12 valid" id="errors10"></div>
                        </div>
                    </div>
                     <div class="form-group">
                        <label for="input8" class="col-sm-4 control-label">Gender*</label>
                        <div class="col-sm-6">						
						<select class="form-control" name="gender" id="gender">
								<option value="select">Gender</option>
								<option value="male">Male</option>
								<option value="female">Female</option>
						</select>      
						<div class="col-md-12 valid" id="errors11"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="input8" class="col-sm-4 control-label">
                          Residing location*</label>
                        <div class="col-sm-6">	
						<select class="form-control" name="residing_location" id="residing_location">
						<option value="0">Select Location</option>
												    <option value="101">NAKHLAT DEIRA</option>
												    <option value="111">AL CORNICHE</option>
												    <option value="112">AL RAS</option>
												    <option value="113">AL DAGHAYA</option>
												    <option value="114">AL BUTEEN</option>
												    <option value="115">AL SABKHA</option>
												    <option value="116">AYAL NASIR</option>
												    <option value="117">AL MURAR</option>
												    <option value="118">NAIF</option>
												    <option value="119">AL RIGGA</option>
												    <option value="121">CORNICHE DEIRA</option>
												    <option value="122">AL BARAHA</option>
												    <option value="123">AL MUTEENA</option>
												    <option value="124">AL MURAQQABAT</option>
												    <option value="125">RIGGAT AL BUTEEN</option>
												    <option value="126">ABU HAIL</option>
												    <option value="127">HOR AL ANZ</option>
												    <option value="128">AL KHABAISI</option>
												    <option value="129">PORT SAEED</option>
												    <option value="131">AL HAMRIYA PORT</option>
												    <option value="132">AL WUHEIDA</option>
												    <option value="133">HOR AL ANZ EAST</option>
												    <option value="134">AL MAMZAR</option>
												    <option value="213">NADD SHAMMA</option>
												    <option value="214">AL GARHOUD</option>
												    <option value="215">UMM RAMOOL</option>
												    <option value="216">AL RASHIDIYA</option>
												    <option value="221">DUBAI INTL AIRPORT</option>
												    <option value="226">AL TWAR FIRST</option>
												    <option value="227">AL TWAR SECOND</option>
												    <option value="228">AL TWAR THIRD</option>
												    <option value="231">AL NAHDA FIRST</option>
												    <option value="232">AL QUSAIS FIRST</option>
												    <option value="233">AL QUSAIS SECOND</option>
												    <option value="234">AL QUSAIS THIRD</option>
												    <option value="241">AL NAHDA SECOND</option>
												    <option value="243">AL QUSAIS IND SECOND</option>
												    <option value="244">MUHAISANAH THIRD</option>
												    <option value="245">MUHAISANAH FOURTH</option>
												    <option value="246">AL QUSAIS IND. THIRD</option>
												    <option value="247">AL QUSAIS IND. FOURTH</option>
												    <option value="248">AL QUSAIS IND. FIFTH</option>
												    <option value="251">MIRDIF</option>
												    <option value="252">MUHAISNAH FIRST</option>
												    <option value="262">AL MIZHAR FIRST</option>
												    <option value="263">AL MIZHAR SECOND</option>
												    <option value="264">MUHAISANAH SECOND</option>
												    <option value="265">OUD AL MUTEENA FIRST</option>
												    <option value="266">OUD AL MUTEENA SECOND</option>
												    <option value="267">MUHAISANAH FIFTH</option>
												    <option value="268">OUD AL MUTEENA THIRD</option>
												    <option value="271">WADI ALAMARDI</option>
												    <option value="281">AL KHWANEEJ FIRST</option>
												    <option value="282">AL KHWANEEJ SECOND</option>
												    <option value="283">ALEYAS</option>
												    <option value="284">AL TTAY</option>
												    <option value="300">World Island</option>
												    <option value="301">JUMEIRA ISLAND ONE</option>
												    <option value="311">AL SHINDAGHA</option>
												    <option value="312">AL SOUQ AL KABEER</option>
												    <option value="313">AL HAMRIYA</option>
												    <option value="314">UMM HURAIR FIRST</option>
												    <option value="315">UMM HURAIR SECOND</option>
												    <option value="316">AL RAFFA</option>
												    <option value="317">MANKHOOL</option>
												    <option value="318">AL KARAMA</option>
												    <option value="319">OUD METHA</option>
												    <option value="321">MADINAT DUBAI AL MELAHEYAH</option>
												    <option value="322">AL HUDAIBA</option>
												    <option value="323">AL JAFILIYA</option>
												    <option value="324">AL KIFAF</option>
												    <option value="325">ZAABEEL FIRST</option>
												    <option value="326">AL JADAF</option>
												    <option value="332">JUMEIRA FIRST</option>
												    <option value="333">AL BADA A</option>
												    <option value="334">AL SATWA</option>
												    <option value="335">TRADE CENTER FIRST</option>
												    <option value="336">TRADE CENTER SECOND</option>
												    <option value="337">ZA ABEEL SECOND</option>
												    <option value="342">JUMEIRA SECOND</option>
												    <option value="343">AL WASL</option>
												    <option value="345">BURJ KHALIFA</option>
												    <option value="346">BUISNESS BAY</option>
												    <option value="347">AL MERKADH</option>
												    <option value="352">JUMEIRA THIRD</option>
												    <option value="353">AL SAFA FIRST</option>
												    <option value="354">AL QOUZ FIRST</option>
												    <option value="355">AL QOUZ SECOND</option>
												    <option value="356">UMM SUQEIM FIRST</option>
												    <option value="357">AL SAFA SECOND</option>
												    <option value="358">AL QOUZ THIRD</option>
												    <option value="359">AL QOUZ FOURTH</option>
												    <option value="362">UMM SUQEIM SECOND</option>
												    <option value="363">AL MANARA</option>
												    <option value="364">AL QOUZE IND.FIRST</option>
												    <option value="365">AL QOUZE IND.SECOND</option>
												    <option value="631">HADAEQ SHEIKH MOHAMMED BIN RASHID</option>
												    <option value="643">WADI AL SAFA 2</option>
												    <option value="645">WADI AL SAFA 3</option>
												    <option value="646">WADI AL SAFA 4</option>
												    <option value="648">WADI AL SAFA 5</option>
												    <option value="664">WADI AL ASAFA 6</option>
												    <option value="665">WADI AL ASAFA 7</option>
												    <option value="671">AL BARSHA SOUTH FIRST</option>
												    <option value="672">AL BARSHA SOUTH SECOND</option>
												    <option value="673">AL BARSHA SOUTH THIRD</option>
												    <option value="674">AL HEBIAH FIRST</option>
												    <option value="675">AL HEBIAH SECOND</option>
												    <option value="676">AL HEBIAH THIRD</option>
												    <option value="681">AL BARSHA SOUTH FOURTH</option>
												    <option value="682">AL HEBIAH FOURTH</option>
												    <option value="683">AL HEBIAH FIFTH</option>
												    <option value="684">AL BARSHA SOUTH FIFTH</option>
												    <option value="685">ME AISEM FIRST</option>
												    <option value="431">WADI ALSHABAK</option>
												    <option value="686">ME AISEM SECOND</option>
												    <option value="711">AL AWIR FIRST</option>
												    <option value="721">AL AWIR SECOND</option>
												    <option value="724">ENKHALI</option>
												    <option value="727">AL WOHOOSH</option>
												    <option value="731">LEHBAB FIRST</option>
												    <option value="735">AL MERYAL</option>
												    <option value="736">NAZWAH</option>
												    <option value="811">WARSAN THIRD</option>
												    <option value="812">AL ROWAIYAH FIRST</option>
												    <option value="813">AL ROWAIYAH SECOND</option>
												    <option value="814">AL ROWAIYAH THIRD</option>
												    <option value="821">MEREIYEEL</option>
												    <option value="824">UMM AL DAMAN</option>
												    <option value="831">LEHBAB SECOND</option>
												    <option value="835">UMM AL MO MENEEN</option>
												    <option value="841">MARGHAM</option>
												    <option value="845">AL MAHA</option>
												    <option value="847">UMM ESELAY</option>
												    <option value="857">MARGAB</option>
												    <option value="861">YARAAH</option>
												    <option value="891">HATTA</option>
												    <option value="911">UMM NAHAD FIRST</option>
												    <option value="912">UMM NAHAD SECOND</option>
												    <option value="913">UMM NAHAD THIRD</option>
												    <option value="914">UMM NAHAD FOURTH</option>
												    <option value="915">AL YUFRAH 1</option>
												    <option value="916">AL YUFRAH 2</option>
												    <option value="917">AL MARMOOM</option>
												    <option value="921">AL YALAYIS 1</option>
												    <option value="922">AL YALAYIS 2</option>
												    <option value="923">AL YALAYIS 3</option>
												    <option value="924">AL YALAYIS 4</option>
												    <option value="925">AL YALAYIS 5</option>
												    <option value="931">AL LESAILY</option>
												    <option value="941">GRAYTEESAH</option>
												    <option value="951">SAIH AL SALAM</option>
												    <option value="956">AL HATHMAH</option>
												    <option value="961">AL SELAL</option>
												    <option value="967">GHADEER BARASHY</option>
												    <option value="971">SAIH AL DAHAL</option>
												    <option value="975">AL O SHOOSH</option>
												    <option value="978">SAIH SHUA ALAH</option>
												    <option value="981">MUGATRAH</option>
												    <option value="987">AL LAYAN 1</option>
												    <option value="988">AL LAYAN 2</option>
												    <option value="991">HEFAIR</option>
												    <option value="110">DUBAI (DISTRICT UNKNOWN)</option>
												    <option value="366">UMM SUQEIM THIRD</option>
												    <option value="367">UMM AL SHEIF</option>
												    <option value="368">AL QOUZE IND.THIRD</option>
												    <option value="369">AL QOUZE IND.FOURTH</option>
												    <option value="372">AL SAFOUH FIRST</option>
												    <option value="373">AL BARSHA FIRST</option>
												    <option value="375">AL BARSHA THIRD</option>
												    <option value="376">AL BARSHA SECOND</option>
												    <option value="381">NAKHLAT JUMEIRA</option>
												    <option value="382">AL SAFOUH SECOND</option>
												    <option value="383">AL THANYAH FIRST</option>
												    <option value="384">AL THANYAH SECOND</option>
												    <option value="388">AL THANYAH THIRD</option>
												    <option value="392">MARSA DUBAI</option>
												    <option value="393">AL THANYAH FIFTH</option>
												    <option value="394">AL THANYAH  FOURTH</option>
												    <option value="412">AL KHEERAN</option>
												    <option value="413">RAS AL KHOR</option>
												    <option value="414">AL KHAIRAN FIRST</option>
												    <option value="415">AL KHAIRAN SECOND</option>
												    <option value="416">NADD AL HAMAR</option>
												    <option value="421">AL WARQAA FIRST</option>
												    <option value="422">AL WARQA A SECOND</option>
												    <option value="424">AL WARQA A FOURTH</option>
												    <option value="425">AL WARQA A FIFTH</option>
												    <option value="431">WADI ALSHABAK</option>
												    <option value="501">NAKHLAT JABAL ALI</option>
												    <option value="502">AL WAJEHAH AL BHARIYAH</option>
												    <option value="511">HESSYAN FIRST</option>
												    <option value="512">HESSYAN SECOND</option>
												    <option value="513">SAIH SHUAIB 1</option>
												    <option value="516">JABAL ALI INDUSTRIAL THIRD</option>
												    <option value="518">JABAL ALI INDUSTRIAL SECOND</option>
												    <option value="521">MADINAT AL MATAAR</option>
												    <option value="531">SAIH SHUAIB 2</option>
												    <option value="532">SAIH SHUAIB 3</option>
												    <option value="533">SAIH SHUAIB 4</option>
												    <option value="591">JABAL ALI FIRST</option>
												    <option value="592">ABAL ALI SECOND</option>
												    <option value="593">ABAL ALI THIRD</option>
												    <option value="594">MENA JABAL ALI</option>
												    <option value="597">DUBAI INVESTMENT PARK SECOND</option>
												    <option value="598">DUBAI INVESTMENT PARK FIRST</option>
												    <option value="599">JABAL ALI INDUSTRIAL FIRST</option>
												    <option value="611">BU KADRA</option>
												    <option value="612">RAS AL KHOR IND. FIRST</option>
												    <option value="613">RAS AL KHOR IND. SECOND</option>
												    <option value="614">RAS AL KHOR IND. THIRD</option>
												    <option value="615">NADD AL SHIBA SECOND</option>
												    <option value="616">NADD AL SHIBA THIRD</option>
												    <option value="617">NADD AL SHIBA FOURTH</option>
												    <option value="618">NADD AL SHIBA FIRST</option>
												    <option value="621">WARSAN FIRST</option>
												    <option value="622">WARSAN SECOND</option>
												    <option value="624">WARSAN FOURTH</option>
												    <option value="626">NADD HESSA</option>
												    <option value="100">OTHER EMIRATES (OUTSIDE DUBAI)</option>
												</select>   
						<div class="col-md-12 valid" id="errors12"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="input9" class="col-sm-4 control-label">
                          Salary*</label>
                        <div class="col-sm-6">						
						<select class="form-control" name="salary" id="salary">
							<option value="select">Salary Salary</option>
								<option value="4000 AED">4000 AED</option>
								<option value="Between 4000 AED to 12000 AED">Between 4000 AED to 12000 AED</option>
								<option value="Above 12000 AED">Above 12000 AED</option>
								<option value="no salary for dependents">No salary for dependents</option>
						</select>   
						<div class="col-md-12 valid" id="errors13"></div>
                        </div>
                    </div>
                    
                     <div class="form-group">
                        <label for="input10" class="col-sm-4 control-label">
                           Select Plan*</label>
                        <div class="col-sm-6">						
						<select class="form-control" name="plan_name" id="plan_name">
						    <option value="select">Select Plan</option>
						    <option value="1">APN Edge</option>
						    <option value="2">APN Enhanced</option>
						    <option value="3">APN BASIC</option>
						  </select> 
						  <div class="col-md-12 valid" id="errors14"></div>
						
                        </div>
                    </div>
          <div class="form-group">
            <div class="col-sm-12 file-space">
            <label for="input11" class="col-sm-4 control-label file-input">Attach Documents*</label>
            </div>
                  <div class="col-sm-12 planattach">

                  <div class="col-sm-12 file-space"> 
                  <label for="input9" class="col-sm-4 control-label">Visa*</label>
                  <input type="file" class="form-control-file file-input" name="visadoc" id="visadoc" accept="image/jpeg,image/gif,image/png,application/pdf">
                  <div class="col-md-12 valid et1" id="errors15"></div>
                  </div>

                  <div class="col-sm-12 file-space">
				  <label for="input9" class="col-sm-4 control-label">Passport*</label>
				  <input type="file" class="form-control-file file-input" name="passportdoc" id="passportdoc" accept="image/jpeg,image/gif,image/png,application/pdf">
                  <div class="col-md-12 valid et1" id="errors16"></div>
                </div>

                  <div class="col-sm-12 file-space">
					   <label for="input9" class="col-sm-4 control-label">Emirates doc*</label>
					    <input type="file" class="form-control-file file-input" name="emiratesdoc" id="emiratesdoc" accept="image/jpeg,image/gif,image/png,application/pdf">
					    <div class="col-md-12 valid et1" id="errors17"></div>
                </div>

                  <div class="col-sm-12">
					  <label for="input9" class="col-sm-4 control-label">Image of Member jpeg/jpg*</label>
					  <input type="file" class="form-control-file file-input" name="memberimage" id="memberimage" accept="image/jpeg,image/gif,image/png">
					   <div class="col-md-12 valid et1" id="errors18"></div>
					   </div>

                        </div>
                        
                    </div>


					<div class="form-group">
					<!-- box__form -->
                        <div class="box__form all_chapter col-md-11">
              <div class="col-md-12">
                <div class="chapter_box ">
                    <h3 class="text-center"><strong>Health Declaration Form</strong></h3>
                    <h5>Chapter A</h5>

                    <div class="row">
                      <div class="col-md-10">
                        <p>Insurance History (in case answer is "Yes," specify reason) </p>
                      </div>
                      <div class="col-md-1">
                        <h6>Yes</h6>
                      </div>
                      <div class="col-md-1">
                        <h6>No</h6>
                      </div>
                    </div><!-- row -->

                    <div class="row top_space_check">
                      <div class="col-md-10">
                        <p><span class="no_no">1.</span><span>Have you ever been accepted for life and/or health insurance on sub-standard terms?</span></p>
                      </div>
                      <div class="col-md-1 flex">
                        <div class="s-input s-input--checkbox ">
                           <input class="radio-custom" type="radio" name="service_filter_1" id="check1" value="Yes">
                           <label for="check1" class="radio-custom-label"></label>
                        </div>
                      </div>
                      <div class="col-md-1 pad_5">
                        <div class="s-input s-input--checkbox check_left">
                           <input class="radio-custom" type="radio" name="service_filter_1" id="check2" value="No">
                         <label for="check2" class="radio-custom-label"></label>
                        </div>
                      </div>
                    </div>
                    <div class="row top_space_check">
                      <div class="col-md-10">
                        <p><span class="no_no">2.</span><span>Have you ever been declined for life and/or health insurance?</span></p>
                      </div>
                      <div class="col-md-1 flex">
                        <div class="s-input s-input--checkbox ">
                              <input class="radio-custom" type="radio" name="service_filter_2" id="check3" value="Yes">
                           <label for="check3" class="radio-custom-label"></label>
                        </div>
                      </div>
                      <div class="col-md-1 pad_5">
                       <div class="s-input s-input--checkbox check_left">
                           <input class="radio-custom" type="radio" name="service_filter_2" id="check4" value="No">
                           <label for="check4" class="radio-custom-label"></label>
                        </div>
                      </div>
                    </div>
                    
                </div><!-- chapter_box -->
              </div>
            </div>
			<!-- box__form -->
			<!--<div class="box__form all_chapter col-md-11">-->
   <!--           <div class="col-md-12">-->
   <!--             <div class="chapter_box ">-->
   <!--                 <h5>Chapter B</h5>-->

   <!--                 <div class="row">-->
   <!--                   <div class="col-md-10">-->
   <!--                     <p>Extra-professional Activities </p>-->
   <!--                   </div>-->
   <!--                   <div class="col-md-1">-->
   <!--                     <h6>Yes</h6>-->
   <!--                   </div>-->
   <!--                   <div class="col-md-1">-->
   <!--                     <h6>No</h6>-->
   <!--                   </div>-->
   <!--                 </div><!-- row -->

   <!--                 <div class="row top_space_check">-->
   <!--                   <div class="col-md-10">-->
   <!--                     <p><span class="no_no">1.</span><span>Do you want to be covered for all amateur sport activities? (if “Yes,” specify the most dangerous sport you currently practice or would intend to practice in the future)</span></p>-->
   <!--                   </div>-->
   <!--                   <div class="col-md-1 flex">-->
   <!--                     <div class="s-input s-input--checkbox ">-->
   <!--                       <input class="radio-custom" type="radio" name="service_filter_3" id="check5" value="Yes">-->
   <!--                        <label for="check5" class="radio-custom-label"></label>-->
   <!--                     </div>-->
   <!--                   </div>-->
   <!--                   <div class="col-md-1 pad_5">-->
   <!--                     <div class="s-input s-input--checkbox check_left">-->
   <!--                       <input class="radio-custom" type="radio" name="service_filter_3" id="check6" value="No">-->
   <!--                        <label for="check6" class="radio-custom-label"></label>-->
   <!--                     </div>-->
   <!--                   </div>-->
   <!--                 </div><!-- row -->

   <!--                 <div class="row top_space_check">-->
   <!--                   <div class="col-md-10">-->
   <!--                     <p><span class="no_no">2.</span><span>Do you ride motorcycles? (if “Yes,” specify if you require coverage for motorcycle accident)</span></p>-->
   <!--                   </div>-->
   <!--                   <div class="col-md-1 flex">-->
   <!--                     <div class="s-input s-input--checkbox ">-->
   <!--                          <input class="radio-custom" type="radio" name="service_filter_4" id="check7" value="Yes">-->
   <!--                        <label for="check7" class="radio-custom-label"></label>-->
   <!--                     </div>-->
   <!--                   </div>-->
   <!--                   <div class="col-md-1 pad_5">-->
   <!--                    <div class="s-input s-input--checkbox check_left">-->
   <!--                       <input class="radio-custom" type="radio" name="service_filter_4" id="check8" value="No">-->
   <!--                        <label for="check8" class="radio-custom-label"></label>-->
   <!--                     </div>-->
   <!--                   </div>-->
   <!--                 </div><!-- row -->
   <!--             </div><!-- chapter_box -->
   <!--           </div>-->
   <!--         </div>-->
			<!-- box__form -->
			<div class="box__form all_chapter col-md-11">
              <div class="col-md-12">
                <div class="chapter_box ">
                    <h5>Chapter B</h5>

                    <div class="row">
                      <div class="col-md-10">
                        <p>Specific Medical History (if "Yes," specify diagnostic details, treatment received &amp; recovery status)</p>
                      </div>
                      <div class="col-md-1">
                        <h6>Yes</h6>
                      </div>
                      <div class="col-md-1">
                        <h6>No</h6>
                      </div>
                    </div><!-- row -->

                    <!--<div class="row top_space_check">-->
                    <!--  <div class="col-md-10">-->
                    <!--    <p><span class="no_no">1.</span><span>Do you want to be covered for all amateur sport activities? (if “Yes,” specify the most dangerous sport you currently practice or would intend to practice in the future)</span></p>-->
                    <!--  </div>-->
                    <!--  <div class="col-md-1"></div>-->
                    <!--  <div class="col-md-1"></div>-->
                    <!--</div>-->
                    <!-- row -->
                    <div class="row top_space_check mr-left-table">
                      <div class="col-md-10">
                        <p><span class="no_no">a)</span><span><span class="underline">Musculoskeletal &amp; /or Connective Tissue System?</span> (i.e.: fractures, joint or cartilage problems, back problems, deformities, bone infections, osteoporosis, arthritis, rheumatism, etc.)</span></p>
                      </div>
                      <div class="col-md-1 flex">
                         <div class="s-input s-input--checkbox">
                          <input class="radio-custom" type="radio" name="service_filter_5" id="check9" value="Yes">
                           <label for="check9" class="radio-custom-label"></label>
                        </div>
                      </div>
                      <div class="col-md-1 pad_5">
                        <div class="s-input s-input--checkbox check_left">
                          <input class="radio-custom" type="radio" name="service_filter_5" id="check10" value="No">
                           <label for="check10" class="radio-custom-label"></label>
                        </div>
                      </div>
                    </div><!-- row -->

                    <div class="row top_space_check mr-left-table">
                      <div class="col-md-10">
                        <p><span class="no_no">b)</span><span><span class="underline">Cancer, Neoplasms, Tumors? </span>  (specify type, location, treatment, whether malignant or benign)</span></p>
                      </div>
                      <div class="col-md-1 flex">
                         <div class="s-input s-input--checkbox">
                         <input class="radio-custom" type="radio" name="service_filter_6" id="check11" value="Yes">
                           <label for="check11" class="radio-custom-label"></label>
                        </div>
                      </div>
                      <div class="col-md-1 pad_5">
                        <div class="s-input s-input--checkbox check_left">
                          <input class="radio-custom" type="radio" name="service_filter_6" id="check12" value="No">
                           <label for="check12" class="radio-custom-label"></label>
                        </div>
                      </div>
                    </div><!-- row -->
                    <div class="row top_space_check mr-left-table">
                      <div class="col-md-10">
                        <p><span class="no_no">c)</span><span><span class="underline">Blood &amp; Blood Forming Organ Systems?</span> (i.e.: anemia, thalasemia, bleeding disorders, blood cell disease, spleen problems, lymph node problems, etc.)</span></p>
                      </div>
                      <div class="col-md-1 flex">
                         <div class="s-input s-input--checkbox">
                          <input class="radio-custom" type="radio" name="service_filter_8" id="check13" value="Yes">
                           <label for="check13" class="radio-custom-label"></label>
                        </div>
                      </div>
                      <div class="col-md-1 pad_5">
                        <div class="s-input s-input--checkbox check_left">
                          <input class="radio-custom" type="radio" name="service_filter_8" id="check14" value="No">
                           <label for="check14" class="radio-custom-label"></label>
                        </div>
                      </div>
                    </div><!-- row -->
                    <div class="row gapping mr-left-table">
                      <div class="col-md-10">
                <p>Specific Medical History(continued from previous page)</p>
                      </div>
                      <div class="col-md-1">
                        <h6>Yes</h6>
                      </div>
                      <div class="col-md-1">
                        <h6>No</h6>
                      </div>
                    </div><!-- row -->
                    <div class="row top_space_check mr-left-table">
                      <div class="col-md-10">
                        <p><span class="no_no">d)</span><span><span class="underline">Digestive System? </span>  (i.e. reflux, ulcers, diverticuli, bleeding-infection-obstruction-perforation of the esophagus, stomach, intestines or colon, problems of the teeth/gums/mouth/jaw, problems with the liver, gallbladder or pancreas, anal/rectal polyps?</span></p>
                      </div>
                      <div class="col-md-1 flex">
                         <div class="s-input s-input--checkbox">
                          <input class="radio-custom" type="radio" name="service_filter_9" id="check15" value="Yes">
                           <label for="check15" class="radio-custom-label"></label>
                        </div>
                      </div>
                      <div class="col-md-1 pad_5">
                        <div class="s-input s-input--checkbox check_left">
                          <input class="radio-custom" type="radio" name="service_filter_9" id="check16" value="No">
                           <label for="check16" class="radio-custom-label"></label>
                        </div>
                      </div>
                    </div><!-- row -->

                     <div class="row top_space_check mr-left-table">
                      <div class="col-md-10">
                        <p><span class="no_no">e)</span><span><span class="underline">Endocrine, Nutritional, Metabolic and/or Immunity System?</span>   (i.e. diabetes, thyroid or pituitary gland problems, adrenal gland, ovary or testes problems, hormone problems, gout, multiple sclerosis, cystic fibrosis, metabolic disorders, immune problems, etc.)</span></p>
                      </div>
                      <div class="col-md-1 flex">
                         <div class="s-input s-input--checkbox">
                          <input class="radio-custom" type="radio" name="service_filter_10" id="check17" value="Yes">
                           <label for="check17" class="radio-custom-label"></label>
                        </div>
                      </div>
                      <div class="col-md-1 pad_5">
                        <div class="s-input s-input--checkbox check_left">
                          <input class="radio-custom" type="radio" name="service_filter_10" id="check18" value="No">
                           <label for="check18" class="radio-custom-label"></label>
                        </div>
                      </div>
                    </div><!-- row -->


                    <div class="row top_space_check mr-left-table">
                      <div class="col-md-10">
                        <p><span class="no_no">f)</span><span><span class="underline">Nervous System or Sense Organs?</span>    (i.e. ear injury/infection, vertigo, hearing problems, eye injury/disease, retina problems, glaucoma, vision problems, muscular dystrophy, brain/nerve degeneration, meningitis, paralysis, seizures, epilepsy, neuralgia, etc.)</span></p>
                      </div>
                      <div class="col-md-1 flex">
                         <div class="s-input s-input--checkbox">
                          <input class="radio-custom" type="radio" name="service_filter_11" id="check19" value="Yes">
                           <label for="check19" class="radio-custom-label"></label>
                        </div>
                      </div>
                      <div class="col-md-1 pad_5">
                        <div class="s-input s-input--checkbox check_left">
                          <input class="radio-custom" type="radio" name="service_filter_11" id="check20" value="No">
                           <label for="check20" class="radio-custom-label"></label>
                        </div>
                      </div>
                    </div><!-- row -->

                    <div class="row top_space_check mr-left-table">
                      <div class="col-md-10">
                        <p><span class="no_no">g)</span><span><span class="underline">Nervous System or Sense Organs?</span>    (i.e. ear injury/infection, vertigo, hearing problems, eye injury/disease, retina problems, glaucoma, vision problems, muscular dystrophy, brain/nerve degeneration, meningitis, paralysis, seizures, epilepsy, neuralgia, etc.)</span></p>
                      </div>
                      <div class="col-md-1 flex">
                         <div class="s-input s-input--checkbox">
                          <input class="radio-custom" type="radio" name="service_filter_12" id="check21" value="Yes">
                           <label for="check21" class="radio-custom-label"></label>
                        </div>
                      </div>
                      <div class="col-md-1 pad_5">
                        <div class="s-input s-input--checkbox check_left">
                          <input class="radio-custom" type="radio" name="service_filter_12" id="check22" value="No">
                           <label for="check22" class="radio-custom-label"></label>
                        </div>
                      </div>
                    </div><!-- row --> 

                    <div class="row top_space_check mr-left-table">
                      <div class="col-md-10">
                        <p><span class="no_no">h)</span><span><span class="underline">Respiratory System? </span>    (i.e. sinusitis, allergies, tonsillitis/laryngitis, bronchitis, emphysema, pneumonia, etc.)</span></p>
                      </div>
                      <div class="col-md-1 flex">
                         <div class="s-input s-input--checkbox">
                         <input class="radio-custom" type="radio" name="service_filter_13" id="check23" value="Yes">
                           <label for="check23" class="radio-custom-label"></label>
                        </div>
                      </div>
                      <div class="col-md-1 pad_5">
                        <div class="s-input s-input--checkbox check_left">
                          <input class="radio-custom" type="radio" name="service_filter_13" id="check24" value="No">
                           <label for="check24" class="radio-custom-label"></label>
                        </div>
                      </div>
                    </div><!-- row --> 


                    <div class="row top_space_check mr-left-table">
                      <div class="col-md-10">
                        <p><span class="no_no">i)</span><span><span class="underline">Cardiovascular System?</span>  (i.e. stroke, cerebral ischemia, rheumatic fever, atherosclerosis, aneurysm, embolism, peripheral vascular disease, hypertension, heart valve disease, irregular heart beat, pulmonary embolism, phlebitis, varicosities, etc.)</span>  </p>
                      </div>
                      <div class="col-md-1 flex">
                         <div class="s-input s-input--checkbox">
                          <input class="radio-custom" type="radio" name="service_filter_14" id="check25" value="Yes">
                           <label for="check25" class="radio-custom-label"></label>
                        </div>
                      </div>
                      <div class="col-md-1 pad_5">
                        <div class="s-input s-input--checkbox check_left">
                         <input class="radio-custom" type="radio" name="service_filter_14" id="check26" value="No">
                           <label for="check26" class="radio-custom-label"></label>
                        </div>
                      </div>
                    </div><!-- row --> 

                    <div class="row top_space_check mr-left-table">
                      <div class="col-md-10">
                        <p><span class="no_no">j)</span><span><span class="underline">Skin-Subcutaneous Tissue?</span>   (i.e. dermatitis, acne, seborrhea, puritis, etc.)</span></p>
                      </div>
                      <div class="col-md-1 flex">
                         <div class="s-input s-input--checkbox">
                         <input class="radio-custom" type="radio" name="service_filter_15" id="check27" value="Yes">
                           <label for="check27" class="radio-custom-label"></label>
                        </div>
                      </div>
                      <div class="col-md-1 pad_5">
                        <div class="s-input s-input--checkbox check_left">
                          <input class="radio-custom" type="radio" name="service_filter_15" id="check28" value="No">
                           <label for="check28" class="radio-custom-label"></label>
                        </div>
                      </div>
                    </div><!-- row -->  


                    <div class="row top_space_check">
                      <div class="col-md-10">
                        <p><span class="no_no">2.</span><span>Have you ever undergone surgery to remove a body organ or structure? (specify body organ/ Structure, date &amp; place of surgery?)</span></p>
                      </div>
                      <div class="col-md-1 flex">
                         <div class="s-input s-input--checkbox">
                         <input class="radio-custom" type="radio" name="service_filter_16" id="check29" value="Yes">
                           <label for="check29" class="radio-custom-label"></label>
                        </div>
                      </div>
                      <div class="col-md-1 pad_5">
                        <div class="s-input s-input--checkbox check_left">
                          <input class="radio-custom" type="radio" name="service_filter_16" id="check30" value="No">
                           <label for="check30" class="radio-custom-label"></label>
                        </div>
                      </div>
                    </div><!-- row --> 

                    <div class="row top_space_check">
                      <div class="col-md-10">
                        <p><span class="no_no">3.</span><span>Are you HIV positive or have any medical condition or symptom indicative of HIV infection or AIDS?</span></p>
                      </div>
                      <div class="col-md-1 flex">
                         <div class="s-input s-input--checkbox">
                          <input class="radio-custom" type="radio" name="service_filter_17" id="check31" value="Yes">
                           <label for="check31" class="radio-custom-label"></label>
                        </div>
                      </div>
                      <div class="col-md-1 pad_5">
                        <div class="s-input s-input--checkbox check_left">
                         <input class="radio-custom" type="radio" name="service_filter_17" id="check32" value="No">
                           <label for="check32" class="radio-custom-label"></label>
                        </div>
                      </div>
                    </div><!-- row --> 


                    <div class="row top_space_check">
                      <div class="col-md-10">
                        <p><span class="no_no">4.</span><span>Additional question for Female age above 15 years;</span></p>
                      </div>
                      <div class="col-md-1">
                        <h6></h6>
                      </div>
                      <div class="col-md-1">
                        <h6></h6>
                      </div>
                    </div><!-- row --> 


                    <div class="row top_space_check mr-left-table">
                      <div class="col-md-10">
                        <p><span class="no_no">a.</span><span>Disorder of the breast or female organs or complication of pregnancy?</span>  </p>
                      </div>
                      <div class="col-md-1 flex">
                         <div class="s-input s-input--checkbox">
                          <input class="radio-custom" type="radio" name="service_filter_18" id="check33" value="Yes">
                           <label for="check33" class="radio-custom-label"></label>
                        </div>
                      </div>
                      <div class="col-md-1 pad_5">
                        <div class="s-input s-input--checkbox check_left">
                          <input class="radio-custom" type="radio" name="service_filter_18" id="check34" value="No">
                           <label for="check34" class="radio-custom-label"></label>
                        </div>
                      </div>
                    </div><!-- row -->

                    <div class="row top_space_check mr-left-table">
                      <div class="col-md-10">
                        <p><span class="no_no">b.</span><span>Are you pregnant now?</span></p>
                      </div>
                      <div class="col-md-1 flex">
                         <div class="s-input s-input--checkbox">
                          <input class="radio-custom" type="radio" name="service_filter_19" id="check35" value="Yes">
                           <label for="check35" class="radio-custom-label"></label>
                        </div>
                      </div>
                      <div class="col-md-1 pad_5">
                        <div class="s-input s-input--checkbox check_left">
                          <input class="radio-custom" type="radio" name="service_filter_19" id="check36" value="No">
                           <label for="check36" class="radio-custom-label"></label>
                        </div>
                      </div>
                    </div><!-- row --> 

                    <div class="row top_space_check mr-left-table">
                      <div class="col-md-10">
                        <p><span class="no_no">C.</span><span>If so, how long? Months:</span></p>
                      </div>
                      <div class="col-md-2">
                         <input type="text" class="form-control" name="months" >
                      </div>
                    </div><!-- row -->
                
                 </div><!-- chapter_box -->
              </div>
            </div>
			<!-- box__form -->
			<div class="box__form all_chapter col-md-11">
              <div class="col-md-12">
                <div class="chapter_box ">
                    <h5>Chapter C</h5>

                    <div class="row" style="margin-bottom:5px;">
                      <div class="col-md-10">
                        <p>Family Medical History (father, mother, siblings)</p>
                      </div>
                      <div class="col-md-1">
                        <h6>Yes</h6>
                      </div>
                      <div class="col-md-1">
                        <h6>No</h6>
                      </div>
                    </div><!-- row -->

                    <div class="row">
                      <div class="col-md-10">
                        <p><span class="no_no">1.</span><span>Has any member of your family had symptoms or been diagnosed or received treatment for:</span></p>
                      </div>
                      <div class="col-md-1">
                        <h6></h6>
                      </div>
                      <div class="col-md-1">
                        <h6></h6>
                      </div>
                    </div>
                    
                    <!-- row -->

                    <div class="row top_space_check mr-left-table">
                      <div class="col-md-10">
                        <p><span class="no_no">a.</span><span>Inherited disorder or genetic disease?</span></p>
                      </div>
                      <div class="col-md-1 flex">
                         <div class="s-input s-input--checkbox">
                          <input class="radio-custom" type="radio" name="service_filter_20" id="check37" value="Yes">
                           <label for="check37" class="radio-custom-label"></label>
                        </div>
                      </div>
                      <div class="col-md-1 pad_5">
                        <div class="s-input s-input--checkbox check_left">
                          <input class="radio-custom" type="radio" name="service_filter_20" id="check38" value="No">
                           <label for="check38" class="radio-custom-label"></label>
                        </div>
                      </div>
                    </div>
                    
                    <!-- row --> 

                    <div class="row top_space_check mr-left-table">
                      <div class="col-md-10">
                        <p><span class="no_no">b.</span><span>Hemophilia?</span></p>
                      </div>
                      <div class="col-md-1 flex">
                         <div class="s-input s-input--checkbox">
                          <input class="radio-custom" type="radio" name="service_filter_21" id="check39" value="Yes">
                           <label for="check39" class="radio-custom-label"></label>
                        </div>
                      </div>
                      <div class="col-md-1 pad_5">
                        <div class="s-input s-input--checkbox check_left">
                          <input class="radio-custom" type="radio" name="service_filter_21" id="check40" value="No">
                           <label for="check40" class="radio-custom-label"></label>
                        </div>
                      </div>
                    </div><!-- row -->

                    <div class="row top_space_check mr-left-table">
                      <div class="col-md-10">
                        <p><span class="no_no">c.</span><span>Muscular Dystrophy?</span></p>
                      </div>
                      <div class="col-md-1 flex">
                         <div class="s-input s-input--checkbox">
                          <input class="radio-custom" type="radio" name="service_filter_22" id="check41" value="Yes">
                           <label for="check41" class="radio-custom-label"></label>
                        </div>
                      </div>
                      <div class="col-md-1 pad_5">
                        <div class="s-input s-input--checkbox check_left">
                          <input class="radio-custom" type="radio" name="service_filter_22" id="check42" value="No">
                           <label for="check42" class="radio-custom-label"></label>
                        </div>
                      </div>
                    </div><!-- row -->

                    <div class="row top_space_check mr-left-table">
                      <div class="col-md-10">
                        <p><span class="no_no">d.</span><span>Multiple Sclerosis?</span></p>
                      </div>
                      <div class="col-md-1 flex">
                         <div class="s-input s-input--checkbox">
                         <input class="radio-custom" type="radio" name="service_filter_23" id="check43" value="Yes">
                           <label for="check43" class="radio-custom-label"></label>
                        </div>
                      </div>
                      <div class="col-md-1 pad_5">
                        <div class="s-input s-input--checkbox check_left">
                         <input class="radio-custom" type="radio" name="service_filter_23" id="check44" value="No">
                           <label for="check44" class="radio-custom-label"></label>
                        </div>
                      </div>
                    </div><!-- row -->

                    <div class="row top_space_check mr-left-table">
                      <div class="col-md-10">
                        <p><span class="no_no">e.</span><span>Cancer?</span></p>
                      </div>
                      <div class="col-md-1 flex">
                         <div class="s-input s-input--checkbox">
                         <input class="radio-custom" type="radio" name="service_filter_24" id="check45" value="Yes">
                           <label for="check45" class="radio-custom-label"></label>
                        </div>
                      </div>
                      <div class="col-md-1 pad_5">
                        <div class="s-input s-input--checkbox check_left">
                          <input class="radio-custom" type="radio" name="service_filter_24" id="check46" value="No">
                           <label for="check46" class="radio-custom-label"></label>
                        </div>
                      </div>
                    </div><!-- row -->

                    <div class="row top_space_check mr-left-table">
                      <div class="col-md-10">
                        <p><span class="no_no">f.</span><span>Mental illness or disorders?</span></p>
                      </div>
                      <div class="col-md-1 flex">
                         <div class="s-input s-input--checkbox">
                          <input class="radio-custom" type="radio" name="service_filter_25" id="check47" value="Yes">
                           <label for="check47" class="radio-custom-label"></label>
                        </div>
                      </div>
                      <div class="col-md-1 pad_5">
                        <div class="s-input s-input--checkbox check_left">
                          <input class="radio-custom" type="radio" name="service_filter_25" id="check48" value="No">
                           <label for="check48" class="radio-custom-label"></label>
                        </div>
                      </div>
                    </div><!-- row -->

                    <div class="row top_space_check mr-left-table">
                      <div class="col-md-10">
                        <p><span class="no_no">g.</span><span>Nervous system and / or sense organ disease?</span></p>
                      </div>
                      <div class="col-md-1 flex">
                         <div class="s-input s-input--checkbox">
                          <input class="radio-custom" type="radio" name="service_filter_26" id="check49" value="Yes">
                           <label for="check49" class="radio-custom-label"></label>
                        </div>
                      </div>
                      <div class="col-md-1 pad_5">
                        <div class="s-input s-input--checkbox check_left">
                          <input class="radio-custom" type="radio" name="service_filter_26" id="check50" value="No">
                           <label for="check50" class="radio-custom-label"></label>
                        </div>
                      </div>
                    </div><!-- row -->

                    <div class="row top_space_check mr-left-table">
                      <div class="col-md-10">
                        <p><span class="no_no">h.</span><span>Illness of the cardiovascular system?</span></p>
                      </div>
                      <div class="col-md-1 flex">
                         <div class="s-input s-input--checkbox">
                          <input class="radio-custom" type="radio" name="service_filter_27" id="check51" value="Yes">
                           <label for="check51" class="radio-custom-label"></label>
                        </div>
                      </div>
                      <div class="col-md-1 pad_5">
                        <div class="s-input s-input--checkbox check_left">
                          <input class="radio-custom" type="radio" name="service_filter_27" id="check52" value="No">
                           <label for="check52" class="radio-custom-label"></label>
                        </div>
                      </div>
                    </div><!-- row -->

                    <div class="row top_space_check mr-left-table">
                      <div class="col-md-10">
                        <p><span class="no_no">i.</span><span>Diabetes?</span></p>
                      </div>
                      <div class="col-md-1 flex">
                         <div class="s-input s-input--checkbox">
                          <input class="radio-custom" type="radio" name="service_filter_28" id="check53" value="Yes">
                           <label for="check53" class="radio-custom-label"></label>
                        </div>
                      </div>
                      <div class="col-md-1 pad_5">
                        <div class="s-input s-input--checkbox check_left">
                          <input class="radio-custom" type="radio" name="service_filter_28" id="check54" value="No">
                           <label for="check54" class="radio-custom-label"></label>
                        </div>
                      </div>
                    </div><!-- row --> 
                    <br><br>
                    <div class="row top_space_check mr-left-table">
                     
                      <div class="col-md-1">
                         <div class="s-input s-input--checkbox">
                          <input class="radio-custom" type="checkbox" name="termsandcondition" id="check59" value="Yes">
                           <label for="check59" class="radio-custom-label"></label>
                        </div>
                       
                      </div>
                       <div class="col-md-10">
                        <p><span>*That health declaration information is true and insurance company reserves the right to take due action if there is false statement</span></p>
                      </div> <div class="col-md-12 valid" id="errors19"></div>
                    </div>
             
                </div><!-- chapter_box -->
              </div>
            </div>
			<!-- box__form -->
			<!--<div class="box__form all_chapter col-md-11">-->
   <!--           <div class="col-md-12">-->
   <!--             <div class="chapter_box ">-->
   <!--                 <h5>Chapter E</h5>-->

   <!--                 <div class="row">-->
   <!--                   <div class="col-md-10">-->
   <!--                     <p>Profile (if answer Yes is selected, specify details and numbers) </p>-->
   <!--                   </div>-->
   <!--                   <div class="col-md-1">-->
   <!--                     <h6>Yes</h6>-->
   <!--                   </div>-->
   <!--                   <div class="col-md-1">-->
   <!--                     <h6>No</h6>-->
   <!--                   </div>-->
   <!--                 </div><!-- row -->

   <!--                 <div class="row top_space_check">-->
   <!--                   <div class="col-md-10">-->
   <!--                     <p><span class="no_no">1.</span><span>Do you smoke? (if Yes, what do you smoke? and number per day)</span></p>-->
   <!--                   </div>-->
   <!--                   <div class="col-md-1 flex">-->
   <!--                     <div class="s-input s-input--checkbox ">-->
   <!--                       <input class="radio-custom" type="radio" name="service_filter_29" id="check55" value="Yes">-->
   <!--                        <label for="check55" class="radio-custom-label"></label>-->
   <!--                     </div>-->
   <!--                   </div>-->
   <!--                   <div class="col-md-1 pad_5">-->
   <!--                     <div class="s-input s-input--checkbox check_left">-->
   <!--                       <input class="radio-custom" type="radio" name="service_filter_29" id="check56" value="No">-->
   <!--                        <label for="check56" class="radio-custom-label"></label>-->
   <!--                     </div>-->
   <!--                   </div>-->
   <!--                 </div><!-- row -->

   <!--                 <div class="row top_space_check">-->
   <!--                   <div class="col-md-10">-->
   <!--                     <p><span class="no_no">2.</span><span>Do you practice any kind of routine exercise?</span></p>-->
   <!--                   </div>-->
   <!--                   <div class="col-md-1 flex">-->
   <!--                     <div class="s-input s-input--checkbox ">-->
   <!--                           <input class="radio-custom" type="radio" name="service_filter_30" id="check57" value="Yes">-->
   <!--                        <label for="check57" class="radio-custom-label"></label>-->
   <!--                     </div>-->
   <!--                   </div>-->
   <!--                   <div class="col-md-1 pad_5">-->
   <!--                    <div class="s-input s-input--checkbox check_left">-->
   <!--                       <input class="radio-custom" type="radio" name="service_filter_30" id="check58" value="No">-->
   <!--                        <label for="check58" class="radio-custom-label"></label>-->
   <!--                     </div>-->
   <!--                   </div>-->
   <!--                 </div><!-- row -->

   <!--                 <div class="row top_space_check">-->
   <!--                   <div class="col-md-10">-->
   <!--                     <p><span class="no_no">3.</span><span>Do you undergo routine medical check-ups?</span></p>-->
   <!--                   </div>-->
   <!--                   <div class="col-md-1 flex">-->
   <!--                     <div class="s-input s-input--checkbox ">-->
   <!--                           <input class="radio-custom" type="radio" name="service_filter_31" id="check59" value="Yes">-->
   <!--                        <label for="check59" class="radio-custom-label"></label>-->
   <!--                     </div>-->
   <!--                   </div>-->
   <!--                   <div class="col-md-1 pad_5">-->
   <!--                    <div class="s-input s-input--checkbox check_left">-->
   <!--                      <input class="radio-custom" type="radio" name="service_filter_31" id="check60" value="No">-->
   <!--                        <label for="check60" class="radio-custom-label"></label>-->
   <!--                     </div>-->
   <!--                   </div>-->
   <!--                 </div><!-- row -->

   <!--                 <div class="row top_space_check">-->
   <!--                   <div class="col-md-10">-->
   <!--                     <p><span class="no_no">4.</span><span>How often do you consult a physician per year?</span></p>-->
   <!--                   </div>-->
   <!--                     <div class="col-md-2">-->
   <!--                      <input type="text" class="form-control" name="service_filter_32" onkeypress="return isNumberKey(event,this)">-->
   <!--                   </div>-->
   <!--                 </div><!-- row -->

   <!--                 <div class="row top_space_check">-->
   <!--                   <div class="col-md-10">-->
   <!--                     <p><span class="no_no">5.</span><span>How many hours do you sleep per day?</span></p>-->
   <!--                   </div>-->
   <!--             <div class="col-md-2">-->
   <!--                      <input type="text" class="form-control" name="service_filter_33" onkeypress="return isNumberKey(event,this)">-->
   <!--                   </div>-->
   <!--                 </div><!-- row -->

   <!--                 <div class="row top_space_check">-->
   <!--                   <div class="col-md-10">-->
   <!--                     <p><span class="no_no">6.</span><span>How many hours do you work per day?</span></p>-->
   <!--                   </div>-->
   <!--             <div class="col-md-2">-->
   <!--                      <input type="text" class="form-control" name="service_filter_34" onkeypress="return isNumberKey(event,this)">-->
   <!--                   </div>-->
   <!--                 </div><!-- row -->

   <!--                 <div class="row top_space_check">-->
   <!--                   <div class="col-md-10">-->
   <!--                     <p><span class="no_no">7.</span><span>How many times do you travel per year?</span></p>-->
   <!--                   </div>-->
   <!--            <div class="col-md-2">-->
   <!--                      <input type="text" class="form-control" name="service_filter_35" onkeypress="return isNumberKey(event,this)">-->
   <!--                   </div>-->
   <!--                 </div><!-- row -->

   <!--                 <div class="row top_space_check">-->
   <!--                   <div class="col-md-10">-->
   <!--                     <p><span class="no_no">8.</span><span>Do you drink alcohol (if yes, specify preferred type and daily/weekly consumption)</span></p>-->
   <!--                   </div>-->
   <!--                   <div class="col-md-1 flex">-->
   <!--                     <div class="s-input s-input--checkbox ">-->
   <!--                           <input class="radio-custom" type="radio" name="service_filter_36" id="check69" value="Yes">-->
   <!--                        <label for="check69" class="radio-custom-label"></label>-->
   <!--                     </div>-->
   <!--                   </div>-->
   <!--                   <div class="col-md-1 pad_5">-->
   <!--                    <div class="s-input s-input--checkbox check_left">-->
   <!--                       <input class="radio-custom" type="radio" name="service_filter_36" id="check70" value="No">-->
   <!--                        <label for="check70" class="radio-custom-label"></label>-->
   <!--                     </div>-->
   <!--                   </div>-->
   <!--                 </div><!-- row -->

   <!--                 <div class="row top_space_check">-->
   <!--                   <div class="col-md-10">-->
   <!--                     <p><span class="no_no">9.</span><span>Have you ever taken any drugs?</span></p>-->
   <!--                   </div>-->
   <!--                   <div class="col-md-1 flex">-->
   <!--                     <div class="s-input s-input--checkbox ">-->
   <!--                           <input class="radio-custom" type="radio" name="service_filter_37" id="check71" value="Yes">-->
   <!--                        <label for="check71" class="radio-custom-label"></label>-->
   <!--                     </div>-->
   <!--                   </div>-->
   <!--                   <div class="col-md-1 pad_5">-->
   <!--                    <div class="s-input s-input--checkbox check_left">-->
   <!--                      <input class="radio-custom" type="radio" name="service_filter_37" id="check72" value="No">-->
   <!--                        <label for="check72" class="radio-custom-label"></label>-->
   <!--                     </div>-->
   <!--                   </div>-->
   <!--                 </div><!-- row -->
   <!--             </div><!-- chapter_box -->
   <!--           </div>-->
   <!--         </div>-->
                    </div>
					<div class="form-group">
						<div class="col-sm-12 text-center">
					    <input type="submit" class="btn btn-primary" id="btnsubmit35" value="Submit" name="Submit"/>
					    <input type="button" class="btn btn-primary" id="btnsubmit36" value="Print" name="Print"/>
					    </div>
					    <br> <br>
					   <!--<div class="plus-circle text-center" style="margin-top:10px">Add Member <a href="member-details.php?email=" target="_blank"><i class="fa fa-plus-circle"></i></a></div>-->
					</div>
					</div>
					<div class="clear"></div>
		            <p class="text-center"><b>Note:</b> Fields marked with <b class="star">*</b>  are required.</p>
                    </form>
                </div>
            </div>
        </div>
		
    </div>
</div>

 </section>
</div>
</body>
  <script src="js/jquery.js"></script>  
  <script src="js/bootstrap.min.js"></script>  
  <script src="js/moment.min.2.5.0.js"></script> 
  <script src="js/combodate.js"></script> 
  <script src="js/bootstrap-select.min.js"></script>
<script type="text/javascript">
	var a = new Date();
 	 $('#input3').combodate({
	                        firstItem: 'name',
                            minYear: 1900,
                            maxYear: a.getFullYear(),
                            minuteStep: 10
                        }); 
			function show1(){
					document.getElementById('individualselect').style.display ='block';
					document.getElementById('groupselect').style.display = 'none';
					
						}
			function show2(){
					document.getElementById('individualselect').style.display ='none';
					document.getElementById('groupselect').style.display = 'block';
					}
            $(document).ready(function () {
                               $("select").addClass('selectpicker show-tick btnnew');
            });
</script>

</html>
    <script>
    
    var uploadField = document.getElementById("visadoc");

uploadField.onchange = function() {
    if(this.files[0].size > 507200){
       alert("File size should be less then 500kb!");
       this.value = "";
    };
};
</script>
    <script>
    
    var uploadField = document.getElementById("passportdoc");

uploadField.onchange = function() {
    if(this.files[0].size > 507200){
      alert("File size should be less then 500kb!");
       this.value = "";
    };
};




</script>
    <script>
    
    var uploadField = document.getElementById("emiratesdoc");

uploadField.onchange = function() {
    if(this.files[0].size > 507200){
      alert("File size should be less then 500kb!");
       this.value = "";
    };
};
$(document).ready(function(){
    
   $(document).on("keyup","#emirates_no",function(){
     if($(this).val().length <= '18'){  
    if($(this).val().length=='3'){
       var dataac = $(this).val()+'-';
      $(this).val(dataac)
   
    }else if($(this).val().length=='8'){
        
        dataac = $(this).val()+'-';
         $(this).val(dataac)
    }else if($(this).val().length=='15'){
        
         dataac = $(this).val()+'-';
          $(this).val(dataac)
    }
    else if($(this).val().length=='18'){
        
         dataac += $(this).val()+'-';
          $(this).val(dataac)
    }
     
      //$(this).val(dataac);
     }else{
         
         
         $(this).attr('readonly', 'true');
     }

   }); 
   
 

 });


</script>