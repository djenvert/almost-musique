<?php if(!empty($relatedRessources)): ?>
<h3>Sur le même sujet :</h3>
<ul>
	<?php foreach($relatedRessources as $row):
		$model_name = key($row);
 
		switch($model_name)
		{
			case 'Project':
				$link = $html->link($row['Project']['title'], array(
					'controller' => 'projects',
					'action' => 'view',
					'id' => $row['Project']['id'],
					'slug' => $row['Project']['slug']
				));
				break;
 			case 'News':
					$link = $html->link($row['News']['title'], array(
						'controller' => 'news',
						'action' => 'view',
						'id' => $row['News']['id'],
						'slug' => $row['News']['slug']
					));
					break;
			case 'Post':
				$link = $html->link($row['Post']['title'], array(
					'controller' => 'posts',
					'action' => 'view',
					'id' => $row['Post']['id'],
					'slug' => $row['Post']['slug']
				));
				break;
		} ?>
	<li><?php echo $link; ?></li>
	<?php endforeach; ?>
</ul>
<?php endif; ?>