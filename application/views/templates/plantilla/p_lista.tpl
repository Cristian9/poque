<div class="content-wrapper">
	<section class="content-header">
		<h1>
			Módulo
			<small>{$modulo}</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-home"></i> Home</a></li>
			<li class="active">{$pagina}</li>
		</ol>
   </section>
	<section class="content">
		<div class="row">
			<div class="col-sm-12">
				<div class="box box-danger">
					<div class="box-header with-border">

						<h3 class="box-title">Listado</h3>
						<div class="pull-right">
						{if isset($buttons)}
							{$buttons}
						{/if}
						{if $agregar}
							<a class="btn btn-blue1" data-toggle="tooltip" title="Agregar" href="{$get_url}agregar"><i class="fa fa-plus"></i></a>
						{/if}
						</div>

					</div>



					<div class="box-body">



						<div class="response"></div>



						{$tabla}



					</div>

				</div>

			</div>

		</div>

	</section>



</div>