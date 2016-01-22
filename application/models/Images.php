<?php

/**
 * core/MY_Model.php
 *
 * Generic domain model.
 *
 * Intended to model both a single domain entity as well as a table.
 * This is consistent with CodeIgniter's interpretation of the Active Record
 * pattern, even though some of the functions are at the table level
 * while others are at the record level :-/
 *
 * Each such model is bound to a specific database table, using a designated
 * key field as the associative array index internally.
 */
class Images extends CI_Model {



    // Constructor

    function __construct()
    {
	parent::__construct();
	
    }
    
    function all()
    {
        $this->db->order_by('id','desc');
        $query = $this->db->get('images');
        return $query->result_array();
    }
    
    function newest()
    {
        $this->db->order_by('id','desc');
        $this->db->limit(3);
        $query = $this->db->get('images');
        return $query->result_array();
    }

}

$autoload['model'] = array('images');

/* End of file MY_Model.php */
/* Location: application/core/MY_Model.php */