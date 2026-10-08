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
  

<?php echo form_open_multipart('Admission/updatelist/'.$post['id']); ?>



  <div class="form-group">
    <label for="title">Heading</label>  
    <input type="text" class="form-control" name="heading" value="<?php echo $post['heading']; ?>">
  </div>

  <div class="form-group">
    <label for="title">Link</label>  
    <input type="text" class="form-control" name="link" value="<?php echo $post['link']; ?>">
  </div>
  
  <div class="form-group">
    <label for="image">Document</label>
    
    <input type="file" name="image" class="form-control"> 
  </div>

  <!-- <div class="form-group">
    <label for="title">List Type</label>  
    <select name="list" id="list" class="form-control">
        <option value="">Select</option>
        <option value="FL">First List</option>
        <option value="FWL">First Waiting List</option>
        <option value="SWL">Second Waiting List</option>
        
    </select>
  </div> -->

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