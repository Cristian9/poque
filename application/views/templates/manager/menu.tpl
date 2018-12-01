<ul class="sidebar-menu" data-widget="tree">
	<li class="header"><b>MENÚ</b></li>

	<li class="{if $active == 'home'}active{/if}">
		<a href="{$base_url}manager/home">
			<i class="fa fa-dashboard"></i> <span>Inicio</span>
		</a>
	</li>
	<li class="{if $active == 'proveedor'}active{/if}">
		<a href="{$base_url}manager/proveedor/listar" class="dash-maticon1">
			<i class="material-icons">person_outline</i> <span>Proveedores</span>
		</a>
	</li>
	<li class="{if $active == 'cliente'}active{/if}">
		<a href="{$base_url}manager/cliente/listar">
			<i class="fa fa-users"></i> <span>Clientes</span>
		</a>
	</li>
	<li class="{if $active == 'subasta'}active{/if}">
		<a href="{$base_url}manager/subasta/listar" class="dash-maticon1">
			<i class="material-icons">gavel</i> <span>Subastas</span>
		</a>
	</li>
	<li class="{if $active == 'preguntas_frecuentes'}active{/if}">
		<a href="{$base_url}manager/preguntas_frecuentes/listar" class="dash-maticon1">
			<i class="material-icons">help_outline</i> <span>Preguntas frecuentes</span>
		</a>
	</li>

	<li class="header"><b>MANTENIMIENTO</b></li>

	<li class="{if $active == 'producto'}active{/if}">
		<a href="{$base_url}manager/producto/listar" class="dash-maticon1">
			<i class="material-icons">shopping_basket</i> <span>Producto / Servicio</span>
		</a>
	</li>

	<li class="{if $active == 'criterio'}active{/if}">
		<a href="{$base_url}manager/criterio/listar" class="dash-maticon1">
			<i class="material-icons">label_outline</i> <span>Criterios</span>
		</a>
	</li>

</ul>