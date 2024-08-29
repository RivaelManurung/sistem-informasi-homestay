<?php


use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.frontend.home.index');
});

Route::get('/blog', function () {
    return view('pages.frontend.blog.index');
});

Route::get('/blog-single', function () {
    return view('pages.frontend.blog.blog-single');
});

