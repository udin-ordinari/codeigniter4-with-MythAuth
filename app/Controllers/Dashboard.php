<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
	public function index()
	{
		echo view('app/dashboard');
		return view('templates/index');
	}
}
