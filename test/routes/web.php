<?php

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

Route::get('basic1', function() {
    return 'hello World';
});

Route::post('basic2', function() {
    return 'post';
});

Route::match(['get','post'],'multy1',function() {
    return 'multy1';
});

Route::any('multy2', function() {
    return 'multy2';
});

//Route::get('user/{id}', function($id) {
//    return 'User-'.$id;
//});

//Route::get('/user/{name?}', function($name=null) {
//    return 'User-'.$name;
//});

//Route::get('/user/{name?}', function($name='sean') {
//    return 'User-'.$name;
//});

//Route::get('/user/{name?}', function($name='sean') {
//    return 'User-'.$name;
//})->where('name','[a-zA-Z]+');

//Route::get('/user/{id}/{name?}', function($id,$name='sean') {
//    return 'User-'.$id.'-name-'.$name;
//})->where(['id'=>'[0-9]+','name'=>'[a-zA-Z]+']);

//  路由别名
Route::get('user/member-center',['as' => 'center',function() {
    return route('center');
    // http://185.122.59.8:8080/user/member-center
}]);

// 路由群组
Route::group(['prefix' => 'member'],function () {
    Route::get('basic1', function() {
        return 'member-hello World';
    });
    Route::any('multy2', function() {
        return 'member-multy2';
    });
});

// 路由中输出视图
Route::get('view',function () {
    return view('welcome');
});


Route::get('api/user', function () {
    //return view('welcome');
    //return ['version' => 0.1];
    $user = new App\User;
    return $user->signup();
});


// 控制器
//Route::get('user/info','UserController@info');

// Route::get('user/info',['uses'=>'UserController@info']);

// 别名
//Route::get('user/info',[
//    'uses'=>'UserController@info',
//    'as'=>'userinfo'
//]);

// 参数绑定
Route::get('member/{id}',['uses'=>'UserController@info'])->where('id','[0-9]+');

// RouteControler 被废弃了