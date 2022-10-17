<?php
/* Smarty version 4.2.1, created on 2022-10-07 16:34:15
  from 'C:\xampp\htdocs\WEB2_Tp\Template\login\register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634038e7771995_66704257',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c81f1afb3e4204f1e8227639360e3c6e5b5d0238' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2_Tp\\Template\\login\\register.tpl',
      1 => 1665153194,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:template/header.tpl' => 1,
    'file:template/footer.tpl' => 1,
  ),
),false)) {
function content_634038e7771995_66704257 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:template/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container">
    <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
    <form method="post" action="registerVerify">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" id="email" placeholder="Ingrese su E-mail" required>
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password" id="password" placeholder="Ingrese su contraseña" required>
        </div>
            <button type="submit" class="btn btn-primary">Register</button>
    </form>
    <a href="login">¿Ya estas registrado?</a>
    <?php if ($_smarty_tpl->tpl_vars['error']->value != '') {?>
        <h3 class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</h3>
    <?php }?>
    
</div> 

<?php $_smarty_tpl->_subTemplateRender("file:template/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
