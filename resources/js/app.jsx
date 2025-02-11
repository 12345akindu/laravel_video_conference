import React, { useState } from "react";
import VideoConference from "./components/VideoConference.jsx";  // Add .jsx if needed


function App() {
  const [room, setRoom] = useState("");

  return (
    <div>
      <h1>Join a Video Conference</h1>
      <input
        type="text"
        placeholder="Enter Room Name"
        value={room}
        onChange={(e) => setRoom(e.target.value)}
      />
      <button onClick={() => window.location.href = `/video/${room}`}>Join</button>
    </div>
  );
}

export default App;
