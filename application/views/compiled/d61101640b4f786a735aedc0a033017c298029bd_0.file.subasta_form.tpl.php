<?php /* Smarty version 3.1.27, created on 2017-12-06 23:26:17
         compiled from "C:\wamp\www\subasta\application\views\templates\manager\subasta_form.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:17715a28c2e99a6ba0_26334206%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd61101640b4f786a735aedc0a033017c298029bd' => 
    array (
      0 => 'C:\\wamp\\www\\subasta\\application\\views\\templates\\manager\\subasta_form.tpl',
      1 => 1512620775,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17715a28c2e99a6ba0_26334206',
  'variables' => 
  array (
    'registro' => 0,
    'clientes' => 0,
    'o' => 0,
    'productos' => 0,
    'tipo_descuentos' => 0,
    'proveedores' => 0,
    's_proveedores' => 0,
    'i' => 0,
    'l' => 0,
    'get_url' => 0,
    'criterios' => 0,
    's_criterios' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a28c2e9b17888_20714308',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a28c2e9b17888_20714308')) {
function content_5a28c2e9b17888_20714308 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '17715a28c2e99a6ba0_26334206';
?>
<div class="row">
    <div class="form-group col-sm-4 col-md-4">
        <label>Código:</label>
        <div class="input-group">
            <span class="input-group-addon">
                <b>ID</b>
            </span>
            <?php if (isset($_smarty_tpl->tpl_vars['registro']->value)) {?>
                <input type="text" readonly="readonly" class="form-control" placeholder="" value="<?php if (isset($_smarty_tpl->tpl_vars['registro']->value)) {
echo $_smarty_tpl->tpl_vars['registro']->value['codigo'];
}?>">
            <?php } else { ?>
                <input type="text" class="form-control" name="codigo" placeholder="" value="<?php if (isset($_smarty_tpl->tpl_vars['registro']->value)) {
echo $_smarty_tpl->tpl_vars['registro']->value['codigo'];
}?>">
            <?php }?>
        </div>
    </div>
    <div class="form-group col-sm-4 col-md-4">
        <label>Fecha:</label>
        <div class="input-group">
            <span class="input-group-addon mat-icomap1">
                <i class="material-icons">alarm</i>
            </span>
            <input type="datetime-local" class="form-control" name="f_inicio" placeholder="" value="<?php if (isset($_smarty_tpl->tpl_vars['registro']->value)) {
echo $_smarty_tpl->tpl_vars['registro']->value['f_inicio'];
}?>">
            
        </div>

    </div>
</div>

<div class="boxround1">
    <div class="row">
        <div class="form-group col-sm-4 col-md-4">
            <label>Cliente:</label>
            <div class="input-group">
                <span class="input-group-addon mat-icomap1">
                    <i class="material-icons">add_location</i>
                </span>
                <select id="departamento" class="form-control">
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
" <?php if (isset($_smarty_tpl->tpl_vars['registro']->value) && $_smarty_tpl->tpl_vars['registro']->value['departamento_id'] == $_smarty_tpl->tpl_vars['o']->value['id']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['o']->value['nombre'];?>
</option>
                    <?php
$_smarty_tpl->tpl_vars['o'] = $foreach_o_Sav;
}
?>
                </select>
            </div>
        </div>

        <div class="form-group col-sm-4 col-md-4">
            <label>Producto / Servicio:</label>
            <div class="input-group">
                <span class="input-group-addon mat-icomap1">
                    <i class="material-icons">add_location</i>
                </span>
                <select id="departamento" class="form-control">
                    <option value="" selected="" disabled>Seleccione una opción</option>
                    <?php
$_from = $_smarty_tpl->tpl_vars['productos']->value;
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
" <?php if (isset($_smarty_tpl->tpl_vars['registro']->value) && $_smarty_tpl->tpl_vars['registro']->value['departamento_id'] == $_smarty_tpl->tpl_vars['o']->value['id']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['o']->value['nombre'];?>
</option>
                    <?php
$_smarty_tpl->tpl_vars['o'] = $foreach_o_Sav;
}
?>
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="form-group col-sm-6 col-md-4">
            <label>Precio Base:</label>
            <div class="input-group">
                <span class="input-group-addon mat-icoemail1">
                    <i class="material-icons">filter_1</i>
                </span>
                <input type="text" class="form-control" name="email" placeholder="" value="<?php if (isset($_smarty_tpl->tpl_vars['registro']->value)) {
echo $_smarty_tpl->tpl_vars['registro']->value['email'];
}?>">
            </div>
        </div>
        <div class="form-group col-sm-6 col-md-4">
            <label>Tipo de descuento:</label>
            <div class="input-group">
                <span class="input-group-addon mat-icomap1">
                    <i class="material-icons">add_location</i>
                </span>
                <select id="departamento" class="form-control">
                    <option value="" selected="" disabled>Seleccione una opción</option>
                    <?php
$_from = $_smarty_tpl->tpl_vars['tipo_descuentos']->value;
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
" <?php if (isset($_smarty_tpl->tpl_vars['registro']->value) && $_smarty_tpl->tpl_vars['registro']->value['departamento_id'] == $_smarty_tpl->tpl_vars['o']->value['id']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['o']->value['nombre'];?>
</option>
                    <?php
$_smarty_tpl->tpl_vars['o'] = $foreach_o_Sav;
}
?>
                </select>
            </div>
        </div>
        <div class="form-group col-sm-6 col-md-4">
            <label>Descuento minimo:</label>
            <div class="input-group">
                <span class="input-group-addon mat-icontacto1">
                    <i class="material-icons">contact_phone</i>
                </span>
                <input type="text" class="form-control" name="contacto" placeholder="" value="<?php if (isset($_smarty_tpl->tpl_vars['registro']->value)) {
echo $_smarty_tpl->tpl_vars['registro']->value['contacto'];
}?>">
            </div>
        </div>
    </div>
</div>
<div class="boxround1">
	<legend>Proveedores</legend>
    <div class="row">
        <div class="form-group col-sm-6 col-md-6">
            <label>Proveedor:</label>
            <div class="input-group">
                <span class="input-group-addon mat-icomap1">
                    <i class="material-icons">add_location</i>
                </span>
                <select id="departamento" class="form-control">
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
" <?php if (isset($_smarty_tpl->tpl_vars['registro']->value) && $_smarty_tpl->tpl_vars['registro']->value['departamento_id'] == $_smarty_tpl->tpl_vars['o']->value['id']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['o']->value['nombre'];?>
</option>
                    <?php
$_smarty_tpl->tpl_vars['o'] = $foreach_o_Sav;
}
?>
                </select>
            </div>
        </div>
        <div class="col-sm-6 col-md-6">
        	<table class="table table-bordered table-hover">
		        <thead>
					<tr>
						<th width="10">N°</th>
						<th width="150">Proveedor</th>
						<th width="90">Acción</th>
					</tr>
				</thead>
				<tbody>
					<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(1, null, 0);?>
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
						<td><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['l']->value['proveedor'];?>
</td>
						<td class="text-center"><?php echo accion($_smarty_tpl->tpl_vars['l']->value['id'],'editar|denegar|permitir',$_smarty_tpl->tpl_vars['get_url']->value,$_smarty_tpl->tpl_vars['l']->value['oculto']);?>
</td>
					</tr>
					<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable($_smarty_tpl->tpl_vars['i']->value+1, null, 0);?>
					<?php
$_smarty_tpl->tpl_vars['l'] = $foreach_l_Sav;
}
?>
				</tbody>
        	</table>
        </div>
    </div>
</div>

<div class="boxround1">
	<legend>Criterios</legend>
    <div class="row">
        <div class="form-group col-sm-6 col-md-3">
            <label>Criterio:</label>
            <div class="input-group">
                <span class="input-group-addon mat-icomap1">
                    <i class="material-icons">add_location</i>
                </span>
                <select id="departamento" class="form-control">
                    <option value="" selected="" disabled>Seleccione una opción</option>
                    <?php
$_from = $_smarty_tpl->tpl_vars['criterios']->value;
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
" <?php if (isset($_smarty_tpl->tpl_vars['registro']->value) && $_smarty_tpl->tpl_vars['registro']->value['departamento_id'] == $_smarty_tpl->tpl_vars['o']->value['id']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['o']->value['nombre'];?>
</option>
                    <?php
$_smarty_tpl->tpl_vars['o'] = $foreach_o_Sav;
}
?>
                </select>
            </div>
        </div>
        <div class="form-group col-sm-6 col-md-3">
            <label>Valor:</label>
            <div class="input-group">
                <span class="input-group-addon mat-icoemail1">
                    <i class="material-icons">filter_1</i>
                </span>
                <input type="text" class="form-control" name="email" placeholder="" value="<?php if (isset($_smarty_tpl->tpl_vars['registro']->value)) {
echo $_smarty_tpl->tpl_vars['registro']->value['email'];
}?>">
            </div>
        </div>
        <div class="col-sm-6 col-md-2">
        	<a href="" class="btn btn-primary"><i class="fa fa-plus"></i></a>
        </div>
        <div class="col-sm-6 col-md-6">
        	<table class="table table-bordered table-hover">
		        <thead>
					<tr>
						<th width="10">N°</th>
						<th width="150">Criterio</th>
						<th width="150">Valor</th>
						<th width="90">Acción</th>
					</tr>
				</thead>
				<tbody>
					<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(1, null, 0);?>
					<?php
$_from = $_smarty_tpl->tpl_vars['s_criterios']->value;
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
						<td><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['l']->value['criterio'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['l']->value['valor'];?>
</td>
						<td class="text-center"><?php echo accion($_smarty_tpl->tpl_vars['l']->value['id'],'editar|denegar|permitir',$_smarty_tpl->tpl_vars['get_url']->value,$_smarty_tpl->tpl_vars['l']->value['oculto']);?>
</td>
					</tr>
					<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable($_smarty_tpl->tpl_vars['i']->value+1, null, 0);?>
					<?php
$_smarty_tpl->tpl_vars['l'] = $foreach_l_Sav;
}
?>
				</tbody>
        	</table>
        </div>
    </div>
</div>
<?php }
}
?>