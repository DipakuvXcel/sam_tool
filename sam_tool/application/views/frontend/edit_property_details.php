<?php $this->load->view('frontend/_includes/header');?>
<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
	<!-- BEGIN CONTENT BODY -->
	<div class="page-content">
		<!-- BEGIN PAGE HEADER-->

		<h3 class="page-title">
			Edit Payment
		</h3>
		<div class="page-bar">
			<ul class="page-breadcrumb">
				<li><i class="icon-home"></i> <a
					href="<?php echo base_url('frontend'); ?>">Home</a> <i
					class="fa fa-angle-right"></i></li>
				<li><a href="<?php echo base_url('frontend/payment'); ?>">Payment</a>
					<i class="fa fa-angle-right"></i></li>
				<li><span> Edit Payment</span>	
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
								class="caption-subject bold uppercase"> Edit Payment</span>
						</div>
						<div class="actions">
							
								<a href="<?php echo base_url('frontend/payment');?>"
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
			              
			             
		              
						<form id="add_student_form" class="horizontal-form" action="<?php echo base_url('frontend/update_edit_payment');?>"
							method="post" enctype="multipart/form-data">
							<input type="hidden" name="id" value="<?= $payment[0]->id; ?>">
							<div class="form-body">
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label class="control-label">Sr.No.</label><span style="color:red">*</span>
											<input id="srno" name="srno" class="form-control" type="text" value="<?= set_value('srno', $payment[0]->sr_no); ?>">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label class="control-label">Year</label><span style="color:red">*</span>
											<input id="year" name="year" class="form-control" type="text" value="<?= set_value('year', $payment[0]->year); ?>">
										</div>
									</div><div class="col-md-4">
										<div class="form-group">
											<label class="control-label">Employee Code</label><span style="color:red">*</span>
											<input id="emp_code" name="emp_code" class="form-control" type="text" value="<?= set_value('emp_code', $payment[0]->employee_code); ?>">
										</div>
									</div>
								</div>
								<div class="row">
								<div class="col-md-4">
										<div class="form-group">
											<!--<label class="control-label">Emplyee Name</label><span style="color:red">*</span>
											<input id="emp_name" name="emp_name" class="form-control" type="text" value="<?= set_value('emp_name', $payment[0]->employee_id); ?>">-->
											<div class="form-group">
											<label class="control-label">Employee Name</label><span style="color:red">*</span>
											
											<select id="emp_name" name="emp_name" class="form-control">
											
												<?php for($i=0;$i<count($employee);$i++){ ?>
													<option value="<?=$payment[0]->employee_id==$employee[$i]->id ?>"><?php echo $employee[$i]->name; ?></option>
												<?php } ?>
											</select>
											
										</div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label class="control-label">Pan Number</label><span style="color:red">*</span>
											<input id="pan_no" name="pan_no" class="form-control" type="text" value="<?= set_value('pan_no', $payment[0]->pan_number); ?>">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group"  >
											<label class="control-label">Payment Type</label><span style="color:red">*</span>
											<select id="payment_type" name="payment_type" class="form-control" >
											<option value="<?= set_value('payment_type', $payment[0]->payment_type); ?>" ><?= set_value('payment_type', $payment[0]->payment_type); ?></option>
											<option value="BANK TRANSFER" >BANK TRANSFER</option>
											<option value="CASH" >CASH</option>
											<option value="ONLINE PAYMENT" >ONLINE PAYMENT</option>
											</select>
										</div>
									</div>
								</div>
								<div class="row">
								<div class="col-md-4">
										<div class="form-group">
											<label class="control-label">Amount</label><span style="color:red">*</span>
											<input id="amount" name="amount" class="form-control" type="text" value="<?= set_value('amount', $payment[0]->amount); ?>">
										</div>
									</div>	
									<div class="col-md-6">
										<div class="form-group">
											<label class="control-label">Amount In Word</label><span style="color:red">*</span>
											<textarea id="story" name="story" class="form-control" rows="2"><?= set_value('story', $payment[0]->amt_words); ?></textarea>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label class="control-label">Description</label><span style="color:red">*</span>
											<textarea id="notes" name="notes" class="form-control" rows="5"><?= set_value('notes', $payment[0]->note); ?></textarea>
										</div>
									</div>
								</div>
								<!--<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label class="control-label">Weather(City Name)</label>
											<input id="weather" name="weather" value="<?= set_value('weather', $story->weather); ?>" class="form-control">
										</div>
									</div>
								</div>-->
							</div>
							<div class="form-actions right">
								<button type="submit" class="btn blue">
									<i class="fa fa-check"></i> Update
								</button>
								<a type="button" class="btn default" href="<?php echo base_url('frontend/payment');?>">Cancel</a>
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
			$('#old').hide();
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
		$('#old').show();
	}
 
</script>