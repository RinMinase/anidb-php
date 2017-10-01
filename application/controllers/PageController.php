<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PageController extends CI_Controller {

	public function index()	{
		$data['query'] = $this->input->get('q');

		if (empty($data['query'])) {
			$data['animeData'] = $this->defaultmodel->getAnimeData();
		} else {

			$raw_query = explode(',', strtolower($data['query']));

			foreach($raw_query as $query_item) {
				$query_item_data = explode(':', trim($query_item));
				if (empty($query_item_data[1])) {
					$keyword['title'] = $query_item_data[0];
				} else {

					switch($query_item_data[0]) {
						case "sort": case "order": $keyword['sort'] = $query_item_data[1]; break;
						case "quality": $keyword['quality'] = $query_item_data[1]; break;
						case "release": $keyword['release'] = $query_item_data[1]; break;
						case "encoder": $keyword['encoder'] = $query_item_data[1]; break;
						case "remarks": $keyword['remarks'] = $query_item_data[1]; break;
						case "inhdd": $keyword['inhdd'] = $query_item_data[1]; break;
					}

				}
			}

			if (empty($keyword)) {
				$data['animeData'] = $this->defaultmodel->getAnimeData();
			} else {
				$data['animeData'] = $this->defaultmodel->getAnimeData($keyword);
			}

		}

		$navbar['activePage'] = "index";
		$navbar['customCSS'] = "resources/data-tables-1.10.16/jquery.data-tables.min.css";
		$footer['customJS'] = "resources/js/index/scripts.js";

		$this->displaylibrary->display_page('index', $navbar, $data, $footer);
	}

	public function add() {
		$data['titleData'] = $this->defaultmodel->getAnimeDataAddNeededData();

		$navbar['activePage'] = "add";
		$navbar['customTitle'] = "Add an Entry";

		$this->displaylibrary->display_page('add', $navbar, $data);
	}

	public function last_watch() {
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

		$navbar['activePage'] = "last-watch";
		$navbar['customTitle'] = "Last 20 Watched";

		$this->displaylibrary->display_page('last-watch', $navbar, $data);
	}

	public function by_name() {
		$raw_data = $this->defaultmodel->getAnimeByNameNeededData();

		for ($i=0; $i < 27; $i++) {
			$data['animeDataByName'][$i]['animeFilesize'] = 0;
			$data['animeDataByName'][$i]['animeData'] = array();
		}

		foreach ($raw_data as $item) {
			$currentLetter = ord( strtoupper( substr($item->title, 0, 1) ) );

			if ($currentLetter >= 48 && $currentLetter <= 57) {
				array_push($data['animeDataByName'][0]['animeData'], $item);
				$data['animeDataByName'][0]['animeFilesize'] += $item->filesize;

				if (empty($data['animeDataByName'][0]['animeLetter'])) {
					$data['animeDataByName'][0]['animeLetter'] = chr($currentLetter);
				}
			} else if ($currentLetter >= 65 && $currentLetter <= 90) {
				array_push($data['animeDataByName'][$currentLetter - 64]['animeData'], $item);
				$data['animeDataByName'][$currentLetter - 64]['animeFilesize'] += $item->filesize;

				if (empty($data['animeDataByName'][$currentLetter - 64]['animeLetter'])) {
					$data['animeDataByName'][$currentLetter - 64]['animeLetter'] = chr($currentLetter);
				}
			}
		}

		$navbar['activePage'] = "by-name";
		$navbar['customTitle'] = "Anime by Name";

		$this->displaylibrary->display_page('by-name', $navbar, $data);
	}

	public function download_list($year = NULL, $season = NULL) {
		$raw_stats_query = $this->defaultmodel->getDownloadData();

		foreach($raw_stats_query as $item) {

			if (empty($item->season) && empty($item->year)) {

				if (empty($data['downloadUnsorted']['Watched'])) {
					$data['downloadUnsorted']['Watched'] = 0;
				}
				if (empty($data['downloadUnsorted']['Downloaded'])) {
					$data['downloadUnsorted']['Downloaded'] = 0;
				}
				if (empty($data['downloadUnsorted']['Queued'])) {
					$data['downloadUnsorted']['Queued'] = 0;
				}

				switch($item->status) {
					case 1: $data['downloadUnsorted']['Queued']++; break;
					case 2: $data['downloadUnsorted']['Downloaded']++; break;
					case 3: $data['downloadUnsorted']['Watched']++; break;
				}

			} else {

				if (empty($data['downloadSorted'][$item->year]['Year'])) {
					$data['downloadSorted'][$item->year]['Year'] = $item->year;
				}
				if (empty($data['downloadSorted'][$item->year]['Stats'][$item->season]['Season'])) {
					switch($item->season) {
						case 0: $data['downloadSorted'][$item->year]['Stats'][$item->season]['Season'] = "Winter"; break;
						case 1: $data['downloadSorted'][$item->year]['Stats'][$item->season]['Season'] = "Spring"; break;
						case 2: $data['downloadSorted'][$item->year]['Stats'][$item->season]['Season'] = "Summer"; break;
						case 3: $data['downloadSorted'][$item->year]['Stats'][$item->season]['Season'] = "Fall"; break;
					}
				}
				if (empty($data['downloadSorted'][$item->year]['Stats'][$item->season]['Watched'])) {
					$data['downloadSorted'][$item->year]['Stats'][$item->season]['Watched'] = 0;
				}
				if (empty($data['downloadSorted'][$item->year]['Stats'][$item->season]['Downloaded'])) {
					$data['downloadSorted'][$item->year]['Stats'][$item->season]['Downloaded'] = 0;
				}
				if (empty($data['downloadSorted'][$item->year]['Stats'][$item->season]['Queued'])) {
					$data['downloadSorted'][$item->year]['Stats'][$item->season]['Queued'] = 0;
				}

				switch($item->status) {
					case 1: $data['downloadSorted'][$item->year]['Stats'][$item->season]['Queued']++; break;
					case 2: $data['downloadSorted'][$item->year]['Stats'][$item->season]['Downloaded']++; break;
					case 3: $data['downloadSorted'][$item->year]['Stats'][$item->season]['Watched']++; break;
				}

			}

		}

		if (empty($year) && empty($season)) {
			$raw_data_query = $this->defaultmodel->getDownloadData(0, 0);
			$data['currentList'] = "unsorted";
		} else {
			switch (strtolower($season)) {
				case "winter": $raw_data_query = $this->defaultmodel->getDownloadData($year, 0); break;
				case "spring": $raw_data_query = $this->defaultmodel->getDownloadData($year, 1); break;
				case "summer": $raw_data_query = $this->defaultmodel->getDownloadData($year, 2); break;
				case "fall": $raw_data_query = $this->defaultmodel->getDownloadData($year, 3); break;
			}

			if (empty($raw_data_query)) show_404();
			$data['currentList'] = ucfirst($season) . " " . $year;
		}

		foreach($raw_data_query as $item) {
			if (empty($data['downloadDataStats']['Watched'])) {
				$data['downloadDataStats']['Watched'] = 0;
			}
			if (empty($data['downloadDataStats']['Downloaded'])) {
				$data['downloadDataStats']['Downloaded'] = 0;
			}
			if (empty($data['downloadDataStats']['Queued'])) {
				$data['downloadDataStats']['Queued'] = 0;
			}
			if (empty($data['downloadData']['Watched'])) {
				$data['downloadData']['Watched'] = Array();
			}
			if (empty($data['downloadData']['Downloaded'])) {
				$data['downloadData']['Downloaded'] = Array();
			}
			if (empty($data['downloadData']['Queued'])) {
				$data['downloadData']['Queued'] = Array();
			}

			switch($item->status) {
				case 1:
					$data['downloadDataStats']['Queued']++;
					array_push($data['downloadData']['Queued'], $item);
				break;
				case 2:
					$data['downloadDataStats']['Downloaded']++;
					array_push($data['downloadData']['Downloaded'], $item);
				break;
				case 3:
					$data['downloadDataStats']['Watched']++;
					array_push($data['downloadData']['Watched'], $item);
				break;
			}
		}

		$navbar['activePage'] = "download-list";
		$navbar['customTitle'] = "Download List";
		$navbar['customCSS'] = "resources/css/download-list/styles.css";

		$this->displaylibrary->display_page('download-list', $navbar, $data);
	}

	public function download_list_add() {
		$data = $this->defaultmodel->getAnimeData();

		$this->displaylibrary->print_pretty($data);
	}

	public function hdd_list() {
		$navbar['activePage'] = "hdd-list";
		$navbar['customTitle'] = "HDD List";

		$this->displaylibrary->display_page('hdd-list', $navbar);
	}

	public function hdd_simulator() {
		$navbar['activePage'] = "hdd-simulator";
		$navbar['customTitle'] = "Disk Simulator";
		$navbar['customCSS'] = "resources/css/hdd-simulator/styles.css";

		$this->displaylibrary->display_page('hdd-simulator', $navbar);
	}

	public function about() {
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

		$navbar['activePage'] = "about";
		$navbar['customTitle'] = "About Page";
		$navbar['customCSS'] = "resources/css/about/styles.css";

		$this->displaylibrary->display_page('about', $navbar, $data);
	}

}
