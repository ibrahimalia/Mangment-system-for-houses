<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
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


Route::resource('products', 'App\Http\Controllers\ProductController'); // Laravel 8
Route::resource('images', 'App\Http\Controllers\ImageController');
Route::get('/', function () {
    return view('welcome');
});
Route::get('/role-register1', 'Admin\DashboardController@registered' );
Auth::routes();
Route::middleware(['office'])->group(function () {


});
Route::middleware([ 'user','active'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::post('/home', [App\Http\Controllers\HomeController::class, 'searchHome']);
    Route::get('/properties Details/{id}', [App\Http\Controllers\PropertiesDetails::class, 'showPropertiesDetails']);
    Route::get('/gallery/{id}', [App\Http\Controllers\Gallery::class, 'showGallery']);
    Route::get('/start/{id}', [App\Http\Controllers\Email\OrderController::class, 'start']);
    Route::post('/properties Details/{id}', [App\Http\Controllers\ReverseController::class, 'reverse']);
    Route::get('/Review/{id}', [App\Http\Controllers\InfoEvaluation::class, 'inforamtion']);
    Route::get('/evaluation/{id}', [App\Http\Controllers\Evaluation::class, 'evaluation']);
    Route::get('/Review_User/{idUser}', [App\Http\Controllers\InfoEvaluation::class, 'reviewUser']);
    Route::get('/Evaluate_User/{idUser}', [App\Http\Controllers\Evaluation::class, 'evaluateUser']);
    Route::post('/Evaluate_User/{idUser}', [App\Http\Controllers\Evaluation::class, 'addEvaluateUser']);
    Route::get('/confirm/{id}', [App\Http\Controllers\ConfirmController::class, 'confirm']);
    Route::post('/evaluation/{id}', [App\Http\Controllers\Evaluation::class, 'addEvaluation']);
    Route::post('/confirm/{id}', [App\Http\Controllers\ConfirmController::class, 'addConfirm']);
    Route::get('/card', [App\Http\Controllers\CardController::class, 'card']);
    Route::post('/card', [App\Http\Controllers\CardController::class, 'orderCard']);
    Route::get('/contact', [App\Http\Controllers\ContactController::class, 'contact']);
    Route::post('/contact', [App\Http\Controllers\ContactController::class, 'addContact']);
    Route::get('/Add_home_from_user', [App\Http\Controllers\CardController::class, 'addHome']);
    Route::post('/Add_home_from_user', [App\Http\Controllers\CardController::class, 'AddDataHome']);
    //Route::get('/test', [App\Http\Controllers\PropertiesDetails::class, 'test']);
    Route::get('/testt', [App\Http\Controllers\PropertiesDetails::class, 'testt']);
    Route::get('/Opinion_User/{idHouse}', [App\Http\Controllers\PropertiesDetails::class, 'opinion']);
    Route::post('/Opinion_User/{idHouse}', [App\Http\Controllers\PropertiesDetails::class, 'addOpinion']);
    Route::get('/Opinion_User_Delete/{idOpinion}/{idHouse}', [App\Http\Controllers\PropertiesDetails::class, 'deleteOpinion']);
    Route::get('/AddPost', [App\Http\Controllers\AddPost::class, 'AddPost']);
    Route::post('/AddPost', [App\Http\Controllers\AddPost::class, 'Add']);
    Route::get('/add', [App\Http\Controllers\AddPost::class, 'pass']);
    Route::post('/add', [App\Http\Controllers\AddPost::class, 'formSubmit']);
    Route::get('/Delete_Post/{idPost}', [App\Http\Controllers\AddPost::class, 'deletePost']);
    Route::get('/comment/{id}', [App\Http\Controllers\Comment::class, 'comment']);
    Route::post('/comment/{id}', [App\Http\Controllers\Comment::class, 'addComment']);
    Route::get('/delete/{id}/{idPost}', [App\Http\Controllers\Comment::class, 'delete']);
    Route::get('/update/{id}/{idPost}', [App\Http\Controllers\Comment::class, 'update']);
    Route::post('/update/{id}/{idPost}', [App\Http\Controllers\Comment::class, 'addUpdate']);
    Route::get('/replay/{id}/{idPost}', [App\Http\Controllers\Comment::class, 'replay']);
    Route::post('/replay/{id}/{idPost}', [App\Http\Controllers\Comment::class, 'addReplay']);
    Route::get('/deleteReplay/{id}/{idPost}/{idReplay}', [App\Http\Controllers\Comment::class, 'deleteReplay']);
    Route::get('/UpdateReplay/{id}/{idPost}/{idReplay}', [App\Http\Controllers\Comment::class, 'updateReplay']);
    Route::post('/UpdateReplay/{id}/{idPost}/{idReplay}', [App\Http\Controllers\Comment::class, 'addUpdateReplay']);
    Route::get('/My_Profile', [App\Http\Controllers\MyProfile::class, 'myProfile']);
    Route::post('/My_Profile', [App\Http\Controllers\MyProfile::class, 'updateProfileData']);
    Route::get('/My_Profile/delete/{id}', [App\Http\Controllers\MyProfile::class, 'deleteCard']);
    Route::get('/My_Profile/delete/reservation/{idUser}/{idHouse}', [App\Http\Controllers\MyProfile::class, 'deleteReservation']);
    Route::get('/My_Profile/delete/Your_House/{idUser}/{idHouse}', [App\Http\Controllers\MyProfile::class, 'deleteYourHouse']);
    Route::get('/My_Profile/accept/order/{idHouse}/{idUser}', [App\Http\Controllers\MyProfile::class, 'acceptOrder']);
    Route::get('/My_Profile/delete/order/{idHouse}/{idUser}', [App\Http\Controllers\MyProfile::class, 'deleteOrder']);
    Route::get('/My_Profile/delete_evaluation_house/order/{idUser}/{idHouse}', [App\Http\Controllers\MyProfile::class, 'evaluationHouse']);
    Route::get('/My_Profile/delete_evaluation_user/order/{idUserEvaluate}/{idUser}', [App\Http\Controllers\MyProfile::class, 'evaluationUser']);

});

Route::middleware([ 'admin','active'])->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class,'dashboard'])->name('dashboard');
    Route::get('/Add_Home', [App\Http\Controllers\Admin\AddHomeController::class,'addHome']);
    Route::post('/Add_Home', [App\Http\Controllers\Admin\AddHomeController::class,'addHouse']);


    Route::get('/role-register', [App\Http\Controllers\Admin\DashboardController::class,'registered'] );
    Route::get('/role-register-edit/{id}', [App\Http\Controllers\Admin\DashboardController::class,'registerededit'] );
    Route::put('/role-register-update/{id}', [App\Http\Controllers\Admin\DashboardController::class,'registeredupdate'] );
    Route::delete('/role-register-delete/{id}', [App\Http\Controllers\Admin\DashboardController::class,'registereddelete'] );
    Route::put('/role-register-block/{id}', [App\Http\Controllers\Admin\DashboardController::class,'registeredblock'] );



    ////////////
    Route::get('/role-reverses', [App\Http\Controllers\Admin\DashboardController::class,'reversed'] );
    Route::get('/role-reverses-edit/{id}', [App\Http\Controllers\Admin\DashboardController::class,'reversededit'] );
    Route::put('/role-reverses-update/{id}', [App\Http\Controllers\Admin\DashboardController::class,'reversedupdate'] );
    Route::delete('/role-reverses-delete/{id}', [App\Http\Controllers\Admin\DashboardController::class,'reverseddelete'] );
    Route::put('/role-reverses-confirm/{id}', [App\Http\Controllers\Admin\DashboardController::class,'reversedconfirm'] );

    ////////////////


    Route::get('/abouts', [App\Http\Controllers\Admin\AboutusController::class,'index'] );
    Route::post('/save-abouts', [App\Http\Controllers\Admin\AboutusController::class,'store'] );
    Route::get('/about-edit/{id}', [App\Http\Controllers\Admin\AboutusController::class,'aboutedit'] );
    Route::put('/about-update/{id}', [App\Http\Controllers\Admin\AboutusController::class,'aboutupdate'] );
    Route::delete('/about-delete/{id}',  [App\Http\Controllers\Admin\AboutusController::class,'aboutdelete'] );
    Route::get('/service-cat',  [App\Http\Controllers\Admin\ServiceController::class,'index'] );
    Route::get('/service-cat-create',  [App\Http\Controllers\Admin\ServiceController::class,'create'] );
    Route::post('/save-service', [App\Http\Controllers\Admin\ServiceController::class,'store'] );
    Route::get('/service-edit/{id}', [App\Http\Controllers\Admin\ServiceController::class,'serviceedit'] );
    Route::put('role-servece-update/{id}', [App\Http\Controllers\Admin\ServiceController::class,'serviceupdate'] );
    Route::delete('/service-delete/{id}',   [App\Http\Controllers\Admin\ServiceController::class,'servicedelete'] );
    Route::get('/Add_Card',   [App\Http\Controllers\Admin\AddCard::class,'displayCard'] );
    Route::post('/Add_Card',   [App\Http\Controllers\Admin\AddCard::class,'AddCard'] );
    Route::get('/Order_Card',   [App\Http\Controllers\Admin\OrderCard::class,'orderCard'] );
    Route::get('/Delete/{idUser}/{idCard}',   [App\Http\Controllers\Admin\OrderCard::class,'delete'] );
    Route::get('/Update/{idUser}/{idCard}',   [App\Http\Controllers\Admin\OrderCard::class,'accept'] );
    Route::get('/Order_Confirm',   [App\Http\Controllers\Admin\OrederConfirm::class,'confirm'] );
    Route::get('/UpdateConfirm/{idUser}/{idHouse}',   [App\Http\Controllers\Admin\OrederConfirm::class,'accept'] );
    Route::get('/DeleteConfirm/{idUser}/{idHouse}',   [App\Http\Controllers\Admin\OrederConfirm::class,'delete'] );



    Route::get('/role-house', [App\Http\Controllers\Admin\HouseController::class,'index'] );
    Route::get('/role-house-edit/{id}', [App\Http\Controllers\Admin\HouseController::class,'editHouse'] );
    Route::put('/role-house-update/{id}', [App\Http\Controllers\Admin\HouseController::class,'up'] );
    
    Route::delete('/role-house-delete/{id}', [App\Http\Controllers\Admin\HouseController::class,'deleteHouse'] );



});
