<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DefaultModel extends CI_Model {
	public function __construct() { parent::__construct(); }

	public function getAnimeData()	{
		$this->db->select('*');
		$this->db->from('anime');

		return $this->db->get()->result();
	}

}
