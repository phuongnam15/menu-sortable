<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;

Route::get('manage-menus/{id?}',[MenuController::class,'index']);
Route::post('create-menu',[MenuController::class,'store']);	
Route::get('add-categories-to-menu',[MenuController::class,'addCatToMenu']);
Route::get('add-post-to-menu',[MenuController::class,'addPostToMenu']);
Route::get('add-custom-link',[MenuController::class,'addCustomLink']);	
Route::get('update-menu',[MenuController::class,'updateMenu']);	
Route::post('update-menuitem/{id}',[MenuController::class,'updateMenuItem']);
Route::get('delete-menuitem/{id}/{key}/{in?}',[MenuController::class,'deleteMenuItem']);
Route::get('delete-menu/{id}',[MenuController::class,'destroy']);	
