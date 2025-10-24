<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bitcount+Grid+Single:wght@100..900&display=swap" rel="stylesheet">
    <title>Home</title>
</head>
<style>

    .bitcount-grid-single{
                               font-family: "Bitcount Grid Single", system-ui;
                               font-optical-sizing: auto;
                               font-weight: 200;
                               font-style: normal;
                               font-variation-settings:
                                   "slnt" 0,
                                   "CRSV" 0.5,
                                   "ELSH" 0,
                                   "ELXP" 0;
                           }
    body{
        background-color: #000000;
    }
    p{
        color: #FFFFFF;
    }
    h1{
        text-align: center;
        color: #ff0000;
    }
    a{
        text-decoration: none;
        padding-left: 10px;
        color: white;
        display: block;
    }
    section{
        display: block;
        width: 50%;
        height: 50%;
        margin-left: 25%;
        border: 3px solid darkred;
        color: white;
        text-align: center;
        font-family: 'Bitcount Grid Single';
        font-size: 1.5em;
        padding: 10px ;
    }

    input:enabled{
        background-color: darkred;
        padding: 20px;
        border: none;
        border-radius: 10px;
    }

    .field{
        display: block;
        margin: auto;
    }

</style>
<body>
    <header>
        <h1>Post App</h1>
        @auth
            <form action="/logout" method="POST">
                @csrf
                <button>Logout</button>
            </form>
        @endauth
    </header>
    @auth

    @else
    <section>
        <div class="register">
            <form action="/register" method="post">
                @csrf
                <label>Register</label>
                <br>
                <br>
                <input type="text" name="name" placeholder="Full Name" class="field">
                <br>
                <input type="text" name="email" placeholder="Email" class="field">
                <br>
                <input type="password" name="password" placeholder="Password" class="field">
                <br>
                <button>Register</button>
            </form>
        </div>
    </section>
    <br>
    <section>
        <div class="register">
            <form action="/login" method="POST">
                @csrf
                <label>Login</label>
                <br>
                <br>
                <input type="text" placeholder="Email" name="email" class="field">
                <br>
                <input type="password" placeholder="Password" name="password" class="field">
                <br>
                <button>Login</button>
            </form>
        </div>
    </section>
    @endauth
</body>
</html>
