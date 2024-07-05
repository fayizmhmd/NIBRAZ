<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DatatableController;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('auth.login');
});

//FrontEnd:--
Route::get('/', [FrontEndController::class, 'home'])->name('frontend.home');
//About-us
Route::get('/about', [FrontEndController::class, 'AboutUs'])->name('front.AboutUs');
//contact-us
Route::get('/contact', [FrontEndController::class, 'ContactUs'])->name('front.ContactUs');
//Gallery
Route::get('/gallery', [FrontEndController::class,'Gallery'])->name('front.Gallery');
//Project
Route::get('/project', [FrontEndController::class, 'Project'])->name('front.Project');




Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('do-login', [AuthController::class, 'doLogin'])->name('do.login');





//category
Route::get('/category/{id}', [FrontEndController::class, 'listByCategory'])->name('admin.listByCategory');


Route::middleware(['auth'])->group(function () {


    Route::get('logout', [AuthController::class, 'destroy'])->name('logout');


    //dashboard
    Route::group(['middleware' => 'permission:dashboard'], function () {
        Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard');
    });


    //users
    Route::group(['middleware' => 'permission:all_users'], function () {
        Route::get('/view-users', [UserController::class, 'viewUsers'])->name('admin.viewUsers');
        Route::post('/add-new-user', [UserController::class, 'addUser'])->name('admin.addUser');
        Route::get('/toggle-user/{id}', [UserController::class, 'toggleUser'])->name('admin.toggleUser');
        Route::get('/edit-user/{id}', [UserController::class, 'editUser'])->name('admin.editUser');
        Route::post('/update-user-info', [UserController::class, 'updateUser'])->name('admin.updateUser');
        Route::post('/update-user-role', [UserController::class, 'updateRole'])->name('admin.updateUserRole');
        Route::get('/delete-user/{id}', [UserController::class, 'deleteUser'])->name('admin.deleteUser');
    });


    //Projects
    Route::get('/view-projects', [ProjectController::class, 'viewProjects'])->name('admin.viewProjects');
    Route::get('/add-projects', [ProjectController::class, 'addProjects'])->name('admin.addProjects');
    Route::post('/save-projects', [ProjectController::class, 'saveProjects'])->name('admin.saveProjects');
    Route::get('/toggle-projects/{id}', [ProjectController::class, 'toggleProject'])->name('admin.toggleProject');
    Route::get('/edit-projects/{id}', [ProjectController::class, 'editProjects'])->name('admin.editProjects');
    Route::post('/update-projects-info/{id}', [ProjectController::class, 'updateProjects'])->name('admin.updateProjects');
    Route::get('/delete-projects/{id}', [ProjectController::class, 'deleteProjects'])->name('admin.deleteProjects');

    //Gallery
    Route::get('/view-gallery', [GalleryController::class, 'viewGallery'])->name('admin.viewGallery');
    Route::get('/add-gallery', [GalleryController::class, 'addGallery'])->name('admin.addGallery');
    Route::post('/save-gallery', [GalleryController::class, 'saveGallery'])->name('admin.saveGallery');
    Route::get('/edit-gallery/{id}', [GalleryController::class, 'editGallery'])->name('admin.editGallery');
    Route::post('/update-gallery/{id}', [GalleryController::class, 'updateGallery'])->name('admin.updateGallery');
    Route::get('/delete-gallery/{id}', [GalleryController::class, 'deleteGallery'])->name('admin.deleteGallery');
    Route::get('/toggle-gallery/{id}', [GalleryController::class, 'toggleGallery'])->name('admin.toggleGallery');


    //ClientLogo

    Route::get('/logo', [LogoController::class,   'ViewLogo'])->name('admin.viewlogo');
    Route::get('/add-logo', [LogoController::class, 'addLogo'])->name('admin.addlogo');
    Route::get('/edit-logo/{id}', [LogoController::class, 'editLogo'])->name('admin.editlogo');
    Route::post('/save-logo', [LogoController::class, 'saveLogo'])->name('admin.savelogo');
    Route::post('/update-logo/{id}', [LogoController::class, 'updateLogo'])->name('admin.updatelogo');
    Route::get('/delete-logo/{id}', [LogoController::class, 'deleteLogo'])->name('admin.deletelogo');





    //settings
    Route::get('/view-settings', [SettingsController::class, 'viewsettings'])->name('admin.viewsettings');
    Route::post('/update-settings', [SettingsController::class, 'updatesettings'])->name('admin.updatesettings');


    //Review
    Route::get('/view-reviews', [ReviewController::class, 'viewReviews'])->name('admin.viewReviews');
    Route::get('/add-reviews', [ReviewController::class, 'addReviews'])->name('admin.addReviews');
    Route::post('/save-reviews', [ReviewController::class, 'saveReviews'])->name('admin.saveReviews');
    Route::get('/edit-reviews/{id}', [ReviewController::class, 'editReviews'])->name('admin.editReviews');
    Route::post('/update-reviews/{id}', [ReviewController::class, 'updateReview'])->name('admin.updateReview');
    Route::get('/delete-reviews/{id}', [ReviewController::class, 'deleteReview'])->name('admin.deleteReview');
    Route::get('/toggle-reviews/{id}', [ReviewController::class, 'toggleReview'])->name('admin.toggleReview');




    //contact us
    Route::get('/view-contact-us', [ContactUsController::class, 'viewcontact'])->name('admin.viewcontact');


    //mail from user
    Route::post('/view-mails', [ContactUsController::class, 'contactmail'])->name('front.contactmail');
    Route::get('/view-contactform', [ContactUsController::class, 'viewcontactform'])->name('front.viewcontactform');


    //Subscriptions
    Route::group(['middleware' => 'permission:subscriptions'], function () {
        Route::get('/view-subscriptions', [SubscriptionController::class, 'viewSubscriptions'])->name('admin.viewSubscriptions');
    });


    // Permissions
    // Route::group(['middleware' => 'permission:permissions'], function () {
    Route::get('/create-role-and-give-permission', [PermissionController::class, 'createRole']);
    Route::get('/create-permission', [PermissionController::class, 'createPermission']);
    Route::get('/assign-user-to-permission', [PermissionController::class, 'assignPermissionToUser']);
    Route::get('/test-permission', [PermissionController::class, 'testPermission']);
    Route::get('/get-user-roles-permission', [PermissionController::class, 'getUserRolesAndPermissions']);
    Route::get('/give-all-permission-superadmin', [PermissionController::class, 'givePermissions']);
    // });


    Route::group(['middleware' => 'permission:reports'], function () {
        Route::get('/subscription-report', [ReportController::class, 'subscriptionReport'])->name('admin.subscriptionReport');
    });


    //Datatable
    Route::get('/get-all-users-datatable', [DatatableController::class, 'getAllUsers'])->name('admin.getAllUsers');
    Route::get('/get-all-plans-datatable', [DatatableController::class, 'getAllPlans'])->name('admin.getAllPlans');
    Route::get('/get-all-categories-datatable', [DatatableController::class, 'getAllCategories'])->name('admin.getAllCategories');
    Route::get('/get-all-reviews-datatable', [DatatableController::class, 'getAllReviews'])->name('admin.getAllReviews');
    Route::get('/get-all-projects-datatable', [DatatableController::class, 'getAllprojects'])->name('admin.getAllprojects');
    Route::get('/get-all-gallaries-datatable', [DatatableController::class, 'getGalleries'])->name('admin.getGalleries');



    Route::get('/get-all-subscription-datatable', [DatatableController::class, 'getAllSubscriptions'])->name('admin.getAllSubscriptions');
    Route::get('/get-report-subscription-datatable', [DatatableController::class, 'getReportSubscription'])->name('admin.getReportSubscription');
});


Route::get('/get-all-contactus-list-datatable', [DatatableController::class, 'getContactus'])->name('admin.getContactus');
