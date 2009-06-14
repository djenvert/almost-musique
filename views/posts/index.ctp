<div class="posts index">
<h2><?php __('Posts');?></h2>
<dl>
<?php 	foreach ($posts as $post):?>
<dt><?php echo $html->link($post['Post']['title'], array('action' => 'view', 'id' => $post['Post']['id'], 'slug' => $post['Post']['slug'])); ?> (<?php echo $time->format('d/m/Y', $post['Post']['date']);?>)</dt>
<dd><?php echo $post['Post']['content']; ?></dd>
<?php endforeach; ?>
</dl>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
</div>
<div class="paging">
	<?php echo $paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled'));?>
 | 	<?php echo $paginator->numbers();?>
	<?php echo $paginator->next(__('next', true).' >>', array(), null, array('class' => 'disabled'));?>
</div>
