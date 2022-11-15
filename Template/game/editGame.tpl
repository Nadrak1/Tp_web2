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

    <h1>Nombre: {$game->name}</h1>
    <h1>Precio: {$game->price}</h1>
    <h1>Genero: {$game->genre}</h1>
    <h1>Plataforma: {$game->gameplay}</h1>
    {if $game->imagen !=null}
        <h4><img class="imagen" src="{$game->imagen}"></h4>
    {/if}

        <form class="row g-3" action="editGame" method="post" enctype="multipart/form-data">
            <div class="col-md-4">
                <label for="validationCustom01" class="form-label">Juego</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Juego" required>
            </div>
            <div class="col-md-4">
                <label for="validationCustom02" class="form-label">Precio</label>
                <input type="number" class="form-control" name="price" id="price" placeholder="$" required>
            </div>
            <div class="col-md-3">
                <label for="validationCustom04" class="form-label">Categoria</label>
                <select class="form-select" name="id_category_fk" id="id_category_fk" required>
                    <option selected disabled value="">Elegi...</option>
                    <option value="1">Shooter</option>
                    <option value="2">Sport</option>
                    <option value="3">Horror</option>
                    <option value="4">Multiplayer online battle arena</option>
                </select>
            </div>
            <div>
                <label>Insertar una imagen(OPCIONAL)</label>
                <input type="file" name="img" id="imageToUpload">
            </div>
            <div class="col-12">
                <input type="hidden" name="id" value="{$id}">
                <a href="editGame"><button class="btn btn-primary" type="submit">Submit form</button></a>
            </div>
        </form>  


    

{include file="Template/footer.tpl"}