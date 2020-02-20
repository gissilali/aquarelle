<?php


Route::get('/', function () {
    return \Inertia\Inertia::render('Projects/Index');
});
