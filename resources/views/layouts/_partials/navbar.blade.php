<nav class="navbar fixed-top" style="background-color: var(--main-color-azul);"> 

  <!-- Navbar logo-->
    <div>
      <a class="navbar-brand" href="/">
        <img src="/img/logo.svg" style="margin: auto;" alt="Logo Se Liga Jogador" width="116" height="40">
      </a>
    </div>
      
  <!--Navbar form-->
  <form action="/" method="GET">
    <div class="divBusca ">
      <input class="formSearch" type="text" id="search" name="search" placeholder=" Pesquisar..." aria-label="Search">
      <button class="btnSearch" type="submit"> 
        <i id="search" class="material-icons">search</i>
      </button>
    </div>  
  </form>

  <!--Navbar menu-->
    <div id="drop" class="dropdown">
      <i id="menuBurguer" class="material-icons dropdown"  data-bs-toggle="dropdown" aria-expanded="false">menu</i>
        <ul class="dropdown-menu">
          <li  data-bs-toggle="modal" data-bs-target="#staticBackdrop"><a dropdown-item href="#">Entrar</a></li>
          <li data-bs-toggle="modal" data-bs-target="#staticBackdropTwo"><a dropdown-item href="#" >Cadastrar</a></li>
        </ul>
    </div>

    <!--Navbar menu Mobile responsive-->
    <div id="dropMobile"  class="dropleft">
      <i id="menuBurguerMobile" class="material-icons dropdown"  data-bs-toggle="dropdown" aria-expanded="false">menu</i>
        <ul id="boxMobile" class="dropdown-menu">
          <li data-bs-toggle="modal" data-bs-target="#staticBackdrop"><a dropdown-item href="#">Entrar</a></li>
          <li data-bs-toggle="modal" data-bs-target="#staticBackdropTwo"><a dropdown-item href="#">Cadastrar</a></li>
          <li>
            <form action="/" method="GET">
              <div class="divBuscaMobile">
                <input class="formSearchMobile" type="search" placeholder=" Pesquisar..." aria-label="Search">
                <button class="btnSearchMobile" type="submit"> 
                  <i id="search" class="material-icons">search</i>
                </button>
              </div>
            </form>
          </li>
        </ul> 
    </div>

</nav>

