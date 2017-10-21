<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Display {

	public function display_page(
		$page,
		$navbar_data = NULL,
		$page_data = NULL,
		$footer_data = NULL) {

		get_instance()->load->view('navbar', $navbar_data);
		get_instance()->load->view($page, $page_data);
		get_instance()->load->view('footer', $footer_data);

		$enable_profiler = FALSE;
		if ($enable_profiler) {
			get_instance()->output->enable_profiler(TRUE);
		}
	}

	public function print_pretty($data = NULL) {
		echo "<pre><code>";
		print_r($data);
		echo "</code></pre>";
	}

}
