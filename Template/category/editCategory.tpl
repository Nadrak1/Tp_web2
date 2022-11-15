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

<form class="row g-3" action="editCategory" method="post">
    <div class="col-md-3">  
        <label for="validationCustom04" class="form-label">Genero</label>
        <select class="form-select" name="genre" id="genre" required>
        <option selected disabled value="">Elegi...</option>
        <option value="Shooter">Shooter</option>
        <option value="Sport">Sport</option>
        <option value="Horror">Horror</option>
        <option value="Multiplayer online battle arena">Multiplayer online battle arena</option>
        </select>
    </div>
    <div class="col-md-3">
        <label for="validationCustom04" class="form-label">Plataforma de Jugabilidad</label>
        <select class="form-select" name="gameplay" id="gameplay" required>
        <option selected disabled value="">Elegi...</option>
        <option value="Multi Plataform">Multi Plataform</option>
        <option value="PC">PC</option>
        <option value="XBOX">XBOX</option>
        <option value="PS4">PS4</option>
        </select>
    </div>
    <div class="col-12">
        <input type="hidden" name="id" value="{$id}">
        <button class="btn btn-primary" type="submit">Submit form</button>
    </div>
</form>

{include file="Template/footer.tpl"}