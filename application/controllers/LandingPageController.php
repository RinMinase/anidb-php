<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LandingPageController extends CI_Controller {

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

	public function view($id)	{
		$data['animeData'] = $this->defaultmodel->getAnimeDataViewById($id);
		if (!empty($data['animeData']->prequel)) {
			$data['prequelId'] = $this->defaultmodel->getAnimeDataViewByTitle($data['animeData']->prequel);
		}

		if (!empty($data['animeData']->sequel)) {
			$data['sequelId'] = $this->defaultmodel->getAnimeDataViewByTitle($data['animeData']->sequel);
		}

		$navbar['activePage'] = "view";
		$navbar['customTitle'] = $data['animeData']->title;

		$this->displaylibrary->display_page('view', $navbar, $data);
	}

	public function addEntry() {
		$data['watchStatus'] = $this->input->get('watchStatus');
		$data['quality'] = $this->input->get('quality');
		$data['title'] = $this->input->get('title');

		if ($this->input->get('episodes')) $data['episodes'] = $this->input->get('episodes');
		if ($this->input->get('ovas')) $data['ovas'] = $this->input->get('ovas');
		if ($this->input->get('specials')) $data['specials'] = $this->input->get('specials');

		if ($this->input->get('seasonNumber')) $data['seasonNumber'] = $this->input->get('seasonNumber');
		if ($this->input->get('dateFinished')) $data['dateFinished'] = $this->input->get('dateFinished');

		if ($oldFilesize = $this->input->get('filesize')) {

			for ($i=0, $j=0; $i < strlen($oldFilesize); $i++) {
				switch ($oldFilesize[$i]) {
					case '0':	case '1':	case '2':	case '3':	case '4':
					case '5':	case '6':	case '7':	case '8':	case '9':
						$newFilesize[$j++] = $oldFilesize[$i];
					break;
				}
			}

			$data['filesize'] = join($newFilesize);
		}

		if ($this->input->get('releaseSeason')) $data['releaseSeason'] = $this->input->get('releaseSeason');
		if ($this->input->get('releaseYear')) $data['releaseYear'] = $this->input->get('releaseYear');

		if ($this->input->get('duration')) {
			$raw_duration = explode(":", $this->input->get('duration'));

			$data['durationHour'] = $raw_duration[0];
			$data['durationMinute'] = $raw_duration[1];
			$data['durationSecond'] = $raw_duration[2];
		}

		if ($this->input->get('encoder')) $data['encoder'] = $this->input->get('encoder');
		if ($this->input->get('variants')) $data['variants'] = $this->input->get('variants');
		if ($this->input->get('remarks')) $data['remarks'] = $this->input->get('remarks');

		// $this->defaultmodel->addAnimeData($data);

		redirect("/");
	}

}
