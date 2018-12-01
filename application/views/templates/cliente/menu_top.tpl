<ul class="nav navbar-nav">
	<li class="{if $active == 'home'}active{/if}">
		<a href="{$base_url}cliente/home">
			<i class="fa fa-dashboard"></i> <span>Inicio</span>
		</a>
	</li>

	<li class="{if $active == 'subasta'}active{/if}">
		<a href="{$base_url}cliente/subasta/listar">
			<i class="fa fa-university"></i> <span>Subastas</span>
		</a>
	</li>
</ul>