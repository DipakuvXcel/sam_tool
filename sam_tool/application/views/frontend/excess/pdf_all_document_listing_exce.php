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
		<h4 class="myheading" style="text-align:center;"><b>All Employee Record Report</b></h4>
	</table>
	<div  id="invoice-template" class="card-body">
	
	<!-- Invoice Company Details -->
	<div style="solid black; font-size: 12px;"> 
		<table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse;" width="100%">
			<thead>
            <tr>
            <th>Sr.No.</th>
        	<th>Name</th>
            <th>Email-id</th>
            <th>Contact</th>
            <th>Pan Number</th>
            <th>Address-1</th>
            <th>Address-2</th>
            <th>City</th>
            <th>State</th>
            <th>Country</th>
            <th>Pin Code</th>
            <th>Status</th>
            <?php for($i=0;$i<count($employee_report);$i++){ ?>
									<tr class="odd gradeX">
										<td><?= $i+1; ?></td>
										<td><?= $employee_report[$i]->name;?></td>
										<td><?= $employee_report[$i]->email; ?></td>
										<td><?= $employee_report[$i]->contact; ?></td>
										<td><?= $employee_report[$i]->pan_number; ?></td>
										<td><?=$employee_report[$i]->address1; ?></td>
										<td><?= $employee_report[$i]->address2; ?></td>
										<td><?=$employee_report[$i]->city; ?></td>
										<td><?= $employee_report[$i]->state; ?></td>
										<td><?= $employee_report[$i]->country;?></td>
										<td><?= $employee_report[$i]->pincode;?></td>
										<td> <?php if($employee_report[$i]->status == 1) { echo 'Active'; }
											else if($employee_report[$i]->status == 2) {	echo 'Inactive'; } 
											else if($employee_report[$i]->status == 3) {	echo 'Pending'; } ?></td>
	
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