<body>
<header>
<h1>Resultado do prcocessamento</h1>
</header>
<main>
<?php
$n = $_GET ["nome"];
$s = $_GET ["sobrenome"];
echo "<p> É um prazer te conhecer, <strong>$n $s</strong>! Este é meu site;"
?>
<p><a href="javascript:history.go(-1)">Voltar para página anterior</a></p>
</main>
</body>
</html>