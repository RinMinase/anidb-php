<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HDDListController extends CI_Controller {

	public function hdd_list() {
		$data['hddData'] = $this->defaultmodel->getHDDData();

		$data['animeJQ'] = $this->defaultmodel->getAnimeHDDNeededData('J', 'Q');
		$data['countJQ'] = count($data['animeJQ']);

		$data['filesizeJQ'] = 0;
		foreach ($data['animeJQ'] as $item) {
			$data['filesizeJQ'] += $item->filesize;
		}

		$data['toJQ'] = strtoupper($data['hddData'][0]->to);
		$data['fromJQ'] = strtoupper($data['hddData'][0]->from);
		$data['percentJQ'] = round( ($data['filesizeJQ'] / $data['hddData'][0]->hddSize) * 100  ,1);
		$data['freeJQ'] = round( ($data['hddData'][0]->hddSize - $data['filesizeJQ']) / 1073741824, 2);
		$data['usedJQ'] = round($data['filesizeJQ'] / 1073741824, 2);
		$data['totalJQ'] = round($data['hddData'][0]->hddSize / 1073741824, 2);

		$data['animeRZ'] = $this->defaultmodel->getAnimeHDDNeededData('R', 'Z');
		$data['countRZ'] = count($data['animeRZ']);

		$data['filesizeRZ'] = 0;
		foreach ($data['animeRZ'] as $item) {
			$data['filesizeRZ'] += $item->filesize;
		}

		$data['toRZ'] = strtoupper($data['hddData'][1]->to);
		$data['fromRZ'] = strtoupper($data['hddData'][1]->from);
		$data['percentRZ'] = round( ($data['filesizeRZ'] / $data['hddData'][1]->hddSize) * 100  ,1);
		$data['freeRZ'] = round( ($data['hddData'][1]->hddSize - $data['filesizeRZ']) / 1073741824, 2);
		$data['usedRZ'] = round($data['filesizeRZ'] / 1073741824, 2);
		$data['totalRZ'] = round($data['hddData'][1]->hddSize / 1073741824, 2);

		$navbar['activePage'] = "hdd-list";
		$navbar['customTitle'] = "HDD List";

		$this->displaylibrary->display_page('hdd-list/hdd-list', $navbar, $data);
	}

	public function hdd_simulator() {
		$navbar['activePage'] = "hdd-simulator";
		$navbar['customTitle'] = "Disk Simulator";
		$navbar['customCSS'] = "resources/css/hdd-simulator/styles.css";

		$this->displaylibrary->display_page('hdd-list/hdd-simulator', $navbar);
	}

}
