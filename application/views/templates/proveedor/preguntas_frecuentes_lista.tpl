{foreach $lista as $l}
	<ul>
		<li><b>{$l.pregunta}</b></li>
		<ol>{$l.respuesta}</ol>
	</ul>
{/foreach}