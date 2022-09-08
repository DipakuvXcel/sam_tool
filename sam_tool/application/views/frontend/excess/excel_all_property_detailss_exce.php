<?php
		$filename1 = "report_payment_excel.xls";
		$exists = file_exists('report_payment_excel.xls');
			if($exists)
			{
				unlink($filename1);
			}
 
		//$filename1 = "report_payment_excel.xls";
		$filename1 = "report_payment_excel".date('Y-m-d').".xls";
		
		$fp = fopen($filename1, "wb");
			
		$insert_rows.= 'Id' . "\t".'Year' . "\t" . 'Employee Code' . "\t" . 'Sr.No. ' . "\t" . 'Employee Name' . "\t" . 'Pan Number' . "\t" . 'Email Id' . "\t" . 'Amount' . "\t" .'Status' ."\n\n";
		   fwrite($fp, $insert_rows);
			   /* Insert Data */
		   $cnt=1;
		 
		   for($i=0;$i<count($order_report);$i++){
			 	$year= $order_report[$i]->year;
				$emp_code= $order_report[$i]->employee_code;
				$emp_amt= $order_report[$i]->amount;
				$snno= $order_report[$i]->sr_no;
				$panno= $order_report[$i]->pan_number;
				$status= $order_report[$i]->status;
				if($status==1){
					$status='Active';
				}else if($status==2){
					$status='Deactive';
				}else if($status==3){
					$status='Not Verified';
				}else{
					$status='Deleted';
				}
				$table = 'employee';
				$group_by = '';
				$order_by = 'id';
				$order2 = 'DESC';
				$where = array('id' => $order_report[$i]->employee_id);
				$order_detail = $this->user_model->get_common($table, $where,'*',1, '', $group_by, $order_by, $order2);
				$nm=$order_detail->name;
				$idem=$order_detail->email;

				$insertb =$cnt++. "\t". $year. "\t" .$emp_code. "\t" .$snno. "\t" .$nm. "\t" .$panno. "\t" .$idem. "\t" .$emp_amt. "\t".$status."\n";
				   
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