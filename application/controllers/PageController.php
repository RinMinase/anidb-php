<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PageController extends CI_Controller {
	public function __construct() { parent::__construct(); }

	public function index()	{
		$this->load->model('defaultmodel');
		$data['animeData'] = $this->defaultmodel->getAnimeData();

		$this->load->view('index', $data);
	}

	public function add() { $this->load->view('add'); }

	public function other_lists() {
		/**
		 * LAST 20
		 */

		$this->load->model('defaultmodel');
		$data['last20AnimeData'] = $this->defaultmodel->getLast20AnimeData();

		$data['totalEpisodes'] = 0;
		foreach ($data['last20AnimeData'] as $item) {
			$data['totalEpisodes'] += $item->episodes + $item->ovas + $item->specials;
		}

		$date_today = date_create(date("Y-m-d"));
		$last20_length = count($data['last20AnimeData']);

		$date_first_entry = date_create($data['last20AnimeData'][0]->dateFinished);
		$date_last_entry = date_create($data['last20AnimeData'][$last20_length - 1]->dateFinished);

		$date_diff_first = date_diff($date_first_entry, $date_today)->format('%a');
		$date_diff_last = date_diff($date_last_entry, $date_today)->format('%a');

		$data['titlesPerDay'] = round($last20_length / $date_diff_last, 2);
		$data['singleSeasonPerDay'] = round(($data['totalEpisodes'] / 12) / $date_diff_last, 2);
		$data['episodesPerDay'] = round($data['totalEpisodes'] / $date_diff_last,	2);
		$data['daysSinceLastAnime'] = $date_diff_first;

		/**
		 * LIST BY NAME
		 */

		// $raw_animeByNameData = $this->defaultmodel->getAnimeByNameNeededData();
		// $data['animeByName_a'];

		// foreach ($raw_animeByNameData as $item) {
		// 	switch (substr($item->title, 0, 1)) {
		// 		case
		// 	}
		// }

		$data['animeByName_a_filesize'] = $data['animeByName_b_filesize'] = 0;
		$data['animeByName_c_filesize'] = $data['animeByName_d_filesize'] = 0;
		$data['animeByName_e_filesize'] = $data['animeByName_f_filesize'] = 0;
		$data['animeByName_g_filesize'] = $data['animeByName_h_filesize'] = 0;
		$data['animeByName_i_filesize'] = $data['animeByName_j_filesize'] = 0;
		$data['animeByName_k_filesize'] = $data['animeByName_l_filesize'] = 0;
		$data['animeByName_m_filesize'] = $data['animeByName_n_filesize'] = 0;
		$data['animeByName_o_filesize'] = $data['animeByName_p_filesize'] = 0;
		$data['animeByName_q_filesize'] = $data['animeByName_r_filesize'] = 0;
		$data['animeByName_s_filesize'] = $data['animeByName_t_filesize'] = 0;
		$data['animeByName_u_filesize'] = $data['animeByName_v_filesize'] = 0;
		$data['animeByName_w_filesize'] = $data['animeByName_x_filesize'] = 0;
		$data['animeByName_y_filesize'] = $data['animeByName_z_filesize'] = 0;

		$data['animeByName_a'] = $this->defaultmodel->getAnimeByNameNeededData('a');
		foreach ($data['animeByName_a'] as $item) {
			$data['animeByName_a_filesize'] += $item->filesize;
		}

		$data['animeByName_b'] = $this->defaultmodel->getAnimeByNameNeededData('b');
		foreach ($data['animeByName_b'] as $item) {
			$data['animeByName_b_filesize'] += $item->filesize;
		}

		$data['animeByName_c'] = $this->defaultmodel->getAnimeByNameNeededData('c');
		foreach ($data['animeByName_c'] as $item) {
			$data['animeByName_c_filesize'] += $item->filesize;
		}

		$data['animeByName_d'] = $this->defaultmodel->getAnimeByNameNeededData('d');
		foreach ($data['animeByName_d'] as $item) {
			$data['animeByName_d_filesize'] += $item->filesize;
		}

		$data['animeByName_e'] = $this->defaultmodel->getAnimeByNameNeededData('e');
		foreach ($data['animeByName_e'] as $item) {
			$data['animeByName_e_filesize'] += $item->filesize;
		}

		$data['animeByName_f'] = $this->defaultmodel->getAnimeByNameNeededData('f');
		foreach ($data['animeByName_f'] as $item) {
			$data['animeByName_f_filesize'] += $item->filesize;
		}

		$data['animeByName_g'] = $this->defaultmodel->getAnimeByNameNeededData('g');
		foreach ($data['animeByName_g'] as $item) {
			$data['animeByName_g_filesize'] += $item->filesize;
		}

		$data['animeByName_h'] = $this->defaultmodel->getAnimeByNameNeededData('h');
		foreach ($data['animeByName_h'] as $item) {
			$data['animeByName_h_filesize'] += $item->filesize;
		}

		$data['animeByName_i'] = $this->defaultmodel->getAnimeByNameNeededData('i');
		foreach ($data['animeByName_i'] as $item) {
			$data['animeByName_i_filesize'] += $item->filesize;
		}

		$data['animeByName_j'] = $this->defaultmodel->getAnimeByNameNeededData('j');
		foreach ($data['animeByName_j'] as $item) {
			$data['animeByName_j_filesize'] += $item->filesize;
		}

		$data['animeByName_k'] = $this->defaultmodel->getAnimeByNameNeededData('k');
		foreach ($data['animeByName_k'] as $item) {
			$data['animeByName_k_filesize'] += $item->filesize;
		}

		$data['animeByName_l'] = $this->defaultmodel->getAnimeByNameNeededData('l');
		foreach ($data['animeByName_l'] as $item) {
			$data['animeByName_l_filesize'] += $item->filesize;
		}

		$data['animeByName_m'] = $this->defaultmodel->getAnimeByNameNeededData('m');
		foreach ($data['animeByName_m'] as $item) {
			$data['animeByName_m_filesize'] += $item->filesize;
		}

		$data['animeByName_n'] = $this->defaultmodel->getAnimeByNameNeededData('n');
		foreach ($data['animeByName_n'] as $item) {
			$data['animeByName_n_filesize'] += $item->filesize;
		}

		$data['animeByName_o'] = $this->defaultmodel->getAnimeByNameNeededData('o');
		foreach ($data['animeByName_o'] as $item) {
			$data['animeByName_o_filesize'] += $item->filesize;
		}

		$data['animeByName_p'] = $this->defaultmodel->getAnimeByNameNeededData('p');
		foreach ($data['animeByName_p'] as $item) {
			$data['animeByName_p_filesize'] += $item->filesize;
		}

		$data['animeByName_q'] = $this->defaultmodel->getAnimeByNameNeededData('q');
		foreach ($data['animeByName_q'] as $item) {
			$data['animeByName_q_filesize'] += $item->filesize;
		}

		$data['animeByName_r'] = $this->defaultmodel->getAnimeByNameNeededData('r');
		foreach ($data['animeByName_r'] as $item) {
			$data['animeByName_r_filesize'] += $item->filesize;
		}

		$data['animeByName_s'] = $this->defaultmodel->getAnimeByNameNeededData('s');
		foreach ($data['animeByName_s'] as $item) {
			$data['animeByName_s_filesize'] += $item->filesize;
		}

		$data['animeByName_t'] = $this->defaultmodel->getAnimeByNameNeededData('t');
		foreach ($data['animeByName_t'] as $item) {
			$data['animeByName_t_filesize'] += $item->filesize;
		}

		$data['animeByName_u'] = $this->defaultmodel->getAnimeByNameNeededData('u');
		foreach ($data['animeByName_u'] as $item) {
			$data['animeByName_u_filesize'] += $item->filesize;
		}

		$data['animeByName_v'] = $this->defaultmodel->getAnimeByNameNeededData('v');
		foreach ($data['animeByName_v'] as $item) {
			$data['animeByName_v_filesize'] += $item->filesize;
		}

		$data['animeByName_w'] = $this->defaultmodel->getAnimeByNameNeededData('w');
		foreach ($data['animeByName_w'] as $item) {
			$data['animeByName_w_filesize'] += $item->filesize;
		}

		$data['animeByName_x'] = $this->defaultmodel->getAnimeByNameNeededData('x');
		foreach ($data['animeByName_x'] as $item) {
			$data['animeByName_x_filesize'] += $item->filesize;
		}

		$data['animeByName_y'] = $this->defaultmodel->getAnimeByNameNeededData('y');
		foreach ($data['animeByName_y'] as $item) {
			$data['animeByName_y_filesize'] += $item->filesize;
		}

		$data['animeByName_z'] = $this->defaultmodel->getAnimeByNameNeededData('z');
		foreach ($data['animeByName_z'] as $item) {
			$data['animeByName_z_filesize'] += $item->filesize;
		}

		$this->load->view('other-lists', $data);
	}

	public function download_list() { $this->load->view('download'); }

	public function hdd_list() { $this->load->view('hdd'); }

	public function hdd_simulator() { $this->load->view('hdd-simulator'); }

	public function about() {
		$this->load->model('defaultmodel');
		$raw_data = $this->defaultmodel->getAnimeStatisticsNeededData();

		$total_hours = $total_minutes = $total_seconds = 0;
		$total_filesize = 0;
		$data['totalEpisodes'] = 0;
		$data['totalUHD'] = $data['totalFHD'] = $data['totalHD'] = 0;
		$data['totalLQ'] = $data['totalHQ'] = 0;

		foreach ($raw_data as $item) {
			$total_hours += $item->durationHour;
			$total_minutes += $item->durationMinute;
			$total_seconds += $item->durationSecond;

			$total_filesize += $item->filesize;
			$data['totalEpisodes'] += $item->episodes + $item->ovas + $item->specials;

			switch ($item->quality) {
				case "4K 2160p": $data['totalUHD']++; break;
				case "FHD 1080p": $data['totalFHD']++; break;
				case "HD 720p": $data['totalHD']++; break;
				case "HQ 480p": $data['totalHQ']++; break;
				case "LQ 360p": $data['totalLQ']++; break;
			}

		}

		$reference_date = new DateTime('2000-01-01');
		$watch_total = $reference_date->setTime($total_hours, $total_minutes, $total_seconds);

		$data['totalWatchDays'] = $watch_total->format("j") - 1;
		$data['totalWatchHours'] = $watch_total->format("G");
		$data['totalWatchMinutes'] = $watch_total->format("i");
		$data['totalWatchSeconds'] = $watch_total->format("s");

		$data['totalSizeGB'] = round($total_filesize / 1073741824, 2);
		$data['totalSizeTB'] = round($total_filesize / 1099511627776, 2);

		$this->load->view('about', $data);
	}
}
