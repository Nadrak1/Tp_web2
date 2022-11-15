<?php
/* Smarty version 4.2.1, created on 2022-11-06 00:41:19
  from 'C:\xampp\htdocs\WEB2_Tp\Template\game\showGame.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6366f49f569040_15841579',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd37d8e63035f51f933089f369e89d62e32556a67' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2_Tp\\Template\\game\\showGame.tpl',
      1 => 1667691677,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Template/header.tpl' => 1,
    'file:Template/footer.tpl' => 1,
  ),
),false)) {
function content_6366f49f569040_15841579 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Template/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

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
        <?php if ($_smarty_tpl->tpl_vars['user']->value->rol == "usuario" || $_smarty_tpl->tpl_vars['user']->value->rol == "admin") {?>
            <span class="navbar-text">
                <a href="logout"><button type="button" class="btn btn-primary ">Cerrar Sesion</button></a>
            </span>
        <?php } else { ?>
            <span class="navbar-text">
                <a href="login"><button type="button" class="btn btn-primary ">Loguearte</button></a>
            </span>
        <?php }?>
    </div>
</nav>
<?php if ($_smarty_tpl->tpl_vars['user']->value->rol == "usuario" || $_smarty_tpl->tpl_vars['user']->value->rol == "admin") {?>
    <div class="container-fluid">
        <form class="row g-3" action="createGame" method="post" enctype="multipart/form-data">
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
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['genre']->value, 'categoria');
$_smarty_tpl->tpl_vars['categoria']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->do_else = false;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['categoria']->value->genre;?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
            </div>
            <div>
                <label>Insertar una imagen(OPCIONAL)</label>
                <input type="file" name="img" id="imageToUpload">
            </div>
            <div class="col-12">
                <button class="btn btn-primary" type="submit">Submit form</button>
            </div>
        </form>
    </div>
<?php }?>
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
                    <th scope="col"></th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Categoria</th>
                    <?php if ($_smarty_tpl->tpl_vars['user']->value->rol == "admin") {?>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    <?php }?>
                </tr>
            </thead>
            <tbody>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['game']->value, 'juego');
$_smarty_tpl->tpl_vars['juego']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['juego']->value) {
$_smarty_tpl->tpl_vars['juego']->do_else = false;
?>
            <tr>
                <th scope="row"><?php echo $_smarty_tpl->tpl_vars['juego']->value->id;?>
</th>
                <?php if ((isset($_smarty_tpl->tpl_vars['juego']->value->imagen))) {?>
                    <td><img class="imagen" src="<?php echo $_smarty_tpl->tpl_vars['juego']->value->imagen;?>
"></td>
                <?php } else { ?>
                    <td></td>
                <?php }?>
                <td><a href="viewGame/<?php echo $_smarty_tpl->tpl_vars['juego']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['juego']->value->name;?>
</a></td>
                <td>$ <?php echo $_smarty_tpl->tpl_vars['juego']->value->price;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['juego']->value->genre;?>
</td>
                <?php if ($_smarty_tpl->tpl_vars['user']->value->rol == "admin") {?>
                    <td><a href="deleteGame/<?php echo $_smarty_tpl->tpl_vars['juego']->value->id;?>
"><button type="button" class="btn btn-danger">Eliminar</button></a></td>
                    <td><a href="viewEditGame/<?php echo $_smarty_tpl->tpl_vars['juego']->value->id;?>
"><button type="button" class="btn btn-warning">Editar</button></a></td>
                <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tr>
            </tbody>
</table>
<div id="paginador" class="paginador"></div>
    
    
<?php $_smarty_tpl->_subTemplateRender("file:Template/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
