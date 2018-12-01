<div class="content-wrapper">
	<section class="content-header">
		<h1>
			Módulo
			<small>{$modulo}</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-home"></i> Home</a></li>
			{if isset($registro)}
				<li><a href="{$get_url}listar"><i class="fa fa-list"></i> Listar {$modulo}</a></li>
			{/if}
			<li class="active">{$pagina}</li>
		</ol>
   	</section>

	<section class="content">
		<div class="row">
			<div class="col-sm-5 col-md-4">
				<form class="bform" action="{$get_url}accion" method="post">
					<div class="box box-danger">
						<div class="box-body">
							<div class="response"></div>
							{$form}
						</div>
						<div class="box-footer">
							<div class="text-right">
	                        	<button type="submit" class="btn save bot-send-1">Registrar</button>
	                        	<input type="hidden" name="id" value="{if isset($registro)}{$registro.id}{/if}">
	                        </div>
						</div>
					</div>
				</form>
			</div>

			<div class="col-sm-7 col-md-8">
				<div class="box box-danger">
					<div class="box-body">

						{$tabla}
						
					</div>
				</div>
			</div>
		</div>
	</section>
</div>