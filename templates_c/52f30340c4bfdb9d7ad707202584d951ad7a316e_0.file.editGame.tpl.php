<?php
/* Smarty version 4.2.1, created on 2022-11-15 16:10:24
  from 'C:\xampp\htdocs\WEB2_Tp\Template\game\editGame.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6373abe0973c06_23430402',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '52f30340c4bfdb9d7ad707202584d951ad7a316e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2_Tp\\Template\\game\\editGame.tpl',
      1 => 1668525023,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Template/header.tpl' => 1,
    'file:Template/footer.tpl' => 1,
  ),
),false)) {
function content_6373abe0973c06_23430402 (Smarty_Internal_Template $_smarty_tpl) {
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

    <h1>Nombre: <?php echo $_smarty_tpl->tpl_vars['game']->value->name;?>
</h1>
    <h1>Precio: <?php echo $_smarty_tpl->tpl_vars['game']->value->price;?>
</h1>
    <h1>Genero: <?php echo $_smarty_tpl->tpl_vars['game']->value->genre;?>
</h1>
    <h1>Plataforma: <?php echo $_smarty_tpl->tpl_vars['game']->value->gameplay;?>
</h1>
    <?php if ($_smarty_tpl->tpl_vars['game']->value->imagen != null) {?>
        <h4><img class="imagen" src="<?php echo $_smarty_tpl->tpl_vars['game']->value->imagen;?>
"></h4>
    <?php }?>

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
                <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
                <a href="editGame"><button class="btn btn-primary" type="submit">Submit form</button></a>
            </div>
        </form>  


    

<?php $_smarty_tpl->_subTemplateRender("file:Template/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
