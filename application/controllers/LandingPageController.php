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

}
