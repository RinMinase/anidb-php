<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DefaultModel extends CI_Model {

	public function getAnimeData($query = NULL) {
		if (empty($query)) {
			$this->db->select('
				id,
				watchStatus,
				quality,
				title,
				episodes,
				ovas,
				specials,
				filesize,
				seasonNumber,
				firstSeasonTitle,
				dateFinished,
				releaseSeason,
				releaseYear,
				durationHour,
				durationMinute,
				durationSecond,
				encoder,
				variants,
				remarks,
				inHDD
			');
			$this->db->from('anime');
			$this->db->order_by('quality', 'ASC');

			return $this->db->get()->result();
		} else {
			$this->db->select('
				id,
				watchStatus,
				quality,
				title,
				episodes,
				ovas,
				specials,
				filesize,
				seasonNumber,
				firstSeasonTitle,
				dateFinished,
				releaseSeason,
				releaseYear,
				durationHour,
				durationMinute,
				durationSecond,
				encoder,
				variants,
				remarks,
				inHDD
			');
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

			if (!empty($query['inhdd']) || $query['inhdd'] == 'false') {
				switch($query['inhdd']) {
					case 'true': $this->db->where('inhdd', TRUE); break;
					case 'false': $this->db->where('inhdd', FALSE); break;
				}
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

	public function getAnimeDataAddNeededData() {
		$this->db->select('title');
		$this->db->from('anime');
		$this->db->where('seasonNumber !=', 0);
		$this->db->order_by('firstSeasonTitle', 'ASC');
		$this->db->order_by('seasonNumber', 'ASC');

		return $this->db->get()->result();
	}

	public function getAnimeDataViewById($id) {
		$this->db->select('*');
		$this->db->from('anime');
		$this->db->where('id', $id);

		return $this->db->get()->row();
	}

	public function getAnimeDataViewByTitle($title) {
		$this->db->select('id');
		$this->db->from('anime');
		$this->db->where('title', $title);

		return $this->db->get()->row()->id;
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
		if (is_null($year) && is_null($season)) {
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

	public function getAnimeHDDNeededData($from, $to)	{
		$charList = Array();
		for($i = ord($from); $i <= ord($to); $i++) {
			array_push($charList, chr($i));
		}

		$this->db->select('quality, title, filesize');
		$this->db->from('anime');
		$this->db->where('inHDD', 1);
		$this->db->group_start();

		foreach ($charList as $char) {
			$this->db->or_like('title', $char, 'after');
		}

		$this->db->group_end();
		$this->db->order_by('title', 'ASC');

		return $this->db->get()->result();
	}

	public function getHDDData() {
		$this->db->select('from, to, hddSize');
		$this->db->from('hdd');

		return $this->db->get()->result();
	}

}
