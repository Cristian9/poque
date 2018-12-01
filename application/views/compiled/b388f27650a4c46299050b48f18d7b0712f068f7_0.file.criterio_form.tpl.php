<?php /* Smarty version 3.1.27, created on 2017-12-06 23:19:25
         compiled from "C:\wamp\www\subasta\application\views\templates\manager\criterio_form.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:77635a28c14dcc4375_12978604%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b388f27650a4c46299050b48f18d7b0712f068f7' => 
    array (
      0 => 'C:\\wamp\\www\\subasta\\application\\views\\templates\\manager\\criterio_form.tpl',
      1 => 1512620364,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '77635a28c14dcc4375_12978604',
  'variables' => 
  array (
    'registro' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a28c14dcd7b31_97387256',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a28c14dcd7b31_97387256')) {
function content_5a28c14dcd7b31_97387256 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '77635a28c14dcc4375_12978604';
?>
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