<?php
use App\Post;
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
});
Route::get('/create', function()
{
  $user = User::findOrfail(1);
  $post = new Post(['title'=>'My first Post1','body'=>'I love laravel1.']);
  $user->posts()->save($post);
});
Route::get('/read', function()
{//หาโพสของผู้ใช้ id 1
  $user = User::findOrfail(1);
  // return $user->posts;
  foreach ($user->posts as $post ) {
    # code...แสดงเฉพาะtitle
    echo $post->title."<br />";
  }
});
