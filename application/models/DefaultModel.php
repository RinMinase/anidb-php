<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DefaultModel extends CI_Model {
	public function __construct() { parent::__construct(); }

	public function getAnimeData($query = NULL) {
		if (empty($query)) {
			$this->db->select('*');
			$this->db->from('anime');
			$this->db->order_by('quality', 'ASC');

			return $this->db->get()->result();
		} else {
			$this->db->select('*');
			$this->db->from('anime');

			if (!empty($query['title'])) {
				$this->db->like('title', $query['title']);
				$this->db->or_like('variants', $query['title']);
			}

			if (!empty($query['quality'])) {
				$this->db->like('quality', $query['quality']);
			}

			if (!empty($query['release'])) {
				if ( count( explode(" ", $query['release']) ) > 1) {
					$tempSeason = explode(" ", $query['release'])[0];
					$tempYear = explode(" ", $query['release'])[1];

					$this->db->like('releaseSeason', $tempSeason);
					$this->db->like('releaseYear', $tempYear);
				} else {
					$this->db->like('releaseSeason', $query['release']);
					$this->db->or_like('releaseYear', $query['release']);
				}
			}

			if (!empty($query['encoder'])) {
				$this->db->like('encoder', $query['encoder']);
			}

			if (!empty($query['remarks'])) {
				$this->db->like('remarks', $query['remarks']);
			}

			if (!empty($query['sort'])) {
				if ( count( explode(" ", $query['sort']) ) > 1 ) {

					$tempSort = explode(" ", $query['sort'])[0];
					$tempSortOrder = strtolower(explode(" ", $query['sort'])[1]);

					if ($this->isValidOrderColumn($tempSort)) {
						switch($tempSortOrder) {
							case "desc": $this->db->order_by($tempSort, 'DESC'); break;
							default: $this->db->order_by($tempSort, 'ASC'); break;
						}
					} else {
						$this->db->order_by('quality', 'ASC');
					}

				} else {
					if ($this->isValidOrderColumn($query['sort'])) {
						$this->db->order_by($query['sort'], 'ASC');
					} else {
						$this->db->order_by('quality', 'ASC');
					}
				}
			} else {
				$this->db->order_by('quality', 'ASC');
			}

			return $this->db->get()->result();
		}
	}

	private function isValidOrderColumn($columnName) {
		switch($columnName) {
			case 'quality':
			case 'title':
			case 'episodes':
			case 'ovas':
			case 'specials':
			case 'filesize':
			case 'datefinished':
			case 'seasonnumber':
			case 'releaseseason':
			case 'releaseyear':
			case 'encoder':
				return true;
			default:
				return false;
		}
	}

	public function getAnimeDataNew($select, $order, $like, $limit) {

	}

	public function getLast20AnimeData() {
		$this->db->select('quality, episodes, ovas, specials, title, filesize, dateFinished');
		$this->db->from('anime');
		$this->db->order_by('dateFinished', 'DESC');
		$this->db->limit(20);

		return $this->db->get()->result();
	}

	public function getAnimeStatisticsNeededData() {
		$this->db->select('quality, episodes, ovas, specials, filesize, durationHour, durationMinute, durationSecond');
		$this->db->from('anime');
		$this->db->order_by('quality', 'ASC');

		return $this->db->get()->result();
	}

	public function getAnimeByNameNeededData() {
		$this->db->select('quality, title, filesize');
		$this->db->from('anime');
		$this->db->order_by('title', 'ASC');

		return $this->db->get()->result();
	}

	public function getDownloadData($year = NULL, $season = NULL) {
		if (empty($year) && empty($season)) {
			$this->db->select('status, season, year');
			$this->db->from('downloads');

			$this->db->order_by('year', 'ASC');
			$this->db->order_by('season', 'ASC');
			$this->db->order_by('status', 'DESC');
		} else {
			$this->db->select('id, title, status, priority, remarks');
			$this->db->from('downloads');

			$this->db->where('year', $year);
			$this->db->where('season', $season);

			$this->db->order_by('year', 'ASC');
			$this->db->order_by('season', 'ASC');
			$this->db->order_by('status', 'DESC');
			$this->db->order_by('priority', 'DESC');
			$this->db->order_by('title', 'ASC');
		}

		return $this->db->get()->result();
	}

	public function addAnimeData($data) {
		$this->db->insert('anime', $data);
	}

}
