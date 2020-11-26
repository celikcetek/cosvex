<?php

class Anasayfa extends CI_Controller {
	public function index() {
		$data = array(
			'baslik' => 'Homepage'
		);

		$this->load->view('anasayfa/index', $data);
	}
}
