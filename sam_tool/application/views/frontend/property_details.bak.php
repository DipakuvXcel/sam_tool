<?php $this->load->view('frontend/_includes/header');?>
<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
	<!-- BEGIN CONTENT BODY -->
	<div class="page-content">
		<!-- BEGIN PAGE HEADER-->

		<h3 class="page-title">Property Details</h3>
		<div class="page-bar">
			<ul class="page-breadcrumb">
				<li><i class="icon-home"></i> <a
					href="<?php echo base_url('frontend'); ?>">Home</a> <i
					class="fa fa-angle-right"></i></li>
				<li><span>Property Details</span></li>
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
								class="caption-subject bold uppercase">Property Details</span>
								<a href="<?php echo base_url('frontend/pdf_all_property_details');?>" class="btn btn-transparent green-meadow btn-outline btn-circle btn-sm active fa fa-download">&nbsp;PDF </a>
								
						</div>
						<div class="actions">
							<a href="<?php echo base_url('frontend/add_property_details');?>" class="btn btn-transparent green-meadow btn-outline btn-circle btn-sm active">
								Add Property Details </a>&nbsp;
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
						<table
							class="table table-striped table-bordered table-hover table-checkable order-column"
							id="managed_datatable" data-page-length='10'>
							
							<thead>
								<tr>
								<th>Sr.No.</th>
								<th>Description</th>
								<th>Current Market Value</th>
								<th>Index II</th>
								<th>Title Search</th>
								<th>Locality</th>
								</tr>
							</thead>
							<tbody>
								<?php 
									for($i=0;$i<count($order);$i++)
									{ 
									$state=$order[$i]->state_id;	
									$wherec = array('id' => $state);
	$order_state = $this->user_model->get_common('state', $wherec,'*',1);
	$sta=$order_state->state_name;
									$city=$order[$i]->city_id;	
									$wherec = array('id' => $city);
	$order_city = $this->user_model->get_common('city', $wherec,'*',1);
	$ci=$order_city->city_name;
								?>
								<tr class="odd gradeX">
									<td><?= $i+1; ?></td>
									<td><?= $order[$i]->property_description; ?></td>
									<td><?= $order[$i]->property_current_mak_val; ?></td>

									<td>
									<a href="<?php echo upload_path; ?>document_listing/document/<?= $order[$i]->property_document;?>"target="_blank" class="btn btn-transparent green-meadow btn-outline btn-circle btn-sm active fa fa-download">&nbsp;PDF </a>
										</td>

									<td><a href="<?php echo upload_path; ?>document_listing/title_search/<?=$order[$i]->property_title_search; ?>"target="_blank" class="btn btn-transparent green-meadow btn-outline btn-circle btn-sm active fa fa-download">&nbsp;PDF </a></td>
									<td><?= $sta.' '.$ci ?></td>
								
								</tr>
								<?php 
									} 
								?>
					        </tbody>
						</table>
					</div>
				</div>
				<!-- END EXAMPLE TABLE PORTLET-->
			</div>
		</div>

	</div>
	<!-- END CONTENT BODY -->
</div>
<!-- END CONTENT -->
<?php
$data ['script'] = "dashboard.js";
$data ['initialize'] = "pageFunctions.init();";
$this->load->view ( 'frontend/_includes/footer', $data );
?>