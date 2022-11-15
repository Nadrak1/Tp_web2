<?php
/* Smarty version 4.2.1, created on 2022-11-15 16:04:52
  from 'C:\xampp\htdocs\WEB2_Tp\Template\category\showOneCategory.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6373aa940e10b8_38067734',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ab263684e9e8f67e003c035b28710dc8006449b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2_Tp\\Template\\category\\showOneCategory.tpl',
      1 => 1668524688,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Template/header.tpl' => 1,
    'file:Template/footer.tpl' => 1,
  ),
),false)) {
function content_6373aa940e10b8_38067734 (Smarty_Internal_Template $_smarty_tpl) {
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
<a href="categoryHome"><button type="button" class="btn btn-primary ">Volver</button></a>

<?php $_smarty_tpl->_subTemplateRender("file:Template/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
