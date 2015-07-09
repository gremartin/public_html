var totalTracks = 5;   //value for total tracks
var currentTrack = 1;  //default to track 1
var playerVolume = 1;  //default to highest value
document.getElementById('up').disabled = true; // disable up volume button at outset
document.getElementById('pause').disabled = true; //disable pause button
var trackId = 'Track_' + currentTrack;  //set track for playback on play button
$(function(){
	$("#track_progress").slider({value: 0});   //initialize slider
	});
var isSliding = false;					//variable to determine slider state
var audioTrack = [];
$('#play').click(function(){    						 //event handler for play button
	playTrack();										//play track
});
$('#pause').click(function(){							//event handler for pause button
	trackId = 'Track_' + currentTrack;				//get id for current audio track
	document.getElementById('pause').disabled = true; 	//disable pause button
	document.getElementById('play').disabled = false; 	//re-enable play button
	document.getElementById(trackId).pause();			//pause track
});
$('.song_title').click(function(){						//event handler for clicking on track title divs
	trackId = 'Track_' + currentTrack;				//get id for current audio track
	document.getElementById(trackId).pause();			//pause current track
	document.getElementById(trackId).currentTime = 0;		//reset track counter
	$('#time_' + currentTrack).html('0.00');			//reset track counter label
	$('#' + trackId).parent().css("background-color", "White");   //un-highlight div 
	var song_id = this.id;								//create variable to get if from div clicked
	currentTrack = song_id.charAt(0);					// get number of track from id
	trackId = 'Track_' + currentTrack;
	document.getElementById(trackId).currentTime = 0; 
	playTrack();										//play track
});
$('#forward').click(function(){							//event handler for back button	
	trackId = 'Track_' + currentTrack;
	document.getElementById(trackId).currentTime = 0;	//make sure counter resets
	playNext();
	});
$('#back').click(function(){							//event handler for back button
	trackId = 'Track_' + currentTrack;					
	document.getElementById(trackId).currentTime = 0; //make sure counter resets
	playPrevious();
	});
$('#up').click(function(){
	trackId = 'Track_' + currentTrack;			//get id for current audio track
	playerVolume = (playerVolume + .1);				//increase volume variable
	if(playerVolume == 1)
		document.getElementById('up').disabled = true;  //disable up button if max value reached
	if(playerVolume > 0)
		document.getElementById('down').disabled = false;  //re-enable down button, when no longer at min value
	document.getElementById(trackId).volume = playerVolume;  //set volume variable to current value
		
	});
$('#down').click(function(){
	trackId = 'Track_' + currentTrack;		//get id for current audio track
	playerVolume = playerVolume - .1;		//decrease volume variable
	if(playerVolume < .1)
		document.getElementById('down').disabled = true;  //disable down button if min value reached
	if(playerVolume < 1)
		document.getElementById('up').disabled = false;  //re-enable up button, when no longer at max value	
	document.getElementById(trackId).volume = playerVolume;  //set volume variable to current value
	});

function playTrack(){
	trackId = 'Track_' + currentTrack;
	var audioElem = document.getElementById(trackId); 			//get element to use with function	
	audioElem.addEventListener("ended", playNext, true); 	//event listener for if track has ended
	audioElem.addEventListener("timeupdate", getTime, true);  //event listener for track counter values
	audioElem.volume = playerVolume;		//set volume to current value
	document.getElementById('play').disabled = true; 			//disable play button
	document.getElementById('pause').disabled = false; 			//re-enable pause button
	$('#' + trackId).parent().css("background-color", "LightBlue");   //highlight div for current track
	var trackLength = audioElem.duration;
	$("#track_progress").slider("option", "max", trackLength);			//set value for slider
	$("#track_progress").on("slidestart", function(event, ui){isSliding = true;});
	$("#track_progress").on("slidestop", function(event, ui){audioElem.currentTime= ui.value;isSliding = false; });
	audioElem.oncanplaythrough = audioElem.play();
						//play current track
}
function playNext(){
	trackId = 'Track_' + currentTrack;				//get id for current audio track
	//if(document.getElementById(trackId).ended == false)	 //see if element is still playing
	document.getElementById(trackId).pause();			//if so, pause track
	$('#' + trackId).parent().css("background-color", "White");   //un-highlight div 
	document.getElementById(trackId).currentTime = 0;		//reset track counter
	$('#time_' + currentTrack).html('0.00');			//reset track counter label
	if(currentTrack == totalTracks)					//check if last track reached
		currentTrack = 0;					//set to zero if it has been
	currentTrack++;						//increment track variable
	trackId = 'Track_' + currentTrack;	
	document.getElementById(trackId).currentTime = 0;    //make sure new track starts at 0
	playTrack();										//play track
}
function playPrevious(){
	trackId = 'Track_' + currentTrack;				//get id for current audio element
	if(document.getElementById(trackId).ended == false){ //see if element is still playing
		document.getElementById(trackId).pause();				//if so, pause it
		document.getElementById(trackId).currentTime = 0;		//reset time to zero
		$('#time_' + currentTrack).html('0.00');				//reset label_1 value
		$('#' + trackId).parent().css("background-color", "White");   //un-highlight div 
	}
	if(currentTrack == 1)								//check if first track
		currentTrack = totalTracks;								//set to last
	else currentTrack--;								//otherwise decrement track variable
	trackId = 'Track_' + currentTrack;	
	document.getElementById(trackId).currentTime = 0;    //make sure new track starts at 0
	playTrack();										//play track
}
function getTime(){
	trackId = 'Track_' + currentTrack;				//get id for current audio element
	var timeLabel = 'time_' + currentTrack;			//create variable for accessing label element
	var timeElapsed;
	if(isSliding == false){
		timeElapsed	= document.getElementById(trackId).currentTime.toFixed();  //get current track time in seconds	
		$("#track_progress").slider("option", "value", timeElapsed);   //set slider value
		}
	else timeElapsed = $("#track_progress").slider("value");
	var timeString = '';								//create variable to pass time to label
	if(timeElapsed < 60){								//check if under a minute
		if (timeElapsed < 10)							//check if under ten seconds
			timeString = '0:0' + timeElapsed;			//create label for single digit times
		else timeString = '0:' + timeElapsed;			//create label for double digit times
		}
	else if((timeElapsed % 60) < 10)					//check if minute plus time have single digit second values
			timeString = Math.floor(timeElapsed/60) + ':0' + (timeElapsed % 60);  //create label for those instances
	else timeString = Math.floor(timeElapsed/60) + ':' + (timeElapsed % 60);	  //create rest of labels		
	$('#' + timeLabel).html(timeString);					//send variable to label_2 element

}
function getDurations(){
	if (metaData == totalTracks);
	for(i = 0; i < totalTracks; i++){		//set durations for all tracks
		var trackLength = document.getElementsByTagName("audio")[i].duration.toFixed();	//get track lengths in seconds
		var ttlTimeString;									//create variable for sending value to label
		if(trackLength < 60){									//see if track is under 60 seconds
			if (trackLength < 10)								//see if track is under 10 seconds
				ttlTimeString = '0:0' + trackLength;			//set label value for single digit values
			else ttlTimeString = '0:' + trackLength;			//set label for double digit values
			}
		else if((trackLength % 60) < 10)						//see if minute plus tracks have single digit second values
				ttlTimeString = Math.floor(trackLength/60) + ':0' + (trackLength % 60);  //set label value for those tracks
		else ttlTimeString = Math.floor(trackLength/60) + ':' + (trackLength % 60);		//set other label values
		console.log(ttlTimeString);
		console.log(trackLength);
		console.log("Track_" + i);
		$('#ttlTime_' + (i + 1)).html('/' + ttlTimeString);									//send  value to label	
	}

}