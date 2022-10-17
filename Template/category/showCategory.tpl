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
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle blanco" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Views
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="">?</a></li>
                        <li><a class="dropdown-item" href="">?</a></li>
                        <li><a class="dropdown-item" href="">?</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <span class="navbar-text">
            <a href="logout"><button type="button" class="btn btn-primary ">Cerrar Sesion</button></a>
        </span>
    </div>
</nav>

<form class="row g-3" action="createCategory" method="post">
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