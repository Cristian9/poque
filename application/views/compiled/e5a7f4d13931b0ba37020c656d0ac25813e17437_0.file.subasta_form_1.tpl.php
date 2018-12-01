<?php /* Smarty version 3.1.27, created on 2018-12-01 10:06:45
         compiled from "C:\xampp\htdocs\subasta_project\application\views\templates\manager\subasta_form_1.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:3862778315c02a385cd2167_36347664%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e5a7f4d13931b0ba37020c656d0ac25813e17437' => 
    array (
      0 => 'C:\\xampp\\htdocs\\subasta_project\\application\\views\\templates\\manager\\subasta_form_1.tpl',
      1 => 1524614372,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3862778315c02a385cd2167_36347664',
  'variables' => 
  array (
    'registro' => 0,
    'clientes' => 0,
    'o' => 0,
    'categorias' => 0,
    'productos' => 0,
    'monedas' => 0,
    'tipo_descuentos' => 0,
    'tipo_subastas' => 0,
    'proveedores' => 0,
    's_proveedores' => 0,
    'l' => 0,
    'base_url' => 0,
    'criterios' => 0,
    's_criterios' => 0,
    'total' => 0,
    'li' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5c02a385db6831_94826731',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5c02a385db6831_94826731')) {
function content_5c02a385db6831_94826731 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '3862778315c02a385cd2167_36347664';
?>
<div class="row">

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
            <?php if (isset($_smarty_tpl->tpl_vars['registro']->value) && $_smarty_tpl->tpl_vars['registro']->value['f_disenio'] != '0000-00-00 00:00:00') {?>
            Última modificación:<br><?php echo formato_fecha($_smarty_tpl->tpl_vars['registro']->value['f_disenio'],'fecha_hora_completo');?>

            <?php }?>
        </label>
    </div>

</div>



<div class="boxround1">
    <div class="row">
        <div class="form-group col-sm-4 col-md-4">
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

        <div class="form-group col-sm-4 col-md-4">
            <label>Fecha:</label>
            <div class="input-group">
                <span class="input-group-addon mat-icomap1">
                    <i class="material-icons">date_range</i>
                </span>
                <input type="datetime-local" class="form-control" name="f_inicio" placeholder="" value="<?php if (isset($_smarty_tpl->tpl_vars['registro']->value)) {
echo formato_fecha($_smarty_tpl->tpl_vars['registro']->value['f_inicio'],'datetime_local');
}?>">
            </div>
        </div>

        <div class="form-group col-sm-2 col-md-2">
            <label>Duración (min):</label>
            <div class="input-group">
                <span class="input-group-addon mat-icoemail1">
                    <i class="material-icons">timer</i>
                </span>
                <input type="text" class="form-control" name="duracion" placeholder="" value="<?php if (isset($_smarty_tpl->tpl_vars['registro']->value)) {
echo $_smarty_tpl->tpl_vars['registro']->value['duracion'];
} else { ?>20<?php }?>">
            </div>
        </div>

        <div class="form-group col-sm-2 col-md-2">
            <label>Extensión (min):</label>
            <div class="input-group">
                <span class="input-group-addon mat-icoemail1">
                    <i class="material-icons">timer</i>
                </span>
                <input type="text" class="form-control" name="extencion" placeholder="" value="<?php if (isset($_smarty_tpl->tpl_vars['registro']->value)) {
echo $_smarty_tpl->tpl_vars['registro']->value['extencion'];
} else { ?>3<?php }?>">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="form-group col-sm-4 col-md-4">
            <label>Categoría:</label>
            <div class="input-group">
                <span class="input-group-addon mat-icomap1">
                    <i class="material-icons">bookmark_border</i>
                </span>
                <select id="categoria" class="form-control" name="categoria">
                    <option value="" selected="" disabled>Seleccione una opción</option>
                    <?php
$_from = $_smarty_tpl->tpl_vars['categorias']->value;
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
" <?php if (isset($_smarty_tpl->tpl_vars['registro']->value) && $_smarty_tpl->tpl_vars['registro']->value['categoria_id'] == $_smarty_tpl->tpl_vars['o']->value['id']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['o']->value['nombre'];?>
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
                    <i class="material-icons">shopping_basket</i>
                </span>
                <select id="producto" class="form-control" name="producto">
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
" <?php if (isset($_smarty_tpl->tpl_vars['registro']->value) && $_smarty_tpl->tpl_vars['registro']->value['producto_id'] == $_smarty_tpl->tpl_vars['o']->value['id']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['o']->value['nombre'];?>
</option>
                    <?php
$_smarty_tpl->tpl_vars['o'] = $foreach_o_Sav;
}
?>
                </select>
            </div>
        </div>

        <div class="form-group col-sm-6 col-md-4">
            <label>Descripción:</label>
            <div class="input-group">
                <span class="input-group-addon mat-icoemail1">
                    <i class="material-icons">border_color</i>
                </span>
                <textarea class="form-control" name="descripcion"><?php if (isset($_smarty_tpl->tpl_vars['registro']->value)) {
echo $_smarty_tpl->tpl_vars['registro']->value['descripcion'];
}?></textarea>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="form-group col-sm-6 col-md-4">
            <label>Moneda:</label>
            <div class="input-group">
                <span class="input-group-addon mat-icomap1">
                    <i class="fa fa-money"></i>
                </span>
                <select class="form-control" name="moneda">
                    <option value="" selected="" disabled>Seleccione una opción</option>
                    <?php
$_from = $_smarty_tpl->tpl_vars['monedas']->value;
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
" <?php if (isset($_smarty_tpl->tpl_vars['registro']->value) && $_smarty_tpl->tpl_vars['registro']->value['moneda_id'] == $_smarty_tpl->tpl_vars['o']->value['id']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['o']->value['nombre'];?>
</option>
                    <?php
$_smarty_tpl->tpl_vars['o'] = $foreach_o_Sav;
}
?>
                </select>
            </div>
        </div>
        <div class="form-group col-sm-6 col-md-4">
            <label>Tipo de descuento:</label>
            <div class="input-group">
                <span class="input-group-addon mat-icomap1">
                    
                    <i class="fa fa-money"></i>
                    <i class="fa fa-percent" style="font-size: 17px;"></i>
                </span>
                <select class="form-control" name="tipo_descuento">
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
" <?php if (isset($_smarty_tpl->tpl_vars['registro']->value) && $_smarty_tpl->tpl_vars['registro']->value['tipo_descuento_id'] == $_smarty_tpl->tpl_vars['o']->value['id']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['o']->value['nombre'];?>
</option>
                    <?php
$_smarty_tpl->tpl_vars['o'] = $foreach_o_Sav;
}
?>
                </select>
            </div>
        </div>
        <div class="form-group col-sm-6 col-md-4">
            <label>Descuento mínimo:</label>
            <div class="input-group">
                <span class="input-group-addon mat-icontacto1">
                    <i class="material-icons">arrow_downward</i>
                </span>
                <input type="text" class="form-control" name="descuento_minimo" placeholder="" value="<?php if (isset($_smarty_tpl->tpl_vars['registro']->value)) {
echo $_smarty_tpl->tpl_vars['registro']->value['descuento_minimo'];
}?>">
            </div>
        </div>
        <div class="form-group col-sm-6 col-md-4">
            <label>Precio Base:</label>
            <div class="input-group">
                <span class="input-group-addon mat-icoemail1">
                    <i class="material-icons">filter_1</i>
                </span>
                <input id="precio_base" type="text" class="form-control decimal sub_precio" name="precio_base" placeholder="" value="<?php if (isset($_smarty_tpl->tpl_vars['registro']->value)) {
echo $_smarty_tpl->tpl_vars['registro']->value['precio_base'];
}?>">
            </div>
        </div>

        <div class="form-group col-sm-6 col-md-4">
            <label>Precio de Reserva:</label>
            <div class="input-group">
                <span class="input-group-addon mat-icoemail1">
                    <i class="material-icons">filter_2</i>
                </span>
                <input id="precio_reserva" type="text" class="form-control decimal sub_precio" name="precio_reserva" placeholder="" value="<?php if (isset($_smarty_tpl->tpl_vars['registro']->value)) {
echo $_smarty_tpl->tpl_vars['registro']->value['precio_reserva'];
}?>">
            </div>
        </div>

        <div class=" col-sm-6 col-md-4">
            <label>Ahorro:</label>
        </div>
        <div class="form-group col-sm-6 col-md-4">
            <div class="row">
                <div class="col-md-6">
                    <div class="input-group">
                        <span class="input-group-addon mat-icoemail1">
                            <i class="fa fa-money" style="font-size: 24px;"></i>
                        </span>
                        <input id="ahorro_monto" type="text" class="form-control" placeholder="" value="<?php if (isset($_smarty_tpl->tpl_vars['registro']->value)) {
echo $_smarty_tpl->tpl_vars['registro']->value['ahorro_monto'];
}?>" disabled="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-group">
                        <span class="input-group-addon mat-icoemail1">
                            <b>%</b>
                        </span>
                        <input id="ahorro_porcentaje" type="text" class="form-control decimal" placeholder="" value="<?php if (isset($_smarty_tpl->tpl_vars['registro']->value)) {
echo sprintf("%.2f",$_smarty_tpl->tpl_vars['registro']->value['ahorro_porcentaje']);
}?>" disabled="">
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group col-sm-4 col-md-4">
            <label>Tipo de subasta:</label>
            <div class="input-group">
                <span class="input-group-addon mat-icomap1">
                    <i class="material-icons">gavel</i>
                </span>
                <select class="form-control" name="tipo_subasta">
                    <option value="" selected="" disabled>Seleccione una opción</option>
                    <?php
$_from = $_smarty_tpl->tpl_vars['tipo_subastas']->value;
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
" <?php if (isset($_smarty_tpl->tpl_vars['registro']->value) && $_smarty_tpl->tpl_vars['registro']->value['tipo_subasta_id'] == $_smarty_tpl->tpl_vars['o']->value['id']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['o']->value['nombre'];?>
</option>
                    <?php
$_smarty_tpl->tpl_vars['o'] = $foreach_o_Sav;
}
?>
                </select>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
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
                    <span data-toggle="tooltip" title="" data-original-title="Agregar proveedor">
                        <a class="btn btn-primary add-proveedor spacmore1" data-title="Agregar proveedor" data-name="proveedor" data-div="provee" data-select="proveedor">
                            <i class="fa fa-plus"></i>
                        </a>
                    </span>
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
                                    <a class="btn btn-danger delete-item"  style="background-color: #f16654 !important; border-color: #f16654 !important" data-url="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
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

    <div class="col-md-6">
        <div class="boxround1">
        	<legend>Criterios</legend>
            <div class="row">
                <div class="form-group col-sm-6 col-md-6">
                    <label>Criterio:</label>
                    <div class="input-group">
                        <span class="input-group-addon mat-icomap1">
                            <i class="material-icons">edit</i>
                        </span>
                        <select id="criterio" class="form-control">
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
                    <label>Valor (%):</label>
                    <div class="input-group">
                        <span class="input-group-addon mat-icoemail1">
                            <b>%</b>
                        </span>
                        <input id="valor" type="text" class="form-control" name="valor" placeholder="">
                    </div>
                </div>

                <div class="col-sm-2 col-md-2">
                    <span data-toggle="tooltip" title="" data-original-title="Agregar criterio">
                    	<a class="btn btn-primary add-criterio spacmore1">
                            <i class="fa fa-plus"></i>
                        </a>
                    </span>
                </div>
                <div class="col-sm-12 col-md-12">
                	<table id="criterios" class="table table-bordered table-hover">
        		        <thead>
        					<tr>
        						<th width="150">Criterio</th>
        						<th width="150">Ponderado (%)</th>
        						<th width="90">Acción</th>
        					</tr>
        				</thead>
        				<tbody>
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
        						<td class="criterios_id" data-id="<?php echo $_smarty_tpl->tpl_vars['l']->value['criterio_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['l']->value['criterio'];?>
</td>
        						<td><?php echo $_smarty_tpl->tpl_vars['l']->value['valor'];?>
%</td>
        						<td class="text-center">
                                    <a class="btn btn-danger delete-item" style="background-color: #f16654 !important; border-color: #f16654 !important" data-url="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
manager/subasta/eliminar_criterio" data-id="<?php echo $_smarty_tpl->tpl_vars['l']->value['id'];?>
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
                    <div>
                        <input type="hidden" id="total" name="total" value="<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
">
                        Total
                        <span id="total_text"><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
%</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php if (isset($_smarty_tpl->tpl_vars['registro']->value)) {?>
<div class="boxround1">
    <legend>Puntaje de proveedores</legend>
    <div class="row">
        <div class="form-group col-sm-12 col-md-12">
            <div class="table-responsive">
                <table id="criterio_proveedor" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th width="100">Criterio</th>
                            <th width="100">Ponderado</th>
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
                            <th width="100"><?php echo $_smarty_tpl->tpl_vars['l']->value['proveedor'];?>
</th>
                            <?php
$_smarty_tpl->tpl_vars['l'] = $foreach_l_Sav;
}
?>
                        </tr>
                    </thead>
                    <tbody>
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
                                <td><?php echo $_smarty_tpl->tpl_vars['l']->value['criterio'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['l']->value['valor'];?>
%</td>
                                <?php
$_from = $_smarty_tpl->tpl_vars['l']->value['proveedores'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['li'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['li']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['li']->value) {
$_smarty_tpl->tpl_vars['li']->_loop = true;
$foreach_li_Sav = $_smarty_tpl->tpl_vars['li'];
?>
                                <td>
                                    <?php if ($_smarty_tpl->tpl_vars['l']->value['criterio_id'] == 1) {?>
                                    -
                                    <?php } else { ?>
                                    <input type="number" max="<?php echo $_smarty_tpl->tpl_vars['l']->value['valor'];?>
" min="0" value="<?php echo $_smarty_tpl->tpl_vars['li']->value['puntaje'];?>
" name="scp_puntaje[]">%
                                    <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['li']->value['id'];?>
" name="scp_id[]">
                                    <?php }?>
                                </td>
                                <?php
$_smarty_tpl->tpl_vars['li'] = $foreach_li_Sav;
}
?>
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
<?php }
}
}
?>