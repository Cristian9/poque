<?php /* Smarty version 3.1.27, created on 2018-03-15 23:37:31
         compiled from "/home/applecoin/public_html/subasta/application/views/templates/manager/subasta_detalle.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1045018395aab4a0b859885_86406790%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5a0c455b6fa284982a3b2b13cafa1cbe5c45290c' => 
    array (
      0 => '/home/applecoin/public_html/subasta/application/views/templates/manager/subasta_detalle.tpl',
      1 => 1521079598,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1045018395aab4a0b859885_86406790',
  'variables' => 
  array (
    'titulo_pagina' => 0,
    'registro' => 0,
    's_proveedores' => 0,
    'l' => 0,
    's_criterios' => 0,
    'li' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5aab4a0cb35982_92680112',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5aab4a0cb35982_92680112')) {
function content_5aab4a0cb35982_92680112 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1045018395aab4a0b859885_86406790';
?>
<legend><?php echo $_smarty_tpl->tpl_vars['titulo_pagina']->value;?>
</legend>

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

</div>



<div class="boxround1">

    <div class="row">



        <div class="form-group col-sm-4 col-md-4">

            <label>Fecha:</label>

            <div class="input-group">

                <span class="input-group-addon mat-icomap1">

                    <i class="material-icons">alarm</i>

                </span>

                <input type="datetime-local" readonly="readonly" class="form-control" name="f_inicio" placeholder="" value="<?php if (isset($_smarty_tpl->tpl_vars['registro']->value)) {
echo formato_fecha($_smarty_tpl->tpl_vars['registro']->value['f_inicio'],'datetime_local');
}?>">

            </div>

        </div>



        <div class="form-group col-sm-4 col-md-4">

            <label>Duración (min):</label>

            <div class="input-group">

                <span class="input-group-addon mat-icoemail1">

                    <i class="material-icons">timer</i>

                </span>

                <input type="text" readonly="readonly" class="form-control" name="duracion" placeholder="" value="<?php if (isset($_smarty_tpl->tpl_vars['registro']->value)) {
echo $_smarty_tpl->tpl_vars['registro']->value['duracion'];
} else { ?>20<?php }?>">

            </div>

        </div>

    </div>



    <div class="row">

        <div class="form-group col-sm-4 col-md-4">

            <label>Categoría:</label>

            <div class="input-group">

                <span class="input-group-addon mat-icoemail1">

                    <i class="material-icons">bookmark</i>

                </span>

                <input type="text" readonly="readonly" class="form-control" name="duracion" placeholder="" value="<?php if (isset($_smarty_tpl->tpl_vars['registro']->value)) {
echo $_smarty_tpl->tpl_vars['registro']->value['categoria'];
} else { ?>20<?php }?>">

            </div>

        </div>



        <div class="form-group col-sm-4 col-md-4">

            <label>Producto / Servicio:</label>

            <div class="input-group">

                <span class="input-group-addon mat-icoemail1">

                    <i class="material-icons">assignment_turned_in</i>

                </span>

                <input type="text" readonly="readonly" class="form-control" name="duracion" placeholder="" value="<?php if (isset($_smarty_tpl->tpl_vars['registro']->value)) {
echo $_smarty_tpl->tpl_vars['registro']->value['producto'];
} else { ?>20<?php }?>">

            </div>

        </div>



        <div class="form-group col-sm-6 col-md-4">

            <label>Descripción:</label>

            <div class="input-group">

                <span class="input-group-addon mat-icoemail1">

                    <i class="material-icons">filter_1</i>

                </span>

                <textarea readonly="readonly" class="form-control" name="descripcion"><?php if (isset($_smarty_tpl->tpl_vars['registro']->value)) {
echo $_smarty_tpl->tpl_vars['registro']->value['descripcion'];
}?></textarea>

            </div>

        </div>

    </div>



    <div class="row">

        <div class="form-group col-sm-6 col-md-4">

            <label>Moneda:</label>

            <div class="input-group">

                <span class="input-group-addon mat-icoemail1">

                    <i class="material-icons">local_atm</i>

                </span>

                <input type="text" readonly="readonly" class="form-control" name="precio_base" placeholder="" value="<?php if (isset($_smarty_tpl->tpl_vars['registro']->value)) {
echo $_smarty_tpl->tpl_vars['registro']->value['moneda'];
}?>">

            </div>

        </div>

        <div class="form-group col-sm-6 col-md-4">

            <label>Tipo de descuento:</label>

            <div class="input-group">

                <span class="input-group-addon mat-icoemail1">

                    <i class="material-icons">add_location</i>

                </span>

                <input type="text" readonly="readonly" class="form-control" name="precio_base" placeholder="" value="<?php if (isset($_smarty_tpl->tpl_vars['registro']->value)) {
echo $_smarty_tpl->tpl_vars['registro']->value['tipo_descuento'];
}?>">

            </div>

        </div>

        <div class="form-group col-sm-6 col-md-4">

            <label>Descuento minimo:</label>

            <div class="input-group">

                <span class="input-group-addon mat-icontacto1">

                    <i class="material-icons">contact_phone</i>

                </span>

                <input type="text" readonly="readonly" class="form-control" name="descuento_minimo" placeholder="" value="<?php if (isset($_smarty_tpl->tpl_vars['registro']->value)) {
echo $_smarty_tpl->tpl_vars['registro']->value['descuento_minimo'];
}?>">

            </div>

        </div>

        <div class="form-group col-sm-6 col-md-4">

            <label>Precio Base:</label>

            <div class="input-group">

                <span class="input-group-addon mat-icoemail1">

                    <i class="material-icons">monetization_on</i>

                </span>

                <input type="text" readonly="readonly" class="form-control" name="precio_base" placeholder="" value="<?php if (isset($_smarty_tpl->tpl_vars['registro']->value)) {
echo $_smarty_tpl->tpl_vars['registro']->value['precio_base'];
}?>">

            </div>

        </div>

        <div class="form-group col-sm-6 col-md-4">

            <label>Precio de Reserva:</label>

            <div class="input-group">

                <span class="input-group-addon mat-icoemail1">

                    <i class="material-icons">monetization_on</i>

                </span>

                <input type="text" readonly="readonly" class="form-control" name="precio_base" placeholder="" value="<?php if (isset($_smarty_tpl->tpl_vars['registro']->value)) {
echo $_smarty_tpl->tpl_vars['registro']->value['precio_reserva'];
}?>">

            </div>

        </div>



        <div class=" col-sm-6 col-md-4">

            <label>Ahorro:</label>

        </div>

        <div class="form-group col-sm-6 col-md-4">



            <div class="col-md-6">



                <div class="input-group">



                    <span class="input-group-addon mat-icoemail1">



                        <i class="material-icons">attach_money</i>



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

</div>

<div class="boxround1">

	<legend>Criterios de la subasta</legend>

    <div class="row">

        <div class="col-sm-12 col-md-12">

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

                                <?php echo $_smarty_tpl->tpl_vars['li']->value['puntaje'];?>
%

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

<?php }
}
?>