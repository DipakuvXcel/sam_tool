<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Description of Search
 *
 * @author https://roytuts.com
 */
class Search extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    function property($object) {
      //  $data = array('city_id' => $city, 'state_id' => $state, 'bank_id' => $bank, 'type_id' => $property, 'locality' => $area);
        //$json = json_encode($data);
       
        header('Content-Type: application/json');
		$json = json_encode($object);
        print_r($json);
        
    }

}