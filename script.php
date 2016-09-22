<?php
//if "email" variable is filled out, send email
  if (isset($_REQUEST['email']))  {
  
  //Email information
  $admin_email = "admin@siliconsquare.tech";
  $email = $_REQUEST['email'];
  $subject = $_REQUEST['subject'];
  $comment = $_REQUEST['comment'];
  
  //send email
  mail($admin_email, "$subject", .$comment, "From:" . $email);
  
  //Email response
  echo "We'll get back to you within 48 hours!";
  }
  
  //if "email" variable is not filled out, display the form
  else  {
	  
  echo "Please try again!";
  }
?>

 <form action="script.php" method="post" enctype="multipart/form-data">
<header>
<h2>We Would Love To Serve You</h2>
</header>
<label>Your Name</label>
<input name="name" placeholder="Name" required /><br>
<label>Email Id</label>
<input name="email" placeholder="yourname@gmail.com" type="text" required><br>
<label>Contact Number</label>
<input name="contact" placeholder="123456789" type="text" required><br/>
<label>Website URL if any*</label>
<input name="website" placeholder="www.yoursite.com" type="text" required><br/>
<label>Message</label>
<textarea cols="15" name="comment" placeholder="Message" required>
</textarea>
<input id="submit" type="submit" value="Send Message">
 </form>
  
<?php
  }
?>