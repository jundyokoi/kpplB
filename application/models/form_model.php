<?php
class Form_Model extends CI_Model {

	function __construct() {
        parent::__construct();
    }

    public function insert($data) {
    	$this->db->insert('applicant', $data);
    }

}
?>