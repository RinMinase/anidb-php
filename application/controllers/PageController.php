<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PageController extends CI_Controller {
	public function __construct() { parent::__construct(); }

	public function index()	{
		$this->load->model('defaultmodel');
		$data['animeData'] = $this->defaultmodel->getAnimeData();

		$this->load->view('index', $data);
	}

	public function create() { $this->load->view('add'); }

	public function other_lists() { $this->load->view('other-lists'); }

	public function download_list() { $this->load->view('download'); }

	public function hdd_list() { $this->load->view('hdd'); }

	public function hdd_simulator() { $this->load->view('hdd-simulator'); }

	public function about() { $this->load->view('about'); }
}
