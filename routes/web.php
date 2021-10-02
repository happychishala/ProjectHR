<?php
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Models\Employee;
use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\PayrollController;
use App\Http\Controllers\TrainingController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\LeaveController;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    $all_emp = Employee::all()->count();
    return Inertia::render('Dashboard')->with('all_emp',$all_emp);
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->resource('/employees',EmployeesController::class)->names([
    'index' => 'employees',
    'store'=>'employees.store',
]) ;
Route::post('/employees.store', [EmployeesController::class, 'store'])->name('employees.store');

Route::get('/users/{id}', function (Request $request, $id) {
    $users = Employee::find($id);
    return $users;
});

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

