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

		$raw_data = $this->defaultmodel->getAnimeByNameNeededData();

		for ($i=0; $i < 27; $i++) {
			$data['animeDataByName'][$i]['animeFilesize'] = 0;
			$data['animeDataByName'][$i]['animeData'] = array();
		}

		foreach ($raw_data as $item) {
			switch( strtoupper( substr($item->title, 0, 1) ) ) {
				case '0': case '1':	case '2':
				case '3':	case '4':	case '5':
				case '6':	case '7':	case '8':
				case '9':
					array_push($data['animeDataByName'][0]['animeData'], $item);
					$data['animeDataByName'][0]['animeFilesize'] += $item->filesize;

					if (empty($data['animeDataByName'][0]['animeLetter'])) {
						$data['animeDataByName'][0]['animeLetter'] = strtoupper( substr($item->title, 0, 1) );
					}

					break;
				case 'A':
					array_push($data['animeDataByName'][1]['animeData'], $item);
					$data['animeDataByName'][1]['animeFilesize'] += $item->filesize;

					if (empty($data['animeDataByName'][1]['animeLetter'])) {
						$data['animeDataByName'][1]['animeLetter'] = strtoupper( substr($item->title, 0, 1) );
					}

					break;
				case 'B':
					array_push($data['animeDataByName'][2]['animeData'], $item);
					$data['animeDataByName'][2]['animeFilesize'] += $item->filesize;

					if (empty($data['animeDataByName'][2]['animeLetter'])) {
						$data['animeDataByName'][2]['animeLetter'] = strtoupper( substr($item->title, 0, 1) );
					}

					break;
				case 'C':
					array_push($data['animeDataByName'][3]['animeData'], $item);
					$data['animeDataByName'][3]['animeFilesize'] += $item->filesize;

					if (empty($data['animeDataByName'][3]['animeLetter'])) {
						$data['animeDataByName'][3]['animeLetter'] = strtoupper( substr($item->title, 0, 1) );
					}

					break;
				case 'D':
					array_push($data['animeDataByName'][4]['animeData'], $item);
					$data['animeDataByName'][4]['animeFilesize'] += $item->filesize;

					if (empty($data['animeDataByName'][4]['animeLetter'])) {
						$data['animeDataByName'][4]['animeLetter'] = strtoupper( substr($item->title, 0, 1) );
					}

					break;
				case 'E':
					array_push($data['animeDataByName'][5]['animeData'], $item);
					$data['animeDataByName'][5]['animeFilesize'] += $item->filesize;

					if (empty($data['animeDataByName'][5]['animeLetter'])) {
						$data['animeDataByName'][5]['animeLetter'] = strtoupper( substr($item->title, 0, 1) );
					}

					break;
				case 'F':
					array_push($data['animeDataByName'][6]['animeData'], $item);
					$data['animeDataByName'][6]['animeFilesize'] += $item->filesize;

					if (empty($data['animeDataByName'][6]['animeLetter'])) {
						$data['animeDataByName'][6]['animeLetter'] = strtoupper( substr($item->title, 0, 1) );
					}

					break;
				case 'G':
					array_push($data['animeDataByName'][7]['animeData'], $item);
					$data['animeDataByName'][7]['animeFilesize'] += $item->filesize;

					if (empty($data['animeDataByName'][7]['animeLetter'])) {
						$data['animeDataByName'][7]['animeLetter'] = strtoupper( substr($item->title, 0, 1) );
					}

					break;
				case 'H':
					array_push($data['animeDataByName'][8]['animeData'], $item);
					$data['animeDataByName'][8]['animeFilesize'] += $item->filesize;

					if (empty($data['animeDataByName'][8]['animeLetter'])) {
						$data['animeDataByName'][8]['animeLetter'] = strtoupper( substr($item->title, 0, 1) );
					}

					break;
				case 'I':
					array_push($data['animeDataByName'][9]['animeData'], $item);
					$data['animeDataByName'][9]['animeFilesize'] += $item->filesize;

					if (empty($data['animeDataByName'][9]['animeLetter'])) {
						$data['animeDataByName'][9]['animeLetter'] = strtoupper( substr($item->title, 0, 1) );
					}

					break;
				case 'J':
					array_push($data['animeDataByName'][10]['animeData'], $item);

					if (empty($data['animeDataByName'][10]['animeLetter'])) {
						$data['animeDataByName'][10]['animeLetter'] = strtoupper( substr($item->title, 0, 1) );
					}

					$data['animeDataByName'][10]['animeFilesize'] += $item->filesize;

					break;
				case 'K':
					array_push($data['animeDataByName'][11]['animeData'], $item);
					$data['animeDataByName'][11]['animeFilesize'] += $item->filesize;

					if (empty($data['animeDataByName'][11]['animeLetter'])) {
						$data['animeDataByName'][11]['animeLetter'] = strtoupper( substr($item->title, 0, 1) );
					}

					break;
				case 'L':
					array_push($data['animeDataByName'][12]['animeData'], $item);
					$data['animeDataByName'][12]['animeFilesize'] += $item->filesize;

					if (empty($data['animeDataByName'][12]['animeLetter'])) {
						$data['animeDataByName'][12]['animeLetter'] = strtoupper( substr($item->title, 0, 1) );
					}

					break;
				case 'M':
					array_push($data['animeDataByName'][13]['animeData'], $item);
					$data['animeDataByName'][13]['animeFilesize'] += $item->filesize;

					if (empty($data['animeDataByName'][13]['animeLetter'])) {
						$data['animeDataByName'][13]['animeLetter'] = strtoupper( substr($item->title, 0, 1) );
					}

					break;
				case 'N':
					array_push($data['animeDataByName'][14]['animeData'], $item);
					$data['animeDataByName'][14]['animeFilesize'] += $item->filesize;

					if (empty($data['animeDataByName'][14]['animeLetter'])) {
						$data['animeDataByName'][14]['animeLetter'] = strtoupper( substr($item->title, 0, 1) );
					}

					break;
				case 'O':
					array_push($data['animeDataByName'][15]['animeData'], $item);
					$data['animeDataByName'][15]['animeFilesize'] += $item->filesize;

					if (empty($data['animeDataByName'][15]['animeLetter'])) {
						$data['animeDataByName'][15]['animeLetter'] = strtoupper( substr($item->title, 0, 1) );
					}

					break;
				case 'P':
					array_push($data['animeDataByName'][16]['animeData'], $item);
					$data['animeDataByName'][16]['animeFilesize'] += $item->filesize;

					if (empty($data['animeDataByName'][16]['animeLetter'])) {
						$data['animeDataByName'][16]['animeLetter'] = strtoupper( substr($item->title, 0, 1) );
					}

					break;
				case 'Q':
					array_push($data['animeDataByName'][17]['animeData'], $item);
					$data['animeDataByName'][17]['animeFilesize'] += $item->filesize;

					if (empty($data['animeDataByName'][17]['animeLetter'])) {
						$data['animeDataByName'][17]['animeLetter'] = strtoupper( substr($item->title, 0, 1) );
					}

					break;
				case 'R':
					array_push($data['animeDataByName'][18]['animeData'], $item);
					$data['animeDataByName'][18]['animeFilesize'] += $item->filesize;

					if (empty($data['animeDataByName'][18]['animeLetter'])) {
						$data['animeDataByName'][18]['animeLetter'] = strtoupper( substr($item->title, 0, 1) );
					}

					break;
				case 'S':
					array_push($data['animeDataByName'][19]['animeData'], $item);
					$data['animeDataByName'][19]['animeFilesize'] += $item->filesize;

					if (empty($data['animeDataByName'][19]['animeLetter'])) {
						$data['animeDataByName'][19]['animeLetter'] = strtoupper( substr($item->title, 0, 1) );
					}

					break;
				case 'T':
					array_push($data['animeDataByName'][20]['animeData'], $item);
					$data['animeDataByName'][20]['animeFilesize'] += $item->filesize;

					if (empty($data['animeDataByName'][20]['animeLetter'])) {
						$data['animeDataByName'][20]['animeLetter'] = strtoupper( substr($item->title, 0, 1) );
					}

					break;
				case 'U':
					array_push($data['animeDataByName'][21]['animeData'], $item);
					$data['animeDataByName'][21]['animeFilesize'] += $item->filesize;

					if (empty($data['animeDataByName'][21]['animeLetter'])) {
						$data['animeDataByName'][21]['animeLetter'] = strtoupper( substr($item->title, 0, 1) );
					}

					break;
				case 'V':
					array_push($data['animeDataByName'][22]['animeData'], $item);
					$data['animeDataByName'][22]['animeFilesize'] += $item->filesize;

					if (empty($data['animeDataByName'][22]['animeLetter'])) {
						$data['animeDataByName'][22]['animeLetter'] = strtoupper( substr($item->title, 0, 1) );
					}

					break;
				case 'W':
					array_push($data['animeDataByName'][23]['animeData'], $item);
					$data['animeDataByName'][23]['animeFilesize'] += $item->filesize;

					if (empty($data['animeDataByName'][23]['animeLetter'])) {
						$data['animeDataByName'][23]['animeLetter'] = strtoupper( substr($item->title, 0, 1) );
					}

					break;
				case 'X':
					array_push($data['animeDataByName'][24]['animeData'], $item);
					$data['animeDataByName'][24]['animeFilesize'] += $item->filesize;

					if (empty($data['animeDataByName'][24]['animeLetter'])) {
						$data['animeDataByName'][24]['animeLetter'] = strtoupper( substr($item->title, 0, 1) );
					}

					break;
				case 'Y':
					array_push($data['animeDataByName'][25]['animeData'], $item);
					$data['animeDataByName'][25]['animeFilesize'] += $item->filesize;

					if (empty($data['animeDataByName'][25]['animeLetter'])) {
						$data['animeDataByName'][25]['animeLetter'] = strtoupper( substr($item->title, 0, 1) );
					}

					break;
				case 'Z':
					array_push($data['animeDataByName'][26]['animeData'], $item);
					$data['animeDataByName'][26]['animeFilesize'] += $item->filesize;

					if (empty($data['animeDataByName'][26]['animeLetter'])) {
						$data['animeDataByName'][26]['animeLetter'] = strtoupper( substr($item->title, 0, 1) );
					}

					break;
			}
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
