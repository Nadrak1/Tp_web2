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
{if  $user->rol == "usuario" ||  $user->rol == "admin" }
    <form class="row g-3" action="createCategory" method="post">
        <div class="col-md-3">  
            <label for="validationCustom04" class="form-label">Genero</label>
            <input type="text" class="form-control"name="genre" id="genre" placeholder="Ingresa un genero" required>
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
            <button class="btn btn-primary" type="submit">Submit form</button>
        </div>
    </form>
    <br>
    <div class="container-fluid contenedorsearch">
        <form action="searchCategory" method="post">
            <input class="form-label" type="text" placeholder="Search" id="busqueda" name="busqueda" aria-label="Search" >
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
    </div>
{/if}
<br>
    <table class="table table-dark table-striped tablaCategory" id="tblDatos">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Genre</th>
                        <th scope="col">Gameplay</th>
                        {if  $user->rol == "admin" }
                            <th scope="col"></th>
                            <th scope="col"></th>
                        {/if}
                    </tr>
                </thead>
                <tbody>
        {foreach from=$category item=$categoria}
                <tr>
                    <th scope="row">{$categoria->id}</th>
                    <td><a href="viewCategory/{$categoria->id}">{$categoria->genre}</a></td>
                    <td>{$categoria->gameplay}</td>
                    {if  $user->rol == "admin" }
                        <td><a href="deleteCategory/{$categoria->id}"><button type="button" class="btn btn-danger">Eliminar</button></a></td>
                        <td><a href="viewEditCategory/{$categoria->id}"><button type="button" class="btn btn-warning">Editar</button></a></td>
                    {/if}
        {/foreach}
                </tr>
                </tbody>
    </table>
    <div id="paginador" class="paginador"></div>
    
{include file="Template/footer.tpl"}