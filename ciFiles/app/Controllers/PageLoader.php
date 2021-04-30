<?php

namespace App\Controllers;

class PageLoader extends BaseController
{
	public function dashboard()
	{
		$data = array("title"=>"Dashboard");
		echo view('templates/header',$data);
		echo view('pages/dashboard',$data);
		echo view('templates/footer',$data);
	}
}
