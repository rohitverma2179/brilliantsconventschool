<?php 
	if($this->session->flashdata('msgsuccess'))
	{
?>
		<div class="alert alert-success alert-dismissable">
			<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
			<?php echo $this->session->flashdata('msgsuccess'); ?>
		</div>
<?php 
	}
?>

<?php 
	if($this->session->flashdata('msgerror'))
	{
?>
		<div class="alert alert-danger alert-dismissable">
			<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
			<?php echo $this->session->flashdata('msgerror'); ?>
		</div>
<?php 
	}
?>
