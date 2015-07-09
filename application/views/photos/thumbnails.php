 <head>
 <script src="../../../js/photo.js"></script>
 </head>
 <div id = "photo_thumbs">
	<?php foreach ($photos as $thumb) : ?>
		<?php if ($current_photo['photo_order'] == $thumb['photo_order']):?>
		<div class="thumb_links" id='thumb_current'><a href="/photos/view/<?php echo $thumb['photo_order']?>"><img src="../../../images/<?php echo rtrim($thumb['filename'], '.jpg')?>_thumb.jpg">
		</div>
		<?php else:?>
			<div class="thumbs_inactive" id='thumb_<?php echo $thumb['photo_order']?>'><a href="/photos/view/<?php echo $thumb['photo_order']?>"><img src="../../../images/<?php echo rtrim($thumb['filename'], '.jpg')?>_thumb.jpg">
			</div>
		<?php endif;?>
	<?php endforeach ?>
</div>
	