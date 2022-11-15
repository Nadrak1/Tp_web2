<?php
/* Smarty version 4.2.1, created on 2022-11-15 16:14:27
  from 'C:\xampp\htdocs\WEB2_Tp\Template\category\editCategory.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6373acd3158169_91815538',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '148af1865fbcad9e40a5ffbc2020340a3062c4a8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2_Tp\\Template\\category\\editCategory.tpl',
      1 => 1668525257,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Template/header.tpl' => 1,
    'file:Template/footer.tpl' => 1,
  ),
),false)) {
function content_6373acd3158169_91815538 (Smarty_Internal_Template $_smarty_tpl) {
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

<h1>Categoria: <?php echo $_smarty_tpl->tpl_vars['category']->value->genre;?>
</h1>
<h1>Plataforma: <?php echo $_smarty_tpl->tpl_vars['category']->value->gameplay;?>
</h1>
<h1>Nro id: <?php echo $_smarty_tpl->tpl_vars['category']->value->id;?>
</h1>

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
        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
        <button class="btn btn-primary" type="submit">Submit form</button>
    </div>
</form>

<?php $_smarty_tpl->_subTemplateRender("file:Template/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
