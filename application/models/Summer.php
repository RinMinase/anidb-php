<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Summer extends CI_Model {
	public function getSummerData($id = NULL) {
		if (empty($id)) {
			$this->db->select('id, listTitle');
			$this->db->from('summer');

			return $this->db->get()->result();
		} else {
			$this->db->select('dateStart, dateEnd');
			$this->db->from('summer');
			$this->db->where('id', $id);
			$this->db->order_by('listTitle', 'ASC');

			return $this->db->get()->row();
		}
	}
}
