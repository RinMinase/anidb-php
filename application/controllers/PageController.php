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
	public function about() { $this->load->view('about'); }
}
