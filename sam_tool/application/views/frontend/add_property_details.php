<?php $this->load->view('frontend/_includes/header');?>
<style>
.custom-file-upload {
border: none;
display: inline-block;
padding: 5px 15px;
border-radius: 5px;
cursor: pointer;
background-color: #2b3b55;
color: white;
}
</style>
<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
<!-- BEGIN CONTENT BODY -->
<div class="page-content">
	<!-- BEGIN PAGE HEADER-->

	<h3 class="page-title">
		Add Property Details
	</h3>
	<div class="page-bar">
		<ul class="page-breadcrumb">
			<li><i class="icon-home"></i> <a
				href="<?php echo base_url('frontend'); ?>">Home</a> <i
				class="fa fa-angle-right"></i></li>
			<li><a href="<?php echo base_url('frontend/property_details'); ?>">Property Details</a>
				<i class="fa fa-angle-right"></i></li>
			<li><span> Add Property Details</span>	
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
							class="caption-subject bold uppercase"> Add Property Details</span>
					</div>
					<div class="actions">
						
							<a href="<?php echo base_url('frontend/property_details');?>"
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
						
						
					
					<form id="add_student_form" class="horizontal-form" autocomplete="off" action="<?php echo base_url('frontend/save_property_details');?>"
						method="post" enctype="multipart/form-data">
					<input id="country" name="country" type="hidden"class="form-control"value="110">

						<div class="form-body">							
							<div class="row">

						<div class="col-md-4">
								<div class="form-group">
									<label class="control-label">Current Market Value</label><span style="color:red">*</span>
									<input id="amount" name="amount" class="form-control" type="number"  value="<?= set_value('amount'); ?>" placeholder="Current Market Value" step="any">
								</div>
							</div>
							
							<div class="col-md-2">
								<div class="form-group">
									<label class="control-label">Property Title Search</label><span style="color:red">*</span>
									<div class="d-flex">
									<label for="title_search" class="custom-file-upload">
										<i class="fa fa-upload"></i> Choose file
									</label>
									<span id="title_searchName" class="pl-2" style="overflow:hidden;">.pdf</span>
									<input type="file" id="title_search" name="title_search" accept=".pdf" style="display:none;" required></input>
							</div>
								</div>
							</div>
							<div class="col-md-2">
						<label>Upload Index II*: </label><br>
							<div class="d-flex">
									<label for="index_val" class="custom-file-upload">
										<i class="fa fa-upload"></i> Choose file
									</label>
									<span id="indexName" class="pl-2" style="overflow:hidden;">.pdf</span>
									<input type="file" id="index_val" name="index_val" accept=".pdf" style="display:none;" required></input>
							</div>
						</div>
						<div class="col-md-2">
									<div class="form-group">
										<label class="control-label">State</label><span style="color:red">*</span>
										<select id="state" name="state" class="form-control" required>
                                                <option selected="true" disabled="disabled" value="">State</option>
                                                        <?php for($i=0;$i<count($state);$i++){ ?>
                                                <option value="<?= $state[$i]->id ?>" ><?php echo $state[$i]->state_name; ?></option>
												<?php } ?>
			
                                                </select>
										<!--<input id="state" name="state" class="form-control" placeholder="State" type="text" value="<?= set_value('state'); ?>">-->
									</div>
								</div>
							<div class="col-md-2">
								<div class="form-group">
									<label class="control-label">City</label><span style="color:red">*</span>
										<select id="city" name="city" class="form-control" required>
                                                <option selected="true" disabled="disabled" value="">City</option>
                                                    <?php for($i=0;$i<count($city);$i++){ ?>
                                                <option value="<?= $city[$i]->id ?>" ><?php echo $city[$i]->city_name; ?></option>
												<?php } ?>
			
                                                </select>
										<!--<input  name="city" class="form-control" maxlength="25" type="text" placeholder="City" value="<?= set_value('city'); ?>" alt="Only 25 Character Allowed">-->
										</div>
									</div>
								</div>
							
					
					<div class="row">
							<div class="col-md-12">
									<div class="form-group">
										<label class="control-label">Property Description</label>
										<textarea id="notes" name="notes" class="form-control" rows="5"><?= set_value('notes'); ?></textarea>
									</div>
								</div>
							</div>

						</div>
						<div class="form-actions right">
							<button type="submit" class="btn blue">
								<i class="fa fa-check"></i> Submit
							</button>
							<a type="button" class="btn default" href="<?php echo base_url('frontend/property_details');?>">Cancel</a>
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

function readURL(input) {
	
	if (input.files && input.files[0]) {
		$('#blah').show();
		var reader = new FileReader();

		reader.onload = function (e) {
			$('#blah')
				.attr('src', e.target.result)
				.width(98)
				.height(90);
		};

		reader.readAsDataURL(input.files[0]);
	}
}

function removeSingleImg(){
	$('#blah').hide();
}
</script>