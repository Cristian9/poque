<?php /* Smarty version 3.1.27, created on 2018-12-01 10:31:47
         compiled from "C:\xampp\htdocs\subasta_project\application\views\templates\manager\producto_form.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:12010201955c02a9636818c8_37724242%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9781f95450797813fed92eafc967a6d888f7e31e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\subasta_project\\application\\views\\templates\\manager\\producto_form.tpl',
      1 => 1531178718,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12010201955c02a9636818c8_37724242',
  'variables' => 
  array (
    'categorias' => 0,
    'd' => 0,
    'registro' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5c02a9636923b3_32444752',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5c02a9636923b3_32444752')) {
function content_5c02a9636923b3_32444752 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '12010201955c02a9636818c8_37724242';
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