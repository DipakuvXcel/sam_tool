<?php $this->load->view('frontend/_includes/header');?>
<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
	<!-- BEGIN CONTENT BODY -->
	<div class="page-content">
		<!-- BEGIN PAGE HEADER-->

		<h3 class="page-title">Forum Queries</h3>
		<div class="page-bar">
			<ul class="page-breadcrumb">
				<li><i class="icon-home"></i> <a
					href="<?php echo base_url('frontend'); ?>">Home</a> <i
					class="fa fa-angle-right"></i></li>
				<li><span>Forum Queries</span></li>
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
								class="caption-subject bold uppercase">Forum Queries</span>
						</div>
					</div>
					<div class="portlet-body">
						<table
							class="table table-striped table-bordered table-hover table-checkable order-column"
							id="managed_datatable" data-page-length='10'>
							<thead>
								<tr>
									<th>Sr.No.</th>
									<th>Subject</th>
									<th>Message</th>
									<th>Email</th>
									<th>Email Notification</th>
									<th>Date</th>
									<th>Status</th>
									<th>Actions</th>
								</tr>
							</thead>
							<tbody>
								<?php for($i=0;$i<count($forum_queries);$i++){ ?>
									<tr class="odd gradeX">
										<td><?= $i+1; ?></td>
										<td><?= $forum_queries[$i]->subject ?></td>
										<td><?= $forum_queries[$i]->message; ?></td>
										<td><?= $forum_queries[$i]->email; ?></td>
										<td><?= $forum_queries[$i]->notify==0?'No':'Yes'; ?></td>
										<td><?= date('d-m-Y', strtotime($forum_queries[$i]->created_date)); ?></td>

										<td> <?php if($forum_queries[$i]->status == 1) { echo 'Active'; }
											else if($forum_queries[$i]->status == 2) {	echo 'Inactive'; } 
											else if($forum_queries[$i]->status == 0) {	echo 'Upcoming'; } 
											?></td>
					                    <td>
						                    <?php if($forum_queries[$i]->status == 1){ ?>
				                    			<a href="<?= base_url('frontend/update_forum_query_status/2/'.$forum_queries[$i]->id); ?>" class="btn default btn-xs yellow-gold-stripe"
				                    				onclick="if(!confirm('Are you sure to make inactive?')) return false;"> Inactive </a>
												
											<?php }else if($forum_queries[$i]->status == 2){ ?>
												<a href="<?= base_url('frontend/update_forum_query_status/1/'.$forum_queries[$i]->id); ?>" class="btn default btn-xs green-meadow-stripe"
													onclick="if(!confirm('Are you sure to make active?')) return false;"> Active </a>
											<?php } ?>
												<a href="<?php echo base_url('frontend/update_forum_query_status/0/'.$forum_queries[$i]->id) ;?>" class="btn default btn-xs red-soft-stripe" 
													onclick="if(!confirm('Are you sure to delete ? Query will be deleted permanently.')) return false;">Delete </a>
													<a href="<?php echo base_url('frontend/view_forum_reply/'.$forum_queries[$i]->id); ?>" class="btn default btn-xs blue-sharp-stripe"> View Reply </a>
										</td>
									</tr>
								<?php } ?>
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