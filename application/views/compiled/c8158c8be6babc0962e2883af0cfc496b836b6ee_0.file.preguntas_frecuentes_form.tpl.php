<?php /* Smarty version 3.1.27, created on 2018-02-15 21:36:45
         compiled from "C:\wamp\www\subasta_angular\application\views\templates\manager\preguntas_frecuentes_form.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:249425a8643bd627059_53810158%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c8158c8be6babc0962e2883af0cfc496b836b6ee' => 
    array (
      0 => 'C:\\wamp\\www\\subasta_angular\\application\\views\\templates\\manager\\preguntas_frecuentes_form.tpl',
      1 => 1518748604,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '249425a8643bd627059_53810158',
  'variables' => 
  array (
    'registro' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a8643bd6c4928_10585437',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a8643bd6c4928_10585437')) {
function content_5a8643bd6c4928_10585437 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '249425a8643bd627059_53810158';
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