<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use ThreadBeanPHP\C as C;
use Illuminate\Support\Facades\File;


class StocksController extends Controller
{
  public function Create(Request $req) {

    $req -> validate([
			'id' => 'required|numeric',
			'title' => 'required|min:4|max:128',
			'text' => 'required|max:4000',
      'image' => 'required'
    ]);

    $mess = C::dispense('stocks');

		$mess -> title = $req -> title;
		$mess -> text = $req -> text;
		

		if($req -> has('image')){

			$file = $req -> file('image');
			$error = @$file -> getError();
			$size = $file -> getSize();

			if(($size > MAX_IMAGE_WEIGHT) || ($error == 2) || ($error == 1)) {
				return back() -> withErrors(['image' => "Rasm rosa og'ir!"]);
			}
			
			$filename = date("YmdHis").rand(0, 99999999).".jpg";
			$path = public_path().'/uploads/images/';
			$file->move($path, $filename);
			$mess -> media = $filename;
		} else {
      $mess -> media = "";
    }

		C::store($mess);

    return redirect() -> back() -> with('success', 'Yuklandi!');
  }

  public function Update(Request $req) {

		$req -> validate([
			'id' => 'required|numeric',
			'title' => 'required|min:4|max:128',
			'text' => 'required|max:4000'
		]);

		$mess = C::findOne('stocks', 'id = ?', [$req -> id]);

		$mess -> title = $req -> title;
		$mess -> text = $req -> text;
		

		if($req -> has('image')){

			$file = $req -> file('image');
			$error = $file -> getError();
			$size = $file -> getSize();

			if(($size > MAX_IMAGE_WEIGHT) || ($error == 2) || ($error == 1)) {
				return back() -> withErrors(['image' => "Rasm rosa og'ir!"]);
			}
			
			$filename = date("YmdHis").rand(0, 99999999).".jpg";
			$path = public_path().'/uploads/images/';
			File::delete(public_path('uploads/images/').@$mess -> media);
			$file->move($path, $filename);
			$mess -> media = $filename;
		}

		C::store($mess);

		return redirect() -> back() -> with('success', 'Yuklandi!');
	}

  public function Delete(Request $req) {
    if(isset($req -> id)){
      $mess = C::findOne("stocks", "id = ?", [$req -> id]);
      C::trash($mess);
      return redirect() -> back() -> with('success', 'Ochirildi!');
    } else {
      return "ERROR";
    }
  }
}
