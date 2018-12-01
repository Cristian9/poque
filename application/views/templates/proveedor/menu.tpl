<ul class="sidebar-menu" data-widget="tree">
	<li class="header"><b>MENÚ</b></li>

	<li class="{if $active == 'home'}active{/if}">
		<a href="{$base_url}proveedor/home">
			<i class="fa fa-dashboard"></i> <span>Inicio</span>
		</a>
	</li>

	<li class="{if $active == 'subasta'}active{/if}">
		<a href="{$base_url}proveedor/subasta/listar" class="dash-maticon1">
			<i class="material-icons">gavel</i> <span>Subastas</span>
		</a>
	</li>

	<li class="{if $active == 'preguntas_frecuentes'}active{/if}">
		<a href="{$base_url}proveedor/preguntas_frecuentes/listar" class="dash-maticon1">
			<i class="material-icons">help_outline</i> <span>Preguntas frecuentes</span>
		</a>
	</li>

</ul>