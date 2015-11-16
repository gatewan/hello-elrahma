<?php
class Pdf extends CI_Controller{
	function__construct()
	{
		parent::__construct();
		$this->load->helper(array('url','northwind'));
		$this->load->database();
	}
}

?>
