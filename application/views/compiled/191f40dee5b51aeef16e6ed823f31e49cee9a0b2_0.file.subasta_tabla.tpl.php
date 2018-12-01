<?php /* Smarty version 3.1.27, created on 2018-11-09 17:43:19
         compiled from "/home/mycminesac/public_html/subasta/application/views/templates/manager/subasta_tabla.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2360042395be60d87cf7c92_86878210%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '191f40dee5b51aeef16e6ed823f31e49cee9a0b2' => 
    array (
      0 => '/home/mycminesac/public_html/subasta/application/views/templates/manager/subasta_tabla.tpl',
      1 => 1534897066,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2360042395be60d87cf7c92_86878210',
  'variables' => 
  array (
    'get_url' => 0,
    'categorias' => 0,
    'o' => 0,
    'filtro' => 0,
    'lista' => 0,
    'i' => 0,
    'l' => 0,
    'f_actual' => 0,
    'base_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5be60d882a2ed3_70673141',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5be60d882a2ed3_70673141')) {
function content_5be60d882a2ed3_70673141 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2360042395be60d87cf7c92_86878210';
?>
<div class="botones-myfilter">

    <form class="filtro" action="<?php echo $_smarty_tpl->tpl_vars['get_url']->value;?>
listar" method="post">

        <div class="row">

            <div class="form-group col-sm-2">

                <label for="firstname" class="sr-only"></label>

                <select class="form-control selectpicker" name="categoria" data-live-search="true" onchange="this.form.submit()">

                    <option selected value="">Categoría</option>

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
" <?php if (isset($_smarty_tpl->tpl_vars['filtro']->value['categoria_id']) && $_smarty_tpl->tpl_vars['filtro']->value['categoria_id'] == $_smarty_tpl->tpl_vars['o']->value['id']) {?>selected="selected"<?php }?>>

                        <?php echo $_smarty_tpl->tpl_vars['o']->value['nombre'];?>


                    </option>

                    <?php
$_smarty_tpl->tpl_vars['o'] = $foreach_o_Sav;
}
?>

                </select>

            </div>

        </div>

    </form>

</div>

<div class="table-responsive box-red1 tablared1">



	<table class="table table-bordered table-hover datatable">



		<thead>



			<tr>



				<th width="10">N°</th>

				<th width="90">Código</th>

				<th width="120">Tipo de subasta</th>



				<th width="150">Producto / Servicio</th>



				<th width="180">Cliente</th>



				<th width="90">Precio Base</th>



				<th width="110">Incremento / Decremento</th>



				<th width="90">Fecha de subasta</th>



				<th width="80">Estado</th>



				<th width="130">Detalles</th>



				<th width="150">Acción</th>



			</tr>



		</thead>







		<tbody>



			<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(1, null, 0);?>



			<?php
$_from = $_smarty_tpl->tpl_vars['lista']->value;
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

				<td><?php echo $_smarty_tpl->tpl_vars['l']->value['codigo'];?>
</td>

				<td><?php echo $_smarty_tpl->tpl_vars['l']->value['tipo_subasta'];?>
</td>


				<td><?php echo $_smarty_tpl->tpl_vars['l']->value['producto'];?>
</td>



				<td><?php echo $_smarty_tpl->tpl_vars['l']->value['cliente'];?>
</td>



				<td><?php echo $_smarty_tpl->tpl_vars['l']->value['moneda_simbolo'];
echo $_smarty_tpl->tpl_vars['l']->value['precio_base'];?>
</td>



				<?php if ($_smarty_tpl->tpl_vars['l']->value['tipo_descuento_id'] == 1) {?>



				<td><?php echo $_smarty_tpl->tpl_vars['l']->value['moneda_simbolo'];
echo $_smarty_tpl->tpl_vars['l']->value['descuento_minimo'];?>
</td>



				<?php } elseif ($_smarty_tpl->tpl_vars['l']->value['tipo_descuento_id'] == 2) {?>



				<td><?php echo $_smarty_tpl->tpl_vars['l']->value['descuento_minimo'];?>
 %</td>

				<?php } else { ?>

				<td></td>

				<?php }?>



				<td>
				<?php if ($_smarty_tpl->tpl_vars['l']->value['f_inicio'] == '0000-00-00 00:00:00') {?>
					-
				<?php } else { ?>
				    <?php echo formato_fecha($_smarty_tpl->tpl_vars['l']->value['f_inicio'],'fecha_hora_completo');?>

				<?php }?>
				</td>



				<td><?php echo $_smarty_tpl->tpl_vars['l']->value['estado'];?>
</td>



				<td class="text-center">

					<?php echo detalle($_smarty_tpl->tpl_vars['l']->value['id'],'bases',$_smarty_tpl->tpl_vars['get_url']->value);?>

					<?php echo detalle($_smarty_tpl->tpl_vars['l']->value['id'],'ver',$_smarty_tpl->tpl_vars['get_url']->value);?>


					<?php if ($_smarty_tpl->tpl_vars['l']->value['f_inicio'] <= date('Y-m-d H:i:s') && $_smarty_tpl->tpl_vars['l']->value['precio_base'] != 0) {?>
					    <?php if ($_smarty_tpl->tpl_vars['l']->value['estado_id'] >= 3 && $_smarty_tpl->tpl_vars['l']->value['estado_id'] != 5) {?>

					    <?php echo detalle($_smarty_tpl->tpl_vars['l']->value['id'],'resultado',$_smarty_tpl->tpl_vars['get_url']->value);?>

					    <?php }?>

					<?php }?>

				</td>



				<td class="text-center">

					<?php if ($_smarty_tpl->tpl_vars['l']->value['f_inicio'] >= date('Y-m-d H:i:s') || $_smarty_tpl->tpl_vars['l']->value['f_inicio'] == '0000-00-00 00:00:00') {?>

					<?php echo accion($_smarty_tpl->tpl_vars['l']->value['id'],'editar_disenio|editar_bases',$_smarty_tpl->tpl_vars['get_url']->value,$_smarty_tpl->tpl_vars['l']->value['oculto']);?>


					<?php }?>

					<?php echo accion($_smarty_tpl->tpl_vars['l']->value['id'],'denegar|permitir',$_smarty_tpl->tpl_vars['get_url']->value,$_smarty_tpl->tpl_vars['l']->value['oculto']);?>




					<?php if ($_smarty_tpl->tpl_vars['l']->value['f_inicio'] > $_smarty_tpl->tpl_vars['f_actual']->value || $_smarty_tpl->tpl_vars['l']->value['f_inicio'] == '0000-00-00 00:00:00') {?>



					<?php echo accion($_smarty_tpl->tpl_vars['l']->value['id'],'eliminar',$_smarty_tpl->tpl_vars['get_url']->value,$_smarty_tpl->tpl_vars['l']->value['oculto']);?>




					<?php }?>
					<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
manager/subasta_pregunta/listar/<?php echo $_smarty_tpl->tpl_vars['l']->value['id'];?>
" class="btn btn-info" data-toggle="tooltip" title="" data-original-title="Pregunta"><i class="fa fa-comments"></i></a>
					
					<?php if ($_smarty_tpl->tpl_vars['l']->value['f_inicio'] <= date('Y-m-d H:i:s') && $_smarty_tpl->tpl_vars['l']->value['precio_base'] != 0) {?>
					    <?php if ($_smarty_tpl->tpl_vars['l']->value['estado_id'] == 3) {?>

					    <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
manager/subasta/terminar/<?php echo $_smarty_tpl->tpl_vars['l']->value['id'];?>
" class="btn btn-success" style="background-color: #808080; border-color: #808080" data-toggle="tooltip" title="" data-original-title="Cerrar subasta"><i class="fa fa-check"></i></a>
					    
					    <?php }?>

					<?php }?>



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







<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog" role="document">

    <div class="modal-content">

      <div class="modal-header">

        <h5 class="modal-title" id="exampleModalLabel">Subasta</h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">

          <span aria-hidden="true">&times;</span>

        </button>

      </div>

      <form class="bform" action="<?php echo $_smarty_tpl->tpl_vars['get_url']->value;?>
code" method="post">

      <div class="modal-body">

      	<div class="row">

      		<div class="form-group col-sm-12 col-md-12">

      			<div class="response"></div>

      		</div>

      		<div class="form-group col-sm-12 col-md-12">



	            <label>Código de la subasta:</label>



	            <div class="input-group">



	                <span class="input-group-addon mat-icoemail1">



	                    <i class="material-icons">code</i>



	                </span>



	                <input id="valor" type="text" class="form-control" name="codigo" placeholder="">



	            </div>



	        </div>

      	</div>

      </div>

      <div class="modal-footer">

        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

        <button type="submit" class="btn btn-primary">Ingresar</button>

      </div>

      </form>

    </div>

  </div>

</div><?php }
}
?>