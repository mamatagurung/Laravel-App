<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/demo',function(){
    echo "hello world";
});

Route::post('/test',function()
{
    echo "test";

});

// Route::get('/privacy-policy',function(){
//     return view('privacy-policy');
// });
// Route::get('/terms-and-condition',function(){
//     return view('terms-and-condition');
// });

// Route::get('/careers',function(){
//     return view('careers');
// });


Route::get('/careers', [App\Http\Controllers\Careers::class, 'index'])->name('career.index');
Route::get('/terms-and-condition', [App\Http\Controllers\TermsCondition::class, 'index'])->name('term.index');
