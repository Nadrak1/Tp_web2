<?php
/* Smarty version 4.2.1, created on 2022-11-06 00:42:19
  from 'C:\xampp\htdocs\WEB2_Tp\Template\category\showCategory.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6366f4db1be7f8_00261631',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0fb2078131bfc9029df5a7d39b2caaed426efc6c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2_Tp\\Template\\category\\showCategory.tpl',
      1 => 1667691736,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Template/header.tpl' => 1,
    'file:Template/footer.tpl' => 1,
  ),
),false)) {
function content_6366f4db1be7f8_00261631 (Smarty_Internal_Template $_smarty_tpl) {
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
<?php }?>
<br>
    <table class="table table-dark table-striped tablaCategory" id="tblDatos">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Genre</th>
                        <th scope="col">Gameplay</th>
                        <?php if ($_smarty_tpl->tpl_vars['user']->value->rol == "admin") {?>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        <?php }?>
                    </tr>
                </thead>
                <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['category']->value, 'categoria');
$_smarty_tpl->tpl_vars['categoria']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->do_else = false;
?>
                <tr>
                    <th scope="row"><?php echo $_smarty_tpl->tpl_vars['categoria']->value->id;?>
</th>
                    <td><a href="viewCategory/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['categoria']->value->genre;?>
</a></td>
                    <td><?php echo $_smarty_tpl->tpl_vars['categoria']->value->gameplay;?>
</td>
                    <?php if ($_smarty_tpl->tpl_vars['user']->value->rol == "admin") {?>
                        <td><a href="deleteCategory/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id;?>
"><button type="button" class="btn btn-danger">Eliminar</button></a></td>
                        <td><a href="viewEditCategory/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id;?>
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
