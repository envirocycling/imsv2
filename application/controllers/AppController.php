<?php defined('BASEPATH') OR exit('No direct script access allowed');

class AppController extends CI_Controller {

	public function __construct() {

		parent::__construct();

        $this->efi_server = $this->config->item('efi_server');

        $this->app_name = $this->config->item('app_name');

	}

	public function index() {

		$data['content_view'] = 'views/pages/home.php';

        $data['efi_server'] = $this->efi_server;

        $data['app_name'] = $this->app_name;

		$this->load->view('layouts/app', $data);
	}

	public function receiving_daily_breakdown() {

		$data['content_view'] = 'views/pages/receiving-daily-breakdown.php';

        $data['app_name'] = $this->app_name;

        $data['link'] = "http://{$this->efi_server}/EFIReports/Pages/ReportViewer.aspx?%2fEFIReports%2fReceivingDailyBreakdown&rs:Command=Render";

		$this->load->view('layouts/app', $data);

	}

	public function supplier_deliveries() {

		$data['content_view'] = 'views/pages/supplier-deliveries.php';

        $data['app_name'] = $this->app_name;

        $data['link'] = "http://{$this->efi_server}/EFIReports/Pages/ReportViewer.aspx?%2fEFIReports%2fSupplierDeliveries&rs:Command=Render";

		$this->load->view('layouts/app', $data);

	}
	
	public function supplier_tonnage_summary() {

		$data['content_view'] = 'views/pages/supplier-tonnage-summary.php';

        $data['app_name'] = $this->app_name;

        $data['link'] = "http://{$this->efi_server}/EFIReports/Pages/ReportViewer.aspx?%2fEFIReports%2fSupplierTonageSummary&rs:Command=Render";

		$this->load->view('layouts/app', $data);

	}	
}
