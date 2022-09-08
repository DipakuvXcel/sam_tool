<?php
   
   defined('BASEPATH') OR exit('No direct script access allowed');

   require_once APPPATH . 'libraries/REST_Controller.php';
     
 class Api extends REST_Controller {
    
	  /**
     * Get All Data from this method.
     *
     * @return Response
    */   
     function __construct($config = 'rest') {
        parent::__construct($config);
    } 

    public function index_post() {
        $batch_id = $this->input->post('batch_size');
        $city = $this->input->post('city_name');
        $state = $this->input->post('state_name');
        $bank = $this->input->post('bank_name');
        $property = $this->input->post('property_name');
        $area = $this->input->post('area_name');
        

        $datas = array(
            'city_id' =>(int)  $city,
            'state_id' =>(int)  $state, 
            'bank_id' =>(int) $bank, 
            'type_id' => (int) $property, 
            'locality' => (int) $area, 
            'batch_size' => (int) $batch_id);      
        

        //$object =array_filter($datas);
        header('Content-Type: application/json');
		$data = json_encode($datas);
		//print_r($data);
        $this->index_post($data, 200);
     $this->index_post(['Item send successfully.'], REST_Controller::HTTP_OK);
     }

    public function search_product_report()
	{
       // error_reporting(0);
        $batch_id = $this->input->post('batch_size');
        $city = $this->input->post('city_name');
        $state = $this->input->post('state_name');
        $bank = $this->input->post('bank_name');
        $property = $this->input->post('property_name');
        $area = $this->input->post('area_name');
        

        $datas = array(city_id => (int) $city, state_id =>(int)  $state, bank_id =>(int) $bank, type_id => (int) $property, locality => (int) $area, batch_size => (int) $batch_id);
      
        

        $object = (object) array_filter((array) $datas);
        header('Content-Type: application/json');
		$data = json_encode($object);
		//print_r($data);
        $this->index_post($data, 200);
        $this->index_post(['Item send successfully.'], REST_Controller::HTTP_OK);
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