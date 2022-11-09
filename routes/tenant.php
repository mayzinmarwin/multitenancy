<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginTenantController;
use Stancl\Tenancy\Middleware\InitializeTenancyByDomain;
use Stancl\Tenancy\Middleware\PreventAccessFromCentralDomains;

/*
|--------------------------------------------------------------------------
| Tenant Routes
|--------------------------------------------------------------------------
|
| Here you can register the tenant routes for your application.
| These routes are loaded by the TenantRouteServiceProvider.
|
| Feel free to customize them however you want. Good luck!
|
*/

// Route::middleware([
//     'web',
//     InitializeTenancyByDomain::class,
//     PreventAccessFromCentralDomains::class,
// ])->group(function () {
//     Route::get('/', function () {
//         dd(\App\Models\User::all());
//         return 'This is your multi-tenant application. The id of the current tenant is ' . tenant('id');
//     });
// });
Route::middleware([
    'web',
    InitializeTenancyByDomain::class,
    PreventAccessFromCentralDomains::class,
])->group(function () {
    Route::get('/', function () {
        // return view('tenanthome');
        return view('tenantregister');
    });
    Route::get('/login', function () {
        // return view('tenanthome');
        return view('tenantlogin');
    });
    Route::post('tenant/user/login',[LoginTenantController::class,'tenantLogin'])->name('tenant.login');
    Route::post('tenant/user/register',[LoginTenantController::class,'tenantRegister'])->name('tenant.register');
    Route::post('tenant/user/update',[LoginTenantController::class,'tenanatUpdate'])->name('tenant.update');
});
// Route::post('tenant/register','App\Http\Controllers\RegisterTenantController@register');