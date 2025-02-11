@extends('layouts.app')

@section('content')
    <h1>Scheduled Meetings</h1>

    @forelse($meetings as $meeting)
        <div>
            <h3>{{ $meeting->room_name }} - {{ $meeting->meeting_time }}</h3>
            <form action="{{ url('/start-meeting/'.$meeting->id) }}" method="POST">
                @csrf
                <button type="submit">Start Meeting</button>
            </form>

            <ul>
                @foreach($meeting->logs as $log)
                    <li>{{ $log->action }} - {{ $log->created_at }}</li>
                @endforeach
            </ul>
        </div>
    @empty
        <p>No meetings scheduled.</p>
    @endforelse
@endsection
