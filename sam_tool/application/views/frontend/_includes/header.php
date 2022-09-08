<html>

<head>
<meta charset="utf-8" />
<title>frontend</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1" name="viewport" />
<meta content="" name="description" />
<meta content="" name="author" />
<link rel="shortcut icon" type="image/x-icon" href="<?= assets_path.'images/logo.png'; ?>">
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link
	href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all"
	rel="stylesheet" type="text/css" />
<link
	href="<?php echo theme_assets_path; ?>global/plugins/font-awesome/css/font-awesome.min.css"
	rel="stylesheet" type="text/css" />
<link
	href="<?php echo theme_assets_path; ?>global/plugins/simple-line-icons/simple-line-icons.min.css"
	rel="stylesheet" type="text/css" />
<link
	href="<?php echo theme_assets_path; ?>global/plugins/bootstrap/css/bootstrap.min.css"
	rel="stylesheet" type="text/css" />
<!--<link
	href="<?php echo theme_assets_path; ?>global/plugins/uniform/css/uniform.default.css"
	rel="stylesheet" type="text/css" />-->
<link
	href="<?php echo theme_assets_path; ?>global/plugins/bootstrap-switch/css/bootstrap-switch.min.css"
	rel="stylesheet" type="text/css" />
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL PLUGINS -->

<!-- for autocomplete -->
<link rel="stylesheet"
	href="https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<link
	href="<?php echo theme_assets_path; ?>global/plugins/bootstrap-daterangepicker/daterangepicker.min.css"
	rel="stylesheet" type="text/css" />
<link href="<?php echo theme_assets_path; ?>global/plugins/morris/morris.css"
	rel="stylesheet" type="text/css" />
<link
	href="<?php echo theme_assets_path; ?>global/plugins/fullcalendar/fullcalendar.min.css"
	rel="stylesheet" type="text/css" />
<link
	href="<?php echo theme_assets_path; ?>global/plugins/jqvmap/jqvmap/jqvmap.css"
	rel="stylesheet" type="text/css" />
<link
	href="<?php echo theme_assets_path; ?>global/plugins/datatables/datatables.min.css"
	rel="stylesheet" type="text/css" />
<link
	href="<?php echo theme_assets_path; ?>global/plugins/bootstrap-daterangepicker/daterangepicker.min.css"
	rel="stylesheet" type="text/css" />
<link
	href="<?php echo theme_assets_path; ?>global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css"
	rel="stylesheet" type="text/css" />
<link
	href="<?php echo theme_assets_path; ?>global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css"
	rel="stylesheet" type="text/css" />
<link
	href="<?php echo theme_assets_path; ?>global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css"
	rel="stylesheet" type="text/css" />
<link
	href="<?php echo theme_assets_path; ?>global/plugins/bootstrap-summernote/summernote.css"
	rel="stylesheet" type="text/css" />
<link
	href="<?php echo theme_assets_path; ?>global/plugins/bootstrap-fileinput/bootstrap-fileinput.css"
	rel="stylesheet" type="text/css" />
<link
	href="<?php echo theme_assets_path; ?>global/plugins/select2/css/select2.min.css"
	rel="stylesheet" type="text/css" />
<link
	href="<?php echo theme_assets_path; ?>global/plugins/select2/css/select2-bootstrap.min.css"
	rel="stylesheet" type="text/css" />
	<link href="<?php echo theme_assets_path; ?>global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css" rel="stylesheet" type="text/css" />
<!-- MY CSS -->
<link href="<?php echo theme_path; ?>css/style.css" rel="stylesheet"
	type="text/css" />
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL STYLES -->
<link href="<?php echo theme_assets_path; ?>global/css/components.min.css"
	rel="stylesheet" id="style_components" type="text/css" />
<link href="<?php echo theme_assets_path; ?>global/css/plugins.min.css"
	rel="stylesheet" type="text/css" />
<!-- END THEME GLOBAL STYLES -->
<!-- BEGIN THEME LAYOUT STYLES -->
<link
	href="<?php echo theme_assets_path; ?>layouts/layout2/css/layout.min.css"
	rel="stylesheet" type="text/css" />
<link
	href="<?php echo theme_assets_path; ?>layouts/layout2/css/themes/blue.min.css"
	rel="stylesheet" type="text/css" id="style_color" />
<link
	href="<?php echo theme_assets_path; ?>layouts/layout2/css/custom.min.css"
	rel="stylesheet" type="text/css" />
<!-- END THEME LAYOUT STYLES -->
<link rel="shortcut icon" href="<?php echo assets_path; ?>images/icons/favicon.png" />
</head>
<!-- END HEAD -->
<style>
.my-toggle:hover{
	padding-bottom:0px!important;
	
}
.username_id{
	height: 40px !important;
    margin-top: -11px !important;
    margin-left: 0px !important;
    margin-right: 21px !important;
}
.title{
	font-size:19px;
	font-width:1000;
}
</style>
<?php
// $user_level1=$_SESSION['profile']->user_level;
// 		$user_level_array=explode(",",$user_level1);?>
<body
	class="page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid">
	<script> 
    	var base_url = '<?php echo base_url();?>';
   	</script>

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
						<li class="dropdown dropdown-user"><a href="" class="dropdown-toggle"> 
								Search
								</a>
							</li>
							<li class="dropdown dropdown-user"><a href="" class="dropdown-toggle"> 
								About
								</a>
							</li>
							<li class="dropdown dropdown-user"><a href="" class="dropdown-toggle"> 
								Contact
								</a>
							</li>
							<li class="dropdown dropdown-user"> 
								<a href="<?= base_url('frontend/profile'); ?>" class="dropdown-toggle">
								My Account
								</a>
							</li>
							<li class="dropdown dropdown-user">
								<a href="<?php echo base_url('frontend/register');?>" class="dropdown-toggle"> 
								Register
								</a>
							</li>
							<!-- BEGIN USER LOGIN DROPDOWN -->
							<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                            <li class="dropdown dropdown-user"><a href="javascript:;"
								class="dropdown-toggle" data-toggle="dropdown"
								data-hover="dropdown" data-close-others="true"> <img alt=""
									class="img-circle username_id"
									src="<?php echo theme_assets_path; ?>layouts/layout2/img/avatar.png" />
									<img alt=""
									class="img-circle"
									src="<?php echo theme_assets_path; ?>layouts/layout2/img/dot.png" />
									<span class="username username-hide-on-mobile"> <?php // echo $this->session->userdata('first_name');?> </span>
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
		</div>
		<!-- END SIDEBAR -->
		