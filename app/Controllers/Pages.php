<?php namespace App\Controllers;

class Pages extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Home | ThriftYouLots'];

		return view('pages/index/pageindex', $data);
	}


	public function about(){
		
		$data = [
			'title' => 'About Us | ThriftYouLots'];

		return view('pages/about/pageabout', $data);

	}

	public function admin(){

		$data = [
			'title' => 'Admin | ThriftYouLots'];

		return view('pages/admin/pageadmin', $data);
		
	}
	public function detail(){

		$data = [
			'title' => 'Our Katalog | ThriftYouLots'];

		return view('pages/katalog/pagekatalog', $data);
		
	}
	
}
