<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jitsi Meet Video Conference</title>
</head>
<body>
    <div id="jitsi-container" style="width: 100%; height: 600px;"></div>

    <script src="https://meet.jit.si/external_api.js"></script>
    <script>
        const domain = 'meet.jit.si';
        const options = {
            roomName: 'SchoolMeetingRoom',  // Customize room name
            width: '100%',
            height: 600,
            parentNode: document.querySelector('#jitsi-container'),
            userInfo: {
                displayName: 'Your Name',
                email: 'your_email@example.com',
            }
        };
        const api = new JitsiMeetExternalAPI(domain, options);
    </script>
</body>
</html>
