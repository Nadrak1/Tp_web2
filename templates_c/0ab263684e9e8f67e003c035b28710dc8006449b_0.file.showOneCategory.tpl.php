<?php
/* Smarty version 4.2.1, created on 2022-10-20 16:27:57
  from 'C:\xampp\htdocs\WEB2_Tp\Template\category\showOneCategory.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63515aed0f62c4_08871373',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ab263684e9e8f67e003c035b28710dc8006449b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2_Tp\\Template\\category\\showOneCategory.tpl',
      1 => 1666276075,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Template/header.tpl' => 1,
    'file:Template/footer.tpl' => 1,
  ),
),false)) {
function content_63515aed0f62c4_08871373 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Template/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

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
