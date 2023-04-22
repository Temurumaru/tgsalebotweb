<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use ThreadBeanPHP\C as C;

class SignInController extends Controller
{
	public function SignIn(Request $req) {
		$req -> validate([
			'login' => 'required|min:4|max:40',
			'password' => 'required|min:4|max:128'
		]);

		$admin = C::findOne("admins", "login = ? AND password = ?", [$req -> login, hash('sha256', $req -> password)]);

		if(isset($admin)) {
			$_SESSION['user'] = $admin;
			return redirect() -> route('home') -> withSession('success', 'Login qildiz!');
		} else {
			return redirect() -> back() -> withErrors(['login' => "No tog'ri Login yoki Parol"]);
		}

 	}
}
