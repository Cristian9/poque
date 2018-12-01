<div class="botones-myfilter">

    <form class="filtro" action="{$get_url}listar" method="post">

        <div class="row">

            <div class="form-group col-sm-2">

                <label for="firstname" class="sr-only"></label>

                <select class="form-control selectpicker" name="categoria" data-live-search="true" onchange="this.form.submit()">

                    <option selected value="">Categoría</option>

                    {foreach $categorias as $o}

                    <option value="{$o.id}" {if isset($filtro.categoria_id) && $filtro.categoria_id == $o.id}selected="selected"{/if}>

                        {$o.nombre}

                    </option>

                    {/foreach}

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



			{$i = 1}



			{foreach $lista as $l}



			<tr>



				<td>{$i}</td>

				<td>{$l.codigo}</td>

				<td>{$l.tipo_subasta}</td>


				<td>{$l.producto}</td>



				<td>{$l.cliente}</td>



				<td>{$l.moneda_simbolo}{$l.precio_base}</td>



				{if $l.tipo_descuento_id == 1}



				<td>{$l.moneda_simbolo}{$l.descuento_minimo}</td>



				{else if $l.tipo_descuento_id == 2}



				<td>{$l.descuento_minimo} %</td>

				{else}

				<td></td>

				{/if}



				<td>
				{if $l.f_inicio == '0000-00-00 00:00:00'}
					-
				{else}
				    {$l.f_inicio|formato_fecha:'fecha_hora_completo'}
				{/if}
				</td>



				<td>{$l.estado}</td>



				<td class="text-center">

					{$l.id|detalle:'bases':$get_url}
					{$l.id|detalle:'ver':$get_url}

					{if $l.f_inicio <= date('Y-m-d H:i:s') && $l.precio_base != 0}
					    {if $l.estado_id >= 3 && $l.estado_id != 5}

					    {$l.id|detalle:'resultado':$get_url}
					    {/if}

					{/if}

				</td>



				<td class="text-center">

					{if $l.f_inicio >= date('Y-m-d H:i:s') || $l.f_inicio == '0000-00-00 00:00:00'}

					{$l.id|accion:'editar_disenio|editar_bases':$get_url:$l.oculto}

					{/if}

					{$l.id|accion:'denegar|permitir':$get_url:$l.oculto}



					{if $l.f_inicio > $f_actual || $l.f_inicio == '0000-00-00 00:00:00'}



					{$l.id|accion:'eliminar':$get_url:$l.oculto}



					{/if}
					<a href="{$base_url}manager/subasta_pregunta/listar/{$l.id}" class="btn btn-info" data-toggle="tooltip" title="" data-original-title="Pregunta"><i class="fa fa-comments"></i></a>
					
					{if $l.f_inicio <= date('Y-m-d H:i:s') && $l.precio_base != 0}
					    {if $l.estado_id == 3}

					    <a href="{$base_url}manager/subasta/terminar/{$l.id}" class="btn btn-success" style="background-color: #808080; border-color: #808080" data-toggle="tooltip" title="" data-original-title="Cerrar subasta"><i class="fa fa-check"></i></a>
					    
					    {/if}

					{/if}



				</td>



			</tr>



			{$i = $i + 1}



			{/foreach}



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

      <form class="bform" action="{$get_url}code" method="post">

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

</div>