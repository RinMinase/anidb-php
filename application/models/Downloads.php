<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Downloads extends CI_Model {
	public function getDownloadData($year = NULL, $season = NULL) {
		if (is_null($year) && is_null($season)) {
			$this->db->select('status, season, year');
			$this->db->from('downloads');

			$this->db->order_by('year', 'DESC');
			$this->db->order_by('season', 'ASC');
			$this->db->order_by('status', 'DESC');
		} else {
			$this->db->select('id, title, status, priority, remarks');
			$this->db->from('downloads');

			$this->db->where('year', $year);
			$this->db->where('season', $season);

			$this->db->order_by('status', 'DESC');
			$this->db->order_by('priority', 'DESC');
			$this->db->order_by('title', 'ASC');
		}

		return $this->db->get()->result();
	}
}
