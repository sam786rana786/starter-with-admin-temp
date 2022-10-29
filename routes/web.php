<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AlbumController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\VandMController;
use App\Http\Controllers\Admin\AdmFrmController;
use App\Http\Controllers\Admin\AlumniController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\FooterController;
use App\Http\Controllers\Admin\NoticeController;
use App\Http\Controllers\Admin\SchoolController;
use App\Http\Controllers\Admin\UniformController;
use App\Http\Controllers\Admin\EmployeeController;
use App\Http\Controllers\Admin\FacilitiesController;
use App\Http\Controllers\Admin\MandatoryController;
use App\Http\Controllers\Admin\HighlightsController;
use App\Http\Controllers\Admin\ImportantImagesController;
use App\Http\Controllers\Admin\TransferCertificateController;

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

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('about-us/', 'about')->name('home.about');
    Route::get('mandatory-disclosure/', 'disclosure')->name('disclosure');
    Route::get('facility/', 'facilities')->name('facility');
    Route::get('admission/', 'admission')->name('admission');
    Route::get('achievements/', 'achievements')->name('achievements');
    Route::get('info_link/', 'info_link')->name('info_link');
    Route::get('gallery/', 'gallery')->name('gallery');
    Route::get('tcs/', 'tcs')->name('tcs');
    Route::post('tcs/', 'tcsearch')->name('tcs');
    Route::get('alumni/', 'alumni')->name('alumni');
    Route::get('contact/', 'contact')->name('contact');
    Route::get('adm_frm', 'adm_frm')->name('adm_frm');
    Route::post('alumni', 'alumni_add')->name('alumni_add');
});

Route::middleware(['auth'])->group(function () {
    Route::controller(AdminController::class)->group(function () {
        Route::get('/dashboard', 'index')->name('dashboard');
        Route::get('/logout', 'logout')->name('admin.logout');
        Route::get('/profile', 'profile')->name('admin.profile');
        Route::get('/edit/profile', 'editProfile')->name('edit.profile');
        Route::post('/store/profile', 'storeProfile')->name('store.profile');
        Route::get('/change/password', 'changePassword')->name('change.password');
        Route::post('/store/password', 'storePassword')->name('store.password');
        Route::put('update/applicant/{$admFrm}', 'updateAdm')->name('approveApplicant');
    });

    Route::controller(BannerController::class)->group(function () {
        Route::get('/banner', 'index')->name('banner.index');
        Route::get('/banner/create', 'create')->name('banner.create');
        Route::post('/banner/store', 'store')->name('banner.store');
        Route::get('/banner/edit/{id}', 'edit')->name('banner.edit');
        Route::put('/banner/update/{id}', 'update')->name('banner.update');
        Route::get('/banner/delete/{id}', 'delete')->name('banner.delete');
    });

    Route::resource('highlights', HighlightsController::class);

    Route::controller(SchoolController::class)->group(function () {
        Route::get('school/1', 'edit')->name('school.edit');
        Route::put('school/1', 'update')->name('school.update');
    });

    Route::resource('album', AlbumController::class)->except('destroy');
    Route::post('album/{id}/images', [AlbumController::class, 'uploadImages'])->name('uploadImages');
    Route::get('album/photo/{id}', [AlbumController::class, 'deleteImages'])->name('deleteImage');
    Route::get('album/{id}/delete', [AlbumController::class, 'destroy'])->name('album.delete');

    Route::get('vandm/', [VandMController::class, 'index'])->name('vandm.index');
    Route::get('vandm/edit/{id}', [VandMController::class, 'edit'])->name('vandm.edit');
    Route::put('vandm/update/{id}', [VandMController::class, 'update'])->name('vandm.update');

    Route::get('footer/', [FooterController::class, 'index'])->name('footer.index');
    Route::get('footer/edit/{id}', [FooterController::class, 'edit'])->name('footer.edit');
    Route::put('footer/update/{id}', [FooterController::class, 'update'])->name('footer.update');

    Route::resource('notice', NoticeController::class)->except(['destroy']);
    Route::get('notice/delete/{id}', [NoticeController::class, 'delete'])->name('notice.delete');

    Route::resource('events', EventController::class)->except(['destroy']);
    Route::get('event/delete/{id}', [EventController::class, 'delete'])->name('events.delete');

    Route::get('about', [AboutController::class, 'index'])->name('about.index');
    Route::get('about/edit/{about}', [AboutController::class, 'edit'])->name('about.edit');
    Route::put('about/edit/{about}', [AboutController::class, 'update'])->name('about.update');

    Route::resource('employee', EmployeeController::class);
    Route::get('upload', [EmployeeController::class, 'upload'])->name('upload');
    Route::post('/upload-content', [EmployeeController::class, 'uploadContent'])->name('import.content');

    Route::resource('mandatory', MandatoryController::class)->except(['show', 'create', 'store', 'destroy']);

    Route::resource('important', ImportantImagesController::class)->except(['show', 'create', 'store', 'destroy']);

    Route::resource('uniform', UniformController::class)->except(['show', 'create', 'store', 'destroy']);

    Route::resource('facilities', FacilitiesController::class)->except('destroy');
    Route::get('facility/delete/{facility}', [FacilitiesController::class, 'delete'])->name('facilities.destroy');
    Route::resource('tc', TransferCertificateController::class);
    // Route::get('tc/delete/{transferCertificate}', [TransferCertificateController::class, 'delete'])->name('tc.destroy');

    Route::controller(UniformController::class)->group(function () {
        Route::get('create/admission/fees', 'createAdmissionFees')->name('createAdmissionFees');
        Route::post('store/admission/fees', 'storeAdmissionFees')->name('storeAdmissionFees');
        Route::get('edit/admission/fees/{admissionFee}', 'admissionFeesEdit')->name('editAdmissionFees');
        Route::put('update/admission/fees/{admissionFee}', 'admissionFeesUpdate')->name('updateAdmissionFees');
        Route::get('delete/admission/fees/{admissionFee}', 'deleteAdmissionFees')->name('deleteAdmissionFees');

        Route::get('create/age/criteria', 'createAgeCriteria')->name('createAgeCriteria');
        Route::post('store/age/criteria', 'storeAgeCriteria')->name('storeAgeCriteria');
        Route::get('edit/age/criteria/{ageCriteria}', 'ageCriteriaEdit')->name('editAgeCriteria');
        Route::put('update/age/criteria/{ageCriteria}', 'ageCriteriaUpdate')->name('updateAgeCriteria');
        Route::get('delete/age/criteria/{ageCriteria}', 'deleteAgeCriteria')->name('deleteAgeCriteria');

        Route::get('create/dress', 'createDress')->name('createDress');
        Route::post('store/dress', 'storeDress')->name('storeDress');
        Route::get('edit/dress/{dress}', 'dressEdit')->name('editDress');
        Route::put('update/dress/{dress}', 'dressUpdate')->name('updateDress');
        Route::get('delete/dress/{dress}', 'deleteDress')->name('deleteDress');

        Route::get('create/fee/chart', 'createFeeChart')->name('createFeeChart');
        Route::post('store/fee/chart', 'storeFeeChart')->name('storeFeeChart');
        Route::get('edit/fee/chart/{feeChart}', 'feeChartEdit')->name('editFeeChart');
        Route::put('update/fee/chart/{feeChart}', 'feeChartUpdate')->name('updateFeeChart');
        Route::get('delete/fee/chart/{feeChart}', 'deleteFeeChart')->name('deleteFeeChart');
        Route::controller(AdmFrmController::class)->group(function () {
            Route::get('online/admission/list', 'showAdmFrm')->name('online.admission');
            Route::put('update/online/admission/{admFrm}', 'update')->name('approveApplicant');
            Route::post('storeAdmFrm', 'storeAdmFrm')->name('storeAdmFrm');
        });
        Route::get('alumni/list', [AlumniController::class, 'showAdmFrm'])->name('alumni.list');
        Route::put('update/alumni/{alumni}', [AlumniController::class, 'update'])->name('alumni.update');
    });
});


require __DIR__ . '/auth.php';
