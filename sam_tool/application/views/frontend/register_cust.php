<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->
    <head>
	<meta charset="utf-8" />
	<title>S.A.M. | Register Customer</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	<!-- BEGIN GLOBAL MANDATORY STYLES -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
	<link href="<?php echo theme_assets_path; ?>global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo theme_assets_path; ?>global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo theme_assets_path; ?>global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css" />
	<!-- END GLOBAL MANDATORY STYLES -->
	<!-- BEGIN THEME GLOBAL STYLES -->
	<link href="<?php echo theme_assets_path; ?>global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
	<link href="<?php echo theme_assets_path; ?>global/css/plugins.min.css" rel="stylesheet" type="text/css" />
	<!-- END THEME GLOBAL STYLES -->
	<!-- BEGIN PAGE LEVEL STYLES -->
	<link href="<?php echo theme_path; ?>css/login.min.css" rel="stylesheet" type="text/css" />
	<!-- END PAGE LEVEL STYLES -->
	<!-- BEGIN THEME LAYOUT STYLES -->
	<link href="<?php echo theme_assets_path; ?>layouts/layout2/css/layout.min.css" rel="stylesheet" type="text/css" />
	<!-- END THEME LAYOUT STYLES -->
	<link rel="shortcut icon" href="favicon.ico" /> </head>
	<!-- END HEAD -->
    <style>
        .login {	
            background: #eee;
        }
        .flex{
            display:flex;display: flex;
            width: 100%;
            justify-content: space-between;
        }
        .middlwidth{
            width:60%;
        }
		.page-content-wrapper .page-content {
    	margin-left: 0px;
		}
    </style>
        

    <body class="login">
    <!-- BEGIN HEADER -->
	<div class="page-header navbar navbar-fixed-top">
		<!-- BEGIN HEADER INNER -->
		<div class="page-header-inner ">
			<!-- BEGIN LOGO -->
			<div class="page-logo">
					<a
					href="<?php echo base_url('frontend'); ?>">
					 <!-- <img
					src="<?php echo assets_path; ?>images/logo.png"
					alt="logo" class="logo-default" /> -->
				</a>
				<div class="menu-toggler sidebar-toggler">
					<!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
				</div>
			</div>
			<!-- END LOGO -->
			<!-- BEGIN RESPONSIVE MENU TOGGLER -->
			<a href="javascript:;" class="menu-toggler responsive-toggler"
				data-toggle="collapse" data-target=".navbar-collapse"> </a>
			<!-- END RESPONSIVE MENU TOGGLER -->
			
			<div class="page-actions" style="margin-top:5px;">
			<ul class="nav navbar-nav pull-right">


<!-- BEGIN USER LOGIN DROPDOWN -->
<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->

   <li class="dropdown dropdown-user">
	   <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> 
	   <span class="caption-subject bold" style="color:#000;font-size: large;">  Asset Class </span>
		<span class="username username-hide-on-mobile"> <?php //echo $this->session->userdata('first_name');?> </span>
		<i class="fa fa-angle-down"></i>
	</a>
<!--	<ul class="dropdown-menu dropdown-menu-default">
 
		<li><a href="<?= base_url('frontend/change_password'); ?>" >
				<i class="icon-lock"></i> Change Password
		</a></li>
		
		<li><a href="<?php echo base_url('frontend/logout');?>"> <i
				class="icon-key"></i> Log Out
		</a></li>
	</ul>						 -->
			</div>
			<!-- BEGIN PAGE TOP -->
			<div class="page-top">

				<!-- BEGIN TOP NAVIGATION MENU -->
				<div class="top-menu">
					<form name="workspace_form"
						action="<?php echo base_url('login/change_current_academic_year');?>"
						method="post" style="display: inline;">
						<ul class="nav navbar-nav pull-right">
						<li class="dropdown dropdown-user"><a href="javascript:;"
								class="dropdown-toggle" data-toggle="dropdown"
								data-hover="dropdown" data-close-others="true"> 
								Search
								</a>
							</li>
							<li class="dropdown dropdown-user"><a href="javascript:;"
								class="dropdown-toggle" data-toggle="dropdown"
								data-hover="dropdown" data-close-others="true"> 
								About
								</a>
							</li>
							<li class="dropdown dropdown-user"><a href="javascript:;"
								class="dropdown-toggle" data-toggle="dropdown"
								data-hover="dropdown" data-close-others="true"> 
								Contact
								</a>
							</li>
							<li class="dropdown dropdown-user"><a href="javascript:;"
								class="dropdown-toggle" data-toggle="dropdown"
								data-hover="dropdown" data-close-others="true"> 
								My Account
								</a>
							</li>
							<li class="dropdown dropdown-user"><a href="<?php echo base_url('frontend/index');?>"
								class="dropdown-toggle"> 
								Log In 
								</a>
								<li class="dropdown " style="padding: 0px;top: 12px;">
								<a href="javascript:;" class="" style="padding: 12px 16px 19px;">
							|</a></li>
							<li class="dropdown dropdown-user" style="padding: 0px;">
								<a href="<?php echo base_url('frontend/register');?>" class="dropdown-toggle" style="padding-left: 0px;"> 
								Register
								</a>
							</li>
							<!-- BEGIN USER LOGIN DROPDOWN -->
							<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                            
                           	<li class="dropdown dropdown-user"><a href="javascript:;"
								class="dropdown-toggle" data-toggle="dropdown"
								data-hover="dropdown" data-close-others="true"> <img alt=""
									class="img-circle"
									src="<?php echo theme_assets_path; ?>layouts/layout2/img/dot.png" />
									<span class="username username-hide-on-mobile"> </span>
									<i class="fa fa-angle-down"></i>
								</a>
								<ul class="dropdown-menu dropdown-menu-default">

									<li><a href="<?= base_url('frontend/change_password'); ?>" >
											<i class="icon-lock"></i> Change Password
									</a></li>
									
									<li><a href="<?php echo base_url('frontend/logout');?>"> <i
											class="icon-key"></i> Log Out
									</a></li>
								</ul>
							</li>
							<!-- END USER LOGIN DROPDOWN -->
							
						</ul>
					</form>
				</div>
				<!-- END TOP NAVIGATION MENU -->
			</div>
			<!-- END PAGE TOP -->
		</div>
		<!-- END HEADER INNER -->
	</div>
	<!-- END HEADER -->
	<!-- BEGIN HEADER & CONTENT DIVIDER -->
	<div class="clearfix"></div>
	<!-- END HEADER & CONTENT DIVIDER -->
	<!-- BEGIN CONTAINER -->
	<div class="page-container">
		<!-- BEGIN SIDEBAR -->
		<div class="page-sidebar-wrapper">
			<!-- END SIDEBAR -->
			<div class="page-sidebar navbar-collapse collapse">

			<ul class="page-sidebar-menu  page-header-fixed page-sidebar-menu-hover-submenu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
			</ul>
			<!-- END SIDEBAR MENU -->
		</div>
		<!-- END SIDEBAR -->
	</div>
	<!-- END SIDEBAR -->
	<!-- BEGIN CONTENT -->
	<div class="clearfix"></div>
		<!-- END HEADER & CONTENT DIVIDER -->
		<!-- BEGIN CONTAINER -->
		<div class="page-container">
			<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title"></h3>
			<div class="page-bar">
			</div>
			<!-- END PAGE HEADER-->
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet light ">
						<div class="portlet-title">
							<div class="caption font-dark">
								<h3 class="bold"> New Customer Register</h3>
							</div>
						</div>
						<div class="portlet-body">					      
							<form id="add_student_form" class="horizontal-form" autocomplete="off" action="<?php echo base_url('frontend/save_customer');?>"  method="post" enctype="multipart/form-data" autocomplete="Off">
								<div class="form-body">
									<div class="row">
										<div class="col-md-4" >
											<div style="display:flex">
												<div class="form-group">
													<input id="free" name="free" type="checkbox" value="" checked>
													<label class="control-label" style="padding-left:10px;padding-right:20px;"><a href="<?php echo base_url('frontend/register');?>">Individual</a></label>
												</div>
												<div class="form-group">
													<input id="free" name="free" type="checkbox" value="">
													<label class="control-label" style="padding-left:10px;"><a href="<?php echo base_url('frontend/register1');?>">Organization</a></label>
												</div>
											</div>
										</div>
										<div class="col-md-3">		
										</div>
									</div>
									<div class="row">
										<div class="col-md-2">
											<div class="form-group">
												<label class="control-label">Full Name</label>
											</div>
										</div>
										<div class="col-md-2">
											<div class="form-group">
											<input  name="fname" class="form-control" maxlength="25" type="text"  value="" alt="Only 25 Character Allowed" placeholder="First Name">
											</div>
										</div>
										<div class="col-md-2">
											<div class="form-group">
											<input  name="mname" class="form-control" maxlength="25" type="text"  value="" alt="Only 25 Character Allowed" placeholder="Middle Name">
											</div>
										</div>
										<div class="col-md-2">
											<div class="form-group">
											<input  name="lname" class="form-control" maxlength="25" type="text"  value="" alt="Only 25 Character Allowed" placeholder="Last Name">
											</div>
										</div>	
									</div>
									<div class="row">
										<div class="col-md-2">
											<div class="form-group">
												<label class="control-label">Aadhar Number</label>
											</div>
										</div>
										<div class="col-md-2">
											<div class="form-group">
											<input  name="adhar_no" class="form-control" maxlength="12" type="number"  value="" alt="Only 12 Character Allowed" placeholder="Aadhar Number">
											</div>
										</div>
										<div class="col-md-2">
											<div class="form-group">
											<label class="control-label">PAN Number</label>
											</div>
										</div>
										<div class="col-md-2">
											<div class="form-group">
											<input  name="pan_no" class="form-control" maxlength="10" type="text"  value="" alt="Only 10 Character Allowed" placeholder="PAN Number">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-2">
											<div class="form-group">
												<label class="control-label">Address </label>
											</div>
										</div>
										<div class="col-md-2">
											<div class="form-group">
												<input  name="address" class="form-control" maxlength="50" type="text"  value="" alt="Only 50 Character Allowed" placeholder="Block-House No Street">
											</div>
										</div>
										<div class="col-md-2">
											<div class="form-group">
												<input  name="locality" class="form-control" maxlength="50" type="text"  value="" alt="Only 50 Character Allowed" placeholder="Locality, Area">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-2">
											<div class="form-group">
											</div>
										</div>
										<div class="col-md-2">
											<div class="form-group">
												<input  name="city" class="form-control" maxlength="50" type="text"  value="" alt="Only 50 Character Allowed" placeholder="City">
											</div>
										</div>
										<div class="col-md-1" style="width:10%">
											<div class="form-group">
												<select id="zip" name="zip" class="form-control" >
													<option value="">Zipcode</option>
												</select>
											</div>
										</div>
										<div class="col-md-2">
											<div class="form-group">
												<input  name="state" class="form-control" maxlength="50" type="text"  value="" alt="Only 50 Character Allowed" placeholder="State">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-2">
											<div class="form-group">
												<label class="control-label">Email Address</label><span style="color:red">*</span>
											</div>
										</div>							
										<div class="col-md-2">
											<div class="form-group">
												<input id="email" name="email" class="form-control" placeholder="XXX@YYY.com" type="email" value="">
											</div>
										</div>
									</div>	
									<div class="row">
										<div class="col-md-2">
											<div class="form-group">
												<label class="control-label">Contact Number</label><span style="color:red">*</span>
											</div>
										</div>
										<div class="col-md-2">
											<div class="form-group">
												<input id="lanno" name="lanno" class="form-control" placeholder="Landline Number" type="number" value="">
											</div>
										</div>
										<div class="col-md-2">
											<div class="form-group">
												<input id="mono" name="mono" class="form-control" placeholder="Mobile Number" type="number" value="">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-2">
											<div class="form-group">
											</div>
										</div>
										<div class="col-md-2">
											<div class="form-group">
												<a style="color: blueviolet;text-decoration: none;border-bottom: 1px solid blueviolet;font-width:300;">SAM Terms and Conditions</a>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6" >
										<div style="display:flex">
											<div class="form-group">
												<input id="free" name="free" type="checkbox" value="">
												<label class="control-label" style="padding-left:10px;">I Agree to the Terms and Conditions</label>
											</div>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-2">
									</div>
										<div class="col-md-2">
											<button type="submit" class="btn blue"><i class="fa fa-check"></i> Submit</button>
										</div>	
										<div class="col-md-2">
											<a type="button" class="btn default" href="<?php echo base_url('admin/Customer');?>">Cancel</a>
										</div>
									</div>
								</div>	
								<div class="row">
									<div class="col-md-12" style="text-align:center;">
										<hr style="border:solid 1px #000;">
										<p style="width: 100%;display: flex;justify-content: space-evenly;text-align: left;">
										&copy;Copyright SAMREALITY. All Rights<br>
										Reserved - 2021<br>
										Terms & Conditions | Privacy Policy |
										</p>
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
		<!-- BEGIN CORE PLUGINS -->
		<script src="<?php echo theme_assets_path; ?>global/plugins/jquery.min.js" type="text/javascript"></script>
		<script src="<?php echo theme_assets_path; ?>global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
		<script src="<?php echo theme_assets_path; ?>global/plugins/js.cookie.min.js" type="text/javascript"></script>
		<!-- END CORE PLUGINS -->
		<!-- BEGIN PAGE LEVEL PLUGINS -->
		<script src="<?php echo theme_assets_path; ?>global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
		<!-- END PAGE LEVEL PLUGINS -->
		<!-- BEGIN THEME GLOBAL SCRIPTS -->
		<script src="<?php echo theme_assets_path; ?>global/scripts/app.min.js" type="text/javascript"></script>
		<!-- END THEME GLOBAL SCRIPTS -->
		<!-- BEGIN PAGE LEVEL SCRIPTS -->
		<script src="<?php echo scripts_path; ?>login.js" type="text/javascript"></script>
		<!-- END PAGE LEVEL SCRIPTS -->
		<!-- BEGIN THEME LAYOUT SCRIPTS -->
		<!-- END THEME LAYOUT SCRIPTS -->

		<script>
			var base_url = "<?php echo base_url(); ?>";
		</script>

		<script>
			$(".datepicker").datepicker({ 
			minDate: 0,
			format: "yyyy-mm-dd",
			changeMonth: true,
			changeYear: true,
			endDate: new Date(),
			yearRange: '-100:0'
			});

		</script>
	</body>
</html>