<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SAMLController extends Controller
{
	public function login()
	{
		return \Auth::guest() ? redirect('saml2/login') : \Redirect::intended('/');
	}

	public function logout()
	{
		\Auth::logout();
		return redirect('/');
	}

	public function loggedin()
	{
		return view('home');
	}
}
