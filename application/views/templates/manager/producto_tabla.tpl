<div class="table-responsive box-red1 tablared1">
	<table class="table table-bordered table-hover datatable">
		
		<thead>
			<tr>
				{*<th width="70">Nro OA.</th>*}
				<th width="200">Producto / Servicio</th>
				<th width="80">Acción</th>
			</tr>
		</thead>

		<tbody>
			{foreach $lista as $l}
			<tr>
				<td>{$l.nombre}</td>
				<td class="text-center">{$l.id|accion:'editar|denegar|permitir|eliminar':$get_url:$l.oculto}</td>
			</tr>
			{/foreach}
		</tbody>

	</table>
</div>