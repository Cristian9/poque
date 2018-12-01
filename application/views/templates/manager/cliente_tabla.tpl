<div class="table-responsive box-red1 tablared1">

	<table class="table table-bordered table-hover datatable">

		<thead>

			<tr>

				<th width="10">N°</th>

				<th width="120">Sector</th>

				<th width="120">Rubro</th>

				<th width="120">Nombre</th>

				<th width="70">Ruc</th>

				<th width="120">Departamento</th>

				<th width="110">Provincia</th>

				<th width="110">Distrito</th>

				<th width="100">F. Registro</th>

				<th width="90">Acción</th>

			</tr>

		</thead>



		<tbody>

			{$i = 1}

			{foreach $lista as $l}

			<tr>

				<td>{$i}</td>

				<td>{$l.sector}</td>

				<td>{$l.rubro}</td>

				<td>{$l.nombre}</td>

				<td>{$l.n_documento}</td>

				<td>{$l.departamento}</td>

				<td>{$l.provincia}</td>

				<td>{$l.distrito}</td>

				<td>{$l.f_registro|formato_fecha:'fecha_hora_completo'}</td>

				<td class="text-center">{$l.id|accion:'editar|denegar|permitir|eliminar':$get_url:$l.oculto}</td>

			</tr>

			{$i = $i + 1}

			{/foreach}

		</tbody>

	</table>

</div>