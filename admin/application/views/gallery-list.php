

<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Gallery</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
			
            <!-- /.row -->
            <div class="row">
			<div class="col-lg-12">
			</div>
                <div class="col-lg-2">
				 
                 <a href="<?php echo base_url();?>admin/gallery"  style="text-decoration:none;color:#666;"> <button type="submit" class="btn btn-default">Add Gallery Images</button></a>   
                       
						
                    
                <!-- /.col-lg-12 -->
            </div>
			<br ><br >
            <!-- /.row -->
         <div class="row">
                <div class="col-lg-12" style="width: 97%;
    margin-left: 15px;">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table  class="table table-striped table-bordered table-hover">
                                    <thead>									
                                        <tr>
										<th>School</th>
										    <th>Type</th>
                                            <th>Title</th>
                                            <th> Description</th>											
                                            <th> Cover Photo</th>											                                         										
											<th>Operations</th>
                                        </tr>
                                    </thead>
									
										<?php
                                        if(isset($galleries_data))
                                        {
                                    ?>
                                    <tbody>
                                    <?php
                                        foreach($galleries_data as $gallery)
									    {
                                    ?>
                                        <tr class="odd gradeX">
										 <td><?php echo $this->common->getSingleValue('schools','school_name','id',$gallery['school_id']); ?></td>
                                            <td><?php echo $gallery['type'];?></td>
											<td><?php echo $gallery['title'];?></td>
											<td><?php echo $gallery['description'];?></td>
											<td><img src="<?php echo base_url() ?>/assets/uploads/<?php echo $gallery['cover_photo'];?>" height="30" width="30"></td>
											<td class="center">											
											<a href="<?php echo base_url(); ?>admin/gallery/update/<?php echo $gallery['id']; ?>">
											<span class="fa fa-edit" style="font-size: 20px; color: #0000ff;"></span></a> &nbsp;&nbsp;																			
				<a href="#" onclick="checkDelete(<?php echo $gallery['id']; ?>);"><span class="fa  fa-times" style="font-size: 20px; color: #ff0000;"></span></a>&nbsp;&nbsp;</td>
											
											
											
                                        </tr>
										 <?php
                                        }
                                    ?>
                                    </tbody>
									<?php
                                        }
                                    ?>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
	<script>
  function checkDelete(id)
  {
     var check = confirm('Are you want to delete?');
     if(check==true)
     {
       window.location="<?php echo base_url();?>admin/gallery/delete/"+id;
     }
     else
     {
      return false;
     }
  }
</script>