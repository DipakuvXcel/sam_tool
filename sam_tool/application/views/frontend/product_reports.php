<?php 
	$this->load->view('frontend/_includes/header');
?>
<style>
.bootstrap-switch .bootstrap-switch-handle-on, .bootstrap-switch .bootstrap-switch-handle-off, .bootstrap-switch .bootstrap-switch-label{
	padding: 0px 0px;
} 
.select2{
	width: auto !important;
}

</style> 
<div class="page-content-wrapper">
	<!-- BEGIN CONTENT BODY -->
	<div class="page-content">
	<!-- BEGIN PAGE HEADER-->
	<h3 class="page-title">Product Report</h3>
		<div class="page-bar">
			<ul class="page-breadcrumb">
				<li><i class="icon-home"></i> 
				<a href="<?php echo base_url('frontend'); ?>">Home</a> 
				<i class="fa fa-angle-right"></i></li>
				<li><span>Product Report</span></li>
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
								class="caption-subject bold uppercase"> Search Product Report</span>
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
						<form id="add_student_form" class="horizontal-form" action="<?php echo base_url('frontend/search_product_report');?>"
							method="post" enctype="multipart/form-data">
							<div class="form-body">
								<div class="row">

		 							
								<div class="col-md-3"></div>
									<div class="col-md-3">
									<label class="control-label">Select Product</label><span style="color:red"></span>
										<div class="form-group">
										<select name="product_name"  id="product_name"  class="form-control selectsearch" onchange="selectProduct(this.value)">
												<option value="0" <?php if($product_name==0) echo 'selected'; ?>>All</option>
												<?php 
												for($i=0;$i<count($products);$i++)
												{
												$product_id= $products[$i]->product_id;
												$packing_qty= $products[$i]->packing_qty;
												$product_name= $products[$i]->product_name;
												$packaging= $products[$i]->packaging_detail
												?>
 												<option value="<?= $product_id ?>" <?php if(set_value('product_name')==$product_id) echo 'selected'; ?>>
												 <?= $product_name .'('.$packing_qty .' '.$packaging.')' ?></option>
												<?php } ?>

											</select>
										</div>
									</div> 
						
									<div class="col-md-3">
									<label class="control-label">Status</label><span style="color:red"></span>
										<div class="form-group">
											<select name="status" id="status" class="form-control">
											<option value="1"<?php if($status==1) echo 'selected'; ?>>Active</option>
											<option value="2"<?php if($status==2) echo 'selected'; ?>>In-Active</option>	
											<option value="0"<?php if($status==0) echo 'selected'; ?>>Deleted </option>
												
											</select>
										</div>
									</div>
									</div>
									<div class="row">
									<div class="col-md-12 text-center" style="margin-top: 2%;">
										<button type="submit" class="btn blue">
									<i class="fa fa-search"></i> Search
										</button>
										<a type="button" class="btn default" href="<?php echo base_url('frontend/product_report');?>">Cancel</a>
									</div>
								</div>
							</div>
							<!--<div class="form-actions right">
								<button type="submit" class="btn blue">
									<i class="fa fa-check"></i> Submit
								</button>
								<a type="button" class="btn default" href="<?php echo base_url('frontend/stories');?>">Cancel</a>
							</div>-->
						</form>
					</div>
				</div>
				<!-- END EXAMPLE TABLE PORTLET-->
			</div>
		</div>

	<!-- Tab Start --> 
	<div class="row">
		<div class="tab-content" id="myTabContent">
			<div class="tab-pane fade p-3 active in" id="one" role="tabpanel" aria-labelledby="one-tab">
				<div class="col-md-12">
				<!-- BEGIN EXAMPLE TABLE PORTLET-->
				<div class="portlet light ">
					<div class="portlet-title">
						<div class="caption font-dark">
							<i class="icon-settings font-dark"></i> 
							<span class="caption-subject bold uppercase">Product Report</span>
							<!--<button onclick="pdf_all_products()" class="btn btn-transparent green-meadow btn-outline btn-circle btn-sm active"><i class="fa fa-download" aria-hidden="true"></i>&nbsp;PDF</button>
							<a href="<?php echo base_url('frontend/excel_all_products');?>" class="btn btn-transparent green-meadow btn-outline btn-circle btn-sm active fa fa-download"> Excel</a>-->
						</div>
						<div class="actions">
							  <a href="javascript:void(0);" onclick="pdf_product_report()" class="btn btn-transparent green-meadow btn-outline btn-sm active">
								<i class="fa fa-download"></i>  Download PDF Report</a> 

								<a onclick="excel_product_report()" class="btn btn-transparent green-meadow btn-outline btn-sm active">
								<i class="fa fa-download"></i>  Download Excel Report</a> 

						</div>
					</div>
					
					<div class="portlet-body">
					 
					  	<div class="table-responsive">
						<table class="table table-striped table-bordered table-hover table-checkable order-column" id="managed_datatable" data-page-length='10'>
							<thead>
								<tr>
									<th>Sr.No.</th>
									<th>Product Name</th>
									<th>Category</th>
									<th>Brand Name</th>									
									<th>Packaging Detail</th>
									<th>Packing Quantity</th>
									<th>Packing Per BOx</th>
									<th>MRP</th>
									<th>GST(%)</th>
									<th>Flavour</th>
									<th>Description</th>
									<th>Added Date</th>
								 	<th>Status</th>
							 
									 
									 
								</tr>
							</thead>
							<tbody>
								<?php 
								for($i=0;$i<count($product_stock);$i++)
								{ 
									$flavour=$product_stock[$i]->flavour;
									$f_array=explode(",",$flavour);
									$flavour_name="";

									$where = array('status !=' => 0);
									$this->db->where_in('id', $f_array);
									$flavour = $this->user_model->get_common('flavour', $where,'*',2,'','','');
									foreach($flavour as $val){
										$flavour_name=$val->name." ,".$flavour_name;
									}
									$flavour_name=rtrim($flavour_name,' ,');

									$main=$product_stock[$i]->main_category;
									$f_array=explode(",",$main);
									$main="";
					
									$where = array('status !=' => 0);
									$this->db->where_in('id', $f_array);
									$main = $this->user_model->get_common('product_category', $where,'*',2,'','','');
									foreach($main as $val){
										$main=$val->name;
									}
				
							$brand=$product_stock[$i]->brand_id;
								$f_array=explode(",",$brand);
								$brand="";
				
								$where = array('status !=' => 0);
								$this->db->where_in('id', $f_array);
								$brand = $this->user_model->get_common('brands', $where,'*',2,'','','');
								foreach($brand as $val){
									$brand=$val->name;
							}




								//$id = $this->encrypt->encode($product_stock[$i]->id);
								$product_id= $product_stock[$i]->product_id;
								?>
								<tr class="odd gradeX" id="UserTR<?= $product_stock[$i]->product_id; ?>">
									<td><?= $i+1; ?></td>
									 <td><?= $product_stock[$i]->product_name; ?></td>
									 <td><?= $main; ?></td>
									<td><?= $brand; ?></td>
									<td><?= $product_stock[$i]->packaging_detail; ?></td>
									<td><?= $product_stock[$i]->packing_qty; ?></td>
									<td><?= $product_stock[$i]->packaging_per_box; ?></td>
									<td><?=$product_stock[$i]->price;?></td>
									<td><?=$product_stock[$i]->gst; ?></td>
									<td><?= $flavour_name; ?></td>
									<td><?= $product_stock[$i]->description;  ?></td>
									<td><?= $product_stock[$i]->added_date; ?></td>
									 
									<td> <?php  if($product_stock[$i]->status == 0) { echo 'Deleted'; }
												elseif($product_stock[$i]->status == 1) { echo 'Active'; }
												else if($product_stock[$i]->status == 2) {	echo 'Inactive'; } ?></td>
					                     
									 
									 
									
								</tr>
								<?php 
									} 
								?>
					        </tbody>
						</table>
					</div>
				</div>
			</div>
				<!-- END EXAMPLE TABLE PORTLET-->
		</div>
		</div>
	
	</div>
	</div>
</div>
</div>
<!-- END CONTENT -->
 
	
<?php
	$data ['script'] = "dashboard.js";
	$data ['initialize'] = "pageFunctions.init();";
	$this->load->view ( 'frontend/_includes/footer', $data );
?>

<script type="text/javascript">

	function excel_product_report(){
		product_name=$("#product_name").val();
		status=$("#status").val();
	 
		window.location='<?php echo base_url('frontend/excel_product_report?product_name='); ?>'+product_name+'&status='+status;
		
		
	}

	function pdf_product_report(){
		//alert();
		product_name=$("#product_name").val();
		status=$("#status").val();
	 // alert(product_name+quantity+status);
		window.location='<?php echo base_url('frontend/pdf_product_report?product_name='); ?>'+product_name+'&status='+status;
		
		
	}

	 
	
	function excel_all_products()
	{ 
		 window.location='excel_all_cnf';
	}
	  
	function pdf_all_products()
	{ 
		window.location='pdf_all_cnf';
	} 


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

function changeUser(id){
	$("#TextBoxContainer").html('');
	$("#bindproductflavour").html('');
	values=[];
	localStorage.setItem("productflavourarr", JSON.stringify(values));
}
</script>
  
	
