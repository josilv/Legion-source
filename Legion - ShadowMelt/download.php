<html>
<body>
<header>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>LegionWoW</title>
    <meta charset="utf-8">
    <link href='https://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>
	<link rel="icon" type="image/x-icon" href="images/icon.html" />
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="main2.css">
</head>
<body>
<div id="header-vid">
<video autoplay="true" loop="loop">
		    <source type="video/mp4" src="video/bg.mp4">
  		</video>
</div>
<div id="nav">
<div class="container">
<div id="logo">
<a href="index.php"><img src=""></a> <!-- Possible server logo --> 
</div>
<div class="right">
<ul>
	<li><a href="index.php">Home</a></li>
	<li><a href="/forum">Forum</a></li>
	<li><a href="download.php">Downloads</a></li>
	<li><a href="/pages/account/create/">Register</a></li>
	<li><a href="http://putadonationlinkhere.com">Donate</a></li> 
</ul>
		</div>
	</div>
</div>

</div>
</div>
</div>
<div class="video-overlay">
<div class="container">
<div class="right">
<div class="info-box">
<h1>Welcome to <span>LegionWoW</span>!</h1>
<p><br>The Tomb of Sargeras has been reopened, and the demons of the Burning Legion pour into our world. Their full, terrifying might is fixed on summoning the Dark Titan to Azeroth—and they’ve already located the key to his return.</p>
<br> 
<p>With the Alliance and Horde devastated, only you can take up Warcraft’s most legendary artifacts, scour the ancient Broken Isles for relics of the Titans, and challenge the Legion before Azeroth’s last hope dies.</p>
<br>
<p>Steel yourself, champion. Extinction is imminent.</p>	
</div>
	</div>
		</div>
			</div> 
				</header>
		
<div class="content">
<div class="container row">
<div id="left-content">
<img id="newsicon" src="images/down.png"><h2>LegionWoW<span> Downloads</span></h2>

<div class="post_wrap">
					<div class="post">
					<font color="red"><p><b><center>You need a Torrent program to continue!</center></p></font>
				</form>
						<?php
						include 'config/database.php';
						$query = mysql_query("SELECT * FROM howtoconnect WHERE `id` = '1'");
						while($output = mysql_fetch_assoc($query))
						{
							echo '<h3>'.$output['title'].'</h3>';
							echo '<p>'.$output['text'].'</p>';
						}
						?>
		
				</div>
			</div>


</div>
	<div id="right-content">
  <br>
<img src="images/box.png"></div> 

</div>
</div>
<footer>
	<div id="footer">
		<div class="container row">
			<div class="one-third">
<img id="footicon" src="images/links.png"><h3>Support<span> LegionWoW</span></h3>
<a href="http://putavotelinkhere.com">Vote Link 1</a>
<a href="http://putavotelinkhere.com">Vote Link 2</a>
<a href="http://putadonationlinkhere.com">Donate</a>
</div>
<div class="one-third">
<img id="footicon" src="images/links2.png"><h3>Contact<span> Us</span></h3>
<a href="contact@legionwow.com">E-mail</a>
<a href="https://discord.gg/xxxx">Discord</a>
<a href="forum/">Forum</a>
</div>
<div class="one-third about">
<img id="footicon" src="images/about.png">
<h3>Why play on <span>LegionWoW</span> ?</h3>
<p><b>LegionWoW</b> is a professional managed private server, looking to become the best one out there!</p>
</div>
</div>
<div id="footer2">
<div class="container">
<p>Copyright <span>LegionWoW</span> &copy; 2016, Website made by: Brian8544</p>
</div>
</div>
</footer>
</body>
</html>
