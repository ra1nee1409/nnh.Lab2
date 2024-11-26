<?php
use App\Http\Controllers\NhhAccountController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', function () {
    return view ('home');
});

Route::get('/name',function() { 
    return 'Nguyễn Ngọc Hiếu';
});

//mảng
Route::get('/foods', function(){
    return ['Thịt bò, Thịt gà'];
});

Route::get('/TT',function() {
    return response() ->json([
        'name' => 'Nguyễn Ngọc Hiếu',
        'email' => '1234@gmail.com'
    ]);
});

Route::get('/backk', function (){
    return redirect('/'); //trở lại trang nào đó
});

Route::redirect('/here','/three'); //chuyển từ mục này qua mục khác

Route::get('/three', function () {
    return response() ->json([
        'name' => 'Nguyễn Ngọc Hiếu',
        'email' => '1234@gmail.com'    
    ]); //respone
});

Route::get('/something', function(){
    return respone() ->json([
        'Ngày Sinhh' => '14/09/2005',
        'Địa chỉ' => 'somewhere',
        'Chức vụ' => 'Tự nhập',
        'Thường chú' => 'tự nhập'
    ]);
});

Route::get('ra1nee/{id}',function($id){
    return "<h1> Ra1nee ".$id. " là 1 công ty abc </h1>";
});

Route::get('ra1n/{name?}',function($name="khách hàng"){
    return "<h1> Xin chào ".$name . ", hôm nay của bạn ntn </h1>";
});



Route::get('Nhh-account', [NhhAccountController::class,'index'])->name('nhhAccount.index');

Route::get('nhh-account-create',[NhhAccountController::class,'create']);