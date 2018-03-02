<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
class User_model extends CI_Model {
 public $table = 'users';
    function __construct()
    {
        parent::__construct();
     
    }

	function get_all()
	{
	
        $query = $this->db->get($this->table);
		return $query->result();
		
	}
	
}
?>