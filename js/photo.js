//var current_thumb = <?php echo $current_photo['photo_order']?>;
var current_thumb = location.pathname.substring(13);
$('.thumb_links').hover(
	function(){
	$(this).css("border-style", "outset")
	;}, function(){
	$(this).css("border-style", "none");
	}	
);