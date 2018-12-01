<?php /* Smarty version 3.1.27, created on 2018-12-01 10:05:57
         compiled from "C:\xampp\htdocs\subasta_project\application\views\templates\manager\subasta_form_bases.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:15125826665c02a355210215_81247536%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '767a202f9e152871caea662cd559a1515aaaee20' => 
    array (
      0 => 'C:\\xampp\\htdocs\\subasta_project\\application\\views\\templates\\manager\\subasta_form_bases.tpl',
      1 => 1524157168,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15125826665c02a355210215_81247536',
  'variables' => 
  array (
    'registro' => 0,
    'clientes' => 0,
    'o' => 0,
    'proveedores' => 0,
    's_proveedores' => 0,
    'l' => 0,
    'base_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5c02a355299a27_60770885',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5c02a355299a27_60770885')) {
function content_5c02a355299a27_60770885 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '15125826665c02a355210215_81247536';
?>
<div class="row">
<?php if (isset($_smarty_tpl->tpl_vars['registro']->value)) {?>
    <div class="form-group col-sm-4 col-md-4">

        <label>Código:</label>

        <div class="input-group">

            <span class="input-group-addon">

                <b>ID</b>

            </span>

                <input type="text" readonly="readonly" class="form-control" placeholder="" value="<?php if (isset($_smarty_tpl->tpl_vars['registro']->value)) {
echo $_smarty_tpl->tpl_vars['registro']->value['codigo'];
}?>">

        </div>

    </div>
    
    <div class="pull-right col-md-3">
        <label>
            Última modificación: <?php if (isset($_smarty_tpl->tpl_vars['registro']->value)) {
echo $_smarty_tpl->tpl_vars['registro']->value['f_bases'];
}?>
        </label>
    </div>
<?php }?>
</div>

<div class="row">
    <div class="col-sm-12 col-md-5">
        <div class="boxround1">
            <div class="row">
                <div class="form-group col-sm-12 col-md-12">
                    <label>Cliente:</label>
                    <div class="input-group">
                        <span class="input-group-addon mat-icomap1">
                            <i class="material-icons">account_circle</i>
                        </span>
                        <select class="form-control" name="cliente">
                            <option value="" selected="" disabled>Seleccione una opción</option>
                            <?php
$_from = $_smarty_tpl->tpl_vars['clientes']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['o'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['o']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['o']->value) {
$_smarty_tpl->tpl_vars['o']->_loop = true;
$foreach_o_Sav = $_smarty_tpl->tpl_vars['o'];
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['o']->value['id'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['registro']->value) && $_smarty_tpl->tpl_vars['registro']->value['cliente_id'] == $_smarty_tpl->tpl_vars['o']->value['id']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['o']->value['nombre'];?>
</option>
                            <?php
$_smarty_tpl->tpl_vars['o'] = $foreach_o_Sav;
}
?>
                        </select>
                    </div>
                </div>
                
                <div class="form-group col-sm-12 col-md-12">
                    <label>Bases:</label>
                    <div class="input-group">
                        <span class="input-group-addon mat-icontacto1">
                            <i class="material-icons">assignment</i>
                        </span>
                        <input type="file" class="form-control" name="bases" placeholder="" value="<?php if (isset($_smarty_tpl->tpl_vars['registro']->value)) {
echo $_smarty_tpl->tpl_vars['registro']->value['bases'];
}?>">
                    </div>
                </div>
                <input type="hidden" name="form_bases" value="1">
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-md-7">
        <div class="boxround1">
        	<legend>Proveedores</legend>
            <div class="row">
                <div class="form-group col-sm-6 col-md-6">
                    <label>Proveedor:</label>
                    <div class="input-group">
                        <span class="input-group-addon mat-icomap1">
                            <i class="material-icons">local_shipping</i>
                        </span>
                        <select id="proveedor" class="form-control">
                            <option value="" selected="" disabled>Seleccione una opción</option>
                            <?php
$_from = $_smarty_tpl->tpl_vars['proveedores']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['o'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['o']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['o']->value) {
$_smarty_tpl->tpl_vars['o']->_loop = true;
$foreach_o_Sav = $_smarty_tpl->tpl_vars['o'];
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['o']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['o']->value['nombre'];?>
</option>
                            <?php
$_smarty_tpl->tpl_vars['o'] = $foreach_o_Sav;
}
?>
                        </select>
                    </div>
                </div>

                <div class="form-group col-sm-4 col-md-4">
                    <label>Alias:</label>
                    <div class="input-group">
                        <span class="input-group-addon mat-icomap1">
                            <i class="material-icons">person</i>
                        </span>
                        <input id="alias" type="text" class="form-control" name="alias" placeholder="">
                    </div>
                </div>

                <div class="col-sm-2 col-md-2">

                    <a class="btn btn-primary add-proveedor spacmore1" data-name="proveedor" data-div="provee" data-select="proveedor" style="background-color: #9a9c9c; border-color: #9a9c9c">

                        <i class="fa fa-plus"></i>

                    </a>

                </div>

                <div class="col-sm-12 col-md-12">

                	<table id="proveedores" class="table table-bordered table-hover">

        		        <thead>

        					<tr>

                                <th width="100">Proveedor</th>
        						
                                <th width="100">Alias</th>

        						<th width="50">Acción</th>

        					</tr>

        				</thead>

        				<tbody>

        					<?php
$_from = $_smarty_tpl->tpl_vars['s_proveedores']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['l'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['l']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['l']->value) {
$_smarty_tpl->tpl_vars['l']->_loop = true;
$foreach_l_Sav = $_smarty_tpl->tpl_vars['l'];
?>

        					<tr>

                                <td><?php echo $_smarty_tpl->tpl_vars['l']->value['proveedor'];?>
</td>

        						<td><?php echo $_smarty_tpl->tpl_vars['l']->value['alias'];?>
</td>

        						<td class="text-center">

                                    <a class="btn btn-danger delete-item" style="background-color: #f16654 !important; border-color: #f16654 !important" data-url="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
manager/subasta/eliminar_proveedor" data-id="<?php echo $_smarty_tpl->tpl_vars['l']->value['id'];?>
">

                                        <i class="fa fa-trash"></i>

                                    </a>

                                </td>

        					</tr>

        					<?php
$_smarty_tpl->tpl_vars['l'] = $foreach_l_Sav;
}
?>

        				</tbody>

                	</table>

                </div>

            </div>

        </div>
    </div>
</div><?php }
}
?>