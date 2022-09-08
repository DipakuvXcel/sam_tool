<?php $this->load->view('frontend/_includes/header');?>
<style>
.student-info-container strong {
	font-weight: 600;
}
</style>

<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
	<!-- BEGIN CONTENT BODY -->
	<div class="page-content">
		<!-- BEGIN PAGE HEADER-->

		<h3 class="page-title">Change Password</h3>
		<div class="page-bar">
			<ul class="page-breadcrumb">
				<li><i class="icon-home"></i> <a
					href="<?php echo base_url('frontend'); ?>">Home</a> <i
					class="fa fa-angle-right"></i></li>
				<li><span>Change Password</span></li>
			</ul>

		</div>
		<!-- END PAGE HEADER-->

		<div class="row">
			<div class="col-md-12">
				<!-- BEGIN EXAMPLE TABLE PORTLET-->
				<div class="portlet light ">
					<div class="portlet-title">
						<div class="caption ">
							<i class="icon-settings blue-steel "></i> <span
								class="caption-subject bold uppercase blue-steel">Change Password</span>
						</div>
						<div class="actions">
							<a href="<?php echo base_url('frontend/dashboard');?>" class="btn btn-circle default">Back</a>
						</div>
					</div>
					<div class="portlet-body">
					 	
						<form class="form-horizontal form-row-seperated" action="<?php echo base_url("frontend/update_password ");?>" method="post" id="change_password_form" autocomplete="Off">
						    <div class="form-body">
						        <div class="form-group">
						            <label class="col-md-4 control-label">Current Password: <span class="required"> * </span>
						            </label>
						            <div class="col-md-4">
						                <input type="password" class="form-control" name="current_password" id="current_password">
						            </div>
						        </div>
						        <div class="form-group">
						            <label class="col-md-4 control-label">New Password: <span class="required"> * </span>
						            </label>
						            <div class="col-md-4">
						                <input type="password" class="form-control" name="new_password" id="new_password">
						            </div>
						        </div>
						        <div class="form-group">
						            <label class="col-md-4 control-label">Confirm Password: <span class="required"> * </span>
						            </label>
						            <div class="col-md-4">
						                <input type="password" class="form-control" name="confirm_password" id="confirm_password">
						            </div>
						        </div>
						        <hr>
						        <div class="form-group">
						            <div class="text-center">
						                <button type="submit" data-loading-text="Processing..." class="btn green-meadow" autocomplete="off">
						                    <i class="fa fa-check"></i> Update Password
						                </button>
										<a type="button" class="btn default" href="<?php echo base_url('frontend/dashboard');?>">Cancel</a>
						            </div>
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
<?php
$data ['script'] = "";
$data ['initialize'] = "pageFunctions.init();";
$this->load->view ( 'frontend/_includes/footer', $data );
?>