<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class OtherListsController extends CI_Controller {

	public function last_watch() {
		$data['last20AnimeData'] = $this->defaultmodel->getLast20AnimeData();

		$data['totalEpisodes'] = 0;
		foreach ($data['last20AnimeData'] as $item) {
			$data['totalEpisodes'] += $item->episodes + $item->ovas + $item->specials;
		}

		$date_today = date_create(date("Y-m-d"));
		$last20_length = count($data['last20AnimeData']);

		$date_first_entry = date_create($data['last20AnimeData'][0]->dateFinished);
		$date_last_entry = date_create($data['last20AnimeData'][$last20_length - 1]->dateFinished);

		$date_diff_first = date_diff($date_first_entry, $date_today)->format('%a');
		$date_diff_last = date_diff($date_last_entry, $date_today)->format('%a');

		$data['titlesPerDay'] = round($last20_length / $date_diff_last, 2);
		$data['singleSeasonPerDay'] = round(($data['totalEpisodes'] / 12) / $date_diff_last, 2);
		$data['episodesPerDay'] = round($data['totalEpisodes'] / $date_diff_last,	2);
		$data['daysSinceLastAnime'] = $date_diff_first;

		$navbar['activePage'] = "last-watch";
		$navbar['customTitle'] = "Last 20 Watched";

		$this->displaylibrary->display_page('other-lists/last-watch', $navbar, $data);
	}

	public function by_name() {
		$raw_data = $this->defaultmodel->getAnimeByNameNeededData();

		for ($i=0; $i < 27; $i++) {
			$data['animeDataByName'][$i]['animeFilesize'] = 0;
			$data['animeDataByName'][$i]['animeData'] = array();
		}

		foreach ($raw_data as $item) {
			$currentLetter = ord( strtoupper( substr($item->title, 0, 1) ) );

			if ($currentLetter >= 48 && $currentLetter <= 57) {
				array_push($data['animeDataByName'][0]['animeData'], $item);
				$data['animeDataByName'][0]['animeFilesize'] += $item->filesize;

				if (empty($data['animeDataByName'][0]['animeLetter'])) {
					$data['animeDataByName'][0]['animeLetter'] = chr($currentLetter);
				}
			} else if ($currentLetter >= 65 && $currentLetter <= 90) {
				array_push($data['animeDataByName'][$currentLetter - 64]['animeData'], $item);
				$data['animeDataByName'][$currentLetter - 64]['animeFilesize'] += $item->filesize;

				if (empty($data['animeDataByName'][$currentLetter - 64]['animeLetter'])) {
					$data['animeDataByName'][$currentLetter - 64]['animeLetter'] = chr($currentLetter);
				}
			}
		}

		$navbar['activePage'] = "by-name";
		$navbar['customTitle'] = "Anime by Name";

		$this->displaylibrary->display_page('other-lists/by-name', $navbar, $data);
	}

}
