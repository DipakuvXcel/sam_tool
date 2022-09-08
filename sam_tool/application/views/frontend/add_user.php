<?php $this->load->view('frontend/_includes/header');?>

<style type="text/css">
	.checker{
		display: inline-block;
	}
</style>
<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
	<!-- BEGIN CONTENT BODY -->
	<div class="page-content">
		<!-- BEGIN PAGE HEADER-->

		<h3 class="page-title">
			Company Details
		</h3>
		<div class="page-bar">
			<ul class="page-breadcrumb">
				<li><i class="icon-home"></i> <a
					href="<?php echo base_url('frontend'); ?>">Home</a> <i
					class="fa fa-angle-right"></i></li>
				<li><a href="<?php echo base_url('frontend/subusers'); ?>">Sub-User</a>
					<i class="fa fa-angle-right"></i></li>
				<li><span> Add Company Details</span>	
			</ul>
		</div>
		<!-- END PAGE HEADER-->

		<div class="row">
			<div class="col-md-12">
				<!-- BEGIN EXAMPLE TABLE PORTLET-->
				<div class="portlet light ">
					<div class="portlet-title">
						<div class="caption font-dark">
							<i class="icon-settings font-dark"></i> <span
								class="caption-subject bold uppercase"> Add Company Details</span>
						</div>
						<div class="actions">
							
								<a href="<?php echo base_url('frontend/subusers');?>"
									class="btn btn-circle default">
									Back</a>
						</div>
					</div>
					<div class="portlet-body">
					
							<?php if($this->session->flashdata("success_message")!=""){?>
			                <div class="Metronic-alerts alert alert-info fade in">
								<button type="button" class="close" data-dismiss="alert"
									aria-hidden="true"></button>
								<i class="fa-lg fa fa-check"></i>  <?php echo $this->session->flashdata("success_message");?>
			                </div>
			              <?php }?>
			              <?php if($this->session->flashdata("error_message")!=""){?>
			                <div
								class="Metronic-alerts alert alert-danger fade in">
								<button type="button" class="close" data-dismiss="alert"
									aria-hidden="true"></button>
								<i class="fa-lg fa fa-warning"></i>  <?php echo $this->session->flashdata("error_message");?>
			                </div>
			              <?php }?>
			              
			              <?php if(validation_errors()!=""){?>
			                <div
								class="Metronic-alerts alert alert-danger fade in">
								<button type="button" class="close" data-dismiss="alert"
									aria-hidden="true"></button>
								<i class="fa-lg fa fa-warning"></i>  <?php echo validation_errors();?>
			                </div>
			              <?php }?>
			              
			              <?php if( $this->upload->display_errors()!=""){?>
			                <div
								class="Metronic-alerts alert alert-danger fade in">
								<button type="button" class="close" data-dismiss="alert"
									aria-hidden="true"></button>
								<i class="fa-lg fa fa-warning"></i>  <?php echo  $this->upload->display_errors();?>
			                </div>
			              <?php }?>
			              
			             
		              
						<form id="add_student_form" class="horizontal-form" autocomplete="off" action="<?php echo base_url('frontend/save_user');?>"
							method="post" enctype="multipart/form-data">
							<div class="form-body">
								<div class="row">
								<div  class="col-md-3">
									<div class="form-group">
								 		<label> Shop logo(150X60px)</label><span style="color:red">*</span>
                                		<input type="file" class="form-control" name="logo" id="logo">
                                	</div>
						  		</div>
								<div  class="col-md-3">
									<div class="form-group">
										<label> Shop Number</label><span style="color:red">*</span>
                                		<input type="text" class="form-control" name="shop_number" id="shop_number">
                                	</div>
                           	 	</div>
                                <div class="col-md-3">
									<div class="form-group">
										<label class="control-label">Shop Name</label><span style="color:red">*</span>
										<input id="shop_name" name="shop_name" class="form-control" type="text" value="<?= set_value('name'); ?>">
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label class="control-label">Owner Name</label><span style="color:red">*</span>
										<input id="name" name="name" class="form-control" type="text" value="<?= set_value('name'); ?>">
									</div>
								</div>
							 </div>
						  	<div class="row">
								<div  class="col-md-3">
									<div class="form-group">
										<label> Mobile No</label>
										<input type="text" class="form-control" value="" name="shop_contact" id="shop_contact">
									</div>
								</div>
								<div class="col-md-5">
									<div class="form-group">
										<label class="control-label">Email</label><span style="color:red">*</span>
										<input id="email" name="email" class="form-control" type="text" value="<?= set_value('email'); ?>">
									</div>
								</div>
								<div  class="col-md-2">
									<div class="form-group">
										<label> PAN No</label>
										<input type="text" class="form-control"  value="<?php  ?>" name="shop_pan" id="shop_pan">
									</div>
								</div>
								<div  class="col-md-2">
									<div class="form-group">
										<label> VAT No</label>
										<input type="text" class="form-control"  value="<?php  ?>" name="shop_van" id="shop_van">
									</div>
								</div>
							</div>
							<div class="row">
								<div  class="col-md-3">
									<div class="form-group">
										<label> GST No</label>
										<input type="text" class="form-control"  value="<?php  ?>" name="shop_gstno" id="shop_gstno">
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Website:</label>
										<input type="url"  class="form-control" value="<?php ?>" name="shop_website" id="shop_website" >
									</div>
								</div>
								<div  class="col-md-2">
									<div class="form-group">
										<label>IFSC Code:</label>
										<input type="text"  class="form-control" value="<?php  ?>" name="ifsc_code" id="ifsc_code" >
									</div>
								</div>
								<div  class="col-md-3">
									<div class="form-group">
										<label> Account Number:</label>
										<input type="text" class="form-control"  value="<?php  ?>" name="account_number" id="account_number">
									</div>
								</div>
							</div>
							<div class="row">
								<div  class="col-md-6">
									<div class="form-group">
										<label> Bank:</label>
										<input type="text" class="form-control"  value="<?php ?>" name="bank_name" id="bank_name">
									</div>
								</div>
								<div  class="col-md-6">
									<div class="form-group">
										<label>Account Name:</label>
										<input type="text"  class="form-control" value="<?php  ?>" name="account_name" id="account_name" >
									</div>
								</div>
							</div>

							</div>
								<div class="row">
									<div class="form-group">
										<label>Address:</label>
										<textarea class = "form-control" rows="3" name="shop_address" id="shop_address" placeholder = ""></textarea>
									</div>
								</div>
								<div class="row">
									<div class="form-group">
										<label>Terms & Conditions:</label>
										<textarea class = "form-control" rows="3"  name="shop_terms_conditions" id="shop_terms_conditions" placeholder = ""></textarea>
									</div>
								</div>
								<div class="row">
                                  	<div class="col-md-12">
										
								</div>
							<br>
							</div>
							<div class="form-actions right">
								<button type="submit" class="btn blue">
									<i class="fa fa-check"></i> Submit
								</button>
								<a type="button" class="btn default" href="<?php echo base_url('frontend/subusers');?>">Cancel</a>
							</div>
						</form>
					</div>
				</div>
				<!-- END EXAMPLE TABLE PORTLET-->
			</div>
		</div>

	</div>
	<!-- END CONTENT BODY -->
</div>
<!-- END CONTENT -->

<script>
	var base_url = "<?php echo base_url(); ?>";
</script>

<?php
$data ['script'] = "";
$data ['initialize'] = "pageFunctions.init();";
$this->load->view ( 'frontend/_includes/footer', $data );
?>

<script>
	//CKEDITOR.replace( 'editor1' );
	//CKEDITOR.replace( 'editor2' );
	$(".my-datepicker").datepicker({ 
        minDate: 0,
        dateFormat: "dd-mm-yy",
        changeMonth: true,
        changeYear: true,
        yearRange: '-100:0'
    });
</script>