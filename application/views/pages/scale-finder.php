<head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"> </script> 
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
</head>
<body>
	<div id = "content_sf">			
				<div id="sf_page_title"><h2>Scale/Mode Finder</h2></div>
				<div id="user_input">
					<form id="root_selector">
						<p>Select your root note</p>
						<select id="root_note">
							<option value ="C">C</option>
							<option value ="D">D</option>
							<option value ="E">E</option>
							<option value ="F">F</option>
							<option value ="G">G</option>
							<option value ="A">A</option>
							<option value ="B">B</option>
						</select>
						<p>Accidental</p>
						<select id="accidental">
							<option value = "natural">natural</option>
							<option value = "#">&#9839;</option>
							<option value = "b">&#9837;</option>
						</select>
					</form>
					<form id = "scale_selector">
						<p>Scale/Mode</p>
						<select name="scale">
							<option>major</option>
							<option>minor</option>
							<option>dorian</option>
							<option>phrygian</option>
							<option>lydian</option>
							<option>mixolydian</option>
							<option>locrian</option>
						</select>				
					</form>
					<div id="sf_button">Get Scale</div> <!-- Div for action button-->
				</div> <!-- end of user_input div-->
				<div id="output">
					<div id="sf_display">
						<div id="clef"><img src='../../../images/treble_clef.png' alt="treble clef" /></div>
						<div id="g_space" class="staff"></div>
						<div id="f_line" class="staff" ></div>
						<div id="e_space" class="staff"></div>
						<div id="d_line" class="staff" ></div>
						<div id="c_space" class="staff"></div>
						<div id="b_line" class="staff" ></div>
						<div id="a_space" class="staff"></div>
						<div id="g_line" class="staff"></div>
						<div id="f_space" class="staff" ></div>
						<div id="e_line" class="staff" ></div>
						<div id="d_space" class="staff"></div>
						<div id="c_line" class="staff"></div>
						<div id="b_space" class="staff"></div>
						<div id="a_line" class="staff" ></div>			
						
					</div> <!--end display div-->
					<div id="scale_output"></div>
					<div id="scale_list"></div>
				</div> <!--end outputdiv-->
			
	</div>
<script src="../../../js/scale-finder.js"></script>
</body>
