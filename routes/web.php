<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AchivmentController;
use App\Http\Controllers\CoterieController;
use App\Http\Controllers\CreationController;
use App\Http\Controllers\ExcursionController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PracticeController;
use App\Http\Controllers\VideolessonController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Главная страница
Route::get('/', [MainController::class, 'index'])->name('home');

// Стриница с видкоуроками
Route::get('/videolesson', [MainController::class, 'videolesson'])->name('videolesson');

// Страница с практическими работами
Route::get('/practice', [MainController::class, 'practice'])->name('practice');

// Страница достижений студентов
Route::get('/student-achivment', [MainController::class, 'studentAchicvments'])->name('student-achivment');

// // Страница творчетсва студентов
Route::get('/student-creation', [MainController::class, 'studentCreation'])->name('student-creation');

// Страница кружка
Route::get('/coterie', [CoterieController::class, 'coterie'])->name('coterie');
Route::get('/coterie/post-{id}', [CoterieController::class, 'coterieSingle'])->name('coterie-single');

// Страница уроков-экскурсий
Route::get('/excursion', [ExcursionController::class, 'excursion'])->name('excursion');
Route::get('/excursion/post-{id}', [ExcursionController::class, 'excursionSingle'])->name('excursion-single');



// Главная страница админ-панели
Auth::routes();

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('admin');

Route::get('/logout', function() {
    Auth::logout();
    return redirect()->route('home');
})->name('logout');

// Редактирование главной страницы
Route::get('/admin/about', [AboutController::class, 'about'])->name('about');
Route::post('/admin/about/upload_file-{name}', [AboutController::class, 'uploadFile'])->name('about-upload-file');
Route::get('/admin/about/edit-{name}-{id}', [AboutController::class, 'editFile'])->name('about-edit-file');
Route::post('/admin/about/update-{name}-{id}', [AboutController::class, 'updateFile'])->name('about-update-file');
Route::get('/admin/about/delete-{name}-{id}', [AboutController::class, 'deleteFile'])->name('about-delete-file');

// Редактирование видеокурсов
Route::get('/admin/videolessons', [VideolessonController::class, 'videolesson'])->name('videolessons');
Route::post('/admin/videolessons/upload', [VideolessonController::class, 'uploadVideolesson'])->name('videolessons-upload');
Route::get('/admin/videolessons/edit-{id}', [VideolessonController::class, 'editVideolesson'])->name('videolessons-edit');
Route::post('/admin/videolessons/update-{id}', [VideolessonController::class, 'updateVideolesson'])->name('videolessons-update');
Route::get('/admin/videolessons/delete-{id}', [VideolessonController::class, 'deleteVideolesson'])->name('videolessons-delete');

// Редактирование практических работ
Route::get('/admin/practice', [PracticeController::class, 'practice'])->name('admin-practice');
Route::post('/admin/practice/upload', [PracticeController::class, 'uploadPractice'])->name('admin-practice-upload');
Route::get('/admin/practice/edit-{id}', [PracticeController::class, 'editPractice'])->name('admin-practice-edit');
Route::post('/admin/practice/update-{id}', [PracticeController::class, 'updatePractice'])->name('admin-practice-update');
Route::get('/admin/practice/delete-{id}', [PracticeController::class, 'deletePractice'])->name('admin-practice-delete');

// Редактирование постов кружка
Route::get('/admin/coterie', [CoterieController::class, 'adminCoterie'])->name('admin-coterie');
Route::post('/admin/coterie/upload', [CoterieController::class, 'uploadCoterie'])->name('admin-coterie-upload');
Route::get('/admin/coterie/edit-{id}', [CoterieController::class, 'editCoterie'])->name('admin-coterie-edit');
Route::post('/admin/coterie/update-{id}', [CoterieController::class, 'updateCoterie'])->name('admin-coterie-update');
Route::get('/admin/coterie/delete-{id}', [CoterieController::class, 'deleteCoterie'])->name('admin-coterie-delete');

// Редактирование постов уроков-эксурсий
Route::get('/admin/excursion', [ExcursionController::class, 'adminExcursion'])->name('admin-excursion');
Route::post('/admin/excursion/upload', [ExcursionController::class, 'uploadExcursion'])->name('admin-excursion-upload');
Route::get('/admin/excursion/edit-{id}', [ExcursionController::class, 'editExcursion'])->name('admin-excursion-edit');
Route::post('/admin/excursion/update-{id}', [ExcursionController::class, 'updateExcursion'])->name('admin-excursion-update');
Route::get('/admin/excursion/delete-{id}', [ExcursionController::class, 'deleteExcursion'])->name('admin-excursion-delete');

// Редактирование страницы достижений студентов
Route::get('/admin/student-achivment', [AchivmentController::class, 'achivment'])->name('admin-achivment');
Route::post('/admin/student-achivment/upload-{name}', [AchivmentController::class, 'achivmentUpload'])->name('admin-achivment-upload');
Route::get('/admin/student-achivment/edit-{name}-{id}', [AchivmentController::class, 'achivmentEdit'])->name('admin-achivment-edit');
Route::post('/admin/student-achivment/update-{name}-{id}', [AchivmentController::class, 'achivmentUpdate'])->name('admin-achivment-update');
Route::get('/admin/student-achivment/delete-{name}-{id}', [AchivmentController::class, 'achivmentDelete'])->name('admin-achivment-delete');

// Редактирование страницы достижений студентов
Route::get('/admin/student-creation', [CreationController::class, 'creation'])->name('admin-creation');
Route::post('/admin/student-creation/upload-{name}', [CreationController::class, 'creationUpload'])->name('admin-creation-upload');
Route::get('/admin/student-creation/edit-{name}-{id}', [CreationController::class, 'creationEdit'])->name('admin-creation-edit');
Route::post('/admin/student-creation/update-{name}-{id}', [CreationController::class, 'creationUpdate'])->name('admin-creation-update');
Route::get('/admin/student-creation/delete-{name}-{id}', [CreationController::class, 'creationDelete'])->name('admin-creation-delete');
