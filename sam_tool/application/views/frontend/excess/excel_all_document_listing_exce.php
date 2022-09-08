<?php
error_reporting(0);

		$filename1 = "report_employee_excel.xls";
		$exists = file_exists('report_employee_excel.xls');
			if($exists)
			{
				unlink($filename1);
			}
 
		//$filename1 = "report_employee_excel.xls";
		$filename1 = "report_employee_excel_".date('Y-m-d').".xls";
		
		$fp = fopen($filename1, "wb");
			
		$insert_rows.= 'Id' . "\t".'Employee Name' . "\t" . 'Contact' . "\t" . 'Email ' . "\t" . 'Pan Number' . "\t" . 'Address-1' . "\t" . 'Address-2' . "\t" . 'City' ."\t". 'State'."\t".'Country' ."\t" . 'Pincode'. "\t" .'Status' ."\n\n";
		   fwrite($fp, $insert_rows);
			
		   /* Insert Data */
		   $cnt=1;
		 
		   for($i=0;$i<count($employee_report);$i++){
			 
				$cust_name= $employee_report[$i]->name;
				$cust_contact= $employee_report[$i]->contact;
				$cust_email= $employee_report[$i]->email;
				$cust_address1= $employee_report[$i]->address1;
				$cust_address2= $employee_report[$i]->address2;
				$cust_city= $employee_report[$i]->city;
				$cust_state=$employee_report[$i]->state;
				$cust_country=$employee_report[$i]->country;
				$cust_pincode= $employee_report[$i]->pincode;
				$pan= $employee_report[$i]->pan_number;
				$status= $employee_report[$i]->status;
				if($status==1){
					$status='Active';
				}else if($status==2){
					$status='Deactive';
				}else if($status==3){
					$status='Not Verified';
				}else{
					$status='Deleted';
				}
				
				
				$insertb =$cnt++. "\t". $cust_name. "\t" .$cust_contact. "\t" .$cust_email. "\t" .$pan. "\t" .$cust_address1. "\t" .$cust_address2. "\t" .$cust_city. "\t".$cust_state."\t".$cust_country."\t".$cust_pincode. "\t".$status."\n";
				   
				fwrite($fp, $insertb);
				 
		}
			 
		 
		   if (!is_resource($fp))
		   {
					 echo "cannot open excel file";
		   }
		   //echo "success full export";
		   fclose($fp);
		   
	header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header("Content-Disposition: attachment; filename=\"" . basename($filename1) . "\";");
    header('Content-Transfer-Encoding: binary');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($filename1));
    ob_clean();
    flush();
    readfile($filename1); //showing the path to the server where the file is to be download
    exit;


?>