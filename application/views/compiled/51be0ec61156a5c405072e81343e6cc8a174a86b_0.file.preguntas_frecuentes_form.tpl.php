<?php /* Smarty version 3.1.27, created on 2018-02-15 22:34:21
         compiled from "/home/enviroco/public_html/subasta/application/views/templates/manager/preguntas_frecuentes_form.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:9159335445a86513da9ea44_63981793%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '51be0ec61156a5c405072e81343e6cc8a174a86b' => 
    array (
      0 => '/home/enviroco/public_html/subasta/application/views/templates/manager/preguntas_frecuentes_form.tpl',
      1 => 1518748604,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9159335445a86513da9ea44_63981793',
  'variables' => 
  array (
    'registro' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a86513db60203_20479154',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a86513db60203_20479154')) {
function content_5a86513db60203_20479154 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '9159335445a86513da9ea44_63981793';
?>
<div class="form-group col-sm-12 col-md-12">

    <label>Pregunta:</label>
    <div class="input-group">
    	<span class="input-group-addon">
            <i class="fa fa-database"></i>
        </span>
        <input type="text" class="form-control" name="pregunta" placeholder="" value="<?php if (isset($_smarty_tpl->tpl_vars['registro']->value)) {
echo $_smarty_tpl->tpl_vars['registro']->value['pregunta'];
}?>">
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

</div><?php }
}
?>