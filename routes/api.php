<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use TADPHP\TADFactory;
use TADPHP\TAD;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('why', function () {


    $tad = (new TADFactory(['ip'=>'192.168.0.4', 'com_key'=>0,'port'=>'4370']))->get_instance();


//    $new = new \App\ZK\ZKLib('192.168.0.4');
//    $new->connect();
//
//
//    foreach ($new->getAttendances() as $attendance) {
//       dd($attendance);
//    }

//    $zk = new \App\ZK\ZKLibrary('192.168.0.4',4370);
//    $zk->connect();
//   return $zk->getAttendance();
});







