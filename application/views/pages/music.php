<head>
   	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="../../../js/jquery-ui.js"></script>	
	<link rel="stylesheet" href="../../../css/jquery-ui.css" type="text/css" media="screen, projection"/>
</head>
	
	<div id = "content_music"><!-- InstanceBeginEditable name="music_content" -->
		<div id="music_header"> <h2>Original Compositions</h2><div>
		<div class = "player_div" "span-8">
			<div id = "music_player">
				<div class = "song_title"  id = "1st_track">
					<div class = "label_1">1. Rotary Blues</div>	
					<div class = "label_2" id = "time_1">0.00</div>
					<div class = "label_3" id = "ttlTime_1">/6:43</div>
					<audio class = "tracks" id = "Track_1">
						<source src="../../../music/Rotary Blues.ogg"/>
						<source src="../../../music/Rotary Blues.mp3"/>
					</audio>
				</div>
					
				<div class = "song_title" id = "2nd_track">
					<div class = "label_1">2. Assertiveness</div>
					<div class = "label_2" id = "time_2">0.00</div>
					<div class = "label_3" id = "ttlTime_2">/3:22</div>
					<audio class = "tracks" id = "Track_2" >
						<source src="../../../music/Assertiveness.ogg" />
						<source src="../../../music/Assertiveness.mp3" />
					</audio>
				</div>

				<div class = "song_title" id = "3rd_track">
					<div class = "label_1">3. A Walk Around Town</div>
					<div class = "label_2" id = "time_3">0.00</div>
					<div class = "label_3" id = "ttlTime_3">/3:47</div>
					<audio class = "tracks" id = "Track_3">
						<source src="../../../music/A Walk Around Town.ogg" />
						<source src="../../../music/A Walk Around Town.mp3" />
					</audio>
				</div> 				

				 <div class = "song_title" id = "4th_track">
					<div class = "label_1">4. Basis of All Things</div>
					<div class = "label_2" id = "time_4">0.00</div>
					<div class = "label_3" id = "ttlTime_4">/2:10</div>
				 <audio class = "tracks" id = "Track_4">
					<source src="../../../music/Basis of all things.ogg" />
					<source src="../../../music/Basis of all things.mp3" />			
				</audio>
				 </div>
			
				<div class = "song_title" id = "5th_track">
					<div class = "label_1">5. Descending</div>
					<div class = "label_2" id = "time_5">0.00</div>
					<div class = "label_3" id = "ttlTime_5">/4:19</div>
				 <audio class = "tracks" id = "Track_5">
					<source src="../../../music/Descending.ogg" />
					<source src="../../../music/Descending.mp3" />			
				</audio>
				 </div>
				
			<div id = "track_progress"></div>
			<button class = "player_btn" id = "play"><img src="../../../images/play_btn.png" alt="play"/></button>
			<button class = "player_btn" id = "pause"><img src="../../../images/pause_btn.png" alt="pause"/></button>
			<button class = "player_btn" id = "back"><img src="../../../images/back_btn.png" alt="back"/></button>
			<button class = "player_btn" id = "forward"><img src="../../../images/fwd_btn.png" alt="forward"/></button>			
			<button class = "player_btn" id = "down"><img src="../../../images/down_btn.png" alt="down"/></button>
			<button class = "player_btn" id = "up"><img src="../../../images/up_btn.png" alt="up"/></button></button>
			
			</div><!--end of music_player -->
	
		</div>
		<div id="music_footer"> <h2>All music composed and performed by Greg Martin</h2><div>
    </div> <!-- end of #content -->
    
    
		
</div> <!-- end.container -->

<script src="../../../js/music_player.js"></script>
</body>
<!-- InstanceEnd --></html>