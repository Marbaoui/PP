<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="dev_css/styles.css">
  <style>
  .lis
  {
  list-style-type: none;
  }

  </style>

</head>
<body>

  <h2>Hey!</h2>

  <!---->
  <ul class="menu">
    <li class="lis">
      <h2> Connect now </h2>
      <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>
    </li>
    <!---->
    <div id="id01" class="modal">

      <form class="modal-content animate" action="home.php">
        <div class="imgcontainer">
          <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
          <img src="image/Kaneki.jpg" alt="kaneki" class="avatar">
        </div>

        <div class="container">
          <label for="uname"><b>Username</b></label>
          <input type="text" placeholder="Enter Username" name="uname" required>

          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="psw" required>

          <button type="submit">Login</button>
          <form class="modal-content animate" action="/sign_up.html">
            <button type="submit" name="registration">Sign Up</button>
          </form>
          <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
          </label>
        </div>

        <div class="container" style="background-color:#f1f1f1">
          <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
          <span class="psw">Forgot <a href="#">password?</a></span>
        </div>
      </form>
    </div>

    <script>
    // Get the modal
    var modal = document.getElementById('id01');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
  </script>

  <!---->
  <li class="lis">
    <h2>Contact us </h2>
    <button  class="contact_button"onclick="document.getElementById('id02').style.display='block'" style="width:auto;"> Contact Us</button>
  </li>
</ul>
<div id="id02" class="modal">

  <form class="modal-content animate" action="dev_php/action_page_contact.php" method="POST">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="image/icon-contact-mail.png" alt="imgcontact" class="avatar">
    </div>

    <div class="container">
      <label for="email_exp"><b>E-mail: </b></label>
      <input type="text" placeholder="write your email" name="email_exp" required>

      <label for="subject"><b>Subject: </b></label>
      <input type="text" placeholder="write your subject " name="subject_exp" required>
      <label for="message"><b>Message: </b></label> <br>
      <textarea name="message_exp" >Write your message here. </textarea>


      <button type="submit">Send</button>
    </div>


  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>




</body>
</html>
