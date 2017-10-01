<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DefaultController extends CI_Controller {

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
			$data['durationHour'] = explode(":", $this->input->get('duration'))[0];
			$data['durationMinute'] = explode(":", $this->input->get('duration'))[1];
			$data['durationSecond'] = explode(":", $this->input->get('duration'))[2];
		}

		if ($this->input->get('encoder')) $data['encoder'] = $this->input->get('encoder');
		if ($this->input->get('variants')) $data['variants'] = $this->input->get('variants');
		if ($this->input->get('remarks')) $data['remarks'] = $this->input->get('remarks');

		// $this->defaultmodel->addAnimeData($data);

		redirect("/");
	}

}
