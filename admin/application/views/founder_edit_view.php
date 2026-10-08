<main class="app-content">
      <div class="app-title">
        <div>
          <h1><!-- <i class="fa fa-dashboard"></i> -->Edit Founder</h1>
         
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
  

<?php echo form_open_multipart('Ourfounder/updatefounder/'.$post['id']); ?>



  <div class="form-group">
    <label for="title">Title</label>  
    <input type="text" class="form-control" name="title" value="<?php echo $post['title']; ?>">
  </div>
  <div class="form-group">
    <label for="slug">Slug</label>
    <input type="text" class="form-control" name="slug" value="<?php echo $post['name']; ?>">
  </div>
  <div class="form-group">
    <label for="body">Body</label>
    <textarea class="form-control" name="body" value="<?php echo $post['description']; ?>"><?php echo $post['description']; ?></textarea> 
  </div>

  <div class="form-group">
    <label for="image">Image</label>
    <img src="http://localhost/ciblog/uploads/<?php echo $post['image_path']; ?>" width="15%"/></br></br>
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