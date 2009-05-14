<?php
/* SVN FILE: $Id: default.ctp 7805 2008-10-30 17:30:26Z AD7six $ */
/**
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) :  Rapid Development Framework (http://www.cakephp.org)
 * Copyright 2005-2008, Cake Software Foundation, Inc. (http://www.cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @filesource
 * @copyright     Copyright 2005-2008, Cake Software Foundation, Inc. (http://www.cakefoundation.org)
 * @link          http://www.cakefoundation.org/projects/info/cakephp CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.cake.console.libs.templates.skel.views.layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @version       $Revision: 7805 $
 * @modifiedby    $LastChangedBy: AD7six $
 * @lastmodified  $Date: 2008-10-30 18:30:26 +0100 (Thu, 30 Oct 2008) $
 * @license       http://www.opensource.org/licenses/mit-license.php The MIT License
 */
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
 "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<?php echo $html->charset(); ?>
   <title>Almost Musique <?php echo $title_for_layout; ?></title>
	<link rel="home" href="<?php echo Router::url('/', true); ?>" title="Home page" />
	<?php echo $javascript->link('jquery-1.3.2.min')?>
	<link rel="stylesheet" href="http://yui.yahooapis.com/2.7.0/build/reset-fonts-grids/reset-fonts-grids.css" type="text/css">
<?php
 	echo $html->meta('icon');

	echo $scripts_for_layout;
	// 9A94DD
	// B4AFE6
	// CDCAEF
	// E6E4F6
	// F5F5FC
	// 837EBC
	// 746FA6
	// 4D4A6F
	// 272537
	// 0F0F16
?>
<style type="text/css" media="screen">
	#doc2 {
		background-color: #CDCAEF;
	}
	#cartouche {
		background-color: #9A94DD;
		padding:2em;
	}
	body {
		font-family: 'Lucida Grande', Verdana, Arial, Sans-Serif;
		color:#4D4A6F;
		background-color: #83416D;
	}
	#hd {
		padding:1em;
	}
	h1 {
		font-size:3em;
		font-weight: bold;
	}
	h2 {
		font-size:1.1em;
		font-weight: bold;
	}
	h3 {
		font-size:1em;
		font-weight: bold;
	}
	p {
	padding-bottom:10px;
	}
	ul#footer-menu {
		margin:0;
		padding-bottom:1em;
		list-style-type: none;
	}
	#footer-menu li {
		display: inline;
		margin: 0 5px;
		
	}
	
	/* Forms */
	form {
		clear: both;
		margin-right: 20px;
		padding: 0;
		width: 80%;
	}
	fieldset {
		border: 1px solid #ccc;
		margin-top: 30px;
		padding: 16px 20px;
	}
	fieldset legend {
		background:#fff;
		color: #4D4A6F;
		font-size: 160%;
		font-weight: bold;
		padding:10px 5px;
	}
	fieldset fieldset {
		margin-top: 0px;
		margin-bottom: 20px;
		padding: 16px 10px;
	}
	fieldset fieldset legend {
		font-size: 120%;
		font-weight: normal;
	}
	fieldset fieldset div {
		clear: left;
		margin: 0 20px;
	}
	form div {
		clear: both;
		margin-bottom: 1em;
		padding: .5em;
		vertical-align: text-top;
	}
	form div.input {
		color: #444;
	}
	form div.required {
		color: #333;
		font-weight: bold;
	}
	form div.submit {
		border: 0;
		clear: both;
		margin-top: 10px;
		margin-left: 140px;
	}
	label {
		display: block;
		font-size: 110%;
		padding-right: 20px;
	}
	input, textarea {
		clear: both;
		font-size: 140%;
		font-family: "frutiger linotype", "lucida grande", "verdana", sans-serif;
		padding: 2px;
		width: 100%;
	}
	select {
		clear: both;
		font-size: 120%;
		vertical-align: text-bottom;
	}
	select[multiple=multiple] {
		width: 100%;
	}
	option {
		font-size: 120%;
		padding: 0 3px;
	}
	input[type=checkbox] {
		clear: left;
		float: left;
		margin: 0px 6px 7px 2px;
		width: auto;
	}
	input[type=radio] {
		float:left;
		width:auto;
		margin: 0 3px 7px 0;
	}
	div.radio label {
		margin: 0 0 6px 20px;
	}
	input[type=submit] {
		display: inline;
		font-size: 110%;
		padding: 2px 5px;
		width: auto;
		vertical-align: bottom;
	}

	/* Notices and Errors */
	div.message {
		clear: both;
		color: #900;
		font-size: 140%;
		font-weight: bold;
		margin: 1em 0;
	}
	div.error-message {
		clear: both;
		color: #900;
		font-weight: bold;
	}
	p.error {
		background-color: #e32;
		color: #fff;
		font-family: Courier, monospace;
		font-size: 120%;
		line-height: 140%;
		padding: 0.8em;
		margin: 1em 0;
	}
	p.error em {
		color: #000;
		font-weight: normal;
		line-height: 140%;
	}
	.notice {
		background: #ffcc00;
		color: #000;
		display: block;
		font-family: Courier, monospace;
		font-size: 120%;
		line-height: 140%;
		padding: 0.8em;
		margin: 1em 0;
	}
	.success {
		background: green;
		color: #fff;
	}
	
	/* Paging */
	div.paging {
		color: #746FA6;
		margin-bottom: 2em;
	}
	div.paging div.disabled {
		color: #F5F5FC;
		display: inline;
	}
	div.paging span {
	}
	div.paging span.current {
		color: #000;
	}
	div.paging span a {
	}
	/* tags */
	#tag_cloud {
		display:inline;
	}
	#tag_cloud li {
		display:inline;
	}
	.tag-size-7 {
		font-size: 150%;
	}
	.tag-size-6 {
		font-size: 140%;
	}
	.tag-size-5 {
		font-size: 130%;
	}
	.tag-size-4 {
		font-size: 120%;
	}
	.tag-size-3 {
		font-size: 110%;
	}
	.tag-size-2 {
		font-size: 100%;
	}
	.tag-size-1 {
		font-size: 90%;
	}
</style>
</head>
<body id="body">
<div id="doc2" class="yui-t7">
   <div id="hd" role="banner"><h1>Almost Musique</h1>Label, promotion et chasse à l'ourse</div>
   <div id="bd" role="main">
	<div class="yui-g">
		<?php echo $html->image('banner.jpg', array('alt' => 'Almost Musique')); ?>
	</div>
<div class="yui-gd">
    <div class="yui-u first">
	<div id="cartouche">
	<h2>Almost Musique, label et agence de promotion indépendante</h2>
	<p>Almost Musique est une organisation pas comme les autres.

	Depuis avril 2009, le fameux Benjamin Kaskera dirige le département de promotion d'artistes et d'événements.

	<ul>
		<li><strong>Almost Musique</strong> gère la promotion de sorties d'albums, concerts et festivals.</li>
		<li><strong>Almost Musique</strong> crée le lien entre le projet artistique et les médias (radio, presse, tv, web).</li>	
		<li><strong>Almost Musique</strong> sort aussi des disques à l'occasion via sa filiale de droit luxembourgeois <strong>Almost Discos</strong>.</li>
	</ul>
	<a href="/contacts" title="contactez Almost Musique !">Contact</a>.
	<br />
	<ul>
		<li><a href="#">projets</a></li>
		<li><a href="#">news</a></li>
		<li><a href="#">guestlist : blog vain et lointain</a></li>
	</ul>
	</p>
	<?php echo $tagging->generateCloud($mainTagCloud, array('class' => 'tag_cloud'));?>
		</div>
	    </div>
    <div class="yui-u">
		<?php $session->flash(); ?>
		<?php $session->flash('auth'); ?>
		<?php echo $content_for_layout; ?>
	    </div>
</div>

	</div>
   <div id="ft" role="contentinfo">	<div class="yui-g first"> 
 <div class="yui-u first"> 
<h3>news</h3><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna. <a href="#">lien </a></p> 
</div> 
<div class="yui-u"> 
<h3>news</h3><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna. <a href="#">lien </a></p> 
</div> 
</div> 
<div class="yui-g"> 
 <div class="yui-u first"> 
<h3>news</h3><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna. <a href="#">lien </a></p> 
</div> 
<div class="yui-u"> 
<h3>news</h3><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna. <a href="#">lien </a></p> 
</div>
<div><ul id="footer-menu"><li><a href="/" accesskey="1">accueil</a> | </li><li><a href="/contacts" title="Contactez Almost Musique">contact</a> | </li><li><a href="">Almost Musique sur MySpace</a> | </li><li><a href="">Almost Musique sur FaceBook</a> | </li><li><a href="">Flux RSS</a> | </li></div> 
</div></div>

</div>
<?php echo $cakeDebug; ?>
</body>
</html>