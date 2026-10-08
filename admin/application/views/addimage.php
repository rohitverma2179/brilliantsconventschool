<main class="app-content">
      <div class="app-title">
        <div>
          <h1><!-- <i class="fa fa-dashboard"></i> -->Gallery</h1>
         
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
             

              <!-- <h3><?php echo $title;?></h3> -->
<?php echo validation_errors(); ?>


<div class="container">

<h3>Add Album</h3>
<form action="<?php echo base_url(); ?>gallery/addgallery" method="post" enctype='multipart/form-data'>
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" name="title" id="title" placeholder="Enter Title">
  </div>
  <input type="hidden" name="id">
  
  <button type="submit" class="btn btn-primary">Submit</button></br></br>
</form>
      
            
             
        
            </div>
          </div>
        </div>
      </div>

             
          </div>
        </div>
      </div>
    </main>

  </body>
</html>




