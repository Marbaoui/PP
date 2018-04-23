<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="dev_css/home.css">
</head>
<body>
  <script>
  function Welcome_message() {
    alert("Hello! Hope you enjoy your day!");
  }
  </script>
  <div id="bar_menu" style="  width:100%;overflow:hidden;height:44px">
    <a href='javascript:Welcome_message()'> </a>
    <ul class="ul_bar " >
      <li class="home_button"><a href="home.php"  title="Home" class="dev_bar_item_dec"><img src="image/home.png" alt="Home"   height="35" width="35"></a></li>
      <li class="mails_button"><a href="http://webtp.fil.univ-lille1.fr/~arbaoui/main.html"  title="Mails" class="dev_bar_item_dec" target="ifram_2"><img src="image/mail.png" alt="Mails"   height="35" width="35"></a></li>
      <li><li><a href="#Friends" class="dev_bar_item">Friends</a></li>
      <li><a href="#Events" class="dev_bar_item">Events</a></li>
      <li class="dec_button"><a href="http://webtp.fil.univ-lille1.fr/~arbaoui/main.html"  title="Deconnect" class="dev_bar_item_dec"><img src="image/logout.png" alt="logout"   height="42" width="42" ></a></li>
    </ul>

  </div class="dynamique">


<iframe src="dev_php/action_page_login.php" frameborder="0"  height="100%" width="100%" align="middle" ></iframe>

  </div>

<div>
<iframe src="dev_php/action_page_home.php" frameborder="0"  height="300%" width="100%" align="middle" name="ifram_2" allowfullscreen></iframe>
</div>
