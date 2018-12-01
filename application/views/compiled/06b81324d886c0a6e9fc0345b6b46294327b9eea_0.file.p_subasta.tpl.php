<?php /* Smarty version 3.1.27, created on 2018-01-10 16:25:22
         compiled from "/home/enviroco/public_html/subasta/application/views/templates/plantilla/p_subasta.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:3456482115a5684c2dccfb4_74166215%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '06b81324d886c0a6e9fc0345b6b46294327b9eea' => 
    array (
      0 => '/home/enviroco/public_html/subasta/application/views/templates/plantilla/p_subasta.tpl',
      1 => 1515550598,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3456482115a5684c2dccfb4_74166215',
  'variables' => 
  array (
    'modulo' => 0,
    'pagina' => 0,
    'subasta' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a5684c309e945_65485517',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a5684c309e945_65485517')) {
function content_5a5684c309e945_65485517 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '3456482115a5684c2dccfb4_74166215';
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