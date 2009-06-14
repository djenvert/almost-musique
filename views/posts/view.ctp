<div class="posts view">
<h2><?php  echo $post['Post']['title'];?></h2>
<p>
<?php echo $post['Post']['content']; ?>
</p>
	<?php echo $this->element('tags');?>
	<?php echo $this->element('related');?>
</div>

