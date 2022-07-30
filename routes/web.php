<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/', function() {
    return view('errors.503');
});


// Route::get('/', function(){
//     $items = ['apple', 'banana', 'tomato'];
//     return view('wel', ['item'=> $items]);
// });

// Route::get('/', function(){
//     return view('wel', ['num' => 11]);
// });


// Route::get('/', function () {
//     $items = [
//         'Apple',
//         'Banana'
//     ];
//     //compact('items')
//     return view('wel', $items);
// });


Route::get('/', function(){
    $items = ['applee', 'banana', 'tomato'];
    $boxs=['book','pen','note'];
    return view('wel', [
        'name'=>'Foo',
        'greeting'=> '안녕하세요',
        'num'=>'11',
        'items'=>$items,
        'boxs'=>$boxs
    ]);
});

// Route::get('/', function () {
//     return view('welcome', [
//         'item'=>'11'
//     ]);
// });


