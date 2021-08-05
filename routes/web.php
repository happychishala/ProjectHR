<?php
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\PayrollController;
use App\Http\Controllers\TrainingController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\LeaveController;
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

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');
Route::middleware(['auth:sanctum', 'verified'])->resource('/employees',EmployeesController::class)->names([
    'index' => 'employees'
]) ;
Route::middleware(['auth:sanctum', 'verified'])->resource('/payroll',PayrollController::class)->names([
    'index' => 'payroll'
]) ;
Route::middleware(['auth:sanctum', 'verified'])->resource('/training',TrainingController::class)->names([
    'index' => 'training'
]) ;
Route::middleware(['auth:sanctum', 'verified'])->resource('/departments',DepartmentController::class)->names([
    'index' => 'dept'
]) ;
Route::middleware(['auth:sanctum', 'verified'])->resource('/leave',LeaveController::class)->names([
    'index' => 'leave'
]) ;

