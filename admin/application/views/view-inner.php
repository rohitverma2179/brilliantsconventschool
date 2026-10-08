
<!DOCTYPE html>
<html lang="en">
  <head>
    
    <!-- Twitter meta-->
   
   
   
    <title>aafiya</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="http://webtestinglink.net/aafiya_form/css/style.css" rel="stylesheet" type="text/css">
<link href="http://webtestinglink.net/aafiya_form/css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="http://webtestinglink.net/aafiya_form/css/checkbox-btn.css" rel="stylesheet" type="text/css">
<link href="http://webtestinglink.net/aafiya_form/css/bootstrap-select.min.css" rel="stylesheet" type="text/css">
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
  .file-input {
    margin-top: 10px;
}

#sampleTable_wrapper input,
#sampleTable_wrapper label {
        pointer-events: none;
}
</style>
  </head>
  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="<?php echo base_url(); ?>healthform"><img src="<?php echo base_url(); ?>assets/images/logo.png" class="logo" ></a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
        <li class="app-search">
          <input class="app-search__input" type="search" placeholder="Search">
          <button class="app-search__button"><i class="fa fa-search"></i></button>
        </li>
        
        <!-- User Menu-->
        <li class="dropdown app-profile"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
           <!-- <li><a class="dropdown-item" href="page-user.html"><i class="fa fa-cog fa-lg"></i> Settings</a></li>
            <li><a class="dropdown-item" href="page-user.html"><i class="fa fa-user fa-lg"></i> Profile</a></li>-->
            <li><a class="dropdown-item" href="<?php echo base_url(); ?>healthform/logout"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
          </ul>
        </li>
      </ul>
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      
      <ul class="app-menu">
        <li><a class="app-menu__item active" href="index.html"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-files-o"></i><span class="app-menu__label">Policies</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="<?php echo base_url(); ?>healthform/policy"><i class="icon fa fa-circle-o"></i> Policy</a></li>
            <li><a class="treeview-item" href="#"><i class="icon fa fa-circle-o"></i> Widgets</a></li>
          </ul>
        </li>
        
      </ul>
    </aside>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1>Member Details</h1>
         
        </div>
        <!--<ul class="app-breadcrumb breadcrumb">-->
        <!--  <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>-->
        <!--  <li class="breadcrumb-item"><a href="#">Dashboard</a></li>-->
        <!--</ul>-->
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <div id="sampleTable_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                  
      
        <div class="row">
        <div class="col-sm-12">
            
            
            
            
            <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                            <!--<h2>Member Details</h2>-->
                            
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

.form-horizontal .control-label {
    text-align: left;
}
</style>
  <!--<h3 class='errd' id="errors" align="center"></h3>-->

  <?php  
       foreach ($data as $row)  
       {  
          ?>

    <form class="form-horizontal" role="form" id="" method="post" action="" enctype="multipart/form-data" onsubmit="return validationmember();">
          
        <div id="individualselect">           
                    <div class="form-group">
                        <label for="input1" class="col-sm-4 control-label">
                            Name*</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="fname" name="fname" value="<?php echo $row['fname'];?>" placeholder="First Name" readonly>
                            <div class="col-md-12 valid" id="errors"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="input2" class="col-sm-4 control-label">
                            Last Name*</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="lname" name="lname" value="<?php echo $row['lname'];?>" placeholder="Last Name" readonly>
                            <div class="col-md-12 valid" id="errors1"></div>
                        </div>
                    </div>        
          <div class="form-group">
                        <label for="input3" class="col-sm-4 control-label">
                           Date of Birth*</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" placeholder="Passport Number" value="<?php echo $row['dob'];?>" name="dob" id="dob" readonly>
                            <div class="col-md-12 valid" id="errors2"></div>
                        </div>
                    </div>
          <div class="form-group">
                        <label for="input4" class="col-sm-4 control-label">Passport Number*</label>
                         <div class="col-sm-6">
                        <input type="text" class="form-control" placeholder="Passport Number" value="<?php echo $row['passport'];?>" name="passport" id="passport" readonly>
                         <div class="col-md-12 valid" id="errors3"></div>
                        </div>
                    </div>
          <div class="form-group">
                        <label for="input5" class="col-sm-4 control-label">UID Number*</label>
                        <div class="col-sm-6">            
            <input class="form-control" type="text" placeholder="UID Number" name="uid_no" value="<?php echo $row['uid_no'];?>" id="uid_no" readonly>
            <div class="col-md-12 valid" id="errors4"></div>
                        </div>
                    </div>
                      <div class="form-group">
                        <label for="input6" class="col-sm-4 control-label">
                           Visa Issuing Emirates of UAE*</label>
                        <div class="col-sm-6">            
            <!-- <div class="btn-group bootstrap-select form-control show-tick btnnew"><button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" role="button" data-id="visa_issuing" title="Select States"><span class="filter-option pull-left" style="color: rgb(85, 85, 85);">Select States</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button><div class="dropdown-menu open" role="combobox"><ul class="dropdown-menu inner" role="listbox" aria-expanded="false"><li data-original-index="0" class="selected"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="true"><span class="text">Select States</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="1"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Abu Dhabi</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="2"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Dubai</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="3"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Sharjah</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="4"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Ajman</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="5"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Fujairah</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="6"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Ras al Khaimah</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="7"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Umm al Qaiwain</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div><select class="form-control selectpicker show-tick btnnew" id="visa_issuing" name="visa_issuing"  tabindex="-98">
                     <option value="select">Select States</option>
                <option value="Abu Dhabi">Abu Dhabi</option>
                <option value="Dubai">Dubai</option>
                <option value="Sharjah">Sharjah</option>
                <option value="Ajman">Ajman</option>
                <option value="Fujairah">Fujairah</option>
                <option value="Ras al Khaimah">Ras al Khaimah</option>
                <option value="Umm al Qaiwain">Umm al Qaiwain</option>
            </select> -->
              <input class="form-control" type="text" placeholder="UID Number" name="visa_issuing" value="<?php echo $row['visa_emirates'];?>" id="visa_issuing" readonly>

            </div>     
             <div class="col-md-12 valid" id="errors5"></div>
                        </div>
                    </div>
          <div class="form-group">
                        <label for="input6" class="col-sm-4 control-label">
                           Emirates ID Number*</label>
                        <div class="col-sm-6">            
            <input class="form-control" type="text" placeholder="Emirates ID Number" name="emirates_no" value="<?php echo $row['emirates_no'];?>" id="emirates_no" maxlength="17" readonly>    
            <div class="col-md-12 valid" id="errors6"></div>
                        </div>
                    </div>
                    
                    
                    
                   <div class="form-group">
                      <label for="input6" class="col-sm-4 control-label">
                           Members Height/Weight*</label>
                     <div class="col-md-3">
                         <div class="input-group">
                             <input type="text" class="form-control" name="height" placeholder="Height" value="<?php echo $row['height'];?>" id="height_cm" readonly>
                             <div class="input-group-addon">Cm</div>
                         </div>
                         <div class="col-md-12 valid" id="errors7"></div>
                      </div>
                     <div class="col-md-3">
                         <div class="input-group">
                         <input type="text" class="form-control" name="weight" placeholder="Weight" value="<?php echo $row['weight'];?>" id="weight_kg" readonly>
                               <div class="input-group-addon">Kg</div>
                             </div>
                             <div class="col-md-12 valid" id="errors8"></div>
                      </div>
                    </div>
                   
   
          <div class="form-group">
                        <label for="input7" class="col-sm-4 control-label">
                           Marital Status*</label>
                           
                        <div class="col-sm-6">            
                            
                        <div>
                        <div style="float:left">
                           <input type="radio" name="service_filteri" id="check1i" value="Married" <?php if($row['service_filteri']=="Married"){ echo "checked"; }?> style="float:left;margin:4px;">
                           
                           <label for="check1i" class="radio-custom-label" style="float:left;margin:0 20px 0 0px;">Married</label>
                           </div>
                        </div>
                      
                      
                     
                        <div <div style="float:left">
                          <input type="radio" name="service_filteri" id="check2i" value="Unmarried" <?php if($row['service_filteri']=="Unmarried"){ echo "checked"; }?> style="float:left;margin:4px;">
                          
                         <label for="check2i" class="radio-custom-label" style="float:left;margin:0;">Unmarried</label>
                        </div>
                      
                      <div class="col-md-12 valid" id="errors9"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="input8" class="col-sm-4 control-label">
                          Relation*</label>
                        <div class="col-sm-6">            
           <!-- <div class="btn-group bootstrap-select form-control show-tick btnnew"><button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" role="button" data-id="relation" title="Relation"><span class="filter-option pull-left" style="color: rgb(85, 85, 85);">Relation</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button><div class="dropdown-menu open" role="combobox"><ul class="dropdown-menu inner" role="listbox" aria-expanded="false"><li data-original-index="0" class="selected"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="true"><span class="text">Relation</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="1"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Head of Family</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="2"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Wife</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="3"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Son</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="4"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Daughter</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="5"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Maid</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="6"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Domestic Worker</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div> <select class="form-control selectpicker show-tick btnnew" name="relation" id="relation" tabindex="-98">
                <option value="select">Relation</option>
                <option value="Head of Family">Head of Family</option>
                <option value="Wife">Wife</option>
                <option value="Son">Son</option>
                <option value="Daughter">Daughter</option>
                <option value="Maid">Maid</option>
                <option value="Domestic Worker">Domestic Worker</option>
            </select> -->
            <input type="text" class="form-control" name="relation" placeholder="Weight" value="<?php echo $row['relation'];?>" id="relation" readonly>

          </div> 
            <div class="col-md-12 valid" id="errors10"></div>
                        </div>
                    </div>
                     <div class="form-group">
                        <label for="input8" class="col-sm-4 control-label">Gender*</label>
                        <div class="col-sm-6">            
            <!-- <div class="btn-group bootstrap-select form-control show-tick btnnew"><button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" role="button" data-id="gender" title="Gender"><span class="filter-option pull-left" style="color: rgb(85, 85, 85);">Gender</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button><div class="dropdown-menu open" role="combobox"><ul class="dropdown-menu inner" role="listbox" aria-expanded="false"><li data-original-index="0" class="selected"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="true"><span class="text">Gender</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="1"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Male</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="2"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Female</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div><select class="form-control selectpicker show-tick btnnew" name="gender" id="gender" tabindex="-98">
                <option value="select">Gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select> -->
              <input type="text" class="form-control" name="gender" placeholder="gender" value="<?php echo $row['gender'];?>" id="gender" readonly>


            </div>      
            <div class="col-md-12 valid" id="errors11"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="input8" class="col-sm-4 control-label">
                          Residing location*</label>
                        <div class="col-sm-6"> 

                          <?php

                          $con= mysqli_connect("localhost", "webtesti_aafiyac", "V2BTIu{c]lpv","webtesti_aafiyacms");

                          $sql = "SELECT name FROM `country_list` WHERE `county_code` = ".$row['residing_loc']."";

                          $query = mysqli_query($con, $sql);
                          while ($result=mysqli_fetch_array($query)) {?>

                            
                         <input type="text" class="form-control" name="residing_location" placeholder="residing_location" value="<?php echo $result['name'];?>" id="residing_location" readonly> 

                          <?php
                           
                          }
                          ?>



            </div>   
            <div class="col-md-12 valid" id="errors12"></div>
                        
                    </div>
                    <div class="form-group">
                        <label for="input9" class="col-sm-4 control-label">
                          Salary*</label>
                        <div class="col-sm-6">            
           <!--  <div class="btn-group bootstrap-select form-control show-tick btnnew"><button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" role="button" data-id="salary" title="Salary Salary"><span class="filter-option pull-left" style="color: rgb(85, 85, 85);">Salary Salary</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button><div class="dropdown-menu open" role="combobox"><ul class="dropdown-menu inner" role="listbox" aria-expanded="false"><li data-original-index="0" class="selected"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="true"><span class="text">Salary Salary</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="1"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">4000 AED</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="2"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Between 4000 AED to 12000 AED</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="3"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Above 12000 AED</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="4"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">No salary for dependents</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div><select class="form-control selectpicker show-tick btnnew" name="salary" id="salary" tabindex="-98">
              <option value="select">Salary Salary</option>
                <option value="4000 AED">4000 AED</option>
                <option value="Between 4000 AED to 12000 AED">Between 4000 AED to 12000 AED</option>
                <option value="Above 12000 AED">Above 12000 AED</option>
                <option value="no salary for dependents">No salary for dependents</option>
            </select> -->

             <input type="text" class="form-control" name="salary" placeholder="salary" value="<?php echo $row['salary'];?>" id="salary" readonly>
              


            </div>   
            <div class="col-md-12 valid" id="errors13"></div>
                        
                    </div>
                    
                     <div class="form-group">
                        <label for="input10" class="col-sm-4 control-label">
                           Select Plan*</label>
                        <div class="col-sm-6">            
           
                <input type="text" class="form-control" name="plan_name" placeholder="plan_name" value="<?php echo $row['plan_name'];?>" id="salary" readonly>

              </div> 
              <div class="col-md-12 valid" id="errors14"></div>
            
                        
                    </div>
          <!--<div class="form-group">
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
                        
                    </div>-->


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
                           <input class="radio-custom" type="radio" name="service_filter_1" id="check1" readonly value="Yes" <?php if($row['service_filter_1']=="Yes"){ echo "checked"; }?>>
                           <label for="check1" class="radio-custom-label"></label>
                        </div>
                      </div>
                      <div class="col-md-1 pad_5">
                        <div class="s-input s-input--checkbox check_left">
                           <input class="radio-custom" type="radio" name="service_filter_1" id="check2" readonly value="No" <?php if($row['service_filter_1']=="NO"){ echo "checked"; }?>>
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
                              <input class="radio-custom" type="radio" name="service_filter_2" id="check3" readonly value="Yes" <?php if($row['service_filter_2']=="Yes"){ echo "checked"; }?>>
                           <label for="check3" class="radio-custom-label"></label>
                        </div>
                      </div>
                      <div class="col-md-1 pad_5">
                       <div class="s-input s-input--checkbox check_left">
                           <input class="radio-custom" type="radio" name="service_filter_2" id="check4" readonly value="No" <?php if($row['service_filter_2']=="No"){ echo "checked"; }?>>
                           <label for="check4" class="radio-custom-label"></label>
                        </div>
                      </div>
                    </div>
                </div><!-- chapter_box -->
              </div>
            </div>
      <!-- box__form -->
      
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

                    
                    <div class="row top_space_check mr-left-table">
                      <div class="col-md-10">
                        <p><span class="no_no">a)</span><span><span class="underline">Musculoskeletal &amp; /or Connective Tissue System?</span> (i.e.: fractures, joint or cartilage problems, back problems, deformities, bone infections, osteoporosis, arthritis, rheumatism, etc.)</span></p>
                      </div>
                      <div class="col-md-1 flex">
                         <div class="s-input s-input--checkbox">
                          <input class="radio-custom" type="radio" name="service_filter_5" id="check9" readonly value="Yes" <?php if($row['service_filter_5']=="Yes"){ echo "checked"; }?>>
                           <label for="check9" class="radio-custom-label"></label>
                        </div>
                      </div>
                      <div class="col-md-1 pad_5">
                        <div class="s-input s-input--checkbox check_left">
                          <input class="radio-custom" type="radio" name="service_filter_5" id="check10" readonly value="No" <?php if($row['service_filter_5']=="No"){ echo "checked"; }?>>
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
                         <input class="radio-custom" type="radio" name="service_filter_6" id="check11" readonly value="Yes" <?php if($row['service_filter_6']=="Yes"){ echo "checked"; }?>>
                           <label for="check11" class="radio-custom-label"></label>
                        </div>
                      </div>
                      <div class="col-md-1 pad_5">
                        <div class="s-input s-input--checkbox check_left">
                          <input class="radio-custom" type="radio" name="service_filter_6" id="check12" readonly value="No" <?php if($row['service_filter_6']=="No"){ echo "checked"; }?>>
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
                          <input class="radio-custom" type="radio" name="service_filter_8" id="check13" readonly value="Yes" <?php if($row['service_filter_8']=="Yes"){ echo "checked"; }?>>
                           <label for="check13" class="radio-custom-label"></label>
                        </div>
                      </div>
                      <div class="col-md-1 pad_5">
                        <div class="s-input s-input--checkbox check_left">
                          <input class="radio-custom" type="radio" name="service_filter_8" id="check14" readonly value="No" <?php if($row['service_filter_8']=="No"){ echo "checked"; }?>>
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
                          <input class="radio-custom" type="radio" name="service_filter_9" id="check15" readonly value="Yes" <?php if($row['service_filter_9']=="Yes"){ echo "checked"; }?>>
                           <label for="check15" class="radio-custom-label"></label>
                        </div>
                      </div>
                      <div class="col-md-1 pad_5">
                        <div class="s-input s-input--checkbox check_left">
                          <input class="radio-custom" type="radio" name="service_filter_9" id="check16" readonly value="No" <?php if($row['service_filter_9']=="No"){ echo "checked"; }?>>
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
                          <input class="radio-custom" type="radio" name="service_filter_10" id="check17" readonly value="Yes" <?php if($row['service_filter_10']=="Yes"){ echo "checked"; }?>>
                           <label for="check17" class="radio-custom-label"></label>
                        </div>
                      </div>
                      <div class="col-md-1 pad_5">
                        <div class="s-input s-input--checkbox check_left">
                          <input class="radio-custom" type="radio" name="service_filter_10" id="check18" readonly value="No" <?php if($row['service_filter_10']=="No"){ echo "checked"; }?>>
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
                          <input class="radio-custom" type="radio" name="service_filter_11" id="check19" readonly value="Yes" <?php if($row['service_filter_11']=="Yes"){ echo "checked"; }?>>
                           <label for="check19" class="radio-custom-label"></label>
                        </div>
                      </div>
                      <div class="col-md-1 pad_5">
                        <div class="s-input s-input--checkbox check_left">
                          <input class="radio-custom" type="radio" name="service_filter_11" id="check20" readonly value="No" <?php if($row['service_filter_11']=="No"){ echo "checked"; }?>>
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
                          <input class="radio-custom" type="radio" name="service_filter_12" id="check21" readonly value="Yes" <?php if($row['service_filter_12']=="Yes"){ echo "checked"; }?>>
                           <label for="check21" class="radio-custom-label"></label>
                        </div>
                      </div>
                      <div class="col-md-1 pad_5">
                        <div class="s-input s-input--checkbox check_left">
                          <input class="radio-custom" type="radio" name="service_filter_12" id="check22" readonly value="No" <?php if($row['service_filter_12']=="No"){ echo "checked"; }?>>
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
                         <input class="radio-custom" type="radio" name="service_filter_13" id="check23" readonly value="Yes" <?php if($row['service_filter_13']=="Yes"){ echo "checked"; }?>>
                           <label for="check23" class="radio-custom-label"></label>
                        </div>
                      </div>
                      <div class="col-md-1 pad_5">
                        <div class="s-input s-input--checkbox check_left">
                          <input class="radio-custom" type="radio" name="service_filter_13" id="check24" readonly value="No" <?php if($row['service_filter_13']=="No"){ echo "checked"; }?>>
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
                          <input class="radio-custom" type="radio" name="service_filter_14" id="check25" readonly value="Yes" <?php if($row['service_filter_14']=="Yes"){ echo "checked"; }?>>
                           <label for="check25" class="radio-custom-label"></label>
                        </div>
                      </div>
                      <div class="col-md-1 pad_5">
                        <div class="s-input s-input--checkbox check_left">
                         <input class="radio-custom" type="radio" name="service_filter_14" id="check26" readonly value="No" <?php if($row['service_filter_14']=="No"){ echo "checked"; }?>>
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
                         <input class="radio-custom" type="radio" name="service_filter_15" id="check27" readonly value="Yes" <?php if($row['service_filter_15']=="Yes"){ echo "checked"; }?>>
                           <label for="check27" class="radio-custom-label"></label>
                        </div>
                      </div>
                      <div class="col-md-1 pad_5">
                        <div class="s-input s-input--checkbox check_left">
                          <input class="radio-custom" type="radio" name="service_filter_15" id="check28" readonly value="No" <?php if($row['service_filter_15']=="No"){ echo "checked"; }?>>
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
                         <input class="radio-custom" type="radio" name="service_filter_16" id="check29" readonly value="Yes" <?php if($row['service_filter_16']=="Yes"){ echo "checked"; }?>>
                           <label for="check29" class="radio-custom-label"></label>
                        </div>
                      </div>
                      <div class="col-md-1 pad_5">
                        <div class="s-input s-input--checkbox check_left">
                          <input class="radio-custom" type="radio" name="service_filter_16" id="check30" readonly value="No" <?php if($row['service_filter_16']=="No"){ echo "checked"; }?>>
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
                          <input class="radio-custom" type="radio" name="service_filter_17" id="check31" readonly value="Yes" <?php if($row['service_filter_17']=="Yes"){ echo "checked"; }?>>
                           <label for="check31" class="radio-custom-label"></label>
                        </div>
                      </div>
                      <div class="col-md-1 pad_5">
                        <div class="s-input s-input--checkbox check_left">
                         <input class="radio-custom" type="radio" name="service_filter_17" id="check32" readonly value="No" <?php if($row['service_filter_17']=="No"){ echo "checked"; }?>>
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
                          <input class="radio-custom" type="radio" name="service_filter_18" id="check33" readonly value="Yes" <?php if($row['service_filter_18']=="Yes"){ echo "checked"; }?>>
                           <label for="check33" class="radio-custom-label"></label>
                        </div>
                      </div>
                      <div class="col-md-1 pad_5">
                        <div class="s-input s-input--checkbox check_left">
                          <input class="radio-custom" type="radio" name="service_filter_18" id="check34" readonly value="No" <?php if($row['service_filter_18']=="No"){ echo "checked"; }?>>
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
                          <input class="radio-custom" type="radio" name="service_filter_19" id="check35" value="Yes" <?php if($row['service_filter_19']=="Yes"){ echo "checked"; }?>>
                           <label for="check35" class="radio-custom-label"></label>
                        </div>
                      </div>
                      <div class="col-md-1 pad_5">
                        <div class="s-input s-input--checkbox check_left">
                          <input class="radio-custom" type="radio" name="service_filter_19" id="check36" value="No" <?php if($row['service_filter_19']=="No"){ echo "checked"; }?>>
                           <label for="check36" class="radio-custom-label"></label>
                        </div>
                      </div>
                    </div><!-- row -->

                    <div class="row top_space_check mr-left-table">
                      <div class="col-md-10">
                        <p><span class="no_no">C.</span><span>If so, how long? Months:</span></p>
                      </div>
                      <div class="col-md-2">
                         <input type="text" class="form-control" name="months" value="<?php echo $row['months'];?>">
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
                          <input class="radio-custom" type="radio" name="service_filter_20" id="check37" readonly value="Yes" <?php if($row['service_filter_20']=="Yes"){ echo "checked"; }?>>
                           <label for="check37" class="radio-custom-label"></label>
                        </div>
                      </div>
                      <div class="col-md-1 pad_5">
                        <div class="s-input s-input--checkbox check_left">
                          <input class="radio-custom" type="radio" name="service_filter_20" id="check38" readonly value="No" <?php if($row['service_filter_20']=="No"){ echo "checked"; }?>>
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
                          <input class="radio-custom" type="radio" name="service_filter_21" id="check39" readonly value="Yes" <?php if($row['service_filter_21']=="Yes"){ echo "checked"; }?>>
                           <label for="check39" class="radio-custom-label"></label>
                        </div>
                      </div>
                      <div class="col-md-1 pad_5">
                        <div class="s-input s-input--checkbox check_left">
                          <input class="radio-custom" type="radio" name="service_filter_21" id="check40" readonly value="No" <?php if($row['service_filter_21']=="No"){ echo "checked"; }?>>
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
                          <input class="radio-custom" type="radio" name="service_filter_22" id="check41" readonly value="Yes" <?php if($row['service_filter_22']=="Yes"){ echo "checked"; }?>>
                           <label for="check41" class="radio-custom-label"></label>
                        </div>
                      </div>
                      <div class="col-md-1 pad_5">
                        <div class="s-input s-input--checkbox check_left">
                          <input class="radio-custom" type="radio" name="service_filter_22" id="check42" readonly value="No" <?php if($row['service_filter_22']=="No"){ echo "checked"; }?>>
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
                         <input class="radio-custom" type="radio" name="service_filter_23" id="check43" readonly value="Yes" <?php if($row['service_filter_23']=="Yes"){ echo "checked"; }?>>
                           <label for="check43" class="radio-custom-label"></label>
                        </div>
                      </div>
                      <div class="col-md-1 pad_5">
                        <div class="s-input s-input--checkbox check_left">
                         <input class="radio-custom" type="radio" name="service_filter_23" id="check44" readonly value="No" <?php if($row['service_filter_23']=="No"){ echo "checked"; }?>>
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
                         <input class="radio-custom" type="radio" name="service_filter_24" id="check45" readonly value="Yes" <?php if($row['service_filter_24']=="Yes"){ echo "checked"; }?>>
                           <label for="check45" class="radio-custom-label"></label>
                        </div>
                      </div>
                      <div class="col-md-1 pad_5">
                        <div class="s-input s-input--checkbox check_left">
                          <input class="radio-custom" type="radio" name="service_filter_24" id="check46" value="No" <?php if($row['service_filter_24']=="No"){ echo "checked"; }?>>
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
                          <input class="radio-custom" type="radio" name="service_filter_25" id="check47" readonly value="Yes" <?php if($row['service_filter_25']=="Yes"){ echo "checked"; }?>>
                           <label for="check47" class="radio-custom-label"></label>
                        </div>
                      </div>
                      <div class="col-md-1 pad_5">
                        <div class="s-input s-input--checkbox check_left">
                          <input class="radio-custom" type="radio" name="service_filter_25" id="check48" readonly value="No" <?php if($row['service_filter_25']=="No"){ echo "checked"; }?>>
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
                          <input class="radio-custom" type="radio" name="service_filter_26" id="check49" readonly value="Yes" <?php if($row['service_filter_26']=="Yes"){ echo "checked"; }?>>
                           <label for="check49" class="radio-custom-label"></label>
                        </div>
                      </div>
                      <div class="col-md-1 pad_5">
                        <div class="s-input s-input--checkbox check_left">
                          <input class="radio-custom" type="radio" name="service_filter_26" id="check50" readonly value="No" <?php if($row['service_filter_26']=="No"){ echo "checked"; }?>>
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
                          <input class="radio-custom" type="radio" name="service_filter_27" id="check51" readonly value="Yes" <?php if($row['service_filter_27']=="Yes"){ echo "checked"; }?>>
                           <label for="check51" class="radio-custom-label"></label>
                        </div>
                      </div>
                      <div class="col-md-1 pad_5">
                        <div class="s-input s-input--checkbox check_left">
                          <input class="radio-custom" type="radio" name="service_filter_27" id="check52" readonly value="No" <?php if($row['service_filter_27']=="No"){ echo "checked"; }?>>
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
                          <input class="radio-custom" type="radio" name="service_filter_28" id="check53" readonly value="Yes" <?php if($row['service_filter_28']=="Yes"){ echo "checked"; }?>>
                           <label for="check53" class="radio-custom-label"></label>
                        </div>
                      </div>
                      <div class="col-md-1 pad_5">
                        <div class="s-input s-input--checkbox check_left">
                          <input class="radio-custom" type="radio" disabled="disabled" name="service_filter_28" id="check54" value="No" <?php if($row['service_filter_28']=="No"){ echo "checked"; }?>>
                           <label for="check54" class="radio-custom-label"></label>
                        </div>
                      </div>
                    </div><!-- row --> 
                    <br><br>
                    <div class="row top_space_check mr-left-table">
                     
                      <div class="col-md-1">
                         <div class="s-input s-input--checkbox">
                          <input class="radio-custom" type="checkbox" name="termsandcondition" id="check59" value="Yes" <?php if($row['termsandcondition']=="Yes"){ echo "checked"; }?>>
                           <label for="check59" class="radio-custom-label"></label>
                        </div>
                       
                      </div>
                       <div class="col-md-10">
                        <p><span>*That health declaration information is true and insurance company reserves the right to take due action if there is false statement</span></p>
                      </div> <div class="col-md-12 valid" id="errors19"></div>
                    </div>
                    
                    <br><br>
                    
                    <div class="row top_space_check mr-left-table">
                     
                      <div class="col-md-12">
                          <div class="form-group">
                            <form action="<?php  echo base_url(); ?>healthform/comment" method="post">
                              <label for="exampleTextarea">Comment</label>
                              <textarea class="form-control" name="comment" id="exampleTextarea" rows="5" required><?php echo $row['comment'];?></textarea>
                              <input type="hidden" name="id">
                              <button class="btn btn-primary btn-block"><i class="fa fa-sign-in fa-lg fa-fw"></i>SEND</button>

                            </form>
                          </div>
                      </div>
                       
                      </div>
                    </div>
             
                </div><!-- chapter_box -->
              </div>
            </div>
      
                    </div>
          
          </div>
          
                    </form>
                </div>
            </div>
        </div>
            
            
            <?php }  
                         ?>  
            
            
            
            
            
            
            
            
            
        
                            </div></div>
             
        
            </div>
          </div>
        </div>
      </div>
    </main>
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <script type="text/javascript" src="js/plugins/chart.js"></script>
    <script src="js/jquery.js"></script>  
  
  <script src="http://webtestinglink.net/aafiya_form/js/moment.min.2.5.0.js"></script> 
  <script src="http://webtestinglink.net/aafiya_form/js/combodate.js"></script> 
  <script src="http://webtestinglink.net/aafiya_form/js/bootstrap-select.min.js"></script>
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
    <script type="text/javascript">
      var data = {
        labels: ["January", "February", "March", "April", "May"],
        datasets: [
          {
            label: "My First dataset",
            fillColor: "rgba(220,220,220,0.2)",
            strokeColor: "rgba(220,220,220,1)",
            pointColor: "rgba(220,220,220,1)",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(220,220,220,1)",
            data: [65, 59, 80, 81, 56]
          },
          {
            label: "My Second dataset",
            fillColor: "rgba(151,187,205,0.2)",
            strokeColor: "rgba(151,187,205,1)",
            pointColor: "rgba(151,187,205,1)",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(151,187,205,1)",
            data: [28, 48, 40, 19, 86]
          }
        ]
      };
      var pdata = [
        {
          value: 300,
          color: "#46BFBD",
          highlight: "#5AD3D1",
          label: "Complete"
        },
        {
          value: 50,
          color:"#F7464A",
          highlight: "#FF5A5E",
          label: "In-Progress"
        }
      ]
      
      var ctxl = $("#lineChartDemo").get(0).getContext("2d");
      var lineChart = new Chart(ctxl).Line(data);
      
      var ctxp = $("#pieChartDemo").get(0).getContext("2d");
      var pieChart = new Chart(ctxp).Pie(pdata);
    </script>
    <!-- Google analytics script-->
    <script type="text/javascript">
      if(document.location.hostname == 'pratikborsadiya.in') {
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-72504830-1', 'auto');
        ga('send', 'pageview');
      }
    </script>
  </body>
</html>