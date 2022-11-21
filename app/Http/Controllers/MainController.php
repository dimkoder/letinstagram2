<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class MainController extends Controller
{
	public function index(Request $request): View
	{
		//return view('welcome');
		$query = $request->all();
		$img_text = '<img src="https://dima.lh1.in/ocean.jpg" width="200"/>';
		return view('welcome', compact('query', 'img_text'));
	}
	public function php(Request $request) {
		dd($request);	// Вывести все входные данные
	}
}
