<div class="news view">
<h2><?php  echo $news['News']['title'];?></h2>
	<p><?php echo $news['News']['text'];?>
	<?php echo $this->element('tags');?>
	<?php echo $this->element('related');?>
</div>

