<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HDDListController extends CI_Controller {

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

}
