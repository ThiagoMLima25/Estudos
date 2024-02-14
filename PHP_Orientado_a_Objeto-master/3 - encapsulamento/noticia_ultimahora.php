<?php 
	include_once 'noticia_encapsula.class.php';

	class NoticiaUltimaHora extends NoticiaPrincipal
	{
		function exibeNoticia()
		{
			echo "<center>";
			echo "<b>". $this->titulo ."</b><p>";
			echo $this->texto;
			echo "</center><p>";
		}
	}

	$titulo = 'PHP Orientado a Objeto';
	$texto = 'Trabalhando a base de orientação a objeto utilizando PHP.';
	$imagem = 'php.png';

	$not_Principal = new NoticiaPrincipal;
	$not_Principal->setTitulo($titulo);
	$not_Principal->setTexto($texto);
	$not_Principal->setImagem($imagem);
	$not_Principal->exibeNoticia();

	echo "<pre>";
		print_r($not_Principal);
	echo "</pre>";

	$titulo = 'Conceito de encapsulamento';
	$texto = 'O encapsulamento permiti o programador restringir ou liberar o acesso às
propriedades e métodos das classes.';
	$texto .= ' A classe NoticiaUltimaHora herdou as propriedades da classe pai NoticiaPrincipal que herdou as propriedades protected da classe Noticia.';

	$not_ulthora = new NoticiaUltimaHora;
	$not_ulthora->setTitulo($titulo);
	$not_ulthora->setTexto($texto);
	$not_ulthora->exibeNoticia();

	echo "<pre>";
		print_r($not_ulthora);
	echo "</pre>";
?>