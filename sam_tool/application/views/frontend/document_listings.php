<?php 
 	error_reporting(0);
	$this->load->view('frontend/_includes/header');
$this->load->helper('custom');
?>
<style>
.dashboard-stat .details {
	position: absolute;
    left: 170px;
    padding-left: 5px;
}
.dashboard-stat .visual {
    width: 150px;
    height: 150px;
    display: block;
    float: left;
    padding-top: 10px;
    padding-left: 15px;
    margin-bottom: 15px;
    font-size: 35px;
    line-height: 35px;
}
.dashboard-stat .details .number 
{
	padding-top: 10px;
	text-align: left;
	font-size: 18px;
	line-height: 30px;
	letter-spacing: -1px;
	margin-bottom: 0;
	font-weight: 300;
}

.checkbox input[type="checkbox"], .checkbox-inline input[type="checkbox"], .radio input[type="radio"], .radio-inline input[type="radio"] 
{
	position: absolute;
	margin-left: -10px;
	margin-top: 4px;
}	
.form-actions{
padding:7px;
}
iframe {
    border: 1px solid black;
    width: 100%;
}

.form-actions{
	padding:7px;
}
.mar_left{
	margin-left: 16px;
}
</style>
<div class="page-content-wrapper">
	<!-- BEGIN CONTENT BODY -->
	<div class="page-content">
	<!-- BEGIN PAGE HEADER-->
	<h3 class="page-title">Search Property</h3>
		
	<!-- END PAGE HEADER-->
	
	
	<!-- Tab Start --> 
		<div class="row">
        	<div class="tab-content" id="myTabContent">
				<div class="tab-pane fade p-3 active in" id="one" role="tabpanel" aria-labelledby="one-tab">
					<div class="col-md-12">
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
						<div class="portlet light ">
							<div class="portlet-title">
								<form id="add_student_form" class="horizontal-form" autocomplete="off" action="<?php echo base_url('frontend/search_product_report');?>">
								<div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">	
											<?php  $state_name=''; ?>
											<label class="control-label">State </label>
											<div class="form-group">
												<select name="state_name"  id="state_name"  class="form-control selectsearch" onchange="selectState(this.value)">
												<option value="0" <?php if($state_name=='') echo 'selected'; ?>> </option>
												<?php 
												for($p=0;$p<count($state);$p++)
												{ 
												$state_name= $state[$p]->state_name;
												?>
												<option value="<?= $state[$p]->id; ?>" <?php if(set_value('state_name')==$state_name) echo 'selected'; ?>>
													<?= $state_name  ?></option>		
												<?php } ?>
												</select>
											</div>
										</div>
				
										<div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">	
											<?php  $city_name=''; ?>
											<label class="control-label">Select City </label>
											<div class="form-group">
												<select name="city_name"  id="city_name"  class="form-control selectsearch" onchange="selectCity(this.value)">
												<option value="0" <?php if($city_name=='') echo 'selected'; ?>> </option>
												<?php 
												for($p=0;$p<count($city);$p++)
												{ 
												$city_name= $city[$p]->city_name;
												?>
												<option value="<?= $city[$p]->id; ?>" <?php if(set_value('city_name')==$city_name) echo 'selected'; ?>>
												<?= $city_name  ?></option>		
												<?php } ?>
												</select>
											</div>
										</div>
										<div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">	
											<?php  $area_name=''; ?>
											<label class="control-label">Select Locality </label>
											<div class="form-group">
												<select name="area_name"  id="area_name"  class="form-control selectsearch" onchange="selectArea(this.value)">
												<option value="0" <?php if($area_name=='') echo 'selected'; ?>> </option>
												<?php 
												for($p=0;$p<count($pincode);$p++)
												{ 
												$area_name= $pincode[$p]->area_name;
												?>
												<option value="<?= $pincode[$p]->id; ?>" <?php if(set_value('area_name')==$area_name) echo 'selected'; ?>>
												<?= $area_name  ?></option>		
												<?php } ?>
												</select>		
											</div>
										</div>
										<div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">	
											<?php  $property_name=''; ?>
											<label class="control-label">Asset Category</label>
											<div class="form-group">
												<select name="property_name"  id="property_name"  class="form-control selectsearch" onchange="selectCity(this.value)">
												<option value="0" <?php if($property_name=='') echo 'selected'; ?>> </option>
												<?php 
												for($p=0;$p<count($property_types);$p++)
												{ 
												$property_name= $property_types[$p]->property_name;
												?>
												<option value="<?= $property_types[$p]->id; ?>" <?php if(set_value('property_name')==$property_name) echo 'selected'; ?>>
												<?= $property_name  ?></option>		
												<?php } ?>
												</select>
											</div>
										</div>
										<div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">	
											<?php  $bank_name=''; ?>
											<label class="control-label">Bank </label>
											<div class="form-group">
												<select name="bank_name"  id="bank_name"  class="form-control selectsearch" onchange="selectCity(this.value)">
												<option value="0" <?php if($bank_name=='') echo 'selected'; ?>> </option>
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
									<div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">	
										<label></label>
										<label></label>
										<label></label>
										<div class="form-actions">
											<button type="submit" class="btn blue">
												<i class="fa fa-search"></i> Search
											</button>
										</div>
									</div>
									</form>
								</div>
							</div>
						<?php 
						$state=$order[0]->state_id;	
						$wherec = array('id' => $state);
						$order_state = $this->user_model->get_common('state', $wherec,'*',1);
						$sta=$order_state->state_name;
						?>
							<?php 
								if($this->session->flashdata("success_message")!="")
								{
							?>
		                <div class="Metronic-alerts alert alert-info fade in">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
							<i class="fa-lg fa fa-check"></i>  
							<?php echo $this->session->flashdata("success_message");?>
		                </div>
							<?php 
								}
							?>
		                	<?php 
							if(validation_errors()!="")
							{?>
		               		<div class="Metronic-alerts alert alert-danger fade in">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
							<i class="fa-lg fa fa-warning"></i>  
							<?php echo validation_errors();?>
		                </div>
						 	<?php 
							}
							?>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<?php 
	for($i=0;$i<count($order);$i++)
	{ 								
	$typepro=$order[$i]->property_id;	
	$whered = array('id' => $typepro);
	$property = $this->user_model->get_common('property_types', $whered,'*',1);
	$ci=$property->property_name;

	?>
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
					<div class="dashboard-stat ">
						<div class="visual">
						<img alt=""	src="<?php echo theme_assets_path; ?>layouts/layout2/img/avatar.png" style="width:100%;height:100%;"></i>
						</div>
						<div class="details">
							<div class="number">
								Owner:&nbsp; <br>
								Property Type:&nbsp;<?= $ci ?><br>
								Area:&nbsp; <br>
								Price:&nbsp; <?= $order[$i]->property_value;?><br>
								Market Price:&nbsp;<?= $order[$i]->property_current_mak_val;?><br>
							</div>
						</div>
					</div>
					<a href="<?= base_url('frontend/property_details')?>" class="btn blue mar_left">
						view
					</a>
				</div>
				<?php 
					} 
				?>
</div>
					  	
				</div>
			</div>
				<!-- END EXAMPLE TABLE PORTLET-->
		</div>
	</div>
			
</div>
</div>
	
</div>
	<!-- Tab End -->
	
</div>

</div>
<!-- END CONTENT -->

	
<?php
	$data ['script'] = "dashboard.js";
	$data ['initialize'] = "pageFunctions.init();";
	$this->load->view ( 'frontend/_includes/footer', $data );
?>

<script type="text/javascript">

	$(document).ready(function()
	{
		$('#managed_datatable_all').dataTable();
	});

	function excel_all_employee()
	{ 
		 window.location='excel_all_employee';
	}
	  
	function pdf_all_employee()
	{ 
		window.location='pdf_all_employee';
	}	  
	</script>
	<script>
	$(document).ready(function() {
    $('.selectsearch').select2();
});

 $(".onlyfloat").on("keypress keyup blur",function (event) {
            //this.value = this.value.replace(/[^0-9\.]/g,'');
     $(this).val($(this).val().replace(/[^0-9\.]/g,''));
            if ((event.which != 46 || $(this).val().indexOf('.') != -1) && (event.which < 48 || event.which > 57)) {
                event.preventDefault();
            }
        });
</script>
  
	
