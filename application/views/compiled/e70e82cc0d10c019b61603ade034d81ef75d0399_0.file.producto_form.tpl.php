<?php /* Smarty version 3.1.27, created on 2017-12-06 23:16:18
         compiled from "C:\wamp\www\subasta\application\views\templates\manager\producto_form.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:239915a28c092e330e2_05178693%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e70e82cc0d10c019b61603ade034d81ef75d0399' => 
    array (
      0 => 'C:\\wamp\\www\\subasta\\application\\views\\templates\\manager\\producto_form.tpl',
      1 => 1505338162,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '239915a28c092e330e2_05178693',
  'variables' => 
  array (
    'registro' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a28c092e4b8d9_50026272',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a28c092e4b8d9_50026272')) {
function content_5a28c092e4b8d9_50026272 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '239915a28c092e330e2_05178693';
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