<?php
/* Smarty version 4.2.1, created on 2022-10-20 15:43:27
  from 'C:\xampp\htdocs\WEB2_Tp\Template\login\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6351507fcd62c9_36387765',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '55e7694bec394724ba45bab7e6a464396d197f4c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2_Tp\\Template\\login\\login.tpl',
      1 => 1666273406,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Template/header.tpl' => 1,
    'file:template/footer.tpl' => 1,
  ),
),false)) {
function content_6351507fcd62c9_36387765 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Template/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">
    <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
    <form method="post" action="verify">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" id="email" placeholder="Ingrese su E-mail" required>
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password" id="password" placeholder="Ingrese su contraseña" required>
        </div>
            <button type="submit" class="btn btn-primary">Login</button>
    </form>
    <a href="register">¿No estas registrado?</a>
    <?php if ($_smarty_tpl->tpl_vars['error']->value != '') {?>
        <h3 class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</h3>
    <?php }?>
</div> 
<br>
<div class="container">
    <a href="gameHome"><h5>No deseo loguearme o registrarme<h5></a>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:template/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
