<?php $this->load->view('frontend/_includes/header');?>
<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
	<!-- BEGIN CONTENT BODY -->
	<div class="page-content">
		<!-- BEGIN PAGE HEADER-->

		<h3 class="page-title">Forum Reply</h3>
		<div class="page-bar">
			<ul class="page-breadcrumb">
				<li><i class="icon-home"></i> <a
					href="<?php echo base_url('frontend'); ?>">Home</a> <i
					class="fa fa-angle-right"></i></li>
				<li><span>Forum Reply</span></li>
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
								class="caption-subject bold uppercase">Forum Reply</span>
						</div>
						<div class="actions">
							<a href="<?php echo base_url('frontend/forum_queries');?>"
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
									<th>Name</th>
									<th>Message</th>
									<th>Email</th>
									<th>Date</th>
									<th>Action</th>
									
								</tr>
							</thead>
							<tbody>
								<?php 
								$dataQuery=$this->db->query("select * from forum_queries_reply where f_id='$id' and status!='0'");
								foreach($dataQuery->result() as $getData)
								{
								$i=1;
								?>
									<tr class="odd gradeX">
										<td><?= $i; ?></td>
										<td><?= $getData->name; ?></td>
										<td><?= $getData->message; ?></td>
										<td><?= $getData->email; ?></td>
										<td><?= $getData->created_date; ?></td>
										<td>
										<?php  if($getData->status == '1'){ ?>
				                    			<a href="<?= base_url('frontend/update_reply_status/2/'.$getData->id); ?>" class="btn default btn-xs yellow-gold-stripe"
				                    				onclick="if(!confirm('Are you sure to make inactive?')) return false;"> Inactive </a>
												
											<?php }else {?>
												<a href="<?= base_url('frontend/update_reply_status/1/'.$getData->id); ?>" class="btn default btn-xs green-meadow-stripe"
													onclick="if(!confirm('Are you sure to make active?')) return false;"> Active </a>
											<?php } ?>
												

												<a href="<?php echo base_url('frontend/update_reply_status/0/'.$getData->id) ;?>" class="btn default btn-xs red-soft-stripe" 
													onclick="if(!confirm('Are you sure to delete ? Story will be deleted permanently.')) return false;">Delete </a>
										
										
										</td>
									
									</tr>
								<?php 
								$i++;
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
@$data ['script'] = "dashboard.js";
@$data ['initialize'] = "pageFunctions.init();";
@$this->load->view ( 'frontend/_includes/footer', $data );
?>