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
	echo $html->css(array('style'));
		
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

</head>
<body id="body">
<div id="doc2" class="yui-t7">
   <div id="hd" role="banner">
	<?php if ($this->here == '/'):?>
		<h1>Almost Musique - Label, promotion et chasse à l'ourse</h1>
	<?php else:?>
		<?php echo $html->link($medium->embed('static/img/almost-logo-03.png'), Router::url('/'), array('title' => 'Almost Musique', 'rel' => 'home', 'escape' => false)); ?>
	<?php endif;?>
	</div>
   <div id="bd" role="main">
	<div class="yui-g">
		<?php if(!empty($posters)):?>
		<?php foreach ($posters as $poster):?>
		<?php 
		if((!empty($poster['Poster'])) && ($file = $medium->file($poster['Poster'][0]['dirname'].DS.$poster['Poster'][0]['basename']))) {
			echo $html->link(			
							$medium->embed('s/' . $poster['Poster'][0]['dirname'] . DS . $poster['Poster'][0]['basename'], array('restrict' => array('image'))),
							array('controller' => 'projects', 'action' => 'view', 'id' => $poster['Project']['id'], 'slug' => $poster['Project']['slug']),
							array('title' => $poster['Project']['title'], 'escape' => false)
							);
		}
		?>
		<?php endforeach;?>	
		<?php endif;?>
	</div>
<div class="yui-gd">
    <div class="yui-u first">
	<div id="cartouche">
	<h2>Almost Musique, label et agence de promotion indépendante</h2>
	<p>Renseignez-vous sur nos <a href="/" title="tous nos projets">projets</a>, nos dernières <a href="/news" title="les dernières news d'Almost Musique">news</a> et n'hésitez pas à <a href="/contacts" title="contactez Almost Musique !">nous contacter</a> ! Nous avons aussi un <a href="/posts" title="notre blog">blog vain et lointain</a>.</p>
	<br />
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

<div id="footer"><ul id="footer-menu"><li><a href="/" accesskey="1">accueil</a> | </li><li><a href="/contacts" title="Contactez Almost Musique">contact</a> | </li><li><a href="">Almost Musique sur MySpace</a> | </li><li><a href="">Almost Musique sur FaceBook</a> | </li><li><a href="">Flux RSS</a> | </li></div> 
</div></div>

</div>
<?php echo $cakeDebug; ?>
<?php echo $javascript->link('ga');?>
</body>
</html>