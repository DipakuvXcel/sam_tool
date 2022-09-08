<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8" />
        <title>S.A.M. | Login</title>
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
		
        <!-- BEGIN LOGO -->
        <div class="logo">
            <!-- <a href="<?php echo base_url('login'); ?>">
                <img src="<?= assets_path.'images/download.png'; ?>" alt="" /> </a> -->
        </div>
        <!-- END LOGO -->
        <!-- BEGIN LOGIN -->
        <div class="content" style="margin-top:50px;">
        	
            <!-- BEGIN LOGIN FORM -->
            <form class="login-form" action="<?php echo base_url('frontend/do_login');?>" method="post">
                <div class="alert alert-danger display-hide">
                    <button class="close" data-close="alert"></button>
                    <span> Enter valid email and password. </span>
                </div>
                
                
                <div class="form-group">
                    <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                    <label class="control-label bold">Login with Email</label>
                    <input class="form-control form-control-solid placeholder-no-fix" type="text" autocomplete="off"  placeholder="Email" name="email_id" value="" />
				 </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Password</label>
                    <input class="form-control form-control-solid placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password" value=""/> 
                </div>
                <center><label class="control-label bold">OR</label></center><br>
                <label class="control-label bold">Login with OTP</label>
                <div class="form-group flex">
                    <label class="control-label visible-ie8 visible-ie9">Otp</label>
                    <input class="form-control form-control-solid placeholder-no-fix middlwidth" type="number" autocomplete="off" placeholder="Mobile Number" name="otp" value=""/> 
                     <button type="submit" class="btn green uppercase">Send OTP</button>
                </div>
                <div class="form-actions">
                    <center><button type="submit" class="btn green uppercase">Login</button></center>
                    <!-- <label class="rememberme check">
                        <input type="checkbox" name="remember" value="1" />Remember </label> -->
                   <!-- <a href="<?php echo base_url("frontend/forgot_password");?>" class="forget-password">Forgot Password?</a>  -->
                </div>
                
            </form>
            <!-- END LOGIN FORM -->
           
            
        </div>
        <!-- <div class="copyright"> Designed & Developed by <a href="http://www.angularminds.com" target="_blank">Angular Minds</a></div> -->
        <!--[if lt IE 9]>
		<script src="<?php echo theme_assets_path; ?>global/plugins/respond.min.js"></script>
		<script src="<?php echo theme_assets_path; ?>global/plugins/excanvas.min.js"></script> 
		<![endif]-->
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
    </body>

</html>