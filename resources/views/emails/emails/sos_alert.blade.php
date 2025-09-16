<!DOCTYPE html>
<html>
<head>
    <title>SOS Alert</title>
</head>
<body>
    <h2>🚨 SOS Alert from {{ $user->name }}</h2>
    <p>User <strong>{{ $user->name }}</strong> triggered an SOS alert at {{ now() }}.</p>

    <p><strong>Location:</strong> 
       <a href="https://maps.google.com/?q={{ $location['latitude'] }},{{ $location['longitude'] }}">
           View on Google Maps
       </a>
    </p>

    <p><strong>Contact:</strong> {{ $user->phone }} | {{ $user->email }}</p>

    <p>Please take immediate action.</p>
</body>
</html>