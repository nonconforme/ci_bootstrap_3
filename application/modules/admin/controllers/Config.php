<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Config extends Admin_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->mTitle = 'Parameters - ';
		$this->push_breadcrumb('Parameters');
	}

	public function index()
	{
		redirect('config/parameters');
	}

	// AdminLTE Components
	public function parameters()
	{
		$this->mTitle.= 'Cms Parameters';

		$crud = $this->generate_crud('parameters');
		$this->render_crud();
	}
}
