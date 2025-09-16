<!DOCTYPE html>
<html>
<head>
    <title>Test SOS</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    <h2>Trigger SOS</h2>
    <button id="sosButton">🚨 Send SOS</button>

    <script>
        document.getElementById('sosButton').addEventListener('click', function () {
            // User ki real location fetch karo
            navigator.geolocation.getCurrentPosition(function(position) {
                let latitude = position.coords.latitude;
                let longitude = position.coords.longitude;

                fetch("/sos/trigger", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute("content")
                    },
                    body: JSON.stringify({
                        latitude: latitude,
                        longitude: longitude
                    })
                })
                .then(res => res.json())
                .then(data => {
                    console.log(data);
                    alert("✅ SOS sent with location: " + latitude + ", " + longitude);
                })
                .catch(err => {
                    console.error(err);
                    alert("❌ Error sending SOS");
                });
            });
        });
    </script>
</body>
</html>