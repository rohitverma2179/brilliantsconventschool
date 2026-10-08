<main class="app-content">
      <div class="app-title">
        <div>
          <h1><!-- <i class="fa fa-dashboard"></i> --><?php echo $title;?></h1>
         
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
             

              <h3>Month Wise Syllabus</h3>
<?php echo validation_errors(); ?>


<div class="container">


<form action="<?php echo base_url(); ?>Syllabus/addsyllabus" method="post" enctype='multipart/form-data'>
  <div class="form-group">
    <label for="title">Class</label>
    <select name="class" id="class" class="form-control">
        <option value="">Select</option>
        <option value="1">Class 1</option>
        <option value="2">Class 2</option>
        <option value="3">Class 3</option>
        <option value="4">Class 4</option>
        <option value="5">Class 5</option>
        <option value="6">Class 6</option>
        <option value="7">Class 7</option>
        <option value="8">Class 8</option>
        <option value="9">Class 9</option>
        <option value="10">Class 10</option>
        <option value="11">Class 11</option>
        <option value="12">Class 12</option>
        
    </select>
  </div>
  <div class="form-group">
    <label for="title">Month</label>
    <select name="month" id="month" class="form-control">
        <option value="">Select</option>
        <option value="jan">January</option>
        <option value="feb">Febrary</option>
        <option value="mar">March</option>
        <option value="apr">April</option>
        <option value="may">May</option>
        <option value="jun">June</option>
        <option value="jul">July</option>
        <option value="aug">August</option>
        <option value="sep">September</option>
        <option value="oct">October</option>
        <option value="nov">November</option>
        <option value="dec">December</option>
        
    </select>
  </div>
  <div class="form-group">
    <label for="image">Image</label>
    <input type="file" name="image" class="form-control"> 
  </div>

  <input type="hidden" name="id">
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


</div>




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
          <th>Class</th>
          <th>Syllabus</th>
          <th>Month</th>
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
$sql = "SELECT * FROM senior_syllabus ORDER BY id ASC";
$query = mysqli_query($con, $sql);
$result = mysqli_num_rows($query);
$lastPage = ceil($result/$showRecordPerPage);
$firstPage = 1;
$nextPage = $currentPage + 1;
$previousPage = $currentPage - 1;
$sqlresult = "SELECT * FROM senior_syllabus ORDER BY id ASC LIMIT $startFrom, $showRecordPerPage";
$newsresult = mysqli_query($con, $sqlresult);


while ($row = mysqli_fetch_assoc($newsresult)) { ?>


           <tr>  
            
            <td><?php echo $row['class'];?></td> 
            <td><?php echo $row['document'];?></td>
            <td><?php echo $row['month'];?></td> 
            <td><a href="<?php echo base_url(); ?>Syllabus/editsyllabus/<?php echo $row['id']; ?>">Edit</a> &nbsp; | &nbsp; <a href="<?php echo base_url(); ?>Syllabus/delete_syllabus/<?php echo $row['id']; ?>">Delete</a></td> 
          
           
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
</html>





