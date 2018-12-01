<?php /* Smarty version 3.1.27, created on 2017-12-09 19:44:25
         compiled from "C:\wamp\www\subasta_angular\application\views\templates\manager\criterio_form.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:78745a2c836970d2a7_76967607%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0ee399b8866d60a45d4edf1af297345bbf386c9f' => 
    array (
      0 => 'C:\\wamp\\www\\subasta_angular\\application\\views\\templates\\manager\\criterio_form.tpl',
      1 => 1512620364,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '78745a2c836970d2a7_76967607',
  'variables' => 
  array (
    'registro' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a2c836973b0f1_47169933',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a2c836973b0f1_47169933')) {
function content_5a2c836973b0f1_47169933 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '78745a2c836970d2a7_76967607';
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