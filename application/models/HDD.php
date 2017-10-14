<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HDD extends CI_Model {
	public function getHDDData() {
		$this->db->select('from, to, hddSize');
		$this->db->from('hdd');

		return $this->db->get()->result();
	}
}
