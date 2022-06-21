<?php defined('BASEPATH') OR exit('No direct script access allowed');

class AppController extends CI_Controller {

	public function __construct() {

		parent::__construct();

	}

	public function index() {

		$data['content_view'] = 'views/pages/home.php';

		$this->load->view('layouts/app', $data);
	}

	public function receiving_daily_breakdown() {

		$data['content_view'] = 'views/pages/receiving-daily-breakdown.php';

		$this->load->view('layouts/app', $data);

	}

	public function supplier_deliveries() {

		$data['content_view'] = 'views/pages/supplier-deliveries.php';

		$this->load->view('layouts/app', $data);

	}
	
	public function supplier_tonnage_summary() {

		$data['content_view'] = 'views/pages/supplier-tonnage-summary.php';

		$this->load->view('layouts/app', $data);

	}	
}
