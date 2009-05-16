<?php
$this->pageTitle = 'Vue du Tag "' . $tag['Tag']['name'].'"';
 
$paginator->options(array('url' => $this->passedArgs));
?>
 
<h1><?php echo $tag['Tag']['name']; ?></h1>
 
<div id="paginator-counter">
	<?php echo $paginator->counter(array('format' => "Page %page% sur %pages%, %current% ressources sur %count%")); ?> 
</div>
 
<?php foreach($data as $row):
	$model_name  = key($row);
 
	switch($model_name)
	{
		case 'News':
			$link = $html->link($row['News']['title'], array(
				'plugin' => null,
				'controller' => 'news',
				'action' => 'view',
				'id' => $row['News']['id'],
				'slug' => $row['News']['slug']
			));
			$description = $row['News']['text'];
			break;
 		case 'Project':
			$link = $html->link($row['Project']['title'], array(
				'plugin' => null,
				'controller' => 'projects',
				'action' => 'view',
				'id' => $row['Project']['id'],
				'slug' => $row['Project']['slug']
				));
				$description = $row['Project']['text'];
			break;
		case 'Post':
			$link = $html->link($row['Post']['title'], array(
				'plugin' => null,
				'controller' => 'posts',
				'action' => 'view',
				'id' => $row['Post']['id'],
				'slug' => $row['Post']['slug']
				));
				$description = $row['Post']['content'];
			break;
	} ?>
	<div class="ressource">
		<h2><?php echo $link; ?></h2>
		<p align="justify"><?php echo $description; ?></p>		
	</div>
<?php endforeach; ?> 
 
<div class="paging">
	<?php echo $paginator->prev('<< '.__('Précédent', true));?>
 |  <?php echo $paginator->numbers();?>
	<?php echo $paginator->next(__('Suivant', true).' >>');?>
</div>