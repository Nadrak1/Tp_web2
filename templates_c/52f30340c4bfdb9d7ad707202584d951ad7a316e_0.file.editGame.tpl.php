<?php
/* Smarty version 4.2.1, created on 2022-10-18 00:30:01
  from 'C:\xampp\htdocs\WEB2_Tp\Template\game\editGame.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634dd769caaa18_98368572',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '52f30340c4bfdb9d7ad707202584d951ad7a316e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2_Tp\\Template\\game\\editGame.tpl',
      1 => 1666045610,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Template/header.tpl' => 1,
    'file:Template/footer.tpl' => 1,
  ),
),false)) {
function content_634dd769caaa18_98368572 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Template/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

 <!-- <div class="modal-container">
    <div class="modal"> -->
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
  <!--  </div>
</div> -->


    

<?php $_smarty_tpl->_subTemplateRender("file:Template/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
