<div class="table-responsive box-red1 tablared1">

	<table class="table table-bordered table-hover datatable">

		<thead>

			<tr>

				<th width="10">N°</th>

				<th width="100">Código</th>
				
				<th width="140">Tipo de subasta</th>

				<th width="90">Categoría</th>

				<th width="150">Producto / Servicio</th>

				<th width="110">Precio Base</th>

				<th width="110">Incremento / Decremento</th>

				<th width="100">Fecha de Subasta</th>

				<th width="90">Estado</th>

				<th width="100">Detalles</th>
				<th width="90">Acción</th>

			</tr>

		</thead>



		<tbody>

			{$i = 1}

			{foreach $lista as $l}

			<tr>

				<td>{$i}</td>

				<td>{$l.codigo}</td>
				
				<td>{$l.tipo_subasta}</td>

				<td>{$l.categoria}</td>

				<td>{$l.producto}</td>

				<td>{$l.moneda_simbolo}{$l.precio_base}</td>

				{if $l.tipo_descuento_id == 1}

				<td>{$l.moneda_simbolo}{$l.descuento_minimo}</td>

				{else}

				<td>{$l.descuento_minimo} %</td>

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

					{if $l.f_inicio <= date('Y-m-d H:i:s') && $l.precio_base != 0}
					    {if $l.estado_id >= 3 && $l.estado_id != 5}

					    {$l.id|detalle:'resultado':$get_url}
					    {/if}

					{/if}

				</td>
				
				<td class="text-center">
					<a href="{$base_url}cliente/subasta/pregunta/{$l.id}" class="btn btn-info" data-toggle="tooltip" title="" data-original-title="Pregunta"><i class="fa fa-comments"></i></a>
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