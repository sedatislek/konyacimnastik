<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Auth\AdminLoginController;
use App\Http\Controllers\Admin\AuthenticationController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\AiapplicationController;
use App\Http\Controllers\Admin\ChartController;
use App\Http\Controllers\Admin\ComponentpageController;
use App\Http\Controllers\Admin\FormsController;
use App\Http\Controllers\Admin\InvoiceController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\TableController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\RoleandaccessController;
use App\Http\Controllers\Admin\CryptocurrencyController;


Route::prefix('admin')->name('admin.')->group(function () {

    // GUEST ADMIN (login, signup, forgot)
    Route::middleware('guest:admin')->group(function () {
        Route::get('/login', [AdminLoginController::class, 'showLoginForm'])->name('login');
        Route::post('/login', [AdminLoginController::class, 'login'])->name('login.post');

        Route::get('/forgot-password', [AuthenticationController::class, 'forgotPassword'])
            ->name('forgotPassword');

        Route::get('/signup', [AuthenticationController::class, 'signup'])
            ->name('signup');
    });

    // AUTH ADMIN
    Route::middleware(['auth:admin', 'is_admin'])->group(function () {

        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
        Route::post('/logout', [AdminLoginController::class, 'logout'])->name('logout');

        /*
        |--------------------------------------------------------------------------
        | SETTINGS
        |--------------------------------------------------------------------------
        */
        Route::prefix('settings')
            ->controller(SettingsController::class)
            ->middleware('can:permission,settings.manage')
            ->group(function () {
                Route::get('company', 'company')->name('company');
                Route::get('currencies', 'currencies')->name('currencies');
                Route::get('language', 'language')->name('language');
                Route::get('notification', 'notification')->name('notification');
                Route::get('notification-alert', 'notificationAlert')->name('notificationAlert');
                Route::get('payment-gateway', 'paymentGateway')->name('paymentGateway');
                Route::get('theme', 'theme')->name('theme');
            });

        /*
        |--------------------------------------------------------------------------
        | ROLE & ACCESS
        |--------------------------------------------------------------------------
        */
        Route::prefix('roleandaccess')
            ->controller(RoleandaccessController::class)
            ->middleware('can:permission,roles.manage')
            ->group(function () {
                // 1️⃣ ADMIN → ROLE
                Route::get('assign-role', 'assignRole')
                    ->name('assignRole');

                Route::post('assign-role', 'assignRoleStore')
                    ->name('assignRole.store');

                // 2️⃣ ROLE → PERMISSION
                Route::get('role-access', 'roleAaccess')
                    ->name('roleAaccess');

                Route::post('role-access/{role}', 'updateRolePermissions')
                    ->name('roleAaccess.update');
            });

        /*
        |--------------------------------------------------------------------------
        | HOME / COMMON PAGES
        |--------------------------------------------------------------------------
        */
        Route::controller(HomeController::class)->group(function () {
            Route::get('chatmessage', 'chatMessage')->name('chatMessage');
            Route::get('chatempty', 'chatempty')->name('chatempty');
            Route::get('email', 'email')->name('email');
            Route::get('error', 'error1')->name('error');
            Route::get('faq', 'faq')->name('faq');
            Route::get('gallery', 'gallery')->name('gallery');
            Route::get('kanban', 'kanban')->name('kanban');
            Route::get('pricing', 'pricing')->name('pricing');
            Route::get('termscondition', 'termsCondition')->name('termsCondition');
            Route::get('widgets', 'widgets')->name('widgets');
            Route::get('chatprofile', 'chatProfile')->name('chatProfile');
            Route::get('veiwdetails', 'veiwDetails')->name('veiwDetails');
            Route::get('blankPage', 'blankPage')->name('blankPage')->middleware('can:permission,dashboard.view');;
            Route::get('comingSoon', 'comingSoon')->name('comingSoon');
            Route::get('maintenance', 'maintenance')->name('maintenance');
            Route::get('starred', 'starred')->name('starred');
            Route::get('testimonials', 'testimonials')->name('testimonials');
        });

        /*
        |--------------------------------------------------------------------------
        | AI APPLICATION
        |--------------------------------------------------------------------------
        */
        Route::prefix('aiapplication')
            ->controller(AiapplicationController::class)
            ->group(function () {
                Route::get('codegenerator', 'codeGenerator')->name('codeGenerator');
                Route::get('codegeneratornew', 'codeGeneratorNew')->name('codeGeneratorNew');
                Route::get('imagegenerator', 'imageGenerator')->name('imageGenerator');
                Route::get('textgenerator', 'textGenerator')->name('textGenerator');
                Route::get('textgeneratornew', 'textGeneratorNew')->name('textGeneratorNew');
                Route::get('videogenerator', 'videoGenerator')->name('videoGenerator');
                Route::get('voicegenerator', 'voiceGenerator')->name('voiceGenerator');
            });

        /*
        |--------------------------------------------------------------------------
        | CHARTS
        |--------------------------------------------------------------------------
        */
        Route::prefix('chart')
            ->controller(ChartController::class)
            ->group(function () {
                Route::get('columnchart', 'columnChart')->name('columnChart');
                Route::get('linechart', 'lineChart')->name('lineChart');
                Route::get('piechart', 'pieChart')->name('pieChart');
            });

        /*
        |--------------------------------------------------------------------------
        | COMPONENT PAGES
        |--------------------------------------------------------------------------
        */
        Route::prefix('componentpage')
            ->controller(ComponentpageController::class)
            ->group(function () {
                Route::get('alert', 'alert')->name('alert');
                Route::get('avatar', 'avatar')->name('avatar');
                Route::get('badges', 'badges')->name('badges');
                Route::get('button', 'button')->name('button');
                Route::get('calendar', 'calendar')->name('calendar');
                Route::get('card', 'card')->name('card');
                Route::get('carousel', 'carousel')->name('carousel');
                Route::get('colors', 'colors')->name('colors');
                Route::get('dropdown', 'dropdown')->name('dropdown');
                Route::get('imageupload', 'imageUpload')->name('imageUpload');
                Route::get('list', 'list')->name('list');
                Route::get('pagination', 'pagination')->name('pagination');
                Route::get('progress', 'progress')->name('progress');
                Route::get('radio', 'radio')->name('radio');
                Route::get('starrating', 'starRating')->name('starRating');
                Route::get('switch', 'switch')->name('switch');
                Route::get('tabs', 'tabs')->name('tabs');
                Route::get('tags', 'tags')->name('tags');
                Route::get('tooltip', 'tooltip')->name('tooltip');
                Route::get('typography', 'typography')->name('typography');
                Route::get('videos', 'videos')->name('videos');
            });

        /*
        |--------------------------------------------------------------------------
        | DASHBOARD VARIANTS
        |--------------------------------------------------------------------------
        */
        Route::prefix('dashboard')
            ->controller(DashboardController::class)
            ->group(function () {
                Route::get('index2', 'index2')->name('index2');
                Route::get('index3', 'index3')->name('index3');
                Route::get('index4', 'index4')->name('index4');
                Route::get('index5', 'index5')->name('index5');
                Route::get('index6', 'index6')->name('index6');
                Route::get('index7', 'index7')->name('index7');
                Route::get('index8', 'index8')->name('index8');
                Route::get('index9', 'index9')->name('index9');
                Route::get('index10', 'index10')->name('index10');
            });

        /*
        |--------------------------------------------------------------------------
        | FORMS
        |--------------------------------------------------------------------------
        */
        Route::prefix('forms')
            ->controller(FormsController::class)
            ->group(function () {
                Route::get('form-layout', 'formLayout')->name('formLayout');
                Route::get('form-validation', 'formValidation')->name('formValidation');
                Route::get('form', 'form')->name('form');
                Route::get('wizard', 'wizard')->name('wizard');
            });

        /*
        |--------------------------------------------------------------------------
        | INVOICE
        |--------------------------------------------------------------------------
        */
        Route::prefix('invoice')
            ->controller(InvoiceController::class)
            ->group(function () {
                Route::get('invoice-add', 'invoiceAdd')->name('invoiceAdd');
                Route::get('invoice-edit', 'invoiceEdit')->name('invoiceEdit');
                Route::get('invoice-list', 'invoiceList')->name('invoiceList');
                Route::get('invoice-preview', 'invoicePreview')->name('invoicePreview');
            });

        /*
        |--------------------------------------------------------------------------
        | TABLES
        |--------------------------------------------------------------------------
        */
        Route::prefix('table')
            ->controller(TableController::class)
            ->group(function () {
                Route::get('tablebasic', 'tableBasic')->name('tableBasic');
                Route::get('tabledata', 'tableData')->name('tableData');
            });

        /*
        |--------------------------------------------------------------------------
        | USERS
        |--------------------------------------------------------------------------
        */
        Route::prefix('users')
            ->controller(UsersController::class)
            ->group(function () {
                Route::get('add-user', 'addUser')->name('addUser');
                Route::get('users-grid', 'usersGrid')->name('usersGrid');
                Route::get('users-list', 'usersList')->name('usersList');
                Route::get('view-profile', 'viewProfile')->name('viewProfile');
            });

        /*
        |--------------------------------------------------------------------------
        | BLOG
        |--------------------------------------------------------------------------
        */
        Route::prefix('blog')
            ->controller(BlogController::class)
            ->group(function () {
                Route::get('addBlog', 'addBlog')->name('addBlog');
                Route::get('blog', 'blog')->name('blog');
                Route::get('blogDetails', 'blogDetails')->name('blogDetails');
            });

        /*
        |--------------------------------------------------------------------------
        | CRYPTOCURRENCY
        |--------------------------------------------------------------------------
        */
        Route::prefix('cryptocurrency')
            ->controller(CryptocurrencyController::class)
            ->group(function () {
                Route::get('marketplace', 'marketplace')->name('marketplace');
                Route::get('marketplacedetails', 'marketplaceDetails')->name('marketplaceDetails');
                Route::get('portfolio', 'portfolio')->name('portfolio');
                Route::get('wallet', 'wallet')->name('wallet');
            });
    });
});
