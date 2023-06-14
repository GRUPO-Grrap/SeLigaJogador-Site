<nav class="navbar fixed-top" style="background-color: var(--main-color-azul);">

    {{-- Navbar logo --}}
    <div>
        <a class="navbar-brand" href="/">
            <img src="/img/logo.svg" style="margin: auto;" alt="Logo Se Liga Jogador" width="116" height="40">
        </a>
    </div>

    {{-- Navbar barra de pesquisa --}}
    <form action="/" method="GET">
        <div class="divBusca ">
            <input class="formSearch" type="text" id="search" name="search" placeholder=" Pesquisar..."
                aria-label="Search">
            <button class="btnSearch" type="submit">
                <i id="search" class="material-icons">search</i>
            </button>
        </div>
    </form>



    <div id="drop" class="dropdown">
        <i id="menuBurguer" class="material-icons dropdown" data-bs-toggle="dropdown" aria-expanded="false">menu</i>
        <ul class="dropdown-menu">

            {{-- Verifica se o usuário possui uma conta, se sim abre campos que são permitidos apenas para usuários que cotém contas --}}
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

            {{-- Verifica se o usuário não possui uma conta, permitindo campos para usuários que não tem contas --}}
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

    {{-- Navbar menu Mobile responsive, esse menu é ativado quando uma certa resolução de tela é atingida --}}
    <div id="dropMobile" class="dropleft">
        <i id="menuBurguerMobile" class="material-icons dropdown" data-bs-toggle="dropdown"
            aria-expanded="false">menu</i>
        <ul id="boxMobile" class="dropdown-menu">

            {{-- Verifica se o usuário possui uma conta, se sim abre campos que são permitidos apenas para usuários que cotém contas --}}
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

            {{-- Verifica se o usuário não possui uma conta, permitindo campos para usuários que não tem contas --}}
            @guest
                <li data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    <a dropdown-item href="#">Login</a>
                </li>
                <li data-bs-toggle="modal" data-bs-target="#staticBackdropTwo">
                    <a dropdown-item href="#">Cadastrar</a>
                </li>
            @endguest

            {{-- Navbar barra de pesquisa --}}
            <li>
                <form action="/" method="GET">
                    <div class="divBuscaMobile">
                        <input class="formSearchMobile" type="text" id="search" name="search"
                            placeholder=" Pesquisar..." aria-label="Search">
                        <button class="btnSearchMobile" type="submit">
                            <i id="search" class="material-icons">search</i>
                        </button>
                    </div>
                </form>
            </li>

        </ul>
    </div>

</nav>
