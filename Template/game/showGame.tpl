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
<div class="container-fluid">
    <form class="row g-3" action="createGame" method="post">
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
        <div class="col-12">
            <button class="btn btn-primary" type="submit">Submit form</button>
        </div>
    </form>
</div>
<br>
<div class="container-fluid contenedorsearch">
    <form action="searchGame" method="post">
        <input class="form-label" type="search" placeholder="Search" id="busqueda" name="busqueda" aria-label="Search" >
        <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
</div>
<br>
<table class="table table-dark table-striped tablaGame" id="tblDatos">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Id_category_fk</th>
                    {if  $user->rol == "admin" }
                        <th scope="col"></th>
                        <th scope="col"></th>
                    {/if}
                </tr>
            </thead>
            <tbody>
    {foreach from=$game item=$juego}
            <tr>
                <th scope="row">{$juego->id}</th>
                <td><a href="viewGame/{$juego->id}">{$juego->name}</a></td>
                <td>$ {$juego->price}</td>
                <td>{$juego->id_category_fk}</td>
                {if  $user->rol == "admin" }
                    <td><a href="deleteGame/{$juego->id}"><button type="button" class="btn btn-danger">Eliminar</button></a></td>
                    <td><a href="viewEditGame/{$juego->id}"><button type="button" class="btn btn-warning">Editar</button></a></td>
                {/if}
    {/foreach}
            </tr>
            </tbody>
</table>
<div id="paginador" class="paginador"></div>
    
    
{include file="Template/footer.tpl"}