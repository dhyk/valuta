<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = [
			//'header' => 'header',
			'content' => 'page-login',
			//'footer' => 'footer',
			];

		echo view('template',$data);
	}

	public function login()
	{
		return redirect()->to(site_url('Dashboard'));
	}
}
