<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VideoConferenceController extends Controller
{
    public function index()
    {
        return view('video_conference');
    }
}
