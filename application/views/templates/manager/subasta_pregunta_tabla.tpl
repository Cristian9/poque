<div class="table-responsive box-red1 tablared1">

	<table class="table table-bordered table-hover datatable">

		

		<thead>

			<tr>

				<th width="200">Usuario</th>
				
				<th width="200">Pregunta</th>

				<th width="200">Respuesta</th>

				<th width="80">Acción</th>

			</tr>

		</thead>



		<tbody>

			{foreach $lista as $l}

			<tr>

				<td>{$l.usuario}</td>
				
				<td>{$l.pregunta}</td>

				<td>{$l.respuesta}</td>

				<td class="text-center">{$l.id|accion:'editar':$get_url:$l.oculto}</td>

			</tr>

			{/foreach}

		</tbody>



	</table>

</div>