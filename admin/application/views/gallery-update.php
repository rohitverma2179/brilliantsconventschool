

<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Update Gallery </h1>
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
									<form role="form" action="<?php echo base_url();?>admin/gallery/save/<?php echo $gallery_data['id']; ?>" method="post" enctype="multipart/form-data">
									<div class="form-group">
                                 <label>School</label>
                                               <select class="form-control" name="school_id" id="school_id">
                                            <?php
                                                if(!$this->session->userdata('school_id') == 0)
                                                {
                                                    $school_id = $this->session->userdata('school_id');
                                                    $school_data = $this->common->get_all_data('schools','id',$school_id);
                                                }
                                                else
                                                {
                                                    $school_id = $this->session->userdata('school_id');
                                                    $school_data = $this->common->get_all_data('schools','1','1');
                                                }
                                                foreach($school_data as $sd)
                                                {
                                            ?>
                                                <option value="<?php echo $sd['id']; ?>" <?php if($sd['id'] == $gallery_data['school_id']) { ?>selected="selected"<?php } ?>><?php echo $sd['school_name']; ?></option>
                                            <?php
                                                }
                                            ?>
                                                </select>
                                         </div>
                                         <div class="form-group">
                                            <label>Type</label> 
                                            <select class="form-control" name="type" id="type">                                     
                                                <option value="images" <?php if($gallery_data['type']== "images") { ?> selected="selected"<?php } ?>>images</option>
												                                        
                                                </select>
												</div>
                                           
                                        <div class="form-group">
                                            <label>Title</label>											
											<input type="text" class="form-control" value="<?php echo $gallery_data['title']; ?>" name="title" id="title" placeholder="Enter Title">
                                           
                                        </div>
										 <div class="form-group">
                                            <label>Description</label>
											
											 <textarea class="form-control" name="description" id="description"  placeholder="Enter Description"><?php echo $gallery_data['description']; ?></textarea>
                                           
                                        </div>
										
										
										
											
                                           <button type="submit"  class="btn btn-default">Save</button>
                                        
                                        <button type="reset" class="btn btn-default">Cancel</button>
										</form><br clear="all">
										  
										<!--<input type="button" id="add_more" class="upload" value="+"/>-->
										<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table  class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr><th>Select</th>
                                            
                                            <th>Image</th>
											
                                            <th>Caption</th>
                                            
											<th>Operations</th>
                                        </tr>
                                    </thead>
									
                                    <tbody>
									
									
									<?php
									$query = $this->db->get_where('gallery_images', array('gallery_id' => $gallery_data['id']));
									

                                   foreach ($query->result() as $row1)
                                    {
									?>
									
                                        
                                        <tr class="odd gradeX">
                                           <td><input name="data[]" id="data" type="checkbox" value="<?php echo $row1->id;?>" ></td>
											<td><img src="<?php echo base_url() ?>/assets/uploads/<?php echo $row1->image;?>" height="100" width="100"></td>
                                            <td><?php echo $row1->caption;?></td>
											
                                         
											<td class="center">
										
				                            <a href="#" onclick="checkDelete(<?php echo $row1->id; ?>);">
											<span class="fa  fa-times" style="font-size: 20px; color: #ff0000;"></span>
											</a>&nbsp;&nbsp;
											<a href="<?php echo base_url(); ?>admin/gallery/updatego/<?php echo $row1->id; ?>">
											<span class="fa fa-edit" style="font-size: 20px; color: #0000ff;"></span></a></td>
                                             </tr><?php } ?>
                                       
                                    </tbody>
										
                                </table>
								<form role="form" action="<?php echo base_url();?>admin/gallery/images" method="post" enctype="multipart/form-data">
								<?php //print_r($gallery_data); ?>
								<input type = "hidden" name="gallery_id" value="<?php echo isset($gallery_data) && $gallery_data['id'] != '' ? $gallery_data['id'] : '' ; ?>">
                                   <div class="form-group" >
										<label>Multiple Images</label>
                                          
                                             <input type="file" name="image[]"   style="margin-bottom:5px;"> 
											 <input name="caption[]" type="text" id="caption"  placeholder="Enter Caption" >
											 
                                            </div>
											<span id="add_more_div" ></span><br>
									    <button type="button" id='addMore' class="btn btn-default" style="color:#111013;background-color:#ddd;font-weight: 700;">+Add More</button>		<br><br>
										<input type="submit" name="submit" value="save" class="btn btn-default" />
										<button type="reset" class="btn btn-default">Cancel</button>
                                        </form>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
									 
                                     
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
