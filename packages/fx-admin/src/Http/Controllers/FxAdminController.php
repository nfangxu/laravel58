<?php

namespace FxAdmin\Http\Controllers;

use Illuminate\Http\Request;

class FxAdminController extends Controller
{
	public function index(Request $request)
	{
		return view('fx-admin::master');
	}

	public function dashboard()
	{
		return view('fx-admin::dashboard');
	}
}