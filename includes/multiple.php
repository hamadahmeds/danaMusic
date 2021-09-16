
<link rel="stylesheet" href="../css/form.css" />

<!-- START HTML FORM -->

 
<form  class="fieldset" action="<?php echo basename($_SERVER['PHP_SELF']); ?>" method="post">
<div>
    <label>
        Name:<br /><input type="text" name="Name" required="required" placeholder="Full Name (required)" title="Name is required" tabindex="10" size="44" autofocus />
    </label>
</div>
<div>	
    <label>
        Email:<br /><input type="email" name="Email" required="required" placeholder="Email (required)" title="A valid email is required" tabindex="20" size="44" />
    </label>
</div>
<!-- below change the HTML to your form elements - only 'Name' & 'Email' (above) are significant -->
<div>	
    <label>
        How Did You Hear About Us?:<br />
        <select name="How_Did_You_Hear_About_Us?" required="required" title="How You Heard is required" tabindex="30">
            <option value="">Choose How You Heard</option>
            <option value="Phone">Phone</option>
            <option value="Web">Web</option>
            <option value="Magazine">Magazine</option>
            <option value="A Friend">A Friend</option>
            <option value="Other">Other</option>
        </select>
    </label>
</div>

<div>	
    <fieldset>
        <legend>What Lesson Are You Interested In?</legend>
        <input type="checkbox" name="Interested_In[]" value="Learning Piano" tabindex="40" /> Piano Lesson <br />
        <input type="checkbox" name="Interested_In[]" value="Learning Flute" /> Flute  Lesson <br />

    </fieldset>
</div>

    <div>
    <fieldset>
    	<legend>Do you own  Piano or flute ?</legend>
        <input type="checkbox" name="own an acoustic piano[]" value="piano" tabindex="40" /> piano <br />
        
        <input type="checkbox" name="Interested_In[]" value="Learning Piano" tabindex="40" /> Flute <br />

      </fieldset>
    </div>
<div>	
    <label>
        Comments:<br /><textarea name="Comments" cols="36" rows="4" placeholder="Your comments are important to us!" tabindex="60"></textarea>
    </label>
</div>	
<div class="g-recaptcha" data-sitekey="<?=$siteKey;?>"></div>
<div>
    <input type="submit" value="submit" />
    
</div>

</form>

<!-- END HTML FORM -->

