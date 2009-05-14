<div class="projects view">
<h2><?php echo $html->link($project['Project']['title'], array('action' => 'view', $project['Project']['id'], $project['Project']['slug'])); ?></h2>
			<?php echo $project['Project']['text']; ?>
			&nbsp;
</div>
<?php if(!empty($tags)): ?>
<p><strong>tags : </strong><?php foreach($tags as $tag): ?>
	<span><?php echo $html->link($tag['Tag']['name'], array(
		'plugin' => 'tagging',
		'controller' => 'tags',
		'action' => 'view',
		$tag['Tag']['slug']
	),
	array('rel' => 'tag')); ?></span>
	<?php endforeach; ?>
	</p>
<?php endif; ?>