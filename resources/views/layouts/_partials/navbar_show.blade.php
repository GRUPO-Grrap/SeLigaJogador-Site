<nav class="navbar" style="background-color: var(--main-color-azul);">
    <!-- Navbar logo-->
    <div>
        <a class="navbar-brand" href="/">
            <img src="/img/logo.svg" style="margin: auto;" alt="Logo Se Liga Jogador" width="116" height="40">
        </a>
    </div>

    <!--Navbar menu-->
    <div id="drop" class="dropdown">
        <i id="menuBurguer" class="material-icons dropdown" data-bs-toggle="dropdown" aria-expanded="false">menu</i>
        <ul class="dropdown-menu">
            @auth
                <li>
                    <i class="material-icons">account_circle</i>
                    <a href="/profile">Perfil</a>
                </li>
                <form action="/logout" method="POST">
                    <li onclick="event.preventDefault(); this.closest('form').submit();">
                        <i class="material-icons">logout</i>
                        @csrf
                        <a href="/">
                            Sair
                        </a>
                    </li>
                </form>
            @endauth
            @guest
                <li data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    <a dropdown-item href="#">Login</a>
                </li>
                <li data-bs-toggle="modal" data-bs-target="#staticBackdropTwo">
                    <a dropdown-item href="#">Cadastrar</a>
                </li>
            @endguest
        </ul>
    </div>

    <!--Navbar menu Mobile responsive-->
    <div id="dropMobile" class="dropleft">
        <i id="menuBurguerMobile" class="material-icons dropdown" data-bs-toggle="dropdown"
            aria-expanded="false">menu</i>
        <ul id="boxMobile" class="dropdown-menu">
            @auth
                <li>
                    <i class="material-icons">account_circle</i>
                    <a href="/profile">Perfil</a>
                </li>
                <form action="/logout" method="POST">
                    <li onclick="event.preventDefault(); this.closest('form').submit();">
                        <i class="material-icons">logout</i>
                        @csrf
                        <a href="/">
                            Sair
                        </a>
                    </li>
                </form>
            @endauth
            @guest
                <li data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    <a dropdown-item href="#">Login</a>
                </li>
                <li data-bs-toggle="modal" data-bs-target="#staticBackdropTwo">
                    <a dropdown-item href="#">Cadastrar</a>
                </li>
            @endguest
        </ul>
    </div>

</nav>
