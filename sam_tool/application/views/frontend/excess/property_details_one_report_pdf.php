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
<?php   $shop_logo =  get_company_logo($order_report[0]->shop_id);
        $shop_name =   get_company_name($order_report[0]->shop_id);
        $name =  get_employee_name($order_report[0]->employee_id);
        $add =  get_company_address($order_report[0]->shop_id);
        $phone =  get_company_contact($order_report[0]->shop_id);
        $email =  get_company_mail($order_report[0]->shop_id);
        $site =  get_company_site($order_report[0]->shop_id);
?>

<div id="printableArea">
<div style="solid black; border: 1px solid #000;"> 
    <table width="100%" >
       <h2 class="myheading" style="text-align:left; background:transparent;"><b> <img src="<?php echo assets_path; ?>images/<?=$shop_logo;?>"></b></h2>
      </table>
      <table border="1" cellpadding="4" cellspacing="4" style="border-collapse: collapse;" width="100%">
       <tbody>
            <tr>
                <td>
                <p style="text-align:center;margin-bottom: 0rem;font-size:14px;">
                <label><span><strong></strong></span><?=  $add ? : 'NA';?></label><br>
                <label ><span ><strong>Tel : </strong></span><?=  $phone ? : 'NA';?></label>&nbsp;&nbsp;
                <label><span><strong>Email : </strong></span><?= $email ? : 'NA'; ?></label>&nbsp;&nbsp;
                <label><span><strong>Web Site : </strong></span><?=    $site ? : 'NA'; ?></label>
                </p>                   
                </td>
            </tr>
    </table>
    <div  id="invoice-template" class="card-body">
    
    <!-- Invoice Company Details -->
    <div style="solid black; font-size: 15px;border: 1px solid #000;"> 
  
    <div class=" table-responsive">

    <table border="" cellpadding="4" cellspacing="4" style="border-collapse: collapse;" width="100%">
        <tbody>
            <tr>
                <td>
                    <label><span><strong>Receipt : </strong></span><?=  $order_report[0]->sr_no ? : 'NA';?></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <label ><span ><strong>Date : </strong></span><?=  $order_report[0]->date ? : 'NA';?></label><br><br>
                    <label><span><strong>Received with thanks from : </strong></span><?= $name? : 'NA'; ?></label><br><br>
                    <label><span><strong>Employee Code : </strong></span><?=    $order_report[0]->employee_code ? : 'NA'; ?></label><br><br>
                    <label><span><strong>PAN NO : </strong></span><?=   $order_report[0]->pan_number ? : 'NA'; ?></label><br><br>
                    <label><span><strong>a sum of Rs.  </strong></span><?=  $order_report[0]->amount ? : 'NA';?></label>&nbsp;&nbsp;&nbsp;
                    <label><span><strong>( In Words ) </strong></span>&nbsp;&nbsp;<?=  $order_report[0]->amt_words ? : 'NA'; ?></label><br><br>
                    <label><span><strong>By : </strong></span><?=  $order_report[0]->payment_type ? : 'NA'; ?></label><br><br>
                    <label><span><strong>as donation : </strong></span><?=  $order_report[0]->year ? : 'NA'; ?></label>
                </td>
           </tr>
        </table>
    <table border="" cellpadding="" cellspacing="" style="border-collapse: collapse;" width="100%">
        <tbody>
            <tr> 
                <td style="border:non;">            
                   <label><span><strong>INCOME TAX PAN : </strong></span><?=  $order_report[0]->sr_no ? : 'NA';?></label><br>
                   <label ><span ><strong>INCOME TAX EXEMPTION U/S80G </strong></span></label><br>
                   <label><span><strong>NO. DIT (E)MC/80G/2002/2009-10 Dated: 20-07-2009</strong></span></label><br>
                   <label ><span ><strong>This is an electronically generated receipt does not require signature </strong></span></label>
               </td>
               <td style="border:non;">     
                   <h3 style="text-align:center;"><b> <?=  $shop_name  ? : 'NA';?></b></h3><br>
                   <h3 style="text-align:center;margin-bottom: 2rem;"><b>Authorised Signature  </b ></h3>
                </td>
            </tr>
           </table>
    <table border="1" cellpadding="4" cellspacing="4" style="border-collapse: collapse;" width="100%">
        <tbody>
     
            <tr>
                <td>
                <p style="text-align:center;font-size:11px;">Donation Paid to National Association for Blind are Exempt from the payment of Income Tax within the limits prescribed for recognized charities</p>
                <p style="text-align:center;font-size:11px;"><b>Receipts</b> for donation exempted from Stamp Duty under exemption (b) to articles 53 to schedule 1 of India Stamp Act,1890</p>
                </td>
            </tr>
     </table>
</div>
</div>
</div>
</div>

<br><br><br><br>
<div>
   
    </div>
