<?php
error_reporting(0);
$this->load->helper('custom');
require_once('assets/fpdf/fpdf.php');

class PDF extends FPDF
{
// Page header
function Header()
{	
	//for border
	$this->Rect(5, 5, 200, 287, 'D');
    // Logo
   // $this->Image('../fpdf/pdf_logo.png',100,7,20);
	//$this->Line(10, 30, 210-10, 30);
   
   // Arial bold 15
    $this->SetFont('Times','B',15);
	//$this->Ln(30);
    // Move to the right
    //$this->Cell(100);
    // Title
	//$this->Ln(22);
	$this->Cell(0,0,'Customer List',0,30,'C');
    //$this->Cell(30,10,'Title',1,0,'C');
    // Line break
    $this->Ln(12);
}

// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Times','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','B',13);
?>
<div id="printableArea">
	<table width="100%" >
		<h4 class="myheading" style="text-align:center;"><b>All Employee Payment Record Report</b></h4>
	</table>
	<div  id="invoice-template" class="card-body">
	
	<!-- Invoice Company Details -->
	<div style="solid black; font-size: 12px;"> 
		<!-- Order Details -->
		 <table  border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse;" width="100%">
				<thead>
				<tr>
					<th class="text-center" style="border:1px solid black;">Sr.No</th>
					<th style="border:1px solid black;" class="text-center">Description</th>
					<th style="border:1px solid black;" class="text-center">Current Market Value</th>
					<th style="border:1px solid black;" class="text-center">Index II</th>
					<th style="border:1px solid black;" class="text-center">Title Search</th>
					<th style="border:1px solid black;" class="text-center">Locality</th>
				</tr>
				</thead>
				
				<tbody>
				<?php 
				  $counter = 0;
				  //print_r($order);
				  for($i=0;$i<count($order);$i++){
					$state=$order[$i]->state_id;	
					$wherec = array('id' => $state);
$order_state = $this->user_model->get_common('state', $wherec,'*',1);
$sta=$order_state->state_name;
					$city=$order[$i]->city_id;	
					$wherec = array('id' => $city);
$order_city = $this->user_model->get_common('city', $wherec,'*',1);
$ci=$order_city->city_name;
				?>
				<tr>
					<td style="text-align:center; border:1px solid black;">
					   <?php echo ++$counter ;?>
					</td>

					<td style="text-align:center; border:1px solid black;">
					  <?php echo $order[$i]->property_description;?>  
					</td>
					
					<td style="text-align:center; border:1px solid black;">
					  <?php echo $order[$i]->property_current_mak_val;?>  
					</td>
					
					<td style="text-align:center; border:1px solid black;">
					<a href="<?php echo upload_path; ?>document_listing/document/<?= $order[$i]->property_document;?>"target="_blank" class="btn btn-transparent green-meadow btn-outline btn-circle btn-sm active fa fa-download"><?= $order[$i]->property_document;?> </a>
					</td>
					
					<td style="text-align:center; border:1px solid black;">
					<a href="<?php echo upload_path; ?>document_listing/document/<?= $order[$i]->property_document;?>"target="_blank" class="btn btn-transparent green-meadow btn-outline btn-circle btn-sm active fa fa-download"><?= $order[$i]->property_title_search;?> </a>
					</td>

					<td style="text-align:center; border:1px solid black;">
					<?php echo $sta.' '.$ci ?>
					</td>
					</tr>
								<?php } ?>
					        </tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

            <p style="text-align:center;margin-bottom: 0rem;font-size:12px;">This is computer generated Report </p>
	</div>