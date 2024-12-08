<?php

use Illuminate\Support\Facades\Route;

// Routes for each Blade file
Route::get('/', function () {
    return view('index');
});

Route::get('/about-us', function () {
    return view('about-us');
});

Route::get('/contact-us', function () {
    return view('contact-us');
});

Route::get('/free-instant-quote', function () {
    return view('free-instant-quote');
});

Route::get('/get-quote', function () {
    return view('get-quote');
});

Route::get('/refund-policies', function () {
    return view('refund-policies');
});

Route::get('/terms-and-conditions', function () {
    return view('terms-and-conditions');
});

Route::get('/privacy-policies', function () {
    return view('privacy-policies');
});

Route::get('/order-cancellation', function () {
    return view('order-cancellation');
});

Route::get('/return-and-exchange-policy', function () {
    return view('return-and-exchange-policy');
});


Route::get('/reviews', function () {
    return view('reviews');
});

Route::get('/samples', function () {
    return view('samples');
});

Route::get('/sitemap', function () {
    return view('sitemap');
});

$files = [
    'back-patches',
    'chenille-patches',
    'custom-hats',
    'custom-jerseys',
    'custom-keychains',
    'custom-printed-lanyards',
    'custom-stickers',
    'custom-uniforms',
    'custom-woven-labels',
    'embroidered-patches',
    'enamel-pins',
    'hat-patches',
    'iron-patches',
    'jersey-patches',
    'lapel-pins',
    'logo-patches',
    'morales-patches',
    'motorcycle-patches',
    'name-patches',
    'police-patches',
    'pvc-patches',
    'sewn-patches',
    'uniform-patches',
    'woven-patches',
    'sew-on-patches'
];

// Loop through the array and create routes dynamically, with 'services.' as the view path prefix
foreach ($files as $file) {
    Route::get("/{$file}", function () use ($file) {
        return view('services.' . $file);
    });
}
