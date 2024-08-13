<?php

use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\HomeController;
use App\Http\Controllers\Admin\HotelSettingController;
use App\Http\Controllers\admin\LoginController;
use App\Http\Controllers\admin\OptionController;
use App\Http\Controllers\admin\PaiementController;
use App\Http\Controllers\Admin\ReservationController as AdminReservationController;
use App\Http\Controllers\admin\RoomController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\Client\CheckOutController;
use App\Http\Controllers\Client\ContactController;
use App\Http\Controllers\Client\EditUserController;
use App\Http\Controllers\Client\HomeController as ClientHomeController;
use App\Http\Controllers\Client\LoginController as ClientLoginController;
use App\Http\Controllers\Client\PasswordController;
use App\Http\Controllers\Client\ProfilController;
use App\Http\Controllers\Client\ReservationController;
use App\Http\Controllers\Client\RoomController as ClientRoomController;
use App\Http\Controllers\Client\SignUpController;
use App\Http\Controllers\PaymentController;
use GuzzleHttp\Client;
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


// Routes publiques
Route::get('/admin/login', [LoginController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [LoginController::class, 'login'])->name('admin.login.submit');

Route::get('/login', [ClientLoginController::class, 'showLoginForm'])->name('login')->middleware('guest');
Route::post('/login', [ClientLoginController::class, 'login'])->name('login.submit');

// Routes protégées par middleware
Route::middleware('adm','rolecontrol')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::resource('options', OptionController::class)->except(['show']);
    Route::resource('rooms', RoomController::class)->except(['show']);
    Route::resource('categories', CategoryController::class)->except(['show']);
    Route::resource('users', UserController::class);
    Route::delete('pictures/{picture}', [RoomController::class, 'deletePhoto'])->name('pictures.destroy');
    Route::resource('reservations', AdminReservationController::class);
    Route::post('reservations/{reservation}/confirm', [AdminReservationController::class, 'confirmReservation'])->name('reservations.confirm');
    Route::post('reservations/{reservation}/cancel', [AdminReservationController::class, 'cancelReservation'])->name('reservations.cancel');
    // Routes pour les paiements
    Route::get('/paiements', [PaiementController::class, 'index'])->name('paiements.index');
    Route::get('/paiements/create', [PaiementController::class, 'create'])->name('paiements.create');
    Route::post('/paiements', [PaiementController::class, 'store'])->name('paiements.store');
    Route::get('/paiements/{paiement}', [PaiementController::class, 'show'])->name('paiements.show');
    Route::get('/paiements/{paiement}/edit', [PaiementController::class, 'edit'])->name('paiements.edit');
    Route::put('/paiements/{paiement}', [PaiementController::class, 'update'])->name('paiements.update');
    Route::delete('/paiements/{paiement}', [PaiementController::class, 'destroy'])->name('paiements.destroy');

    // Route pour les statistiques des paiements
    Route::get('/paiements/statistics', [PaiementController::class, 'statistics'])->name('paiements.statistics');

    // Route pour le remboursement
    Route::post('/paiements/{paiement}/refund', [PaiementController::class, 'refund'])->name('paiements.refund');

    Route::get('/admin/settings', [HotelSettingController::class, 'edit'])->name('settings.edit');
    Route::put('/admin/settings', [HotelSettingController::class, 'update'])->name('settings.update');

});

Route::get('/',[ClientHomeController::class,'index'])->name('home');
Route::get('/about',[ClientHomeController::class,'about'])->name('about');
Route::get('/contact',[ClientHomeController::class,'contact'])->name('contact');

Route::get('/rooms',[ClientRoomController::class,'index'])->name('rooms');
Route::get('/rooms/{room}', [ClientRoomController::class, 'show'])->name('rooms.show');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

Route::middleware(['auth','verified'])->group(function () {
Route::post('/reservations', [ReservationController::class, 'store'])->name('reservations.store');
Route::get('/reservations/{reservation}', [ReservationController::class, 'show'])->name('reservations.show');
Route::delete('/reservations/{reservation}', [ReservationController::class, 'cancel'])->name('reservations.cancel');
Route::get('/dashboard', [ProfilController::class, 'index'])->name('dashboard');
Route::get('/dashboard/profil', [ProfilController::class, 'profil'])->name('dashboard.profil');
Route::get('/dashboard/profil/edit',[ProfilController::class, 'showEditProfil'])->name('dashboard.edit.profil');
Route::get('/logout', [ClientLoginController::class, 'logout'])->name('logout');
Route::get('/payment/{reservation}/checkout', [PaymentController::class, 'createCheckoutSession'])->name('payment.checkout');
Route::get('/payment/success/{reservation}', [PaymentController::class, 'success'])->name('payment.success');
Route::get('/payment/{reservation}/cancel', [PaymentController::class, 'cancel'])->name('payment.cancel');
Route::put('/user/update', [EditUserController::class, 'update'])->name('user.update');
Route::get('/change-password', [PasswordController::class, 'index'])->name('password.modify');
Route::post('/change-password', [PasswordController::class, 'changePassword'])->name('password.change');
});
Route::get('/signup', [SignUpController::class, 'showSignupForm'])->name('signup.form');
Route::post('/signup', [SignUpController::class, 'signup'])->name('signup');
Route::get('/verify-email/{token}', [SignUpController::class, 'verifyEmail'])->name('verify.email');

Route::get('/email/verify', function () {
    return view('frontend.auth.verify-email');
})->name('verification.notice');

Route::post('/email/resend', [SignupController::class, 'resendVerificationEmail'])->name('verification.resend');
