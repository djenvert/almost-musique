<?php if(!empty($tags)): ?>
<p>tags : <?php foreach($tags as $tag): ?>
	<span><?php echo $html->link($tag['Tag']['name'], array(
		'plugin' => 'tagging',
		'controller' => 'tags',
		'action' => 'view',
		$tag['Tag']['slug'],
	),
	array('rel' => 'tag')); ?></span>
	<?php endforeach; ?>
	</p>
<?php endif; ?>