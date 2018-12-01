<div class="row">
	<form class="bform" action="{$get_url}agregar_pregunta" method="post">
		<div class="response"></div>
		<div class="form-group col-sm-12 col-md-12">
									
		    <label>Pregunta:</label>
		    <div class="input-group">
		    	<span class="input-group-addon">
		            <i class="fa fa-database"></i>
		        </span>
		        <input type="text" class="form-control" name="pregunta">
		    </div>
		</div>
		<div class="col-md-6">
			<button type="submit" class="btn btn-danger save">Agregar pregunta</button>
			<input type="hidden" name="id" value="{$id}">
		</div>
	</form>
</div>

<div class="row">
	<div class="col-md-12">
		<legend>Preguntas</legend>
	</div>
	{foreach $preguntas as $l}

		<ul>

			<li><b>{$l.pregunta}</b></li>

			<ol>{$l.respuesta}</ol>

		</ul>

	{/foreach}
</div>