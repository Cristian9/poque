<?php /* Smarty version 3.1.27, created on 2018-12-01 10:31:50
         compiled from "C:\xampp\htdocs\subasta_project\application\views\templates\manager\criterio_form.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:15762971945c02a966c43798_05844564%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e4fd95f008ba9a84c210d152f37735d75745c62a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\subasta_project\\application\\views\\templates\\manager\\criterio_form.tpl',
      1 => 1526011430,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15762971945c02a966c43798_05844564',
  'variables' => 
  array (
    'registro' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5c02a966c4d940_71546550',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5c02a966c4d940_71546550')) {
function content_5c02a966c4d940_71546550 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '15762971945c02a966c43798_05844564';
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