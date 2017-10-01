<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DownloadListController extends CI_Controller {

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

		$this->displaylibrary->display_page('download-list/download-list', $navbar, $data);
	}

	public function download_list_add() {
		$data = $this->defaultmodel->getAnimeData();

		$this->displaylibrary->print_pretty($data);
	}

}
