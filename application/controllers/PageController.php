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

	public function other_lists() { $this->load->view('other-lists'); }

	public function download_list() { $this->load->view('download'); }

	public function hdd_list() { $this->load->view('hdd'); }

	public function hdd_simulator() { $this->load->view('hdd-simulator'); }

	public function about() {
		$this->load->model('defaultmodel');
		$raw_data = $this->defaultmodel->getAnimeData();

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
