<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Jobs\RunJob;
use App\Jobs\RunPrivateJob;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->group(function () {
    
    Route::get('job/public', function () {
        
        dispatch(new RunJob())->delay(now()->addSeconds(5));
        
        return response()->json(['status' => 'done']);
        
    })->name('api.job.public');
    
    Route::get('job/private', function () {
        
        dispatch(new RunPrivateJob(auth()->id()))->delay(now()->addSeconds(5));
        
        return response()->json(['status' => 'done']);
        
    })->name('api.job.private');
    
});
