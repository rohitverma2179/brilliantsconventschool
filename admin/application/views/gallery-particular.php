<main class="app-content">
      <div class="app-title">

<?php foreach($name as $row)  
       {  
          ?>
        <div>
          <h1><?php echo $row['gallery_name'];?></h1>
            
        </div>

        <!-- <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        </ul> -->
      </div>


      <div class="row">
        <div class="col-md-12">

          <div class="tile">
            <div class="tile-body">
              <div class="row">
<div class="col-md-6">
              <h3>Add Sub Gallery</h3>
<form action="<?php echo base_url(); ?>gallery/addgalleryimage" method="post" enctype='multipart/form-data'>
  <div class="form-group">
    <label for="title">Gallery Id</label>
    <input type="text" class="form-control" name="galleryid" id="galleryid" value="<?php echo $row['id'];?>" placeholder="Gallery Id">
  </div>
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" name="title" id="title" placeholder="Enter Title">
  </div>
  <div class="form-group">
    <label for="slug">Slug</label>
    <input type="text" class="form-control" name="slug" id="slug" placeholder="Enter Slug">
  </div>
  

  <div class="form-group">
    <label for="image">Image</label>
    <input type="file" name="image" class="form-control"> 
  </div>

  <input type="hidden" name="id">
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php } ?>

       </div>   



       <div class="col-md-6">
              <h3>Add Sub Gallery Images</h3>
<form action="<?php echo base_url(); ?>Addimage/addimages" method="post" enctype='multipart/form-data'>
  <div class="form-group">
    <label for="title">Sub Gallery Id</label>
    <input type="text" class="form-control" name="gallery_type_id" id="gallery_type_id" placeholder="Sub Gallery Id">
  </div>
  <!--<div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" name="title" id="title" placeholder="Enter Title">
  </div>
  <div class="form-group">
    <label for="slug">Slug</label>
    <input type="text" class="form-control" name="slug" id="slug" placeholder="Enter Slug">
  </div>
  
-->
  <div class="form-group">
    <label for="image">Image</label>
    <input type="file" name="image" class="form-control"> 
  </div>

  <input type="hidden" name="id">
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
        

       </div>   
     </div>
<div class="clearfix"></div></br>

              <!-- <h3><?php echo $title;?></h3> -->
<?php echo validation_errors(); ?>
     <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <div id="sampleTable_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                 <div class="row">
        <div class="col-sm-12">
        <table class="table table-hover table-bordered dataTable no-footer" id="sampleTable" role="grid" aria-describedby="sampleTable_info">
                <thead>
                  <tr role="row">
         <?php  if(!$subgalery){ ?> <th>Title</th> <?php  } ?>
          <th>Image</th>           
          <th>Action</th>
          </tr>
                </thead>
                <tbody>
                  
<?php
foreach($data as $row)  
       {
		   if($subgalery){
          ?>

           <tr>
            <td><img src="/<?php echo $row['gallery_image'];?>" alt="thumb" width="100" height="100"></td>                             
            <td><a href="javascript: deletegalleryImg(<?php echo $row['sub_id']; ?>);">Delete</a></td>
            </tr>  
          <?php } else { ?>
          
          <tr>  
            
            <td><?php echo $row['gallery_heading'];?></td>
            <td><img src="/<?php echo $row['gallery_image_cover'];?>" alt="thumb" width="100" height="100"></td>                             
            <td><a href="<?php echo base_url(); ?>gallery/editparticular/<?php echo $row['id']; ?>">Edit</a> &nbsp; | &nbsp; <a href="javascript: deletegallery(<?php echo $row['id']; ?>);">Delete</a></td>
            </tr> 
          <?php
		  }
           } ?>      

       
       </a>
       </div>
               
                 </tbody>
              </table></div></div>       
            </div>
          </div>
        </div>
      </div>

             
          </div>
        </div>
      </div>
    </main>

  </body>
<link href="<?php echo base_url();?>assets/css/bootstrap-responsive.min.css" rel="stylesheet">
<link href="<?php echo base_url();?>assets/css/font-awesome-ie7.min.css" rel="stylesheet">
<link href="<?php echo base_url();?>assets/css/style1.css" rel="stylesheet">
<link href="<?php echo base_url();?>assets/css/style-responsive.css" rel="stylesheet">
</html>

<script>

function deletegallery(id)
{
	
	if(confirm("are you sure to delete gallery"))
	{
		window.open("<?php echo base_url(); ?>gallery/deleteparticulartype/"+id,"_blank");
	}
	else
	{
		return false;
	}
}

function deletegalleryImg(id)
{
	
	if(confirm("are you sure to delete gallery"))
	{
		window.open("<?php echo base_url(); ?>gallery/deleteparticularimg/"+id,"_blank");
	}
	else
	{
		return false;
	}
}


</script>




