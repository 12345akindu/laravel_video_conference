<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/video/{room}', function ($room) {
    return view('video', ['room' => $room]);
});

Route::get('/video-conference', [App\Http\Controllers\VideoConferenceController::class, 'index'])->name('video.conference');

Route::get('/schedule-meeting', function () {
    return view('schedule_meeting');
});
Route::get('/meetings', [App\Http\Controllers\MeetingController::class, 'showMeetings'])->name('meetings.list');


Route::post('/schedule-meeting', [App\Http\Controllers\MeetingController::class, 'scheduleMeeting'])->name('schedule.meeting');

Route::post('/start-meeting/{id}', [App\Http\Controllers\MeetingController::class, 'startMeeting']);
Route::post('/end-meeting/{id}', [App\Http\Controllers\MeetingController::class, 'endMeeting']);

