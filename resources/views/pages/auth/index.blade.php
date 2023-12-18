<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login :: FORTUNA</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
        integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        input:focus {
            outline: 0;
        }

        input {
            border: 0;
            border-bottom: 2px solid var(--blue-color) !important;
        }

        .card {
            background-color: #212529;
            border-radius: 10px;
            color: #fff;
        }

        .card-body {
            padding: 2rem;
        }

        .form-control {
            background-color: transparent;
            border-radius: 0;
            border: none;
            color: #fff;
        }

        .card-body img {
            max-width: 100%;
            max-height: 100px;
            margin: 0 auto;
        }

        .form-control:focus {
            box-shadow: none;
        }

        button.btn-primary {
            background-color: #667385;
            border-color: #667385;
        }
    </style>
</head>

<body>

    <div class="d-flex flex-column justify-content-center align-items-center vh-100 bg-dark">
        <div class="card bg-light">
            <div class="card-body">
                <form action="{{ route('auth') }}" method="POST" class="d-flex flex-column px-4">
                    @csrf
                    <div class="mb-4">
                        @if (Session('alert'))
                            <div class="text-danger">{{ Session('alert') }}</div>
                        @endif
                    </div>
                    <div class="container">
                        <img src="{{ asset('img/logo.jpg') }}" alt="Logo" class="img-fluid mx-auto d-block">
                    </div><br>
                    <div class="mb-2 d-flex justify-content-center">
                        <h2 class="text-dark">LOGIN</h2>
                    </div>
                    <div class="mb-4">
                        <input type="text" name="username" id="username" class="form-control mb-2"
                            placeholder="Username" autocomplete="off">
                    </div>
                    <div class="mb-4">
                        <input type="password" name="password" id="password" class="form-control"
                            placeholder="Password" autocomplete="off">
                    </div>
                    <button type="submit" class="btn btn-primary rounded-lg shadow-none mt-2">Masuk</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
</body>

</html>
