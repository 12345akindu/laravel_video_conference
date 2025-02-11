import { useEffect } from "react";

const VideoConference = ({ roomName }) => {
  useEffect(() => {
    const domain = "meet.jit.si";
    const options = {
      roomName: roomName,
      width: "100%",
      height: "100vh",
      parentNode: document.getElementById("jitsi-container"),
    };
    new window.JitsiMeetExternalAPI(domain, options);
  }, [roomName]);

  return <div id="jitsi-container"></div>;
};

export default VideoConference;
