<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use ThreadBeanPHP\C as C;
use ThreadBeanPHP\Util\DispenseHelper as CDH;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

define('APP_NAME', getenv('APP_NAME'));
define('MAX_IMAGE_WEIGHT', 2 * 1024 * 1024);
define('MAX_VIDEO_WEIGHT', 50 * 1024 * 1024);

$p = "App\\Http\\Controllers\\";

$DB_TYPE = getenv('DB_CONNECTION');
$DB_HOST = getenv('DB_HOST');
$DB_NAME = getenv('DB_DATABASE');
$DB_USER = getenv('DB_USERNAME');
$DB_PASS = getenv('DB_PASSWORD');

C::setup($DB_TYPE.':host='.$DB_HOST.';dbname='.$DB_NAME, $DB_USER, $DB_PASS);
CDH::setEnforceNamingPolicy(false);

if(!C::testConnection()) {
  exit("There is no connection to the database :(");
}

unset($DB_TYPE);
unset($DB_HOST);
unset($DB_NAME);
unset($DB_USER);
unset($DB_PASS);


session_start();


Route::get('/', function () {
  if(@$_SESSION['user']) {
    return view('home');
  } else {
    return redirect() -> route('login');
  }
}) -> name('home');

Route::get('/login', function () {
  if(@$_SESSION['user']) {
    return redirect() -> route('home');
  } else {
    return view('login');
  }
}) -> name('login');

Route::post(
  '/SignIn', 
  $p.'SignInController@SignIn'
) -> name('SignIn');

if(@$_SESSION['user']) {
 
  Route::get('/', function () {
    return view('home');
  }) -> name('home');

  Route::get('/earn', function () {
    $data = C::findOne("start_mess", "name = 'earn'");
    return view('earn', ['data' => $data]);
  }) -> name('earn');

  Route::get('/category', function (Request $req) {
    $data = C::findOne("category_mess", "id = ?", [$req -> id]);
    $cards = C::find("categoryes", "category = ?", [$req -> id]);
    return view('category', ['data' => $data, 'cards' => $cards]);
  }) -> name('category');

  Route::get('/stocks', function (Request $req) {
    $data = C::findOne("start_mess", "name = 'stocks'");
    $cards = C::findAll("stocks");
    return view('stocks', ['data' => $data, 'cards' => $cards]);
  }) -> name('stocks');
  
  Route::get('/list', function () {
    $users = C::findAll("users");
    return view('list', ['users' => $users]);
  }) -> name('list');
  
  Route::get('/image-text', function () {
    return view('image-text');
  });

  Route::post(
    '/UpdateStartMess', 
    $p.'MessController@UpdateStartMess'
  ) -> name('UpdateStartMess');

  Route::post(
    '/UpdateEarnMess', 
    $p.'MessController@UpdateEarnMess'
  ) -> name('UpdateEarnMess');

  Route::post(
    '/CategoryProductCreate', 
    $p.'ProductionController@Create'
  ) -> name('CategoryProductCreate');

  Route::post(
    '/CategoryProductUpdate', 
    $p.'ProductionController@Update'
  ) -> name('CategoryProductUpdate');

  Route::get(
    '/CategoryProductDelete', 
    $p.'ProductionController@Delete'
  ) -> name('CategoryProductDelete');

  Route::post(
    '/CategoryStocksCreate', 
    $p.'StocksController@Create'
  ) -> name('CategoryStocksCreate');

  Route::post(
    '/CategoryStocksUpdate', 
    $p.'StocksController@Update'
  ) -> name('CategoryStocksUpdate');

  Route::get(
    '/CategoryStocksDelete', 
    $p.'StocksController@Delete'
  ) -> name('CategoryStocksDelete');

  Route::get(
    '/SignOut', 
    $p.'SignOutController@SignOut'
  ) -> name('SignOut');
  
}
