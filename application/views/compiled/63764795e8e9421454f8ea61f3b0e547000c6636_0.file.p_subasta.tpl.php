<?php /* Smarty version 3.1.27, created on 2018-01-09 21:16:43
         compiled from "C:\wamp\www\subasta_angular\application\views\templates\plantilla\p_subasta.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:164315a55778b2a5104_09855384%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '63764795e8e9421454f8ea61f3b0e547000c6636' => 
    array (
      0 => 'C:\\wamp\\www\\subasta_angular\\application\\views\\templates\\plantilla\\p_subasta.tpl',
      1 => 1515550599,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '164315a55778b2a5104_09855384',
  'variables' => 
  array (
    'modulo' => 0,
    'pagina' => 0,
    'subasta' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a55778b2ee8c9_25908592',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a55778b2ee8c9_25908592')) {
function content_5a55778b2ee8c9_25908592 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '164315a55778b2a5104_09855384';
?>
<div class="content-wrapper">
	<section class="content-header">
		<h1>
			Modulo
			<small><?php echo $_smarty_tpl->tpl_vars['modulo']->value;?>
</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-home"></i> Home</a></li>
			<li class="active"><?php echo $_smarty_tpl->tpl_vars['pagina']->value;?>
</li>
		</ol>
   </section>
	<section class="content">
		<div class="row">
			<div class="col-sm-12">
				<?php echo $_smarty_tpl->tpl_vars['subasta']->value;?>

			</div>
		</div>
	</section>

</div><?php }
}
?>