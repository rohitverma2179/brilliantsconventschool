

<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Update Gallery Order</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
			<?php include('template/alert_messages.php');?>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                       
                        <div class="panel-body">
						
				
						<?php echo validation_errors('<div class="alert alert-danger alert-dismissable">
                                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>', '</div>'); ?>
                            <div class="row">
							 
								
                                <div class="col-lg-6">
                                    
									<form role="form" action="<?php echo base_url();?>admin/gallery/savego/<?php echo $gallery_data['id']; ?>" method="post" enctype="multipart/form-data">
									
                                           
                                        <div class="form-group">
                                            <label>Order</label>
											
											 <input type="text" class="form-control" name="caption" id="caption" value="<?php echo $gallery_data['caption']; ?>"  placeholder="Enter Order">
                                           
                                        </div>
										 
										
											
                                           <button type="submit"  class="btn btn-default">Save</button>
                                        
                                        <button type="reset" class="btn btn-default">Cancel</button>
										</form><br clear="all">
										  
										<!--<input type="button" id="add_more" class="upload" value="+"/>-->
														 
                                     
                                </div>
								
								 
								
                                      
                                        										
                                    
                              
                               
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
         <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        
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
 <script src="<?php echo base_url();?>assets/jss/jquery-1.3.2.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/jss/jquery.min.js" type="text/javascript"></script>
		<style>.abcd img {
    width: 60px;
    height: auto;
	</style><style>
		.abcd img 
		{
        width: 60px;
        height: auto;
		}
		.xyz{
		margin-top:-1px;
		}
		.jj
		{
		    margin-top: 8px;
		margin-bottom:5px;
		}
	    </style>
	
<script>
  function checkDelete(id)
  {
     var check = confirm('Are you want to delete?');
     if(check==true)
     {
       window.location="<?php echo base_url();?>admin/gallery/deleteinner/"+id;
     }
     else
     {
      return false;
     }
  }
</script>
<script>
	$("#addMore").click(function(){
		var	abc ="<span class='xyz' ><input type='file' name='image[]' class='jj'><input type='text' name='caption[]' ><span onclick='{ $(this).closest(\".xyz\").remove();}' style='cursor:pointer'> X</span><br/></span>";
		$("#add_more_div").append(abc);
	});
	

</script>
