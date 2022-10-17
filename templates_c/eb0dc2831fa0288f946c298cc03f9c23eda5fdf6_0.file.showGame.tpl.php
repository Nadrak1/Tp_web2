<?php
/* Smarty version 4.2.1, created on 2022-10-05 16:34:10
  from 'C:\xampp\htdocs\WEB2_Tp\Template\showGame.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_633d95e2cd16e9_81079978',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb0dc2831fa0288f946c298cc03f9c23eda5fdf6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2_Tp\\Template\\showGame.tpl',
      1 => 1664980449,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Template/header.tpl' => 1,
    'file:Template/footer.tpl' => 1,
  ),
),false)) {
function content_633d95e2cd16e9_81079978 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Template/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<form class="row g-3" action="createGame" method="post">
    <div class="col-md-4">
        <label for="validationCustom01" class="form-label">Juego</label>
        <input type="text" class="form-control" name="name" id="name" placeholder="Juego" required>
    </div>
    <div class="col-md-4">
        <label for="validationCustom02" class="form-label">Precio</label>
        <input type="text" class="form-control" name="price" id="price" placeholder="$" required>
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
    <!-- <div class="col-md-3">
        <label for="validationCustom05" class="form-label">Platforma de jugabilidad</label>
        <select class="form-select" id="validationCustom04" required>
        <option selected disabled value="">Elegi...</option>
        <option>Multi Plataform</option>
        <option value="XBOX">XBOX</option>
        <option value="PS4>PS4</option>
        <option value="PC>PC</option>
        </select>
    </div> -->
    <div class="col-12">
        <button class="btn btn-primary" type="submit">Submit form</button>
    </div>
    </form>
    <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">price</th>
                        <th scope="col">id_category_fk</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['game']->value, 'juego');
$_smarty_tpl->tpl_vars['juego']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['juego']->value) {
$_smarty_tpl->tpl_vars['juego']->do_else = false;
?>
                <tr>
                    <th scope="row"><?php echo $_smarty_tpl->tpl_vars['juego']->value->id;?>
</th>
                    <td><?php echo $_smarty_tpl->tpl_vars['juego']->value->name;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['juego']->value->price;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['juego']->value->id_category_fk;?>
</td>
                    <td><a href="deleteGame/<?php echo $_smarty_tpl->tpl_vars['juego']->value->id;?>
"><button type="button" class="btn btn-danger">Eliminar</button></a></td>
            
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tr>
                </tbody>
    </table>

    
<?php $_smarty_tpl->_subTemplateRender("file:Template/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
