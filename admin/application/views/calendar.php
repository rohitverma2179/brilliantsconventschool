 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width; initial-scale=1.0">
<meta name="viewport" content="target-densitydpi=device-dpi, initial-scale=1.0, user-scalable=no" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<style>
    .up {
    transform: rotate(-135deg);
    -webkit-transform: rotate(-135deg);
}
    
</style>
<?php 
		if(isset($page_data))
		{
			echo $page_data['seo_title'];
		}
else if($school_id ==1)
        	{
		?><title>

Calendar - DIS ROHINI</title>
			
			<?php
			}
else if($school_id ==2)

{
?><title>Calendar - DIS EDGE 18

</title>
			<?php
			}
else if($school_id ==3)
{
?><title>

Calendar - DIS Dwarka 23</title>

<?php
}

			?>

<?php 
		if(isset($page_data))
		{
			echo $page_data['seo_title'];
		}
else if($school_id ==3)
	{
?>

<meta name="description" content="DIS Dwarka School calendar for the year 2016">
<meta name="keywords" content="Calendar">
<?php 
	}


else if($school_id ==2)
	{
?>

<meta name="description" content="">
<meta name="keywords" content="">
<?php 
	}



else if($school_id ==1)
	{
?>

<meta name="description" content="">
<meta name="keywords" content="">
<?php 
	}



?>


<link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url(); ?>assets/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo base_url(); ?>assets/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url(); ?>assets/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url(); ?>assets/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url(); ?>assets/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url(); ?>assets/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url(); ?>assets/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url(); ?>assets/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url(); ?>assets/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo base_url(); ?>assets/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url(); ?>assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url(); ?>assets/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo base_url(); ?>assets/favicon/manifest.json">
<!--slider css-->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/main-website.css" type="text/css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/main-website-responsive.css">

<!--facility css-->
<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/facility-plugins.css">
<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/facility.css">
<!--facility css close-->

<!--MAIN STYLE-->
<link href="<?php echo base_url(); ?>assets/frontend/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url(); ?>assets/frontend/css/main.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/frontend/css/inner-page.css">
<link href="<?php echo base_url(); ?>assets/frontend/css/style.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url(); ?>assets/frontend/css/responsive.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url(); ?>assets/frontend/css/font-awesome.min.css" rel="stylesheet" type="text/css">

<!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/frontend/css/settings.css" media="screen" />
<!--slider css close-->

<link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/parallax.css">
<!--scroll to fixed-->

<script src="<?php echo base_url(); ?>assets/frontend/js/jquery.min.js"></script>




<script type="text/javascript" src="<?php echo base_url(); ?>assets/frontend/js/lightbox.min.js"></script>
<script src="<?php echo base_url(); ?>assets/frontend/js/jquery-scrolltofixed.js" type="text/javascript"></script>
<script>
    jQuery(document).ready(function($) {
        $('.cnt-section, .cnt-section-2, .cnt-section-').scrollToFixed();
        var summaries = $('.summary');
        summaries.each(function(i) {
            var summary = $(summaries[i]);
            var next = summaries[i + 1];
            summary.scrollToFixed({
                marginTop: $('.cnt-section, .cnt-section-2, .cnt-section-3').outerHeight(true) + 10,
                limit: function() {
                    var limit = 0;
                    if (next) {
                        limit = $(next).offset().top - $(this).outerHeight(true) - 10;
                    } else {
                        limit = $('').offset().top - $(this).outerHeight(true) - 10;
                    }
                    return limit;
                },
                zIndex: 999
            });
        });
    });
</script>
<!--scroll to fixed end here-->
<script type="text/javascript">
$(window).scroll(function() {
    if ($(this).scrollTop()>100)
     {
        $('.main-social').fadeOut();
     }
    else
     {
      $('.main-social').fadeIn();
     }
 });
</script>



<!--menu css-->
    <script src="<?php echo base_url(); ?>assets/frontend/js/modernizr.js"></script>
    <script src="<?php echo base_url(); ?>assets/frontend/js/head.js"></script>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/base.css" />   
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/menu.css" />
<!--menu css close-->

  <script type="text/javascript" src="<?php echo base_url(); ?>assets/frontend/js/lightbox.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/frontend/js/slide.js"></script>
  
<!--popup script-->
<style type="text/css">



.cnt223 p{
text-decoration: none;
font-weight: bold;
font-size: 23px;
text-align: right;
position:relative;
z-index:1;
margin-top:2px;
margin-right:3px;
float: right;
color:#000;
}

.popup1{
width: 100%;
margin: 0 auto;
display: none;
position: fixed;
z-index: 10000;
left:0;
top:0;
height: 100%;
right:0;
background-color:hsla(0,0%,0%,0.9);
}
.cnt223{
min-width: 800px;
    width: 800px;
 
    min-height: 600px;
    height: 600px;
    background: url(<?php echo base_url(); ?>assets/images/popup-img.jpg)no-repeat;
    background-size: 100% 100%;
    margin: 35px auto;
    left: 0;
    right: 0;
    position: relative;
    z-index: 3000;
    padding: 4px 10px;
}
.cnt223 h1{font-size:35px; text-align:center; line-height:25px; color:#656464;}
.cnt223 .x:hover{cursor: pointer;}
.cnt223 a img{margin-top:0px; }
.close{position: relative;
    right: 0;
    float: right;
    top: 0;
    margin-top: 10px;
    color: #ccc;
    font-size: 15px;
    z-index: 11111;}
.close:hover{ color:#fff; }

@media screen and (max-width:768px)
{
.cnt223{
width: 90%;
    min-width: 90%;
    height: auto;
    min-height: 220px;
    margin: 40% auto;
    background-size: 100% 220px;
    background-repeat: no-repeat;}

}





</style>

<script type='text/javascript'>
$(function(){
var overlay = $('<div id="overlay"></div>');
overlay.show();
overlay.appendTo(document.body);
$('.popup1').show();
$('.close, .popup1').click(function(){
$('.popup1').hide();
overlay.appendTo(document.body).remove();
return false;
});

$('.x, .popup1').click(function(){
$('.popup1').hide();
overlay.appendTo(document.body).remove();
return false;
});
});
</script>
<!--popup-->
 
  </head>

  <body>




 <a href="<?php echo base_url().$school_slug; ?>">
  <div class="main-logo">
  <img src="<?php echo base_url(); ?>assets/frontend/images/<?php echo $school_data['logo']; ?>" />
  </div>
  </a>
<!--logo-->

  <div class="main-social">
  <a href="<?php echo base_url(); ?>">
    <i class="fa fa-home border"></i>
  </a>
  <a href="<?php echo $school_data['facebook_url']; ?>" target="_blank">
    <i class="fa fa-facebook-square border"></i>
  </a>
  
  </div>
  <div class="home page page-id-12375 page-template-default ">
    <div class="page-container" style="z-index:10000;">     
      <div class="main-nav-overlay"></div>
      <div class="main-nav nav section force" id="bbMainNav" role="navigation" aria-labelledby="main navigation">
  <div class="center force">

    <a href="#menu" title="Open Menu" class="hamburger"><i class="fa fa-fw fa-bars"></i><span class="icon-fallback">Menu</span></a>

    <div class="french-fries">
      <a class="primary menu-tab" target="_blank" href="#menu" data-panel="panel-menu" title="Menu" style="padding-bottom: 12px;"><i class="fa fa-fw fa-bars"></i>Menu</a>      
      <a class="primary news-and-events-tab" href="#" data-panel="panel-event" title="News &amp; Events"><i class="fa fa-fw fa-calendar"></i>News &amp; Events</a>

<?php if($school_id != 3) { ?>      
<a class="primary search-tab" href="#search" data-panel="panel-search" title="Search" ><i class="fa fa-fw fa-cutlery"></i>Meal of the day</a> 
<?php } ?>
 <a class="primary search-tab" href="#thought" data-panel="panel-thought" title="thought" ><i class="fa fa-fw fa-lightbulb-o"></i>Quote of the Week</a> 
	    
      
  
      <ul class="actions tier-1"> 



<li class="parent-level " >

<a href="<?php echo base_url().$school_slug; ?>/calendar" target="_blank" title="Search" class="destination" ><i class="fa fa-fw fa-calendar"></i>Calendar</a></li>

<li class="parent-level " >

<a href="<?php echo base_url().$school_slug; ?>/admission-enquiry" target="_blank" title="Search" class="destination" ><i class="fa fa-fw fa-calendar"></i>Admissions</a></li>


<?php 

        	if($school_id ==1)
        	{
		?>
<li class="parent-level " style="display:none;">

<a href="<?php echo base_url().$school_slug; ?>/parentportal" target="_blank" title="Search" class="destination" ><i class="fa fa-fw fa-calendar"></i>Admission Status</a></li>
			
			<?php
			}
else if($school_id ==2)

{
?>
<li class="parent-level " style="display:none;">

<a href="<?php echo base_url().$school_slug; ?>/parentportal" target="_blank" title="Search" class="destination" ><i class="fa fa-fw fa-calendar"></i>Admission Status</a></li>
			<?php
			}
else if($school_id ==3)
{
?>

<?php
}

			?>

	   <?php 		
		         	foreach($erp_data as $erp)
		         	{
		         ?>
        <li class="parent-level " >
<a href="<?php echo $erp['url'];?>" title="Apply" class="destination" style="line-height: 15px;<?php if($school_id == 3) { ?> font-size:11.5px;<?php } ?>">
		<i class="fa fa-fw fa-user"></i><?php echo $erp['name'];?></a></li> 
		<?php }?>
       
      </ul>
    </div>

    <div class="nav-drawers force" style="background:#000;"><a class="close-box-x close" style="" href=""><i class="fa fa-fw fa-times"></i><span class="icon-fallback">Close</span></a>



  <div class="panel-menu nav-drawer column">
<a href="<?php echo base_url(); ?>" class="responsive-home">
    <i class="fa fa-home border "></i>
  </a>
        <ul class="site-tree tier-1"> 
        <?php 
        	//get all pages
        	if(isset($menus))
        	{
        		foreach($menus as $m)
        		{
        ?>

            <li class="parent-level toggle-section">
              <a href='<?php echo base_url().$school_slug."/".$m['page_alias']; ?>' class="right-side"  title='Expand' target="_blank">
                <i class='fa fa-plus-square-o'></i>
	               <span class='icon-fallback'>+</span>
               </a> 
               <a href="#" title="<?php echo $m['page_title']; ?>" class="destination"><?php echo $m['page_title']; ?></a>

        		
				
	            
	            <?php 
	            	if(isset($m['subpages']))
	            	{
	            	if(count($m['subpages']) > 0)
	            	{
	            ?>
	            <ul class="tier-2">
	            	<?php 
		            	foreach($m['subpages'] as $sm)
		            	{
						if($sm['page_alias']=='educom-online')
						{
	            	?> 
	    <li><a href="http://www.fliplearn.com/" title="<?php echo $sm['page_title']; ?>" class="destination" target="_blank">
		<?php echo $sm['page_title']; ?></a></li>
							<?php
							}

else if($sm['page_alias']=='fill-online')
						{
	            	?> 
	    <li><a href="http://103.16.141.42/disdwreg2016/" title="<?php echo $sm['page_title']; ?>" class="destination" target="_blank">
		<?php echo $sm['page_title']; ?></a></li>
							<?php
							}

							else
							
							
							{
							?>
							<li><a href="<?php echo base_url().$school_slug."/".$sm['page_alias']; ?>" target="_blank" title="<?php echo $sm['page_title']; ?>" class="destination" <?php if($sm['page_alias'] == 'prospectus') { ?>target="_blank"<?php } ?>>
		<?php echo $sm['page_title']; ?></a></li>
							
							<?php 
							}
							?>
							
	              	<?php 
		            	}
	              	?> 
	            </ul>
	            <?php 
	            	}
	            	}
	            ?>
	          </li>
	        <?php 
        	}
        	}
        ?>
  
        </ul>  

        <div class="socail-link">
          <h4 style="color:#F8C300; font-size:13px;letter-spacing:1px;margin-top: 267px;">Connect with us</h4>
          
          <a href="<?php echo $school_data['facebook_url']; ?>" target="_blank">
           <i class="fa fa-facebook-square"></i>
          </a>
        </div><!--soical link-->

        <div class="menu-adress">
          <h4 style="font-size:13px; letter-spacing:1px;">Reach us</h4>

<div class="read">
          <a href="<?php echo base_url().$school_slug; ?>/voiceparent">
            <button class="hvr-icon-forward" style="    width: 165px;">Voice of Parent</button>
          </a>
        </div>
          <div class="add1"><p><?php echo $school_data['school_location']; ?></p></div>
          <div class="tel1"><p><?php echo $school_data['school_contact']; ?></p></div>
<?php 

        	if($school_id ==1)
        	{
		?>
			
			<?php
			}
else if($school_id ==2)

{
?>
<div class="whatsapp1">
  <p>+91-9599964446 </p>
</div>
			<?php
			}
else if($school_id ==3)
{
?>

<?php
}

			?>
          <div class="email1"><p><?php echo $school_data['school_email']; ?></p></div>
        </div><!--menu address-->

       
      </div>






















      
<div class="panel-event nav-drawer column">
<h4 style="color:#F8C300;">News & Events</h4>         
         <ul class="ga-suggestion-set eeve">
		 
                 <?php 		

if(!empty($events_data )){
		         	foreach($events_data as $ev)
		         	{
					
		         ?>
                  <li><p style="font-family: Dense;padding-top: 5px;font-size: 25px;color: #00612F;margin:0;"></p>
				  <?php echo mdate("%d %M, %Y", strtotime($ev['start_date']));?>
				  <a href="<?php echo base_url().$school_slug; ?>/newsevent/" style="font-size:13px;line-height: 17px;padding-bottom: 5px;padding-top: 7px;">
				  <?php echo $ev['title']; ?></a></li>
         <?php 
         	}

}

else

{
echo "Summer Vacations";
}
         ?>

         <div class="read">
          <a href="<?php echo base_url().$school_slug; ?>/newsevent/">
            <button class="hvr-icon-forward">Read More</button>
          </a>
        </div>
                
              </ul>
      </div>


<div class="panel-search nav-drawer column">          
         <div class="ga-search-suggestions">
            <h4 style="color:#F8C300;">meal of the day</h4>
              <ul class="ga-suggestion-set">
	              <?php 
 if(!empty($meals_data)){
//echo date_default_timezone_get();
		         	foreach($meals_data as $md)
		         	{
		         ?>
                 <li><p style="font-family: Dense;padding-top: 5px;font-size: 25px;color: #DBDFDD;margin:0;"><?php echo mdate("%d %M, %Y", strtotime($md['mealdate']));?></p><p style="font-size:13px;font-family: Raleway;color:#B4B2AD;"><?php echo $md['meal']; ?></p></li>
                 <?php 
		         	}
}else{
					
					echo "No Records Found.";
					
					}
                 ?>
				   <div class="read"><a href="<?php echo base_url().$school_slug; ?>/meal/"><button class="hvr-icon-forward">Read More</button></a></div>
          
              </ul>
          </div>
      </div>



<div class="panel-thought nav-drawer column">          
         <div class="ga-search-suggestions">
            <h4 style="color:#F8C300;text-align: justify;">Quote of the Week</h4>
              <ul class="ga-suggestion-set">
	              <?php 
		         	foreach($allthought_data as $th)
		         	{
		         ?>
                 <li><p style="font-size:13px;font-family: Raleway;color:#B4B2AD;"><?php echo $th['thought']; ?></p></li>
                 <?php 
		         	}
                 ?>
				   
          
              </ul>


<div class="menu-adress">
          <h4 style="font-size:13px; letter-spacing:1px;">Reach us</h4>

<div class="read">
          <a href="<?php echo base_url().$school_slug; ?>/voiceparent">
            <button class="hvr-icon-forward" style="    width: 165px;">Voice of Parent</button>
          </a>
        </div>
          <div class="add1"><p><?php echo $school_data['school_location']; ?></p></div>
          <div class="tel1"><p><?php echo $school_data['school_contact']; ?></p></div>
<?php 

        	if($school_id ==1)
        	{
		?>
			
			<?php
			}
else if($school_id ==2)

{
?>
<div class="whatsapp1"  style="background-size:19px;">
  <p style="padding-left:26px;">+91-9599964446 </p>
</div>
			<?php
			}
else if($school_id ==3)
{
?>

<?php
}

			?>
          <div class="email1"><p><?php echo $school_data['school_email']; ?></p></div>
        </div><!--menu address-->
          </div>
      </div>








<div class="panel-calendar nav-drawer column">          
         <div class="ga-search-suggestions">
            <h4 style="color:#F8C300;">School Calendar</h4>
              <ul class="ga-suggestion-set">
	              
                 <li><p style="font-family: Dense;padding-top: 5px;font-size: 25px;color: #DBDFDD;margin:0;"><?php echo $calendar; ?></p>
				
                 
				   <div class="read"><a href="<?php echo base_url().$school_slug; ?>/calendar/"><button class="hvr-icon-forward">Read More</button></a></div>
          
              </ul>
          </div>
      </div>




      <div class="panel-actions nav-drawer column" > 
        <ul class="actions tier-1" style="display:none;"> 
          <li class="parent-level"><a href="#" title="Apply" class="destination">Apply</a></li> 
          <li class="parent-level"><a href="#" title="Visit" class="destination">Visit</a></li> 
          <li class="parent-level"><a href="#" title="See programs" class="destination">See programs</a></li>
        </ul>

<ul class="actions tier-1" > 




	   <?php 		
		         	foreach($erp_data as $erp)
		         	{
		         ?>
        <li class="parent-level res-parent" style="margin-top:20px;">

<a href="<?php echo $erp['url'];?>" title="Apply" class="destination" style="line-height: 15px;">
		<i class="fa fa-fw fa-user"></i><?php $erp['name'];?></a></li> 
		<?php }?>
       
      </ul>
      </div>

    
      
  </div>
</div>
</div>
      <!--googleon: all-->

        
    
  <div id="bbHeroSection" class="hero default section" style="display:none;">
    <div class="sticky">
      <div class="fullwidth fullheight">
        <div class="content">

        </div>
      </div>
    </div>
  </div>
  <script>setHeroHeight()</script>

  
  
  <div id="bbTopFactsSection" class="top-facts big-section section" style="display:none;">
    <div class="sticky">
      <div class="center">
        <div class="content force">

        </div>
      </div>
    </div>
  </div>

  <div id="bbProgramExplorer" class="program-explorer section">
    <div class="center">      

    </div>
  </div>
      <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-26641937-9', 'auto');
        ga('send', 'pageview');
      </script>
    </div>
  </div>
<script type="text/javascript">
	$(document).ready(function() {
		$('.calendar .day').click(function() {
			day_num = $(this).find('.day_num').html();
			day_data = prompt('Enter Stuff', $(this).find('.content').html());
			if (day_data != null) {
				
				$.ajax({
					url: window.location,
					type: 'POST',
					data: {
						day: day_num,
						data: day_data
					},
					success: function(msg) {
						location.reload();
					}						
				});
				
			}
			
		});
		
	});
		
	</script>


<style type="text/css" >
.content
{

color:green;
}
table tr:nth-child(2) {
    border-bottom: 1px solid #E5E2E0;
    background-color: #B15E5E;
    color: #fff;
    text-transform: uppercase;
}
table tr td:first-child {
    width: 150px;
    text-align: center;
    background-color: #58E258;
color: #000;
}
</style>

 <div class="about-banner">
			<?php 

        	if($school_id ==1)
        	{
		?>
			<img alt="" src="<?php echo base_url(); ?>assets/uploads/rohini calendar.jpg">
			<?php
			}
else if($school_id ==2)

{
?>
<img alt="" src="<?php echo base_url(); ?>assets/uploads/edge calender.jpg">
			<?php
			}
else if($school_id ==3)
{
?>
<img alt="" src="<?php echo base_url(); ?>assets/uploads/dis sec 23 calender.jpg">
<?php
}

			?>
 </div>

	<div class="wraper">
    <div class="page-heading">School Calendar</div>
    <div class="content">
      <div class="right-abc">
       <?php 

        	if($school_id ==1)
        	{
		?>


<p style="color:#000;float:left; width:50%;"><b>Theme of the Month:</b><br>
-------------------<br>
Exotic Fiesta</p>
<p style="color:#000;float:right;width:50%;text-align: right;"><b>House On Duty:</b><br>
-------------------<br>KADAMB
			
			<?php
			}
else if($school_id ==2)

{
?>
<p style="color:#000;float:left; width:50%;"><b>THEME::</b><br>
-------------------<br>GET READY WITH CAROL AS SANTA IS ON THE WAY </p>
<p style="color:#000;float:right;width:50%;text-align: right;"><b>VALUE:</b><br>
-------------------<br>KINDNESS</p>
			<?php
			}
else if($school_id ==3)
{
?>

<p style="color:#000;float:left; width:50%;"><b>Project of the Month :</b><br>
-------------------<br>
Each One Teach One</p>
<p style="color:#000;float:right;width:50%;text-align: right;"><b>Theme of the Month:</b><br>
-------------------<br>
FamilyValues of Modern Era</p>
<?php
}

			?>

	<?php echo $calendar; ?>
	
  <?php 

          if($school_id ==1)
          {
    ?>


<p style="color:#000;float:left; width:100%;"><span style="float: left;"><strong>NOTE:</strong></span><span style="float: left;">&nbsp;Periodic Test II which was scheduled on 28th December is postponed on 18th January for classes III-IV and 21st January for class (V-VIII).</br>&nbsp;Kindly refer updated datesheet on the portal.</span></p>
      
      <?php
      } ?>

      </div><!--right-->

    </div><!--content-->
  </div><!--wraper-->
  <style type="text/css">
		.calendar {
			font-family: Arial; font-size: 12px;
		}
		table.calendar {
			margin: auto; border-collapse: collapse;
		}
		.calendar .days td {
			width: 80px; height: 80px; padding: 2px;
			border: 1px solid #999;
			vertical-align: top;
			background-color: #DEF;
		}
		.calendar .days td:hover {
			background-color: #FFF;
		}
		.calendar .highlight {
			font-weight: bold; color: #00F;
		}
	</style>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
  
	