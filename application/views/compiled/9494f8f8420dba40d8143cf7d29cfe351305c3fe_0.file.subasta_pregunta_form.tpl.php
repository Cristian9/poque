<?php /* Smarty version 3.1.27, created on 2018-03-16 12:53:01
         compiled from "/home/applecoin/public_html/subasta/application/views/templates/manager/subasta_pregunta_form.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1297433495aac047d27bc48_18794165%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9494f8f8420dba40d8143cf7d29cfe351305c3fe' => 
    array (
      0 => '/home/applecoin/public_html/subasta/application/views/templates/manager/subasta_pregunta_form.tpl',
      1 => 1521222778,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1297433495aac047d27bc48_18794165',
  'variables' => 
  array (
    'registro' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5aac047d3b6fc5_53465219',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5aac047d3b6fc5_53465219')) {
function content_5aac047d3b6fc5_53465219 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1297433495aac047d27bc48_18794165';
?>
<div class="form-group col-sm-12 col-md-12">



    <label>Pregunta:</label>

    <div class="input-group">

    	<span class="input-group-addon">

            <i class="fa fa-database"></i>

        </span>

        <input type="text" class="form-control" name="pregunta" placeholder="" value="<?php if (isset($_smarty_tpl->tpl_vars['registro']->value)) {
echo $_smarty_tpl->tpl_vars['registro']->value['pregunta'];
}?>" disabled="">

    </div>



    <label>Respuesta:</label>

    <div class="input-group">

    	<span class="input-group-addon">

            <i class="fa fa-database"></i>

        </span>

        <textarea class="form-control" name="respuesta" placeholder="" rows="4"><?php if (isset($_smarty_tpl->tpl_vars['registro']->value)) {
echo $_smarty_tpl->tpl_vars['registro']->value['respuesta'];
}?></textarea>

    </div>
    <input type="hidden" name="id_subasta" value="<?php if (isset($_smarty_tpl->tpl_vars['registro']->value)) {
echo $_smarty_tpl->tpl_vars['registro']->value['subasta_id'];
}?>">



</div><?php }
}
?>