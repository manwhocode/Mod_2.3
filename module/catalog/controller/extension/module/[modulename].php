<?php
class ControllerExtensionModule[modulename] extends Controller {
	public function index() {
		$this->load->language('extension/module/[modulename]');

		$data['heading_title'] = $this->language->get('heading_title');

		return $this->load->view('extension/module/[modulename]', $data);
	}
}