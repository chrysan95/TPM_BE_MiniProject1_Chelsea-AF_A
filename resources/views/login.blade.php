@extends('navbar')

{{-- TODO! = AUTHENTICATION BELUM --}}

@section('loginpage')
    <style>
    body {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        background: black;
    }
    .wrapper{
        width: 420px;
        background: transparent;
        border: 2px solid rgba(255, 255, 255, .2);
        color: white;
        border-radius: 10px;
        padding: 30px 40px;
    }
    .wrapper h1{
        color: #FF4654;
        font-weight: 600;
        font-size: 36px;
        text-align: center;
    }
    .wrapper .loginbox{
        position: relative;
        width: 100%;
        height: 50px;
        margin: 30px 0;
    }
    .loginbox input{
        width: 100%;
        height: 100%;
        background: transparent;
        border: none;
        outline: none;
        border: 2px solid rgba(255, 255, 255, .2);
        border-radius: 40px;
        font-size: 16px;
        color: white;
        padding: 20px 45px 20px 20px;
    }
    .loginbox input::placeholder{
        color: white;
    }
    .loginbox i{
        position: absolute;
        right: 20px;
        top: 50%;
        transform: translateY(-50%);
        font-size: 20px;
    }
    .wrapper .remember{
        display: flex;
        justify-content: space-between;
        font-size: 14.5px;
        margin: -15px 0 15px;
    }
    .remember label input{
        accent-color: white;
        margin-right: 3px;
    }
    .wrapper .btn{
        width: 100%;
        height: 45px;
        background: transparent;
        border: 2px solid rgba(255, 70, 84, 2);
        outline: none;
        border-radius: 40px;
        box-shadow: 0 0 10px rgba(0, 0, 0, .1);
        cursor: pointer;
        font-size: 16px;
        color: rgb(255, 70, 84);
        font-weight: 600;
    }
    .wrapper .btn:hover{
        width: 100%;
        height: 45px;
        background: #121D28;
        border: 2px solid rgba(255, 70, 84, 2);
        outline: none;
        border-radius: 40px;
        box-shadow: 0 0 10px rgba(0, 0, 0, .1);
        cursor: pointer;
        font-size: 16px;
        color: #FF4654;
        font-weight: 600;
    }
    .wrapper .register{
        font-size: 14.5px;
        text-align: center;
        margin: 20px 0 15px;
    }
    .register p a{
        color: #FF4654;
        text-decoration: none;
        font-weight: 600;
    }
    .register p a:hover{
        text-decoration: underline;
    }
    </style>
<body>
    <div class="wrapper">
        <h1>Welcome!</h1>
        <form action="" method="POST">
            @csrf
            <div class="loginbox">
                <input type="text" placeholder="Username" required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="loginbox">
                <input type="password" placeholder="Password" required>
                <i class='bx bxs-lock-alt' ></i>
            </div>
            <div class="remember">
                <label><input type="checkbox"> Remember me</label>
            </div>
                <button type="submit" class="btn" onclick="window.location.href='{{ url('user') }}'">Login</button>
            <div class="register">
                <p>New here? <a href="/register">Start fragging</a></p>
            </div>
        </form>
    </div>
</body>
@show