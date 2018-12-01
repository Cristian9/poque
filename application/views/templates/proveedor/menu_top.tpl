<ul class="nav navbar-nav">
	<li class="{if $active == 'home'}active{/if}">
		<a href="{$base_url}proveedor/home">
			<i class="fa fa-dashboard"></i> <span>Inicio</span>
		</a>
	</li>

	<li class="{if $active == 'subasta'}active{/if}">
		<a href="{$base_url}proveedor/subasta/listar">
			<i class="fa fa-university"></i> <span>Subastas</span>
		</a>
	</li>

	<li class="{if $active == 'preguntas_frecuentes'}active{/if}">
		<a href="{$base_url}proveedor/preguntas_frecuentes/listar">
			<i class="fa fa-comments"></i> <span>Preguntas frecuentes</span>
		</a>
	</li>
</ul>