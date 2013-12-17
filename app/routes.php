<?php

Route::get('/', function()
{
    return View::make('index');
});

Route::get('todos', function()
{
    return Todo::all();
});

Route::post('todos', function()
{
    return Todo::create(Input::all());
});


