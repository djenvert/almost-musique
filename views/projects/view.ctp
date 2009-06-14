<div class="projects view">
<?php
$this->title_for_layout = $project['Project']['title'];
// pr($project);
?>
<h2><?php echo $html->link($project['Project']['title'], array('action' => 'view', $project['Project']['id'], $project['Project']['slug'])); ?></h2>
			&nbsp;
			<?php if(isset($project['Poster'])): ?>
			<?php $poster = array_shift($project['Poster']); ?>
			<div>
			<?php echo $medium->embed('xl/' . $poster['dirname'] . DS . $poster['basename'], array('restrict' => array('image')));?>
			</div>
			<?php endif; ?>
			<?php echo $project['Project']['text']; ?>
			
			<?php
			// affichage des photos
			if (isset($project['Photo'])) {
			?>
			<ul id="attachments">
			<?php	foreach ($project['Photo'] as $attachment): ?>
					
					<li>
					<?php
					$file = $medium->file($attachment['dirname'].DS.$attachment['basename']);
					echo $medium->embed('s/' . $attachment['dirname'] . DS . $attachment['basename'], array('restrict' => array('image')));
			 		?>
				</li>
			<?php endforeach ?>

			</ul>
			<?php
			}
			
			// affichage des pièces jointes
			if ((isset($project['Attachment'])) && (count($project['Attachment'])>0)) {
			?>
			<h3>à télécharger...</h3>
			<ul id="attachments">
			<?php	foreach ($project['Attachment'] as $attachment) {
					?>
					<li>
					<?php
					
					$file = $medium->file($attachment['dirname'].DS.$attachment['basename']);
					echo $medium->embed('xxs/' . $attachment['dirname'] . DS . $attachment['basename'], array('restrict' => array('image')));
			 		$Medium = Medium::factory($file);
					$size = filesize($file);

					if (isset($number)) {
						$size = $number->toReadableSize($size);
					}

					printf(	'<span><a href="%s" title="%s">%s</a>&nbsp;(%s/%s) <em>%s</em></span>',
							$medium->url($file), $attachment['alternative'], $attachment['basename'],
							strtolower($Medium->name), $size, $attachment['alternative']);
				?>
				</li>
				<?php
				} 
			?>
			</ul>
			<?php
			}
			
			?>
			
			<?php echo $this->element('tags');?>
			<?php echo $this->element('related');?>
</div>
