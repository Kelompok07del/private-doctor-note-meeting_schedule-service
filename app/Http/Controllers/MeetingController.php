<?php

namespace App\Http\Controllers;

use App\Models\Meeting;
use Illuminate\Http\Request;

class MeetingController extends Controller
{

    public function createMeeting(Request $request) {
        $meeting = Meeting::create([
            "schedule" => $request->input("schedule"),
            "information" => $request->input("information")
        ]);

        return response()->json($meeting, 201);
    }

    public function getAllMeetings(Request $request) {
        $meeting = Meeting::all();

        return response()->json($meeting, 200);
    }

    public function getMeetingById($id) {
        $meeting = Meeting::find($id);
        return response()->json($meeting, 200);
    }

    public function updateMeeting(Request $request, $id) {
        $meeting = Meeting::find($id);

        $meeting->schedule = $request->input('schedule');
        $meeting->information = $request->input('information');
        $meeting->save();

        return response()->json($meeting, 200);
    }

    public function deleteMeeting($id) {
        $meeting = Meeting::find($id);
        $meeting->delete();
        return response()->json(['message' => 'data deleted successfully'], 200);
    }

}
