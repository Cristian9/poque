<?php /* Smarty version 3.1.27, created on 2017-12-10 12:37:25
         compiled from "/home/enviroco/public_html/subasta/application/views/templates/manager/criterio_form.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:7898713205a2d70d5b58296_74488642%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '588f20256e148341d17046f3a03bfc58757804a7' => 
    array (
      0 => '/home/enviroco/public_html/subasta/application/views/templates/manager/criterio_form.tpl',
      1 => 1512620364,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7898713205a2d70d5b58296_74488642',
  'variables' => 
  array (
    'registro' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a2d70d5b87728_25395027',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a2d70d5b87728_25395027')) {
function content_5a2d70d5b87728_25395027 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '7898713205a2d70d5b58296_74488642';
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