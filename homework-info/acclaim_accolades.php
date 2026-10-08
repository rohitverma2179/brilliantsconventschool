 <!doctype html>
<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">	
  <?php include 'header.php';?>
    <?php    
        //       $gtypeid = $_GET['id'];  
  		    //     $g_query = "SELECT * from gallery_type  where id = '".$gtypeid."'";
    				//   $gallerysql = mysqli_query($con,$g_query);
  			   //   $page = mysqli_fetch_assoc($gallerysql); ?>
   <title><?php  echo 'Acclaim and Accolades';?></title>
  <div class="inner-banner">
   	  <img src="images/bcs_gallery.jpeg">
   	   <div class="tint">
	      <h1><?php  echo 'Acclaim and Accolades';?></h1>
	   </div>
  </div><!--innerbanner-->
  <section class="page">
    <div class="container-fluid">
     <div class="row">
       <?php //include 'gallery-image-sidebar.php';?>
      
             <div class="col-md-12 col-xs-12">
               <div class="inner-discription">
        		  <h2><?php  echo 'Acclaim and Accolades';?></h2>
        			<div class="row">
        			<?php 
        			$j=1;
        			for($i=0;$i<42;$i++) {
        			
        			?>
        			 <div class="col-md-4 col-sm-6">
        			    <div class="thumbnail">
        				<a href="" data-fancybox="gallery" data-caption="Caption #1">
        				    <?php if(file_exists('./images/acclaim_accolades/'.$i.'.jpg')){?>
        				    <img src="./images/acclaim_accolades/<?php echo $i ?>.jpg" alt="thumb">
        				    <?php } else {?>
        			    <img src="./images/acclaim_accolades/1-<?php echo $j++ ?>.png" alt="thumb">
        			    <?php } ?>
        				</a>
        			   </div><!--thumb-->
        			 </div><!--colms-4-->
        			 <?php }?>
        			
			 
          </div> <!-- /.container inner-->
		  </div><!--row-->
        </div><!-- /.col-lg-9 -->
      </div><!--row-->
    </div>
    <!-- /.container -->
    </section>
     <?php include 'footer.php';?>
  </body>
</html>