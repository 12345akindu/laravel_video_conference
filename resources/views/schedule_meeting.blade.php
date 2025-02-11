<form action="{{ route('schedule.meeting') }}" method="POST">
    @csrf
    <label for="room_name">Room Name:</label>
    <input type="text" name="room_name" id="room_name" required>
    
    <label for="meeting_time">Meeting Time:</label>
    <input type="datetime-local" name="meeting_time" id="meeting_time" required>
    
    <button type="submit">Schedule Meeting</button>
</form>
