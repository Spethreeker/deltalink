<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact - Delta Link, LLC.</title>
    
   <?php include("head.inc");?>
</head>
<body>
<?php include("navbar.inc")?>
<main class="container">
    <div class="hero">
      <div class="hero-body blue">
        <h3 class="title is-1 has-text-centered white-font" style="font-weight: 400;">Contact Us</h3>
      </div>
    </div>
<div class="container notification">
    <div class="columns white">
    <div class="column is-8 notification"><br>
        <h3 class="title is-3 has-text-centered" style="font-weight: 400;">Questions/Feedback?</h3><p class="subtitle has-text-centered">Tell us all about it</p>
        <form>
            First Name: <input type="text" class="input" name="firstname" id="firstname" required="required"><br><br>
            Last Name: <input type="text" class="input"  name="lastname" id="lastname" required="required"><br><br>
            Email: <input type="text" class="input" name="email" id="email" required="required"><br><br><br>
            Comments: <br><textarea class="textarea" name="comments" id="comments" cols="40" rows="5"></textarea>
            <br><br>
            What is the comment related to?<br>
            <input type="checkbox" class="checkbox" name="internet" id="internet" value="yes"> Internet<br>
            <input type="checkbox" class="checkbox"  name="Billing" id="Billing" value="yes"> Billing<br>
            <input type="checkbox" class="checkbox"  name="Service" id="Service" value="yes"> Service<br>
            <input type="checkbox" class="checkbox"  name="Other" id="Other" value="yes"> Other<br><br>
            Are you satisfied?<br>
            <input type="radio" class="radio" name="yes" id="yes" value="yes">Yes<br>
            <input type="radio" class="radio" name="no" id="no" value="no">No<br><br>
            Select the best day to call:<br>
            <select size="1" name="bestdaytocall" id="bestdaytocall">
                <option value="Monday">Monday</option>
                <option value="Tuesday">Tuesday</option>
                <option value="Wednesday">Wednesday</option>
                <option value="Thursday">Thursday</option>
                <option value="Friday">Friday</option>
                <option value="Saturday">Saturday</option>
                <option value="Sunday">Sunday</option>
            </select><br><br>
            <div class="has-text-centered">
            <input class="white-font" type="submit"> <input class="white-font" type="reset">
            </div>
            
        </form>
        </div>
        <div class="column">
        <div class="contact-column">
          <span class="strip"> <i class="fa fa-address-book-o fa-2x" aria-hidden="true" style="float: left;">&nbsp;</i>
            <h3 class="contact-heading">Phone Number</h3></span>
                <blockquote><u>(662)-545-3467</u>
                </blockquote>
        </div>
        <div class="contact-column">
        <span class="strip"><i class="fa fa-file-text-o fa-2x" aria-hidden="true" style="float: left;">&nbsp;</i>
        <h3 class="contact-heading">Mailing Address</h3> 
        </span>
                <blockquote> 
                631 Gaines Hwy, 
                Boyle, MS 38730
                </blockquote>
        </div>
        <div class="contact-column">
           <span class="strip"><i class="fa fa-fax fa-2x" style="float: left;">&nbsp;</i>
           <h3 class="contact-heading">Fax</h3></span>
            <blockquote><u>1(887)-271-3465</u>
            </blockquote>
        </div>
            <div class="contact-column">
                <span class="strip"><i class="fa fa-envelope-o fa-2x" style="float: left;">&nbsp;</i><h3 class="contact-heading">Email Address</h3></span>
                <blockquote>
                    <address>
                        <a class="email" href="mailto:info@deltalinknet.com">info@deltalinknet.com
                        </a>
                    </address>
                </blockquote>
            </div>            <a class="twitter-timeline"  href="https://twitter.com/search?q=%40DeltaLink_net" data-widget-id="883583177633280000">Tweets about @DeltaLink_net</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
        </div>
    </div>
    </div>
</main>   
<?php include("footer.inc");?>
</body>
<script>
    that = document.getElementById('contact-link');
    that.classList.add('is-active');
</script>
</html>