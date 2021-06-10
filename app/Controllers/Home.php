<?php

namespace App\Controllers;

use App\Models\Tblshorturl;

class Home extends BaseController
{
	public function index()
	{
		return view('welcome_message');
	}

	public function getShortURL()
	{
		return view('home/get_short');
	}

	public function generateShortURL()
	{
		$short = $this->generateRandomString(8);
		$data = [
			'full_url' =>  $_POST["full_url"],
			'short_url'    => $short
		];

		$model = new Tblshorturl();
		$model->insert($data);

		$result["code"] = "1";
		$result['short_url'] =  $short;

		echo json_encode($result);
	}


	public function generateRandomString($length = 10)
	{
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$charactersLength = strlen($characters);
		$randomString = '';
		for ($i = 0; $i < $length; $i++) {
			$randomString .= $characters[rand(0, $charactersLength - 1)];
		}
		return $randomString;
	}

	public function shortURLHistory()
	{
		$model = new Tblshorturl();
		$rows = $model->findAll();
		$data['rows'] = $rows;
		return view('home/his_short', $data);
	}


	public function incomeURL($short_code)
	{
		return view('home/income_url', $short_code);
	}
}
