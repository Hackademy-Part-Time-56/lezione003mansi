{{-- resources/views/errors/404.blade.php --}}

<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Error Page</title>
    <link rel="stylesheet" href="./error_page.css" />
    <script src="https://kit.fontawesome.com/66aa7c98b3.js" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">

    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: "Poppins", sans-serif;
        }

        .container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .gif {
            display: flex;
            justify-content: center;
        }

        .content {
            text-align: center;
            margin: 3rem 0;
        }

        .content .main-heading {
            font-size: 2.5rem;
            font-weight: 700;
        }

        p {
            font-size: 1.3rem;
            padding: 0.7rem 0;
        }

        button {
            padding: 1rem;
            border-radius: 15px;
            outline: none;
            border: none;
            background: #0046d4;
            color: #fff;
            font-size: 1.3rem;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="gif">
            <img src="https://i.postimg.cc/2yrFyxKv/giphy.gif" alt="gif_ing" />
        </div>
        <div class="content">
            <h1 class="main-heading">Questa pagina non è più disponibile.</h1>
            <p>
                ...forse la pagina che stai cercando non è stata trovata o non è mai esistita.
            </p>
            <a href="{{ route('home') }}" target="blank">
                <button>torna alla home <i class="far fa-hand-point-right btn-primary"></i></button>
            </a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous">
    </script>
</body>

</html>
