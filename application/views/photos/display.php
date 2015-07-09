<head>
   	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="../../../js/photo.js"></script>	
</head>
<body id="photo">

    <div id = "content_photos">
				
		 <nav id = "nav_photo_start">
				<?php if ($current_photo['photo_order'] != 1):?>
					<a href="/photos/view/<?php echo $current_photo['photo_order']-1?>"><img src="../../../images/back_btn_photo.png" alt="Back"/></a>
					<?php else:?>
					<img src="../../../images/back_btn_photo_first.png" alt="Back"/> 
				<?php endif;?> 
			</nav>
     
		<div id ="photo_display">
      		
			<div id="photo_block"></div>
			<div id ="photo_image">
				
				<img src="../../../images/<?php echo $current_photo['filename']?>">

			</div> <!-- end of #photo_image -->
			
      	</div>	<!-- end of #photo_display -->
	               
		<nav id="nav_photo_end">
		<?php if ($current_photo['photo_order'] == count($photos)):?>
					<img src="../../../images/fwd_btn_photo_last.png" alt="Next"/>
				<?php else:?>
					<a href="/photos/view/<?php echo $current_photo['photo_order'] + 1?>"><img src="../../../images/fwd_btn_photo.png" alt="Next"/></a>
					<!-- <button class = "photo_btn" id = "forward"><img src="../../../images/fwd_btn_photo.png" alt="Next"/></button>	-->
		<?php endif;?> </nav>

		 <div id = "photo_caption">

				<?php $date = date_create($current_photo['date_taken'])?>
			<p>	<?php echo $current_photo['caption']?>, <?php echo date_format($date, 'm/d/Y')?></p>

		</div>
 
	</div>
</body>