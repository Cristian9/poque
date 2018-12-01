<ul class="sidebar-menu" data-widget="tree">
	<li class="header"><b>MENÚ</b></li>

	<li class="{if $active == 'home'}active{/if}">
		<a href="{$base_url}cliente/home">
			<i class="fa fa-dashboard"></i> <span>Inicio</span>
		</a>
	</li>

	<li class="{if $active == 'subasta'}active{/if}">
		<a href="{$base_url}cliente/subasta/listar" class="dash-maticon1">
			<i class="material-icons">gavel</i> <span>Subastas</span>
		</a>
	</li>

</ul>