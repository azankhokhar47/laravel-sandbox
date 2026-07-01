<!DOCTYPE html>
<html>
<head>

<title>Profile</title>

</head>

<body>

<h1>Profile Page</h1>

<h2>{{ Auth::user()->name }}</h2>

<p>{{ Auth::user()->email }}</p>

<a href="{{ route('dashboard') }}">
Dashboard
</a>

</body>

</html>
