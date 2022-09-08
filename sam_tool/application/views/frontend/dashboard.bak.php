<?php $this->load->view('frontend/_includes/header');
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
	.select2-container.select2-container--bootstrap.select2-container--open {
		top:195.915px!important;
	}
	.select2-container--bootstrap .select2-dropdown {
		border: solid 1px #93a1bb!important;
	}
	</style>
	<script type="text/javascript">
		$(document).ready(function(){
		$(window).scroll(function(){
			var position = $(window).scrollTop();
			var bottom = $(document).height() - $(window).height();
			if( position == bottom ){
				var row = Number($('#row').val());
				var allcount = Number($('#all_product_count').val());
				var rowperpage = 12;
				row = row + rowperpage;
				if(row <= allcount){
					$('.ajax-load').show();
					var url = "<?php echo base_url(); ?>frontend/pagination";
					$('#row').val(row);
					$.ajax({
						url: url,
						type: 'post',
						data: {row:row},
						success: function(response){
							$('.ajax-load').hide();
							$(".product:last").after(response).show().fadeIn("slow");
						}
					});
				}
				else
				{
					$('#remove').remove();
					$(".product:last").after('<tr id="remove"><td colspan="4" style="text-align: center;"><b>No Data Available</b></td></tr>');
				}
			}
		});
	});
	</script>
	<div class="page-content-wrapper">
	<!-- BEGIN CONTENT BODY -->
		<div class="page-content">
		<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">Dashboard</h3>
			<!-- END PAGE HEADER-->
			<!-- BEGIN DASHBOARD STATS 1-->
			<br>
				<div class="row" >
					<div class="col-md-12">
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
						<div class="portlet light ">
							<div class="content-wrapper">
							<!-- Content Header (Page header) -->
							<!-- Main content -->
							<section id="section1" class="content">
								<div class="row">
									<div class="col-md-12 ">
										<div class="box box-warning">
											<div class="box-body">
												<div id="display_shop">
													<form id="add_property_form" class="horizontal-form" autocomplete="off" action="javascript:void(0)" method="post" >	
													<input type="hidden" name="batch_size" id="batch_size" value="12">
													<input type="hidden" name="offset" id="offset" value="1">
															<div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">	
																<?php  $state_name=''; ?>
																<label class="control-label">State </label>
																<div class="form-group">
																	<select name="state_name"  id="state_name"  class="form-control selectsearch">
																	<option value="" <?php if($state_name=='') echo 'selected'; ?>> </option>
																	<?php 
																	foreach($state as $getData)
																	{?>
																	<option value="<?php echo $getData->state_id; ?>" <?php $getData->state_name ?>>
																		<?= $getData->state_name   ?></option>		
																	<?php } ?>
																	</select>
																</div>
															</div>
									
															<div class="col-lg-2 col-md-2 col-sm-6 col-xs-12" >	
																<?php  $city_name=''; ?>
																<label class="control-label">City </label>
																<div class="form-group">
																	<select name="city_name"  id="city_name"  class="form-control selectsearch">
																	<option value="" <?php if($city_name=='') echo 'selected'; ?>> </option>
																	<?php 
																	foreach($city as $getDataCity)
																	{?>
																	<option value="<?php echo $getDataCity->city_id; ?>" <?php $getDataCity->city_name ?>>
																	<?= $getDataCity->city_name ?></option>		
																	<?php } ?>
																	</select>
																</div>
															</div>
															<div class="col-lg-2 col-md-2 col-sm-6 col-xs-12" >	
																<?php  $locality=''; ?>
																<label class="control-label">Locality </label>
																<div class="form-group">
																	<select name="area_name"  id="area_name"  class="form-control selectsearch">
																	<option value="" <?php if($locality=='') echo 'selected'; ?>> </option>
																	<?php
																	foreach($address as $getarry)
																	{ ?>
																	<option value="<?php echo $getarry->address_id; ?>" 
																	<?php echo $getarry->locality.' '.$getarry->village.' '.$getarry->pincode ?>>
																	<?php echo $getarry->locality.' '.$getarry->village.' '.$getarry->pincode ?></option>		
																	<?php } ?>
																	</select>
																</div>
															</div>
															<div class="col-lg-2 col-md-2 col-sm-6 col-xs-12" >	
																<?php  $type_name=''; ?>
																<label class="control-label">Asset Category</label>
																<div class="form-group">
																	<select name="property_name"  id="property_name"  class="form-control selectsearch">
																	<option value="" <?php if($type_name=='') echo 'selected'; ?>> </option>
																	<?php 
																	foreach($property_types as $getassetData)
																	{ 
																	?>
																	<option value="<?php echo $getassetData->type_id; ?>" <?php echo $getassetData->type_name; ?>>
																	<?php echo $getassetData->type_name;  ?></option>		
																	<?php } ?>
																	</select>
																</div>
															</div>
															<div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">	
																<?php  $bank_name=''; ?>
																<label class="control-label">Bank </label>
																<div class="form-group">
																	<select name="bank_name"  id="bank_name"  class="form-control selectsearch">
																	<option value="" <?php if($bank_name=='') echo 'selected'; ?>> </option>
																	<?php 
																	foreach($bank as $getpush)
																	{  
																	?>
																	<option value="<?php echo $getpush->bank_id; ?>" <?php echo $getpush->bank_name;?>>
																	<?php echo $getpush->bank_name; ?></option>		
																	<?php } ?>
																	</select>
																</div>
															</div>					
														<div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">	
															<label></label>
															<label></label>
															<div class="form-actions">
																<button type="button" class="btn blue" id="datasendbtn" onclick="return update_product()">
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
					<div class="propertyresilts" id="propertyresilts">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						
						<?php  if($results['Details'] > 0){ foreach($results['Details'] as $result){ ?>
							<a href="<?= base_url('frontend/property_details')?>" style="margin-bottom:1px;" id="dixc">
								<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
									<div class="dashboard-stat" style="border:solid 1px;" type_id="<?php echo $result['type_id']; ?>" propert_id="<?php echo $result['propert_id']; ?>">
										<div class="visual">
										</div>
										<div class="details">
											<div class="number">
												 <?php  $property = $result['type_id'];
												  if($property == 1) 
												  { echo $result['property_type']; } 
											  	  else if($property == 2) 
												  {	echo $result['property_type']; }
												  elseif($property == 3) 
												  {	echo $result['property_type']; }
												  elseif($property == 4) 
												  {	echo $result['property_type']; }
												  ?> in 
												<?php echo $result['city_name']; ?> 
												<?php echo $result['locality']; ?> area
												<br>Ranging from 
												<?php 	
												  $num = $result['market_price'];
												  $ext="";//thousand,lac, crore
												  $number_of_digits = strlen($num); //this is call :)
													  if($number_of_digits>3)
												  {
													  if($number_of_digits%2!=0)
														  $divider=divider($number_of_digits-1);
													  else
														  $divider=divider($number_of_digits);
												  }
												  else
													  $divider=1;
												  
												  $fraction=$num/$divider;
												 // $fraction=number_format($fraction,2);
												 //echo$fraction;
												  if($number_of_digits==6 ||$number_of_digits==7)
												 
												  if($fraction >= 10&&$fraction <= 30) 
												  	{ echo '10 Lakh. to 30 Lakh.'; } 
												  else if($fraction >= 30&&$fraction <= 50) 
													  {	echo '30 Lakh. to 50 Lakh.'; }
												  elseif($fraction >= 50&&$fraction <= 70) 
													  {	echo '50 Lakh. to 70 Lakh.'; }
												  else if($fraction >= 70&&$fraction <= 90) 
													  {	echo '70 Lakh. to 90 Lakh.'; }
										  
												  if($number_of_digits==8 ||$number_of_digits==9)
													
													 if($fraction >= 1&&$fraction <= 11) 
														{	echo '90 Lakh. to 1.1 Cr.'; }
													else if($fraction >= 11&&$fraction <= 15) 
														{	echo '1.1 Cr. to 1.5 Cr.'; }
													else if($fraction >= 15&&$fraction <= 2) 
														{	echo '1.5 Cr. to 2 Cr.'; }
													else if($fraction >= 2&&$fraction <= 25) 
														{	echo '2 Cr. to 2.5 Cr.'; } 
													else if($fraction >= 25&&$fraction <= 3) 
														{	echo '2.5 Cr. to 3 Cr.'; }
													else if($fraction >= 3&&$fraction <= 35) 
														{	echo '3 Cr. to 3.5 Cr.'; }
													else if($fraction >= 35&&$fraction <= 4) 
														{	echo '3.5 Cr. to 4 Cr.'; }
													else if($fraction >= 4&&$fraction <= 45) 
														{	echo '4 Cr. to 4.5 Cr.'; }
													else if($fraction >= 45&&$fraction <= 5) 
														{	echo '4.5 Cr. to 5 Cr.'; }
													else if($fraction >= 5) 
														{	echo '5 Cr. to More than 5 Cr.'; }?>
											</div>
										</div>
									</div>
									<a href="<?php // base_url('frontend/property_details')?>" class="btn blue">
										view
									</a>
								</div>
								</a>
								<!-- <div id="load_data"></div> -->
								<div id="load_data_message"></div>
							<?php  }}?>
           					</div>
						</div>
					</div>
					<input type="hidden" id="row" value="0">
					<input type="hidden" id="all_product_count" value="<?php $results['count'];?>">
	
						<br>
						<!--table for pending orders-->
					<br>
					<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3867559.4583890736!2d74.53067921661365!3d18.80200636359518!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcfc41e9c9cd6f9%3A0x1b2f22924be04fb6!2sMaharashtra!5e0!3m2!1sen!2sin!4v1626781481576!5m2!1sen!2sin" width="1280" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe> -->
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
	
	function update_product()
		{ 	 	 
			var state_name=$("#state_name").val().trim();
			var city_name=$("#city_name").val().trim();
			var area_name=$("#area_name").val().trim();
			var property_name=$("#property_name").val().trim();
			var bank_name=$("#bank_name").val().trim();
			var batch_size=$("#batch_size").val().trim();
			var offset=$("#offset").val().trim();
			var url="<?php echo base_url('sam/search');?>";
			$.post(url,{"offset":offset,"batch_size":batch_size,"bank_name":bank_name,"property_name":property_name,"area_name":area_name,"city_name":city_name,"state_name":state_name
			},function(data){
				if(data)
				{
					$('#datasendbtn').prop('disabled', false);
					$("#propertyresilts")[0].fadeIn(); // reset the form 
					//$("#list")[0].reset(); // reset the form 
					//$('#add_property_form').modal('hide'); // close the modal
					alert("data send successfully.");
					
				}
				else
				{
					alert("data didn't send.");
				}
			});
			$(document).ready(function () {setTimeout(function () {location.reload(true);}, 500);});
		}
		
	</script>
	<!-- <script>
  $(document).ready(function(){

    var batch_size = <?php echo $results['count'];?>;
    var offset = 0;
    var action = 'inactive';

    function lazzy_loader(batch_size)
    {
      var output = '';
    //   for(var count=0; count<batch_size; count++)
    //   {
        output += '<?php  if($results['Details'] > 0){ foreach($results['Details'] as $result){ ?><a href="<?= base_url('frontend/property_details')?>" style="margin-bottom:1px;" id="dixc"><div class="col-lg-4 col-md-4 col-sm-6 col-xs-12"><div class="dashboard-stat" style="border:solid 1px;"><div class="visual"></div><div class="details"><div class="number"><?php echo $result['property_type']; ?> in <?php echo $result['city_name']; ?> <?php echo $result['locality']; ?> area<br>Ranging from <?php $num = $result['market_price'];$ext="";$number_of_digits = strlen($num); if($number_of_digits>3){if($number_of_digits%2!=0)$divider=divider($number_of_digits-1);else$divider=divider($number_of_digits);}else$divider=1;$fraction=$num/$divider;if($number_of_digits==6 ||$number_of_digits==7)if($fraction >= 10&&$fraction <= 30) { echo '10 Lakh. to 30 Lakh.'; } else if($fraction >= 30&&$fraction <= 50) {	echo '30 Lakh. to 50 Lakh.'; }elseif($fraction >= 50&&$fraction <= 70) {	echo '50 Lakh. to 70 Lakh.'; }else if($fraction >= 70&&$fraction <= 90) {	echo '70 Lakh. to 90 Lakh.'; }if($number_of_digits==8 ||$number_of_digits==9)if($fraction >= 1&&$fraction <= 11) {	echo '90 Lakh. to 1.1 Cr.'; }else if($fraction >= 11&&$fraction <= 15) {	echo '1.1 Cr. to 1.5 Cr.'; }else if($fraction >= 15&&$fraction <= 2) {	echo '1.5 Cr. to 2 Cr.'; }else if($fraction >= 2&&$fraction <= 25) {	echo '2 Cr. to 2.5 Cr.'; } else if($fraction >= 25&&$fraction <= 3) {	echo '2.5 Cr. to 3 Cr.'; }else if($fraction >= 3&&$fraction <= 35) {	echo '3 Cr. to 3.5 Cr.'; }else if($fraction >= 35&&$fraction <= 4) {	echo '3.5 Cr. to 4 Cr.'; }else if($fraction >= 4&&$fraction <= 45) {	echo '4 Cr. to 4.5 Cr.'; }else if($fraction >= 45&&$fraction <= 5) {	echo '4.5 Cr. to 5 Cr.'; }else if($fraction >= 5) {	echo '5 Cr. to More than 5 Cr.'; }?></div></div></div><a href="<?= base_url('frontend/property_details')?>" class="btn blue">view</a></div></a><?php }}?>';
    //  }
      $('#load_data_message').html(output);
    }

    lazzy_loader(batch_size);

    function load_data(batch_size, offset)
    {
      $.ajax({
        url:"<?php base_url('sam/search_pagination')?>",
        method:"POST",
        data:{batch_size:batch_size, offset:offset},
        cache: false,
        success:function(data)
        {
          if(data == '')
          {
            $('#load_data_message').html('<h3>No More Result Found</h3>');
            action = 'active';
          }
          else
          {
             $('#load_data').append(data);
            $('#load_data_message').html("");
            action = 'inactive';
          }
        }
      })
    }

    if(action == 'inactive')
    {
      action = 'active';
      load_data(batch_size, offset);
    }

    $(window).scroll(function(){
      if($(window).scrollTop() + $(window).height() > $("#load_data").height() && action == 'inactive')
      {
        lazzy_loader(batch_size);
        action = 'active';
        offset = offset + batch_size;
        // setTimeout(function(){
        //   load_data(batch_size, offset);
        // }, 6000);
      }
    });

  });
</script> -->
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