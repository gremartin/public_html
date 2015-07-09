    <div id = "content_contact" >	
      <div id = "contact_header">
		<p>Please fill out the form below to send Greg a message, or email him directly at greg@gregmartinboston.com</p>
		</div>
      <div id = "contact_form">
          <div id = "error_messages">
			<p><?php echo validation_errors(); ?></p>
			</div>
		  <?php echo form_open('contact');?>
            <fieldset>            		
                    
                    <legend>Send a Message</legend>
                    <label class="label_form">Your Name: <br/><input type="text" name="name" class="text_box" maxlength="25"/></label>                
                    <label class="label_form">Email Address: <br/><input type="text" name="email" class="text_box" maxlength="25"/></label>
                    <label for "message" id="message_label">
                    Message: <br/>
                    </label>
                    <br />
                     <textarea maxlength="400" id="message" name="message" class="message_box"></textarea>
                    <input id="button" type="submit" value= "Send Message"/>
            </fieldset>
          
          </form>
      </div>  <!-- end of #contact_form -->
     </div> <!-- end of #content -->