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
		Add Document Listing
	</h3>
	<div class="page-bar">
		<ul class="page-breadcrumb">
			<li><i class="icon-home"></i> <a
				href="<?php echo base_url('frontend'); ?>">Home</a> <i
				class="fa fa-angle-right"></i></li>
			<li><a href="<?php echo base_url('frontend/document_listing'); ?>">Document Listing</a> </li> <i class="fa fa-angle-right"></i>
			<li><a> Add Document Listing</a> </li>
			<li><span></span>	
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
							class="caption-subject bold uppercase "> Add document_listing</span>
					</div>
					<div class="actions">
							<a href="<?php echo base_url('frontend/document_listing');?>" class="btn btn-circle default fa fa-arrow-left">Back
							</a>
					</div>
				</div>
				<div class="portlet-body">
						<?php if($this->session->flashdata("success_message")!="")
						{
						?>
				<div class="Metronic-alerts alert alert-info fade in">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
							<i class="fa-lg fa fa-check"></i>  <?php echo $this->session->flashdata("success_message");?>
				</div>
						<?php 
						}
						if($this->session->flashdata("error_message")!="")
						{
						?>
				<div class="Metronic-alerts alert alert-danger fade in">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
							<i class="fa-lg fa fa-warning"></i>  <?php echo $this->session->flashdata("error_message");?>
				</div>
						<?php 
						}
						if(validation_errors()!="")
						{
						?>
				<div class="Metronic-alerts alert alert-danger fade in">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
							<i class="fa-lg fa fa-warning"></i>  <?php echo validation_errors();?>
				</div>
						<?php 
						}
						if( $this->upload->display_errors()!="")
						{
							?>
				<div class="Metronic-alerts alert alert-danger fade in">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
							<i class="fa-lg fa fa-warning"></i>  <?php echo  $this->upload->display_errors();?>
				</div>
						<?php 
						}
						?>
						
				<form id="add_student_form" class="horizontal-form" autocomplete="off" action="<?php echo base_url('frontend/save_document_listing');?>"  method="post" enctype="multipart/form-data" autocomplete="Off">
				<input id="country" name="country" type="hidden"class="form-control"value="110">
					<div class="form-body">
						<div class="row">
							<div class="col-md-2">
								<div class="form-group">
									<label class="control-label">Owner First Name</label><span style="color:red">*</span>
									<input id="fname" name="fname" class="form-control" type="text"  value="<?= set_value('fname'); ?>" placeholder="Owner First Name" >
								</div>
							</div>
							<div class="col-md-2">
								<div class="form-group">
									<label class="control-label">Owner Middle Name</label><span style="color:red">*</span>
									<input id="mname" name="mname" class="form-control" type="text"  value="<?= set_value('mname'); ?>" placeholder="Owner Middle Name" >
								</div>
							</div>
							<div class="col-md-2">
								<div class="form-group">
									<label class="control-label">Owner Last Name</label><span style="color:red">*</span>
									<input id="lname" name="lname" class="form-control" type="text"  value="<?= set_value('lname'); ?>" placeholder="Owner Last Name" >
								</div>
							</div>
							<div class="col-md-2">
								<div class="form-group">
									<label class="control-label">Property Area</label><span style="color:red">*</span>
									<input id="area" name="area" class="form-control" type="text"  value="<?= set_value('area'); ?>" placeholder="Property Area" >
								</div>
							</div>
							<div class="col-md-2">
								<div class="form-group">
								<label class="control-label">Unit </label>
									<select name="unit"  id="unit"  class="form-control selectsearch" require>
									<option selected="true" disabled="disabled" value="">Unit</option>
									<?php 
									for($o=0;$o<count($unit);$o++)
									{ 
									$unit_name= $unit[$o]->units_name;
									?>
									<option value="<?= $unit[$o]->id; ?>" <?php if(set_value('unit_name')==$unit_name) echo 'selected'; ?>>
									<?= $unit_name  ?></option>		
									<?php } ?>
									</select>
								</div>
							</div>			
							<div class="col-md-2">
								<div class="form-group">
									<label class="control-label">Property Age</label><span style="color:red">*</span>
									<input id="age" name="age" class="form-control" type="number"  value="<?= set_value('age'); ?>" placeholder="Property Age" step="any">
								</div>
							</div>
						</div>
					<div class="row">
						<div class="col-md-2">
								<div class="form-group">
									<label class="control-label">Property Price</label><span style="color:red">*</span>
									<input id="amount_val" name="amount_val" class="form-control" type="number"  value="<?= set_value('amount_val'); ?>" placeholder="Property Price" step="any">
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label class="control-label">Property Current Market Value</label><span style="color:red">*</span>
									<input id="amount" name="amount" class="form-control" type="number"  value="<?= set_value('amount'); ?>" placeholder="Property Current Market Value" step="any">
								</div>
							</div>			
							<div class="col-md-3">
								<div class="form-group">
								<label class="control-label">Bank </label>
									<select name="bank_name"  id="bank_name"  class="form-control selectsearch" onchange="selectBank(this.value)">
									<option selected="true" disabled="disabled" value="">Bank</option>
									<?php 
									for($t=0;$t<count($bank);$t++)
									{ 
									$bank_name= $bank[$t]->bank_name;
									?>
									<option value="<?= $bank[$t]->id; ?>" <?php if(set_value('bank_name')==$bank_name) echo 'selected'; ?>>
									<?= $bank_name  ?></option>		
									<?php } ?>
									</select>
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
								<label>Upload Property Index II*: </label><br>
									<div class="d-flex">
										<label for="index_val" class="custom-file-upload">
											<i class="fa fa-upload"></i> Choose file
										</label>
										<span id="indexName" class="pl-2" style="overflow:hidden;">.pdf</span>
										<input type="file" id="index_val" name="index_val" accept=".pdf" style="display:none;" required></input>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-3">
									<div class="form-group">
										<label class="control-label">State</label><span style="color:red">*</span>
										<select id="state" name="state" class="form-control" required>
											<option selected="true" disabled="disabled" value="">State</option>
													<?php for($i=0;$i<count($state);$i++){ ?>
											<option value="<?= $state[$i]->id ?>" ><?php echo $state[$i]->state_name; ?></option>
											<?php } ?>
		
										</select>
									</div>
								</div>
							<div class="col-md-3">
								<div class="form-group">
									<label class="control-label">City</label><span style="color:red">*</span>
									<select id="city" name="city" class="form-control" required>
										<option selected="true" disabled="disabled" value="">City</option>
											<?php for($i=0;$i<count($city);$i++){ ?>
										<option value="<?= $city[$i]->id ?>" ><?php echo $city[$i]->city_name; ?></option>
										<?php } ?>
	
									</select>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label class="control-label">Locality</label><span style="color:red">*</span>
									<select id="local" name="local" class="form-control" required>
									<option selected="true" disabled="disabled" value="">Locality</option>
										<?php for($i=0;$i<count($pincode);$i++){ ?>
									<option value="<?= $pincode[$i]->id ?>" ><?php echo $pincode[$i]->area_name; ?></option>
									<?php } ?>
									</select>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label class="control-label">Property Type</label><span style="color:red">*</span>
									<select id="prop" name="prop" class="form-control" required>
									<option selected="true" disabled="disabled" value="">Property Type</option>
										<?php for($i=0;$i<count($property_types);$i++){ ?>
									<option value="<?= $property_types[$i]->id ?>" ><?php echo $property_types[$i]->property_name; ?></option>
									<?php } ?>

									</select>
								</div>
							</div>
						</div>				
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
								<label class="control-label">Property Address</label><span style="color:red">*</span>
								<textarea id="address" name="address" placeholder="Property Address" require class="form-control" rows="3"><?= set_value('address'); ?></textarea>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
								<label class="control-label">Property Description</label><span style="color:gray">(optional)</span>
								<textarea id="notes" name="notes" placeholder="Property Description" class="form-control" rows="3"><?= set_value('notes'); ?></textarea>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row"></div>
				<div class="row">
					<div class="col-md-1">
						<button type="submit" class="btn blue"><i class="fa fa-check"></i> Submit</button>
					</div>	
					<div class="col-md-1">
						<a type="button" class="btn blue" href="<?php echo base_url('admin/document_listing');?>">Cancel</a>
					</div>
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
/*$data ['script'] = "";
$data ['initialize'] = "pageFunctions.init();";*/
$this->load->view ( 'frontend/_includes/footer');
?>