<?php
class Product_model extends CI_Model {
    public function get_property($page,$row_per_page)
    {
        $data = array(
                        'pages' =>  $page,
                        'batch_size'    =>  $row_per_page
        );
        $models = json_encode($data);
        print_r($models);

    }
}
?>