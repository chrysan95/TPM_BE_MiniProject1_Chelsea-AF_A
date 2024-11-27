<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Duelist Challenge</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <style type="text/css">
    body {
        font-family: 'Poppins';
        min-height: 100vh;
        background-color: #121D28;
        background-size: cover;
        background-position: center;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    nav{
        background-color: #0F1822;
        width: 100%;
        height: 60px;
        list-style: none;
        display: flex;
        justify-content: space-between;
        align-items: center;
        position: fixed;
        top: 0;
        right: 0;
        left: 0;
    }
    nav a{
        height: 100%;
        text-decoration: none;
        display: flex;
        align-items: center;
        padding: 0 30px;
        font-size: 1rem;
        color: #FF4654;
    }
    header{
        position: relative;
        padding: 0 2rem;
    }
    nav .logo a{
        font-size: 1.5rem;
        font-weight: bold;
    }
    nav li{
        height: 50px;
        display: flex;
    }
    nav .login_btn{
        background-color: #FF4654;
        color: #0F1822;
        padding: 0.5rem 1rem;
        margin-right: 10px;
        border: none;
        outline: none;
        border-radius: 25px;
        font-size: 1rem;
        font-weight: bold;
        height: 30px;
        min-width: 85px;
        align-items: center;
        justify-content: center;
        cursor: pointer;
    }
    
    nav .toggle_btn{
        margin-right: 10px;
        color:#FF4654;
        font-size: 1.5rem;
        cursor: pointer;
        display: none;
    }
    @media (max-width: 992px){
        nav .login_btn{
            display: none;
        }
        nav .toggle_btn{
            display: block;
        }
        nav .dropdown_menu.show{
            display: block;
        }
    }
    nav .dropdown_menu{
        position: absolute;
        right: 0;
        top: 45px;
        width: 300px;
        background:#0F1822;
        border-radius: 10px;
        overflow: hidden;
        display: none;
    }
    .home{
        width: 90%;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        text-align: center;
    }
    .home h1{
        font-weight: bold;
        color:#FF4654;
    }
    .home p{
        color:aliceblue;
        margin: 10px 0 40px;
    }
    </style>
  <body>
{{-- navbar --}}
<nav>
    <div class="logo">
        <a href="/">30 Days Duelist Challenge!</a>
    </div>
    
    <a href="/login" class="login_btn">Start Fragging</a>
    <div class="toggle_btn">
        <i class="fa-solid fa-bars"></i>
    </div>
    <div class="dropdown_menu">
        <li><a href="/login">Login / Sign Up</a></li>
    </div>
</nav>
{{-- home --}}
    <div class="home">
        <h1>Want to track your progress as a duelist?</h1>
        <p>A website to help you track your progresses when playing
            a duelist so that you can flame your entire team when 
            you lose and type "gg ez" in all chat</p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        const toggleBtn = document.querySelector('.toggle_btn');
        const toggleBtnIcon = document.querySelector('.toggle_btn i')
        const dropdownMenu = document.querySelector('.dropdown_menu');
        toggleBtn.addEventListener('click', () => {
            dropdownMenu.classList.toggle('show');
            const isShow = dropdownMenu.classList.contains('show')
            toggleBtnIcon.classList = isShow
            ? 'fa-solid fa-xmark'
            : 'fa-solid fa-bars'
        });
    </script>
  </body>
</html>