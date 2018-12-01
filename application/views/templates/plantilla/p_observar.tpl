<div class="content-wrapper">
	<section class="content-header">
		<h1>
			Módulo
			<small>{$modulo}</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-home"></i> Home</a></li>
			<li><a href="{$get_url}listar"><i class="fa fa-list"></i> Listar {$modulo}</a></li>
			<li class="active">{$pagina}</li>
		</ol>
    </section>

	<section class="content">
		<div class="box box-danger">
			<div class="box-body">
				<div class="response"></div>
				{$detalle}
			</div>
			<div class="box-footer">
			</div>
		</div>
	</section>
</div>