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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('AddProduct', 'ProductController@getPro');//หน้า form เพิ่มสินค้า
Route::post('SaveProduct', 'ProductController@SavePro');//บันทึกสินค้า

Route::get('Productlist', 'ProductController@getListPro');//แสดงรายการสินค้า
Route::get('OrderProduct_List', 'OrderController@getListOrder');//แสดงรายกาการสั่งซื้อสินค้า

Route::get('AddOrder', 'OrderController@getOrder');//หน้า form เพิ่มการสั่งซื้อ
Route::post('SaveOrder', 'OrderController@SaveOrder');//บันทึกการสั่งซื้อ

Route::get('Add_OrderPro{id}', 'OrderController@getOrderPro');//หน้าform เพิ่มสินค้าแต่ละ order
Route::post('SaveOrderPro', 'OrderController@SaveOrderPro');////หน้าform แสดงการสินค้าแต่ละ order

Route::get('getProduct{id}', 'ProductController@getProduct');
Route::post('updateProduct','ProductController@updateProduct');
Route::get('delProduct{id}', 'ProductController@delProduct');

Route::post('updateOrder_Pro','OrderController@updateOrderPro');//หน้าบันทึก สินค้าแต่ละ orderและแสดง

