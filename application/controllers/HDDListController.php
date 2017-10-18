<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HDDListController extends CI_Controller {

	public function hdd_list() {
		$data['hddData'] = $this->hdd->getHDDData();

		foreach ($data['hddData'] as $item) {
			$temp['animeData'] = $this->anime->getAnimeDataByLetterRange($item->from, $item->to);
			$temp['count'] = count($temp['animeData']);

			$temp['filesize'] = 0;
			foreach ($temp['animeData'] as $subitem) {
				$temp['filesize'] += $subitem->filesize;
			}

			$temp['to'] = strtoupper($item->to);
			$temp['from'] = strtoupper($item->from);
			$temp['percent'] = round( ($temp['filesize'] / $item->hddSize) * 100  ,1);
			$temp['free'] = round( ($item->hddSize - $temp['filesize']) / 1073741824, 2);
			$temp['used'] = round($temp['filesize'] / 1073741824, 2);
			$temp['total'] = round($item->hddSize / 1073741824, 2);

			$data['animeByHDD'][] = $temp;
		}

		$navbar['activePage'] = "hdd-list";
		$navbar['customTitle'] = "HDD List";

		$this->display->display_page('hdd-list/hdd-list', $navbar, $data);
	}

	public function hdd_simulator() {
		if ( empty($this->input->post('from')) || empty($this->input->post('to')) ) {
			$data['hddData'] = $this->hdd->getHDDData();
		} else {
			$oldData = $this->input->post('oldData');
			$newFrom = strtolower($this->input->post('from'));
			$newTo = strtolower($this->input->post('to'));

			$data['hddData'] = $this->_rearrangeHDD($oldData, $newFrom, $newTo);
		}

		$this->display->print_pretty($data['hddData']);

		foreach ($data['hddData'] as $item) {
			$temp['animeData'] = $this->anime->getAnimeDataByLetterRange($item->from, $item->to);
			$temp['count'] = count($temp['animeData']);

			$temp['filesize'] = 0;
			foreach ($temp['animeData'] as $subitem) {
				$temp['filesize'] += $subitem->filesize;
			}

			$temp['to'] = strtoupper($item->to);
			$temp['from'] = strtoupper($item->from);
			$temp['percent'] = round( ($temp['filesize'] / $item->hddSize) * 100  ,1);
			$temp['free'] = round( ($item->hddSize - $temp['filesize']) / 1073741824, 2);
			$temp['used'] = round($temp['filesize'] / 1073741824, 2);
			$temp['total'] = round($item->hddSize / 1073741824, 2);

			$data['animeByHDD'][] = $temp;
		}

		$navbar['activePage'] = "hdd-simulator";
		$navbar['customTitle'] = "Disk Simulator";
		$navbar['customCSS'] = "resources/css/hdd-simulator/styles.css";

		$this->display->display_page('hdd-list/hdd-simulator', $navbar, $data);
	}

	private function _rearrangeHDD($oldData, $newFrom, $newTo) {
		$newData = '{"from":"' . $newFrom . '","to":"' . $newTo . '","hddSize":"1000169533440"},';
		$splicedOldData = substr($oldData, 1, -1);
		$mergedData = "[" . $newData . $splicedOldData . "]";

		$hddData = json_decode($mergedData);

		for ($i=1; $i < 27; $i++) {
			$letters[$i] = -1;
		}

		for ($hdd = 0; $hdd < count($hddData); $hdd++) {
			for ($char = ord($hddData[$hdd]->from) - 96; $char <= ord($hddData[$hdd]->to) - 96; $char++) {
				if ($letters[$char] == -1) {
					$letters[$char] = $hdd;
				}
			}
		}

		$oldLetter = $letters[1];
		for ($i=1; $i < 27; $i++) {
			if($letters[$i] != -1) {
				if($letters[$i] != $oldLetter) {
					$hddData[$letters[$i-1]]->to = chr($i - 1 + 96);
					$hddData[$letters[$i]]->from = chr($i + 96);
					$oldLetter = $letters[$i];
				}
			}
		}

		usort($hddData, function ($a, $b) {
			return ord($a->from) > ord($b->from);
		});

		return $hddData;
	}
}
