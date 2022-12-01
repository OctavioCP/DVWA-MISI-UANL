<?php

define( 'DVWA_WEB_PAGE_TO_ROOT', '' );
require_once DVWA_WEB_PAGE_TO_ROOT . 'dvwa/includes/dvwaPage.inc.php';

dvwaPageStartup( array( 'authenticated', 'phpids' ) );

$page = dvwaPageNewGrab();
$page[ 'title' ]   = 'Welcome Seguridad BD - MISI - UANL' . $page[ 'title_separator' ].$page[ 'title' ];
$page[ 'page_id' ] = 'home';

$page[ 'body' ] .= "
<div class=\"body_padded\">
	<h1>Bienvenido a la Aplicación Insegura DVWA</h1>
	<p>Damn Vulnerable Web Application (DVWA) es una aplicación en PHP con MySQL desarrollada con vulnerabilidades de forma intencional. </p>
	<p>Seguridad de Bases de Datos </p>
	<p>Maestría en Ingeniería de Seguridad de la Información</p>
	<p>Universidad Autónoma de Nuevo León</p>
	<hr />
	<br />

	<h2>Instrucciones Generales</h2>
	<p>Primero definir el nivel de seguridad en DVWA Security y posteriormente ejecutar inyecciones de SQL en el apartado de SQL Injection</p>
	<hr />
	<br />

	<h3>Disclaimer</h3>
	<p>Aplicación con fines de uso educativos</p>
	<p>Alejandro Muraira Vargas 	| 	2130884</p>
	<p>Alexandro del Angel Escobar  | 	1425552</p>
	<p>Octavio Carranza Pérez 		| 	2130885</p>
	
	<hr />
	<br />

	<hr />
	<br />
</div>";

dvwaHtmlEcho( $page );

?>
