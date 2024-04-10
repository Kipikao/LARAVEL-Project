<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NotebookController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuestionController;
use App\Models\User;
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

// $input_text = "border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm mt-1 block w-full";

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/', function () {
    return view('index');
})->name('/');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::patch('/profile/{id}/update', [UserController::class, 'updateuser'])->name('profile.update.user');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Route for questions user

    Route::get('/questions/user', [QuestionController::class, 'questionuser'])->name('questions.user');
    Route::get('/questions/questions/user', [QuestionController::class, 'adduser'])->name('questions.add.user');
    Route::post('/questions/questions', [QuestionController::class, 'storeuser'])->name('question.store.user');
    Route::get('/questions/{question}/edit', [QuestionController::class, 'edituser'])->name('question.edit.user');
    Route::put('/questions/{question}/update', [QuestionController::class, 'updateuser'])->name('question.update.user');
    Route::delete('/questions/{question}/destroy', [QuestionController::class, 'destroyuser'])->name('question.destroy.user');
});

require __DIR__ . '/auth.php';

Route::get('/products', function () {
    return view('products');
})->name('products');
// Route for admin
Route::prefix('admin')->middleware(['auth', 'verified', 'is_admin'])->group(function () {

    Route::get('/admin', [UserController::class, 'view'])->name('admin');
    Route::post('/admin', [UserController::class, 'store'])->name('admin.store');
    Route::get('/admin/add', [UserController::class, 'add'])->name('admin.add');
    Route::get('/admin/{id}', [UserController::class, 'show'])->name('admin.show');
    Route::get('/admin/{id}/edit', [UserController::class, 'edit'])->name('admin.edit');
    Route::post('/admin/update/{id}', [UserController::class, 'update'])->name('admin.update');
    Route::delete('/admin/{id}/destroy', [UserController::class, 'destroy'])->name('admin.destroy');

    // Route for questions admin

    Route::get('/question/editQuestion', [QuestionController::class, 'adminque'])->name('adminQuestion');
    Route::get('/question/viewQuestion/{id}', [QuestionController::class, 'showque'])->name('viewQuestion');
    Route::get('/question/answerQue/{id}', [QuestionController::class, 'editQue'])->name('editQuestion');
    Route::put('/admin/{id}/update', [QuestionController::class, 'updateque'])->name('updateQuestion');
    Route::delete('/questions/{id}/destroy', [QuestionController::class, 'destroyque'])->name('destroyQuestion');

    

    // Route for appointment admin

    Route::get('/programari', [AppointmentController::class, 'appointmentadmin'])->name('programariadmin');
    Route::get('/programari/{id}', [AppointmentController::class, 'show'])->name('programarishow');
    Route::get('/programari/{id}/edit', [AppointmentController::class, 'editappo'])->name('programarianswer');
    Route::post('/programari/{id}/update', [AppointmentController::class, 'updateappo'])->name('programariupdate');
    Route::delete('/programari/{id}/destroy', [AppointmentController::class, 'destroyappo'])->name('programaridestroy');

    // Route for questions admin in site

    Route::get('/questions', [QuestionController::class, 'questionadmin'])->name('questions.admin');
    // Route::post('/questions', [QuestionController::class, 'store'])->name('question.store.admin');
    Route::get('/questions/addQuestion', [QuestionController::class, 'add'])->name('questions.add.admin');
    Route::get('/questions/{question}/edit', [QuestionController::class, 'editadmin'])->name('question.edit.admin');
    Route::put('/questions/{question}/update', [QuestionController::class, 'update'])->name('question.update.admin');
    Route::delete('/question/{question}/destroy', [QuestionController::class, 'destroyadmin'])->name('question.destroy.admin');
});


Route::get('/button', function () {
    return view('button');
})->name('button');
Route::get('/addfile-button', function () {
    return view('addfile-button');
});

// Route for contact

Route::get('/contacts', [ContactController::class, 'contact'])->name('contacts');
Route::post('/contacts', [ContactController::class, 'store'])->name('contacts.store');

// Route for questions

Route::get('/questions', [QuestionController::class, 'question'])->name('questions');
Route::post('/questions', [QuestionController::class, 'store'])->name('question.store');
Route::get('/questions/addQuestion', [QuestionController::class, 'add'])->name('questions.add');
// Route::get('/questions/{question}/edit', [QuestionController::class, 'edit'])->name('question.edit');
// Route::put('/questions/{question}/update', [QuestionController::class, 'update'])->name('question.update');
// Route::delete('/questions/{question}/destroy', [QuestionController::class, 'destroy'])->name('question.destroy');


// Route for caiet_service

Route::get('/notebooks', [NotebookController::class, 'caiet'])->middleware(['auth', 'verified'])->name('notebooks');
Route::get('/notebooks/addNotebooks', [NotebookController::class, 'add'])->middleware(['auth', 'verified'])->name('notebooks.add');
Route::post('/notebooks', [NotebookController::class, 'store'])->middleware(['auth', 'verified'])->name('notebooks.store');
Route::get('/notebooks/{caiet}/edit', [NotebookController::class, 'edit'])->middleware(['auth', 'verified'])->name('notebooks.edit');
Route::put('/notebooks/{caiet}/update', [NotebookController::class, 'update'])->middleware(['auth', 'verified'])->name('notebooks.update');
Route::delete('/notebooks/{caiet}/destroy', [NotebookController::class, 'destroy'])->middleware(['auth', 'verified'])->name('notebooks.destroy');

// Route for appointment

Route::get('/programari', [AppointmentController::class, 'appointment'])->middleware(['auth', 'verified'])->name('programari');
Route::get('/programari/add', [AppointmentController::class, 'add'])->middleware(['auth', 'verified'])->name('programariadd');
Route::post('/programari', [AppointmentController::class, 'store'])->middleware(['auth', 'verified'])->name('programari.store');
Route::get('/programari/{programare}/edit', [AppointmentController::class, 'edit'])->middleware(['auth', 'verified'])->name('programari.edit');
Route::post('/programari/{programare}/update', [AppointmentController::class, 'update'])->middleware(['auth', 'verified'])->name('programari.update');
Route::delete('/programari/{programare}/destroy', [AppointmentController::class, 'destroy'])->middleware(['auth', 'verified'])->name('programari.destroy');
