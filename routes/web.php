<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

use App\User;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
////    if(Auth::check()){
////        return "USER IS LOGGED IN";
////    }
////    $username = "Vladan";
////    $password = "akademija";
////    if(Auth::attempt(['name'=>$username, 'password'=>$password])){
////        return redirect()->intended('/');
////    }
//    
});

//Auth::routes(['register' => false]); //bez register opcije
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('admin/user/roles', ['middleware' => ['role', 'auth', 'web'], function (){
        return "Middleware role";
}]);

//Route::get('/', function () {
//   $user = Auth::user();
//   
//   if($user->isAdmin()){
//       echo "this user is admin";
//   }
//   return view('welcome');
//});

Route::get('admin', 'AdminController@index');

Route::get('/send', function () {
    $data = [
        'title'=>'Hi student',
        'content'=>'this course is created with a lot of love for you',
    ];
//    $title = 'Hi student';
//    //$content = 'this course is created with a lot of love for you';
//
//    
    Mail::send('emails.test', $data, function($message){
        $message->to('vladan.mastilovic@gmail.com', 'Vladan')->subject('Test');
    });

});