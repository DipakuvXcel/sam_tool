<?php
/*************************************************
	* Author: Dipak	
	* Project : Stressed Asset Management(SAM) Tool	
 ************************************************/
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontend extends CI_Controller {
	function set_flashdata($type, $message){
		if($type == 'success'){
			$this->session->set_flashdata('success_message', $message);
		}else{
			$this->session->set_flashdata('failed_message', $message);
		}
	}
/*temp used table show*/
	public function index(){
			
		$url = 'http://host.docker.internal:3000/sam/v1/property/by-state';
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_TIMEOUT, 5);
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$testdi = curl_exec($ch);
		$state=json_decode($testdi);
		//print_r($testdi);
		curl_close($ch);	
		
		$url = 'http://host.docker.internal:3000/sam/v1/property/by-category';
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_TIMEOUT, 5);
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$testdipa = curl_exec($ch);
		$property_types=json_decode($testdipa);
		//print_r($testdipa);
		curl_close($ch);
	
		$url = 'http://host.docker.internal:3000/sam/v1/property/by-bank';
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_TIMEOUT, 5);
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$testdipak = curl_exec($ch);
		$bank=json_decode($testdipak);
		//print_r($testdipak);
		curl_close($ch);

		$url = 'http://host.docker.internal:3000/sam/v1/property/search';
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_TIMEOUT, 5);
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$searchresult = curl_exec($ch);
		$results=json_decode($searchresult,true);
		//$result=json_decode(json_encode($object), true);
		curl_close($ch);
		//print_r($results);exit;
		$data = array('state' => $state,'property_types' => $property_types,'bank' => $bank);
		 
		$data['results'] = $results;

		//$data['active_menu'] = 'dashboard';
		
		$this->load->view('frontend/dashboard', $data);
	}

	public function table(){
		$url = 'http://host.docker.internal:3000/sam/v1/userRegistration/getusers';
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_TIMEOUT, 5);
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$test = curl_exec($ch);
		$document_listing=json_decode($test);
		//print_r($test);
		curl_close($ch);
		$data['document_listing'] = $document_listing;
		$this->load->view('frontend/table',$data);
	}
	
	public function login(){
		redirect(base_url('frontend/login'));
	}

	public function register(){
		$this->load->view('frontend/register_cust');
	}

	public function register1(){
		$this->load->view('frontend/register_org');
	}

	public function do_login(){
		$where = array('email' => $_POST['email_id'], 'password' => hash('sha256', $_POST['password']));
		$json = json_encode($where);
		echo $json;
	}

	public function save_organization(){
		$where = array(
				'organization_type' => $_POST['orgtyp'],
				'company_name' => $_POST['cname'],
				'gst_number' => $_POST['gst'],
				'tan_number' => $_POST['tan_no'],
				'cin_number' => $_POST['cin_no'],
				'address' => $_POST['address'],
				'locality' => $_POST['locality'],
				'city' => $_POST['city'],
				'zip' => $_POST['zip'],
				'state' => $_POST['state'],
				'landline_number' => $_POST['lanno'],
				'mobile_number' => $_POST['mono'],
				'email' => $_POST['email'],
				//'password' =>  hash('sha256', $_POST['password'])
			);
			$json = json_encode($where);
			echo $json;
	}

	public function save_customer(){
			$where = array(
				'First Name' => $_POST['fname'],
				'Middle Name' => $_POST['mname'],
				'Last Name' => $_POST['lname'],
				'Aadhar Number' => $_POST['adhar_no'],
				'PAN Number' => $_POST['pan_no'],
				'address' => $_POST['address'],
				'locality' => $_POST['locality'],
				'city' => $_POST['city'],
				'zip' => $_POST['zip'],
				'state' => $_POST['state'],
				'landline_number' => $_POST['lanno'],
				'mobile_number' => $_POST['mono'],
				'email' => $_POST['email'],
				//'password' =>  hash('sha256', $_POST['password'])
			);
			$json = json_encode($where);
			echo $json;
	}

	function logout(){
		redirect(base_url('frontend'));
	}
	
	/*  Reset password */
	// forgost password view
	function forgot_password(){
		$this->load->view('frontend/forgot-pwd');
	}
	
	function change_password(){
		$data['active_menu'] = 'dashboard';
		$this->load->view('frontend/change_password', $data);
	}


	function dashboard(){

		$url = 'http://host.docker.internal:3000/sam/v1/property/by-state';
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_TIMEOUT, 5);
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$testdi = curl_exec($ch);
		$state=json_decode($testdi);
		//print_r($testdi);
		curl_close($ch);	
		
		$url = 'http://host.docker.internal:3000/sam/v1/property/by-category';
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_TIMEOUT, 5);
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$testdipa = curl_exec($ch);
		$property_types=json_decode($testdipa);
		//print_r($testdipa);
		curl_close($ch);
	
		$url = 'http://host.docker.internal:3000/sam/v1/property/by-bank';
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_TIMEOUT, 5);
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$testdipak = curl_exec($ch);
		$bank=json_decode($testdipak);
		//print_r($testdipak);
		curl_close($ch);

		$url = 'http://host.docker.internal:3000/sam/v1/property/search';
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_TIMEOUT, 5);
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$searchresult = curl_exec($ch);
		$results=json_decode($searchresult,true);
		//$result=json_decode(json_encode($object), true);
		curl_close($ch);
		
		$data = array('city' => $city,'state' => $state,'address' => $address,'property_types' => $property_types,'bank' => $bank);
		
		$data['results'] = $results;
		
		$data['active_menu'] = 'dashboard';
		
		$this->load->view('frontend/dashboard', $data);
	}

	public function pagination(){
        $row = $_POST['row'];
        $row_per_page = 10;
		$this->load->model("Property_model");
        $proprty = $this->Product_model->get_property($row,$row_per_page);
    }

	function search_product_report()
	{
		//error_reporting(0);
		$city = $_POST['city_name'];
		$state = $_POST['state_name'];
		$bank = $_POST['bank_name'];
		$property = $_POST['property_name'];
		$area = $_POST['area_name'];
		
		$data = array(
			'city_id' => $city,
			'state_id' => $state,
			'bank_id' => $bank,
			'type_id' => $property,
			'locality' => $area
		);
		$this->load->view('frontend/search_document', $data);
		//redirect(base_url('frontend/search_document/.$data'));
	}

	function dashboardsearch(){

		//$this->check_login();
		$url = 'http://host.docker.internal:8181/sam/search';
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_TIMEOUT, 5);
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$testd = curl_exec($ch);
		$city=json_decode($testd);
		//print_r($testd);
		curl_close($ch);

	print_r($city);
	}

	function search_product_reportd()
	{
		$data = array(
			'city_id' => $_POST['city_name'],
			'state_id' => $_POST['state_name'],
			'bank_id' => $_POST['bank_name'],
			'type_id' => $_POST['property_name'],
			'locality' => $_POST['area_name']
		);
		$json = json_encode($data);
		print_r($json);
		//$this->load->view('frontend/document_listing', $data);
	}

	function property_details()
	{
		
		$this->load->view('frontend/property_details');
	}

	function getCity(){
        print $_REQUEST['state_name'];
		$state_id=(int)$_POST['state_name'];
		$datas= array(
            'state_id' =>(int)  $state_id,
                );
       $data = json_encode($datas);

        log_message('error', $data);
        $url = 'http://host.docker.internal:3000/sam/v1/property/by-city';
        $this->curl_data($url,$data);

		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_TIMEOUT, 5);
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$testd = curl_exec($ch);
		$city=json_decode($testd);
		//print_r($testd);
		curl_close($ch);
		
        
            log_message('error', $city);
           $list='<option value="0">-- City --</option>';
				foreach($city AS $k ){
					$list.="<option value=".$k->city_id."> $k->city_name</option>";
				}
			print $list;
   	}

	function getAddresss(){
		//print $_REQUEST['city_name'];
		$city_id=(int)$_POST['city_name'];
		
        header('Content-Type: application/json');
		$data = json_encode($city_id);

        log_message('error', $data);
        $url = 'http://host.docker.internal:3000/sam/v1/property/by-Address';
        $this->curl_data($url,$data);

		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_TIMEOUT, 5);
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$testd = curl_exec($ch);
		$address=json_decode($testd);
		//print_r($testd);
		curl_close($ch);

		if(count($address) && is_array($address)){
			foreach($address AS $k => $v){
				 $address_list[$v->id]=$v->name;
			}
			$list='<option value="0">-- Sub-category --</option>';
			foreach($address_list AS $key=>$val){
					if(count($val) && is_array($val)){
						foreach($val AS $k => $v){
							$list.="<option value=".$k.">$v</option>";
						}
					}else{
						$list.="<option value=".$key.">$val</option>";
					}
			}
			print $list;
		}else{
			print "Address not present";
		}
   }

   function curl_data($url,$data)
   {
       $curl = curl_init($url);
       curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");

       curl_setopt($curl, CURLOPT_HTTPHEADER, array(
       'Content-Type: application/json',
       'Content-Length: ' . strlen($data))
       );

       curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);  // Make it so the data coming back is put into a string
       curl_setopt($curl, CURLOPT_POSTFIELDS, $data);  // Insert the data

       // Send the request
       $result = curl_exec($curl);
       // Free up the resources $curl is using
       curl_close($curl);
      // $this->load->view('frontend/search_document', $data);
       echo $result;
   }
	
		// GST number validation
		public function GSTcheck($str)
		{
			if ( !preg_match('/^([0][1-9]|[1-2][0-9]|[3][0-5])([a-zA-Z]{5}[0-9]{4}[a-zA-Z]{1}[1-9a-zA-Z]{1}[zZ]{1}[0-9a-zA-Z]{1})+$/i',$str) )
			{
				$this->form_validation->set_message('GSTcheck', 'The GST field must contain a valid gst number.');
				return FALSE;
			}else
			{
				return TRUE;
			}
		}
		
		// PAN number validation
		public function PANcheck($str)
		{
			if ( !preg_match('/^([a-zA-Z]){5}([0-9]){4}([a-zA-Z]){1}?$/i',$str) )
			{
				$this->form_validation->set_message('PANcheck', 'The PAN field must contain a valid pan number.');
				return FALSE;
			}else
			{
				return TRUE;
			}
		}

}
