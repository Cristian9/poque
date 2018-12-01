<?php /* Smarty version 3.1.27, created on 2018-04-10 22:35:13
         compiled from "/home/applecoin/public_html/subasta/application/views/templates/manager/preguntas_frecuentes_form.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:8369086335acd82710d5056_88159393%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '86df5ecc34a6b981085d7b815f2c2455a0056082' => 
    array (
      0 => '/home/applecoin/public_html/subasta/application/views/templates/manager/preguntas_frecuentes_form.tpl',
      1 => 1523417711,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8369086335acd82710d5056_88159393',
  'variables' => 
  array (
    'registro' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5acd82711f5400_28168753',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5acd82711f5400_28168753')) {
function content_5acd82711f5400_28168753 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '8369086335acd82710d5056_88159393';
?>
<div class="form-group col-sm-12 col-md-12">
    <label>Pregunta:</label>
    <div class="input-group">
    	<span class="input-group-addon mat-icomap1">
            <i class="material-icons">help_outline</i>
        </span>
        <input type="text" class="form-control" name="pregunta" placeholder="" value="<?php if (isset($_smarty_tpl->tpl_vars['registro']->value)) {
echo $_smarty_tpl->tpl_vars['registro']->value['pregunta'];
}?>">
    </div>
    <label>Respuesta:</label>
    <div class="input-group">
    	<span class="input-group-addon mat-icomap1">
            <i class="material-icons">question_answer</i>
        </span>
        <textarea class="form-control" name="respuesta" placeholder="" rows="4"><?php if (isset($_smarty_tpl->tpl_vars['registro']->value)) {
echo $_smarty_tpl->tpl_vars['registro']->value['respuesta'];
}?></textarea>
    </div>
</div><?php }
}
?>