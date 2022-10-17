<?php
/* Smarty version 4.2.1, created on 2022-10-16 23:39:20
  from 'C:\xampp\htdocs\WEB2_Tp\Template\category\showOneCategory.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634c7a08409721_16038816',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ab263684e9e8f67e003c035b28710dc8006449b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2_Tp\\Template\\category\\showOneCategory.tpl',
      1 => 1665956357,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Template/header.tpl' => 1,
    'file:Template/footer.tpl' => 1,
  ),
),false)) {
function content_634c7a08409721_16038816 (Smarty_Internal_Template $_smarty_tpl) {
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

<h1><?php echo $_smarty_tpl->tpl_vars['category']->value->genre;?>
</h1>
<h2><?php echo $_smarty_tpl->tpl_vars['category']->value->gameplay;?>
</h2>
<h3><?php echo $_smarty_tpl->tpl_vars['category']->value->id;?>
</h3>
<a href="categoryHome"><button type="button" class="btn btn-primary ">Volver</button></a>

<?php $_smarty_tpl->_subTemplateRender("file:Template/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
