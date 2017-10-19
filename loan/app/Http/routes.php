<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::match(['get','post'],'/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your hTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
//前台路由
//注册路由
Route::group(['prefix'=>'home','namespace'=>'Home','middleware'=>'web'], function () {
    Route::any('login','LoginController@login');
    Route::post('login_add','LoginController@login_add');
    Route::any('tui','LoginController@tui');
    Route::any('index','IndexController@index');
    Route::any('register','RegisterController@register');
    Route::any('register/register_add','RegisterController@register_add');
    Route::any('mail','RegisterController@mail');
    Route::any('loan','LoanController@loan');
    Route::get('register/send','RegisterController@send');//
    Route::get('captcha/{tmp}','LoginController@captcha');//验证码
});



//前台首页
Route::any('home/index','home\IndexController@index');
// Route::get('index/{id}','IndexController@index')->where('id','admin');

//注册
Route::any('home/register','home\RegisterController@register');
//登陆
Route::any('home/login','home\LoginController@login');
Route::any('home/login_add','home\LoginController@login_add');
//贷款
Route::any('home/loan','home\LoanController@loan');
Route::any('home/loan_mation','home\LoanController@loan_mation');
Route::post('home/loan_add','home\LoanController@loan_add');
Route::post('home/loan_ok','home\LoanController@loan_ok');
Route::any('home/loan_user','home\LoanController@loan_user');
Route::post('home/credit_add','home\LoanController@credit_add');
//个人中心
Route::any('home/vip','home\VipController@vip');
Route::any('home/recharge','home\VipController@recharge');
Route::any('home/information','home\VipController@information');
Route::any('home/loan_adddo','home\VipController@loan_adddo');

//
Route::any('home/customer','home\CustomerController@customer');
//理财
Route::any('licai/show','home\LicaiController@licai');
Route::any('licai/company_licai','home\LicaiController@company_licai');
Route::any('licai/company_licai_add','home\LicaiController@company_licai_add');
Route::post('licai/valuetion','home\LicaiController@valuetion');
Route::get('licai/company_licai_adddo','home\LicaiController@company_licai_adddo');
Route::any('licai/personal','home\LicaiController@personal');
Route::any('licai/personal_show','home\LicaiController@personal_show');
Route::post('licai/personal_valuetion','home\LicaiController@personal_valuetion');
Route::get('licai/personal_add','home\LicaiController@personal_add');

//我的账户
//波文
Route::any('home/perIndex','home\PersonalController@Index');
Route::any('home/perAccess','home\PersonalController@access');
Route::any('home/perChongzhi','home\PersonalController@chongzhi');
Route::any('home/perTixian','home\PersonalController@tixian');

//jitongliang
Route::any('home/perZijin','home\PersonalController@zijin');
Route::any('home/perLicai','home\PersonalController@licai');

//文昌
Route::any('home/perHuikuan','home\PersonalController@huikuan');
Route::any('home/perleft','home\ViewslController@Perleft');
Route::any('home/perHuankuan','home\PersonalController@huankuan');


//后台路由
Route::get('admin/index','admin\IndexController@index');
Route::get('admin/top','admin\IndexController@top');
Route::get('admin/left','admin\IndexController@left');
Route::get('admin/show','admin\IndexController@show');
//登陆
Route::any('admin/login','admin\LoginController@login');

//权限
Route::get('admin/nodeList','admin\NodeController@nodeList');
Route::any('admin/nodeAdd','admin\NodeController@nodeAdd');
//角色
Route::get('admin/roleList','admin\RoleController@roleList');
Route::any('admin/roleAdd','admin\RoleController@roleAdd');
//管理员
Route::any('admin/adminAdd','admin\AdminController@adminAdd');
Route::get('admin/adminList','admin\AdminController@adminList');
Route::any('admin/lists','admin\FinancingController@lists');
//数据库备份
Route::any('admin/mysqlAdd','admin\MysqlController@mysqlAdd');

//房贷审核--控制器loan
Route::get('admin/pending','admin\LoanController@pending');
Route::get('admin/status','admin\LoanController@status');

//广告位
Route::any('admin/advertisingadd','admin\AdvertisingController@advertisingadd');
Route::get('admin/advertisinglist','admin\AdvertisingController@advertisinglist');
Route::get('admin/advertisinghistory','admin\AdvertisingController@advertisinghistory');
//理财
//Route::any('financing/lists ',' admin\FinancingController@lists ');

