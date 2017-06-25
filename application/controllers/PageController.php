<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PageController extends CI_Controller {
	public function __construct(){ parent::__construct(); }

	public function index()	{ $this->load->view('list'); }
	public function create() { $this->load->view('new'); }
}
