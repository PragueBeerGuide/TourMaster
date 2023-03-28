<?php

use App\Http\Controllers\Admin\GuideController;
use Illuminate\Support\Facades\Route;

Route::middleware('can:admin')->group(function() {

    // guides
    Route::get('/admin/guides', [GuideController::class, 'index'])->name('admin.guides');
    Route::get('/admin/guides/create', [GuideController::class, 'create'])->name('admin.guides.create');
    Route::post('/admin/guides', [GuideController::class, 'store'])->name('admin.guides.store');
    Route::get('/admin/guides/{guide_id}', [GuideController::class, 'edit'])->name('admin.guides.edit');
    Route::put('/admin/guides/{guide_id}', [GuideController::class, 'update'])->name('admin.guides.update');
    Route::delete('/admin/guides/{guide_id}', [GuideController::class, 'destroy'])->name('admin.guides.delete');


});