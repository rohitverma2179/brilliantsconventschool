<main class="app-content">
      <div class="app-title">
        <div>
          <h1><!-- <i class="fa fa-dashboard"></i> -->Academic Pages</h1>
         
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
             

              <h3><?php echo $title;?></h3>
<?php echo validation_errors(); ?>


<div class="container">
<?php foreach ($posts as $post) : ?>
  

<?php echo form_open_multipart('Schedule/updateschedule/'.$post['id']); ?>



  <div class="form-group">
    <label for="title">Class</label>  
    <input type="text" class="form-control" name="class" value="<?php echo $post['class']; ?>">
  </div>
  
  <div class="form-group">
    <label for="image">Syllabus</label>
    
    <input type="file" name="image" class="form-control"> 
  </div>

  

  
  <input type="submit" name="update" value="update" class="btn btn-danger" style="float: right;">

<?php endforeach; ?>
</form>


</div>

             
          </div>
        </div>
      </div>
    </main>

  </body>
</html>