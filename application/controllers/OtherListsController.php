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

	public function summer_list($id = NULL)	{
		$data['summerLists'] = $this->defaultmodel->getSummerListData();
		if (!empty($data['summerLists'])) {
			if (empty($id)) {
				$data['currentList'] = $data['summerLists'][0]->id;
				$list_info = $this->defaultmodel->getSummerListData($data['summerLists'][0]->id);
			}	else {
				$data['currentList'] = $id;
				$list_info = $this->defaultmodel->getSummerListData($id);
			}

			$data['summerData'] = $this->defaultmodel->getAnimeDataByDate($list_info->dateStart, $list_info->dateEnd);

			if (!empty($data['summerData'])) {

				$data['statsUHDCount'] = $data['statsFHDCount'] = $data['statsHDCount'] = 0;
				$data['statsHQCount'] = $data['statsLQCount'] = 0;
				$data['statsTotalFilesize'] = 0;
				$data['statsTotalEpisodes'] = 0;

				foreach ($data['summerData'] as $item) {

					switch ($item->quality) {
						case "4K 2160p": $data['statsUHDCount']++; break;
						case "FHD 1080p": $data['statsFHDCount']++; break;
						case "HD 720p": $data['statsHDCount']++; break;
						case "HQ 480p": $data['statsHQCount']++; break;
						case "LQ 360p": $data['statsLQCount']++; break;
					}

					$data['statsTotalFilesize'] += $item->filesize;
					$data['statsTotalEpisodes'] += $item->episodes + $item->ovas + $item->specials;

				}

				$data['statsTotalFilesize'] = round($data['statsTotalFilesize'] / 1073741824, 2);

				$data['statsDayCount'] = date_diff(
					date_create($list_info->dateStart),
					date_create($list_info->dateEnd),
					TRUE
				)->format('%a');

				$data['statsTotalTitles'] = count($data['summerData']);
				$data['statsEpisodesPerDay'] = round($data['statsTotalEpisodes'] / $data['statsDayCount'], 2);
				$data['statsTitlesPerDay'] = round($data['statsTotalTitles'] / $data['statsDayCount'], 2);

			}

		}

		$navbar['activePage'] = "summer-list";
		$navbar['customTitle'] = "Summer List";
		$footer['customJS'] = "resources/js/summer-list/scripts.js";

		$this->displaylibrary->display_page('other-lists/summer-list', $navbar, $data, $footer);
	}

}
