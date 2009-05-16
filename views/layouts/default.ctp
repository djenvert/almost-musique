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
	
	.index dd {
		padding-bottom:1em;
	}
	.index dl {
		padding-top:1em;
	}
	
	a {
		background-color: #E6E4F6;
		color:#746FA6;
	}
	
	a:hover {
		color:#272537;
		text-decoration:none;
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
	
	strong {
		background-color:#746FA6;
		color:#0F0F16;
		font-weight: bold;
		padding:1px 1px;
	}
	em {
		font-style: italic;
	}
	#footer-menu li {
		display: inline;
		margin: 0 5px;
		
	}
	
	.news-widget {
		padding:4px;
		margin:	4px 2px 2px 4px;
		background:#B4AFE6;
		height:90px;
	}
	
	.news-widget h3 {
		padding-bottom:1em;
	}
	.news-widget h3 span.date {
		color:#777;
		font-weight:normal;
		float:right;
		font-size:0.8em;
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
	ul.tag_cloud {
		display:inline;
		background-color:#746FA6;
		padding-top:3px;
		margin:4px;
	}
	.tag_cloud li {
		display:inline;
	}
	
	.tag_cloud li a {
		display:inline;
		background-color:#746FA6;
		color:#fff;
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
	<p><strong>Almost Musique</strong> est une organisation pas comme les autres.

	Depuis avril 2009, le fameux Benjamin Kaskera dirige le département de promotion d'artistes et d'événements.

	<ul>
		<li><strong>Almost Musique</strong> gère la promotion de sorties d'albums, concerts et festivals.</li>
		<li><strong>Almost Musique</strong> crée le lien entre le projet artistique et les médias (radio, presse, tv, web).</li>	
		<li><strong>Almost Musique</strong> sort aussi des disques à l'occasion via sa filiale de droit luxembourgeois <strong>Almost Discos</strong>.</li>
	</ul>
	<a href="/contacts" title="contactez Almost Musique !">Contact</a>.
	<br />
	<ul>
		<li><a href="/" title="tous nos projets">projets</a></li>
		<li><a href="/news" title="les dernières news d'Almost Musique">news</a></li>
		<li><a href="/blog" title="le blog vain et lointain d'Almost Musique">guestlist : blog vain et lointain</a></li>
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
	<?php if (isset($latest_news)):?>
	<?php $i=0;?>
		<?php foreach ($latest_news as $news):?>
	<?php $i++;?>
 <div class="yui-u<?php echo ($i%2)?'':' first';?>"> 
	<div class="news-widget"><h3><?php echo $html->link($news['News']['title'], 
array ('action' => 'view', 'controller' => 'news', 'id' => $news['News']['id'], 'slug' => $news['News']['slug']), array('title' => $news['News']['title']));?><span class="date">(<?php echo $time->format('d/m/y', $news['News']['date_start'])?>)</span></h3><p><?php echo $text->truncate($news['News']['text'], 280);?> <?php echo $html->link('lien', 
	array ('action' => 'view', 'controller' => 'news', 'id' => $news['News']['id'], 'slug' => $news['News']['slug']), array('title' => $news['News']['title']));?></p> 
	</div> 
	</div>
		<?php endforeach;?>
	<?php endif;?>
</div> 

<div><ul id="footer-menu"><li><a href="/" accesskey="1">accueil</a> | </li><li><a href="/contacts" title="Contactez Almost Musique">contact</a> | </li><li><a href="">Almost Musique sur MySpace</a> | </li><li><a href="">Almost Musique sur FaceBook</a> | </li><li><a href="">Flux RSS</a> | </li></div> 
</div></div>

</div>
<?php echo $cakeDebug; ?>
</body>
</html>