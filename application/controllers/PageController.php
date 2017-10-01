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
