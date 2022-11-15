{include file="Template/header.tpl"}
<nav class="navbar navbar-expand-lg bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="gameHome"><ion-icon name="game-controller-outline"></ion-icon></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link blanco" aria-current="page" href="gameHome">Games</a>
                </li>
                <li class="nav-item">
                <a class="nav-link blanco" href="categoryHome">Categories</a>
                </li>
            </ul>
        </div>
        {if $user->rol == "usuario" || $user->rol == "admin"}
            <span class="navbar-text">
                <a href="logout"><button type="button" class="btn btn-primary ">Cerrar Sesion</button></a>
            </span>
        {else}
            <span class="navbar-text">
                <a href="login"><button type="button" class="btn btn-primary ">Loguearte</button></a>
            </span>
        {/if}
    </div>
</nav>
<h1>Categoria: {$category->genre}</h1>
<h1>Plataforma: {$category->gameplay}</h1>
<h1>Nro id: {$category->id}</h1>
<a href="categoryHome"><button type="button" class="btn btn-primary ">Volver</button></a>

{include file="Template/footer.tpl"}