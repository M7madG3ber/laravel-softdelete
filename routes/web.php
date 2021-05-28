<?php

Route::get("/", [
    "as" => "homepage",
    "uses" => "MainController@home"
]);

Route::resource('category', 'CategoriesController');

Route::get('category/restore/{id}', [
    'as' => 'category.restore',
    'uses' => 'CategoriesController@restore'
]);
Route::get('category/force/{id}', [
    'as' => 'category.force',
    'uses' => 'CategoriesController@force'
]);