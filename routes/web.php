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
#San pham Admin
Route::get('/san-pham','SanPhamController@index')->name('san-pham');


#Dich vu Admin
Route::get('/dich-vu','DichVuController@index')->name('dich-vu');

Route::post('/them-dich-vu','DichVuController@store')->name('them-dich-vu');

Route::get('/sua-dich-vu/{id}','DichVuController@suaDV')->name('sua-dich-vu');
Route::post('/xu-ly-sua-dich-vu/{id}','DichVuController@edit')->name('xu-ly-sua-dich-vu');

Route::get('/xoa-dich-vu/{id}','DichVuController@destroy')->name('xoa-dich-vu');
Route::get('/abc', function (){
         return view('admin.dichvu.suadv');
     });

#Khach hang Admin
Route::get('/khach-hang','KhachHangController@index')->name('khach-hang');

Route::post('/them-khach-hang','KhachHangController@themKH')->name('them-dich-vu');

// Route::get('/xoa-khach-hang/{id}','KhachHangController@xoaKH')->name('xoa-khach-hang');