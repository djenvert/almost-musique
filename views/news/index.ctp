<div class="news index">
<h2><?php __('News');?></h2>
<dl>
<?php 	foreach ($news as $news):?>
<dt><?php echo $html->link($news['News']['title'], array('action' => 'view', 'id' => $news['News']['id'], 'slug' => $news['News']['slug'])); ?> (<?php echo $time->format('d/m/Y', $news['News']['date_start']);?>)</dt>
<dd><?php echo $news['News']['text']; ?></dd>
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
