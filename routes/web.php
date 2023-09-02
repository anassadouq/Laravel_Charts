<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChartController;


Route::get('/',[ChartController::class,'DonutChart']);


Route::controller(ChartController::class)->group(function(){
    Route::get('barchart','Barchart');
});
Route::get('donutchart',[ChartController::class,'DonutChart']);
Route::get('linechart',[ChartController::class,'lineChart']);