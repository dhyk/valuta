<?php

namespace App\Controllers;

class Page extends BaseController
{
	public function index(){
        echo "index";
    }
    
    public function login()
	{
		$data = [
			//'header' => 'header',
			'content' => 'page-login',
			//'footer' => 'footer',
			];

		echo view('template',$data);
	}

    public function forgot_password()
	{
		$data = [
			//'header' => 'header',
			'content' => 'page-recoverpw',
			//'footer' => 'footer',
			];

		echo view('template',$data);
	}

    public function change_password()
	{
		$data = [
			//'header' => 'header',
			'content' => 'page-changepw',
			//'footer' => 'footer',
			];

		echo view('template',$data);
	}

    public function dashboard()
	{
		$data = [
			'header' => 'header',
			'content' => 'page-dashboard',
			'footer' => 'footer',
			];

		echo view('template',$data);
	}
//-----------------------------------------------------------------
    public function soal()
	{
		$data = [
			'header' => 'header',
			'content' => 'page-soal',
			'footer' => 'footer',
			];

		echo view('template',$data);
	}

    public function soal_detail()
	{
		$data = [
			'header' => 'header',
			'content' => 'page-soal-detail',
			'footer' => 'footer',
			];

		echo view('template',$data);
	}

    public function soal_tambah()
	{
		$data = [
			'header' => 'header',
			'content' => 'page-soal-tambah',
			'footer' => 'footer',
			];

		echo view('template',$data);
	}

    public function soal_edit()
	{
		$data = [
			'header' => 'header',
			'content' => 'page-soal-edit',
			'footer' => 'footer',
			];

		echo view('template',$data);
	}

//-----------------------------------------------------------------

	public function sesi()
	{
		$data = [
			'header' => 'header',
			'content' => 'page-sesi',
			'footer' => 'footer',
			];

		echo view('template',$data);
	}

    public function sesi_detail()
	{
		$data = [
			'header' => 'header',
			'content' => 'page-sesi-detail',
			'footer' => 'footer',
			];

		echo view('template',$data);
	}

    public function sesi_tambah()
	{
		$data = [
			'header' => 'header',
			'content' => 'page-sesi-tambah',
			'footer' => 'footer',
			];

		echo view('template',$data);
	}

    public function sesi_edit()
	{
		$data = [
			'header' => 'header',
			'content' => 'page-sesi-edit',
			'footer' => 'footer',
			];

		echo view('template',$data);
	}

//-----------------------------------------------------------------

public function paket()
{
	$data = [
		'header' => 'header',
		'content' => 'page-paket',
		'footer' => 'footer',
		];

	echo view('template',$data);
}

public function paket_detail()
{
	$data = [
		'header' => 'header',
		'content' => 'page-paket-detail',
		'footer' => 'footer',
		];

	echo view('template',$data);
}

public function paket_tambah()
{
	$data = [
		'header' => 'header',
		'content' => 'page-paket-tambah',
		'footer' => 'footer',
		];

	echo view('template',$data);
}

public function paket_edit()
{
	$data = [
		'header' => 'header',
		'content' => 'page-paket-edit',
		'footer' => 'footer',
		];

	echo view('template',$data);
}

//-----------------------------------------------------------------

public function peserta()
{
	$data = [
		'header' => 'header',
		'content' => 'page-peserta',
		'footer' => 'footer',
		];

	echo view('template',$data);
}

public function peserta_detail()
{
	$data = [
		'header' => 'header',
		'content' => 'page-peserta-detail',
		'footer' => 'footer',
		];

	echo view('template',$data);
}

public function peserta_tambah()
{
	$data = [
		'header' => 'header',
		'content' => 'page-peserta-tambah',
		'footer' => 'footer',
		];

	echo view('template',$data);
}

public function peserta_edit()
{
	$data = [
		'header' => 'header',
		'content' => 'page-peserta-edit',
		'footer' => 'footer',
		];

	echo view('template',$data);
}


//-----------------------------------------------------------------

public function grup()
{
	$data = [
		'header' => 'header',
		'content' => 'page-grup',
		'footer' => 'footer',
		];

	echo view('template',$data);
}

public function grup_detail()
{
	$data = [
		'header' => 'header',
		'content' => 'page-grup-detail',
		'footer' => 'footer',
		];

	echo view('template',$data);
}

public function grup_tambah()
{
	$data = [
		'header' => 'header',
		'content' => 'page-grup-tambah',
		'footer' => 'footer',
		];

	echo view('template',$data);
}

public function grup_edit()
{
	$data = [
		'header' => 'header',
		'content' => 'page-grup-edit',
		'footer' => 'footer',
		];

	echo view('template',$data);
}


	
}
