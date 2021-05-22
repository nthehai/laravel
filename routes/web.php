<?php
/* Admin : Bảng tbl_school*/
Route::get('/', function () {
	$news = DB::table('tieu_chi')
            ->join('donvi_daotao', 'tieu_chi.id', '=', 'donvi_daotao.id')
            
            ->select('tieu_chi.id', 'donvi_daotao.ten_dv','tieu_chi.gan_sao');
        $news = $news->orderBy('Tong_Diem', 'desc');
        $news = $news->get();

        $pageName = 'Tên Trang - Evaluation';

        return view('welcome', compact('news', 'pageName'));
    //return view('welcome');
});
Auth::routes();
Route::get('/home', 'HomeController@index');
Route::get('/danh-sach','Admin\AdminNewsController@show');
Route::get('/admin/news/create', 'Admin\AdminNewsController@create');
Route::post('/admin/news/store', 'Admin\AdminNewsController@store');
Route::get('/delete/{id}','Admin\AdminNewsController@destroy');
Route::get('/admin/news/edit/{id}', 'Admin\AdminNewsController@edit');
Route::post('/admin/news/update/{id}','Admin\AdminNewsController@update');
/* Admin : Bảng users */
Route::get('/list-users','Admin\AdminNewsController@index');
Route::get('/create-users','Admin\AdminNewsController@create_users');
Route::post('/store-users','Admin\AdminNewsController@store_users');
Route::get('/delete-users/{id}','Admin\AdminNewsController@delete_users');
Route::get('/edit-users/{id}','Admin\AdminNewsController@edit_users');
Route::post('/update-users/{id}','Admin\AdminNewsController@update_users');
/*Admin: bảng evaluation */
Route::get('/list-form','User\UserController@show');
/*User*/
Route::get('/home-user', 'User\UserController@index');
Route::get('/danh-gia', 'User\UserController@form');
Route::post('/submit-form', 'User\UserController@store');

Route::get('/thong_ke', 'User\UserController@thong_ke');
Route::get('/tc_1', 'User\UserController@tc_1');
Route::get('/tc_2', 'User\UserController@tc_2');
Route::get('/tc_3', 'User\UserController@tc_3');
Route::get('/tc_4', 'User\UserController@tc_4');
Route::get('/tc_5', 'User\UserController@tc_5');
Route::get('/tc_6', 'User\UserController@tc_6');
Route::get('/tc_7', 'User\UserController@tc_7');
Route::get('/tong_diem', 'User\UserController@tong_diem');
Route::get('/rankings', 'User\UserController@rankings');
Route::get('/thong-bao', 'User\UserController@thong_bao');
Route::get('/dangnhap', 'User\UserController@getDangnhapUser');
Route::post('/dangnhap', 'User\UserController@postDangnhapUser');
Route::get('/dangxuat','User\UserController@log_out');
Route::get('/thong_tin_truong','User\UserController@thong_tin_truong');
Route::get('/chinhsua/{id}', 'User\UserController@chinhsua');
Route::post('/capnhat/{id}', 'User\UserController@capnhat');
Route::get('/chi-tiet','User\UserController@chi_tiet');
Route::get('/edit_form/{id}', 'User\UserController@edit_form');
Route::post('/update_form/{id}', 'User\UserController@update_form');
Route::get('/search', 'User\UserController@getSearch');
Route::post('search/name', 'User\UserController@getSearchAjax')->name('search');
Route::get('/data/{id}', 'Admin\AdminNewsController@data');
