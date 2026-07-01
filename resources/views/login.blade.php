<!DOCTYPE html>
<html>
<head>
    <title>Login</title>

    <style>

        body{
            font-family:Arial;
            background:#f5f5f5;
        }

        .container{
            width:400px;
            margin:100px auto;
            background:white;
            padding:30px;
            border-radius:10px;
            box-shadow:0 0 10px rgba(0,0,0,.2);
        }

        input{
            width:100%;
            padding:10px;
            margin-top:10px;
            margin-bottom:15px;
        }

        button{
            width:100%;
            padding:10px;
            background:#0d6efd;
            color:white;
            border:none;
            border-radius:5px;
            cursor:pointer;
        }

        .error{
            color:red;
        }

    </style>

</head>
<body>

<div class="container">

    <h2>Login</h2>

    @if ($errors->any())
        <div class="error">
            {{ $errors->first() }}
        </div>
    @endif

    <form action="{{ route('login') }}" method="POST">

        @csrf

        <label>Email</label>

        <input
            type="email"
            name="email"
            value="{{ old('email') }}"
            required
        >

        <label>Password</label>

        <input
            type="password"
            name="password"
            required
        >

        <button type="submit">
            Login
        </button>

    </form>

</div>

</body>
</html>
