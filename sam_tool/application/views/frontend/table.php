<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8" />
        <title>S.A.M. | Table</title>
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
        <link
	href="<?php echo theme_assets_path; ?>layouts/layout2/css/layout.min.css"
	rel="stylesheet" type="text/css" />
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
									<span class="username username-hide-on-mobile"> <?php //echo $this->session->userdata('first_name');?> </span>
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
	<br>
	<br>
	<br>
	<br>
<div class="page-content-wrapper">
	<!-- BEGIN CONTENT BODY -->
	<div class="page-content">
		<!-- BEGIN PAGE HEADER-->

		<h3 class="page-title">Tables</h3>
		<div class="page-bar">
			<ul class="page-breadcrumb">
				<li><i class="icon-home"></i> <a
					href="<?php echo base_url('frontend'); ?>">Home</a> <i
					class="fa fa-angle-right"></i></li>
				<li><span>Tables</span></li>
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
								class="caption-subject bold uppercase">Tables</span>
						</div>
						<div class="actions">
							<a href="<?php echo base_url('frontend/index');?>"
									class="btn btn-circle default">
									Back</a>
						</div>
					</div>
					<div class="portlet-body">
						<table
							class="table table-striped table-bordered table-hover table-checkable order-column"
							id="managed_datatable" data-page-length='10'>
							<thead>
								<tr>
									<th>Sr.No.</th>
									<th>First Name</th>
									<th>User Name</th>
									<th>Last Name</th>
									<th>Email</th>
									<th>Aadhar Number</th>
									<th>PAN Number</th>
									<th>Contact Number</th>
									<th>Mobile Number</th>
									
								</tr>
							</thead>
							<tbody>
								<?php 
										foreach($document_listing as $getData)
								{?>
									<tr class="odd gradeX">
										<td><?= $getData->id; ?></td>
										<td><?= $getData->first_name; ?></td>
										<td><?= $getData->username; ?></td>
										<td><?= $getData->last_name; ?></td>
										<td><?= $getData->email_address; ?></td>
										<td><?= $getData->aadhar_number; ?></td>
										<td><?= $getData->PAN_number; ?></td>
										<td><?= $getData->contact_number; ?></td>
										<td><?= $getData->mobile_number; ?></td>
									</tr>
								<?php 
								} ?>
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
//$data ['script'] = "dashboard.js";
//$data ['initialize'] = "pageFunctions.init();";
$this->load->view ( 'frontend/_includes/footer' );
?>
<script>
// 	$.ajax({
//     url:"<PROXY:SERVER>http://localhost:3000/sam/v1/userRegistration/1",
//     success: function(json) {
//         // Do stuff with data
//     },
//     error: function(e) {
//        console.log(e);
//     }
// });

// $.ajax({
//         url: '<PROXY:SERVER>http://localhost:3000/sam/v1/userRegistration/1',
//         dataType: 'application/json',
//         complete: function(data){
//             alert(data)
//         },
//         success: function(data){
//             alert(data)
        // }
</script>