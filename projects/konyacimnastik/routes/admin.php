<?php

use App\Support\Permissions;
use Illuminate\Support\Facades\Route;

/* AUTH */
use App\Http\Controllers\Admin\Auth\AdminLoginController;
use App\Http\Controllers\Admin\AuthenticationController;

/* CORE */
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\RoleandaccessController;

/* MODULES */
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
use App\Http\Controllers\Admin\CryptocurrencyController;

Route::prefix('admin')->name('admin.')->group(function () {

    /*
    |--------------------------------------------------------------------------
    | GUEST ADMIN
    |--------------------------------------------------------------------------
    */
    Route::middleware('guest:admin')->group(function () {
        Route::get('/login', [AdminLoginController::class, 'showLoginForm'])->name('login');
        Route::post('/login', [AdminLoginController::class, 'login'])->name('login.post');
        Route::get('/forgot-password', [AuthenticationController::class, 'forgotPassword'])->name('forgotPassword');
        Route::get('/signup', [AuthenticationController::class, 'signup'])->name('signup');
    });

    /*
    |--------------------------------------------------------------------------
    | AUTH ADMIN
    |--------------------------------------------------------------------------
    */
    Route::middleware(['auth:admin', 'is_admin'])->group(function () {

        /* DASHBOARD */
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
        Route::post('/logout', [AdminLoginController::class, 'logout'])->name('logout');

        /* SETTINGS */
        Route::prefix('settings')
            ->middleware('permission:' . Permissions::SETTINGS)
            ->controller(SettingsController::class)
            ->group(function () {
                Route::get('company', 'company')->name('company');
                Route::get('currencies', 'currencies')->name('currencies');
                Route::get('language', 'language')->name('language');
                Route::get('notification', 'notification')->name('notification');
                Route::get('notification-alert', 'notificationAlert')->name('notificationAlert');
                Route::get('payment-gateway', 'paymentGateway')->name('paymentGateway');
                Route::get('theme', 'theme')->name('theme');
            });

        /* MENU */
        Route::prefix('menus')
            ->name('menus.')
            ->middleware('permission:' . Permissions::SETTINGS)
            ->controller(MenuController::class)
            ->group(function () {
                Route::get('/', 'index')->name('index');
                Route::get('{menu}/edit', 'edit')->name('edit');
                Route::put('{menu}', 'update')->name('update');
            });

        /* ROLE & ACCESS */
        Route::prefix('roleandaccess')
            ->middleware('permission:' . Permissions::ROLES)
            ->controller(RoleandaccessController::class)
            ->group(function () {
                Route::get('assign-role', 'assignRole')->name('assignRole');
                Route::post('assign-role', 'assignRoleStore')->name('assignRole.store');
                Route::get('role-access', 'roleAaccess')->name('roleAaccess');
                Route::post('role-access/{role}', 'updateRolePermissions')->name('roleAaccess.update');
            });

        /* HOME / COMMON */
        Route::controller(HomeController::class)->group(function () {
            Route::get('email', 'email')->name('email');
            Route::get('chatmessage', 'chatMessage')->name('chatMessage');
            Route::get('chatempty', 'chatempty')->name('chatempty');
            Route::get('faq', 'faq')->name('faq');
            Route::get('gallery', 'gallery')->name('gallery');
            Route::get('calendar', 'calendar')->name('calendar');
            Route::get('kanban', 'kanban')->name('kanban');
            Route::get('pricing', 'pricing')->name('pricing');
            Route::get('widgets', 'widgets')->name('widgets');
            Route::get('blankPage', 'blankPage')->name('blankPage');
        });

        /* AI APPLICATION */
        Route::prefix('aiapplication')
            ->middleware('permission:' . Permissions::AI)
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

        /* CHARTS */
        Route::prefix('chart')
            ->middleware('permission:' . Permissions::CHARTS)
            ->controller(ChartController::class)
            ->group(function () {
                Route::get('columnchart', 'columnChart')->name('columnChart');
                Route::get('linechart', 'lineChart')->name('lineChart');
                Route::get('piechart', 'pieChart')->name('pieChart');
            });

        /* COMPONENTS */
        Route::prefix('componentpage')
            ->controller(ComponentpageController::class)
            ->middleware('permission:' . Permissions::COMPONENTS)
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

        /* FORMS */
        Route::prefix('forms')
            ->middleware('permission:' . Permissions::FORMS)
            ->controller(FormsController::class)
            ->group(function () {
                Route::get('form', 'form')->name('form');
                Route::get('form-layout', 'formLayout')->name('formLayout');
                Route::get('form-validation', 'formValidation')->name('formValidation');
                Route::get('wizard', 'wizard')->name('wizard');
            });

        /* INVOICE */
        Route::prefix('invoice')
            ->middleware('permission:' . Permissions::INVOICE)
            ->controller(InvoiceController::class)
            ->group(function () {
                Route::get('invoice-add', 'invoiceAdd')->name('invoiceAdd');
                Route::get('invoice-edit', 'invoiceEdit')->name('invoiceEdit');
                Route::get('invoice-list', 'invoiceList')->name('invoiceList');
                Route::get('invoice-preview', 'invoicePreview')->name('invoicePreview');
            });

        /* TABLES */
        Route::prefix('table')
            ->middleware('permission:' . Permissions::TABLES)
            ->controller(TableController::class)
            ->group(function () {
                Route::get('tablebasic', 'tableBasic')->name('tableBasic');
                Route::get('tabledata', 'tableData')->name('tableData');
            });

        /* USERS */
        Route::prefix('users')
            ->middleware('permission:' . Permissions::USERS)
            ->controller(UsersController::class)
            ->group(function () {
                Route::get('users-list', 'usersList')->name('usersList');
                Route::get('users-grid', 'usersGrid')->name('usersGrid');
                Route::get('view-profile', 'viewProfile')->name('viewProfile');
                Route::get('add-user', 'addUser')
                    ->middleware('permission:users.manage')
                    ->name('addUser');
            });

        /* BLOG */
        Route::prefix('blog')
            ->middleware('permission:' . Permissions::BLOG)
            ->controller(BlogController::class)
            ->group(function () {
                Route::get('blog', 'blog')->name('blog');
                Route::get('blogDetails', 'blogDetails')->name('blogDetails');
                Route::get('addBlog', 'addBlog')
                    ->middleware('permission:blog.create')
                    ->name('addBlog');
            });

        /* CRYPTO */
        Route::prefix('cryptocurrency')
            ->middleware('permission:' . Permissions::CRYPTO)
            ->controller(CryptocurrencyController::class)
            ->group(function () {
                Route::get('marketplace', 'marketplace')->name('marketplace');
                Route::get('marketplacedetails', 'marketplaceDetails')->name('marketplaceDetails');
                Route::get('portfolio', 'portfolio')->name('portfolio');
                Route::get('wallet', 'wallet')->name('wallet');
            });
    });
});
