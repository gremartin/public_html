    <div id = "content_contact" >	
      <p>Your message has been submitted</p>
      <div id = "contact_form">
          
          <form action="contact_form.php" method="post">	
            
            <fieldset>            		
                    
                    <legend>Send a Message</legend>
                    <label class="label_form">Your Name: <br/><input type="text" name="name" class="text_box" maxlength="25" required="required"/></label>                
                    <label class="label_form">Email Address: <br/><input type="text" name="email" class="text_box" maxlength="25" required="required"/></label>
                    <label for "message" id="message_label">
                    Message: <br/>
                    </label>
                    <br />
                     <textarea maxlength="400" id="message" name="message" class="message_box" required="required"></textarea>
                    <input id="button" type="submit" value= "Send Message"/>
            </fieldset>
          
          </form>
      </div>  <!-- end of #contact_form -->
     </div> <!-- end of #content -->