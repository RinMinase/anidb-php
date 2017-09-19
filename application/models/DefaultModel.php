<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DefaultModel extends CI_Model {
	public function __construct() { parent::__construct(); }

	public function getAnimeData() {
		$this->db->select('*');
		$this->db->from('anime');
		$this->db->order_by('quality', 'ASC');

		return $this->db->get()->result();
	}

	public function getLast20AnimeData() {
		$this->db->select('quality, episodes, ovas, specials, title, filesize, dateFinished');
		$this->db->from('anime');
		$this->db->order_by('dateFinished', 'DESC');
		$this->db->limit(20);

		return $this->db->get()->result();
	}

	public function addAnimeData($data) {
		$this->db->insert('anime', $data);
	}

}
