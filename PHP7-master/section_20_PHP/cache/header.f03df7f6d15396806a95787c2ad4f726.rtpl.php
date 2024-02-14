<?php if(!class_exists('Rain\Tpl')){exit;}?><header>
	<h1>Header</h1>
	<h2>Hello <?php echo htmlspecialchars( $name, ENT_COMPAT, 'UTF-8', FALSE ); ?></h2>
	<p>Versão do PHP: <?php echo htmlspecialchars( $version, ENT_COMPAT, 'UTF-8', FALSE ); ?></p>
</header>