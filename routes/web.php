<?php
// User
Route::get('/', 'UserController@index');
Route::get('/tim-kiem', 'UserController@viewTimKiem');
Route::get('/danh-muc/{slug}', 'UserController@viewDanhMuc');
Route::get('/cua-hang', 'UserController@viewCuaHang');
Route::get('/san-pham/{slug}', 'UserController@viewSanPham');
Route::get('gioi-thieu', 'UserController@viewGioiThieu');

Route::get('/gio-hang', ['as' => 'user.giohang','uses' => 'UserController@viewGioHang']);
Route::post('/gio-hang/them-moi', 'UserController@addGioHang');
Route::post('/gio-hang/cap-nhat', 'UserController@editGioHang');
Route::get('/gio-hang/xoa-san-pham/{id}', 'UserController@deleteSanPham');
Route::get('/gio-hang/xoa-gio-hang', 'UserController@deleteGioHang');

Route::get('/thanh-toan', 'UserController@viewThanhToan');
Route::post('/thanh-toan', 'UserController@postThanhToan');
Route::get('/lien-he', ['as' => 'user.getLienHe','uses' =>'UserController@viewLienHe']);
Route::post('/lien-he', 'UserController@postLienHe');

// Admin
Route::group(['prefix' => 'admin'], function () {
    Route::get('/', 'AdminController@viewHome');
    Route::get('/logoutAdmin', 'Auth\LoginController@logoutAdmin');
    Route::get('/dang-nhap', ['as' => 'admin.dang-nhap','uses' => 'Auth\LoginController@getLoginAdmin']);
    Route::post('/dang-nhap', 'Auth\LoginController@postLoginAdmin');
    Route::middleware(['MyMiddle'])->group(function () {
        // Danh muc
        Route::group(['prefix' => 'quan-ly-danh-muc'], function () {
            Route::get('/',['as' => 'admin.getDanhMuc','uses' => 'AdminController@viewDanhMuc']);
            Route::get('them-moi',['as' => 'admin.getAddDanhMuc','uses' => 'AdminController@viewAddDanhMuc']);
            Route::post('them-moi',['as' => 'admin.postAddDanhMuc','uses' => 'AdminController@postAddDanhMuc']);
            Route::get('/cap-nhat/{slug}',['as' => 'admin.getEditDanhMuc','uses' => 'AdminController@viewEditDanhMuc']);
            Route::post('/cap-nhat',['as' => 'admin.postEditDanhMuc','uses' => 'AdminController@postEditDanhMuc']);
            Route::get('/xoa/{id}',['as' => 'admin.deleteDanhMuc','uses' => 'AdminController@deleteDanhMuc']);
        });
        // San Pham
        Route::group(['prefix' => 'quan-ly-san-pham'], function () {
            Route::get('/',['as' => 'admin.getSanPham','uses' => 'AdminController@viewSanPham']);
            Route::get('them-moi',['as' => 'admin.getAddSanPham','uses' => 'AdminController@viewAddSanPham']);
            Route::post('them-moi',['as' => 'admin.postAddSanPham','uses' => 'AdminController@postAddSanPham']);
            Route::get('/cap-nhat/{slug}',['as' => 'admin.getEditSanPham','uses' => 'AdminController@viewEditSanPham']);
            Route::post('/cap-nhat',['as' => 'admin.postEditSanPham','uses' => 'AdminController@postEditSanPham']);
            Route::get('/xoa/{id}',['as' => 'admin.deleteSanPham','uses' => 'AdminController@deleteSanPham']);
        });
        Route::get('/khuyen-mai',['as' => 'admin.class.getListKM','uses' => 'AdminController@viewKhuyenMai']);
        Route::get('/don-hang',['as' => 'admin.class.getListDH','uses' => 'AdminController@viewDonHang']);
        Route::get('/don-hang/{id}',['as' => 'admin.class.getDetailDH','uses' => 'AdminController@viewDetailDonHang']);
        Route::get('/lien-he',['as' => 'admin.class.getListLH','uses' => 'AdminController@viewLienHe']);
    });
});