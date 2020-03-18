<?php 
 // model ini dibuat untuk memeriksa apakah terdapat data
class M_login extends CI_Model{	
	function cek_login($table,$where){	//function cek_login adalah method dari login untuk menentukan password & username benar atau salah pada controller login	
		return $this->db->get_where($table,$where);
	}	
}