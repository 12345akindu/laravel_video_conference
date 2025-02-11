<?php

namespace App\Http\Controllers;


use App\Models\Meeting;
use Illuminate\Http\Request;

class MeetingController extends Controller
{
    public function scheduleMeeting(Request $request)
    {
        // Validate input
        $request->validate([
            'room_name' => 'required|string',
            'meeting_time' => 'required|date',
        ]);

        // Save meeting to database
        Meeting::create([
            'room_name' => $request->room_name,
            'meeting_time' => $request->meeting_time,
        ]);

        return redirect()->route('schedule.meeting')->with('success', 'Meeting scheduled successfully!');
    }

    public function showMeetings()
    {
       // Make sure to get meetings from the database
    $meetings = Meeting::all();

    // Check if meetings are found and pass them to the view
    return view('meetings_list', compact('meetings'));
    }
    public function startMeeting($id)
{
    $meeting = Meeting::findOrFail($id);

    // Log meeting start
    MeetingLog::create([
        'meeting_id' => $meeting->id,
        'action' => 'start',
    ]);

    // Redirect to Jitsi meet page
    return redirect()->route('video.conference', ['room' => $meeting->room_name]);
}

public function endMeeting($id)
{
    $meeting = Meeting::findOrFail($id);

    // Log meeting end
    MeetingLog::create([
        'meeting_id' => $meeting->id,
        'action' => 'end',
    ]);

    // Redirect or perform other actions
    return redirect()->route('meetings.list');
}

}
