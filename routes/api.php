<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\MeetingController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post("/meetings", [MeetingController::class, "createMeeting"]);
Route::get("/meetings", [MeetingController::class, "getAllMeetings"]);
Route::get("/meetings/{id}", [MeetingController::class, "getMeetingById"]);
Route::put("/meetings/{id}", [MeetingController::class, "updateMeeting"]);
Route::delete("/meetings/{id}", [MeetingController::class, "deleteMeeting"]);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

