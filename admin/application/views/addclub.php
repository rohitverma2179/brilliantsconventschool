<main class="app-content">
      <div class="app-title">
        <div>
          <h1><!-- <i class="fa fa-dashboard"></i> -->Add Club</h1>
         
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

<h3>Add  image</h3>
<form action="<?php echo base_url(); ?>club/addclub" method="post" enctype='multipart/form-data'>
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" name="title" id="title" placeholder="Club Title">
  </div>
  <div class="form-group">
    <label for="title">Name</label>
    <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name">
  </div>
  <div class="form-group">
    <label for="slug">Heading</label>
    <input type="text" class="form-control" name="heading" id="heading" placeholder="Enter Image">
  </div>
  <div class="form-group">
    <label for="image">Image</label>
    <input type="file" name="image" class="form-control"> 
  </div>
  <input type="hidden" name="parent" value="45">
  <input type="hidden" name="menu" value="pages.php">
  <input type="hidden" name="status" value="1">
  <button type="submit" class="btn btn-primary">Submit</button>
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




