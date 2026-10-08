<main class="app-content">
      <div class="app-title">
<?php foreach($name as $row)  
       {  
          ?>

        <div>
          <h1><?php echo $row['menu_title'];?></h1>
         
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

  <h3>Add  Image</h3>
<form action="<?php echo base_url(); ?>club/addclubimage" method="post" enctype='multipart/form-data'>
  <div class="form-group">
    <label for="title">Club Id</label>
    <input type="text" class="form-control" name="clubid" id="clubid" value="<?php echo $row['id'];?>">
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
</div>

</div>

        <div class="col-md-12">

          <div class="tile">
            <div class="tile-body">
             

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
          <th >Title</th>
          <th>Action</th>
          </tr>
                </thead>
                <tbody>
                  





<?php

$con= mysqli_connect("localhost", "brilliantuser", "brilliant@321","brilliantdb");

$showRecordPerPage = 10;
if(isset($_GET['page']) && !empty($_GET['page'])){
$currentPage = $_GET['page'];
}else{
$currentPage = 1;
}
$startFrom = ($currentPage * $showRecordPerPage) - $showRecordPerPage;
$sql = "SELECT * from menu  where parent_page = '45' and status ='1'";
$query = mysqli_query($con, $sql);
$result = mysqli_num_rows($query);
$lastPage = ceil($result/$showRecordPerPage);
$firstPage = 1;
$nextPage = $currentPage + 1;
$previousPage = $currentPage - 1;
$sqlresult = "SELECT * from menu_images  where menu_id = '".$row['id']."'";
$newsresult = mysqli_query($con, $sqlresult);


while ($row = mysqli_fetch_assoc($newsresult)) { ?>


           <tr>  
            
            <td><img src="/<?php echo $row['image_path'];?>" alt="thumb" width="100" height="100" ></td>  
            <td><a href="<?php echo base_url(); ?>Club/delete/<?php echo $row['id']; ?>">Delete</a></td>
           
            </tr>  
                
             
<?php }  
         ?>  
    
                    
                 </tbody>
              </table></div></div>

         




<nav aria-label="Page navigation" style="text-align: center;">
<ul class="pagination">
<?php if($currentPage != $firstPage) { ?>
<li class="page-item">
<a class="page-link" href="?page=<?php echo $firstPage ?>" tabindex="-1" aria-label="Previous">
<span aria-hidden="true">First</span>
</a>
</li>
<?php } ?>
<?php if($currentPage >= 2) { ?>
<li class="page-item"><a class="page-link" href="?page=<?php echo $previousPage ?>"><?php echo $previousPage ?></a></li>
<?php } ?>
<li class="page-item active"><a class="page-link" href="?page=<?php echo $currentPage ?>"><?php echo $currentPage ?></a></li>
<?php if($currentPage != $lastPage) { ?>
<li class="page-item"><a class="page-link" href="?page=<?php echo $nextPage ?>"><?php echo $nextPage ?></a></li>
<li class="page-item">
<a class="page-link" href="?page=<?php echo $lastPage ?>" aria-label="Next">
<span aria-hidden="true">Last</span>
</a>
</li>
<?php } ?>
</ul>
</nav>







      
       
            
             
        
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




