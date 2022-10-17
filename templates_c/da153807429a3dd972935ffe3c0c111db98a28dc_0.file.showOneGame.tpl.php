<?php
/* Smarty version 4.2.1, created on 2022-10-16 23:37:06
  from 'C:\xampp\htdocs\WEB2_Tp\Template\game\showOneGame.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634c7982837532_30429290',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'da153807429a3dd972935ffe3c0c111db98a28dc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2_Tp\\Template\\game\\showOneGame.tpl',
      1 => 1665956192,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Template/header.tpl' => 1,
    'file:Template/footer.tpl' => 1,
  ),
),false)) {
function content_634c7982837532_30429290 (Smarty_Internal_Template $_smarty_tpl) {
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
<h1>nombre:<?php echo $_smarty_tpl->tpl_vars['game']->value->name;?>
</h1>
<h2>precio:<?php echo $_smarty_tpl->tpl_vars['game']->value->price;?>
</h2>
<h3>id_category:<?php echo $_smarty_tpl->tpl_vars['game']->value->id_category_fk;?>
</h3>
<h3>id:<?php echo $_smarty_tpl->tpl_vars['game']->value->id;?>
</h3>
<a href="gameHome"><button type="button" class="btn btn-primary ">Volver</button></a>

<?php $_smarty_tpl->_subTemplateRender("file:Template/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
