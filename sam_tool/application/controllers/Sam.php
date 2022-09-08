<?php
   
   defined('BASEPATH') OR exit('No direct script access allowed');

   require_once APPPATH . 'libraries/REST_Controller.php';
     
 class Sam extends REST_Controller {
    
	  /**
     * Get All Data from this method.
     *
     * @return Response
    */   
    function __construct()
    {
        // Construct the parent class
        parent::__construct();
    }
    public function index_post() {
            $this->response(NULL, 200);
     }

    public function search()
	{
       // error_reporting(0);
        $batch_id = $this->input->post('batch_size');
        $city = $this->input->post('city_name');
        $state = $this->input->post('state_name');
        $bank = $this->input->post('bank_name');
        $property = $this->input->post('property_name');
        $area = $this->input->post('area_name');
        $offset = $this->input->post('offset');
        
        $datas= array(
            'city_id' =>(int)  $city,
            'state_id' =>(int)  $state, 
            'bank_id' =>(int) $bank, 
            'type_id' => (int) $property, 
            'locality' => (int) $area, 
            'batch_size' => (int) $batch_id,    
            'batch_number' => (int) $offset);      

        $object = (object) array_filter((array) $datas);
        header('Content-Type: application/json');
		$data = json_encode($object);

        log_message('error', $data);
        
        $url='http://host.docker.internal:3000/sam/v1/property/search';
        $this->curl_data($url,$data);
        //print_r($data);
        // $this->load->view('frontend/search_document', $data);
	}

    public function search_pagination()
	{
       // error_reporting(0);
        $batch_id = $this->input->post('batch_size');
        // $city = $this->input->post('city_name');
        // $state = $this->input->post('state_name');
        // $bank = $this->input->post('bank_name');
        // $property = $this->input->post('property_name');
        // $area = $this->input->post('area_name');
        $offset = $this->input->post('offset');
        
        $datas= array(
            // 'city_id' =>(int)  $city,
            // 'state_id' =>(int)  $state, 
            // 'bank_id' =>(int) $bank, 
            // 'type_id' => (int) $property, 
            // 'locality' => (int) $area, 
            'batch_size' => (int) $batch_id,    
            'batch_number' => (int) $offset);      

        $object = (object) array_filter((array) $datas);
        header('Content-Type: application/json');
		$data = json_encode($object);

        log_message('error', $data);
        
        $url='http://host.docker.internal:3000/sam/v1/property/search';
        $this->curl_data($url,$data);
        //print_r($data);
        redirect(base_url('frontend'));
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

   function user_get()
    {
        // respond with information about a user
    }

    function user_put()
    {
        // create a new user and respond with a status/errors
    }

    function user_post()
    {
        // update an existing user and respond with a status/errors
    }

    function user_delete()
    {
        // delete a user and respond with a status/errors
    }

}