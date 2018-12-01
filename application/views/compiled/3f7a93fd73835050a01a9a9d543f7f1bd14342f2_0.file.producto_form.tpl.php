<?php /* Smarty version 3.1.27, created on 2017-12-18 23:27:36
         compiled from "C:\wamp\www\subasta_angular\application\views\templates\manager\producto_form.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:118035a389538504aa3_15925518%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f7a93fd73835050a01a9a9d543f7f1bd14342f2' => 
    array (
      0 => 'C:\\wamp\\www\\subasta_angular\\application\\views\\templates\\manager\\producto_form.tpl',
      1 => 1513657654,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '118035a389538504aa3_15925518',
  'variables' => 
  array (
    'categorias' => 0,
    'd' => 0,
    'registro' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a38953857e179_73740384',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a38953857e179_73740384')) {
function content_5a38953857e179_73740384 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '118035a389538504aa3_15925518';
?>
<div class="form-group col-sm-12 col-md-12">
    <label>Categoría:</label>
    <div class="input-group">
        <span class="input-group-addon mat-icomap1">
            <i class="material-icons">loyalty</i>
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
								
    <label>Nombre:</label>
    <div class="input-group">
    	<span class="input-group-addon">
            <i class="fa fa-database"></i>
        </span>
        <input type="text" class="form-control" name="nombre" placeholder="" value="<?php if (isset($_smarty_tpl->tpl_vars['registro']->value)) {
echo $_smarty_tpl->tpl_vars['registro']->value['nombre'];
}?>">
    </div>

</div><?php }
}
?>