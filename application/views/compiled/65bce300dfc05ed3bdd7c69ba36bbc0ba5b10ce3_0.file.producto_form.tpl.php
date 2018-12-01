<?php /* Smarty version 3.1.27, created on 2018-07-09 17:27:49
         compiled from "/home/applecoin/public_html/subasta/application/views/templates/manager/producto_form.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2181941595b43e1655e4af1_90448855%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '65bce300dfc05ed3bdd7c69ba36bbc0ba5b10ce3' => 
    array (
      0 => '/home/applecoin/public_html/subasta/application/views/templates/manager/producto_form.tpl',
      1 => 1531175118,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2181941595b43e1655e4af1_90448855',
  'variables' => 
  array (
    'categorias' => 0,
    'd' => 0,
    'registro' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5b43e1659e7ad4_68012170',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5b43e1659e7ad4_68012170')) {
function content_5b43e1659e7ad4_68012170 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2181941595b43e1655e4af1_90448855';
?>
<div class="form-group col-sm-12 col-md-12">
    <label>Categoría:</label>
    <div class="input-group">
        <span class="input-group-addon mat-icomap1">
            <i class="material-icons">bookmark_border</i>
        </span>
        <select name="categoria" class="form-control">
            <option value="" selected="" disabled>Seleccione una opción</option>
            <?php
$_from = $_smarty_tpl->tpl_vars['categorias']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['d'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['d']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['d']->value) {
$_smarty_tpl->tpl_vars['d']->_loop = true;
$foreach_d_Sav = $_smarty_tpl->tpl_vars['d'];
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['registro']->value) && $_smarty_tpl->tpl_vars['registro']->value['categoria_id'] == $_smarty_tpl->tpl_vars['d']->value['id']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['d']->value['nombre'];?>
</option>
            <?php
$_smarty_tpl->tpl_vars['d'] = $foreach_d_Sav;
}
?>
        </select>
    </div>
</div>
<div class="form-group col-sm-12 col-md-12">						
    <label>Producto / Servicio:</label>
    <div class="input-group">
    	<span class="input-group-addon mat-icomap1">
            <i class="material-icons">chrome_reader_mode</i>
        </span>
        <input type="text" class="form-control" name="nombre" placeholder="" value="<?php if (isset($_smarty_tpl->tpl_vars['registro']->value)) {
echo $_smarty_tpl->tpl_vars['registro']->value['nombre'];
}?>">
    </div>
</div><?php }
}
?>