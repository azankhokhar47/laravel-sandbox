<!DOCTYPE html>
<html>
<head>

    <title>Dashboard</title>

    <style>

        body{
            font-family:Arial;
            background:#f5f5f5;
        }

        .container{
            width:600px;
            margin:80px auto;
            background:white;
            padding:30px;
            text-align:center;
            border-radius:10px;
            box-shadow:0px 0px 10px #ccc;
        }

        a,button{

            padding:10px 20px;
            text-decoration:none;
            border:none;
            background:#0d6efd;
            color:white;
            border-radius:5px;
            margin:10px;
            cursor:pointer;

        }

        .logout{
            background:red;
        }

    </style>

</head>

<body>

<div class="container">

<h1>Dashboard</h1>

<h2>Welcome {{ Auth::user()->name }}</h2>

<p>Email : {{ Auth::user()->email }}</p>

<br>

<a href="{{ route('profile') }}">
    Profile
</a>

<a href="{{ route('posts') }}">
    Posts
</a>

<form action="{{ route('logout') }}" method="GET">

    <button class="logout">
        Logout
    </button>

</form>

</div>

</body>

</html>
