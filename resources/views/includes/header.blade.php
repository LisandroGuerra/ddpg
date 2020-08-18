<style>
    .nav-logo {
        background-color: #002133 !important;
    }
    .navbar-brand,
    .navbar-login,
    .nav-menu button {
        color: #FFF !important;
    }
    img.img-menu {
        margin-left: 1rem;
    }
    a.navbar-login {
        font-size: 0.8rem;
        text-decoration: none;
    }
    button.navbar-toggler {
        margin: 0.5rem;
    }
    .nav-menu {
        background-color: #00314D !important;
        padding: 0;
    }
    .nav-item {
        margin-left: 0.5rem;
    }
    a.nav-link {
        margin: 0;
        padding: 0.2rem;
        color: #FFF !important;
        font-size: 0.8rem;
        transition: 0.4s;
    }
    a.nav-link:hover {
        background-color: #FFF;
        color: #1B1E21 !important;
    }
    div.dropdown-menu {
        margin: 0;
        padding: 0;
        min-width: 8rem;
    }
    a.dropdown-item {
        margin: 0;
        padding: 0 0.5rem;
        color: #1B1E21 !important;
        font-size: 0.8rem;
        transition: 0.4s;
    }
    a.dropdown-item:hover {
        background-color: #00314D !important;
        color: #FFF !important;
    }

    .navbar-toggler-icon {
        color: white !important;
    }

    /* ============ auto open desktop view ============ */
    @media all and (min-width: 768px) {
        .navbar .nav-item .dropdown-menu{ display: none; }
        .navbar .nav-item:hover .nav-link{ color: #FFF;  }
        .navbar .nav-item:hover .dropdown-menu{ display: block; }
        .navbar .nav-item .dropdown-menu{ margin-top:0; }
    }
    /* ============ auto open desktop view .end// ============ */

</style>
<header>
    <nav class="d-none d-md-block navbar navbar-light bg-light nav-logo">
        <div class="d-flex justify-content-between align-items-center">
            <a class="navbar-brand" href="./">
                <img src="assets/images/large2_30.png" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
                {{env('APP_NAME')}}
            </a>
            <a href="#" class="navbar-login">
                <i class="fas fa-sign-in-alt"></i>
                Entrar
            </a>
        </div>
    </nav>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark nav-menu">
        <div class="d-md-none">
            <a class="navbar-brand" href="./">
                <img src="assets/images/large2_30.png" width="30" height="30" class="img-menu d-inline-block align-top" alt="" loading="lazy">
                {{env('APP_NAME')}}
            </a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
    {{--            <li class="nav-item active">--}}
    {{--                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>--}}
    {{--            </li>--}}
                <li class="nav-item d-md-none">
                    <a class="nav-link" href="#">Entrar <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Designação
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="./designar">Designar</a>
                        <a class="dropdown-item" href="#">Análise DIVAT</a>
                        <a class="dropdown-item" href="#">Análise DIRAT</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Desligamento
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="./desligar">Desligar</a>
                        <a class="dropdown-item" href="#">Análise DIVAT</a>
                        <a class="dropdown-item" href="#">Análise DIRAT</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Retificação
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="./retificar">Retificar</a>
                        <a class="dropdown-item" href="#">Análise DIVAT</a>
                        <a class="dropdown-item" href="#">Análise DIRAT</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Relatórios
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Relatório Designados</a>
                        <a class="dropdown-item" href="#">Relatório BMOB</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Consultas
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Servidor</a>
                        <a class="dropdown-item" href="#">Unidade</a>
                        <a class="dropdown-item" href="#">Programa</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header>
