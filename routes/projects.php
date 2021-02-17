<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\Projects\allProjects;
use App\Http\Controllers\projects\EditProjectsController;
use App\Http\Controllers\Projects\CreateProjectController;

Route::get('/projects', [CreateProjectController::class, 'index'])
                ->middleware('auth')
                ->name('project');


// Route::get('/projects/all', [allProjects::class, 'all'])
//                 ->middleware('auth')
//                 ->name('projects.all');

// Route::resource('projects',[CreateProjectController::class])

Route::get('/projects/all', [CreateProjectController::class, 'all'])->middleware('auth')->name('projects.all');

Route::get('/projects/allcropsrelated/{id}', [CreateProjectController::class, 'allcropsrelated'])->middleware('auth')->name('projects.allcropsrelated');
Route::get('/projects/allcropsrelatedtotal/{id}', [CreateProjectController::class, 'allcropsrelatedtotal'])->middleware('auth')->name('projects.allcropsrelatedtotal');

Route::get('/projects/cropsrelated/destroy/{id}', [CreateProjectController::class, 'cropsrelateddestroy'])
                ->middleware('auth')
                ->name('deletecropsrelated'); 

Route::get('/projects/create', [CreateProjectController::class, 'create'])
                ->middleware('auth')
                ->name('createproject');

Route::post('/projects/create/fetch', [CreateProjectController::class, 'fetch'])
                 ->middleware('auth')
                 ->name('CreateProjectController.fetch');

Route::post('create_save', [CreateProjectController::class, 'create_save'])
                 ->middleware('auth')
                 ->name('projects.save');

Route::get('/projects/update/{id}', [CreateProjectController::class, 'show'])
                ->middleware('auth')
                ->name('updateproject');

Route::post('/projects/update/{id}', [CreateProjectController::class, 'store_save'])
                ->middleware('auth');


Route::get('/projects/edit/{id}', [CreateProjectController::class, 'edit'])
                ->middleware('auth')
                ->name('editproject');     
                
Route::post('/projects/edit/addrelatedcrops/{id}', [CreateProjectController::class, 'addrelatedcrops'])
                ->middleware('auth')
                ->name('projects.edit.addrelatedcrops');
 
Route::get('/projects/edit/editcropsrelated/{id}', [CreateProjectController::class, 'editrelatedcrops'])
                ->middleware('auth')
                ->name('projects.edit.editrelatedcrops');

Route::post('/projects/edit/editcropsrelated/{id}', [CreateProjectController::class, 'editrelatedcrops_save'])
                ->middleware('auth')
                ->name('projects.edit.editrelatedcrops_save');

                
Route::get('/projects/destroy/{id}', [CreateProjectController::class, 'destroy'])
                ->middleware('auth')
                ->name('deleteproject');                   


            