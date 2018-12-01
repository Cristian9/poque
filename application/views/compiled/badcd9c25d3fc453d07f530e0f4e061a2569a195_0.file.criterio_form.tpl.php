<?php /* Smarty version 3.1.27, created on 2018-05-11 09:06:58
         compiled from "/home/applecoin/public_html/subasta/application/views/templates/manager/criterio_form.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:6669935955af5a3825c3dd0_78388494%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'badcd9c25d3fc453d07f530e0f4e061a2569a195' => 
    array (
      0 => '/home/applecoin/public_html/subasta/application/views/templates/manager/criterio_form.tpl',
      1 => 1526007829,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6669935955af5a3825c3dd0_78388494',
  'variables' => 
  array (
    'registro' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5af5a382707ff8_47258837',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5af5a382707ff8_47258837')) {
function content_5af5a382707ff8_47258837 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '6669935955af5a3825c3dd0_78388494';
?>
<div class="form-group col-sm-12 col-md-12">
    <label>Criterio:</label>
    <div class="input-group">
    	<span class="input-group-addon mat-icomap1">
            <i class="material-icons">label_outline</i>
        </span>
        <input type="text" class="form-control" name="nombre" placeholder="" value="<?php if (isset($_smarty_tpl->tpl_vars['registro']->value)) {
echo $_smarty_tpl->tpl_vars['registro']->value['nombre'];
}?>">
    </div>
</div><?php }
}
?>