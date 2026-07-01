<!DOCTYPE html>
<html>
<head>

<title>Posts</title>

</head>

<body>

<h1>Posts Page</h1>

<p>Welcome {{ Auth::user()->name }}</p>

<a href="{{ route('dashboard') }}">
Dashboard
</a>

</body>

</html>
