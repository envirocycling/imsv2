<?php defined('BASEPATH') OR exit('No direct script access allowed');

class AppController extends CI_Controller {

	public function __construct() {

		parent::__construct();

        $this->efi_server = $this->config->item('efi_server');

	}

	public function index() {

		$data['content_view'] = 'views/pages/home.php';

        $data['efi_server'] = $this->efi_server;

		$this->load->view('layouts/app', $data);
	}

	public function receiving_daily_breakdown() {

		$data['content_view'] = 'views/pages/receiving-daily-breakdown.php';

        $data['link'] = "http://{$this->efi_server}/EFIReports/Pages/ReportViewer.aspx?%2fEFIReports%2fReceivingDailyBreakdown&rs:Command=Render";

		$this->load->view('layouts/app', $data);

	}

	public function supplier_deliveries() {

		$data['content_view'] = 'views/pages/supplier-deliveries.php';

        $data['link'] = "http://{$this->efi_server}/EFIReports/Pages/ReportViewer.aspx?%2fEFIReports%2fSupplierDeliveries&rs:Command=Render";

		$this->load->view('layouts/app', $data);

	}
	
	public function supplier_tonnage_summary() {

		$data['content_view'] = 'views/pages/supplier-tonnage-summary.php';

        $data['link'] = "http://{$this->efi_server}/EFIReports/Pages/ReportViewer.aspx?%2fEFIReports%2fSupplierTonageSummary&rs:Command=Render";

		$this->load->view('layouts/app', $data);

	}	
}
