<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>DOGMEET</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="/">
                DOGMEET
            </a>
            <div>
                <ul class="navbar-nav d-flex flex-row gap-3">
                    <li class="nav-item">
                        <a class="nav-link" href="/animais">
                            Animais
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/dicas">
                            Dicas
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/denuncia">
                            Denúncia
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/login">
                            Login
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>

</body>
</html>