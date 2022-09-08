<?php $this->load->view('frontend/_includes/header_home');
$this->load->helper('custom');
?>
<style>

.dashboard-stat .details .number 
{
padding-top: 25px;
text-align: right;
font-size: 20px;
line-height: 36px;
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

</style>

<?php 
$this->db->select('*'); 
$query = $this->db->get('about_shop_own'); 
$this->db->where('status', 1);
$shop_data = $query->result();		
?>
<div class="page-content-wrapper">
<!-- BEGIN CONTENT BODY -->
<div class="page-content">
<!-- BEGIN PAGE HEADER-->
<h3 class="page-title">
	 <?php //print_r($shop_data);
		echo $shop_data[0]->shop_name;?>
</h3>

<!-- END PAGE HEADER-->
<!-- BEGIN DASHBOARD STATS 1-->
<?php
	if($this->session->flashdata("success_message")!="")
	{
?>
	<div class="Metronic-alerts alert alert-info fade in">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
		<i class="fa-lg fa fa-check"></i>  <?php echo $this->session->flashdata("success_message");?>
	</div>
<?php 
	}
?>
<br>
<div class="row" >
<div class="col-md-12">
<!-- BEGIN EXAMPLE TABLE PORTLET-->
<div class="portlet light ">
	<div class="portlet-title">
		<div class="caption font-dark">
			<i class="fa fa-home"></i> 
			<span class="caption-subject bold uppercase">Search Locality</span>
		</div>
	</div>		
	
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->

		<!-- Main content -->
		<section id="section1" class="content">
			<div class="row">
				<div class="col-md-12 ">
					<div class="box box-warning">
						<div class="box-body">
							<div id="display_shop">
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
				
										<div class="col-lg-2 col-md-2 col-sm-6 col-xs-12" id="bindCity">	
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
										<div class="col-lg-2 col-md-2 col-sm-6 col-xs-12" id="bindPin">	
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
										<div class="col-lg-2 col-md-2 col-sm-6 col-xs-12" id="bindAsset">	
											<?php  $property_name=''; ?>
											<label class="control-label">Asset Category</label>
											<div class="form-group">
												<select name="property_name"  id="property_name"  class="form-control selectsearch" onchange="selectAsset(this.value)">
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
										<div class="col-lg-2 col-md-2 col-sm-6 col-xs-12" id="bindBank">	
											<?php  $bank_name=''; ?>
											<label class="control-label">Bank </label>
											<div class="form-group">
												<select name="bank_name"  id="bank_name"  class="form-control selectsearch" onchange="selectBank(this.value)">
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
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- BEGIN DASHBOARD STATS 1-->
<?php
			if($this->session->flashdata("success_message")!="")
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
				<i class="fa-lg fa fa-warning"></i>  
				<?php echo $this->session->flashdata("error_message");?>
            </div>
		<?php 
			}
		?>
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<a href="<?= base_url('frontend/property_details')?>" style="margin-bottom:1px;">
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
					<div class="dashboard-stat purple-seance">
						<div class="visual">
							<i class="fa fa-list"></i>
						</div>
						<div class="details">
							<div class="number">
								<span data-counter="counterup" data-value="<?= $total_residential->total; ?>">0</span>
								Residential Properties in Pune area <br>Ranging from 1Cr. to 10Cr.
							</div>
							<!-- <div class="desc">Residential Properties in Pune area <br>Ranging from 1Cr. to 10Cr.</div> -->
						</div>
					</div>
					<a href="<?= base_url('frontend/property_details')?>" class="btn blue">
						view
					</a>
				</div>
				</a>

				<a href="<?= base_url('frontend/property_details')?>" >
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
					<div class="dashboard-stat red">
						<div class="visual">
							<i class="fa fa-bar-chart-o"></i>
						</div>
						<div class="details">
							<div class="number">
								<span data-counter="counterup" data-value="<?= $total_Commercial->total; ?>">0</span>
								Commercial Residential Properties in <br>Pune area Ranging from 1Cr. to 50Cr.
							</div>
							<!-- <div class="desc">Commercial Residential Properties in Pune area <br>Ranging from 1Cr. to 50Cr.</div> -->
						</div>
					</div>
					<a href="<?= base_url('frontend/property_details')?>" class="btn blue">
						view
					</a>
				</div>
				</a>

				<a href="<?= base_url('frontend/property_details')?>" >
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
					<div class="dashboard-stat yellow-gold">
						<div class="visual">
							<i class="fa fa-comments"></i>
						</div>
						<div class="details">
							<div class="number">
								<span data-counter="counterup" data-value="<?= $total_plot->total; ?>">0</span>
								Plots Residential Properties in Pune area <br>Ranging from 50 Lakh. to 100Cr.
							</div>
							<!-- <div class="desc">Plots Residential Properties in Pune area <br>Ranging from 50 Lakh. to 100Cr.</div> -->
						</div>
					</div>
					<a href="<?= base_url('frontend/property_details')?>" class="btn blue">
						view
					</a>
				</div>
				</a>
				<a href="<?= base_url('frontend/property_details')?>" >
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
					<div class="dashboard-stat red">
						<div class="visual">
							<i class="fa fa-comments"></i>
						</div>
						<div class="details">
							<div class="number">
								<span data-counter="counterup" data-value="<?= $total_residential->total; ?>">0</span>
								Residential Properties in Pune area <br>Ranging from 1Cr. to 10Cr.
							</div>
							<!-- <div class="desc">Residential Properties in Pune area <br>Ranging from 1Cr. to 10Cr.</div> -->
							<br>
						</div>
					</div>
					<a href="<?= base_url('frontend/property_details')?>" class="btn blue">
						view
					</a>
				</div>
				</a>
				<a href="<?= base_url('frontend/property_details')?>" >
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
					<div class="dashboard-stat purple">
						<div class="visual">
							<i class="fa fa-list"></i>
						</div>
						<div class="details">
							<div class="number">
								<span data-counter="counterup" data-value="<?= $total_Commercial->total; ?>">0</span>
								Commercial Residential Properties in <br>Pune area Ranging from 1Cr. to 50Cr.
							</div>
							<!-- <div class="desc">Commercial Residential Properties in Pune area <br>Ranging from 1Cr. to 50Cr.</div> -->
							<br>
						</div>
					</div>
					<a href="<?= base_url('frontend/property_details')?>" class="btn blue">
						view
					</a>
				</div>
				</a>
				<a href="<?= base_url('frontend/property_details')?>" >
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
					<div class="dashboard-stat blue">
						<div class="visual">
							<i class="fa fa-globe"></i>
						</div>
						<div class="details">
						<div class="number">
							<span data-counter="counterup" data-value="<?= $total_plot->total; ?>"></span>
							Plots Residential Properties in Pune area <br>Ranging from 50 Lakh. to 100Cr.
						</div>
						<!-- <div class="desc">Plots Residential Properties in Pune area <br>Ranging from 50 Lakh. to 100Cr.</div> -->
						<br>
						</div>
					</div>
					<a href="<?= base_url('frontend/property_details')?>" class="btn blue">
						view
					</a>
				</div>
				</a>
			</div>
			</div>
		<br>
		<!--table for pending orders-->
	<br>
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3867559.4583890736!2d74.53067921661365!3d18.80200636359518!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcfc41e9c9cd6f9%3A0x1b2f22924be04fb6!2sMaharashtra!5e0!3m2!1sen!2sin!4v1626781481576!5m2!1sen!2sin" width="1280" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
	</div>
</div>
<!-- END CONTENT BODY -->
</div>
</div>
</div>
</div>


<?php
$data ['script'] = "dashboard.js";
$data ['initialize'] = "pageFunctions.init();";
$this->load->view ( 'frontend/_includes/footer');
?> 
<link href="<?php echo assets_path; ?>css/bootstrapValidator.min.css"rel="stylesheet" type="text/css" />   
<script src="<?php echo assets_path;?>js/bootstrapValidator.min.js"></script>
<script>
$(document).ready(function() {
$('.selectsearch').select2();
});

// function selectState(id){  

// var url="<?php echo base_url('frontend/bindCity'); ?>";
// $.post(url,{"id":id},function(res){
// 	 $("#bindCity").html(res);
// });  
// }

// function selectCity(id){  

// var url="<?php echo base_url('frontend/bindPin'); ?>";
// $.post(url,{"id":id},function(res){
// 	 $("#bindPin").html(res);
// });  
// }

// function selectArea(id){  

// var url="<?php echo base_url('frontend/bindAsset'); ?>";
// $.post(url,{"id":id},function(res){
// 	 $("#bindAsset").html(res);
// });  
// }

// function selectAsset(id){  

// var url="<?php echo base_url('frontend/bindBank'); ?>";
// $.post(url,{"id":id},function(res){
// 	 $("#bindBank").html(res);
// });  
// }

// function selectBank(id){  

// var url="<?php echo base_url('frontend/bindState'); ?>";
// $.post(url,{"id":id},function(res){
// 	 $("#bindState").html(res);
// });  
// }

$(".onlyfloat").on("keypress keyup blur",function (event) {
		//this.value = this.value.replace(/[^0-9\.]/g,'');
	$(this).val($(this).val().replace(/[^0-9\.]/g,''));
		if ((event.which != 46 || $(this).val().indexOf('.') != -1) && (event.which < 48 || event.which > 57)) {
			event.preventDefault();
		}
	});
</script>