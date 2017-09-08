<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DefaultController extends CI_Controller {
	public function __construct() { parent::__construct(); }

	public function addEntry() {
		$data['watchStatus'] = $this->input->get('watchStatus');
		$data['quality'] = $this->input->get('quality');
		$data['title'] = $this->input->get('title');

		if ($this->input->get('episodes')) {
			$data['episodes'] = $this->input->get('episodes');
		}

		if ($this->input->get('ovas')) {
			$data['ovas'] = $this->input->get('ovas');
		}

		if ($this->input->get('specials')) {
			$data['specials'] = $this->input->get('specials');
		}

		if ($this->input->get('seasonNumber')) {
			$data['seasonNumber'] = $this->input->get('seasonNumber');
		}

		if ($this->input->get('dateFinished')) {
			$data['dateFinished'] = $this->input->get('dateFinished');
		}

		if ($this->input->get('filesize')) {
			$data['filesize'] = $this->input->get('filesize');
		}

		if ($this->input->get('releaseSeason')) {
			$data['releaseSeason'] = $this->input->get('releaseSeason');
		}

		if ($this->input->get('releaseYear')) {
			$data['releaseYear'] = $this->input->get('releaseYear');
		}

		if ($this->input->get('duration')) {
			$data['durationHour'] = explode(":", $this->input->get('duration'))[0];
			$data['durationMinute'] = explode(":", $this->input->get('duration'))[1];
			$data['durationSecond'] = explode(":", $this->input->get('duration'))[2];
		}

		if ($this->input->get('encoder')) {
			$data['encoder'] = $this->input->get('encoder');
		}
		if ($this->input->get('variants')) {
			$data['variants'] = $this->input->get('variants');
		}
		if ($this->input->get('remarks')) {
			$data['remarks'] = $this->input->get('remarks');
		}

		// print_r($data);

		// $this->load->model('defaultmodel');
		// $this->defaultmodel->addAnimeData($data);

		redirect("/");
	}
}
