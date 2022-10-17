<?php
/* Smarty version 4.2.1, created on 2022-10-17 01:51:29
  from 'C:\xampp\htdocs\WEB2_Tp\Template\category\editCategory.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634c9901e00e90_87362066',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '148af1865fbcad9e40a5ffbc2020340a3062c4a8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2_Tp\\Template\\category\\editCategory.tpl',
      1 => 1665964283,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Template/header.tpl' => 1,
    'file:Template/footer.tpl' => 1,
  ),
),false)) {
function content_634c9901e00e90_87362066 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Template/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

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
