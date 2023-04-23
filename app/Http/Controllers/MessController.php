<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use ThreadBeanPHP\C as C;
use Illuminate\Support\Facades\File;

class MessController extends Controller
{
	public function UpdateStartMess(Request $req) {

		$req -> validate([
			'id' => 'required|numeric',
			'title' => 'max:128',
			'text' => 'required|max:4000'
		]);

		$mess = C::findOne('start_mess', 'id = ?', [$req -> id]);

		if(isset($req -> title)) $mess -> title = $req -> title;
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

		if($req -> has('video')){

			$file = $req -> file('video');
			$size = $file -> getSize();

			if(($size > MAX_VIDEO_WEIGHT)) {
				return back() -> withErrors(['video' => "Video rosa og'ir!"]);
			}

			$filename = date("YmdHis").rand(0, 99999999).$file->getClientOriginalName();
			$path = public_path().'/uploads/videos/';
			File::delete(public_path('uploads/videos/').@$mess -> media);
			$file->move($path, $filename);
			$mess -> media = $filename;
		}

		C::store($mess);

		return redirect() -> back() -> with('success', 'Yuklandi!');
	}

	public function UpdateEarnMess(Request $req) {

		$req -> validate([
			'id' => 'required|numeric',
			'title' => 'max:128',
			'text' => 'required|max:4000'
		]);

		$mess = C::findOne('earn_mess', 'id = ?', [$req -> id]);

		if(isset($req -> title)) $mess -> title = $req -> title;
		$mess -> text = $req -> text;
		

		// if($req -> has('image')){

		// 	$file = $req -> file('image');
		// 	$error = $file -> getError();
		// 	$size = $file -> getSize();

		// 	if(($size > MAX_IMAGE_WEIGHT) || ($error == 2) || ($error == 1)) {
		// 		return back() -> withErrors(['image' => "Rasm rosa og'ir!"]);
		// 	}
			
		// 	$filename = date("YmdHis").rand(0, 99999999).".jpg";
		// 	$path = public_path().'/uploads/images/';
		// 	File::delete(public_path('uploads/images/').@$mess -> media);
		// 	$file->move($path, $filename);
		// 	$mess -> media = $filename;
		// }

		if($req -> has('video')){

			$file = $req -> file('video');
			$size = $file -> getSize();

			if(($size > MAX_VIDEO_WEIGHT)) {
				return back() -> withErrors(['video' => "Video rosa og'ir!"]);
			}

			$filename = date("YmdHis").rand(0, 99999999).$file->getClientOriginalName();
			$path = public_path().'/uploads/videos/';
			File::delete(public_path('uploads/videos/').@$mess -> media);
			$file->move($path, $filename);
			$mess -> media = $filename;
		}

		C::store($mess);

		return redirect() -> back() -> with('success', 'Yuklandi!');
	}
}
