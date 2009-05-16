<div class="projects view">
<h2><?php echo $html->link($project['Project']['title'], array('action' => 'view', $project['Project']['id'], $project['Project']['slug'])); ?></h2>
			<?php echo $project['Project']['text']; ?>
			&nbsp;
			<?php echo $this->element('tags');?>
			<?php echo $this->element('related');?>
</div>
