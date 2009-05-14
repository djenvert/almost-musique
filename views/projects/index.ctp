<div class="projects index">
<h2><?php __('Projects');?></h2>

<dl>
<?php foreach ($projects as $project):?>
<dt><?php echo $html->link($project['Project']['title'], array('action' => 'view', 'id' => $project['Project']['id'], 'slug' => $project['Project']['slug'])); ?></dt>
<dd><?php echo $project['Project']['text']; ?></dd>
<?php endforeach; ?>
</dl>


<div class="paging">
	<?php echo $paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled'));?>
 | 	<?php echo $paginator->numbers();?>
	<?php echo $paginator->next(__('next', true).' >>', array(), null, array('class' => 'disabled'));?>
</div>
	<p>
	<?php
	echo $paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?></p>
</div>
