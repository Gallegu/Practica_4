<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Pagina PHP </title>

<link href="CSS/style.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php 

	require_once("Pagina.php");
	
	$pag = new Pagina("Bienvenido a mi Web","Alex Gallego Gracia");

	$pag->iniciar_contenido(
	"The PHP development team announces the immediate availability of PHP 5.4.35. 4 security-related bugs were fixed in this release, including the fix for CVE-2014-3710. All PHP 5.4 users are encouraged to upgrade to this version.

For source downloads of PHP 5.4.35 please visit our downloads page, Windows binaries can be found on windows.php.net/download/. The list of changes is recorded in the ChangeLog.
<br/>
<br/>
Stands for 'Cascading Style Sheet' Cascading style sheets are used to format the layout of Web pages. They can be used to define text styles, table sizes, and other aspects of Web pages that previously could only be defined in a page's HTML.

CSS helps Web developers create a uniform look across several pages of a Web site. Instead of defining the style of each table and each block of text within a page's HTML, commonly used styles need to be defined only once in a CSS document. Once the style is defined in cascading style sheet, it can be used by any page that references the CSS file. Plus, CSS makes it easy to change styles across several pages at once. For example, a Web developer may want to increase the default text size from 10pt to 12pt for fifty pages of a Web site. If the pages all reference the same style sheet, the text size only needs to be changed on the style sheet and all the pages will show the larger text. "
);

	$pag->vista();
?>
	
</body>
</html>